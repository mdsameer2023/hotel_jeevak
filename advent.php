<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Advent of Buddhism - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">





    <!-- ================= The Advent OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>The Advent Of Buddhism</h2>
            <p style="color:#fff;text-align:center">The Advent of Buddhism — where spirituality meets history, and
                tranquility becomes a way of life.
            </p>
        </div>
    </section>



    <style>
    /* =============== The Advent OF Buddhis Header Section =============== */
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



    <section class="advent-buddhism" style="padding:80px 0; background:linear-gradient(120deg,#fffdf5,#e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px;">

            <!-- Section Title -->
            <!-- <h2 class="section-title">The Advent of Buddhism</h2> -->

            <!-- Content -->
            <p>
                The advent of <span class="highlight">Buddhism</span> traces back to the 6th century BCE, when
                <strong>Siddhartha Gautama</strong>, a Shakya prince of Nepal, renounced his royal luxuries and
                pleasures
                to seek truth and enlightenment. After a long journey of deep meditation and self-realization, he
                attained
                enlightenment beneath the sacred <strong>Bodhi Tree</strong> at Bodh Gaya (Bihar, India), becoming the
                <strong>Buddha — “The Enlightened One.”</strong>
            </p>

            <p>
                Unlike those before him who kept their spiritual realizations secret, Lord Buddha chose to share his
                wisdom
                with all. His teachings — known as the <strong>Dharma</strong> — spread rapidly across India and beyond,
                giving rise to one of the world’s most profound paths of peace, compassion, and awareness. Buddhism
                became
                a new way of life, inspiring millions to live mindfully and truthfully.
            </p>

            <p>
                In 528 BCE, after achieving enlightenment, Lord Buddha traveled from Bodh Gaya to
                <strong>Sarnath</strong>
                (near Varanasi, Uttar Pradesh), where he delivered his first sermon at the <strong>Deer Park</strong>.
                The five monks who had previously accompanied him became his first disciples after witnessing his divine
                wisdom.
                This event marked the beginning of the <strong>Sangha</strong> — the community of Buddhist followers.
            </p>

            <p>
                In his first discourse, Lord Buddha taught the <strong>Middle Path</strong> — a balanced approach
                between
                self-indulgence and extreme asceticism. He emphasized the <strong>Four Noble Truths</strong> and the
                <strong>Noble Eightfold Path</strong>, guiding humanity toward moral living, mental discipline, and
                ultimate liberation.
                His philosophy centered on compassion, mindfulness, and understanding the impermanence of all things.
            </p>

            <p>
                For nearly 45 years, the Buddha traveled throughout India, spreading his message of wisdom and
                compassion
                to people of every background — kings, merchants, beggars, and monks alike. His teachings on
                <strong>non-self</strong>,
                <strong>impermanence</strong>, and <strong>Karma</strong> transformed lives and established the moral
                foundation of
                Buddhism as we know it today.
            </p>

            <p>
                The Buddha’s final teachings before attaining <strong>Parinirvana</strong> at Kushinagar (Uttar Pradesh)
                emphasized self-awareness and continuous learning. His disciples compiled his teachings into three
                sacred
                texts known as the <strong>Tripitaka</strong> — the essence of Buddhist philosophy, ethics, and
                meditation.
            </p>

            <!-- Back Button -->
            <div style="text-align:center; margin-top:50px;">
                <a href="about.php" class="back-link">← Back to Home</a>
            </div>
        </div>

        <style>
        /* Section Base */
        .advent-buddhism {
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
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeInTitle 1.4s ease forwards;
        }

        .section-title::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 90px;
            height: 3px;
            border-radius: 4px;
            background: linear-gradient(90deg, #ffce54, #f57c00);
            transform: translateX(-50%) scaleX(0);
            animation: underlineExpand 1s ease forwards 1.4s;
        }

        /* Text */
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

        /* Back link */
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

        /* Responsive */
        @media (max-width: 768px) {
            .section-title {
                font-size: 26px;
            }

            p {
                font-size: 16px;
            }
        }
        </style>
    </section>


    <?php include __DIR__ . '/includes/footer.php'; ?>