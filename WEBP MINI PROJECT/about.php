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
    <div class="container"></div>
</main>
</head>

<style>
* {
  box-sizing: border-box;
}

.center {
  margin: auto;
  width: 50%%;
  border: 3px solid #73AD21;
  padding: 10px;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: auto;
  background-color: #B19CD9;
}

th {
  color: white;
  font-text: Times New Roman;
  font-size: 20px;
  margin: auto;
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

h1{
  font-size: 30px;
  color: balck;
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

pre{
  font-size: 20px;
  font-family: Times New Roman;
}


article {
  float: middle;
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
  padding: 0
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

#lab_social_icon_footer #social-ig:hover {
  color: #d34836;
}

#lab_social_icon_footer #social-em:hover {
  color: #f39c12;
}

</style>

<body>


<header>

  <div class="header-right">
     <button style='font-size:27px'><i class='far fa-bell'></i></button>
     <button style='font-size:27px'><i class='far fa-user-circle'></i></button>
  </div>

<div class="header-left">
<img src="music.png"  width="100" height="100">
</div>
<br><br>
    <div class="menu">
      <ul>
        <a href="BeatWave.php">
          <button class="button">Home</button>
        </a>
        <a href="playlist.php">
          <button class="button">Playlist</button>
        </a>
        <a href="about.php">
        <button class="button">About</button>
        </a>
      </ul>
    </div>
<br>

  <h2>BeatWave</h2>

<br>
  <h4> Music. Brings. Relief</h4>
</header>

<article>
<center>
    <h1><u>ABOUT</u></h1>
</center>
<br><br>

<div class="center">
<center>
<pre>
	BeatWave is a music website available for all ages who love to listen to music every time and anywhere they want. Everyone can listen to 
trending music and enjoy the playlist of their favourite artists and songs. 
</pre>
<pre>
 	There are several strategies to be implemented in this Beatwave web-based system. Most of the streaming music websites required users 
to pay to get the premium features and unlock more contents such as no-ads, skip unlimited songs, high fidelity sound quality and so on. 
Some users cannot afford to pay for the subscriptions offered even though the deals are indeed great. As a solution to this issue, 
Beatwave offers a free version content without the need to upgrade your account. Users are able to get all the functionality 
without paying for a single penny. Furthermore, songs are not directly downloadable unless users have a premium account or use a downloader extension. 
 
</pre>
</center>
</div>
</article>

<br><br><br><br><br><br><br>
<footer id="lab_social_icon_footer">
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
</footer>


</body>
</html>