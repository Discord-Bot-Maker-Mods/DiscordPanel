<?php
include('config.php');
?>

<?
/* Discord OAuth Check */

/* Home Page
 * @owner : Rijuth Menon A.K.A Markis
 * @copyright : https://rijuthmenon.me | https://markis.pw
 * #MarkisHome ------> CUSTOM CODES <---------
 */
 
 // Let's show errors
 error_reporting(E_ALL);
 ini_set('display_errors', 0);
 
 // Let's include our Oauth script and functions script
 require "callback/discord.php";
 require "callback/functions.php";

 if (empty($_SESSION['user_id'])) {
    header("Location: https://discordapp.com/api/oauth2/authorize?client_id=" . $clientID . "&redirect_uri=" . $redirectURI . "&response_type=code&scope=identify%20guilds");
    die();

 }else{
     /* Do Nothing */
 }

?>
<title><?php echo $brandname; ?> - <? echo $_SESSION['username'];?></title>
