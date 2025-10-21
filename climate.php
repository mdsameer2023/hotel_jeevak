<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magadh Climate - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The History OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>Climate</h2>
            <p>Climate
                Bodhgaya, located in the tropical region of Bihar, experiences three distinct seasons Summer, Monsoon,
                and Winter.
            </p>
        </div>
    </section>



    <style>
    /* =============== The History OF Buddhis Header Section =============== */
    .facilities-header {
        position: relative;
        padding: 40px 20px;
        text-align: center;
        color: #fff;
        background: linear-gradient(135deg, #d97706, #e67e22, #e74c3c);
        background-size: 200% 200%;
        animation: gradientShift 12s ease-in-out infinite;
        overflow: hidden;
        transition: filter 1s ease-in-out, background 1s ease-in-out;
    }

    /* Gradient Movement Animation */
    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Shine Sweep Effect */
    .facilities-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: -50%;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.25);
        transform: skewX(-25deg);
        animation: shine 6s infinite;
    }

    @keyframes shine {
        0% {
            left: -50%;
        }

        50% {
            left: 120%;
        }

        100% {
            left: 120%;
        }
    }

    /* Text Fade-Up Animation */
    .facilities-header .content {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeUp 1.8s ease forwards;
        animation-delay: 0.3s;
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Typography */
    .facilities-header h2 {
        font-size: 3rem;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 10px;
        text-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
    }

    .facilities-header p {
        font-size: 1.25rem;
        font-weight: 400;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Sunrise Scroll Effect (brightness increase on scroll) */
    .facilities-header.sunrise {
        filter: brightness(1.2) saturate(1.2);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .facilities-header {
            padding: 80px 15px;
        }

        .facilities-header h2 {
            font-size: 2.3rem;
        }

        .facilities-header p {
            font-size: 1rem;
        }
    }
    </style>

    <script>
    /* =============== Scroll-triggered Sunrise Effect =============== */
    window.addEventListener('scroll', () => {
        const section = document.querySelector('.facilities-header');
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight * 0.7 && rect.bottom > 0) {
            section.classList.add('sunrise');
        } else {
            section.classList.remove('sunrise');
        }
    });
    </script>



    <section class="climate-section" style="padding:80px 0; background:linear-gradient(120deg,#fffdf5,#e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px;">

            <!-- Section Title -->
            <!-- <h2 class="section-title">Climate</h2>

            <p class="intro-text">
                Bodhgaya, located in the tropical region of Bihar, experiences three distinct seasons — <strong>Summer,
                    Monsoon,</strong> and <strong>Winter</strong>. Each season paints a different picture of this sacred
                land, offering visitors a unique travel experience throughout the year.
            </p> -->

            <!-- Climate Cards -->
            <div class="climate-grid">
                <div class="climate-card summer">
                    <div class="icon">☀️</div>
                    <h3>Summer (March – June)</h3>
                    <p>
                        Gaya experiences hot and dry summers, with temperatures reaching up to <strong>45°C</strong>.
                        Travelers are advised to carry light cotton clothes, sunglasses, and stay hydrated while
                        exploring.
                    </p>
                </div>

                <div class="climate-card monsoon">
                    <div class="icon">🌧️</div>
                    <h3>Monsoon (July – September)</h3>
                    <p>
                        The monsoon season brings heavy rainfall to Bodhgaya and its surrounding regions.
                        While the lush greenery looks beautiful, it’s advisable to avoid travel during this time due to
                        occasional waterlogging and humidity.
                    </p>
                </div>

                <div class="climate-card winter">
                    <div class="icon">❄️</div>
                    <h3>Winter (October – March)</h3>
                    <p>
                        Winters are cool and pleasant — the <strong>best time to visit Bodhgaya</strong>.
                        Temperatures range between 8°C to 25°C, making it perfect for sightseeing, meditation, and
                        temple visits.
                        Don’t forget to carry warm clothing for the chilly evenings.
                    </p>
                </div>
            </div>

            <!-- Back Button -->
            <div style="text-align:center; margin-top:50px;">
                <a href="about.php" class="back-link">← Back to Home</a>
            </div>
        </div>

        <style>
        /* Section Base */
        .climate-section {
            font-family: "Poppins", Arial, sans-serif;
            color: #222;
            line-height: 1.8;
        }

        /* Title */
        .section-title {
            text-align: center;
            font-size: 34px;
            color: #1a1a1a;
            font-weight: 800;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeInTitle 1.4s ease forwards;
        }

        .section-title::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 80px;
            height: 3px;
            border-radius: 4px;
            background: linear-gradient(90deg, #ffce54, #f57c00);
            transform: translateX(-50%) scaleX(0);
            animation: underlineExpand 1s ease forwards 1.4s;
        }

        /* Intro paragraph */
        .intro-text {
            text-align: center;
            font-size: 17px;
            color: #444;
            margin-bottom: 40px;
        }

        /* Grid Layout */
        .climate-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px;
        }

        /* Card Styling */
        .climate-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            padding: 30px 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .climate-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1);
        }

        .climate-card .icon {
            font-size: 40px;
            color: #f57c00;
            margin-bottom: 10px;
        }

        .climate-card h3 {
            font-size: 20px;
            color: #111;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .climate-card p {
            font-size: 16px;
            color: #555;
            text-align: justify;
        }

        /* Color Accents */
        .summer .icon {
            color: #f5a623;
        }

        .monsoon .icon {
            color: #2196f3;
        }

        .winter .icon {
            color: #3f51b5;
        }

        /* Back Link */
        .back-link {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            background: #f57c00;
            color: #fff;
            padding: 10px 24px;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.3s ease;
            font-weight: 600;
        }

        .back-link:hover {
            background: #e66c00;
            transform: translateY(-3px);
        }

        /* Animations */
        @keyframes fadeInTitle {
            to {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }

        @keyframes underlineExpand {
            to {
                transform: translateX(-50%) scaleX(1);
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 26px;
            }

            .intro-text {
                font-size: 16px;
            }

            .climate-card h3 {
                font-size: 18px;
            }

            .climate-card p {
                font-size: 15px;
            }
        }
        </style>
    </section>



    <?php include __DIR__ . '/includes/footer.php'; ?>