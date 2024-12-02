<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
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
		}
		.greeting {
			text-align: center;
			margin-bottom: 20px;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			background: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}
		form {
			display: flex;
			justify-content: center;
			margin-bottom: 20px;
		}
		input[type="text"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			width: 70%;
			margin-right: 10px;
		}
		input[type="submit"] {
			background-color: #007BFF;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}
		th, td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}
		th {
			background-color: #007BFF;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		tr:hover {
			background-color: #ddd;
		}
		a {
			color: #007BFF;
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="greeting" style="text-align: center;">
		<h1 style="text-align: center;">Hello theree! Welcome, <?php echo $_SESSION['username']; ?></h1>
		<h1><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></h1>	
	</div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here">
		<input type="submit" name="searchBtn">
	</form>

	<p><a href="index.php">Clear Search Query</a></p>
    <Br>
	<p><a href="insert.php">Insert New User</a></p>

	<table style="width:100%; margin-top: 20px;">
		<tr>
			<th>Name</th>
			<th>Nursing Hierarchy</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>License Number</th>
			<th>Submission Date</th>
			<th>Action</th>
		</tr>

		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllUsers = getAllUsers($pdo); ?>
				<?php foreach ($getAllUsers as $row) { ?>
					<tr>
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['NursingHierarchy']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['PhoneNumber']; ?></td>
						<td><?php echo $row['LicenseNumber']; ?></td>
						<td><?php echo $row['SubmissionDate']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
			<?php } ?>
			
		<?php } else { ?>
			<?php $searchForAUser =  searchForAUser($pdo, $_GET['searchInput']); ?>
				<?php foreach ($searchForAUser as $row) { ?>
					<tr>
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['NursingHierarchy']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['PhoneNumber']; ?></td>
						<td><?php echo $row['LicenseNumber']; ?></td>
						<td><?php echo $row['SubmissionDate']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
		<?php } ?>	
		
	</table>
</body>
</html>