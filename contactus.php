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
<img src="images/contactus.jpg" class="img-responsive pull-right">
<h2>Contact Us</h2>
<p>ABES Engineering College<br>
Campus -1, 19th KM Stone, NH-24<br>
Ghaziabad, Uttar Pradesh 201009<br>
Phone: 0120-7135112
</p>
<br><br>
<div class="form-group">
<form action="thanks.php" method="post">
<div class="row">
<div class="col-xs-5">
<input type="text" placeholder="Enter Your Name" name="u_name" class="form-control">
</div>
</div>
<?php
      if(isset($_GET['emailerror'])){
        if($_GET['emailerror']==1) {
            echo "Name can not be empty";
        }
	  }
?>
<br>
<textarea placeholder="Enter message here" class="form-control" rows="5" name="u_msg" ></textarea>
<?php
     if(isset($_GET['emailerror'])){
        if($_GET['emailerror'] == 2) {
            echo "Message can not be empty";
        }
	 }
	?>
<br>
<input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>
</div>

</div>
</div>
</body>
</html>