<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
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
		p {
			margin-bottom: 15px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #555;
		}
		input[type="text"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box; /* Ensures padding doesn't affect width */
		}
		input[type="submit"] {
			background-color: #5cb85c;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-right: 10px; /* Add some space between the button and link */
		}
		input[type="submit"]:hover {
			background-color: #4cae4c;
		}
		a {
			display: inline-block;
			text-decoration: none;
			color: white;
			background-color: #d9534f; /* Bootstrap Danger color */
			padding: 10px 15px;
			border-radius: 4px;
			text-align: center;
		}
		a:hover {
			background-color: #c9302c; /* Darker red on hover */
		}
	</style>
</head>
<body>
	<?php $getUserByID = getUserByID($pdo, $_GET['id']); ?>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="Name">Name</label> 
			<input type="text" name="Name" value="<?php echo $getUserByID['Name']; ?>">
		</p>
		<p>
			<label for="Name">Nursing Hierarchy </label> 
			<input type="text" name="NursingHierarchy" value="<?php echo $getUserByID['NursingHierarchy']; ?>">
		</p>
		<p>
			<label for="Name">Email</label> 
			<input type="text" name="Email" value="<?php echo $getUserByID['Email']; ?>">
		</p>
		<p>
			<label for="Name">Phone Number</label> 
			<input type="text" name="PhoneNumber" value="<?php echo $getUserByID['PhoneNumber']; ?>">
		</p>
		<p>
			<label for="Name">License Number</label> 
			<input type="text" name="LicenseNumber" value="<?php echo $getUserByID['LicenseNumber']; ?>">
		</p>

		<p>
			<input type="submit" value="Save" name="editUserBtn">
			<a href ="index.php">Cancel</a>
		</p>
	</form>
</body>
</html>
