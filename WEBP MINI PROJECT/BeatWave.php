<!--Name: 
Nur Dayana Binti Tajuddin (CC19111)
Nurulfatinee Huda Binti Zulkiflee (CC19094)
Puteri Marisha Diana Binti Mazlan (CC19134)
Nur Amrina Rasyada Binti Mohd Khairillah (CC19162)
-->
<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BeatWave: Your Music Your Life</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<main>
    <div class="header-img"></div>
    <div class="logo"></div>
</main>
</head>

<style>
* {
  box-sizing: border-box;
}

#lab_social_icon_footer {
  padding: 40px 0;
  background-color: #dedede;
}

#lab_social_icon_footer a {
  color: #333;
}

#lab_social_icon_footer .social:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

#lab_social_icon_footer .social {
  -webkit-transform: scale(0.8);
  /* Browser Variations: */
  
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
}
/*
    Multicoloured Hover Variations
*/

#lab_social_icon_footer #social-fb:hover {
  color: #3B5998;
}

#lab_social_icon_footer #social-tw:hover {
  color: #4099FF;
}

#lab_social_icon_footer #social-gp:hover {
  color: #d34836;
}

#lab_social_icon_footer #social-em:hover {
  color: #f39c12;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

th {
  color: white;
  font-text: Times New Roman;
  font-size: 20px;
}

.button {
  border: none;
  color: white;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: auto;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button {
  background-color: white; 
  color: black; 
  border: 2px solid #808080;
}

.button:hover {
  background-color: #C0C0C0;
  color: white;
}

h2 {
  font-size: 90px;
  color: white;
  margin: auto;
  display: inline-block;
  font-family: Times New Roman;
}

h4 {
  font-size: 24px;
  color: white;
  margin: auto;
  display: inline-block;
  font-family: Times New Roman;
}


/* Style the header */
header {
  background: url('shushu.jpg');
  background-size: cover;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: black;
}



article {
  float: left;
  padding: 20px;
  width: auto;
  background-color: #B19CD9;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section {
  
  background-color: #B19CD9;
}

.header-right {
  float: right;
}

.header-left {
  float: left;
}

.menu {
  float: middle;
}
.menu ul {
  list-style: none;
  margin: 8px;
  padding: 0;
}

img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 20px}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}


input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
}

</style>

<body>


<header>

  <div class="header-right">
     
     <button style='font-size:27px'><i class='far fa-bell'></i></button>
<a href="Profile Page.php">
     <button style='font-size:27px'><i class='far fa-user-circle' ></i></button>
</a>
    
  </div>

<div class="header-left">
<img src="music.png"  width="100" height="100">
</div>
<br><br>
<center>

    <div class="menu">
      <ul>
        <a href="http://localhost/WEBP%20MINI%20PROJECT/BeatWave.php">
          <button class="button">Home</button>
        </a>
        <a href="http://localhost/WEBP%20MINI%20PROJECT/playlist.php">
          <button class="button">Playlist</button>
        </a>
        <a href="http://localhost/WEBP%20MINI%20PROJECT/about.php">
        <button class="button">About</button>
        </a>

     
     </form>
      </ul>
 
    </div>
<br>

  <h2>BeatWave</h2>

<br>
  <h4> Music. Brings. Relief</h4>
</center>
</header>

<section>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:12000px">

<!-- Header -->
<div class="w3-opacity">

<div class="w3-clear"></div>
<header1 class="w3-center w3-margin-bottom">
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()">Toggle Grid Padding</button></p>
</header1>
<center>
<form>
  <input type="text" name="search" placeholder="Search..">
</form>
</center>
<br><br><br>

</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
<a target="_blank" href="The Weeknd - Blinding Lights (Official Audio).mp3">
    <img src="blinding lights.png" style="width:100%" "height:90%">
</a>
<a target="_blank" href="Shawn Mendes, Justin Bieber - Monster.mp3">
    <img src="monster.jpg" style="width:100%">
</a>
<a target="_blank" href="Arizona Zervas - ROXANNE.mp3">
    <img src="Arizona_Zervas_-_Roxanne.png" style="width:100%">
</a>
  </div>

  <div class="w3-third">
<a target="_blank" href="Trevor Daniel - Falling.mp3">
    <img src="Trevor_Daniel_-_Falling.png" width="100%" height="100%">
</a>
<a target="_blank" href="Post Malone - Circles.mp3">
    <img src="circles post malone.jpg" style="width:100%">
</a>
<a target="_blank" href="Harry Styles - Watermelon Sugar.mp3">
    <img src="harry styles.jpg" style="width:100%">
</a>
<a target="_blank" href="blackbear - hot girl bummer.mp3">
    <img src="hot girl bummer.jpg" style="width:100%">
</a>
 
  </div>

  <div class="w3-third">
<a target="_blank" href="Lewis Capaldi - Someone You Loved.mp3">
    <img src="Lewis_Capaldi_-_Someone_You_Loved.png" style="width:100%">
</a>
<a target="_blank" href="Justin Bieber - Yummy.mp3">
    <img src="Justin_Bieber_-_Yummy.png" style="width:100%">
</a>
<a target="_blank" href="James Arthur - Quite Miss Home.mp3">
    <img src="quite miss home.jpg" style="width:100%">
</a>
  </div>
<br><br><br>
</div>

</div>
</section>

  <section id="lab_social_icon_footer">
<div class="container">
<center>
    <div class="text-center center-block">
    <a href=""><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
    <a href=""><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
    <a href=""><i id="social-in" class="fa fa-instagram fa-3x social"></i></a>
    <a href=""><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</center>
</div>
</section>

<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>  





</body>
</html>