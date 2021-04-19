<?php
session_start();
?>
<html>
<head>
<link rel=stylesheet href=NavigationBar.css>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    height: 400px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.photo{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    width: 300px;
    position: relative;
	top: 180px;
	color: black;
	background-color: white;
}

.img{
	max-width: 300px;
}

/* Create two equal columns that floats next to each other 
.column {
    float: left;
    width: 2px;
    height: 400px;
}

</style>
<script src="Scripting.js"></script>
</head>
<body face=sans-serif>

<div>
<ul>
  <li class="active"><a target=Display href="merch1.php">Buy Now</a></li>
  <li class=nav><a target=Display href="sorting1.php">Sorting Hat</a></li>
  <li class=nav style="float:right"><a target=Display href="login.php">Profile</a></li>
</ul>
</div>

<div style="padding:20px;margin-top:30px;background-color:#1C2833;height:1500px;">

<h1><font face=serif size=8 >Hello <?php echo @($_SESSION[name]); ?></font></h1>
<hr align="left" noshade color=DarkTurquoise width="100%" size="1">
<br>
<h3>Only one item per order is allowed.</h3>
<center>
	<div class="row">
		<div class="column">
			<div class="photo" style="width:300px">
			<img src="Book1.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Philosopher's Stone</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Philosopher's Stone"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 250</p></strike>
			<p>Rs. 200</p>
			<form><input type=text style="display:none" id="cost" value=200></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>

		<div class="column">
			<div class="photo">
			<img src="Book2.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Chamber Of Secrets</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Chamber Of Secrets"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 280</p></strike>
			<p>Rs. 230</p>
			<form><input type=text style="display:none" id="cost" value=230></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
		
		<div class="column">
			<div class="photo">
			<img src="Book3.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Prisoner Of Azkaban</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Prisoner of Azkaban"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 350</p></strike>
			<p>Rs. 300</p>
			<form><input type=text style="display:none" id="cost" value=300></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	<div class="row">
		<div class="column">
			<div class="photo">
			<img src="Book4.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Goblet Of Fire</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Goblet Of Fire"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 510</p></strike>
			<p>Rs. 460</p>
			<form><input type=text style="display:none" id="cost" value=460></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>

		<div class="column">
			<div class="photo">
			<img src="Book5.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Order Of The Phoenix</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Order Of The Phoenix"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 670</p></strike>
			<p>Rs. 620</p>
			<form><input type=text style="display:none" id="cost" value=620></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
		
		<div class="column">
			<div class="photo">
			<img src="Book6.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Half Blood Prince</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Half Blood Prince"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 560</p></strike>
			<p>Rs. 510</p>
			<form><input type=text style="display:none" id="cost" value=510></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	<div class="row">
		<div class="column">
			<div class="photo">
			<img src="Book7.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Deathly Hallows</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Deathly Hallows"></form>
			<p>Paperback</p>
			<form><input type=text style="display:none" id="type" value=paperback></form>
			<strike><p>Rs. 410</p></strike>
			<p>Rs. 360</p>
			<form><input type=text style="display:none" id="cost" value=360></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>

		<div class="column">
			<div class="photo">
			<img src="merch1a.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Philosopher's Stone</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Philosopher's Stone"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 500</p></strike>
			<p>Rs. 450</p>
			<form><input type=text style="display:none" id="cost" value=450></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
		
		<div class="column">
			<div class="photo">
			<img src="merch1b.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Philosopher's Stone</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Philosopher's Stone"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 600</p></strike>
			<p>Rs. 550</p>
			<form><input type=text style="display:none" id="cost" value=550></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	<div class="row">
		<div class="column">
			<div class="photo">
			<img src="merch1c.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Philosopher's Stone</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Philosopher's Stone"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 580</p></strike>
			<p>Rs. 530</p>
			<form><input type=text style="display:none" id="cost" value=530></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>

		<div class="column">
			<div class="photo">
			<img src="merch1d.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Philosopher's Stone</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Philosopher's Stone"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 580</p></strike>
			<p>Rs. 530</p>
			<form><input type=text style="display:none" id="cost" value=530></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
		
		<div class="column">
			<div class="photo">
			<img src="merch1e.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Chamber Of Secrets</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Chamber Of Secrets"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 600</p></strike>
			<p>Rs. 550</p>
			<form><input type=text style="display:none" id="cost" value=550></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	<div class="row">
		<div class="column">
			<div class="photo">
			<img src="merch1f.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Chamber Of Secrets</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Chamber Of Secrets"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 580</p></strike>
			<p>Rs. 530</p>
			<form><input type=text style="display:none" id="cost" value=530></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>

		<div class="column">
			<div class="photo">
			<img src="merch1g.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Chamber Of Secrets</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The Chamber Of Secrets"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 580</p></strike>
			<p>Rs. 530</p>
			<form><input type=text style="display:none" id="cost" value=530></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
		
		<div class="column">
			<div class="photo">
			<img src="merch1h.jpg" style="width:100%">
			<div class="container">
			<p>Harry Potter And The Chamber Of Secrets</p>
			<form><input type=text style="display:none" id="book" value="Harry Potter And The hamber Of Secrets"></form>
			<p>Hardcover</p>
			<form><input type=text style="display:none" id="type" value=Harcover></form>
			<strike><p>Rs. 600</p></strike>
			<p>Rs. 550</p>
			<form><input type=text style="display:none" id="cost" value=550></form>
			<button style="width: 100%" onclick="cart()">Buy Now</button>
			</div>
			</div>
		</div>
	</div>
<br>
</center>
</div>
</body>
</html>