<?php
	$type="";
	$err_type="";

	$ChemicalName="";
	$err_ChemicalName="";

	$IndustrialName="";
	$err_IndustrialName="";

	$Amount="";
	$err_Amount="";

	$err_Purpose="";
	$Purpose="";

	$err_MedId="";
	$MedId="";


	$hasError=false;


	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(empty($_POST["type"])){
			$err_type="Type Required";
			$hasError = true;
		}
		else if(strlen($_POST["type"]) <=2){
			$err_type="type Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["type"];
		}
		if(empty($_POST["ChemicalName"])){
			$err_ChemicalName="ChemicalName Required";
			$hasError = true;
		}

		else{
			$ChemicalName=$_POST["ChemicalName"];
		}
		if(empty($_POST["IndustrialName"])){
			$err_IndustrialName="IndustrialName Required";
			$hasError = true;
		}

		else{
			$IndustrialName=$_POST["IndustrialName"];
		}
		if(empty($_POST["Amount"])){
			$err_Amount="Amount Required";
			$hasError = true;
		}

		else{
			$Amount=$_POST["Amount"];
		}
		if(empty($_POST["Purpose"])){
			$err_Purpose="Purpose Required";
			$hasError = true;
		}

		else{
			$Purpose=$_POST["Purpose"];
		}
		if(empty($_POST["MedId"])){
			$err_MedId="MedId Required";
			$hasError = true;
		}

		else{
			$MedId=$_POST["MedId"];
		}


		if(!$hasError){
			echo $type."<br>";
			echo $_POST["ChemicalName"]."<br>";
			echo $_POST["IndustrialName"]."<br>";
			echo $_POST["Amount"]."<br>";
			echo $_POST["Purpose"]."<br>";
			echo $_POST["MedId"]."<br>";


		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Medicine Register here</legend>
			<form action="" method="post">
				<table >
					<tr>
						<td>type</td>
						<td><input type="text" name="type" value="<?php echo $type;?>" placeholder="Type"></td>
						<td><span><?php echo $err_type;?></span></td>

					</tr>
					<tr>
						<td>ChemicalName: </td>
						<td><input type="text" name="ChemicalName" value="<?php echo $ChemicalName;?>" placeholder="ChemicalName"></td>
						<td><span><?php echo $err_ChemicalName;?></span></td>
					</tr>
					<tr>
						<td>IndustrialName: </td>
						<td><input type="text" name="IndustrialName" value="<?php echo $IndustrialName;?>" placeholder="IndustrialName"></td>
						<td><span><?php echo $err_IndustrialName;?></span></td>
					</tr>
					<tr>
						<td>Amount(mg): </td>
						<td><input type="number" name="Amount" value="<?php echo $Amount;?>" placeholder="Amount"></td>
						<td><span><?php echo $err_Amount;?></span></td>
					</tr>
					<tr>
						<td>Purpose: </td>
						<td><input type="text" name="Purpose" value="<?php echo $Purpose;?>" placeholder="Purpose"></td>
						<td><span><?php echo $err_Purpose;?></span></td>
					</tr>
					<tr>
						<td>MedId: </td>
						<td><input type="text" name="MedId" value="<?php echo $MedId;?>" placeholder="MedId"></td>
						<td><span><?php echo $err_MedId;?></span></td>
					</tr>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>

					
					
					
					
					
					
					
					
					
					