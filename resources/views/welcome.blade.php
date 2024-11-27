<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChickCheck: The Smart Poultry Management System</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/rice.ico" />
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 3rem;
            background: #3f51b5;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 1.75rem;
            font-weight: bold;
            color: white;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .navbar .nav-links a:hover {
            color: #9575cd;
        }

        .btn-primary {
            background: #9575cd;
            color: white;
            padding: 0.75rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background: #7e57c2;
        }

        /* Hero Section Styles */
        .hero-section {
            position: relative;
            background: url('https://nofanj.org/wp-content/uploads/2017/04/iStock-506342740.jpg') no-repeat center center/cover;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(63, 81, 181, 0.6); */
            /* Indigo overlay */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
            color: white;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #e8eaf6;
        }

        .hero-content .btn-primary {
            margin-top: 1rem;
        }

        /* Features Section Styles */
        .features-section {
            padding: 6rem 2rem;
            text-align: center;
        }

        .features-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #3f51b5;
        }

        .features {
            display: flex;
            justify-content: space-around;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .features {
            padding: 4rem 1rem;
            background: #e8f5e9;
            text-align: center;
        }

        .features h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #2e7d32;
        }

        .features .feature-item {
            display: flex;
            flex-direction: column;
            /* Stack items on smaller screens */
            gap: 1rem;
            margin-bottom: 2rem;
            align-items: center;
            color: #555;
        }

        .features .feature-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #4caf50;
        }

        .feature {
            background: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border-radius: 10px;
            width: 30%;
            min-width: 280px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-10px);
        }

        .feature h3 {
            font-size: 1.8rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
            color: #7e57c2;
        }

        .feature p {
            font-size: 1rem;
            color: #666;
        }

        .feature i {
            font-size: 3rem;
            color: #9575cd;
        }

        /* Testimonials Section Styles */
        .testimonials-section {
            padding: 6rem 2rem;
            background-color: #ede7f6;
            text-align: center;
        }

        .testimonials-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #3f51b5;
        }

        .testimonials {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .testimonial {
            background: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border-radius: 10px;
            width: 45%;
            min-width: 300px;
        }

        .testimonial p {
            font-size: 1.2rem;
            color: #333;
            font-style: italic;
            margin-bottom: 1rem;
        }

        .testimonial span {
            display: block;
            font-size: 1.1rem;
            font-weight: bold;
            color: #3f51b5;
        }

        /* Call to Action Section Styles */
        .cta-section {
            padding: 4rem 2rem;
            background: #3f51b5;
            color: white;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }


        /* Responsive Styles */
        @media (max-width: 768px) {
            .features {
                flex-direction: column;
                align-items: center;
            }

            .feature {
                width: 80%;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar Section -->
    <header class="navbar">
        <div class="logo">ChickCheck</div>
        <ul class="nav-links">
            <li><a href="#features">Features</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#get-started">Contact</a></li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        </ul>

    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>ChickCheck</h1>
            <p>The Smart Poultry Management System to streamline your operations, improve productivity, and grow your
                farm.</p>
            <a href="register" class="btn-primary">Start Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <h2>Why Choose ChickCheck?</h2>
        <div class="features">
            <div class="feature-item">
                <i class="fas fa-chart-line"></i>
                <img src="https://www.dornerworks.com/wp-content/uploads/2019/12/data-icon.png" alt="Analytics Icon">
                <h3>Automated Tracking</h3>
                <p>Track your poultry's health, feed schedules, and egg production with ease.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-bell"></i>
                <img src="https://cdn3.iconfinder.com/data/icons/luchesa-vol-9/128/Weather-1024.png" alt="Weather Icon">
                <h3>Real-Time Monitoring</h3>
                <p>Stay updated with live insights and notifications from your farm.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-plug"></i>
                <img src="https://static.vecteezy.com/system/resources/previews/000/380/302/original/user-management-vector-icon.jpg"
                    alt="Management Icon">
                <h3>Easy Integration</h3>
                <p>Connect with existing tools for seamless farm management.</p>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <h2>What Farmers Are Saying</h2>
        <div class="testimonials">
            <div class="testimonial">
                <p>"Eggsactly transformed how we manage our farm. It's a game-changer!"</p>
                <span>- Jane D., Farmer</span>
            </div>
            <div class="testimonial">
                <p>"Thanks to Eggsactly, I can focus on growing my business without the stress."</p>
                <span>- Mark L., Poultry Owner</span>
            </div>
        </div>
    </section>
    <!-- Call to Action Section -->
    <section id="get-started" class="cta-section">
        <h2>Ready to Simplify Your Poultry Management?</h2>
        <a href="#contact" class="btn-primary">Contact Us</a>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <h4>ChickCheck</h4>
            <p>Your trusted partner in modern poultry management.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 ChickCheck. All rights reserved.</p>
        </div>
    </footer>

    <style>
        /* Footer Styles */
        .footer {
            background: #3f51b5;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        .footer-content h4 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #e8eaf6;
        }

        .footer-content p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .social-icons a {
            margin: 0 0.5rem;
            color: #9575cd;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #7e57c2;
        }

        .footer-bottom p {
            font-size: 0.9rem;
            margin-top: 1rem;
            color: #e8eaf6;
        }
    </style>

    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>