<?php
session_start();


global $con;
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'project01');
if(isset($_POST['submit']))
{
$username=  isset($_POST['fname']) ? $_POST['fname']:'';


$password=isset($_POST['fpass']) ? $_POST['fpass']:'';



$query2="select username,password from signup where username='$username' AND password='$password'";
$query3=mysqli_query($con,$query2);
$num=mysqli_num_rows($query3);

if($num>0)
{
    echo"Successfull connection";
    $q="insert into login(fname,fpass)values('$username','$password')";
    mysqli_query($con,$q);
    header('location:index.html');
}
else
{
   
    echo"Incorrect username or password!";
    
}

} 
?>



