<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Information</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #495057;
        }

        header {
            background-color: #007bff;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        main {
            margin: 20px;
        }

        h2 {
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        footer {
            background-color: #007bff;
            padding: 10px;
            text-align: center;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Appointments Summary</h1>
    </header>

    <main>
        <h2>List of Appointments</h2>

        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "Villa2023!";
        $dbname = "medical_center";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT id, patient_name, appointment_date, appointment_time FROM appointments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>ID</th><th>Name</th><th>Appointment Date</th><th>Appointment Time</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['patient_name'] . '</td>';
                echo '<td>' . $row['appointment_date'] . '</td>';
                echo '<td>' . $row['appointment_time'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'No appointments found.';
        }

        $conn->close();
        ?>
    </main>

    <p><a href="profile_admin.php" class="login-link">Go back to the Index</a></p>

    <footer>
        &copy; 2024 Medical Center
    </footer>

</body>
</html>
