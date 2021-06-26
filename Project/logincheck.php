<?php
$uname="";
$err_uname="";
$pass="";
$err_pass="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty($_POST["username"]) || empty($_POST["password"]) ){
    if(empty($_POST["username"])){
      $err_uname="username required";
      $hasError = true;
    }
    if(empty($_POST["password"])){
      $err_pass="password required";
      $hasError = true;
    }

  }

  else{
  $uname=$_POST["username"];
  $pass=$_POST["password"];

    header("Location:adminControl.php");
  }
}
 ?>
