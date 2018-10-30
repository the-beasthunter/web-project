<Doc type! HTML>
<html>
<head>
<title>Signin</title>
<style>

/* Menu Bar CSS START */

/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

/* Menu Bar CSS END */




/* Search Bar CSS START */

input[type=text] 
{
    width: 1200px;
    box-sizing: border-box;
    border: 4px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    padding: 20px 20px 20px 40px ;
}


/* Search Bar CSS END */


/* Traventure START*/

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

/* Traventure END */



/* Images CSS START */

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* Images CSS END */




/* Background CSS START */

#ABC 
{
    background-color: gray;
}

/* Background CSS END */
</style>
</head>

<body>	

<br>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="hotels.php">Hotels</a>
  <a href="deals.php">Deals</a>
  <a href="rest.php">Restraunts</a>
  <a href="#about">Flight</a>
  <a href="other.php">Things to do</a>
  <a href="feedback.php">Feedback</a>
  <a href="login.php"  style="float:right">Signout</a>
</div>

<img src="traventure.png" alt="Paris" width="200" height="150" class="center">

<h2 style="background-color:white;"><font face="Bookman" size="8"><marquee>New Winter Vaccations Tour Packages Avalilable, Avail Now !</marquee></font></h2>
	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="b1.jpg" style="width:100%">
    <div class="text">Your Trip Manager</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="b2.jpg" style="width:100%">
    <div class="text">Your Trip Manager</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="b3.jpg" style="width:100%">
    <div class="text">Your Trip Manager</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="b4.jpg" style="width:100%">
    <div class="text">Your Trip Manager</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="b5.jpg" style="width:100%">
    <div class="text">Your Trip Manager</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>
	
<br>

<image src="search.png" width="100" height="100" align="Left" alt="Love"><br>
<input type="text" name="search" placeholder="Search ...."><br><br><br>

<table>
<tr>
<th>
<image src="explore.png" width="1335" height="750" align="Left" alt="Love">
</th>
</tr>
<tr>
<th>
<section id="ABC">
<br><br>
<center><h1 style="color:white;">TRAVENTURE - We Live Young, We Live Free </h1></center>
<center><h1 style="color:white;">All these Love Traventure </h1></center>
<center>
<table>
<tr>
<th><pre>   </pre></th>
<th><h3 style="color:white;">Top Singers</h3></th>
<th><pre>           </pre></th>
<th><h3 style="color:white;">Top Actors</h3></th>
<th><pre>               </pre></th>
<th><h3 style="color:white;">Languages</h3></th>
<th><pre>           </pre></th>
<th><h3 style="color:white;">Companies</h3></th>
</tr>
<br>
</table>
<br>
<table>
<tr>
<th>
<table>
<tr><th><h4 style="color:white;">Badshah</h4></td></th>
<tr><th><h4 style="color:white;">Mohammed Rafi</h4></th></tr>
<tr><th><h4 style="color:white;">Udit Narayan</h4></th></tr>
<tr><th><h4 style="color:white;">Chainsmokers</h4></th></tr>
<tr><th><h4 style="color:white;">Arijit Singh</h4></th></tr>
<tr><th><h4 style="color:white;">Justin Bieber</h4></th></tr>
</table>
</th>
<th><pre>           </pre></th>  
<th>
<table>
<tr><th><h4 style="color:white;">Shahrukh khan</h4></th></tr>
<tr><th><h4 style="color:white;">Deepika</th></h4></tr>
<tr><th><h4 style="color:white;">Salman Khan</h4></th></tr>
<tr><th><h4 style="color:white;">Varun Dhawan</h4></th></tr>
<tr><th><h4 style="color:white;">Alia Bhatt</h4></th></tr>
<tr><th><h4 style="color:white;">Sunny Leone</h4></th></tr>
</table>
</th>
<th>
<table>
<tr>
<th><pre>             </pre></th>
<th>
<table>
<tr><th><h4 style="color:white;">Hindi</h4></td></th>
<tr><th><h4 style="color:white;">English</h4></td></th>
<tr><th><h4 style="color:white;">Tamil</h4></th></tr>
<tr><th><h4 style="color:white;">Gujrati</h4></th></tr>
<tr><th><h4 style="color:white;">Haryanvi</h4></th></tr>
<tr><th><h4 style="color:white;">Rajasthani</h4></th></tr>
</table>
</th>
<th><pre>             </pre></th>  
<th>
<table>
<tr><th><h4 style="color:white;">About us</h4></th></tr>
<tr><th><h4 style="color:white;">Blog</h4></th></tr>
<tr><th><h4 style="color:white;">Jobs</h4></th></tr>
<tr><th><h4 style="color:white;">Press</h4></th></tr>
<tr><th><h4 style="color:white;">Advertise</h4></th></tr>
<tr><th><h4 style="color:white;">T&P</h4></th></tr>
</table>
</th>
</tr>
</table>

</center>

</section>
</th>
</tr>
</table>	
<script>

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

</script>	
</body>
</html>