<?php
	$name="";
	$err_name="";
	$type="";
	$err_type="";
	$err_cost="";
	$cost="";
	$testId="";
	$err_testId="";
	$PatientID="";
	$err_PatientID="";
	$Time="";
	$err_Time="";
	$DeliveryTime="";
	$err_DeliveryTime="";


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

		if(empty($_POST["type"])){
			$err_type="type Required";
			$hasError = true;
		}

		else{
			$type=$_POST["type"];
		}

		if(empty($_POST["cost"])){
			$err_cost="cost Required";
			$hasError = true;
		}

		else{
			$cost=$_POST["cost"];
		}




		if(empty($_POST["testId"])){
			$err_testId="testId Required";
			$hasError = true;
		}

		else{
			$testId=$_POST["testId"];
		}




		if(empty($_POST["PatientID"])){
			$err_PatientID="PatientID Required";
			$hasError = true;
		}

		else{
			$PatientID=$_POST["PatientID"];
		}




		if(empty($_POST["Time"])){
			$err_Time="Time Required";
			$hasError = true;
		}

		else{
			$Time=$_POST["Time"];
		}





		if(empty($_POST["DeliveryTime"])){
			$err_DeliveryTime="DeliveryTime Required";
			$hasError = true;
		}
		else{
			$DeliveryTime = $_POST["DeliveryTime"];
		}







		if(!$hasError){
			echo $name."<br>";
		    echo $_POST["type"]."<br>";
			echo $_POST["cost"]."<br>";
			echo $_POST["testId"]."<br>";
	        echo $_POST["PatientID"]."<br>";
			echo $_POST["Time"]."<br>";
			echo $_POST["DeliveryTime"]."<br>";

		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New TEST Register here</legend>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>

					</tr>
					<tr>
						<td>type: </td>
						<td><input type="text" name="type" value="<?php echo $type;?>" placeholder="type"></td>
						<td><span><?php echo $err_type;?></span></td>
					</tr>
					<tr>
						<td>cost: </td>
						<td><textarea type="number" name="cost" value="<?php echo $cost;?>" placeholder="cost"></textarea></td>
						<td><span><?php echo $err_cost;?></span></td>
					</tr>


					<tr>
						<td>testId: </td>
						<td><input type="number" name="testId" value="<?php echo $testId;?>" placeholder="testId"></td>
						<td><span><?php echo $err_testId;?></span></td>
					</tr>
					<tr>
						<td>Patient ID: </td>
						<td><input type="text" name="PatientID" value="<?php echo $PatientID;?>" placeholder="PatientID"></td>
						<td><span><?php echo $err_PatientID;?></span></td>
					</tr>

          <tr>
						<td>Time: </td>
						<td><input type="time" name="Time" value="<?php echo $Time;?>" placeholder="Time"></td>
						<td><span><?php echo $err_Time;?></span></td>
					</tr>


					<tr>
						<td>DeliveryTime: </td>
						<td><input type="time" name="DeliveryTime" value="<?php echo $DeliveryTime;?>" placeholder="DeliveryTime"></td>
						<td><span><?php echo $err_DeliveryTime;?></span></td>
					</tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
