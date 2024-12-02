<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #eaeaea;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .greeting {
            text-align: center;
            margin-bottom: 30px;
            padding: 30px;
            background-color: #007BFF; /* Bootstrap Primary Color */
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .greeting h1 {
            font-size: 2em;
            margin: 0;
        }

        .navbar {
            text-align: center;
            background-color: #343a40; /* Dark Gray */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar h3 {
            margin: 0;
        }

        .navbar a {
            color: #f8f9fa; /* Light Gray */
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .navbar a:hover {
            background-color: #495057; /* Darker Gray */
            transform: scale(1.05); /* Slightly enlarges the link */
        }

        .navbar a:active {
            transform: scale(0.95); /* Slightly shrinks the link on click */
        }
    </style>
</head>
<body>

<div class="greeting">
    <h1>Hello there! Welcome, <span style="color: yellow;"><?php echo $_SESSION['username']; ?></span></h1>
</div>

<div class="navbar">
    <h3>
        <a href="index.php">Home</a>
        <a href="insert.php">Add New</a>
        <a href="allusers.php">All Users</a>
        <a href="activitylogs.php">Activity Logs</a>
        <a href="core/handleForms.php?logoutUser Btn=1">Logout</a> 
    </h3>  
</div>

</body>
</html>