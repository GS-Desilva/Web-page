<?php
include_once'connection.php';
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$cnum=$_POST['cnum'];
$comments=$_POST['comments'];
$mail=$_POST['mail'];

$insert="INSERT INTO details VALUES('$uname','$cnum','$comments','$mail');";

if(mysqli_query($con,$insert))
{
echo"values inserted";
}
else
{
echo"values insertion failed".mysqli_error($con);
}
}
?>