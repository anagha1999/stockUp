<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="tab_menu.css">
<link rel="stylesheet" href="stories.css">
<link rel="stylesheet" href="ab.css">
<link rel="stylesheet" href="q.css">

<link rel="stylesheet" type="text/css" href="style.css" />
<script src="functionality.js"></script>
<link rel="stylesheet" href="how_to_invest.css">
<script src="how_to_invest.js"></script>

<title> stockUp </title>
<style>
body, html {
    height: 150%;
    margin: 0;
   	font-family: Times New Roman;
    color: black;

}

.bg{
  
    background-image:url("hand.jpg"); 
    /*opacity: 0.5;*/
    background-blend-mode: lighten;
	height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size:cover;
}

.contact {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 5px; /* Some padding */
}

.bgtext {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.tablink {
    background-color: black;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 16.66%;
    height: 5%
}

.tablink:hover {
    background-color: grey;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    text-align: center;
}

button {
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: yellow;
}


.container {
    padding: 16px;
    text-align: center;

}

span.psw {
    float: right;
    padding-top: 16px;
}
.button_signout {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button_reset {
    background-color:#f44336; /* Red */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


</style>
<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</head>
<body>


<div class="bg">
      	
 
<script type="text/javascript">openPage('Home', this,'orange');</script>
<button class="tablink" onclick="openPage('Home', this,'orange')">Home</button>
<button class="tablink" onclick="openPage('Stories', this, 'orange')" id="defaultOpen">Stories</button>
<!--<button class="tablink" onclick="openPage('SignUp', this, 'orange')">SignUp</button>
<button class="tablink" onclick="openPage('Login', this, 'orange')">Login</button>--->
<button class="tablink" onclick="openPage('AboutUs', this, 'orange')">About Us</button>
<button class="tablink" onclick="openPage('investment', this, 'orange')">How to Invest?</button>
<button class="tablink" onclick="openPage('Trade', this, 'orange')">Trade Tricks</button>

<button class="tablink" onclick="openPage('Note', this, 'orange')">Note Maker</button>


<div id="Home" class="tabcontent">
<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>

    <p>
        <a href="reset-password.php" class="button_reset">Reset Your Password</a>
        <a href="logout.php" class="button_signout">Sign Out of Your Account</a>
    </p>
  <div class="contact">
          <h3 align="center" style="font-size:20px; color:silver">Everything you need to know before you start your stock market journey!</h3>
        </div>

        <div class="bgtext">
          <h1 style="font-size:175px; color:lightgrey"> $tockUp</h1>
           
          
        </div>
</div>

<div id="Stories" class="tabcontent">
		  
		  <div class="container">
  <img src="rj.jpg" alt="Avatar" class="image" style="align:left;">
  <div class="overlay">
    <div class="text">Rakesh Jhunjhunwala</h2>
    <p style="font-size:25px; color:lightgrey;"><i>Also known as 'The Big Bull' and 'India's Warren Buffet'</p>
<p style="font-size:25px; color:lightgrey;"><i>The son of an income tax officer, Rakesh joined the stock market after completing his degree as a chartered accountant. Starting with the initial investment of only Rs 5,000, currently, he is sitting on a huge net worth of around Rs 15,000 crores. </p></i>
    <p style="font-size:25px; color:lightgrey;"> Rakesh Jhunjhunwala follows the ideology of Warren Buffet and believes in long-term investment. He strongly advocates the growth of India and it’s rising economy. Mr. Jhunjhunwala is also confident in learning from mistakes. He often says- ‘Mistakes are your learning friends. The idea is to keep these mistakes small.’ </p></i></div>
  </div>
 </div>
<br>
<br>
<br>
<div class="container">
  <img src="rd.jpg" alt="Avatar" class="image" style="align:right;">
  <div class="overlay">
    <div class="text">Radhakishan Damani</h2>
    <p style="font-size:25px; color:lightgrey;"><i>Always simply dressed wearing just white, he is also known as Mr White and White</p>
<p style="font-size:25px; color:lightgrey;"><i>The owner of D-mart and the mentor of the aforementioned billionare Rakesh Jhunjhunwala, Radhakishan Damani is currenly worth approximately 11.7 Billion USD. </p></i>
    <p style="font-size:25px; color:lightgrey;"> He was not always involved in the stock market. He started his career as a trader in ball bearing, with no intentions to enter the stock market. However, after his father's death, he was forced to enter it to help his brother run their inherited business. Radhakishan Damani became India's retail king after the March 2017 IPO of his supermarket chain DMart 
    </p></i></div>
  </div>
     
</div>
</div>

<!---<div id="SignUp" class="tabcontent">
 
  <form action="/action_page.php" >
  <div class="container">
    <h1 style="color: black">Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr> 

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required> <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label> <br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required> <br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  	</div>
	</form>

</div>

<div id="Login" class="tabcontent">
  <h1 align="center" style="color: black">Login </h1>

  <div class="container">
    <label for="uname"><b>Username</b></label> <br>
    <input type="text" placeholder="Enter Username" name="uname" required> <br>

    <label for="psw"><b>Password</b></label> <br>
    <input type="password" placeholder="Enter Password" name="psw" required> <br>
        
    <button type="submit">Login</button> <br>
    <label>
    <input type="checkbox" checked="checked" name="remember" style="color: black">Remember me
    </label> <br>
     </div>

     <div class="container">
    <button type="button" class="cancelbtn">Cancel</button> <br>
    <span class="psw">Forgot <a href="#">password?</a></span> <br>
     </div>
     </form>
</div>---->

<div id="AboutUs" class="tabcontent">
	<div class="row">
  <div class="column">
    <div class="card">
      <img src="shar.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 style="color: black; font-family: Helvetica;">Sharanya</h2>
        <p class="title">Creative Director</p>
        <p style="color: black;"><tt>wanderlust</tt></p>
        <p style="color: black;">shar@stockup.com</p>
        <p><button class="button" onclick=alert(987654321)>Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="aish.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2 style="color: black; font-family: Helvetica;" > Anagha  </h2>
        <p class="title">Head of Marketing</p>
        <p style="color: black;"><tt> to new beginnings</tt></p>
        <p style="color: black;">anagh@stockup.com</p>
        <p><button class="button" onclick=alert(987654321)>Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="anagh.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2 style="color: black; font-family: Helvetica;">Aishwarya </h2>
        <p class="title">Content Manager</p>
        <p style="color: black;"><tt>just break free</tt></p>
        <p style="color: black;">aish@stockup.com</p>
        <p><button class="button" onclick=alert(987654321)>Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>

<div id="investment" class="tabcontent">
  <div class="slideshow-container">
	<!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="start.jpg" style="width:100%">
    <div class="text">Start investing!</div>
    <p style="color: black;font-family: helvetica;">You’re ready to go. Remember this isn’t always the safest way to make money so make sure you’re in the position to place your bets on  a company because you know, with high risk comes high reward($$$). Come on, it’s time to make some money!</p>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="reasearch.jpg" style="width:100%">
    <div class="text">Research Companies</div>
    <p style="color: black;font-family: helvetica;">Make sure the companies you decide to invest in fall in line with your values, their management is trust worthy and their stock has performed well over the past few months or is likely to perform well in the near future based on a credible source. Do your background checks, study the market trends and note down the stocks you’d be most invested in and why.  Investing done randomly tends to work out for a very few lucky people but for the rest, it’s best to stick to the basics of investing!</p>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="budget.jpg" style="width:100%">
    <div class="text">Decide on a budget!</div>
    <p style="color: black;font-family: helvetica;">Once you decide on the kind of investor you are, decide on the maximum amount you want to invest for the period of time you have decided to take a risk and enter the stock market.</p>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="risk.jpg" style="width:100%">
    <div class="text">Choose what kind of Investor you want to be!</div>
    <p style="color: black; font-family: helvetica;"> Decide if you want to be the kind of investor who watches the price of the stocks every day, and buys and sells on a daily basis to make small profits over daily movements of the stock market or if you want to make an investment for the long term.</p>
  </div>



  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <!--<span currenSlide(1)></span>;-->
  <script>currentSlide(1);</script>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 

</div>
</div>

























<div id="Note" class="tabcontent">
	<div id="header">
            <div id="name"><p align="center"> MAKE A NOTE</p> </div>
            <div id="menubutton"><a id="menulink" href="#"></a></div>
            <div id="menu" class="hiddenmenu">
                <div class="menuitem"><a id="home" href="#"></a></div>
                <div class="menuitem"><a id="about" href="#"></a></div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="container">
            <textarea id="area" rows="10%" cols=100%></textarea>
            <div id="controls">
    <p><a href="javascript:save();" class="button_signout">Save</a>
        <a href="javascript:clear();" class="button_reset">Clear</a></p>
</div>
        </div>
        <div class="footer">
            
        </div>
</div>



<div id="Trade" class="tabcontent">
	<div class="row">
  <div class="column">
    <img src="quote1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="quote2.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="quote3.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
<h1 align="center"> TIPS TO REMEMBER </h1>
<ul>
  <li><p>Don’t let your feelings get the best of you : Don't let fear or greed limit your returns or inflate your losses. Expect short-term fluctuations in your overall portfolio value. As a long-term investor, these short-term movements should not cause panic. Greed can lead an investor to hold on to a position too long in the hope of an even higher price – even if it falls. Fear can cause an investor to sell an investment too early, or prevent an investor from selling a loser. </p>
  </li>
  <li><p>Know the basics<a href="#investment"> Check it out here!</a>  </p></li>
  <li><p>If you decide to go for a broker, always choose a trusted one. We’ve compiled a list of great online brokers for you!</p></li>
  <li><p>Make sure you set a few small term goals and a few long terms one, so you keep track of your investments along the way!</p></li>
  <li><p>Determine your risk appetite, if you’re not ready to put a month’s salary into a stock you’re not completely sure of, that’s okay and if you are, heer’s hoping it triples!</p></li>
  <li><p> 6)  Remember to be realistic about the results, don’t expect magical results overnight, an investment in the stock market can some times take just as long as any other investment. </p></li>
  <li><p> 7)  Be prepared for losing money in the beginning. A lot of investors learn as they experience the stock market, don’t be demotivated by losses in the beginning.</p></li>
  <li><p>8) Don’t buy or sell stock because someone you don’t know has decided to drop you a tip, you never know how useful it can be. Go with your gut, or better yet, read articles by financial gurus to be prepared for the investing season and helpful tips.</p></li>
</ul>
</div>




</body>
</html>

