<?php
	$name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$email="";
	$err_email="";
	$degree=[];
	$err_degrees="";
	$err_Spesalist="";
	$Spesalist="";
	$err_id="";
	$id="";
	$hasError=false;
	function degreeExist($dis){
		global $degree;
		foreach($degree as $d){
			if($d == $dis){
				return true;
			}
		}
		return false;
	}

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
		if(!isset($_POST["Degrees"])){
			$err_hobbies="Degrees Required";
			$hasError = true;
		}
		else{
			$Drgrees = $_POST["Degrees"];
		}
		if(empty($_POST["Spesalist"])){
			$err_uname="Spesalist Required";
			$hasError = true;
		}

		else{
			$uname=$_POST["Spesalist"];
		}
		if(empty($_POST["id"])){
			$err_uname="id Required";
			$hasError = true;
		}

		else{
			$uname=$_POST["id"];
		}
		if(!isset($_POST["degrees"])){
			$err_degrees="degrees Required";
			$hasError = true;
		}
		else{
			$degree = $_POST["degrees"];
		}

		if(!$hasError){
			echo $name."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["Spesalist"]."<br>";
			echo $_POST["id"]."<br>";

				$arr = $_POST["degrees"];

						foreach($arr as $e){
							echo "$e <br>";
						}
		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Doctor Register here</legend>
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
						<td>Degrees:  </td>
						<td>
							<input type="checkbox" value="mbbs" <?php if(degreeExist("mbbs")) echo "checked"; ?>  name="degrees[]"> mbbs<br>
							<input type="checkbox" value="frcps" <?php if(degreeExist("frcps")) echo "checked"; ?> name="degrees[]"> frcps<br>
							<input type="checkbox" value="Doctor_of_Medicine" <?php if(degreeExist("Doctor_of_Medicine")) echo "checked"; ?> name="degrees[]"> Doctor of Medicine<br>
							<input type="checkbox" value="MD–PhD."<?php if(degreeExist("MD–PhD.")) echo "checked"; ?> name="degrees[]"> MD–PhD.<br>

						</td>
						<td><span><?php echo $err_degrees;?></span></td>
					</tr>
					<tr>
						<td>Spesalist: </td>
						<td><input type="text" name="Spesalist" value="<?php echo $Spesalist;?>" placeholder="Spesalist"></td>
						<td><span><?php echo $err_Spesalist;?></span></td>
					</tr>
					<tr>

						<td>Doctor id: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="Doctor Id"></td>
						<td><span><?php echo $err_id;?></span></td>
					</tr>
		<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
