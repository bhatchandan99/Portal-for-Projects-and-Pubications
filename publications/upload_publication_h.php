<!DOCTYPE html>
<html>
<head>
	<title>Publications</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<center>
		<h1> Welcome to the Upload Publications page.</h1>
		<div style="border: solid 2px; padding: 20px; width: 600px;">
			<form name="user" method="POST" action="upload_publication.php">
				Your Id:
				<input type="text" name="uid" required><br><br>
				Your Password:
				<input type="password" name="pass" required><br><br>
				Publication Name:
				<input type="text" name="name" required><br><br>
				Details:
				<input type="text" name="detail" required><br><br>
				Type:
				<select name="type">
					<option value="journal">journal</option>
					<option value="conference">conference</option>
				</select><br><br>
				DOB (YYYY-MM-DD):
				<input type="text" name="date"><br><br>

				<input type="submit" name="register" value="Register">
			</form>
		</div>
	</center>
</body>
</html>
