<?php
session_start();

?>
<html>
<head>
<link rel=stylesheet href=NavigationBar.css>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bgimg {
  background-image: url("Hufflepuff.jpg");
  min-height: 1080px;
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.caption {
  position: absolute;
  left: 0;
  top: 45%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color:#262626;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

</style>
<script src="Scripting.js"></script>
</head>
<body face=sans-serif leftmargin=100px topmargin=50px rightmargin=100px>
<div class="bgimg">
	<div class="caption">
    <span class="border" style="font-size:150px;color: #f7f7f7;">HUFFLEPUFF</span>
	<form name=f method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type=submit name=h value="LET'S GO">
  </div>
</div>
<?php
function h(){
	$conn=new mysqli("localhost","root","","signup");

if($conn->connect_error)
	die("Connection failed");

$sql="insert into info values('@($_SESSION[name])','@($_SESSION[email])','@($_SESSION[usern])','@($_SESSION[psw])','@($_SESSION[r1])','@($_SESSION[country])',"Hufflepuff")";

	if($conn->query($sql)===TRUE)
	{
		header('location:login.php');
	}
	else{
		die("Unable to create account");
	}	
	
	$conn->close();
}
if(isset($_POST["h"]))
	h();
?>
</body>
</html>