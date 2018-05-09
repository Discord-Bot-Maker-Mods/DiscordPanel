<?php
include('Template/top.php');
?>
<?php
include('Template/config.php');
?>
<?php
include('Net/SSH2.php');

#Log in
$ip = "$bot4IP";
$user = "$bot4User";
$password = "$bot4Password";

$ssh = new Net_SSH2($ip);
if (!$ssh->login($user, $password)) {
    exit('<!DOCTYPE html><html><style>body {background: #fff;font: 16px Georgia, serif;line-height: 1.3;margin: 0;padding: 0;}#content {background: #fff url(/wp-content/dberror.png) no-repeat left top;height: 225px;margin: 80px auto 0;padding: 75px 50px 0 300px;width: 375px;}h1 {font-size: 34px;font-weight: normal;margin-top: 0;}p {margin: 0 0 10px 5px;}</style><div id="content"><h1>A error has arrived...</h1><p>Looks like the server login details do not work...</p><p>No need to worry though! Its fixable!<p><p>You can try these steps to fix it:<p> <ul><li>Check config file to see if there there</li><li>See if the login details are right</li><li>Check if the server is up and working</li></ul> <p>If none of these work join the offical discord server for support:<a href="https://discord.gg/q2RDufd"> Here</a>.<p></div>');
}
?>
<?php
if(!empty($_POST['lobby-stop'])) { #Watch if the button is pressed
    $ssh->exec('killall -9 node'); #Execution in SSH
}

if(!empty($_POST['lobby-restart'])) { #Watch if the button is pressed
    $ssh->exec('cd /$bot4location; node bot.js'); #Execution in SSH
}
?>
<? 

/* DISCORD OAUTH */

$json = file_get_contents('Template/bot4Owners.json');

$owners = json_decode($json, true);

if (is_array($owners)) {

    foreach ($owners as $obj) {

        $ownerID = $obj['id'];

        if ($_SESSION['user_id'] == $ownerID) {

            $x = 1;
    
        }else{

        }   
    }
}

if($x == 1){

}else{

    $x = 0;
    header("Location: error.php");
    die();   

}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="Template/assets/img/apple-icon.png" />
    <link rel="icon" href="https://discordapp.com/Template/assets/07dca80a102d4149e9736d4b162cff6f.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $brandname; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="Template/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="Template/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="Template/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="Template/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="index.php" class="simple-text">
                    <?php echo $brandname; ?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>Main</p>
                        </a>
                    </li>
                    <li>
                        <a href="bot1.php">
                            <i class="fas fa-user"></i>
                            <p><?php echo $bot1; ?></p>
                        </a>
                    </li>
                    <li>
                        <a href="bot2.php">
                            <i class="fas fa-user"></i>
                            <p><?php echo $bot2; ?></p>
                        </a>
                    </li>
                    <li>
                        <a href="bot3.php">
                            <i class="fas fa-user"></i>
                            <p><?php echo $bot3; ?></p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="bot4.php">
                            <i class="fas fa-user"></i>
                            <p><?php echo $bot4; ?></p>
                        </a>
                    </li>
                    <li>
                        <a href="todolist.php">
                            <i class="fas fa-th-list"></i>
                            <p>To Do List</p>
                        </a>
                    </li>
                    <li>
                        <a href="bugs.php">
                            <i class="fas fa-bug"></i>
                            <p>Bugs</p>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a href="https://discord.gg/q2RDufd">
                            <i class="fas fa-cogs"></i>
                            <p>Support</p>
                        </a>
                    </li>
                    <li>
                        <a href="credits.php">
                            <i class="fas fa-align-center"></i>
                            <p>Credits</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<?php
include('Template/header.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title"><?php echo $bot4; ?></h4>
                                </div>
                                <div class="card-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About <?php echo $bot4; ?></label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"><?php echo $Bot4about; ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<form method="post" action=""> 
<input type="submit" name="lobby-stop" value="Stop" />
<input type="submit" name="lobby-restart" value="Start" />
</form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="<?php echo $bot4image; ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray"><?php echo $bot4; ?></h6>
                                    <h4 class="card-title"><?php echo $Bot4smalldetail; ?></h4>
                                    <a href="https://discordbots.org/bot/<?php echo $bot4ID; ?>" class="btn btn-primary btn-round">DISCORDBOTS URL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
include('Template/footer.php');
?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="Template/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="Template/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Template/assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="Template/assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="Template/assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="Template/assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="Template/assets/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="Template/assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="Template/assets/js/demo.js"></script>

</html>