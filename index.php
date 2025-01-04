<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBridge</title>
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

        .header .logo img {
            max-height: 50px;
            margin-right: 6px;
        }

        .hero-section {
            padding: 80px 0;
        }

        .search-box {
            max-width: 400px;
            position: relative;
        }

        .search-box input {
            padding-right: 50px;
            border-radius: 25px;
        }

        .search-box button {
            position: absolute;
            right: 5px;
            top: 5px;
            border-radius: 20px;
            background: var(--primary-blue);
        }

        .skill-tags {
            margin: 20px 0;
        }

        .skill-tag {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 2px;
            margin: 5px;
            display: inline-block;
        }

        .who-can-join {
            padding: 60px 0;
        }

        .join-card {
            text-align: center;
            margin: 15px 0;
        }

        .join-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .popular-courses {
            padding: 60px 0;
        }

        .course-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .course-card img {
            height: 200px;
            object-fit: cover;
        }

        .mentors-section {
            padding: 60px 0;
        }

        .mentor-card {
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .mentor-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .partnerships {
            padding: 60px 0;
        }

        .partner-logo {
            height: 100px;
            width: 100px;
            object-fit: contain;
            margin: 50px;
        }

        footer {
            background: var(--primary-blue);
            color: white;
            padding: 60px 0 30px;
        }

        .primary-btn {
            background: var(--primary-orange);
            color: white;
            border: none;
            padding: 8px 25px;
            border-radius: 25px;
        }

        .primary-btn:hover {
            background: #FF7A41;
            color: white;
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
        }

        .popular-courses .course-card {
            position: relative;
            background-color: var(--primary-blue);
            border-radius: 15px;
            padding: 10px;
            text-align: center;
            overflow: hidden;
            height: 300px;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .popular-courses .course-card:hover {
            transform: translateY(-5px);
        }
        
        .popular-courses .inner-card {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .popular-courses .course-image {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            background-color: transparent;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .popular-courses .info-box {
            background-color: white;
            padding: 8px;
            border-radius: 15px;
            text-align: center;
            height: 200px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .popular-courses .info-box h5 {
            margin: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        .popular-courses .info-box p {
            font-size: 12px;
            margin-top: 5px;
            text-align: center;
        }
        
        .popular-courses .details-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        
        .popular-courses .details-box {
            flex: 1;
            background-color: white;
            border-radius: 10px;
            height: 25px;
            border: 1px solid #FF7A41;
            margin: 5px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        
        .popular-courses .primary-btn {
            display: block;
            text-align: center;
            margin-top: 10px;
            background-color: #FF7A41;
            color: #fff;
            text-decoration: none;
            border-radius: 15px;
        }
        
        .popular-courses .primary-btn:hover {
            background-color: #FF7A41;
        }     .mentors-section {
            padding: 50px 0;
            background-color: #f9f9f9;
        }
        
        .mentors-section h2 {
            font-size: 2rem;
        }
        
        .mentor-card {
            position: relative;
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .mentor-card .badge {
            position: absolute;
            top: -10px;
            left: 240px;
            background: #FF7A41;
            color: white;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: bold;
        }
        
        .mentor-avatar {
            width: 150px;
            height: 150px;
            border-radius: 10px;
        }
        
        .mentor-name {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .mentor-role {
            font-size: 20px;
            color:#FF7A41;
            margin-bottom: 10px;
        }
        
        .rating {
            font-size: 0.9rem;
            color: grey;
        }
        
        .details {
            margin-top: 10px;
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 10px;
        }
        
        .mentor-description {
            text-align: justify;
            font-size: 0.9rem;
            color: #333;
            margin-top: 15px;
        }
           
    </style>
</head>
<body>
    <!-- header -->
    <?php include("partials/header.php"); ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4" style="color: #003B73;">TechBridge</h1>
                    <p class="lead text-muted mb-8" style="font-size: 24px;">Connecting Learning, Skills, and Real-World Experience for Your Tech Career</p>
                    <div class="input-group" style="margin-top: 10px; max-width: 400px;">
                        <input type="text" class="form-control" placeholder="Search the course you want" style="border: 1px solid #ccc; padding: 10px; border-radius: 4px 0 0 4px;">
                        <button class="btn" style="background-color: #003B73; border: none; padding: 10px 20px; color: #fff; border-radius: 0 4px 4px 0;">Search</button>
                    </div>
                    <div class="skill-tags" style="margin-top: 20px;">
                        <span class="skill-tag">Software Engineer</span>
                        <span class="skill-tag">DevOps Engineer</span>
                        <span class="skill-tag">Data Analytics</span>
                        <span class="skill-tag">UI/UX Designer</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/techbridge/heroaction.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <h4 style="color:#FF7A41; font-weight:bold">W H O<span style="margin-left: 20px;">C A N</span><span style="margin-left: 20px;">J O I N</span></h4>
                    <h4 class="display-5 fw-bold mb-4" style="color: #003B73;">Program Pengembangan Keterampilan untuk Semua</h4>
                    <div class="row">
                        <!-- Box 01 -->
                        <div class="col-6 col-sm-5 text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold; color:#003B73; margin-right: 10px;">01</h3>
                                <i class="fas fa-solid fa-city" style="color: #FF7A41; font-size:100px"></i>
                            </div>
                            <p style="font-size: 14px; margin-top: 10px; font-weight:bold">Mahasiswa atau Pemula Profesional</p>
                        </div>
                        <!-- Box 02 -->
                        <div class="col-6 col-sm-5 text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold; color:#003B73; margin-right: 10px;">02</h3>
                                <i class="fas fa-regular fa-user" style="color: #FF7A41; font-size:100px"></i>
                            </div>
                            <p style="font-size: 14px; margin-top: 10px; font-weight:bold">Individu Butuh Jalur Belajar Terstruktur</p>
                        </div>

                        <div class="w-100"></div>

                        <!-- Box 03 -->
                        <div class="col-6 col-sm-5 text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold; color:#003B73; margin-right: 10px;">03</h3>
                                <i class="fas fa-thin fa-rocket" style="color: #FF7A41; font-size:100px"></i>
                            </div>
                            <p style="font-size: 14px; margin-top: 10px;font-weight:bold">Profesional yang ingin Upgrade</p>
                        </div>
                        <!-- Box 04 -->
                        <div class="col-6 col-sm-5 text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold; color:#003B73; margin-right: 10px;">04</h3>
                                <i class="fas fa-thin fa-building" style="color: #FF7A41; font-size:100px"></i>
                            </div>
                            <p style="font-size: 14px; margin-top: 10px;font-weight:bold">Profesional Cari Pengalaman Magang</p>
                        </div>
                    </div>
                </div>
                <!-- Right Content: Image -->
                <div class="col-lg-6 text-center">
                    <img src="assets/img/techbridge/join.png" alt="Hero Image" class="img-fluid" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </section>    

    <section class="popular-courses">
        <div class="container">
            <h2 class="text-center mb-5" style="color: #003B73; font-weight:bold">
                Kursus <span style="color: #FF7A41;">Populer</span>
            </h2>
            <div class="row justify-content-center text-center">
                <!-- Course Card -->
                <div class="col-md-3 mb-4">
                    <div class="course-card">
                        <div class="inner-card">
                            <img src="assets/img/techbridge/DS.png" alt="Software Engineering" class="course-image">
                        </div>
                        <div class="info-box">
                            <h5>Software Engineering</h5>
                            <p style="font-size: 12px;">Mulai perjalanan Anda sebagai pengembang perangkat lunak dengan memahami dasar - dasar pemograman dan pengembangan aplikasi.</p>
                        </div>
                    </div>
                    <div class="details-container">
                        <div class="details-box">
                            <p>Pemula</p>
                        </div>
                        <div class="details-box">
                            <p>6 Minggu</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="course-card">
                        <div class="inner-card">
                            <img src="assets/img/techbridge/DS.png" alt="Software Engineering" class="course-image">
                        </div>
                        <div class="info-box">
                            <h5>Data Science</h5>
                            <p style="font-size: 12px;">Pelajari konsep dasar analitik data dan penerapan pembelajaran mesin untuk memulai karir Anda di Data Science.</p>
                        </div>
                    </div>
                    <div class="details-container">
                        <div class="details-box">
                            <p>Pemula</p>
                        </div>
                        <div class="details-box">
                            <p>8 Minggu</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="course-card">
                        <div class="inner-card">
                            <img src="assets/img/techbridge/DS.png" alt="Software Engineering" class="course-image">
                        </div>
                        <div class="info-box">
                            <h5>UI/UX Design</h5>
                            <p style="font-size: 12px;">
                                Sumber Terbuka untuk kerangka kerja frontend JavaScript untuk membangun antarmuka pengguna & aplikasi halaman tunggal.</p>
                        </div>
                    </div>
                    <div class="details-container">
                        <div class="details-box">
                            <p>Pemula</p>
                        </div>
                        <div class="details-box">
                            <p>6 Minggu</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="course-card">
                        <div class="inner-card">
                            <img src="assets/img/techbridge/DS.png" alt="Software Engineering" class="course-image">
                        </div>
                        <div class="info-box">
                            <h5>DeOps</h5>
                            <p style="font-size: 12px;">Pelajari prinsip dasar DevOps, automasi dan integrasi untuk meningkatkan pengembangan dan pengiriman perangkat lunak.</p>
                        </div>
                    </div>
                    <div class="details-container">
                        <div class="details-box">
                            <p>Pemula</p>
                        </div>
                        <div class="details-box">
                            <p>8 Minggu</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mentors-section">
        <div class="container">
            <h2 class="text-left mb-5" style="margin-left: 50px; font-weight:bold; color:#003B73">
                Temui Profesional Kami<br>
                <span style="color:#FF7A41; font-weight:bold">Mentor & Pelatih</span>
            </h2>
            <div class="row">
                <!-- Mentor Card 1 -->
                <div class="col-md-6">
                    <div class="mentor-card">
                        <div class="badge">Best Trainer</div>
                        <div class="d-flex align-items-center">
                            <img src="assets/img/techbridge/M1.png" alt="Sandeep" class="mentor-avatar">
                            <div class="ms-3">
                                <h5 class="mentor-name">Sandeep</h5>
                                <p class="mentor-role">Software Engineer</p>
                                <div class="rating">
                                    ⭐⭐⭐⭐⭐ <span>(72 Reviews)</span>
                                </div>
                                <div class="details">
                                    <span>39 Modules</span> | <span>375 Students</span>
                                </div>
                            </div>
                        </div>
                        <p class="mentor-description">
                            Sandeep adalah Pengembang Perangkat Lunak yang ahli dalam .NET & Azure selama lebih dari 24 tahun dan melatih 100 siswa untuk mencapai tujuan & impian mereka.
                        </p>
                    </div>
                </div>
                <!-- Mentor Card 2 -->
                <div class="col-md-6">
                    <div class="mentor-card">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/techbridge/M2.png" alt="Sudhansu" class="mentor-avatar">
                            <div class="ms-3">
                                <h5 class="mentor-name">Sudhansu</h5>
                                <p class="mentor-role">Data Scientist</p>
                                <div class="rating">
                                    ⭐⭐⭐⭐ <span>(38 Reviews)</span>
                                </div>
                                <div class="details">
                                    <span>27 Modules</span> | <span>169 Students</span>
                                </div>
                            </div>
                        </div>
                        <p class="mentor-description">
                            Sudhansu adalah Pengembang Perangkat Lunak yang ahli dalam Keamanan Cloud, Keamanan Cyber, Pusat Data & Forensik selama lebih dari 22 tahun dan melatih 100 siswa untuk mencapai tujuan & impian mereka.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships -->
    <section class="partnerships">
        <div class="container text-center">
            <h2 class="text-center mb-5" style="color:#003B73; font-weight:bold">Kemitraan Kami</h2>
            <img src="assets/img/techbridge/aws.png" alt="AWS" class="partner-logo">
            <img src="assets/img/techbridge/GC.png" alt="Cloud" class="partner-logo">
            <img src="assets/img/techbridge/Figma.png" alt="Figma" class="partner-logo">
            <img src="assets/img/techbridge/Azure.png" alt="Azure" class="partner-logo">
        </div>
    </section>

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
                        <li style="margin-bottom: 10px;"><a href="index.html" style="color: #fff; text-decoration: none;">Home</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">Internship</a></li>
                        <li style="margin-bottom: 10px;"><a href="#" style="color: #fff; text-decoration: none;">Learning Module</a></li>
                        <li style="margin-bottom: 10px;"><a href="faq.html" style="color: #fff; text-decoration: none;">FAQ</a></li>
                        <li style="margin-bottom: 10px;"><a href="contact.html" style="color: #fff; text-decoration: none;">Contact</a></li>
                        <li style="margin-bottom: 10px;"><a href="about.html" style="color: #fff; text-decoration: none;">About</a></li>
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