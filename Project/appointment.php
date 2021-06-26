<?php
	$DocId="";
	$err_DocId="";

	$type="";
	$err_type="";

	$Day="";
	$err_Day="";

	$Time="";
	$err_Time="";

	$err_Diseases="";
	$Diseases="";

	$hasError=false;


	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(empty($_POST["DocId"])){
			$err_DocId="DocId Required";
			$hasError = true;
		}
		else if(strlen($_POST["DocId"]) <=2){
			$err_DocId="DocId Must be greater than 2";
			$hasError = true;
		}
		else{
			$DocId=$_POST["DocId"];
		}


		if(empty($_POST["type"])){
			$err_type="Type Required";
			$hasError = true;
		}

		else{
			$type=$_POST["type"];
		}
		if(empty($_POST["Day"])){
			$err_Day="Day Required";
			$hasError = true;
		}

		else{
			$Day=$_POST["Day"];
		}





		if(empty($_POST["Time"])){
			$err_Time="Time Required";
			$hasError = true;
		}

		else{
			$Time=$_POST["Time"];
		}




		if(!isset($_POST["Diseases"])){
			$err_Diseases="Diseases Required";
			$hasError = true;
		}
		else{
			$Diseases = $_POST["Diseases"];
		}


		if(!$hasError){
			echo $_POST["DocId"]."<br>";
			echo $_POST["type"]."<br>";
			echo $_POST["Day"]."<br>";
			echo $_POST["Time"]."<br>";
			echo $_POST["Diseases"]."<br>";



		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Appointment Register here</legend>
			<form action="" method="post">


				<table >
					<tr>
						<td>DocId: </td>
						<td><textarea type="number" name="DocId" value="<?php echo $DocId;?>" placeholder="DocId"></textarea></td>
						<td><span><?php echo $err_DocId;?></span></td>
					</tr>

					<tr>
						<td>Type: </td>
						<td><input type="text" name="type" value="<?php echo $type;?>" placeholder="Type"></td>
						<td><span><?php echo $err_type;?></span></td>

					</tr>

					<tr>
						<td>Day: </td>
						<td><input type="date" name="Day" value="<?php echo $Day;?>" placeholder="Day"></td>
						<td><span><?php echo $err_Day;?></span></td>
					</tr>

					<tr>
						<td>Time: </td>
						<td><input type="time" name="Time" value="<?php echo $Time;?>" placeholder="Time"></td>
						<td><span><?php echo $err_Time;?></span></td>
					</tr>
					<tr>
						<td>Diseases: </td>
						<td><input type="text" name="Diseases" value="<?php echo $Diseases;?>" placeholder="Diseases"></td>
						<td><span><?php echo $err_Diseases;?></span></td>
					</tr>

					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
