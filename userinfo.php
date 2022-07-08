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
    if(!empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['confirm']))
    {
$username=  $_POST['username'] ;
$email=$_POST['email'];

$password=$_POST['password'];
$confirm=$_POST['confirm'];


$query1="insert into signup(username,email,password,confirm)values('$username' ,'$email' ,'$password' ,'$confirm') ";

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