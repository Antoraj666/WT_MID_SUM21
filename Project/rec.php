<?php
  $uname="";
  $err_uname="";
  $pass="";
  $err_pass="";

  $hasError=false;

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"])){
    $err_uname="Username Required";
    $hasError = true;
  }

  else{
    $uname=$_POST["username"];
  }
  if(empty($_POST["password"])){
    $err_pass="password required";
    $hasError = true;
  }

  else{
    $pass=$_POST["password"];
  }
  if(!$hasError){
    echo $_POST["username"]."<br>";
    echo $_POST["password"]."<br>";
  }
  }
?>



<html>
<head><title></title></head>
<body>
<h1 align="center">Welcome Recieptionist<h1>
<h4>Log in here<h4>
<form action="recControl.php" method="post">
<fieldset>
  <legend>LogIn</legend>
    <table>
        <tr>
          <td>Username: </td>
          <td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
          <td><span><?php echo $err_uname;?></span></td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="password" name="password" placeholder="Password"></td>
          <td><span><?php echo $err_pass;?></span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="login"></td>
        </tr>
        <tr>
          <td><p>New here?<a href="recInfo.php">Click Here</a></td>
        </tr>

    </table>
</fieldset>
</form>

</body>
</html>
