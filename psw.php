<?php
session_start(); 
?>
<html>
<head>
<link rel=stylesheet href=NavigationBar.css>
<style>
.container {
    position: relative;
    width: 250px;
	display:inline-block;
	padding-left: 5px;
	padding-right: 5px;
	text-decoration: none;
}

.image {
  opacity: 1;
  display: inline-block;
  width: 250px;
  transition: .5s ease;
  backface-visibility: hidden;
  text-decoration: none;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-decoration: none;
}

.container:hover .image {
  opacity: 0.3;
  text-decoration: none;
}

.container:hover .middle {
  opacity: 1;
  text-decoration: none;
}

.text {
  background-color: DarkTurquoise;
  color: white;
  font-size: 15px;
  padding: 16px 32px;
  text-decoration: none;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;

</style>
<script src="Scripting.js"></script>
</head>
<body face=sans-serif leftmargin=100px topmargin=50px rightmargin=100px>
<div>
<ul class=nav>
  <li class=nav><a target=Display href="merch1.php">Buy Now</a></li>
  <li class=nav><a target=Display href="sorting1.php">Sorting Hat</a></li>
  <li class=active style="float:right"><a target=Display href="login.php">Profile</a></li>
</ul>
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
</div>
<div style="padding:20px;margin-top:30px;background-color:#1C2833;height:1500px;">

<h1><font face=serif size=8 color="DarkTurquoise">Update Password</font></h1><br>
<hr><br>
<form name=f method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type=text name=p1 placeholder="enter user name">
<input type=password name=p2 placeholder="enter new password">
<input type=submit name=s>
</form>
</div>
<?php
function s()
{
	$servername="localhost";
	$username="root";
	$password="";
	$database="signup";
	$conn=new mysqli($servername,$username,$password,$database);
	
	if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);}
	
	$p=$_POST["p1"];
	$q=$_POST["p2"];
	
	$sql="update info set psw='$q' where usern='$p'";
	
	if($conn->query($sql)===TRUE)
	{
		header('location:login.php');
	}
	else{
		die("Unable to update account");
	}	
	
	$conn->close();
}

if(isset($_POST["s"]))
	s();
?>
</body>
</html>