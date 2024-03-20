<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Exam Service</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff;
        }
        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
        }
        .jumbotron a.btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        .jumbotron a.btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .feature-box {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
        }
        .error {
            color: red;
        }
        .color {
            font-size: 40px;
        }
        .size {
            margin-left: 800px;
        }
        .size1 {
            margin-left: 750px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="color navbar-brand text-white" href="index.php"> <img src="./Images/logo2.png"
                    alt="Image Not Found" height="50px" width="50px"> Speed Test</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Hero Section -->
        <div class="jumbotron jumbotron-hero">
            <h1 class="display-4">Conduct Exams Online with Ease</h1>
            <p class="lead">Empowering education through our advanced online examination system.</p>
            <hr class="my-4">
            <p>Sign up now to experience a seamless and secure exam-taking process.</p>
            <a class="btn btn-primary btn-lg" href="./Dashboard.php" role="button">Get Started</a>
        </div>
        <!-- Features Section -->
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>Easy to Use</h2>
                    <p>Our platform is designed for simplicity, making it easy for both administrators and exam-takers.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>Secure & Reliable</h2>
                    <p>Rest assured that your exams are conducted securely with our reliable and robust system.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>Customizable</h2>
                    <p>Tailor the exam settings to your specific requirements and branding.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <p class="text-center">Explore the services we offer to enhance your online examination experience.</p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="services-box">
                        <h3>Exam Creation</h3>
                        <p>Create customized exams tailored to your specific requirements and subjects.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-box">
                        <h3>User Management</h3>
                        <p>Efficiently manage user accounts, permissions, and access levels.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-box">
                        <h3>Results Analysis</h3>
                        <p>Access detailed analysis and insights into exam results for better evaluation.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <!-- About Us Section -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">Learn more about our mission and values.</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>Welcome to Speed Test, a dynamic platform dedicated to making online exams accessible,
                        convenient, and secure. With a keen focus on user experience and educational impact, our
                        platform is engineered and managed by an esteemed team comprising dedicated professionals who
                        share a common vision for advancing learning through technology.<br><br>
                        Meet the special people who are in charge of our project: <br><br>
                        <b>Aajinath Kanhere -</b> A tech expert making sure the back-end of our platform runs smoothly
                        by constantly bringing in new tech ideas.<br><br>
                        <b> Rameshwar Bhagat -</b> A master at making our website easy to use. He makes sure that
                        whenever someone uses Speed Test, it's easy and makes them feel in control.<br><br>
                        <b>Parmeshwar Kanhere -</b> The Person in charge of making sure your information stays safe. He's
                        serious about keeping your data private and secure, so you don't need to worry about your
                        privacy when you use our platform.<br><br>
                        These professionals collaborate to ensure that Speed Test not only meets but exceeds your
                        expectations, by consistently updating our content, exploring new partnerships, and enhancing
                        the platform's robustness and user-friendly design. Our team's dedication extends to fostering a
                        dynamic community of learners, educators, and professionals, united in their pursuit of
                        excellence.
                        Powered by innovation, designed for education, and committed to your success - that's the
                        essence of Speed Test. Join us in shaping a smarter, more connected future in learning.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Have questions or need assistance? Reach out to us!</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method='post' action="contact.php">
                        <div class="form-group">
                            <?php
                            ob_start(); // Start output buffering
                            include_once 'contact.php';
                            ob_end_clean(); // Clean the output buffer without sending it to the browser
                            ?>
                            <label for="name"> Your Name</label>
                            <span class="error">*
                                <?php echo $nameerror; ?>
                            </span>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address </label>
                            <span class="error">*
                                <?php echo $emailerror; ?>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message </label>
                            <span class="error">*
                                <?php echo $msgerror; ?>
                            </span>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"
                                name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div>
        <hr>
    </div>
    <footer class="bg-dark text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-left">
                    <h5>Meet the Team</h5>
                    <ul class="text-left">
                        <li>Aajinath Kanhere</li>
                        <li>Rameshwar Bhagat</li>
                        <li>Parmeshwar Kanhere</li>
                    </ul>
                </div>
                <div class=" col-lg-6 text-left">
                    <h5 class="size1">Contact_Us</h5>
                    <ul class="size list-unstyled">
                        <li>Email: <a href="mailto:aajinathkanhere@gmail.com">aajinathkanhere@gmail.com</a></li>
                        <li>Email: <a href="mailto:rameshwarb2004@gmail.com">rameshwarb2004@gmail.com</a></li>
                        <li>Email: <a href="mailto:kanherepamu1909@gmail.com">kanherepamu1909@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="mb-0">&copy; 2024 Speed Test Pvt. Ltd. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>