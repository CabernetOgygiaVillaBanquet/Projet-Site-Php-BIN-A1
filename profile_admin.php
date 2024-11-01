<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login_admin.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["logout"])) {
    include("logout.php");
}

$servername = "localhost";
$username = "root";
$password = "Villa2023!";
$dbname = "user_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION["user_id"];

$sql = "SELECT id, username, email, user_type FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row["username"];
    $email = $row["email"];
} else {
    echo "User not found";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            padding: 10px;
            text-align: center;
            color: #fff;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .profile-container {
            margin: 20px;
        }

        .logout-link {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        h2 {
            color: #3498db;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome, <?php echo $username; ?>!</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="patient.php">Patients</a>
        <a href="admin_appointments.php">Appointments</a>
        <a href="profile_admin.php?logout=true" class="logout-link">Logout</a>
    </nav>

    <div class="profile-container">
        <h2>Admin Information</h2>
        <p>Username: <?php echo $username; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Authorized Access: Scheduling, Billing and Record Access</p>
    </div>

</body>
</html>
