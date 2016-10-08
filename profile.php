<?php
include 'head.php';
session_start();
if(!isset($_SESSION['user_email'])){
	$location="login.php";
	header("Location: $location");
}
?>
<html>
<head>
<html>
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<title>Home</title>
</head>
<body>
<div class="container">
<div class="jumbotron">
<?php
if(isset($_SESSION['user_email']))
{
	echo "Logged in as:".$_SESSION['user_email'];
	echo '<a class="btn btn-success pull-right" href="logout.php">Logout</a>';
}
?>
<h2>Welcome Back</h2>
<h3>Please select Any city</h3>
<div class="form-group">
<form action="view1.php" method="post">
<div class="row">
<div class="col-xs-4">
<select name="city" class="form-control">
<option value="Delhi">Delhi</option>
<option value="Mumbai">Mumbai</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Banglore">Banglore</option>
<option value="Pune">Pune</option>
</select>
</div></div>
<br>
<input type="submit" class="btn btn-primary" value="Next">
</form>
</div>
</div>
</div>
</body>
</html>