<!DOCTYPE html>
<html>
	<head><title>Contact Page</title>
		<link rel="stylesheet" href="style.css">
</head>
	<body>
    <?php  include('header.php')?>
        <?php  include('menu.php')?>
<div id="login-box">
       <div class="left-box">
       <h1> sign up </h1>	
        
	<input type="text" name="username" 	placeholder="username"/>
	<input type="text" name="email" placeholder="Email"/>
	<input type="password" name="password" placeholder="Password"/>
	
	<input type="password" name="password2" placeholder="retype password"/>
	<input type="submit" name="signup-button" value="sign up"/>
     </div>
	 
	 <div class="right-box">
	  <span class="signwith">Sign in with</br>Social Network</span>
	  
	  <button class="social facebook"> Log in with Facebook</button>
	  <button  class="social twitter"> Log in with Twitter</button>
	  <button class="social google"> Log in with Google+</button>
	 </div>
	 <div class="or">OR</div>
   </div>