<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBridge - About</title>
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
            background-color: var(--primary-blue);
            color: white;
            padding: 80px 0;
            position: relative;
        }

        .hero-images {
            position: relative;
            z-index: 1;
        }

        .hero-images img {
            border-radius: 10px;
            margin: 10px;
        }

        .orange-circle {
            position: absolute;
            right: 30px;
            top: 20%;
            width: 200px;
            height: 200px;
            border: 30px solid var(--primary-orange);
            border-radius: 50%;
            z-index: -1;
        }

        .about-section {
            padding: 80px 0;
        }

        .about-image {
            position: relative;
            width: 200px;
            z-index: 1;
        }

        .about-circle {
            position: absolute;
            left: 90px;
            top: 50%;
            width: 180px;
            height: 180px;
            border: 25px solid var(--primary-orange);
            border-radius: 50%;
            z-index: -1;
        }

        .mission-vision {
            background-color: var(--primary-blue);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .mission-vision h3 {
            margin-bottom: 20px;
        }

        .mission-vision span {
            color: var(--primary-orange);
        }

        .why-choose {
            padding: 80px 0;
        }

        .feature-card {
            display: flex;
            align-items: start;
            margin-bottom: 30px;
        }

        .feature-card img {
            width: 400px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .feature-content h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-weight: bold;
        }

        .feature-content p {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .selengkapnya {
            background: var(--primary-orange);
            color: white;
            border-radius: 5px;
            padding: 10px;
        }

        .selengkapnya:hover {
            background: #FF7A41;
            color: white;
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
                    <h1 class="display-3 fw-bold mb-5">Connecting Learning, Skills, and Real-World Experience for Your Tech Career"</h1>
                </div>
                <div class="col-lg-6">
                    <div class="hero-images">
                        <img src="assets/img/techbridge/learning.png" alt="Learning" style="width: 150px; height:150px"> 
                        <img src="assets/img/techbridge/collab.png" alt="Collaboration" style="width: 250px; height:200px">
                        <img src="assets/img/techbridge/dev.png" alt="Development" style="width: 350px; height:300px; margin-left:50px;">
                        <div class="orange-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image" style="margin-left: 80px;">
                        <img src="assets/img/techbridge/about.png" alt="About" class="img-fluid">
                        <div class="about-circle"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 style="margin-left: 100px; margin-bottom:20px; color:#003B73; font-weight:bold">S I A P A <span style="margin-left: 20px;"> K A M I</span></h5>
                    <h1 style="margin-left: 100px; font-weight:bold; color:#FF7A41; font-size:40px;">TechBridge</h1>
                    <p style="margin-left: 100px; margin-top:20px; padding-right:150px; font-size:20px; text-align:justify;color:grey;">TechBridge adalah platform edukasi dan pengembangan karir yang menawarkan peta karir dinamis serta pengalaman kerja dunia nyata melalui program magang jarak jauh. Dirancang khusus untuk membantu pengguna mencapai tujuan karir di bidang teknologi, TechBridge menghadirkan pembelajaran terstruktur, mentorship profesional, pengalaman praktis, dan kesempatan networking untuk membantu pengguna membangun keterampilan yang relevan dan portfolio yang kuat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision Section -->
    <section class="mission-vision">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/techbridge/Mission.png" alt="Mission" style="margin-bottom: 20px; height:150px">
                    <h1 style="font-weight: bold;">Misi <span>Kami</span></h1>
                    <p style="padding: 20px;">TechBridge hadir dengan misi untuk mempersiapkan generasi masa depan dengan keterampilan teknologi yang relevan dan kompetitif. Kami percaya bahwa setiap orang berhak setiap orang berhak mendapatkan akses pendidikan dan peluang karir yang terstruktur, fleksibel, dan sesuai dengan kebutuhan industri.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/techbridge/Vission.png" alt="Vision" style="margin-bottom: 20px; height:150px">
                    <h1 style="font-weight: bold;">Visi <span>Kami</span></h1>
                    <p style="padding: 20px;">Menjadi platform terdepan yang menghubungkan pembelajaran, pengalaman dunia nyata, dan jaringan profesional global untuk menciptakan generasi talenta teknologi yang siap bersaing di pasar kerja global.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose">
        <div class="container">
            <h1 class="mb-5" style="font-weight: bold; color:#003B73">Mengapa Memilih TechBridge?</h1>
            <div class="feature-card">
                <img src="assets/img/techbridge/pil1.png" alt="Holistic">
                <div class="feature-content">
                    <h3>Pendekatan Holistik</h3>
                    <p>Kami tidak hanya memberikan teori, tetapi juga pengalaman dunia nyata dan koneksi industri.</p>
                    <a href="#" class="selengkapnya">Selengkapnya</a>
                </div>
            </div>
            <div class="feature-card">
                <img src="assets/img/techbridge/pil2.png" alt="Flexibility">
                <div class="feature-content">
                    <h3>Fleksibilitas Waktu dan Tempat</h3>
                    <p>Belajar kapan saja dan dari mana saja dengan program yang dapat disesuaikan dengan jadwal Anda.</p>
                    <a href="#" class="selengkapnya">Selengkapnya</a>
                </div>
            </div>
            <div class="feature-card">
                <img src="assets/img/techbridge/pil3.png" alt="Community">
                <div class="feature-content">
                    <h3>Komunitas yang Kuat</h3>
                    <p>Bergabung dengan ribuan pembelajar dan profesional yang saling mendukung, berbagi pengetahuan, dan membangun jaringan profesional.</p>
                    <a href="#" class="selengkapnya">Selengkapnya</a>
                </div>
            </div>
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