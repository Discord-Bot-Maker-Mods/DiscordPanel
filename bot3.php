<?php
include('Net/SSH2.php');

#Log in
$ip = "#";
$user = "root";
$password = "#";

$ssh = new Net_SSH2($ip);
if (!$ssh->login($user, $password)) {
    exit('Login Failed');
}
?>

<?php
if(!empty($_POST['lobby-stop'])) { #Watch if the button is pressed
    $ssh->exec('cd /CMBADMIN; forever stop bot.js'); #Execution in SSH
}

if(!empty($_POST['lobby-restart'])) { #Watch if the button is pressed
    $ssh->exec('cd /CMBADMIN; forever start bot.js'); #Execution in SSH
}
?>
<script>
if( document.cookie.indexOf("easylock") < 0) {
    location.href = "login.php";
}
</script>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" href="https://discordapp.com/assets/07dca80a102d4149e9736d4b162cff6f.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DiscordPanel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="index.php" class="simple-text">
                    DiscordPanel
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
                            <p>Bot1</p>
                        </a>
                    </li>
                    <li>
                        <a href="bot2.php">
                            <i class="fas fa-user"></i>
                            <p>Bot2</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="bot3.php">
                            <i class="fas fa-user"></i>
                            <p>Bot3</p>
                        </a>
                    </li>
                    <li>
                        <a href="bot4.php">
                            <i class="fas fa-user"></i>
                            <p>Bot4</p>
                        </a>
                    </li>
                    <li>
                        <a href="todolist.php">
                            <i class="fas fa-th-list"></i>
                            <p>To Do List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">DiscordPanel</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-user"></i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="signout.php">Log Out</a>
                                    </li>
                                    <li>
                                        <a href="https://discordbots.org/bots/BOTIDHERE">BOT Profile</a>
                                    </li>
                                    <li>
                                        <a href="https://discordbots.org/bots/BOTIDHERE">BOT Profile</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Bot3</h4>
                                </div>
                                <div class="card-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Bot3</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Write what you want!</label>
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
                                        <img class="img" src="IMAGEURL" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">Bot3</h6>
                                    <h4 class="card-title">Main bot v3</h4>
                                    <a href="https://discordbots.org/bot/YOURBOTID" class="btn btn-primary btn-round">DISCORDBOTS URL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="index.php">
                                    Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="index.php">DiscordPanel</a>, made with love for better bot control
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>