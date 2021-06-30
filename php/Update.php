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

<h1><font face=serif size=8 color="DarkTurquoise">Update Information</font></h1><br>
<hr><br>
<form name=f method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type=submit name=name value="Change Name" style="background-color: #ddd; color: black; padding: 10px 15px; margin: 8px 0; border: none; cursor: pointer; width: 10%; opacity: 0.9; border-radius:4px;">
<br>
<input class=submit type=submit name=email value="Change Email" style="background-color: #ddd; color: black; padding: 10px 15px; margin: 8px 0; border: none; cursor: pointer; width: 10%; opacity: 0.9; border-radius:4px;">
<br>
<input type=submit name=psw value="Change Password" style="background-color: #ddd; color: black; padding: 10px 15px; margin: 8px 0; border: none; cursor: pointer; width: 10%; opacity: 0.9; border-radius:4px;">
<br>
<input type=submit name=country value="Change Country" style="background-color: #ddd; color: black; padding: 10px 15px; margin: 8px 0; border: none; cursor: pointer; width: 10%; opacity: 0.9; border-radius:4px;">
<br>
</form>
</div>
<?php
function name(){
	echo "<script language=javascript>window.open('name.php')</script>";
	//header('location:name.php');
}

if(isset($_POST["name"]))
	name();

function email(){
	header('location:email.php');
}

if(isset($_POST["email"]))
	email();

function psw(){
	header('location:psw.php');
}

if(isset($_POST["psw"]))
	psw();

function country(){
	header('location:country.php');
}

if(isset($_POST["country"]))
	country();
?>
	
</body>
</html>