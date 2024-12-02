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
	<title>All Users</title>
    <style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #eef2f3;
			margin: 0;
			padding: 20px;
		}
		h2 {
			color: #333;
			text-align: center;
			margin-bottom: 20px;
		}
		ul {
			list-style-type: none;
			padding: 0;
			display: flex;
			flex-wrap: wrap;
			justify-content: center; /* Center the cards */
		}
		li {
			background: #ffffff;
			margin: 10px;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			width: 200px; /* Fixed width for cards */
			text-align: center;
			transition: transform 0.2s, box-shadow 0.2s; /* Smooth transition */
		}
		li:hover {
			transform: translateY(-5px); /* Lift effect on hover */
			box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
		}
		nav {
			background-color: #007BFF; /* Bootstrap Primary Color */
			color: white;
			padding: 15px;
			margin-bottom: 20px;
			text-align: center;
			border-radius: 8px;
		}
		nav a {
			color: white;
			text-decoration: none;
			margin: 0 15px;
			font-weight: bold;
		}
		nav a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<h2>All Users</h2>
	<ul>
		<?php $getAllUserss = getAllUserss($pdo);?>
		<?php foreach ($getAllUserss as $row) { ?>
			<li><?php echo htmlspecialchars($row['username']); ?></li>
		<?php } ?>
	</ul>
</body>
</html>