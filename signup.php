<?php
include 'head.php';
?>

<html>
<head>
<title>Sign Up</title>
<html>
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2>Sign Up Here</h2>
<div class="jumbotron">
<h3>Please Enter Your Details</h3>
<div class="form-group">
<form method="post" action="confirm.php">
<div class="row">
<div class="col-xs-5">
<input type="text" placeholder="Enter name here" name="u_name" class="form-control">
</div>
</div>
<br>
<?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 4) {
            echo "Name can not be empty";
        }
    }
?>
<div class="row">
<div class="col-xs-5">
<input type="text" placeholder="Enter contact no. here" name="u_contact" class="form-control">
</div>
</div>
<br>
<?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 5) {
            echo "Contact can not be empty";
        }
    }
?>
<div class="row">
<div class="col-xs-5">
<input type="text" placeholder="Enter email here" name="u_email" class="form-control">
</div>
</div>
<br>
<?php
    if(isset($_GET['emailerror']))
    {
        if($_GET['emailerror']==1)

    {
    echo "E-mail already taken";
    }
        if($_GET['emailerror']==3)
            echo "E-mail cannot be empty";
		if($_GET['emailerror']==6)
			echo "E-mail is not valid";
    }
    ?>
	<div class="row">
<div class="col-xs-5">
<input type="password" placeholder="Enter password here" name="u_pass" class="form-control">
</div></div>
<br>
 <?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 2) {
            echo "password can not be empty";
        }
    }
?>
   <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
   <input type="reset" name="reset" value="Reset" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>