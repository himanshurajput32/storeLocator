<?php
include 'head.php';
?>
<html>
<head>
<html>
<head>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<title>Contact Us</title>
</head>
<body>
<div class="container">
<div class="jumbotron">
<?php
session_start();
if(isset($_SESSION['user_email']))
{
	echo "Logged in as:".$_SESSION['user_email'];
	echo '<a class="btn btn-success pull-right" href="logout.php">Logout</a>';
}
?>
<img src="images/about.png">
<h2>About Us</h2>
<p>The Store Locator facility on this website is intended to provide consumers looking for their favourite stores such as electronics,garments,restaurants etc the convenience of finding a nearby store. 
The list of stores is<br> indicative and not exhaustive.In case your favourite store is not available in any location, please <a href="contactus.php">click here</a> to let us know. It will help us serve you better.
</p>

</div>
</div>
</body>
</html>