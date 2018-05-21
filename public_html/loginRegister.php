<html lang="en">
 <link rel= "stylesheet" type= "text/css" href = "css/site.css">
<?php
 ?>
<input type='checkbox' id='form-switch'>
<form id='login-form' method='POST' action = "loginUser.php">
  <input type="text" placeholder="Username/Email" name="username">
  <input type="password" placeholder="Password" name="password">
  <button type='submit' id="login" name="submit">Login</button>
  <label for='form-switch'><span>Register or</span></label>
  <label><span><a href= "index.php">Continue as a guest</a></span></label>
</form>
<form id='register-form' method='POST' action = "registerData.php" >
  <input type="text" placeholder="First name" name="first">
  <input type="text" placeholder="Last name" name="last">
  <input type="text" placeholder="Email" name="email">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="Password" name="password">
  <button type='submit' id="register" name="submit">Register</button>
  <label for='form-switch'>Already a Member? Sign In Now..</label>
</form>
</html>