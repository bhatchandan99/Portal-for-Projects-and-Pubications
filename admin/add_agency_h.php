<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<center>
		<h1> Welcome to the add agency in database page.</h1>
		<div style="border: solid 2px; padding: 20px; width: 600px;">
			<form name="user" method="POST" action="add_agency.php">
				Your Admin_id:
				<input type="text" name="id" required><br><br>
				Your password:
				<input type="password" name="pass" required><br><br>
				Name of new Agency:
				<input type="text" name="name" required><br><br>

				<input type="submit" name="register" value="Register">
			</form>
		</div>
	</center>
</body>
</html>
