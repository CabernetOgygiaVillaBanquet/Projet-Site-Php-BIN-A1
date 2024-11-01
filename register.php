<?php

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
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $user_type = $_POST["user_type"]; 

    $sql = "INSERT INTO users (username, password, email, user_type) VALUES ('$username', '$password', '$email', '$user_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!<br>";
        echo '<a href="login_user.html">Go back to Login</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
