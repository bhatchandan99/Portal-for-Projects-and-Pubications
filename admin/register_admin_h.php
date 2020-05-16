<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<center>
		<h1> Welcome to the Admin registration page.</h1>
		<div style="border: solid 2px; padding: 20px; width: 600px;">
			<form name="user" method="POST" action="register_admin.php">
				Your Admin_id:
				<input type="text" name="id" required><br><br>
				Your password:
				<input type="password" name="pass" required><br><br>
				Name of new admin:
				<input type="text" name="name" required><br><br>
				Email of new admin:
				<input type="email" name="email" required><br><br>
				Password of new admin:
				<input type="password" name="password" required><br><br>
				Phone of new admin:
				<input type="text" name="phone" required><br><br>
				DOB of new admin(YYYY-MM-DD):
				<input type="text" name="date"><br><br>
				Gender (YYYY-MM-DD):
				<select name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select><br><br>

				<input type="submit" name="register" value="Register">
			</form>
		</div>
	</center>
</body>
</html>
