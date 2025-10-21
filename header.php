<?php
// Auto-detect base path to support any folder name in htdocs
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Hotel Jeevak International</title>
        <link rel="icon" type="image/png" href="<?php echo $base; ?>/image/logo4.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/style.css">
        <style>
        /* ========= Top Contact Bar ========= */
        .top-bar {
            width: 100%;
            background: #f57c00;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            padding: 8px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        .top-left {
            margin-left: 10px;
        }

        .top-right {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            color: #fff;
            font-size: 18px;
            transition: all 0.3s ease;
            animation: glowPulse 3s infinite ease-in-out;
        }

        .social-icon:hover {
            color: #ffda99;
            transform: scale(1.15);
            text-shadow: 0 0 10px rgba(255, 220, 140, 0.9);
        }

        @keyframes glowPulse {

            0%,
            100% {
                text-shadow: 0 0 8px rgba(255, 200, 100, 0.7), 0 0 15px rgba(255, 180, 50, 0.5), 0 0 25px rgba(255, 120, 0, 0.3);
            }

            50% {
                text-shadow: 0 0 12px rgba(255, 220, 140, 0.9), 0 0 25px rgba(255, 160, 50, 0.6), 0 0 35px rgba(255, 120, 0, 0.4);
            }
        }

        /* ========= Navigation ========= */
        .navbar {
            width: 100%;
            background: #fff;
            padding: 12px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 99;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .navbar .logo span {
            font-size: 20px;
            font-weight: bold;
            color: #e67e22;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li a {
            text-decoration: none;
            font-weight: 500;
            color: #222;
            transition: color 0.3s;
        }

        .navbar .nav-links li a:hover,
        .navbar .nav-links li a.active {
            color: #e67e22;
        }

        /* ========= Book Button ========= */
        .btn-book {
            display: inline-block;
            padding: 8px 18px;
            background: #e67e22;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.2s, color 0.2s;
            margin-left: 10px;
        }

        .btn-book:hover {
            background: #ca6c1e;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        /* ========= Mobile Menu Toggle ========= */
        .menu-toggle {
            display: none;
            font-size: 24px;
            color: #333;
            background: none;
            border: none;
            cursor: pointer;
        }

        /* ========= Responsive Design ========= */
        @media (max-width: 900px) {
            .navbar {
                padding: 12px 20px;
                flex-wrap: wrap;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #fff;
                margin-top: 10px;
                border-top: 1px solid #eee;
            }

            .nav-links.show {
                display: flex;
                animation: fadeIn 0.3s ease-in-out;
            }

            .nav-links li {
                text-align: center;
                padding: 10px 0;
            }

            .btn-book {
                margin: 10px auto;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .top-bar {
                flex-direction: column;
                text-align: center;
                gap: 6px;
                padding: 10px 0;
            }

            .top-right {
                justify-content: center;
            }
        }
        </style>
    </head>

    <body>
        <header class="header">

            <!-- ===== Top Bar ===== -->
            <div class="top-bar">
                <div class="top-left" style="margin-left:65px; color:white; font-size:16px; font-weight:500;">
                    <span style="margin-right:8px;">
                        <i class="fa fa-phone" style="color:white;"></i>
                    </span>
                    +91-07208913724
                    &nbsp; | &nbsp;
                    <span style="margin-right:6px;">
                        <i class="fa fa-envelope" style="color:white;"></i>
                    </span>
                    info@hoteljeevak.com
                </div>

                <!-- Add this in your <head> section if not already included -->


                <div class="top-right" style="margin-right:60px">
                    <a href="https://www.facebook.com/sameer.alam.869166" target="_blank" class="social-icon"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/official_sameer_5g?igsh=MTY4MW5hbmU1YmF6dQ==" target="_blank"
                        class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/sameer-alam-558821266/" target="_blank" class="social-icon"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a href="#" target="_blank" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- ===== Navbar ===== -->
            <nav class="navbar">
                <div class="logo">
                    <a href="<?php echo $base; ?>/index.php" title="Hotel Jeevak International - Bodhgaya">
                        <img src="<?php echo $base; ?>/image/logo.png" alt="Hotel Jeevak International Logo"
                            style="height:60px; border-radius:8px; box-shadow:0 2px 12px rgba(0,0,0,0.1); vertical-align:middle;">
                    </a>
                    <span style="font-size:22px; font-weight:bold;  color:#e67e22; margin-left:8px;">
                        HOTEL <span style="color:#000;font-size:22px">JEEVAK</span>
                    </span>

                </div>


                <!-- Mobile menu toggle -->
                <button class="menu-toggle" onclick="toggleMenu()"><i class="fas fa-bars"></i></button>

                <ul class="nav-links" id="navLinks">
                    <li><a href="<?php echo $base; ?>/index.php">Home</a></li>
                    <li><a href="<?php echo $base; ?>/about.php">About</a></li>
                    <li><a href="<?php echo $base; ?>/bodhgaya.php">Bodhgaya</a></li>
                    <li><a href="<?php echo $base; ?>/rooms.php">Rooms</a></li>
                    <li><a href="<?php echo $base; ?>/facilities.php">Facilities</a></li>
                    <li><a href="<?php echo $base; ?>/restaurant.php">Restaurant</a></li>
                    <li><a href="<?php echo $base; ?>/gallery.php">Gallery</a></li>
                    <li><a href="<?php echo $base; ?>/contact.php">Contact</a></li>

                </ul>

                <a class="btn-book" href="<?php echo $base; ?>/contact.php">Book Now</a>
            </nav>
        </header>

        <script>
        function toggleMenu() {
            const nav = document.getElementById('navLinks');
            nav.classList.toggle('show');
        }
        </script>