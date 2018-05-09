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
                        <a class="navbar-brand" href="#">Welcome, <? echo $_SESSION['username'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script language="JavaScript">
var Quotation=new Array() 
Quotation[0] = "Did you know we spent too long making this!";
Quotation[1] = "Apple, Apple and more Apple helped us!";
Quotation[2] = "Am I a preloader or a waste of space?";
Quotation[3] = "I don't like coffee but its still my best mate!";
Quotation[4] = "I lost a total of 12 brain cells making this line!";
Quotation[5] = "Spotify, Eh NAH! The news is my thing!";
Quotation[6] = "What else am I meant to put here?";
Quotation[7] = "DiscordPanel V2 out now :P";
Quotation[8] = "Did Bill Gates help DiscordPanel?";
Quotation[9] = "Why won't discord let us join the partner team :( ?";
var Q = Quotation.length;
var whichQuotation=Math.round(Math.random()*(Q-1));
function showQuotation(){document.write(Quotation[whichQuotation]);}
showQuotation();

</script>

                        </a>
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
                                        <a href="logout.php">Logout <? echo $_SESSION['username']; ?></a>
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