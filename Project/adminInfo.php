<?php
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$adminid="";
	$err_adminid="";
	$gender="";
	$err_gender="";

	$hasError=false;

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["address"])){
			$err_address="Address Required";
			$hasError = true;
		}

		else{
			$address=$_POST["address"];
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}

		else{
			$email=$_POST["email"];
		}
		if(empty($_POST["phone"])){
			$err_phone="phone Required";
			$hasError = true;
		}

		else{
			$phone=$_POST["phone"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}

		else{
			$uname=$_POST["username"];
		}
    if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}

		else{
			$pass=$_POST["password"];
		}
    if(empty($_POST["adminid"])){
			$err_adminid="AdminID Required";
			$hasError = true;
		}

		else{
			$adminid=$_POST["adminid"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
      echo $_POST["adminid"]."<br>";
			echo $_POST["gender"]."<br>";
			}
		}



?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Recieptionist Register here</legend>
							<div align="center">
			<form action="" method="post">

				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>

					</tr>
					<tr>
						<td>Address: </td>
						<td><textarea type="text" name="address" value="<?php echo $address;?>" placeholder="Address"></textarea></td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="number" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
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
						<td>AdminID: </td>
						<td><input type="text" name="adminid" value="<?php echo $adminid;?>" placeholder="Admin ID"></td>
						<td><span><?php echo $err_adminid;?></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td>Date of birth: </td>

    <td><input type="date" name="begin"
        placeholder="dd-mm-yyyy" value=""
        min="1987-01-01" max="2021-12-31"></td>
				  </tr>
					<tr>
						<td align="" colspan="2"><input type="submit" value="Register"></td>
					</tr>
				</table>
			</form>
		</div>
		</fieldset>
	</body>
</html>
