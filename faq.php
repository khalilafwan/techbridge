<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBridge - FAQ</title>
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

        .faq-title {
            color: var(--primary-orange);
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .faq-description {
            border-left: 3px solid var(--primary-orange);
            padding-left: 1rem;
            margin-bottom: 2rem;
        }

        .accordion-item{
            padding: 8px;
        }

        .accordion-button:not(.collapsed) {
            color: var(--primary-orange);
            background-color: #fff;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
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

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-box position-relative">
                <h2 class="faq-title" style="font-weight: bold;">Frequently Asked Questions</h2>
                <p class="faq-description">Temukan jawaban atas pertanyaan yang sering diajukan tentang TechBridge.</p>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="font-weight: bold;">
                                Apa itu TechBridge?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                TechBridge adalah platform edukasi dan pengembangan karir di bidang teknologi yang menawarkan jalur karir interaktif, pembelajaran dinamis, pengalaman magang jarak jauh, serta mentorship dari profesional industri.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="font-weight: bold;">
                                Siapa yang bisa bergabung dengan TechBridge?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="font-weight: bold;">
                                Bagaimana cara memulai belajar di TechBridge?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="font-weight: bold;">
                                Apa saja kursus yang tersedia di TechBridge ?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="font-weight: bold;">
                                Apakah ada biaya untuk bergabung dengan TechBridge ?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" style="font-weight: bold;">
                                Apa itu program magang jarak jauh di TechBridge ?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" style="font-weight: bold;">
                                Bagaimana cara mendaftar untuk magang jarak jauh ?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" style="font-weight: bold;">
                                Apakah ada sertifikasi yang didapatkan ?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" style="font-weight: bold;">
                                Bagaimana cara menghubungi TechBridge jika ada pertanyaan lebih lanjut ?
                            </button>
                        </h2>
                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" style="font-weight: bold;">
                                Apakah ada dukungan komunitas di TechBridge ?
                            </button>
                        </h2>
                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11" style="font-weight: bold;">
                                Apakah ada jaminan pekerjaan setelah mengikuti program magang ?
                            </button>
                        </h2>
                        <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"  style="color: grey;">
                                [Jawaban akan ditampilkan di sini]
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>