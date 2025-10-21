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




    <!-- ================= The BudhIndia OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>Buddhism Outside India</h2>
            <p>Buddhism Outside India Spreading the Light of Enlightenment Across the World
                The Global Journey of Buddhism From Bodhgaya to the World
            </p>
        </div>
    </section>



    <style>
    /* =============== The BudhIndia OF Buddhis Header Section =============== */
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



    <section class="about-buddhism"
        style="padding:80px 0; background:background:linear-gradient(120deg,#fffdf5,#e9f7f7;">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px; text-align:center;">

            <!-- Mahabodhi Temple Image -->
            <img src="<?php echo $base ?? ''; ?>/image/lordbudha.jpg" alt="Mahabodhi Temple in Bodhgaya"
                class="top-image">

            <!-- <h1 class="fade-title">The History OF Buddhism</h1> -->

            <p style="color:#f57c00; font-size:18px ;font-weight:bold;">Sri Lanka (3rd century BCE onwards) </p>

            <p>
                When Ashoka's son, monk Mahindra reached the contemporary Sri Lankan capital of Anuradhapura in the 3rd
                century BCE, he was warmly welcomed by the Sri Lankan ruler, Devanampriya-Tissa. The Sri Lankan emperor
                was greatly influenced by the teachings of the Buddha and culture of the Buddhist India which were
                preached by the monk Mahindra, and converted into Buddhism. Soon, Buddhism became the state religion of
                Sri Lanka.
            <p>
                Later, when Ashoka's daughter, Sanghamitra, reached Sri Lanka, she is believed to have brought the
                southern branch of the original Bodhi tree, which was planted at Anuradhapura, and still is worshipped
                by the Sri Lankan Buddhists.
            </p>

            <p>During the reign of the Sri Lankan ruler, Vatta Gamini in the 1st century CE, the monks assembled in
                Aloka-Vihara and wrote down the Tripitaka, the three basket of the Teachings, known as the Pali
                scriptures for the first time. The Sri Lankan nuns introduced the Sangha of nuns in China in 433 CE.
                Although Buddhism in Sri Lanka had spread once from Sri Lanka to other parts as well, but from the 16th
                century CE onwards, it nearly died out due to competition from Hinduism and Islam, as well as war and
                Portuguese, Dutch and British colonialism in Sri Lanka.</p>


            <p>But a major Buddhist revival movement as a result of nationalism not only brought back the glory of
                Buddhism in Sri Lanka, but also flourished it in other parts of the continent.From that period onwards
                itself, the Sri Lankan monks have had an important role in spreading both Theravada Buddhism in Asia,
                the West and even in Africa. Today, about 69 per cent of the total Sri Lankan population adheres to
                Theravadin Buddhism.</p>


            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">China (475 CE onwards)
            <p>

                Before the arrival of Buddhism in China, the Chinese were either following Confucianism, Taoism or folk
                religion. China recorded official contact with Buddhism with the arrival of an Indian Buddhist monk and
                scholar, Bodhi Dharma IN 475 CE. Bodhi Dharma introduced the philosophy of the Buddha's teachings to the
                Chinese, who were influenced by them. Gradually, Buddhism and Chinese Taoism intermingled with one
                another, thereby resulting in the Ch'an school of Buddhism in China. The philosophical inspirations of
                the Madhyamaka and Yogachara, as well as the Pure Land and Ch'an Sutras, interacting with the already
                sophisticated philosophies of Confucianism and Taoism, led to a regular renaissance in religious and
                philosophical thought in China.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Tibet (173 CE onwards)
            </p>

            <p>
                Buddhism was first introduced to Tibet in 173 CE in the reign of the 28th Yarlung king Lha Thothori
                Nyantsen, but it had hardly any impact on the Tibetans. The Buddhist scriptures were for the first time
                officially introduced to Tibet around 500 CE during the reign of the 28th Tibetan king, Hlato Ri
                Nyentsen. The Indian scholar, Shantarakshita went to Tibet during the reign of the Tibetan king Trisong
                Detsen (CE 740 - CE 798), but due to the opposition from some of the king's ministers, he had to return
                back. But before Shantarakshita left, he convinced the king to invite the tantric adept Padmasambhava,
                whose arrival asserted that Shantarakshita's efforts had been ruined by the demons of the country.
                Padmasambhava defeated all the demons in a personal combat which impressed the king and his court who
                then invited Shantarakshita again and the first monastery in Tibet was built at Samye. This marked the
                beginning of the 'first dissemination' of Buddhism to Tibet, which ended when the devout Buddhist king
                Relbachen (815-836) was assassinated, which further led to the beginning of an interregnum period for
                Tibetan Buddhism, which again ended in 1042 CE, when Atisha (982 CE - 1054 CE), one of the directors of
                the monastic university of Nalanda, paid a visit to Tibet. Tibetan historians consider this to be the
                beginning of the 'second dissemination' of Buddhism in Tibet. Atisha was so successful in bringing back
                the Dharma to Tibet that Buddhism quickly became the dominant religious tradition in the country.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Buddhism In Japan (550 CE onwards)
            </p>

            <p>
                Buddhism was introduced to Japan by Korea and China in the 6th century CE. Trade via 'silk route' not
                only brought different regions of the distant world together, but also developed the 'mutual
                understanding' among the neighbouring nations. China and Korea were no exception and along with trade
                relationship, Buddhism reached Korea from China.
                Later, as per Nihonshoki in 552 CE, the Korean state of Paekche sent Buddhist texts and images to Japan
                so as to convince the Japanese emperor to become an ally in its war with the neighboring state of Silla.
                In the initial stages, Japanese inclination towards Buddhism was majorly related to the magical powers
                of the Buddha and Buddhist monks. But when the emperor Yomei (CE 585 - CE 587) converted into Buddhism,
                the Japanese began to travel to China in order to learn from the Buddhist teachers there, and a number
                of indigenous Buddhist schools developed in Japan, Zen being the most prominent one of all others like
                Shingon and Tindai.
                Yomei's son, Prince Shotoku (CE 574 - CE 622) propagated Buddhism, built various Buddhist temples and
                sent Japanese monks to travel to China for further studies on Buddhism. Besides these, he also wrote
                commentaries on three Buddhist texts. Undoubtedly, in later period, he was viewed in Japan as an
                incarnation of the Bodhisattva Avalokiteshvara
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