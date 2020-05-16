<?php
	include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Publications</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<center>
		<h1> Feed Research of Publication.</h1>
		<div style="border: solid 2px; padding: 20px; width: 600px;">
			<form name="user" method="POST" action="feed_research_pub.php">
				Publication Id:
				<select name="id">
				<?php
					$sql = "select * from publication;";
					if($stmt = $conn->prepare($sql)){
						$stmt->execute();
						$stmt->store_result();
				    	if($stmt->num_rows!=0) {
							$stmt->bind_result($pro_id,$name,$b,$c,$d,$e);
							while ($stmt->fetch()) { ?>
								<option value="<?php echo $pro_id; ?>"><?php echo $pro_id;
							}
						}
						else {
							echo "No Data found!!";
						}
					} else {
						die("Query failed!! \n");
					}
				?></select><br><br>
				Mark your Research areas:- <br>
				<?php
					$sql = "select * from research;";
					if($stmt = $conn->prepare($sql)){
						$stmt->execute();
						$stmt->store_result();
				    	if($stmt->num_rows!=0) {
							$stmt->bind_result($r_id, $name);
							while ($stmt->fetch()) { ?>
								<input type="checkbox" name="chk[]" value="<?php echo $r_id; ?>"><?php echo $name; ?> <?php
							}
						}
						else {
							echo "No Data found!!";
						}
					} else {
						die("Query failed!! \n");
					}
				?><br><br>
				<input type="submit" name="register" value="Submit">
			</form>
		</div>
	</center>
</body>
</html>
