<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('sql212.ezyro.com', 'ezyro_29316367', 'af8vkwneqa', 'ezyro_29316367_mcare');
function clean_data($data){
  $data = htmlspecialchars($data); 
  $data = trim($data);
  $data = stripcslashes($data);
  return $data;
}

// REGISTER USER
if (isset($_POST['feed_back'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  if (count($errors) == 0) {
    $name=clean_data($name);
    $message = clean_data($message);
    $email = clean_data($email);
    $phone = clean_data($phone);
    
  	$query = "INSERT INTO feedback (name,email,phone,message) 
  			  VALUES('$name','$email','$phone', '$message')";
  	mysqli_query($db, $query);
  	header('location: index.php');
  }
}

?>