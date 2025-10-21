<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <?php
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodhgaya – The Spiritual Heart of Hotel Jeevak International</title>
    <meta name="description"
        content="Discover Bodhgaya — the land of enlightenment where Lord Buddha attained Nirvana. Explore sacred temples, monasteries, and heritage guided by Hotel Jeevak International.">
    <link rel="icon" type="image/png" href="<?php echo $base; ?>/image/logo4.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/style.css">
    <style>
    /* ============ Hero Section ============ */
    .bodhgaya-hero {
        background: linear-gradient(120deg, #f57c00, #ff9800);
        color: #fff;
        text-align: center;
        padding: 100px 20px 80px;
        font-family: 'Poppins', sans-serif;
    }

    .bodhgaya-hero h1 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .bodhgaya-hero p {
        font-size: 18px;
        font-weight: 400;
    }
    </style>
</head>





<!-- Hero Section -->
<!-- <section class="bodhgaya-hero">
        <h1>Explore Bodhgaya</h1>
        <p>The Sacred Land of Enlightenment and Peace</p>
    </section> -->



<section class="facilities-header" id="facilities">
    <div class="content">
        <h2>Explore Bodhgaya</h2>
        <p>The Sacred Land of Enlightenment and Peace.</p>
    </div>
</section>

<style>
/* =============== Facilities Header Section =============== */
.facilities-header {
    position: relative;
    padding: 50px 20px;
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

<!-- About Bodhgaya Section -->

<section class="bodhgaya-section">

    <!-- Fixed Sidebar -->

    <?php include __DIR__ . '/includes/sidemenu.php'; ?>


    <!-- Main Content Area -->
    <div class="bodhgaya-content">

        <!-- Centered Image -->
        <div class="bodhgaya-image">
            <img src="<?php echo $base; ?>/image/lordbudha.jpg" alt="Mahabodhi Temple Bodhgaya">
        </div>

        <!-- Text Below Image -->
        <div class="bodhgaya-text">
            <h2>The Heart of Buddhist Spirituality</h2>
            <p>
                <strong>Bodhgaya</strong>, located in the Indian state of Bihar, is one of the most sacred places in
                the world for Buddhists.
                It is the site where Prince Siddhartha attained enlightenment under the Bodhi Tree, becoming
                <strong>Lord Buddha</strong>.
            </p>
            <p>
                The <strong>Mahabodhi Temple Complex</strong>, a UNESCO World Heritage Site, stands as a symbol of
                peace and enlightenment.
                Pilgrims from all over the world visit Bodhgaya to meditate, pray, and find inner tranquility in
                this spiritual center.
            </p>
            <p>
                <strong>Hotel Jeevak International</strong>, situated just 400 meters from the Mahabodhi Temple,
                invites travelers to experience divine serenity,
                cultural richness, and world-class hospitality — your home away from home in the heart of Bodhgaya.
            </p>
        </div>
    </div>

</section>

<style>
/* ================== LAYOUT ================== */
.bodhgaya-section {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    background: #fff;
    padding: 60px 6%;
    gap: 40px;
}

/* Sidebar Fixed */
.bodhgaya-sidebar {
    flex: 0 0 260px;
    position: sticky;
    top: 100px;
    height: fit-content;
    z-index: 5;
}

/* Content Area */
.bodhgaya-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

/* ================== IMAGE ================== */
.bodhgaya-image {
    position: relative;
    width: 100%;
    max-width: 1000px;
    overflow: hidden;
    border-radius: 18px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15);
    margin-bottom: 50px;
    margin-top: 20px;
}

.bodhgaya-image img {
    width: 100%;
    height: 480px;
    object-fit: cover;
    border-radius: 18px;
    transition: transform 1s ease, filter 1s ease;
    filter: brightness(0.95) contrast(1.05);
}

/* Hover: Glow + Zoom */
.bodhgaya-image:hover img {
    transform: scale(1.08);
    filter: brightness(1.05) contrast(1.1) saturate(1.1);
}

.bodhgaya-image::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 18px;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.05));
    pointer-events: none;
}

/* Glowing border animation */
.bodhgaya-image:hover::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 18px;
    box-shadow: 0 0 35px rgba(245, 124, 0, 0.6), 0 0 80px rgba(230, 126, 34, 0.4);
    animation: glowPulse 2s infinite ease-in-out;
}

@keyframes glowPulse {

    0%,
    100% {
        box-shadow: 0 0 25px rgba(245, 124, 0, 0.6), 0 0 60px rgba(230, 126, 34, 0.4);
    }

    50% {
        box-shadow: 0 0 40px rgba(245, 124, 0, 0.8), 0 0 90px rgba(230, 126, 34, 0.6);
    }
}

/* ================== TEXT ================== */
.bodhgaya-text {
    background: #fff;
    /* padding: 40px 35px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    max-width: 800px;
    line-height: 1.8;
    transition: all 0.4s ease; */
}

/* .bodhgaya-text:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(245, 124, 0, 0.25);
} */

.bodhgaya-text h2 {
    color: #f57c00;
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 20px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: left
}

.bodhgaya-text p {
    color: #333;
    font-size: 16px;
    margin-bottom: 18px;
    text-align: justify;
}

.bodhgaya-text strong {
    color: #222;
}

/* ================== RESPONSIVE ================== */
@media (max-width: 992px) {
    .bodhgaya-section {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 50px 8%;
    }

    .bodhgaya-sidebar {
        position: relative;
        width: 100%;
        max-width: 420px;
        margin-bottom: 40px;
    }

    .bodhgaya-content {
        width: 100%;
    }

    .bodhgaya-image img {
        height: 340px;
    }

    .bodhgaya-text {
        padding: 30px 25px;
    }
}

@media (max-width: 600px) {
    .bodhgaya-image img {
        height: 280px;
    }

    .bodhgaya-text h2 {
        font-size: 26px;
    }

    /* .bodhgaya-text p {
        font-size: 15.5px;
    } */
}
</style>

<!-- ================== BODHGAYA HIGHLIGHTS CARDS SECTION ================== -->
<section class="bodhgaya-cards">

    <div class="card">
        <i class="fas fa-tree"></i>
        <h4>The Bodhi Tree</h4>
        <p>Witness the sacred fig tree where Lord Buddha attained enlightenment — a symbol of eternal wisdom.</p>
    </div>

    <div class="card">
        <i class="fas fa-landmark"></i>
        <h4>Mahabodhi Temple</h4>
        <p>A UNESCO World Heritage Site known for its spiritual aura and remarkable ancient architecture.</p>
    </div>

    <div class="card">
        <i class="fas fa-praying-hands"></i>
        <h4>Monasteries</h4>
        <p>Explore international monasteries built by Buddhist nations reflecting their own architectural style.</p>
    </div>

    <div class="card">
        <i class="fas fa-bus"></i>
        <h4>How to Reach</h4>
        <p>Easily accessible via Gaya Railway Station (15 km) and Gaya International Airport (10 km).</p>
    </div>

</section>

<style>
/* ================== BODHGAYA HIGHLIGHTS CARDS ================== */
.bodhgaya-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 40px;
    background: linear-gradient(120deg, #fff4e6, #fff);
    padding: 80px 10%;
    justify-content: center;
    align-items: stretch;
    text-align: center;
}

/* Individual Card */
.card {
    background: #ffffff;
    border-radius: 18px;
    padding: 30px 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    border-top: 4px solid transparent;
    cursor: default;
}

/* Hover Effect */
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 14px 35px rgba(245, 124, 0, 0.25);
    border-top: 4px solid #f57c00;
    background: #fffaf5;
}

/* Icons */
.card i {
    font-size: 40px;
    color: #f57c00;
    margin-bottom: 15px;
    transition: transform 0.5s ease, color 0.4s ease;
}

/* Icon Animation */
.card:hover i {
    transform: rotate(10deg) scale(1.1);
    color: #ff9800;
}

/* Headings */
.card h4 {
    font-size: 20px;
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
}

/* Text */
.card p {
    color: #555;
    font-size: 15.5px;
    line-height: 1.7;
}

/* Subtle Glow Animation */
.card:hover {
    animation: glowCard 1.8s ease-in-out infinite alternate;
}

@keyframes glowCard {
    0% {
        box-shadow: 0 4px 15px rgba(245, 124, 0, 0.2);
    }

    100% {
        box-shadow: 0 8px 25px rgba(245, 124, 0, 0.35);
    }
}

/* ================== RESPONSIVE ================== */
@media (max-width: 768px) {
    .bodhgaya-cards {
        padding: 60px 8%;
        gap: 25px;
    }

    .card {
        padding: 25px 18px;
    }

    .card i {
        font-size: 34px;
    }

    .card h4 {
        font-size: 18px;
    }

    .card p {
        font-size: 14.5px;
    }
}
</style>





<?php
// Include footer (full-width footer). Adjust path if needed.
include __DIR__ . '/includes/footer.php';
?>