<?php
session_start();
include 'connection/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validasi apakah semua field terisi
    if (empty($username) || empty($email) || empty($password)) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'warning',
                    title: 'Lengkapi Data',
                    text: 'Silakan lengkapi semua data akun Anda!'
                });
            });
        </script>";
    } else {
        // Cek apakah email sudah terdaftar
        $checkQuery = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($checkQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email sudah ada
            echo "<script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Akun Sudah Ada',
                        text: 'Email ini sudah terdaftar. Silakan gunakan email lain.'
                    });
                });
            </script>";
        } else {
            // Email belum ada, masukkan data ke database
            $insertQuery = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sss", $username, $email, $password);
            if ($stmt->execute()) {
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil Mendaftar',
                            text: 'Pendaftaran berhasil! Silakan login.',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location = 'login.php';
                        });
                    });
                </script>";
            } else {
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Kesalahan',
                            text: 'Pendaftaran gagal. Silakan coba lagi.'
                        });
                    });
                </script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBridge - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link href="assets/img/techbridge/logo.png" rel="icon">
    
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
        
        /* Register Form Styles */
        .register-section {
            flex: 1;
            padding: 60px 0;
        }

        .register-card {
            background: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            height: 600px;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #ced4da;
            border-radius: 0;
            padding: 0.5rem 0;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
            border-bottom: 2px solid var(--primary-blue);
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .register-btn {
            background-color: var(--primary-blue);
            color: #fff;
            padding: 12px;
            border-radius: 4px;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
            margin-left:100px;
            margin-right:100px;
        }

        .register-btn:hover {
            background-color: var(--primary-blue);
            color:white;
        }

        /* Footer Styles */
        footer {
            background: var(--primary-blue);
            color: white;
            padding: 60px 0 30px;
        }

        .newsletter-input {
            background: transparent;
            border: 1px solid white;
            color: white;
            border-radius: 4px;
            padding: 8px 12px;
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .newsletter-btn {
            background-color: var(--primary-orange);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <!-- header -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
          <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="assets/img/techbridge/logo.png" alt="">
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Learning Modules</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About</a></li>
              <li class="dropdown"><a href="#"><span>Hub</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Dropdown 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="#">Deep Dropdown 1</a></li>
                      <li><a href="#">Deep Dropdown 2</a></li>
                      <li><a href="#">Deep Dropdown 3</a></li>
                      <li><a href="#">Deep Dropdown 4</a></li>
                      <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dropdown 2</a></li>
                  <li><a href="#">Dropdown 3</a></li>
                  <li><a href="#">Dropdown 4</a></li>
                </ul>
              </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
    
          <a class="btn-getstarted" href="login.php">Log In</a>
          <a class="btn-getstarted" href="register.php">Register</a>
    
        </div>
    </header>

    <!-- Main Content -->
    <main class="register-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Register Form Column -->
                <div class="col-md-5">
                    <div class="card register-card p-4">
                        <h2 class="mb-4" style="color: var(--primary-blue); font-weight: bold; text-align:center">Register</h2>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn register-btn w-50 mb-3">Register</button>
                            <div class="text-center">
                                <span class="text-muted">Already have an Account ? </span>
                                <a href="login.php" style="color: var(--primary-orange); text-decoration: none;">Log In Here</a>
                            </div>
                            <div class="text-center" style="margin-top:180px">
                                <small class="text-muted">
                                    By continuing, you agree to the 
                                    <a href="#" style="color: var(--primary-orange); text-decoration: none;">Terms of Service</a> and 
                                    <a href="#" style="color: var(--primary-orange); text-decoration: none;">Privacy Policy</a>
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Illustration Column -->
                <div class="col-md-7">
                    <img src="assets/img/techbridge/register.png" class="img-fluid" alt="Online Learning Illustration">
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-lg-6 mb-4">
                    <img src="assets/img/techbridge/logo.png" alt="TechBridge Logo" style="width: 150px;">
                    <p class="mt-3">Connecting Learning, Skills, and Real-World Experience for Your Tech Career</p>
                    <div class="newsletter-form mt-4">
                        <h5 class="fw-bold">Subscribe Our Newsletter</h5>
                        <div class="input-group mt-3" style="max-width: 400px;">
                            <input type="email" class="newsletter-input form-control" placeholder="Your Email address">
                            <button class="newsletter-btn">&gt;</button>
                        </div>
                    </div>
                </div>
                <!-- Menu Links -->
                <div class="col-lg-3 mb-4">
                    <h5 style="color: var(--primary-orange);" class="fw-bold">Menu</h5>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Internship</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Learning Module</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">About</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="col-lg-3">
                    <h5 class="fw-bold">Contact <span style="color: var(--primary-orange);">Us</span></h5>
                    <div class="mt-4">
                        <p>Yogyakarta, Indonesia</p>
                        <p><a href="mailto:info@techbridge.id" class="text-white text-decoration-none">info@techbridge.id</a></p>
                        <p><a href="tel:+628428448993" class="text-white text-decoration-none">+62 8428448993</a></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="d-flex gap-4">
                        <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
                        <a href="#" class="text-white text-decoration-none">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-links d-flex justify-content-md-end gap-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>