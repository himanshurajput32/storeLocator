<?php
include 'head.php';
?>
<html>
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="css/js-image-slider.js" type="text/javascript"></script>
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
<marquee><h2 style='color:red'>Welcome To Store Locator</h2></marquee>
<div id="sliderFrame">
        <div id="slider">
                <img src="images/index1.jpg" alt="Welcome to Store Locator" />
            <img src="images/index2.jpg" />
			<img src="images/index3.jpg" />
			<img src="images/index4.jpg" />
			<img src="images/index5.jpg" />
			<img src="images/index6.jpg" />
            </div>
    </div>

	
</div>
</div>
</body>

</html>