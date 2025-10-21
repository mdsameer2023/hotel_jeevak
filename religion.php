<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Buddhist Religion - Hotel Jeevak International</title>
    <meta name="description"
        content="Learn about Buddhism — its origins in Bodhgaya, the teachings of Lord Buddha, and the path to peace and enlightenment.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>/css/styles.css">
    <link rel="icon" type="image/png" href="<?php echo $base ?? ''; ?>/image/favicon.png">




    <!-- ================= The Religion OF  Buddhism Section ================= -->
    <section class="facilities-header" id="facilities">
        <div class="content">
            <h2>The Buddhist Religion </h2>
            <p>The Buddhist Religion A Way of Life Rooted in Peace and Enlightenment
                Discover the Essence of the Buddhist Religion...
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

            <!-- <p>
                The history of Buddhism traces back to the teachings of Lord Buddha after He attained enlightenment in
                528 BCE under the Bodhi tree at Bodh Gaya, India. Ater attaining enlightenment, Lord Buddha spent the
                rest of His life in making others aware of the truth of life. It was after His Mahaparinirvana in 483
                BCE , when the first Buddhist council was convened at Rajagriha in India , when 500 monks assembled
                under the guidance of Mahakashyapa, and the teachings of The Buddha were compiled by His chief disciple,
                Ananda in the form of a holy Pali canon, Tripitaka, which meant the three baskets.
            </p> -->

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Preface

            <p>
                Buddhism is a philosophy of life based on the teachings of Lord Buddha, which subsequently turned into a
                religion. The core of Buddhism lies in the purification of mind and soul by realising the truth and
                getting rid of the worldly desires. The Buddhist philosophy teaches one to develop the qualities of
                awareness, kindness and wisdom through Buddhist practices such as practicing Eightfold Path, Five
                Precepts, Four Noble Truths, meditation and yoga. Basically, it were the principles of Karma in the
                doctrine of Buddhism that made the religion one of the major ones in the world.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Four Noble Truths

            </p>

            <p>
                According to the Buddhist principles or religion, the four noble truths are the practical aspects of
                everyone's life. The four noble truths basically deals with how we are leading the present moment and
                how this moment would determine our future! The first noble truth is suffering, a condition that all
                living beings experience in various forms. The second noble truth states that the cause of suffering is
                craving or selfish desire. However, the third noble truth or Nirvana is a state which transcends all the
                sufferings and the fourth noble truth is the Noble Eightfold Path, the Buddha's teaching on the way to
                attain Nirvana.
            </p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Eightfold Path
            </p>

            <p>
                AThe Eightfold path, as per the Buddhist doctrine, provides a being a practical guideline to ethical and
                mental development by freeing the person from attachments and delusions, and thus, paves way to the
                quest for truth. All the eight noble ways of the Eightfold Path - Right View, Right Intention, Right
                Livelihood, Right Speech, Right Action, right Effort, Right Mindfulness and Right Concentration, combine
                together to stand on the threshold of the noble or transcendent attainments for freedom of a being from
                the worldly desires and leads him to nirvana.
            </p>
            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Five Preceptions
            </p>

            <p>The Buddhist religion mentions the Dhamma for the human beings in the form of moral conducts to make the
                human world bearable or a place to live in with dignity. The five precepts forbids a Buddhist from
                making bad deeds in speech and body and to serve as the basis for further growth in the Dhamma. These
                precepts mentions to refrain from incorrect speech, to refrain from sexual misconduct, to refrain from
                taking something which is not given, to refrain from destroying living creatures and last but not the
                least, to refrain from intoxicating drinks and drugs which lead to carelessness.</p>

            <p style="color:#f57c00; font-size:18px ;font-weight:bold">Meditation

            </p>
            <p>The Buddhist religion emphasises on the practice of meditation, which enables a being to win over the
                'negative' delusions by strengthening the inner 'self' through virtuous and peaceful mind. The
                meditative practices make a being more constructive in nature, so much so that he is content with
                whatever he gets and work for the welfare of the other beings. The basic meditation techniques can be
                practiced by anybody, but if one wants to soak all the drops of spirituality and go beyond basic
                meditation, it becomes important for him to believe in the three jewels - Buddha, Dharma and Sangha.

            <p>Today, all over the world, there are approximately over 360 million followers of Buddhism, who follow
                different forms of Buddhism - Theravada, Mahayana, Tantrayana and Zen. But, all the traditions of The
                Buddhist religion preaches the same values..same teachings - non-violence, truth, love and compassion,
                tolerance of differences, the path of nirvana and the practice of meditation.</p>
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