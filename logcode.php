<?php
$login=$_POST['login'];
if(isset($login)) 
{
$userid=$_POST['userid'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","webdb");
$query="select * from registration where emailaddress='$userid'and passwd='$password'";
$res=mysqli_query($con,$query);
$number_of_rows=mysqli_num_rows($res);
if($number_of_rows>0)
{
	echo"<script>alert('User loged!');
		window.location.href='home.php';</script>";
		
	#echo"success";
}
else
{
	echo"<script>alert('wrong user try to login');
	window.location.href='login1.php';</script>";
	//echo"failed";
}
}


?>