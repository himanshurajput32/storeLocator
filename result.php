<?php
include 'head.php';
if(!isset($_POST['type'])){
	header("Location: profile.php");
}
require_once "config.php";
session_start();
$type=$_POST['type'];
$locality=$_SESSION['user_locality1'];
$city=$_SESSION['user_city11'];
$query="SELECT * FROM `storelist` where store_type='".$type."' AND store_locality='".$locality."' AND store_city='".$city."'";
$resultset=$connection->query($query);
$result=$resultset->fetch_all(MYSQLI_ASSOC);
?>
<html>
<head>
<html>
<head>
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
<h2>List of Stores</h2>
<?php
foreach($result as $temp){
	echo '<h3><u>'.$temp['store_name'].'</u></h3>';
	echo '<p><b style="color:red">Contact:</b>    '.$temp['store_contact'].'</p>';
	echo '<p><b style="color:red">Address:</b>    '.$temp['store_address'].'</p>';
	echo "-------------------------------------------------------------------------------------------------------------------------------------------------------";
	echo "<br>";
}
?>
</div>
</div>
</body>
</html>
