<?php
function s()
{
	$servername="localhost";
	$username="root";
	$password="";
	$database="signup";
	$conn=new mysqli($servername,$username,$password,$database);
	
	$a=$_POST["name"];
	$b=$_POST["email"];
	$c=$_POST["phno"];
	$d=$_POST["c1"];
	$e=$_POST["jjj"];	
	

	if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);}
	
	$sql="insert into info values('$a','$b','$c','$e')";
	
	session_start();
	$_SESSION["name"]=$a;
	$_SESSION["email"]=$b;
	
	
	
	if($conn->query($sql)===TRUE)
	{
		header('location:home.html');
	}
	else{
		die("Unable to create account");
	}	
	
	$conn->close();
}
if(isset($_POST["s"]))
	s();
?>
