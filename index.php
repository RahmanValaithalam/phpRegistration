
<html>
<head>
	<title>Registration</title>
	
</head>

<body>
	
	<form action="index.php" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr> 
				<td>Mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="Password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input class="bt" type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	if(isset($_POST['Submit'])) {
		$Username = $_POST['Username'];
		$email = $_POST['email'];
		$Password = $_POST['Password'];
		
	
		include_once("connect.php");
				
		
		$result = mysqli_query($con,"INSERT INTO user(username,password,email) VALUES('$Username','$Password','$email')");
		
		
		
		echo "User added successfully ";
	}
	?>
</body>
</html>
