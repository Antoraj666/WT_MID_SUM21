	<?php
include 'logincheck.php';
echo $uname. "<br>";
echo $pass. "<br>";
	?>



<html>
<head><title></title></head>
<body>
<h1 align="center">Welcome Admin<h1>
<h4>Log in here<h4>
	<form method="post">
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
						<td><p>New here?<a href="adminInfo.php">Click Here</a></td>
					</tr>

			</table>
	</fieldset>
	</form>

</body>
</html>
