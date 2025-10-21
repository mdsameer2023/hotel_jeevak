<?php
// about.php
// Include header (nav + head tags + css links). Adjust include path if needed.
include __DIR__ . '/includes/header.php';
?>



<!-- ===== PAGE BANNER (full-width orange) ===== -->
<!-- <section class="page-banner">
    <div class="banner-content">
        <h1>About Hotel Jeevak</h1>
        <p>The Perfect Blend of Comfort, Culture, and Spiritual Harmony</p>
    </div>
</section> -->
<!-- ================= About Section ================= -->
<section class="facilities-header" id="facilities">
    <div class="content">
        <h2>About Hotel Jeevak</h2>
        <p>The Perfect Blend of Comfort, Culture, and Spiritual Harmony...</p>
    </div>
</section>



<style>
/* =============== About Header Section =============== */
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


<!-- ===== INTRO: Welcome + Image ===== -->
<!-- ================= About Intro Section ================= -->

<section class="bodhgaya-section">

    <!-- Fixed Sidebar -->

    <?php include __DIR__ . '/includes/sidemenu.php'; ?>


    <!-- Main Content Area -->
    <div class="bodhgaya-content">

        <!-- Centered Image -->
        <div class="bodhgaya-images">
            <img src="<?php echo $base; ?>/image/hotel_jeevak3.jpg" alt="Hotel Jeevak International, Bodhgaya">
        </div>

        <!-- Text Below Image -->
        <div class="bodhgaya-text">
            <h2>Welcome to Hotel Jeevak International</h2>
            <p>
                Stay just steps away from the sacred <strong>Mahabodhi Temple</strong> at
                Hotel Jeevak International,Bodhgaya a
                peaceful haven where modern luxury meets spiritual serenity.
                Experience elegant accommodation, warm hospitality, and the tranquil essence of enlightenment in the
                <strong>heart of Bodhgaya.</strong>


            </p>
            <p>
                Each room <strong>features private terraces</strong>, premium amenities, and 24-hour hot & cold water.
                Enjoy <strong>high-speed

                    Wi-Fi</strong>, satellite TV, and all the comforts of home in a tranquil environment.

            </p>
            <p>

                At Jeevak, <strong>we believe hospitality is sacred</strong> — our team ensures every guest
                <strong>feels like family</strong>, surrounded
                by warmth, care, and grace.
            </p>
        </div>
    </div>

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
    .bodhgaya-images {
        position: relative;
        width: 1000px;
        max-width: 1000px;
        overflow: hidden;
        border-radius: 18px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15);
        margin-bottom: 50px;
        margin-top: 18px;
    }

    .bodhgaya-images img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        border-radius: 18px;
        transition: transform 1s ease, filter 1s ease;
        filter: brightness(0.95) contrast(1.05);
    }

    /* Hover: Glow + Zoom */
    .bodhgaya-images:hover img {
        transform: scale(1.08);
        filter: brightness(1.05) contrast(1.1) saturate(1.1);
    }

    .bodhgaya-images::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 18px;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.05));
        pointer-events: none;
    }

    /* Glowing border animation */
    .bodhgaya-images:hover::before {
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
        text-align: left;
    }

    .bodhgaya-text p {
        color: #222;
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

        .bodhgaya-images img {
            height: 340px;
        }

        /* .bodhgaya-text {
            padding: 30px 25px;
        }
    }

    @media (max-width: 600px) {
        .bodhgaya-images img {
            height: 280px;
        }

        .bodhgaya-text h2 {
            font-size: 26px;
        }

        .bodhgaya-text p {
            font-size: 15.5px;
        }
    } */
    </style>


</section>
<!-- ===== ABOUT BODHGAYA (large panel) ===== -->

<section class="about-bodhgaya">
    <div class="container">
        <div class="bodhgaya-grid">
            <div class="bodhgaya-text" style="background:none; box-shadow:none; border:none; padding:0;">
                <h2>About Bodhgaya</h2>
                <p>
                    Bodhgaya stands as the spiritual <strong>heart of Buddhism</strong> and one of the most sacred
                    destinations in the
                    world. It was here, beneath the serene shade of the sacred Bodhi Tree, that Prince Siddhartha
                    attained supreme enlightenment and became the Buddha, more than <strong>2,500 years ago</strong> — a
                    moment that
                    forever transformed human history.
                </p>

                <p>
                    At the center of this divine land rises the Mahabodhi Temple, a masterpiece of ancient architecture
                    and a UNESCO World Heritage Site, symbolizing peace, wisdom, and enlightenment. Pilgrims, seekers,
                    and travelers from every corner of the world visit Bodhgaya to meditate, offer prayers, and
                    experience an atmosphere of deep spiritual serenity.
                </p>

                <p>
                    The town hosts numerous international monasteries built in the styles of their respective countries,
                    creating a truly global Buddhist cultural experience.
                </p>
            </div>

            <div class="bodhgaya-image">
                <div style="position:relative;display:inline-block;width:100%;">
                    <img src="<?php echo $base; ?>/image/hotel_jeevaknight.jpg" alt="Mahabodhi Temple"
                        class="bodhgaya-hover-image"
                        style="object-fit:cover; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,0.12); width:100%; max-width:520px; height:390px;" />
                    <div
                        style="position:absolute;top:18px;right:18px;background:rgba(255,255,255,0.95);border-radius:12px;padding:8px 16px;box-shadow:0 2px 8px rgba(0,0,0,0.08);display:flex;align-items:center;gap:4px;font-size:18px;font-weight:600;color:#f57c00;">
                        <span>3.8</span>
                        <span style="color:#f57c00;font-size:20px;">★</span>
                        <span style="color:#f57c00;font-size:20px;">★</span>
                        <span style="color:#f57c00;font-size:20px;">★</span>
                        <span style="color:#f57c00;font-size:20px;">★</span>
                    </div>
                </div>

                <style>
                .bodhgaya-hover-image {
                    transition: transform 0.35s cubic-bezier(.25, .8, .25, 1), box-shadow 0.35s, filter 0.35s;
                }

                .bodhgaya-hover-image:hover {
                    transform: scale(1.06) rotate(-1deg);
                    box-shadow: 0 18px 48px rgba(245, 124, 0, 0.18);
                    filter: brightness(1.07) saturate(1.15);
                }

                .bodhgaya-grid {
                    display: flex;
                    flex-wrap: wrap;
                    align-items: center;
                    gap: 40px;
                }

                .bodhgaya-text {
                    flex: 1 1 50%;
                }

                .bodhgaya-image {
                    flex: 1 1 50%;
                    text-align: center;
                }

                @media (max-width: 768px) {
                    .bodhgaya-grid {
                        flex-direction: column;
                        text-align: center;
                    }

                    .bodhgaya-text,
                    .bodhgaya-image {
                        flex: 1 1 100%;
                    }
                }
                </style>
            </div>
        </div>
    </div>
</section>



<!-- ===== JEEVAK TOUR & TRAVEL (highlight box) ===== -->
<section class="tour-travel" style=" );
           padding:40px 0;">
    <div class="container">
        <h2 class="section-title tour-title-hover" style="color:#111;font-weight:bold;font-size:30px">Jeevak Tour &
            Travel</h2>
        <style>
        .tour-title-hover {
            transition: color 0.3s, text-shadow 0.3s;
            cursor: pointer;
        }

        .tour-title-hover:hover {
            color: #ea6600;
            text-shadow: 0 2px 12px rgba(245, 124, 0, 0.18);
        }

        .travel-thumb {
            overflow: hidden;
            position: relative;
        }

        .travel-thumb img {


            object-fit: cover;
            transition: transform 0.6s ease, filter 0.4s ease;
        }

        /* Hover effect */
        .travel-thumb:hover img {
            transform: scale(1.08);
            filter: brightness(1.1) saturate(1.3);
        }
        </style>


        <div class="travel-box">
            <div class="travel-thumb">
                <img src="<?php echo $base; ?>/image/lordbudha.jpg" alt="Bodhgaya Tours" width="1000" height="400">
            </div>

            <div class="travel-info">
                <h2>Your Trusted Travel Partner in Bodhgaya</h2>
                <p>
                    Discover the sacred charm of <strong>Bodhgaya</strong> with <strong>Hotel Jeevak
                        International</strong> — your
                    trusted travel and hospitality partner. We specialize in creating meaningful journeys that combine
                    spirituality,
                    comfort, and cultural discovery.
                </p>
                <p>
                    Whether you seek quiet meditation, guided heritage tours, or seamless transportation, we offer
                    personalized services
                    designed to make your stay truly effortless. Our professional travel experts curate tours across the
                    <strong>Buddhist
                        Circuit</strong> — including <strong>Nalanda</strong>, <strong>Rajgir</strong>, and
                    <strong>Varanasi</strong> —
                    blending spiritual learning with local traditions and comfort.
                </p>
                <ul class="travel-list">
                    <li>Guided tours to Mahabodhi Temple and sacred Bodhgaya sites</li>
                    <li>Buddhist circuit trips — Nalanda, Rajgir & Varanasi</li>
                    <li>Visits to monasteries, meditation centers & cultural sites</li>
                    <li>Private car rentals, sightseeing packages & local guides</li>
                    <li>Comfortable airport and railway transfers</li>
                    <li>Custom itineraries for pilgrims, families & solo travelers</li>
                </ul>
                <!-- <p>
                    At <strong>Hotel Jeevak International</strong>, we make every journey special — combining
                    hospitality, heritage, and
                    heartfelt service. Explore the spiritual soul of India with us, and create memories that last a
                    lifetime.
                </p> -->

            </div>
        </div>
    </div>
</section>

<!-- ===== NEARBY ATTRACTIONS (cards) ===== -->
<section class="nearby-attractions" style=" background: linear-gradient(120deg, #e2dfdcfb, #f57c00, #e6ded7ff);">
    <div class="container">
        <h2 class="section-title" style="color:#fff">Nearby Attractions</h2>
        <div class="attractions-grid">
            <div class="attraction-card">
                <h5>Mahabodhi Temple</h5>
                <p>UNESCO World Heritage Site — where Buddha attained enlightenment</p>
                <span class="distance">0.4 km</span>
            </div>

            <div class="attraction-card">
                <h5>Bodhi Tree</h5>
                <p>The sacred descendant of the original Bodhi Tree</p>
                <span class="distance">0.5 km</span>
            </div>

            <div class="attraction-card">
                <h5>Thai Monastery</h5>
                <p>Thai-style Buddhist monastery</p>
                <span class="distance">0.8 km</span>
            </div>

            <div class="attraction-card">
                <h5>Sujata Temple</h5>
                <p>Temple dedicated to Sujata who offered milk-rice to the Buddha</p>
                <span class="distance">1.5km</span>
            </div>

            <div class="attraction-card">
                <h5>Nalanda University Ruins</h5>
                <p>Ancient Buddhist university ruins</p>
                <span class="distance">1 km</span>
            </div>

            <div class="attraction-card">
                <h5>Rajgir</h5>
                <p>Historic town with Buddhist significance</p>
                <span class="distance">2 km</span>
            </div>

            <div class="attraction-card">
                <h5>Great Buddha Statue</h5>
                <p>A magnificent 80-foot tall statue symbolizing peace and enlightenment</p>
                <span class="distance">80 km</span>
            </div>

            <div class="attraction-card">
                <h5>Japanese Temple</h5>
                <p>Beautiful temple featuring traditional Japanese architecture and serenity</p>
                <span class="distance">110 km</span>
            </div>
        </div>
    </div>

    <!-- Paste this CSS in your main stylesheet (or inside <style> in the page head) -->
    <style>
    /* Grid: 3 columns desktop, 2 tablet, 1 mobile */
    .nearby-attractions .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .section-title {
        font-family: "Poppins", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        font-weight: 700;
        font-size: 28px;
        color: #111;
        margin-bottom: 18px;
        text-align: left;
    }

    /* Grid layout */
    .attractions-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    /* Card base */
    .attraction-card {
        position: relative;
        padding: 22px;
        border-radius: 16px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.94), rgba(250, 250, 250, 0.86));
        box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
        border: 1px solid rgba(20, 20, 20, 0.04);
        transition: transform .36s cubic-bezier(.2, .9, .3, 1), box-shadow .36s, background .36s;
        overflow: hidden;
        min-height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Accent stripe (left) */
    .attraction-card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 6px;
        border-top-left-radius: 16px;
        border-bottom-left-radius: 16px;
        background: linear-gradient(180deg, #ffb74d, #ff7043);
        /* warm accent */
        transform: translateX(-6px);
        transition: transform .36s;
    }

    /* Hover effect: lift, scale, stronger shadow, accent grows */
    .attraction-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 20px 50px rgba(16, 24, 40, 0.14);
    }

    .attraction-card:hover::before {
        transform: translateX(0);
        width: 8px;
    }

    /* Text styling */
    .attraction-card h5 {
        margin: 0 0 8px 0;
        font-size: 18px;
        font-weight: 700;
        color: #0f1724;
        letter-spacing: -0.2px;
    }

    .attraction-card p {
        margin: 0;
        font-size: 14px;
        color: #475569;
        line-height: 1.45;
        opacity: 0.95;
    }

    /* Distance badge top-right */
    .attraction-card .distance {
        position: absolute;
        top: 12px;
        right: 12px;
        background: rgba(15, 23, 42, 0.06);
        border-radius: 999px;
        padding: 6px 10px;
        font-size: 13px;
        color: #0f1724;
        font-weight: 600;
        backdrop-filter: blur(4px);
        border: 1px solid rgba(15, 23, 42, 0.04);
    }

    /* Small decorative subtle shine on hover */
    .attraction-card::after {
        content: "";
        position: absolute;
        left: -40%;
        top: -60%;
        width: 100%;
        height: 200%;
        background: radial-gradient(closest-side, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0));
        transform: rotate(-18deg) translateX(-10%);
        transition: transform .7s ease, opacity .5s;
        opacity: 0;
        pointer-events: none;
    }

    .attraction-card:hover::after {
        transform: rotate(-18deg) translateX(20%);
        opacity: 1;
    }

    /* Responsive breakpoints */
    @media (max-width: 1000px) {
        .attractions-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-title {
            text-align: center;
        }

        .nearby-attractions .container {
            padding: 30px 18px;
        }
    }

    @media (max-width: 640px) {
        .attractions-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .attraction-card {
            padding: 18px;
            border-radius: 12px;
            min-height: 100px;
        }

        .attraction-card .distance {
            top: 10px;
            right: 10px;
            padding: 5px 8px;
            font-size: 12px;
        }

        .section-title {
            font-size: 22px;
        }
    }
    </style>



</section>

<style>
/* ---------------- Page Banner ---------------- */
.page-banner {
    width: 100%;
    background: linear-gradient(90deg, #d86a00 0%, #ea6600 100%);
    color: #fff;
    padding: 80px 0;
    text-align: center;
}

.page-banner .banner-content h1 {
    font-size: 42px;
    margin: 0 0 10px;
    font-weight: 700;
}

.page-banner .banner-content p {
    font-size: 18px;
    opacity: 0.95;
}

/* ---------------- Containers ---------------- */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* ---------------- Intro Grid ---------------- */
.intro-grid {
    display: flex;
    gap: 40px;
    align-items: center;
    flex-wrap: wrap;
    padding: 40px 0;
}

.intro-text {
    flex: 1;
    min-width: 300px;
}

.intro-text h2 {
    font-size: 26px;
    color: #0f1724;
    margin-bottom: 12px;
}

.intro-text .lead {
    font-weight: 600;
    color: #333;
    margin-bottom: 12px;
}

.intro-image {
    flex: 1;
    min-width: 300px;
    text-align: right;
}

.intro-image img {
    width: 100%;
    max-width: 520px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

/* ---------------- Why Choose ---------------- */
.why-choose {
    padding: 40px 0 10px;
}

.section-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 22px;
    color: #111;
    font-weight: 700;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 18px;
}

.feature-card {
    background: #fff;
    border: 1px solid #f0e9df;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.03);
}

.feature-icon img {
    width: 56px;
    height: 56px;
    object-fit: contain;
    margin-bottom: 12px;
}

.feature-card h4 {
    margin: 8px 0;
    font-size: 16px;
    color: #333;
}

.feature-card p {
    color: #666;
    font-size: 14px;
}

/* ---------------- Bodhgaya Large Panel ---------------- */
.about-bodhgaya {
    background: #fff7e9;
    border-radius: 10px;
    padding: 30px;
    margin: 30px 0;
    border: 1px solid #f2e9da;
}

.bodhgaya-grid {
    display: flex;
    gap: 30px;
    align-items: center;
    flex-wrap: wrap;
}

.bodhgaya-text {
    flex: 1;
    min-width: 300px;
    padding: 20px;
}

.bodhgaya-text h3 {
    font-size: 20px;
    color: #0f1724;
    margin-bottom: 12px;
}

.bodhgaya-text p {
    color: #444;
    line-height: 1.7;
    margin-bottom: 10px;
}

.bodhgaya-image {
    flex: 1;
    min-width: 300px;
    text-align: right;
}

.bodhgaya-image img {
    width: 100%;
    max-width: 520px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

/* ---------------- Tour & Travel box ---------------- */
.tour-travel {
    padding: 30px 0;
}

.travel-box {
    display: flex;
    gap: 24px;
    background: #fff;
    border: 1px solid #f1e6d6;
    border-radius: 10px;
    padding: 20px;
    align-items: center;
}

.travel-thumb img {
    width: 340px;
    border-radius: 8px;
    object-fit: cover;
}

.travel-info {
    flex: 1;
}

.travel-info h4 {
    margin-top: 0;
    color: #0f1724;
}

.travel-list {
    margin: 12px 0 0;
    padding-left: 20px;
    color: #444;
}

.travel-list li {
    margin-bottom: 8px;
}

/* ---------------- Nearby attractions cards ---------------- */
.nearby-attractions {
    padding: 40px 0;
}

.attractions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
}

.attraction-card {
    background: #fff;
    border: 1px solid #f2e9da;
    border-radius: 8px;
    padding: 16px;
    position: relative;
    min-height: 90px;
}

.attraction-card h5 {
    margin: 0 0 6px;
    font-size: 15px;
    color: #0f1724;
}

.attraction-card p {
    margin: 0;
    color: #666;
    font-size: 14px;
}

.attraction-card .distance {
    position: absolute;
    top: 14px;
    right: 14px;
    color: #d86a00;
    font-weight: 700;
    font-size: 13px;
}

/* ---------------- Responsive ---------------- */
@media (max-width: 900px) {

    .intro-image,
    .bodhgaya-image,
    .travel-thumb img {
        text-align: center;
    }

    .intro-grid,
    .bodhgaya-grid,
    .travel-box {
        flex-direction: column;
        text-align: center;
    }

    .intro-image img,
    .bodhgaya-image img,
    .travel-thumb img {
        max-width: 100%;
    }
}

/* small polish so CTA/footer spacing matches your site */
.section-title {
    margin-top: 6px;
    margin-bottom: 18px;
}
</style>

<?php
// Include footer (full-width footer). Adjust path if needed.
include __DIR__ . '/includes/footer.php';
?>