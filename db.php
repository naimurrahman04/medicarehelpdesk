<?php

$server ="sql212.ezyro.com";
$user ="ezyro_29316367";
$pass= "af8vkwneqa";
$dbname="ezyro_29316367_mcare";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
    die("Connectin falid".mysqli_connect_error());
}


?>