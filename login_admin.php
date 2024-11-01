<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "Villa2023!";
$dbname = "user_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, password, user_type FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"]) && $row["user_type"] === 'admin') {
            $_SESSION["user_id"] = $row["id"];
            header("Location: profile_admin.php");
        } else {
            echo "Invalid credentials or not an admin account";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
