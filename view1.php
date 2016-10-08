<?php
include 'head.php';
if(!isset($_POST['city'])){
	header("Location:profile.php");
}
require_once "config.php";
$city=$_POST['city'];
session_start();
$_SESSION['user_city1']=$city;
$query="SELECT distinct store_locality FROM `storelist` where store_city='".$city."'";
$resultset=$connection->query($query);
$result=$resultset->fetch_all(MYSQLI_ASSOC);
?>
<html>
<head>
<html>
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<title>Welcome</title>
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
<h2>Please select any locality</h2>
<div class="form-group">
<form action="view2.php" method="post">
<div class="row">
<div class="col-xs-4">
<select name="locality" class="form-control">
<?php
foreach($result as $temp){
	echo '<option value='.$temp['store_locality'].'>'.$temp['store_locality'].'</option>';
}
?>
</select>
</div>
</div>
<br>
<input type="submit" value="Next" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>
