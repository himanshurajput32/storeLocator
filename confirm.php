<?php
include 'head.php';
require_once "config.php";
$query="select * from `userlist`";
$result=$connection->query($query);
$userElements=$result->fetch_all(MYSQLI_ASSOC);
foreach ($userElements as $eMail)
{
      $one=$eMail['user_email'];
    $two=$_POST['u_email'];
     if($one==$two)
        {
          $emailError = 1;
           $emailRedirect="signup.php?emailerror=".$emailError;
            header("Location: $emailRedirect");
        }
}
if(filter_var($_POST['u_email'],FILTER_VALIDATE_EMAIL)===false){
	$emailError=6;
	$emailRedirect="signup.php?emailerror=".$emailError;
	header("Location: $emailRedirect");
}
if($_POST['u_pass']=='')
{
    $emailError = 2;
$emailRedirect="signup.php?emailerror=".$emailError;
header("Location: $emailRedirect");
}
if($_POST['u_email']=='')
{
    $emailError=3;
    $emailRedirect="signup.php?emailerror=".$emailError;
    header("Location: $emailRedirect");

}
if($_POST['u_name']==''){
	$emailError=4;
    $emailRedirect="signup.php?emailerror=".$emailError;
    header("Location: $emailRedirect");
}
if($_POST['u_contact']==''){
	$emailError=5;
    $emailRedirect="signup.php?emailerror=".$emailError;
    header("Location: $emailRedirect");
	}
$hash=md5($_POST['u_pass']);
    $query1=" insert into `userlist`(`user_name`,`user_email`,`user_password`,`user_contact`) values('{$_POST['u_name']}','{$_POST['u_email']}','{$hash}','{$_POST['u_contact']}')";
    $result1=$connection->query($query1);

$location="login.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="jumbotron">
<p>Signup Successful!</p><br>
<a href="login.php">To login click here</a>
</div>
</div>
</body>
</html>


