<?php
include 'head.php';
if($_POST['submit']){
if($_POST['u_name']=='')
{
    $emailError = 1;
$emailRedirect="contactus.php?emailerror=".$emailError;
header("Location: $emailRedirect");
}
if($_POST['u_msg']=='')
{
    $emailError=2;
    $emailRedirect="contactus.php?emailerror=".$emailError;
    header("Location: $emailRedirect");

}
}
$location="himanshu.rajput32@gmail.com";
$subject="Query";
$message=$_POST['u_msg'];
$from="FROM: ".$_POST['u_name'];
mail($location,$subject,$message,$from);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thanks</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="jumbotron">
<p>Thank You for your feedback we will contact you soon. </p>
</div>
</div>
</body>
</html>