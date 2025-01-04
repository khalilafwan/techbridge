<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBridge - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/techbridge/logo.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #003B73;;
            --primary-orange: #FF7A41;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            padding: 15px 0;
        }

        .navbar-brand img {
            height: 40px;
        }

        .contact-title {
            color: var(--primary-orange);
            text-align: center;
            margin: 50px 0;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .contact-form {
            max-width: 800px;
            height: 700px ;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            color: var(--primary-blue);
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .form-select {
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
        }
        
        textarea.form-control {
            min-height: 150px;
        }

        .btn-submit {
            background: var(--primary-blue);
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
        }

        .contact-methods {
            text-align: center;
            margin: 100px 0;
        }

        .contact-card {
            margin: 20px;
            padding: 20px;
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .contact-card h3 {
            color: var(--primary-orange);
            margin: 15px 0;
        }

        .contact-info {
            color: var(--primary-blue);
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        .dots-decoration {
            position: absolute;
            left: -100px;
            top: 50%;
            transform: translateY(-50%);
            display: grid;
            grid-template-rows: repeat(8, 10px);
            grid-template-columns: repeat(3, 10px);
            gap: 8px;
        }

        .dots-decoration span {
            display: block;
            width: 8px;
            height: 8px;
            background-color: var(--primary-orange);
            border-radius: 50%;
        }

        .orange-circle {
            position: absolute;
            right: -100px;
            bottom: -100px;
            width: 200px;
            height: 200px;
            border: 50px solid var(--primary-orange);
            border-radius: 50%;
            z-index: -1;
        }

        footer {
            background: var(--primary-blue);
            color: white;
            padding: 60px 0 30px;
        }

        .newsletter-input {
            background: transparent;
            border: 1px solid white;
            border-radius: 2px;
            padding: 0.5rem;
        }

        .newsletter-input::placeholder {
            color: #fff;
            opacity: 1;
        }

        .newsletter-btn {
            background-color: var(--primary-orange);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            height: 44px;;
        }
    </style>
</head>
<body>
    <!-- header -->
    <?php include("partials/header.php"); ?>

    <!-- Contact Form Section -->
    <div class="container">
        <h1 class="contact-title">Kontak Kami</h1>
        
        <div class="contact-form">
            <div class="dots-decoration">
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
            </div>
            
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" style="font-weight: bold;">Your name*</label>
                        <input type="text" class="form-control" placeholder="Your name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="font-weight: bold;">Contact email*</label>
                        <input type="email" class="form-control" placeholder="you@example.com">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" style="font-weight: bold;">Phone Number*</label>
                        <input type="text" class="form-control" placeholder="Company name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="font-weight: bold;">Issue Related to*</label>
                        <select class="form-select">
                            <option selected style="font-weight: bold;">Course Structure</option>
                            <option style="font-weight: bold; width:10">Payment Failure</option>
                            <option style="font-weight: bold;">Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" style="font-weight: bold;">Your message*</label>
                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                </div>
                
                <p class="small" style="color:#003B73;">
                    Dengan mengirimkan formulir ini, Anda menyetujui syarat dan ketentuan kami serta Kebijakan Privasi kami yang menjelaskan bagaimana kami dapat mengumpulkan, menggunakan, dan mengungkapkan informasi pribadi Anda termasuk kepada pihak ketiga.
                </p>
                
                <button type="submit" class="btn btn-submit">Kirim</button>
            </form>
            
            <div class="orange-circle"></div>
        </div>

        <div class="contact-methods">
            <div class="row justify-content-center">
                <div class="col-md-4 contact-card">
                    <img src="assets/img/techbridge/Email.png" alt="Email" class="contact-icon">
                    <h3 style="font-weight: bold;">Email us</h3>
                    <p>Email us for general queries, including marketing and partnership opportunities.</p>
                    <a href="mailto:info@techbridge.id" class="contact-info">info@techbridge.id</a>
                </div>
                <div class="col-md-4 contact-card">
                    <img src="assets/img/techbridge/Call.png" alt="Call" class="contact-icon">
                    <h3 style="font-weight: bold;">Call us</h3>
                    <p>Call us to speak to a member of our team. We are always happy to help.</p>
                    <a href="tel:+628428448903" class="contact-info">+62 8428448903</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-lg-6 d-flex flex-column">
                    <img src="assets/img/techbridge/logo.png" alt="TechBridge Logo" class="footer-logo" style="width: 150px;">
                    <p style="margin-top: 10px;">Connecting Learning, Skills, and Real-World Experience for Your Tech Career</p>
                    <div class="newsletter-form" style="margin-top: 20px;">
                        <h5 style="font-size: 16px; font-weight:bold">Subscribe Our Newsletter</h5>
                        <div class="input-group" style="margin-top: 10px; max-width: 400px;">
                            <input type="email" class="form-control newsletter-input" placeholder="Your Email address">
                            <button class="newsletter-btn" style="background-color: #FF7A41; border: none; padding: 10px 20px; color: #fff; border-radius: 4px;">&gt;</button>
                        </div>
                    </div>
                </div>
                <!-- Menu Links -->
                <div class="col-lg-3">
                    <h5 style="color: #FF7A41; font-weight: bold;">Menu</h5>
                    <ul class="footer-links" style="list-style: none; padding: 0; margin-top: 20px;">
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">Home</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">Internship</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">Learning Module</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">FAQ</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">Contact</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">About</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="col-lg-3 text-lg-start text-start">
                    <h5 style="font-weight: bold;">Contact <span style="color: #FF7A41;">Us</span></h5>
                    <p style="margin-top: 20px;">Yogyakarta, Indonesia</p>
                    <p><a href="mailto:info@techbridge.id" style="color: #fff; text-decoration: none;">info@techbridge.id</a></p>
                    <p><a href="tel:+628428448993" style="color: #fff; text-decoration: none;">+62 8428448993</a></p>
                </div>
            </div>
            <div class="row mt-4" style="margin-top: 40px;">
                <div class="col-md-6">
                    <div class="terms-privacy" style="display: flex; gap: 10px;">
                        <p style="margin: 0;">Terms & Conditions</p>
                        <p style="margin-left: 50px;">Privacy Policy</p>
                    </div>                    
                </div>
                <div class="col-md-6 text-start">
                    <div class="social-links" style="display: flex; justify-content: flex-end; gap: 10px;">
                        <a href="#" style="color: #fff;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>