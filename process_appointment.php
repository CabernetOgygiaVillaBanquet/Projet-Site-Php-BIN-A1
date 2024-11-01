<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $patient_name = $_POST["patient_name"];
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];

  
    if (empty($patient_name) || empty($appointment_date) || empty($appointment_time)) {
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

    $sql = "INSERT INTO appointments (patient_name, appointment_date, appointment_time) VALUES ('$patient_name', '$appointment_date', '$appointment_time')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment scheduled successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {

    header("Location: appointments.php");
    exit();
}
?>
