<?php
	$name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$email="";
	$err_email="";
	$Stafid="";
	$err_Stafid="";
	$role="";
	$err_role="";


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
		if(empty($_POST["Stafid"])){
			$err_Stafid="Stafid Required";
			$hasError = true;
		}

		else{
			$Stafid=$_POST["Stafid"];
		}
		if(empty($_POST["role"])){
			$err_role="role Required";
			$hasError = true;
		}

		else{
			$role=$_POST["role"];
		}


		if(!$hasError){
			echo $name."<br>";
		    echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
	        echo $_POST["Stafid"]."<br>";
			echo $_POST["role"]."<br>";


		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New STAFF Register here</legend>
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
						<td>Stafid: </td>
						<td><input type="text" name="Stafid" value="<?php echo $Stafid;?>" placeholder="Stafid"></td>
						<td><span><?php echo $err_Stafid;?></span></td>
					</tr>

<tr>
						<td>role: </td>
						<td><input type="text" name="role" value="<?php echo $role;?>" placeholder="role"></td>
						<td><span><?php echo $err_role;?></span></td>
					</tr>

						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
