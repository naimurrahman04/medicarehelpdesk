<?php include('dbconnect.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Login Form</title>
</head>
   
<body>
    <nav id="navbar">
        <ul>
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="login.php">Login</a></li>
            <li class="menu"><a href="services.php">Services</a></li>
            <li class="menu"><a href="about.php">About</a></li>
            <li class="menu"><a href="contact.php">Contact</a></li>
            <li class="menu"><a href="registration.php">Registration</a></li>
            
        </ul>
    </nav>
  
    <form  class="signup-form" action="login.php" method="post">

    <?php include('error.php'); ?>
<div class="form-header">
  <h1>Login</h1>
</div>


<div class="form-body">


  <div class="horizontal-group">
    <div class="form-group left">
      <label for="username" class="label-title">Username </label>
      <input type="text" id="username" name="username" class="form-input" placeholder="enter your username" required="required" />
    </div>
  
  </div>

  <div class="horizontal-group">

    <div class="form-group right">
      <label for="confirm-password" class="label-title">Password </label>
      <input name="password" type="password" class="form-input" id="confirm-password" placeholder="enter your password" required="required">
    </div>
  </div>
<div class="form-footer">
<button type="submit" class="btn" name="login_user">Login</button>
</div>

</form>
</body>
  
</html>