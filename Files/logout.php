<?php
 require "callback/discord.php";
 require "callback/functions.php";
 
session_destroy();
$user_id = array();

header("Location: index.php");

?>