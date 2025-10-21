<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to R each Bodhgaya - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The History OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>How to Reach Bodhgaya </h2>
            <p style="text-align:center">Your Complete Travel Guide to the Land of Enlightenment Reach Bodhgaya Easily
                Air, Train, and Road
                Connectivity
            </p>
        </div>
    </section>



    <style>
    /* =============== The How to reach Bodhgaya  OF Buddhis Header Section =============== */
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



    <section class="reach-bodhgaya" style="padding:80px 0; background:linear-gradient(120deg,#fffdf5,#e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px;">

            <!-- Section Title -->
            <!-- <h2 class="section-title">How to Reach Bodhgaya</h2> -->

            <p>
                <span class="highlight">Bodhgaya</span> is the sacred place where Prince Siddhartha Gautama attained
                enlightenment under the holy <strong>Bodhi Tree</strong> and became the <strong>Buddha</strong>.
                Situated in southern Bihar, Bodhgaya is one of the <strong>four most sacred Buddhist pilgrimage
                    sites</strong>,
                alongside Lumbini, Sarnath, and Kushinagar. It welcomes countless pilgrims and travelers who come to
                meditate,
                learn, and experience inner peace.
            </p>

            <!-- Other Attractions -->
            <h3 class="sub-title">Other Attractions of Bodhgaya</h3>

            <div class="attractions-list">
                <div class="attraction-item">
                    <h4>Mahabodhi Temple</h4>
                    <p>
                        The <strong>Mahabodhi Temple</strong>, a UNESCO World Heritage Site, stands as one of India’s
                        most
                        sacred Buddhist landmarks. It houses ancient carvings, serene statues, and the Vajrasana — the
                        diamond throne where the Buddha meditated.
                    </p>
                </div>

                <div class="attraction-item">
                    <h4>Maha Bodhi Tree</h4>
                    <p>
                        A descendant of the original <strong>Bodhi Tree</strong> under which the Buddha achieved
                        enlightenment. The sacred fig tree, over a century old, is revered by devotees from all over the
                        world.
                    </p>
                </div>

                <div class="attraction-item">
                    <h4>Chankramana Chaitya</h4>
                    <p>
                        The <strong>Chankramana Chaitya</strong>, or Jewel Walk, marks the path where the Buddha
                        meditated
                        in deep reflection during the third week following enlightenment — a serene place for inner
                        peace.
                    </p>
                </div>
            </div>

            <!-- How to Reach -->
            <h3 class="sub-title">How to Reach</h3>

            <ul class="travel-list">
                <li><span class="icon">✈️</span> <strong>By Air:</strong> The nearest airport is at <strong>Gaya (12
                        km)</strong>,
                    with direct flights to Colombo (Sri Lanka) and Bangkok (Thailand).
                </li>

                <li><span class="icon">🚆</span> <strong>By Rail:</strong> The nearest railway station is <strong>Gaya
                        Junction (12 km)</strong>,
                    well connected to Delhi, Kolkata, Patna, and Ranchi.
                </li>

                <li><span class="icon">🚗</span> <strong>By Road:</strong> Bodhgaya is easily accessible by road, with
                    frequent transport
                    from <strong>Patna (108 km)</strong> and nearby towns. Regular buses and taxis are available.
                </li>

                <li><span class="icon">🕉️</span> <strong>Local Tip:</strong> Explore nearby monasteries and meditation
                    centers like the

                </li>
                <li>
                    <span class="icon">🏡</span><strong>Tibetan Monastery:</strong> for peaceful chants, prayer wheels,
                    and an authentic Buddhist
                    experience.
                </li>
            </ul>

            <!-- Back Button -->
            <div style="text-align:center; margin-top:50px;">
                <a href="about.php" class="back-link">← Back to Home</a>
            </div>
        </div>

        <style>
        /* Section Styling */
        .reach-bodhgaya {
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

        .highlight {
            color: #d08900;
            font-weight: 600;
        }

        .sub-title {
            font-size: 24px;
            color: #333;
            margin-top: 45px;
            margin-bottom: 18px;
            font-weight: 700;
            border-left: 5px solid #f57c00;
            padding-left: 12px;
        }

        p {
            margin-bottom: 20px;
            text-align: justify;
            font-size: 17px;
        }

        .attractions-list h4 {
            font-size: 18px;
            color: #f57c00;
            margin-bottom: 6px;
        }

        /* Travel List with Icons */
        .travel-list {
            list-style: none;
            padding: 0;
        }

        .travel-list li {
            background: #fff;
            border-left: 4px solid #f57c00;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .travel-list li:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .icon {
            font-size: 22px;
            color: #f57c00;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .travel-list li:hover .icon {
            transform: scale(1.2);
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

            .sub-title {
                font-size: 20px;
            }

            p {
                font-size: 16px;
            }

            .travel-list li {
                flex-direction: column;
                align-items: flex-start;
            }

            .icon {
                font-size: 20px;
            }
        }
        </style>
    </section>




    <?php include __DIR__ . '/includes/footer.php'; ?>