<?php
include 'head.php';
session_start();
if(isset($_SESSION['user_email'])){
	$location="profile.php";
	header("Location: $location");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
<html>
<head>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	</head>
<body>
<div class="container">
<div class="jumbotron">
<h2>Login Here</h2>
<div class="form-group">
<form method="post" action="login.php">
    <label for="email">Enter your E-mail:</label>
	<div class="row">
	<div class="col-xs-5">
    <input id="email" type="text" name="u_email" placeholder="Enter email here" class="form-control" />
	</div>
	</div>
    <label for="password">Enter your password:</label>
	<div class="row">
	<div class="col-xs-5">
    <input id="password" type="password" name="u_pass" placeholder="Enter Password here" class="form-control"/>
	</div>
	</div>
    <?php
    if(isset($_GET['error']))
    {
        if($_GET['error']==1)
    echo "E-mail or Password Incorrect";
    }
    ?>
	<br>
    <input type="submit" value="Log In" class="btn btn-primary"/>
	<a class="btn btn-primary" href="signup.php">Register Now</a>
    </form>
	</div>
</div>
</div>
	</body>
</html>
<?php
require_once "config.php";
$query="select * from `userlist`";
$result=$connection->query($query);
$list=$result->fetch_all(MYSQLI_ASSOC);

if($_POST) {
    foreach ($list as $element) {
        if (($element['user_email'] == $_POST['u_email']) && ($element['user_password'] == md5($_POST['u_pass'])))
        { 
	        session_start();
			$_SESSION['user_email']=$element['user_email'];
			$_SESSION['user_name']=$element['user_name'];
            $location = "profile.php";
            header("Location: $location");
        }
        else{
            $error=1;
            $location1="login.php?error=".$error;
            header("Location: $location1");
        }
    }
}
?>