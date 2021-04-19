<?php
session_start();
?>
<html>
<head>
<link rel=stylesheet href=NavigationBar.css>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg {
  background-image: url("sorting4.jpg");
  min-height: 100%;
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
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

p{
	color:white;
	font-size: 17px;
	
}
</style>
<script>
function Sort(){
var g = 0;
var h = 0;
var r = 0;
var s = 0;

			if(document.f.q1[0].checked == true){
				g+=1;
				s+=2;
			}
			else if(document.f.q1[1].checked == true){
				g+=1;
				s+=1;
			}
			else if(document.f.q1[2].checked == true){
				h+=1;
				g+=1;
				r+=1;
			}
			else if(document.f.q1[3].checked == true){
				h+=1;
				r+=2;
			}
			else if(document.f.q1[4].checked == true){
				h+=1;
				r+=1;
			}
			else{
				alert("Please answer question 1.");
				return;
			}

			if(document.f.q2[0].checked == true){
				g+=1;
				h+=1;
				r+=1;
			}
			else if(document.f.q2[1].checked == true){
				g+=1;
				s+=1;
			}
			else if(document.f.q2[2].checked == true){
				g+=1;
				h+=2;
				r+=1;
			}
			else if(document.f.q2[3].checked == true){
				h+=2;
				r+=2;
			}
			else{
				alert("Please answer question 2.");
				return;
			}

			if(document.f.q3[0].checked == true){
				g+=1;
				h+=1;
				r+=1;
			}
			else if(document.f.q3[1].checked == true){
				g+=1;
				h+=1;
				r+=1;
			}
			else if(document.f.q3[2].checked == true){
				h+=1;
				r+=1;
			}
			else if(document.f.q3[3].checked == true){
				g+=1;
				s+=2;
			}
			else if(document.f.q3[4].checked == true){
				s+=3;
			}
			else{
				alert("Please answer question 3.");
				return;
			}

			if(document.f.q4[0].checked == true){
				h+=2;
				r+=1;
			}
			else if(document.f.q4[1].checked == true){
				r+=1;
				s+=1;
			}
			else if(document.f.q4[2].checked == true){
				g+=2;
				r+=1;
				}
			else if(document.f.q4[3].checked == true)
				g+=2;
			else if(document.f.q4[4].checked == true)
				s+=2;
			else{
				alert("Please answer question 4.");
				return;
			}

			if(document.f.q5[0].checked == true){
				g+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q5[1].checked == true)
				s+=1;
				
			else if(document.f.q5[2].checked == true){
				g+=1;
				r+=1;
				s+=2;
			}
			else if(document.f.q5[3].checked == true){
				h+=2;
			}
			else if(document.f.q5[4].checked == true){
				r+=3;
			}
			else{
				alert("Please answer question 5.");
				return;
			}

			if(document.f.q6[0].checked == true){
				g+=2;
				s+=2;
			}
			else if(document.f.q6[1].checked == true){
				s+=2;
				}
			else if(document.f.q6[2].checked == true){
				h+=1;
				r+=1;
			}
			else if(document.f.q6[3].checked == true){
				g+=1;
				h+=2;
				r+=1;
			}
			else if(document.f.q6[4].checked == true){
				g+=1;
				h+=2;
				r+=2;
			}
			else{
				alert("Please answer question 6.");
				return;
			}

			if(document.f.q7[0].checked == true){
				g+=1;
				r+=1;
				s+=2;
			}
			else if(document.f.q7[1].checked == true){
				g+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q7[2].checked == true){
				g+=1;
				h+=1;
				r+=1;
				}
			else if(document.f.q7[3].checked == true){
				g+=1;
				h+=3;
				r+=1;
			}
			else if(document.f.q7[4].checked == true){
				g+=1;
				h+=3;
				r+=1;
			}
			else if(document.f.q7[5].checked == true){
				g+=1;
				h+=1;
				r+=2;
			}
			else{
				alert("Please answer question 7.");
				return;
			}

			if(document.f.q8[0].checked == true){
				h+=2;
				r+=1;
				s+=1;
			}
			else if(document.f.q8[1].checked == true){
				g+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q8[2].checked == true){
				g+=2;
				r+=1;
				s+=1;
			}
			else{
				alert("Please answer question 8.");
				return;
				}

			if(document.f.q9[0].checked == true){
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q9[1].checked == true){
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q9[2].checked == true){
				r+=1;
				s+=2;
			}
			else if(document.f.q9[3].checked == true){
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q9[4].checked == true){
				g+=2;
				r+=1;
				s+=1;
			}
			else{
				alert("Please answer question 9.");
				return;
			}

			if(document.f.q10[0].checked == true){
				g+=1;
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q10[1].checked == true){
				g+=1;
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q10[2].checked == true){
				g+=1;
				s+=1;
			}
			else if(document.f.q10[3].checked == true){
				g+=1;
				h+=2;
				r+=1;
			}
			else if(document.f.q10[4].checked == true){
				g+=1;
				h+=1;
				r+=2;
			}
			else if(document.f.q10[5].checked == true){
				g+=1;
				r+=1;
				s+=2;
			}
			else{
				alert("Please answer question 10.");
				return;
			}

			if(document.f.q11[0].checked == true){
				g+=1;
				h+=1;
				s+=1;
			}
			else if(document.f.q11[1].checked == true){
				g+=1;
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q11[2].checked == true){
				g+=1;
				h+=1;
				r+=1;
				s+=1;
			}
			else if(document.f.q11[3].checked == true){
				g+=1;
				h+=1;
				r+=2;
				s+=1;
			}
			else{
				alert("Please answer question 11.");
				return;
			}

			if(document.f.q12[0].checked == true){
				g+=1;
				r+=1;
				s+=2;
			}
			else if(document.f.q12[1].checked == true){
				g+=1;
				h+=1;
				r+=1;
				s+=2;
			}
			else if(document.f.q12[2].checked == true){
				g+=1;
				h+=1;
				r+=1;
			}
			else if(document.f.q12[3].checked == true){
				g+=1;
				r+=1;
				h+=2;
				s+=1;
			}
			else{
				alert("Please answer question 12.");
				return;
			}
			
			if(document.f.q13[0].checked == true)
				g+=2;
			
			else if(document.f.q13[1].checked == true)
				s+=2;
			else if(document.f.q13[2].checked == true)
				h+=2;
			else if(document.f.q13[3].checked == true)
				r+=2;
			else{
				alert("Please answer question 13.");
				return;
			}

			
		 if(h > g && h > s && h > r)
			window.open("Huff.html","_blank");
			
		else if(g > h && g > s && g > r)
			window.open("Gryff.html","_blank");
			
		else if(r > g && r > s && r > h)
			window.open("Rave.html","_blank");
		
		else
			window.open("Slyt.html","_blank");
}
</script>
<script src="Scripting.js"></script>
</head>
<body face=sans-serif leftmargin=100px topmargin=50px rightmargin=100px>
<div>
<ul>
  <li class=nav><a target=Display href="merch1.php">Buy Now</a></li>
  <li class=active><a target=Display href="sorting1.php">Sorting Hat</a></li>
  <li class=nav style="float:right"><a target=Display href="login.php">Profile</a></li>
</ul>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
<br><br>
    <div class="container">
      <label><b>User Name</b></label>
      <input type="text" class="sign" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" class="sign" placeholder="Enter Password" name="psw" required>
        
      <center><button type="submit"><font size=3>Login</font></button></center>
	  <br>
      <label>
        <input type="checkbox"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="" style="text-decoration:none">Forgot password?</a></span>
    </div>
  </form>
</div>

<div style="text-align:center;text-align: justify;">
<div class="bgimg">
	<div class="caption">
    <span class="border" style=";font-size:50px;color: white;">GET SORTED!</span>
  </div>
</div>
<div style="padding:20px; margin-top:30px; background-color:#1C2833; color=white;">
<h1><font face=serif size=8 color=white>Hogwarts House Sorting Quiz</font></h1>
<hr align="left" noshade color=DarkTurquoise width="100%" size="1">
<br>
<font color=white size=5>Please answer all the questions</font><br><br>
<form name="f">

<p><b>1. You are given a test at school that has questions that teacher hasn't covered yet. In the middle of the test you notice that your friend next to you has a cheat-sheet. The teacher doesn't notice.</b></p>
<p><input type="radio" name="q1" value="1">Ask to share the cheat-sheet. This test isn't fair, so why should you be?<br>
<input type="radio" name="q1" value="2">Good for them, they beat the system.<br>
<input type="radio" name="q1" value="3">Confront them after the test and try to convince them not to cheat anymore. You don't want them to get in trouble.<br>
<input type="radio" name="q1" value="4">Confront them after the test and force them to tell the teacher they cheated, or you will tell on them. They must pay for their misdeeds.<br>
<input type="radio" name="q1" value="5">Inform the teacher right in the middle of class that they are cheating. Cheaters never prosper!<br>
</p>
<br>

<p><b>2. While walking down the street you see a wallet on the side of the road. It has a small amount of money in it, but no identification of any kind. There is nobody in sight.</b></p>
<p>
<input type="radio" name="q2" value="1">Leave it there. Someone is probably looking for it.<br>
<input type="radio" name="q2" value="2">Pocket the money. You don't know who it belongs to, so finder's keepers.<br>
<input type="radio" name="q2" value="3">Take it to the police in case anyone ever reports it.<br>
<input type="radio" name="q2" value="4">Take the wallet, and go around the area asking anyone if they have lost a wallet recently.<br>
</p>
<br>

<p><b>3. Someone has played a prank on you which involves your public embarrassment and everyone begins laughing at you. However, you doubt they meant any harm by it.</b></p>
<p>
<input type="radio" name="q3" value="1">Laugh along with the crowd. You love a good joke even if it's at your expense.<br>
<input type="radio" name="q3" value="2">On the outside you'll laugh because you don't want anyone to know that they really hurt your feelings by making you look stupid in front of everybody.<br>
<input type="radio" name="q3" value="3">You get upset and run away from the crowd. How could they be so mean?<br>
<input type="radio" name="q3" value="4">That jerk! You get mad right away and tell it to their face.<br>
<input type="radio" name="q3" value="5">Pretend that all is well, but you won't forget this. They're going to pay for what they did! How dare they publicly humiliate you.<br>
</p>

<br>

<p><b>4. You have arrived late to work because you had a flat tire. You've been on time every other day for the past month, yet your boss yells at you about it in front of all your coworkers.</b></p>
<p>
<input type="radio" name="q4" value="1">Endure his yelling, he is my boss after all.<br>
<input type="radio" name="q4" value="2">Let him yell, it doesn't matter anyway, you're not listening.<br>
<input type="radio" name="q4" value="3">Explain to him that accidents happen and that you don't feel you need to be yelled at because of it.<br>
<input type="radio" name="q4" value="4">Yell right back at him! How dare he insult you for something so petty.<br>
<input type="radio" name="q4" value="5">Allow him to yell all he wants, you'll just let the air out of his tires someday.<br>
</p>
<br>
<p><b>5. You have just returned home from a long day's work when a friend calls you and explains that they are stranded on a back road an hour drive from town and they need you to pick them up. They've already tried everyone else and you are their only means of getting back.</b></p>
<p>
<input type="radio" name="q5" value="1">I'm too tired. Tell them to try to flag down a car to help them out.<br>
<input type="radio" name="q5" value="2">I'm too tired. Make up a lie about why you can't help them.<br>
<input type="radio" name="q5" value="3">I'll do it, but I'm charging them for gas money.<br>
<input type="radio" name="q5" value="4">Yes, I'm tired, but what are friends for?<br>
<input type="radio" name="q5" value="5">Ask them what's wrong with the car. Maybe you can talk them through how to fix it.<br>
</p>
<br>
<p><b>6. A little kid accuses you, in front of a whole crowd people, of stealing his toy which you did not do. You are twice his size, but he won't back off.</b></p>
<p>
<input type="radio" name="q6" value="1">How dare he insult me in front of all these people? I'll show him how things work in the real world!<br>
<input type="radio" name="q6" value="2">Explain to him that I didn't take his toy and give him fair warning that he'll have a black eye if he doesn't drop it.<br>
<input type="radio" name="q6" value="3">Try to rationalize with the kid. Tell him you didn't take the toy and refuse to fight him even if he takes a few swings at you.<br>
<input type="radio" name="q6" value="4">Tell him you didn't take the toy and direct him to someone who can help him find it.<br>
<input type="radio" name="q6" value="5">Explain to him you didn't take the toy and offer to personally help find the person who did.<br>
</p>
<br>
<p><b>7. You have saved up for months to buy a new bike. As you're getting ready to buy it, a child runs by and steals your money. You chase him down and find that his mother is deathly ill and the child stole the money to buy her medicine.</b></p>
<p>
<input type="radio" name="q7" value="1">That's their problem, I didn't get the lady sick. I worked hard for that money and it's mine.<br>
<input type="radio" name="q7" value="2">Perhaps you would have helped them if they were to ask, but you don't help thieves.<br>
<input type="radio" name="q7" value="3">Maybe I'll let them keep some of the money and buy the bike later.<br>
<input type="radio" name="q7" value="4">They are obviously in need of the money more than I. I give it all to them.<br>
<input type="radio" name="q7" value="5">I'll give them the money and try and nurse the mother back to health.<br>
<input type="radio" name="q7" value="6">Refuse to give them your money, but still try and nurse the mother back to health.<br>
</p>
<br>
<p><b>8. A friend of yours tells you that there is some really cool stuff in an old abandoned building. When you get there you see a sign that "Danger: Do not enter!", but the building doesn't look dangerous. There is nobody around to see you, and your friend wants to check it out.</b></p>
<p>
<input type="radio" name="q8" value="1">Obviously there is some dangerous stuff in there, and we shouldn't be going inside.<br>
<input type="radio" name="q8" value="2">Maybe I'll just take a peek inside for a little while. What could it hurt?<br>
<input type="radio" name="q8" value="3">Danger shmanger! There's probably some cool stuff inside. Let's see what all the fuss is about.<br>
</p>
<br>
<p><b>9. A very strong man approaches you while you're eating lunch and demands that you give him some food. He doesn't appear to be starving or poor. There is nobody there to stop him from taking it.</b></p>
<p>
<input type="radio" name="q9" value="1">Give him some food and leave quickly. You don't want any trouble from a jerk like that.<br>
<input type="radio" name="q9" value="2">Give him some food and leave. But you're going to tell on him later.<br>
<input type="radio" name="q9" value="3">Give him some food and follow him to his house so you can later get him back by doing something rather nasty.<br>
<input type="radio" name="q9" value="4">Give him half your food and invite him to sit and talk with you, maybe you can befriend him.<br>
<input type="radio" name="q9" value="5">Give him a nice fist in the face. Nobody steals from you.<br>
</p>
<br>
<p><b>10. You have inherited a large sum of money from your great aunt.</b></p>
<p>
<input type="radio" name="q10" value="1">Put it all into a savings account and spend it wisely as needs present themselves.<br>
<input type="radio" name="q10" value="2">Buy a few things right away. Maybe a new car, a boat, a house, etc. The rest I'll put away for a rainy day.<br>
<input type="radio" name="q10" value="3">Spend it all on something really big and eccentric. You can't take it with you right?<br>
<input type="radio" name="q10" value="4">Donate it to the sick, injured, and poor.<br>
<input type="radio" name="q10" value="5">Donate it to science, research, and development.<br>
<input type="radio" name="q10" value="6">Invest it into the market. You'll soon have even more!<br>
</p>
<br>
<p><b>11. You are given a small plastic puzzle that looks to be difficult to solve.</b></p>
<p><table style="width:100%;">
<input type="radio" name="q11" value="1">I have better things to do than play with toys.<br>
<input type="radio" name="q11" value="2">I'll try it out, but if I can't solve it, it's not the end of the world.<br>
<input type="radio" name="q11" value="3">I'll put some time into it. I'm sure I could solve it eventually.<br>
<input type="radio" name="q11" value="4">I won't give up until I solve it. Then, maybe I'll try it blindfolded!<br>
</p>
<br>
<p><b>12. Five years ago a girl stole some money from you and she never got in trouble for it. Since then, she has become a much better person. Recently she has been arrested for stealing, but you can prove that she is innocent.</b></p>
<p>
<input type="radio" name="q12" value="1">I'm not saying a thing. This is the punishment that she never got five years ago.<br>
<input type="radio" name="q12" value="2">Tell her that I'll save her, provided she pays me back the money she owes me.<br>
<input type="radio" name="q12" value="3">I'll save her because I know she's a better person now.<br>
<input type="radio" name="q12" value="4">I'd save her even if she was still a bad person because I know she is innocent this time.<br>
</p>
<br>
<p><b>13. Which house would you prefer to be in?</b></p>
<p>
<input type="radio" name="q13" value="1">Gryffindor<br>
<input type="radio" name="q13" value="2">Slytherin<br>
<input type="radio" name="q13" value="3">Hufflepuff<br>
<input type="radio" name="q13" value="4">Ravenclaw<br>
</p>
<hr align="left" noshade color=DarkTurquoise width="100%" size="1">
<p>&nbsp;</p>
<center>
<input type="submit" onclick="Sort()" value="Sort Me" style="background-color:#f44336; color:white; padding:15px; font-size:20px; border:none; cursor:pointer">
</center>
</form>
<p>&nbsp;</p>


</div>
</body></html>