<?php
include 'head.php';
if(!isset($_POST['locality'])){
	header("Location: profile.php");
}
require_once "config.php";
$locality=$_POST['locality'];
session_start();
$city=$_SESSION['user_city1'];
$_SESSION['user_city11']=$city;
$_SESSION['user_locality1']=$locality;
$query="SELECT distinct store_type FROM `storelist` where store_locality='".$locality."'";
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
<h2>Please select any type</h2>
<div class="form-group">
<form action="result.php" method="post">
<div class="row">
<div class="col-xs-4">
<select name="type" class="form-control">
<?php
foreach($result as $temp){
	echo '<option value='.$temp['store_type'].'>'.$temp['store_type'].'</option>';
}
?>
</select>
</div></div>
</div>
<br>
<input type="submit" value="Next" class="btn btn-primary">
</form>
</div>

</div>
</body>
</html>
