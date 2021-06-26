<?php
	$name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$email="";
	$err_email="";
	$id="";
	$err_id="";
	$workhour="";
	$err_workhour="";
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

		if(empty($_POST["phone"])){
			$err_phone="phone Required";
			$hasError = true;
		}

		else{
			$phone=$_POST["phone"];
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
		if(empty($_POST["id"])){
			$err_id="id Required";
			$hasError = true;
		}

		else{
			$uname=$_POST["id"];
		}
		if(empty($_POST["workhour"])){
			$err_workhour="workhour Required";
			$hasError = true;
		}

		else{
			$uname=$_POST["workhour"];
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
		  echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
	    echo $_POST["id"]."<br>";
			echo $_POST["workhour"]."<br>";
			echo $_POST["gender"]."<br>";

		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Nurse Register here</legend>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>

					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="number" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
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
						<td>id: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="id"></td>
						<td><span><?php echo $err_id;?></span></td>
					</tr>

<tr>
						<td>workhour: </td>
						<td><input type="time" name="workhour" value="<?php echo $workhour;?>" placeholder="workhour"></td>
						<td><span><?php echo $err_workhour;?></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female</td>
					</tr>

					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
