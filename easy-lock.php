<?php

/*
 * PHP Easy-Lock  -  by artur99
 * Version: 1.4 (Updates: Multiple passwords error fix)
 */

if ((function_exists('session_status') && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    //If the session is not started yet, it will be started
    @session_start();
}

function lock($password = "", $skin = 2, $options = array()) {
    global $tm;
    //Declare variables
    $locked = 1;
    $tries = 30;
    $page = "login";
    $encode = 0;
    $remember_me = 0;

    //Update the skin if it is set
    if (array_key_exists('skin', $options) && intval($options['skin']) > 1) {
        $skin = $options['skin'];
    }

    //Update the password if it is set
    if (array_key_exists('password', $options)) {
        $password = $options['password'];
    }

    //If there is, set a max num of tries
    if (array_key_exists('tries', $options) && intval($options['tries']) > 1) {
        $tries = $options['tries'];
    }

    //If there are, set the IPs that can bypass
    if (array_key_exists('bypass', $options) && is_array($options['bypass']) && in_array(@$_SERVER['REMOTE_ADDR'], $options['bypass'])) {
        $_SESSION['easylock'] = $password;
        $locked = 0;
    }

    //If there are, set the denied IPs
    if (array_key_exists('deny', $options) && is_array($options['deny']) && in_array($_SERVER['REMOTE_ADDR'], $options['deny'])) {
        $_SESSION['easylock'] = $_POST['password'] = false;
        $_SESSION['tries'] = $tries + 1;
        $page = "block";
    }

    //If the user exceed the maximum number of tries
    if (isset($_SESSION['tries']) && $_SESSION['tries'] > $tries) {
        $_SESSION['easylock'] = $_POST['password'] = false;
        $page = "block";
    }

    //If there's no token, generate a token
    if (!isset($_SESSION['csrftoken'])){
        $_SESSION['csrftoken'] = str_shuffle(time().microtime(true).join(range('a', 'm')).'easylockkey');
    }
    $csrftoken = $_SESSION['csrftoken'];

    //Getting sure the hash is lowercase
    if (array_key_exists('sha512', $options) && $options['sha512']){
        $password = strtolower($password);
    }
    
    //Generate encoded passwords, if case
    if(!(array_key_exists('sha512', $options) && $options['sha512']) && !(array_key_exists('md5', $options) && $options['md5'])){
        if(is_array($password)){
            foreach($password as $key => $val){
                $password_enc[$key] = hash('sha512', $val);
            }
        }else{
            $password_enc = hash('sha512', $password);
        }
    }

    //If the user typed the password before, and there's an active session
    if (
        isset($_SESSION['easylock']) && $page != "block" &&
        (is_array($password_enc) && in_array($_SESSION['easylock'], $password_enc) || $password_enc == $_SESSION['easylock'])
    ) {
        $locked = 0;
    }

    //If there was any cookie set to keep the user logged in
    elseif (
        array_key_exists('remember_me', $options) && $options['remember_me'] && isset($_COOKIE['easylock']) && $page != "block" &&
        (is_array($password_enc) && in_array($_COOKIE['easylock'], $password_enc) || $password_enc == $_COOKIE['easylock'])
    ) {
        $locked = 0;
    }

    //If the user submited the password form
    elseif (isset($_POST['password']) && $page != "block") {

        //If the sha512(or md5 as fallback) mode is active
        if (array_key_exists('sha512', $options) && $options['sha512']) {
            $_POST['password'] = hash('sha512', $_POST['password']);
            $encode = 'sha512';
        } elseif (array_key_exists('md5', $options) && $options['md5']) {
            $_POST['password'] = hash('md5', $_POST['password']);
            $encode = 'md5';
        }

        if (!isset($_SESSION['csrftoken']) || !isset($_POST['csrftoken']) || $_SESSION['csrftoken'] != $_POST['csrftoken']){
            //If the CSRF token wasn't sent
            $page = "badtoken";
        } elseif (is_array($password) && in_array($_POST['password'], $password) || $_POST['password'] == $password) {
            //If the user typed the password correctly
            $_SESSION['easylock'] = $_POST['password'];
            $_SESSION['tries'] = 0;
            $locked = 0;
            //Set a cookie for 30 days if needed
            if(array_key_exists('remember_me', $options) && $options['remember_me']){
                $tmppw = $_POST['password'];
                if (!(array_key_exists('sha512', $options) && $options['sha512']) && !(array_key_exists('md5', $options) && $options['md5'])){
                    $tmppw = hash('sha512', $_POST['password']);
                }
                
                setcookie("easylock", $tmppw, time()+3600*24*30);
            }
        } else {
            if (isset($_SESSION['tries'])) {
                $_SESSION['tries']++;
            } else {
                $_SESSION['tries'] = 1;
            }
            $page = "wrong";
        }
    }
    if ($locked) {
        $err = "";
        if ($page == "wrong" || $page == "block" || $page == "badtoken") {
            //Class name for input and message
            $err = " wrong";
        }
        //Skin data -BEGIN
        $form = $header = $footer = $head = $formheader = $bg = $style = '';
        $favicon = '<link rel="shortcut icon" href="https://discordapp.com/assets/07dca80a102d4149e9736d4b162cff6f.ico">';
        if ($skin == 1) {
            //Skin 6 - Simple field
            $font = "Open Sans"; //Google Fonts
            $bg = 'background-image: url("https://i.imgur.com/eS4IxK3.png"); background-repeat:no-repeat; background-size:cover; background-position:center';
            $head = '<link href="http://fonts.googleapis.com/css?family=' . $font . ':500,300,400" rel="stylesheet" type="text/css">';
            $font = "'" . $font . "'";

            $style.='body{color:#525252;font-family:' . $font . ',sans-serif;}*{box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;}';
            $style.='.box{display:block;width:100%;max-width:280px;height:50px;margin:auto;background:white;border:4px solid #18944D;border-radius:25px;overflow:hidden;margin-top:250px;}';
            $style.='@media(max-height:500px){.box{margin-top:190px;}}';
            $style.='@media(max-height:400px){.box{margin-top:140px;}}';
            $style.='@media(max-height:300px){.box{margin-top:90px;}}';
            $style.='@media(max-height:200px){.box{margin-top:50px;}}';
            $style.='@media(min-height:800px){.box{margin-top:380px;}}';
            $style.='label,.error{display:none;}';
            $style.=".submit{display:block;overflow:hidden;font-size:0;line-height:0;float:right;width:36px;height:36px;margin:2px;margin-right:7px;border:0;cursor:pointer;outline:none!important;transition:.2s all;border-radius: 20px; background-position: center; background-color: white; background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAATlSURBVHja7JjPbxRlGMe/z/u+M7M721IpP6RTYYEDbU0oP8REYjmYePBk4gkvJkYvRkKMiVH0ov+AF28GPHoyCiGRxIgkJSZqPEjBRqSAEAOh7E7ZdWd/zMz7vo+HXUoboWzpbotJn8xh3szMO5/5Pt953+d9aeib1/H4hcBjGatYq1irWI9DqGV7E885pxXHIiBm0pZpDosicohXDIuAiqU9fvLaJisg2WqApaAfSzg+k/HESmAREBna5SefD9nAFnH7T/RvxRNbkdysVOKvsMODWQHLVwyN+skXIxyYMJoarxnWfqCrRYSTsU4XNli31IoMjfrJ0RHepAvR1LjoG3TzY0hCLl0ANEisgOUjQ7tyybFhHtDFaGpcrgmc/BjFoSxPgDUkJHi5sZp+OjZsm0xiTeBsPUBJmNz5/WbqMfmu0UXjCSzjn9jM3bERHkiL0ZW7uYtDWZq4pd2Dt/fHLBU4hcgKs0xYLaZhHtCF6PLZZu5afmLNyNZYNVhKMAHLpFZkaZefHB3mwLQ87uTHEM+o8jkggaQeqyW4eXRr8uH508g9nUzLT25+jJIZlCZOVTde0z0e2RnrWBC1179aLE1sKWEosEOsQZrJMPbm0qNDZsCE0dS46Avc/AHEIZfOS06/jPLf1gZ8MgLcI7RoQ6rFYdUtKdhncun+XrM5g/XKlI28XMf1Bh3J86CoRZfONpkoCVE6T6yJRI7MGpH6ZDpfQTBQM/Rcb3I4SJ/vg5QEECBbFy2DRJoqJ9gr125DHNrSBbaGSALMj2QS1Q5T3eLNjfUP89ZTwlroeV9OBDAzSU+uH0JjWpUnTtfWfVYecskI4C+dy5DtPFbV0BsbG59st2ChzYPtTxKNW1yaBNKizf4S92fIEOCSbdNPi8BqWNqXSz7aYpiFWaBzUkiKXJqE1ZDCgc2QaWJ1vmhmgMCHgzTjPIwpvstEAkCdFS9tFFwIK2EayeqxPrCdrSqh6H46lVtMBFgrv6s9SW1Uxo+KZbGvx3gOmlJJQiExNxpGiQfqBECQzauqYeqWWgQOvNY9klBI7KsXvZcms2dCoyS3mMrzmBgA8Q43ou4lURL6ZSt/JHCuwpfqqmLkoav+mRBKT2M+02xkyQhi7hKWYYRGzjZLmgQhIzhmceiKf+LvskJM96szK1YZpm55i0E3GgzYZmNbBgLMgEscM94Ln/66ukWR/u+DV9JcF1fVnsDPkawlkATL2NmLZ3tsZAQAl5hZfBDuPFUbVHPmOwmuGffXuN9d/MjeLpZDPFVXP9wBCbaMjFIfB+FTqla2TsyCgYL2ztQ2EO79dULo0/UNl9JeZ2lYcv3B3Qss9CzocoNeXqt9x9WNcFP9wovZaUmsIfpE+kK28Hbf1X6ZWhAAh2zJeO+HozPWVbSkAZUeundatfRKf/rp5mnnnz8SY1wBgGNWhuELAyBl0WTSwLuF3Sdqg7n7Ga7DOzY5wcdn3LemvJupcqUFSLNUsB5ZzUKzUMSO0EXjvlPYc6LaAaaHJHE2XOKLae/39QEJBLLeK1MhjCAWZAX4jnFPVoMj4ehP8bqc6ABTW0mcM0WKFLRZ1vd4pe1OtYd0leX11P8tWXtN+xLsLc3mj1g0u2RdYNp4J2uBZRDAgCC4sIutiTu/8nGIHWgQuhqre6erWKtYq1j/N6x/BwDvsYWRvrsFRAAAAABJRU5ErkJggg=='); background-size: 100%;}";
            $style.='.submit:hover{transform:rotate(45deg);}';
            $style.='#password{-webkit-appearance:none;width:75%;border:none;height:36px;margin-top:2px;margin-left:13px;outline:none!important;font-size:14px;font-family:' . $font . ',sans-serif;}';
            $style.='.wrong.box{border:4px solid #F55645;}';
			$header = '<link rel="stylesheet" href="typewriter.css"><p class="line-1 anim-typewriter">Please enter a password!</p>';
        }
        //Skin data -END
        //Form Template -BEGIN
        $sub1 = '';
        $sub2 = ' autofocus';
        if ($page == "block") {
            $sub1 = $sub2 = ' disabled';
        }
        $form ='<form action="" method="POST" class="box' . $err . '">';
        $form.=$formheader;
        $form.='<label for="password">Password:</label>';
        $form.='<input type="password" name="password" id="password" placeholder="Type the password..." ' . $sub2 . '>';
        if ($page == "block") {
            $form.='<span class="error">You are blocked!</span>';
        } elseif ($page == "badtoken"){
            $form.='<span class="error">Wrong token! Please activate/reset your cookies.</span>';
        } else {
            $form.='<span class="error">Wrong password! Please try again!</span>';
        }
        $form.='<input type="hidden" name="csrftoken" value="'.$csrftoken.'">';
        $form.='<input type="submit" value="Unlock" class="submit"' . $sub1 . '>';
        $form.='</form>';

        $style = "body{ $bg background-attachment:fixed;background-position:center top;}" . $style;
        $body = $header . $form . $footer;
        //Form Template -END
        echo '<!DOCTYPE html><html><head>' . $favicon . '<title>Discord Bot Panel Locked...</title><meta name="viewport" content="width=device-width, user-scalable=no"><style>' . $style . '</style>' . $head . '</head><body>' . $body . '</body></html>';
        exit();
    }
}
