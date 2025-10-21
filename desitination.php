<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Destinations of Buddhism - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The Desitination OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>The Destinations Of Buddhism</h2>
            <p>The Destinations of Buddhism represent the sacred sites where Lord Buddha lived, meditated, and shared
                his divine teachings.
            </p>
        </div>
    </section>



    <style>
    /* =============== The Desitination OF Buddhis Header Section =============== */
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



    <section class="about-buddhism" style="padding:80px 0;  background:linear-gradient(120deg, #fffdf5, #e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px; text-align:center;">

            <!-- Mahabodhi Temple Image -->
            <img src="<?php echo $base ?? ''; ?>/image/lordbudha.jpg" alt="Mahabodhi Temple in Bodhgaya"
                class="top-image">

            <!-- <h1 class="fade-title">The History OF Buddhism</h1> -->

            <p>
                Buddhist sites in India are primarily located in the state of Bihar, Andhra Pradesh, Assam and Uttar
                Pradesh. If you are undertaking a trip to Bihar, then make sure that you explore the Buddhist
                attractions of Patna, Gaya, Hajipur, Champanagar, Kesariya, Kuskihar, Pragbodhi, Gurpa, Ghosrawan, Don,
                Indashala Cave, Jethian, Lauriya Nandangarh and Vikramshila. It is not that all these sites are directly
                related to Lord Buddha, however, their association with the religion in one or the other way makes tham
                interesting sites for Buddhist trip. For example, Vikramshila was one of the most important place for
                Buddhist learning in past. Similarly, Ghosrawan is important because it houses a monastery which is
                believed to be visited by the famous Chinese traveller Hieun Tsang in the past. Patna, the capital city
                was visited by the Buddha and it was also the venue of third Buddhist council during the reign of King
                Ashoka. The sites of Gurpa, Indashala cave, Kesariya, Jethian have interesting as well as informative
                accounts associated with the Buddha himself.

            <p>Located close to the state of Bihar is another important state for Buddhist tourism, that is, Uttar
                Pradesh. The state is home to some of the most important Buddhist sites of the country. Prominent
                amongst these are Sankisa, Prabhosa and Mathura. Sankisa, the town of human abode, was the place to
                which Buddha is believed to have returned after delivering sermons to his mother and other devas in
                heaven. In Prabhosa, the Buddha is believed to have spent His third rains retreat. Mathura, too, was
                visited by the Lord, however, it was not liked by Him much.</p>

            <p>In the south Indian state of Andhra Pradesh, Buddhist sites are numerous. The stupa of Amravati,
                Nagarjunasagar, Sankaram, Bhattiprolu and Chandavarman Buddhist sites attract a whole lot of travellers.
                Apart from these Buddhist sites at Adurru, Ankapalle, Bavikonda, Ghantasala and Guntupalli are also
                important for any Buddhist tourist. Last but not the least, the state of Andhra Pradesh also houses the
                Undavalli Caves in Guntur and a Statue of Lord Buddha in Hyderabad.</p>

            </p>


            <a href="about.php" class="back-link">← Back to Home</a>
        </div>

        <style>
        .about-buddhism {
            background: linear-gradient(120deg, #fffdf5, #e9f7f7);
            color: #222;
            font-family: "Poppins", Arial, sans-serif;
            line-height: 1.8;
        }

        .p {
            text-align: justify;
            margin-bottom: 18px;
            font-size: 17px;
            font-weight: 400px;


        }

        .about-buddhism p {
            font-size: 17px;
            text-align: justify;
            margin-bottom: 18px;
        }

        .highlight {
            color: #d08900;
            font-weight: 600;
        }

        .top-image {
            width: 1300px;
            max-width: 1300px;
            height: 550px;
            border-radius: 14px;
            display: block;
            margin: 0 auto 30px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1.4s ease forwards;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .fade-title {
            font-size: 34px;
            color: #f57c00;
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInTitle 1.6s ease forwards 0.4s;

        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background: #f57c00;
            color: #fff;
            padding: 10px 22px;
            border-radius: 8px;
            transition: background 0.3s ease;
            font-weight: 600;
        }

        .back-link:hover {
            background: #e56b00;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInTitle {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .about-buddhism p {
                font-size: 16px;
            }

            .fade-title {
                font-size: 26px;
            }
        }
        </style>
    </section>



    <?php include __DIR__ . '/includes/footer.php'; ?>