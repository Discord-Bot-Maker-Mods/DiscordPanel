<?php
include('../Template/config.php');
?>
<?php

/* Discord Oauth v.3.0
 * Velocity Bot Dashboard Login
 * @owner : Rijuth Menon A.K.A Markis
 * @copyright : https://rijuthmenon.me | https://markis.pw
 */
 
 // Let's show errors
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 
 // Let's include our Oauth script and functions
 require "discord.php";
 require "functions.php";

 
 // Let's initialize the required variables for Oauth via script
 init("", "$redirectURI", "$clientID", "$clientSecret");
 
 // Let's get users details via script
 get_user();
 
 // Let's get users guilds via script
 $_SESSION['guilds'] = get_guilds();
 
 // Let's redirect to home page when all data has been collected
  redirect("../index.php");
  ?>
 
 