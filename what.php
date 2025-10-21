<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is Buddhism - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">



    <!-- ================= What is Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>What is Buddhism</h2>
            <p style="color:#fff;text-align:center  ">Explore the teachings of Buddhism, a philosophy that inspires
                balance, kindness, and spiritual awakening.
            </p>
        </div>
    </section>



    <style>
    /* =============== What is Buddhis Header Section =============== */
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




    <section class="buddhism-section" style="padding:80px 0; background:linear-gradient(120deg,#fffdf5,#e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px;">

            <!-- Title -->
            <!-- <h2 class="section-title">What is Buddhism</h2> -->


            <!-- Description -->
            <p>
                <span class="highlight">Buddhism</span> is a philosophy and spiritual tradition based on the teachings
                of
                <strong>Lord Buddha</strong>, who was born in 563 BCE at <strong>Lumbini, Nepal</strong> as Prince
                Siddhartha Gautama.
                It is a path of practice and personal development that guides one toward wisdom, ethical conduct, and
                inner peace.
                Founded upon mindfulness and compassion, Buddhism encourages understanding the true nature of life and
                achieving liberation from suffering.
            </p>

            <p>
                The main objective of Buddhism is to end the suffering of cyclic existence, known as
                <strong>“Samsara”</strong>,
                by awakening to the reality of truth and attaining enlightenment or <strong>“Nirvana.”</strong>
                According to Buddhist teachings, the journey toward enlightenment involves purifying the mind, following
                the
                <strong>Eightfold Path</strong>, and living a life of compassion and mindfulness.
            </p>

            <p>
                Today, Buddhism is one of the world’s major religions, practiced across Asia — in countries such as
                <strong>India, Sri Lanka, Tibet, Thailand, Myanmar, China, Japan, Korea,</strong> and beyond — and has
                become
                a universal guide to spiritual peace and self-awareness. Its teachings focus not on rituals, but on
                <strong>ethical living, meditation, and wisdom.</strong>
            </p>

            <h3 class="sub-title">The Basic Tenets or Teachings of Buddhism</h3>

            <ul class="buddhism-list">
                <li>🌿 Nothing is fixed or permanent.</li>
                <li>🌅 Change is always possible.</li>
                <li>💫 Actions have consequences.</li>
            </ul>

            <!-- Back Button -->
            <div style="text-align:center; margin-top:50px;">
                <a href="about.php" class="back-link">← Back to Home</a>
            </div>
        </div>

        <style>
        /* Section base */
        .buddhism-section {
            font-family: "Poppins", Arial, sans-serif;
            color: #222;
            line-height: 1.8;
        }

        /* Title styling */
        .section-title {
            text-align: center;
            font-size: 34px;
            color: #1a1a1a;
            font-weight: 800;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 30px;
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

        p {
            font-size: 17px;
            text-align: justify;
            margin-bottom: 20px;
            color: #444;
        }

        .highlight {
            color: #d08900;
            font-weight: 600;
        }

        /* Subheading */
        .sub-title {
            font-size: 22px;
            color: #333;
            font-weight: 700;
            margin-top: 40px;
            margin-bottom: 18px;
            border-left: 5px solid #f57c00;
            padding-left: 12px;
        }

        /* Buddhism key teachings list */
        .buddhism-list {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        .buddhism-list li {
            background: #fff;
            border-left: 4px solid #f57c00;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            font-size: 16px;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .buddhism-list li:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Back link button */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 26px;
            }

            p {
                font-size: 16px;
            }

            .buddhism-list li {
                font-size: 15px;
            }

            .sub-title {
                font-size: 20px;
            }
        }
        </style>
    </section>



    <?php include __DIR__ . '/includes/footer.php'; ?>