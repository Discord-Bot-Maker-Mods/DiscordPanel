<?php
include('Template/config.php');
?>
<?php
include('Template/top.php');
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
    <meta name="description" content="DiscordPanel, the only free opensource discord bot panel, to help keep your bots online">
    <meta name="keywords" content="HTML,CSS,JavaScript,Discord,Node,JS,DMB,Panel,DiscordPanel">
    <!-- Bootstrap core CSS     -->
    <link href="Template/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="Template/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="Template/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
     <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
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
                    <li>
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
                    <div class="row">
                        <div>
                            <center><h2>Login Error. User: <? echo $_SESSION['username']; ?> Does not have the rights to  use this bot as a admin. Contact the host or edit the config file.</h2></center>
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
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in Template/assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>