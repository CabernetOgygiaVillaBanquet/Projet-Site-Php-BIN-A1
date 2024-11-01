<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
        exit();
    }

  
    $servername = "localhost";
    $username = "root";
    $password = "Villa2023!";
    $dbname = "medical_center";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {

    header("Location: contact_us.php");
    exit();
}
?>