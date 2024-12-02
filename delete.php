<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f9;
			margin: 0;
			padding: 20px;
		}
		h1 {
			color: #333;
			text-align: center;
			margin-bottom: 20px;
		}
		.container {
			background: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
			max-width: 500px;
			margin: auto;
		}
		h2 {
			color: #555;
		}
		.deleteBtn {
			text-align: right;
			margin-top: 20px;
		}
		input[type="submit"] {
			background-color: #d9534f; /* Danger color */
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #c9302c; /* Darker red on hover */
		}
		a {
			text-decoration: none;
			color: #fff;
			background-color: #5bc0de; /* Info color */
			padding: 10px 15px;
			border-radius: 4px;
		}
		a:hover {
			background-color: #31b0d5; /* Darker blue on hover */
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserByID = getUserByID($pdo, $_GET['id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>Name: <?php echo $getUserByID['Name']; ?></h2>
		<h2>Nursing Hierarchy: <?php echo $getUserByID['NursingHierarchy']; ?></h2>
		<h2>Email: <?php echo $getUserByID['Email']; ?></h2>
		<h2>Phone Number: <?php echo $getUserByID['PhoneNumber']; ?></h2>
		<h2>License Number: <?php echo $getUserByID['LicenseNumber']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
				<a href ="index.php" style="background-color: #f69697; border-style: solid;">Cancel</a>
			</form>			
		</div>	

	</div>
</body>
</html>
