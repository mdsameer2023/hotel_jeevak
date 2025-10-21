<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The History of Buddhism - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The History OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>The History Of Buddhism</h2>
            <p style="color:#fff;text-align:center">Discover the Rich History of Buddhism: The Journey of Enlightenment
                Begins in Bodhgaya.
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



    <section class="buddhism-india" style="padding:80px 0; background:linear-gradient(120deg,#fffdf5,#e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px;">

            <!-- Image -->
            <div class="image-wrapper" style="text-align:center; margin-bottom:40px;">
                <img src="<?php echo $base ?? ''; ?>/image/lordbudha.jpg" alt="Great Buddha Statue in Bodhgaya"
                    class="buddha-image">
            </div>

            <!-- Section Title -->
            <!-- <h2 class="section-title">The Buddhism in India</h2> -->

            <!-- Intro -->
            <p>
                The history of <strong>Buddhism in India</strong> traces back to the teachings of
                <strong>Lord Buddha</strong> after He attained enlightenment in 528 BCE under the
                sacred <strong>Bodhi Tree</strong> at Bodh Gaya. Following enlightenment, Lord Buddha
                dedicated His life to guiding others toward the truth of existence and the path of compassion.
            </p>

            <p>
                After His <strong>Mahaparinirvana</strong> in 483 BCE, the first Buddhist Council was convened
                at <strong>Rajgir (Bihar)</strong>, where 500 monks assembled under the guidance of
                <strong>Mahakashyapa</strong>. The Buddha’s teachings were compiled by His chief disciple
                <strong>Ananda</strong> in the sacred Pali canon known as the <strong>Tripitaka</strong> —
                the three baskets of wisdom.
            </p>

            <!-- Timeline Sections -->
            <h3 class="sub-title">The Buddhism in India (483 BCE – 250 BCE)</h3>
            <p>
                The second Buddhist Council was held in <strong>Vaishali</strong> in 383 BCE, a century after
                the Buddha’s passing. This era witnessed differences in Buddhist ideologies that led to the
                formation of two major schools — the <strong>Sthaviravadins</strong> (later known as Theravada)
                and the <strong>Mahasanghikas</strong> (Mahayana). The Sthaviravadins were conservative and
                ascetic, while the Mahasanghikas embraced more liberal ideas. Emperor <strong>Ashoka</strong>
                later played a crucial role in reconciling these sects.
            </p>

            <h3 class="sub-title">Ashoka (269 BCE – 232 BCE)</h3>
            <p>
                Emperor <strong>Ashoka</strong> of the Maurya Dynasty became one of the greatest patrons of
                Buddhism after witnessing the suffering caused by war. He spread the Buddha’s message of
                <strong>Ahimsa (Non-violence)</strong> and <strong>Dharma (Righteous Living)</strong> throughout
                his empire and beyond — to <strong>Egypt, Greece, Sri Lanka, and Southeast Asia</strong>.
                Ashoka built monasteries, stupas, and pillars inscribed with Buddhist edicts, establishing
                Buddhism as a major moral and cultural force.
            </p>

            <h3 class="sub-title">233 BCE – 1st Century BCE</h3>
            <p>
                After Emperor Ashoka’s death, Buddhism faced a brief decline under the <strong>Sunga rulers</strong>
                who revived Brahmanical traditions. However, the spirit of Buddhism remained alive through the
                efforts of devoted monks and scholars who preserved its scriptures and teachings.
            </p>

            <h3 class="sub-title">1st Century CE – 8th Century CE</h3>
            <p>
                During this period, Buddhism reached its golden age in India. Kings such as
                <strong>Kanishka</strong> of the <strong>Kushan Dynasty</strong> extended royal support to
                Buddhist monasteries and learning centers. The <strong>Fourth Buddhist Council</strong> held
                in Kashmir under his reign was crucial in organizing the Mahayana tradition, which emphasized
                compassion and universal enlightenment.
            </p>

            <h3 class="sub-title">8th Century CE Onwards</h3>
            <p>
                After the 8th century, Buddhism began to decline in India due to the revival of Hinduism and
                external invasions. Many Buddhist scholars integrated elements of <strong>Tantric practices</strong>
                within Indian traditions. However, Buddhism survived in regions such as the Himalayas and the
                Northeast, preserving its pure teachings.
            </p>

            <p>
                In modern times, leaders like <strong>Dr. B. R. Ambedkar</strong> reignited the flame of Buddhism
                in India through peaceful reform and revival. Today, Bodhgaya stands as a symbol of universal
                peace and awakening — a living testament to the timeless wisdom of the Buddha.
            </p>

            <!-- Back Button -->
            <div style="text-align:center; margin-top:50px;">
                <a href="about.php" class="back-link">← Back to Home</a>
            </div>
        </div>

        <style>
        /* Section Base */
        .buddhism-india {
            font-family: "Poppins", Arial, sans-serif;
            color: #222;
            line-height: 1.8;
        }

        /* Image Styling */
        .buddha-image {
            width: 1300px;
            max-width: 1300px;
            height: 550px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s ease, filter 0.4s ease;
        }

        .buddha-image:hover {
            transform: scale(1.03);
            filter: brightness(1.05) saturate(1.1);
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

        p {
            font-size: 17px;
            text-align: justify;
            margin-bottom: 20px;
            color: #444;
        }

        .sub-title {
            font-size: 22px;
            color: #f57c00;
            font-weight: 700;
            margin-top: 40px;
            margin-bottom: 8px;
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

        /* Responsive */
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

            .buddha-image {
                max-width: 100%;
            }
        }
        </style>
    </section>


    <?php include __DIR__ . '/includes/footer.php'; ?>