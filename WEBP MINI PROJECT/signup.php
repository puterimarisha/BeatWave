<?php include('database.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in - BeatWave</title>
  <link rel="stylesheet" type="text/css" href="signup.php">
</head>

<body>
  <div class="header">
    <center>
    <img src="music.png"  width="20" height="20"><h1>BeatWave</h1>
    </center>
  </div>

  <form method="post" action="signup.php">
       <!-- display validation errors -->

<?php include('errors.php'); ?>

    <div class="input-group">
    <label>What's your username*</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
     <label>What's your email*</label>
     <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
     <label>Gender</label>
     <input type="text" name="gender" >
    </div>
    <div class="input-group">
     <label>Birthdate</label>
     <input type="date" name="birthdate" value="<?php echo $birthdate; ?>">
    </div>
    <div class="input-group">
     <label>Country</label>
     <input type="text" name="country" >
    </div>
    <div class="input-group">
     <label>What's your password*</label>
     <input type="password" name="password_1">
    </div>
    <div class="input-group">
     <label>Confirm your password*</label>
     <input type="password" name="password_2">
    </div>
    <div class="input-group">
     <button type="submit" name="register" class="btn">Sign Up</button>
    </div>
    <p>
     Already has an account <a href="login.php">Sign in</a>
    </p>
   </form>

</body>




<!-- style -->
<style>
*{
   margin: 0px;
   padding: 0px;
}
body{
 margin: 0;
 padding: 0;
 font-size: 18px;
 font-family: Georgia, Helvetica, sans-serif;
 background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab, #9370DB);
 background-size: 400% 400%;
 animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.header{
  width:30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form{
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group{
  margin: 10px 0px 10px 0px;
}
.input-group label{
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input{
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn{
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error{
  width: 92%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius: 5px;
  text-align: left;
}
.success{
  color: #3c763d;
  background: #dff0d8;
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

</style>
</html>
