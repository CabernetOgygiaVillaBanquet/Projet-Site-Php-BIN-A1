<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            text-align: justify;
        }

        section {
            margin-bottom: 30px;
        }

        h2 {
            color: #007bff;
        }

        p {
            line-height: 1.6;
        }

        .about {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .about img {
            max-width: 25%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
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
        <h1>About Us</h1>
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
        <section class= "about">
            <img src="mission.jpeg" alt="About Image 1">
            <h2>Our Mission</h2>
            <p>Our mission is to provide high-quality, compassionate and affordable health care to our patients and their families. We are committed to excellence in every aspect of our work, from prevention and diagnosis to treatment and recovery. We strive to uphold the highest ethical standards and respect the dignity and diversity of every person we serve. We are dedicated to advancing medical knowledge and innovation through research and education. We are proud to be part of a global community of health professionals who share our vision and values.</p>
        </section>

        <section class= "about">
            <img src="team.jpg" alt="About Image 1">
            <h2>Our Team</h2>
            <p>We are a group of experienced and qualified medical professionals who are committed to providing the best care for our patients. We have expertise in various fields of medicine, such as cardiology, neurology, oncology, orthopedics, pediatrics, and more. We work together as a team to ensure that our patients receive the most comprehensive and personalized treatment possible. We are also passionate about advancing medical knowledge and research, and we participate in various clinical trials and educational programs. Our team is dedicated to improving the health and well-being of our community.</p>
        </section>
    </main>

    <footer>
        &copy; 2024 Medical Center
    </footer>

</body>
</html>
