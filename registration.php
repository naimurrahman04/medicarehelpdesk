<?php include('dbconnect.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 
    <nav id="navbar">

      <ul>
          <li class="menu"><a href="index.php">Home</a></li>
          <li class="menu"><a href="login.php">Login</a></li>
          <li class="menu"><a href="services.php">Services</a></li>
          <li class="menu"><a href="about.php">About</a></li>
          <li class="menu"><a href="contact.ph">Contact</a></li>
          
      </ul>
  </nav>

    <form class="signup-form" action="registration.php" method="post">

    <?php include('error.php'); ?>
      <div class="form-header">
        <h1>Create Account</h1>
      </div>

      
      <div class="form-body">


        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="fname" class="label-title">First name *</label>
            <input type="text" id="fname" name="fname" class="form-input" placeholder="enter your first name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lname" class="label-title">Last name</label>
            <input type="text" id="lastname" name="lname" class="form-input" placeholder="enter your last name" />
          </div>
          <div class="form-group leftt">

          <label for="username"class="label-title" >User Name</label>
            <input value="<?php echo $username; ?> "class="form-input" type="text" name="username" id="name" placeholder="enter your name">
          </div>
        </div>




        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input value="<?php echo $email; ?>" name="email" type="email" id="email" class="form-input" placeholder="Enter your email" >
        </div>
        

        <!-- Mobile -->
        <div class="form-group">
          <label for="mobile_number" class="label-title">Mobile Number*</label>
          <input type="mobile_number" name="mobile" id="mobile_number" class="form-input" placeholder="Enter your Moble Number" required="required">
        </div>
        <div class="form-group">
          <label for="mobile_number" class="label-title">availability</label>
          <select name="availability" class="form-input" id="level" required>
              <option value="">Select One</option>
              <option value="yes">yes</option>
              <option value="no">no</option>
            </select>
        </div>
        


        <!-- Passwrod and Confirm Password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input name="password" type="password" id="password" class="form-input" placeholder="enter your password" required="required">
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password *</label>
            <input name="password2" type="password" class="form-input" id="confirm-password" placeholder="enter your password again" required="required">
          </div>
        </div>

        

        <!-- Blood Group -->

        <div class="horizontal-group">
          <div class="form-group left" >
            <label class="label-title">Blood Group *</label>
            <select name="bgroup" class="form-input" id="level" required>
              <option value="">Select One</option>
              <option value="A+">A(+)</option>
              <option value="A-">A(-)</option>
              <option value="B+">B(+)</option>
              <option value="B-">B(-)</option>
              <option value="AB+">AB(+)</option>
              <option value="AB-">AB(-)</option>
              <option value="O+">O(+)</option>
              <option value="O-">O(-)</option>
            </select>
          <div class="form-group left">
            <label for="experience" class="label-title">Age</label>
            <input name="age" type="number" min="18" max="80"  value="18" class="form-input">
          </div>
        </div>

        <!-- Address -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label class="label-title">City *</label>
            <select name="city" class="form-input" id="level" required>
              <option value="">Select One</option>
              <option value="Dhaka">Dhaka</option>
              <option value="Chandpur">Chandpur</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Comilla">Comilla</option>
              <option value="Jessore">Jessore</option>
              <option value="Barisal">Barisal</option>
              <option value="Khulna">Khulna</option>
              <option value="coxbazar">coxbazar</option>

            </select>
      
      <div class="form-footer">
       
        <button name="reg_user" type="submit" class="btn">Create Account</button>
      </div>

    </form>

  </body>
</html>