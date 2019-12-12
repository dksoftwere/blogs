<?php
$submit=$_POST['submit'];
if(isset($submit))
{
$name=$_POST['name'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$emailaddress=$_POST['emailaddress'];
$passwd=$_POST['passwd'];
$mobileno=$_POST['mobileno'];
$address=$_POST['address'];
$con=mysqli_connect("localhost","root","","webdb");
if($con)
{
	$query="insert into registration(name,lname,fname,gender,emailaddress,passwd,mobileno,address)values('$name','$lname','$fname','$gender','$emailaddress','$passwd','$mobileno','$address')";
	$check=mysqli_query($con,$query);
	if($check)
	{
		echo"<script>alert('Registration successfull!');
		window.location.href='home.php';</script>";
		//echo"Registration successfull";
	}
	else
	{
		echo"error".mysqli_error($con);
	}
}
}
else
{
echo"Your are going wrong path";
}

?>