<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buddhism After Buddha - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The Buddhism After Buddha OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2> Buddhism After Buddha </h2>
            <p>Buddhism After Buddha continued to flourish through the dedication of his followers and the strength of
                his timeless teachings.
            </p>
        </div>
    </section>



    <style>
    /* =============== The Buddhism After Buddha this Header Section =============== */
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
                Buddhism is a philosophy based on the teachings of Lord Buddha(563 BCE-483 BCE), who was born as
                Siddhartha Gautama, a Shakya prince in Lumbini, Nepal. The teachings preached by Lord Buddha
                subsequently turned into a religion, known as Buddhism. The core of Buddhism lies in the purification of
                mind and soul by realising the truth and getting rid of the worldly desires. Basically, it were the
                principles of Karma in the doctrine of Buddhism that made the religion one of the major ones in the
                world.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Buddhism After The Buddha - The role of Ashoka

            <p>
                It was after the Buddha's death that the school of Buddhism spread slowly in India and then
                subsequently, throughout the world. However, it was at the time of the the Indian emperor Ashoka that
                Buddhism took a pace to reach its height. After the tragic Kalinga war, Ashoka decided to follow the
                path of non-violence or 'ahimsa' and converted to Buddhism. He promoted the doctrines of Buddhism not
                only in his empire as Dhamma but in other regions as well. It was his promotional campaign that led to
                the construction of the Buddhist religious monasteries and stupas, which further facilitated the spread
                of Buddhism in countries like Sri Lanka, Tibet, China and Japan.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">The Buddhist Councils And The Rise Of The
                Buddhist Sects

            </p>

            <p>
                First Buddhist Council : It was merely three months after the death of the Buddha that the first
                Buddhist Council was held in Rajgriha (Modern Rajgir, India) under the guidance of a senior monk, Maha
                Kassapa. Almost all the Buddhist monks who had attained the 'arahantship' participated in the council,
                in which they unanimously agreed that no disciplinary rule regulated by Lord Buddha should be changed,
                and neither new rules should be introduced! Since there was no conflict among the monks regarding the
                doctrines of Buddhism, therefore, all the principles were divided into several parts, which were
                individually assigned to the senior monks and their disciples. The main purpose of this division was
                only to ensure that no omissions and additions could be made to the original principles.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">The Second Buddhist Council And The Formation Of
                Sthaviravadin and Mahasanghika Schools
            </p>

            <p>
                POne hundred years after the first Buddhist council, the second Buddhist council was held in Vaishali in
                383 BCE to deal with the disputes related to the monastic discipline(Vinaya). The monks differed so
                severely in their opinions on the interpretations of the Buddha's teachings that a split was inevitable
                and further resulted in the formation of the Sthaviravadin (with orthodox view) and Mahasanghika(with
                liberal view) schools of Buddhism.




            </p>


            <p style="color:#f57c00; font-size:18px ;font-weight:bold">The Third Buddhist Council

            </p>
            <p>The Indian emperor Ashoka convened the third Buddhist council at Patliputra (Now Patna, India) in 250
                BCE. The council was held by the monk, Moggaliputta Tissa and aimed at the purification of the Buddhist
                movement by reconciling different schools of Buddhism.



            <p>The third Buddhist council formalised the Pali canon, Tripitaka, better known as the traditional Buddhist
                text directly transmitted from the Buddha. The Pali canon comprised the monastic discipline(Vinaya
                Pitaka), the Budddhist doctrine(Sutra Pitaka) and a new philosophy(Abhidharma Pitaka)</p>

            <p>As per the proceedings of the third Buddhist council, emissaries, including Ashoka's son, Mahindra, were
                sent to various countries such as Sri Lanka, Ceylon and the Greek kingdoms in the west in order to
                spread Buddhism.</p>


            <p>After the third Buddhist council, the ideological conflict between the Sthaviravadins and the
                Mahasanghikas became so intense that they parted their ways forever and were named as Theravadins and
                Mahayanas respectively.</p>
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Buddhist Scriptures

            </p>

            <p>The first disciple of Buddha, Ananda wrote down Bbuddha's thoughts and sermons (From first one at Banaras
                to the last one at Kushinagar) after His death. These texts, known as Tripitaka or the Three baskets
                became the main Buddhist scriptures. Later the Mahayanas added the 'Lotus Sutra' and the 'Perfection of
                wisdom', 'Lankavatara' and many others to the Buddhist scriptures. Similarly, the Tantrayanas also
                compiled the holy scriptures of the 'Kanjur'(108 volumes), and the 'Tanjur'(225 volumes). Besides, the
                writings of the 6 Buddhist Councils are also considered as the Buddhist holy scriptures, which consists
                of 400 volumes.
            <p>Today, Buddhism is practiced widely in nations of the far east and few of the south Asian countries,
                whereas it has almost disappeared from India - the country of its origin. It was in the 7th-8th century
                CE that Buddhism began to decline in India, owing to the revival of Hinduism and Bhakti movement, and by
                the time of the Turkish invasion of India in 12th century CE, the wave of Buddhism had stayed calm due
                to the arrival of Islam in India. But, despite these challenges, Buddhism managed to sail through in
                other parts of the world, and still survives in some parts of India, its birthplace.</p>


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