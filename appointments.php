<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Appointment</title>
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

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
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
        <h1>Schedule Appointment</h1>
    </header>

    <main>
        <h2>Enter Your Information</h2>

        <form action="process_appointment.php" method="post">
            <label for="patient_name">Your Name:</label>
            <input type="text" name="patient_name" required>

            <label for="appointment_date">Select Date:</label>
            <input type="date" name="appointment_date" required>

            <label for="appointment_time">Select Time:</label>
            <input type="time" name="appointment_time" required>

            <input type="submit" value="Schedule Appointment">
        </form>
        <a href="index.php" class="login-link">Go back to the Index</a>
    </main>

    <footer>
        &copy; 2024 Medical Center
    </footer>

</body>
</html>
