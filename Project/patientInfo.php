<?php
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$paid="";
	$err_paid="";
	$gender="";
	$err_gender="";
	$disease=[];
	$err_diseases="";

	$hasError=false;

	function diseaseExist($dis){
		global $disease;
		foreach($disease as $d){
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
    if(empty($_POST["paid"])){
			$err_paid="Patient ID Required";
			$hasError = true;
		}

		else{
			$paid=$_POST["paid"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["diseases"])){
			$err_diseases="Diseases Required";
			$hasError = true;
		}
		else{
			$disease = $_POST["diseases"];
		}
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
      echo $_POST["paid"]."<br>";
			echo $_POST["gender"]."<br>";
			}
			$arr = $_POST["diseases"];

			foreach($arr as $e){
				echo "$e <br>";
			}
		}



?>

<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Patient Register here</legend>
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
						<td>PatientID: </td>
						<td><input type="text" name="paid" value="<?php echo $paid;?>" placeholder="Patient ID"></td>
						<td><span><?php echo $err_paid;?></span></td>
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
						<td>Diseases:  </td>
						<td>
							<input type="checkbox" value="Allergy" <?php if(diseaseExist("Allergy")) echo "checked"; ?>  name="diseases[]"> Allergy<br>
							<input type="checkbox" value="Asthema" <?php if(diseaseExist("Asthema")) echo "checked"; ?> name="diseases[]"> Asthema<br>
							<input type="checkbox" value="Bronchitis" <?php if(diseaseExist("Bronchitis")) echo "checked"; ?> name="diseases[]"> Bronchitis<br>
							<input type="checkbox" value="COVID_19"<?php if(diseaseExist("COVID_19")) echo "checked"; ?> name="diseases[]"> COVID 19<br>
							<input type="checkbox" value="Cancer" <?php if(diseaseExist("Cancer")) echo "checked"; ?>  name="diseases[]"> Cancer<br>
							<input type="checkbox" value="Diabetes" <?php if(diseaseExist("Diabetes")) echo "checked"; ?> name="diseases[]"> Diabetes<br>
							<input type="checkbox" value="Backpain" <?php if(diseaseExist("Backpain")) echo "checked"; ?> name="diseases[]"> Backpain<br>
							<input type="checkbox" value="Depression"<?php if(diseaseExist("Depression")) echo "checked"; ?> name="diseases[]"> Depression<br>
							<input type="checkbox" value="Diphtheria" <?php if(diseaseExist("Diphtheria")) echo "checked"; ?>  name="diseases[]"> Diphtheria<br>
							<input type="checkbox" value="Heart_Disease" <?php if(diseaseExist("Heart_Disease")) echo "checked"; ?> name="diseases[]"> Heart Disease<br>
							<input type="checkbox" value="High_Blood_Pressure" <?php if(diseaseExist("High_Blood_Pressure")) echo "checked"; ?> name="diseases[]"> High Blood Pressure<br>
							<input type="checkbox" value="Flu"<?php if(diseaseExist("Flu")) echo "checked"; ?> name="diseases[]"> Flu<br>
						</td>
						<td><span><?php echo $err_diseases;?></span></td>
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
