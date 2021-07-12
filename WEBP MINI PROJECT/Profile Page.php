<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
	margin: 0;
	center: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

* {
  box-sizing: border-box;
}

table, th, td {
  border: 2px solid purple;
  padding: 10px;
}
table {
  border-spacing: 0px;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

/* Style the body */
body {
  background-color: #B19CD9;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 75px;
}


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
	
/* Edit profile button */
.button {
	color: black;
	background-color: #ECD9FF;
  	padding: 16px 28px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 17px;
  	margin: 0;
	position: absolute;
	top: 70%;
  	left: 50%;
  	-ms-transform: translate(-50%, -50%);
  	transform: translate(-50%, -50%);
  	transition-duration: 0.2s;
  	cursor: pointer;
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}
	
/* Change color on hover */
.button:hover {
  	background-color: #800080;
	color: white;
}
	

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><img src="user.png" height="100px" width="100px" class="center"></a>
  <a href="#">Edit profile</a>
  <a href="#">Notifications</a>
  <a href="#">Change password</a>
  <a href="login.php">Log Out</a>
  <a href="BeatWave.php">Back</a>
</div>

<div><span style="font-size:30px;cursor:pointer; color: white" onclick="openNav()">&#9776; </span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

 <div class="main">
<h1 style="text-align: center">Profile</h1>
<table style="width:50%" class="center">

  <tr style="background-color:#ecd9ff">
  	<td>Username</td>
	<td>
<?php
echo $_SESSION['username'];
?>
        </td>
  </tr>
   <tr style="background-color:#ecd9ff">
	<td>Email</td>				
	<td>
<?php
echo $_SESSION['email'];
?>
       </td>
  </tr>
  <tr style="background-color:#ecd9ff">
	<td>Birth date</td>				
	<td>
<?php
echo $_SESSION['birthdate'];
?>
       </td>
</tr>
  <tr style="background-color:#ecd9ff">
	<td>Gender</td>				
	<td>
<?php
echo $_SESSION['gender'];
?>
       </td>
</tr>
  <tr style="background-color:#ecd9ff">
	<td>Country</td>				
	<td>
<?php
echo $_SESSION['country'];
?>
       </td>
</tr>
	 </table>
</div>
	<a href="Edit Profile.php" class="button">Edit profile</a>
</body>
</html>
