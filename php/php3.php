<?php
function check(){
	$conn=new mysqli("localhost","root","","signup");
	
	if($conn->connect_error)
		die("Connection failed");
	
	$x=$_POST["usern"];
	$y=$_POST["psw"];
	
	$check="select * from info where usern='$x' ";
	
	$result=$conn->query($check);
	
	$a=$b=$c=$d=$e=$f="";
	
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$a=$row["name"];
			$b=$row["email"];
			$c=$row["usern"];
			$d=$row["psw"];
			$e=$row["gender"];
			$f=$row["country"];
			
			if($y===$d){
				session_start();
				$_SESSION["name"]=$a;
				$_SESSION["email"]=$b;
				$_SESSION["usern"]=$c;
				$_SESSION["psw"]=$d;
				$_SESSION["r1"]=$e;
				$_SESSION["country"]=$f;
				
				header('location:merch1.php');
			}
			
			else
			echo "<script language=javascript>alert('Incorrect username or password'); window.open('Homepage.html');</script>";
		}
	}
	
	$conn->close();
}

if(isset($_POST["login"]))
	check();



?>