<?php
session_start();

$username = "";
$email = "";
$errors = array();
	// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'beatwave');

// if register button is clicked

if(isset($_POST['register'])) {
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
$country = mysqli_real_escape_string($db, $_POST['country']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//ensure that the form field are filled properly

if (empty($username)) {
	array_push($errors, "Username is required"); 
}
if (empty($email)) {
	array_push($errors, "Email is required"); 
}
if (empty($password_1)) {
	array_push($errors, "Password is required"); 
}
if ($password_1 != $password_2) {
	array_push($errors, "Two password do not match"); 
}



// if there are no errors, save user to the database
if (count($errors) == 0) {
$password = md5($password_1); 
$query = "INSERT INTO user (username, email, gender, birthdate, country, password) VALUES ('$username','$email', '$gender', '$birthdate', '$country', '$password')";
mysqli_query($db,$query);
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['gender'] = $gender;
$_SESSION['country'] = $country;
$_SESSION['success'] = "You are now logged in";
header('location: BeatWave.php');

   }

}

//log in
if (isset($_POST['login'])){
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = $_POST['email'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$country = $_POST['country'];
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);


//ensure that the form field are filled properly

if (empty($username)) {
	array_push($errors, "Username is required"); 
  }
if (empty($password_1)) {
	array_push($errors, "Password is required"); 
  }
if (count($errors) == 0){
$password = md5($password_1);
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'"; 
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 1) {
$query = "INSERT INTO user (username, email, gender, birthdate, country, password) VALUES ('$username','$email', '$gender', '$birthdate', '$country', '$password')";
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['gender'] = $gender;
$_SESSION['country'] = $country;
$_SESSION['success'] = "You are now logged in";
header('location: BeatWave.php');
}else{
array_push($errors, "Wrong username/password combination");
     }
  }

}
//edit
if (isset($_POST['change']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$country = $_POST['country'];

$query = "UPDATE user SET username ='$username', email ='$email', gender ='$gender', birthdate ='$birthdate', country ='$country' WHERE ID='$ID'";
header('location: Profile Page.php');
}

//logout
if (isset($_GET['logout'])){
session_destroy();
unset($_SESSION['username']);
header('location: login.php');
}
?>