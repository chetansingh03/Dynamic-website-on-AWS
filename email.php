<?php
session_start();

global $con;
$con=mysqli_connect('localhost','root');
if($con)
{
    echo"Connection successfull";
}else {
echo"Connection fails";
}
mysqli_select_db($con,'project01');
if(isset($_POST['submit']))
{
    if(!empty($_POST['email']))
    {
;
$email=$_POST['email'];


$query1="insert into emails(email) value('$email') ";

$query3=mysqli_query($con,$query1) or die(mysqli_error());
if($query3)
{
    echo"Form submitted successfully";
}
else{
    echo "Form not submiited";
}
}
}
header('location:index.html');


?>