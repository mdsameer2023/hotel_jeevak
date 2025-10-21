<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Buddhist Monasteries In Bihar- Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The Buddhist Monasteries In Bihar OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>Buddhist Monasteries In Bihar</h2>
            <p style="text-align:center">The Destinations of Buddhism represent the sacred sites where Lord Buddha
                lived, meditated, and shared
                his divine teachings.
            </p>
        </div>
    </section>



    <style>
    /* =============== The Buddhist Monasteries In Bihar OF Buddhis Header Section =============== */
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



    <section class="buddhist-monasteries" style="padding:80px 0; background:linear-gradient(120deg,#fffdf5,#eafaf8);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px;">
            <!-- <h2 class="section-title">Buddhist Monasteries in Bihar</h2> -->

            <p>
                <span class="highlight">Bihar</span> is the sacred land where over 2,500 years ago, under the Bodhi Tree
                of
                <strong>Bodh Gaya</strong>, Prince Siddhartha attained enlightenment and became the
                <strong>Buddha — “the awakened one.”</strong>
                Today, this region holds immense significance for Buddhists across the world. Among the four great
                Buddhist
                pilgrimage sites, Bodhgaya stands out as the spiritual heart of this faith — a serene destination where
                millions come to meditate, pray, and seek peace.
            </p>

            <p>
                In this holy town, apart from the <strong>Mahabodhi Temple</strong> and the <strong>Bodhi Tree</strong>,
                numerous beautiful monasteries invite you to explore the living traditions of Buddhism.
                From the <strong>Japanese Monastery</strong> and <strong>Thai Monastery</strong> to the
                <strong>Tibetan, Chinese, and Bhutanese Temples</strong>, each has been lovingly built by Buddhist monks
                in
                collaboration with their home countries — such as Thailand, Japan, Bhutan, and China.
                Each monastery showcases the unique art, culture, and spirituality of its homeland, creating a truly
                global
                Buddhist experience.
            </p>

            <p>
                The architecture, serenity, and devotion found in these monasteries leave every visitor spellbound. They
                offer a glimpse of how Buddhism continues to inspire peace, compassion, and mindfulness across the
                world.
                Festivals and rituals held in these monasteries throughout the year provide an opportunity to witness
                Buddhist chants, prayers, and ceremonies — all celebrating the timeless message of the Buddha.
            </p>

            <p>
                If you are visiting <strong>Bodhgaya</strong> or anywhere in Bihar, make sure to explore these sacred
                monasteries. Each visit brings you closer to the path of inner awakening and a deeper connection with
                Buddhist heritage.
            </p>

            <h3 class="sub-title" style="color:#f57c00;font-weight:bold">Famous Buddhist Monasteries in Bihar</h3>

            <div class="monastery-gallery">
                <div class="monastery-card">
                    <img src="<?php echo $base ?? ''; ?>/image/hotel_jeevaknight.jpg" alt="Thai Monastery Bodhgaya">
                    <p>Thai Monastery, Bodhgaya</p>
                </div>

                <div class="monastery-card">
                    <img src="<?php echo $base ?? ''; ?>/image/rooms/place.avif" alt="Japanese Monastery Bodhgaya">
                    <p>Japanese Monastery, Bodhgaya</p>
                </div>

                <div class="monastery-card">
                    <img src="<?php echo $base ?? ''; ?>/image/lordbudha.jpg" alt="Tibetan Monastery Bodhgaya">
                    <p>Tibetan Monastery, Bodhgaya</p>
                </div>

                <div class="monastery-card">
                    <img src="<?php echo $base ?? ''; ?>/image/rooms/temple.jpg" alt="Bhutanese Temple Bodhgaya">
                    <p>Bhutanese Temple, Bodhgaya</p>
                </div>
            </div>

            <!-- Back to Home Button -->
            <div style="text-align:center; margin-top:50px;">
                <a href="about.php" class="back-link">← Back to Home</a>
            </div>
        </div>

        <style>
        /* Section Styling */
        .buddhist-monasteries {
            font-family: "Poppins", Arial, sans-serif;
            color: #222;
            line-height: 1.8;
        }

        .section-title {
            text-align: center;
            font-size: 34px;
            color: #1a1a1a;
            font-weight: 800;
            position: relative;
            display: inline-block;
            margin: 0 auto 30px;
            left: 50%;
            transform: translateX(-50%);
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

        .highlight {
            color: #d08900;
            font-weight: 600;
        }

        p {
            text-align: justify;
            margin-bottom: 20px;
            font-size: 17px;
            /* font-weight: 400px; */
        }

        .sub-title {
            text-align: center;
            color: #333;
            font-weight: 700;
            font-size: 24px;
            margin-top: 50px;
            margin-bottom: 25px;
        }

        /* Monastery Image Grid */
        .monastery-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 24px;
            margin-top: 30px;
        }

        .monastery-card {
            text-align: center;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .monastery-card img {
            width: 100%;
            border-radius: 14px;
            object-fit: cover;
            height: 220px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s ease, filter 0.4s ease;
        }

        .monastery-card:hover img {
            transform: scale(1.05);
            filter: brightness(1.08) saturate(1.1);
        }

        .monastery-card p {
            margin-top: 10px;
            color: #444;
            font-weight: 600;
        }

        /* Back Button Styling */
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

            p {
                font-size: 16px;
            }

            .sub-title {
                font-size: 20px;
            }
        }
        </style>
    </section>



    <?php include __DIR__ . '/includes/footer.php'; ?>