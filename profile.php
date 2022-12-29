<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Profile</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css">
  </head>
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM userinfo where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
  ?>
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="profile.php" >
        <div class="horizontal-group">
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
            <button name="feed_back" type="submit" class="btn">Submit</button>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $city = $_POST['city'];
        $availability = $_POST['availability'];
        $password =$_POST['password'];
      $query = "UPDATE userinfo SET uname = '$uname',
                      city = '$city', availability = '$availability', password='$password'
                      WHERE id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>