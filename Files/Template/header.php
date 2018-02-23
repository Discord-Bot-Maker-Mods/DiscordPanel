<?php
include('config.php');
?>
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
                        <a class="navbar-brand" href="#"></a>
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
                                        <a href="https://discordbots.org/bot/<?php echo $bot1ID; ?>"><?php echo $bot1; ?> Profile</a>
                                    </li>
                                    <li>
                                        <a href="https://discordbots.org/bot/<?php echo $bot2ID; ?>"><?php echo $bot2; ?> Profile</a>
                                    </li>
                                    <li>
                                        <a href="https://discordbots.org/bot/<?php echo $bot3ID; ?>"><?php echo $bot3; ?> Profile</a>
                                    </li>
                                    <li>
                                        <a href="https://discordbots.org/bot/<?php echo $bot4ID; ?>"><?php echo $bot4; ?> Profile</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>