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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
body {
    background-color: #282B30 !important;
}
</style>
<body>
    <div>
        <div>
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?php echo $brandname; ?></a>
                    </div>
                </div>
            </nav>
<body onload="getList()">
	<div class="mainContainer">
		<header>
		  <center><h1><font color="white">Report A Bug</font></h1></center>
		</header>
<script>
  function checkForm(form)
  {
    ...
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }
</script>
		<div class="container" ... onsubmit="return checkForm(this);">
			<label>Report A Bug To Us</label>
			<input class="form-control" type="text" id="user" placeholder="Write something here...">
            <button type="button" class="btn btn-primary buttonArea" onclick="addUser(); loadPage();">Submit</button>
            <br>
            <br>
            <p id="myBtn"><font color="white">Clicking Submit means you agree to our Terms. You can read them by clicking me!</font></p>
		</div>
		<div class="container list-group">
			<hr>
			<label>Reported Bugs:</label>
			<ul id="userList"></ul>
		</div>
	</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php echo $terms; ?></p>
  </div>
</div>
<script>
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="scriptbugsreported.js"></script>
</body>
           <br>
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
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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