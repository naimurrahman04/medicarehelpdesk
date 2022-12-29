<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('sql212.ezyro.com', 'ezyro_29316367', 'af8vkwneqa', 'ezyro_29316367_mcare');
function clean_data($data){
  $data = htmlspecialchars($data); 
  $data = trim($data);
  $data = stripcslashes($data);
  return $data;
}


if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $bgroup = mysqli_real_escape_string($db, $_POST['bgroup']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $availability =mysqli_real_escape_string($db, $_POST['availability']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
  }


  $user_check_query = "SELECT * FROM userinfo WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {
    $fname=clean_data($fname);
    $lname = clean_data($lname);
    $username = clean_data($username);
    $email = clean_data($email);
    $mobile = clean_data($mobile);
    $password = clean_data($password);
    $password = md5($password);
    $bgroup = clean_data($bgroup);
    $age = clean_data($age);
    $city = clean_data($city);
    $availability = clean_data($availability);
  	$query = "INSERT INTO userinfo (fname,lname,username,email,password,mobile,age,bgroup,city,availability) 
  			  VALUES('$fname','$lname','$username', '$email', '$password','$mobile','$age','$bgroup','$city','$availability')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>