<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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


        main {
            margin: 20px;
            text-align: center;
        }

        section {
            margin-bottom: 30px;
        }

        h2 {
            color: #007bff;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 400px;
            margin: auto;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        footer {
            background-color: #007bff;
            padding: 10px;
            text-align: center;
            color: #fff;
            position: flex;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Contact Us</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about_us.php">About Us</a>
        <a href="services.php">Our Services</a>
        <a href="appointments.php">Schedule an appointment</a>
        <a href="contact_us.php">Contact Us</a>
        <a href="register_user.html">Register</a>
        <a href="login_user.html">Login</a>
   
    </nav>

    <main>
        <section>
            <h2>Get in Touch</h2>
            <form action="process_contact_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="message">Message:</label>
                <textarea name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>

        <section>
            <h2>Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224451.91138319517!2d-0.2417008102574847!3d51.528771840206645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876035a7b6a06db%3A0x8b21c47c2566a3e!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1626178850626!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <div id="bot">
            <h2>Meet Kari, our Virtual Assistant</h2>
            <iframe src="https://web.powerva.microsoft.com/environments/c541b33d-1b53-486b-84ae-1473cf6ecfa1/bots/new_bot_7dbaf08830924dc1973623d60ed03ab7/webchat" frameborder="0" style="width 400; height:600px; style border:0;"></iframe>
        </div> 
    </main>
    

    <footer>
        &copy; 2024 Medical Center
    </footer>

</body>
</html>
