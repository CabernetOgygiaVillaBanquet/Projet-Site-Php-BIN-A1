<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
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
        }

        section {
            margin-bottom: 30px;
        }

        h2 {
            color: #007bff;
        }

        .service {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .service img {
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
        <h1>Our Services</h1>
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
        <section class="service">
            <img src="checkup.jpg" alt="Service Image 1">
            <h2>Medical Checkups</h2>
            <p>Regular medical checkups are important for your health and well-being. They can help you prevent or detect diseases, monitor your progress, and provide you with personalized advice. Whether you need a routine physical exam, a screening test, or a consultation with a specialist, we can help you find the right service for your needs. Book your appointment today and take charge of your health.</p>
        </section>

        <section class="service">
            <img src="treatment.jpg" alt="Service Image 2">
            <h2>Specialized Treatments</h2>
            <p>We offer a specialized treatment that combines the latest scientific research with personalized care. Whether you are looking for pain relief, stress management, or wellness coaching, we have the right solution for you. Contact us today and discover how we can help you achieve your health goals.</p>
        </section>

        <section class="service">
            <img src="emergency.jpeg" alt="Service Image 3">
            <h2>Emergency Care</h2>
            <p>When you need urgent medical attention, we are here for you 24/7. Our team of qualified and experienced doctors, nurses and paramedics can provide you with the best possible care in a timely manner. Whether you have a minor injury, a serious illness, or a life-threatening condition, you can trust us to treat you with compassion and professionalism. Don't hesitate to call us or visit our emergency department if you need emergency care.</p>
        </section>
    </main>

    <footer>
        &copy; 2024 Medical Center
    </footer>

</body>
</html>
