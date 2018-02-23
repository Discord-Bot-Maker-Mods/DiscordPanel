<?php
include('../Template/config.php');
?>
<?php
$filename = 'sql.sql';
$connection = mysqli_connect($server,$username, $password, $db);
if (mysqli_connect_errno())
    exit(' <link href="../Template/assets/css/bootstrap.min.css" rel="stylesheet" /> <link href="../Template/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" /> <link href="../Template/assets/css/demo.css" rel="stylesheet" /><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></head><style>body { background-color: #282B30 !important;}</style><body> <div> <div> <nav class="navbar navbar-transparent navbar-absolute"> <div class="container-fluid"> <div class="navbar-header"> </div> </div> </nav><body onload="getList()"><div class="mainContainer"><header> <center><h1><font color="white">Install the DiscordPanel Database</font></h1></center></header> <br> <br> <center><p><font color="white">Hmm there seems to be a error here... Go back and try again or check if the database details are right in the config file.</font></p></center></div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <footer class="footer"> <div class="container-fluid"> <nav class="pull-left"> <ul> <li> <a href="index.php"> Home </a> </li> </ul> </nav> <p class="copyright pull-right"> &copy; <script> document.write(new Date().getFullYear()) </script> <a href="index.php">DiscordPanel</a>, made with love for better bot control </p> </div> </footer> </div> </div></body><script src="../Template/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script><script src="../Template/assets/js/bootstrap.min.js" type="text/javascript"></script><script src="../Template/assets/js/material.min.js" type="text/javascript"></script><script src="../Template/assets/js/chartist.min.js"></script><script src="../Template/assets/js/arrive.min.js"></script><script src="../Template/assets/js/perfect-scrollbar.jquery.min.js"></script><script src="../Template/assets/js/bootstrap-notify.js"></script><script src="../Template/assets/js/material-dashboard.js?v=1.2.0"></script><script src="../Template/assets/js/demo.js"></script></html>') . mysqli_connect_error();
// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$fp = fopen($filename, 'r');
// Loop through each line
while (($line = fgets($fp)) !== false) {
	// Skip it if it's a comment
	if (substr($line, 0, 2) == '--' || $line == '')
		continue;
	// Add this line to the current segment
	$templine .= $line;
	// If it has a semicolon at the end, it's the end of the query
	if (substr(trim($line), -1, 1) == ';') {
		// Perform the query
		if(!mysqli_query($connection, $templine)){
			print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error($connection) . '<br /><br />');
		}
		// Reset temp variable to empty
		$templine = '';
	}
}
mysqli_close($connection);
fclose($fp);
    exit(' <link href="../Template/assets/css/bootstrap.min.css" rel="stylesheet" /> <link href="../Template/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" /> <link href="../Template/assets/css/demo.css" rel="stylesheet" /><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></head><style>body { background-color: #282B30 !important;}</style><body> <div> <div> <nav class="navbar navbar-transparent navbar-absolute"> <div class="container-fluid"> <div class="navbar-header"> </div> </div> </nav><body onload="getList()"><div class="mainContainer"><header> <center><h1><font color="white">Install the DiscordPanel Database</font></h1></center></header> <br> <br> <center><p><font color="white">All good! The database was successfully installed</font></p></center></div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <footer class="footer"> <div class="container-fluid"> <nav class="pull-left"> <ul> <li> <a href="index.php"> Home </a> </li> </ul> </nav> <p class="copyright pull-right"> &copy; <script> document.write(new Date().getFullYear()) </script> <a href="index.php">DiscordPanel</a>, made with love for better bot control </p> </div> </footer> </div> </div></body><script src="../Template/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script><script src="../Template/assets/js/bootstrap.min.js" type="text/javascript"></script><script src="../Template/assets/js/material.min.js" type="text/javascript"></script><script src="../Template/assets/js/chartist.min.js"></script><script src="../Template/assets/js/arrive.min.js"></script><script src="../Template/assets/js/perfect-scrollbar.jquery.min.js"></script><script src="../Template/assets/js/bootstrap-notify.js"></script><script src="../Template/assets/js/material-dashboard.js?v=1.2.0"></script><script src="../Template/assets/js/demo.js"></script></html>');
?>