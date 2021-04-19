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
<h1><font face=serif size=8 color="DarkTurquoise">Welcome <?php echo @($_SESSION[name]); ?></font></h1><br>
<hr>
<h3><font color="peru">Information:</font></h3>

User name : <?php echo @($_SESSION[usern]); ?><br>
Email : <?php echo @($_SESSION[email]); ?><br>
Country : <?php echo @($_SESSION[country]); ?><br><br>
<form name=f method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type=submit name=out value="Sign Out" style="background-color: red; color: white; padding: 10px 15px; margin: 8px 0; border: none; cursor: pointer; width: 20%; opacity: 0.9; border-radius:4px;">

</form>
</div>
<?php
function out(){
	session_destroy();
	header('location:HomePage.html');
}
if(isset($_POST["out"]))
	out();


?>
</body>
</html>