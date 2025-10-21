<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Buddhist Architecture - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The Religion OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2> The Buddhist Architecture </h2>
            <p>The Buddhist Architecture Artistic Reflections of Spiritual Harmony Exploring the Sacred Beauty of
                Buddhist Temples and Monasteries
            </p>
        </div>
    </section>



    <style>
    /* =============== The Religion this Header Section =============== */
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



    <section class="about-buddhism" style="padding:80px 0; background: linear-gradient(120deg, #fffdf5, #e9f7f7);">
        <div class="container" style="max-width:1350px; margin:auto; padding:0 20px; text-align:center;">

            <!-- Mahabodhi Temple Image -->
            <!-- <img src="<?php echo $base ?? ''; ?>/image/lordbudha.jpg" alt="Mahabodhi Temple in Bodhgaya"
                class="top-image"> -->

            <!-- <h1 class="fade-title">The History OF Buddhism</h1> -->

            <p>
                The Buddhist architecture has its root deeply implanted in the Indian soil- the birthplace of the
                Buddha's teachings. The Buddhist architecture began with the development of various symbols,
                representing aspects of the Buddha's life (563 BCE - 483 BCE). For the first time, it was the Indian
                emperor Ashoka, who not only established Buddhism as the state religion of his large Magadh empire, but
                also opted for the architectural monuments to spread Buddhism in different places. Distinctive Buddhist
                architectural structures and sculptures such as Stupas, Pagodas, monasteries and Caves, which have been
                mere spectators of different eras quietly speaks about the phases of the Buddhist stages.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Caves

            <p>
                Caves or grottoes are the oldest form of the Buddhist architecture. They are also known as the rock-cut
                monasteries, which were hewn from the cliffs and rock walls of the valleys. The Buddhist caves traces
                back their beginning around 100 BCE. In India, the most significant cave is Ajanta caves, near modern
                Aurangabad, Maharashtra. The Indian Buddhist monks carried this art of cave hewing to China, where the
                earliest cave temples were built in the 4th century in Dunhuang or Tun-Huang, which were further
                decorated with relief carvings, paintings and stone images of the Buddha or the Bodhisattvas.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Stupas

            </p>

            <p>
                AThe Stupas holds the most important place among all the earliest Buddhist sculptures. A Stupa is a
                dome-shaped monument, used to house Buddhists' relics or to commemorate significant facts of Buddhism.
                Though the Stupas are the most prominent sculptures throughout the world, but Myanmar or Burma is
                credited to have more Stupas than anywhere else. In India, the most important and well preserved site is
                at Sanchi, where one can find the full range of Buddhist art and architecture from the 3rd century BCE
                to the 12th century CE.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Pagodas
            </p>

            <p>
                Pagodas are the principle form of Buddhist architecture, which are used as religious multistory Buddhist
                towers, erected as a memorial or shrine. They are symbols of five elements of the universe - earth,
                water, fire, air and ether, and along with them, the most important factor - Consciousness, which is the
                ultimate reality.


            <p>The early Buddhists had started using the royal symbol of 'Pagoda', by applying an umbrella-like
                structure to symbolise the Buddha, which soon took over the functions of the Stupas. In the 3rd century
                BCE, an Indian emperor Ashoka, who had converted to Buddhism, promoted the Pagodas by building 84,000 of
                them throughout India, and since then, Pagodas have been an inseparable parts of all those countries,
                which practice Buddhism : China, Japan, Korea, India and Southeast Asia. Myanmar houses the Mahamuni
                Pagoda, one of the most important pagodas in Mandalay, which has an ancient statue of the Buddha,
                brought there by king Bodawpaya in 1784 CE.</p>

            <p>The Indian Pagodas, full of carvings and sculptures, are mainly pyramidical in shape and taper to apex,
                whereas those of China and other Asian regions are stereotypical pagodas with tiled and upward curving
                roofs.

            </p>

            </p>


            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Temples And Monasteries

            </p>
            <p>The Buddhist temples and monasteries, found in every Buddhist country, form another distinctive example
                of the Buddhist architecture. The Buddhist temples in India are superb examples of the temple
                architecture with the most prominent one at Bodh Gaya (Mahabodhi temple), the place of the Buddha's
                enlightenment. Other major Buddhist temples in India, which are fine examples of the golden Indian
                architecture, are at Sanchi(450 CE), Taxila and Sarnath. Similarly, other temples such as those at
                Cambodia (the famous Angkor Wat temple), Sri Lanka, Thailand, China and Japan presents an excellent
                example of the Buddhist architecture. Japan boasts of being the greatest surviving concentration of the
                Buddhist art and architecture in its 80,000 temples, most of which retain original features from as
                early as the Nara period(710 CE - 794 CE).



            <p>Secondly, monasteries, a dwelling place for community of monks, presents fine example of the Buddhist
                architecture and charismatic Buddhist spirituality. In India, the ruins of the Nalanda monastic
                university and the ancient monasteries at Sarnath, whose ruins are still present along with some of the
                latest ones, still depicts the golden past of Buddhism and developed architectural style in India. The
                Tibetan, Japanese and Chinese monasteries along with others presents a very distinctive style of
                architecture with splendid use of colour and ornamentation. The use of images, paintings, thangkas and
                mandalas in these monasteries produces rich iconography not only architecturally, but artistically as
                well.</p>
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