<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <section class="container">
    <h2 class="section-title">Rooms</h2>
    <div class="room-grid">
        <div class="room"><img src="<?php echo $base; ?>/image/room1.jpg">
            <div class="room-body">
                <h3>Deluxe Room</h3>
                <p>Spacious air-conditioned room with modern amenities.</p>
                <div class="price">₹2500 / night</div>
                </p>
            </div>
        </div>
        <div class="room"><img src="<?php echo $base; ?>/image/room2.jpg">
            <div class="room-body">

                <h3>Super Deluxe Room</h3>
                <p>Elegantly designed room with premium furnishings.</p>
                <div class="price">₹3500 / night</div>
            </div>
        </div>
        <div class="room"><img src="<?php echo $base; ?>/image/room3.jpg">
            <div class="room-body">
                <h3>Suite Room</h3>
                <p>Luxurious suite with separate living area.</p>
                <div class="price">₹5000 / night</div>
            </div>
        </div>
    </div>
</section> -->




<!-- ================= Facilities Section ================= -->
<section class="facilities-header" id="facilities">
    <div class="content">
        <h2>Our Rooms & Tariff
        </h2>
        <p>Relax in our thoughtfully designed rooms, where modern luxury meets peaceful elegance in the
            Heart ❤️ of Bodhgaya</p>
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


<section class="rooms-section">

    <div class="container" style="max-width:1200px;margin:auto;text-align:center;position:relative;z-index:2;">

        <!-- <h2 class="rooms-title">Our Luxury Rooms & Tariff</h2>
        <p class="rooms-subtitle">
            Experience elegant comfort at <strong>Hotel Jeevak International, Bodhgaya</strong> —
            where modern amenities meet serene ambiance. Choose from our beautifully designed rooms
            offering warmth, luxury, and peace for every traveler.
        </p> -->


        <div class="rooms-grid">
            <!-- Deluxe Room -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo $base; ?>/image/rooms/room4.jpg" alt="Deluxe Room">
                    <!-- <div class="price-tag">₹2500 <span>per night</span></div> -->
                </div>
                <div class="room-content">
                    <h3>Deluxe Room</h3>
                    <p>Stylish, cozy, and equipped with all modern comforts — perfect for a peaceful retreat near the
                        Mahabodhi Temple.</p>
                    <p class="details">👤 2 Adults &nbsp;&nbsp;&nbsp; 📐 250 sq ft</p>
                    <div class="tags"><span>AC</span><span>WiFi</span><span>TV</span></div>
                </div>
                <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
            </div>

            <!-- Super Deluxe Room -->

            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo $base; ?>/image/room5.jpg" alt="Deluxe Room">
                    <!-- <div class="price-tag">₹2500 <span>per night</span></div> -->
                </div>
                <div class="room-content">
                    <h3>Super Deluxe Room</h3>
                    <p>Refined interiors with elegant décor, premium furnishings, and delightful views for a serene
                        stay.</p>
                    <p class="details">👤 2 Adults + 1 child &nbsp;&nbsp;&nbsp; 📐 300 sq ft</p>
                    <div class="tags"><span>AC</span><span>WiFi</span><span>TV</span></div>
                </div>
                <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a>
                </div>
            </div>


            <!-- Suite Room -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo $base; ?>/image/rooms/room6.jpg" alt="Suite Room">
                    <!-- <div class="price-tag">₹5000 <span>per night</span></div> -->
                </div>
                <div class="room-content">
                    <h3>Suite Room</h3>
                    <p>Spacious and luxurious, featuring a king-size bed and private living area — ideal for comfort and
                        elegance.</p>
                    <p class="details">👤 3 Adults &nbsp;&nbsp;&nbsp; 📐 400 sq ft</p>
                    <div class="tags"><span>AC</span><span>WiFi</span><span>TV</span></div>
                </div>
                <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
            </div>

            <!-- Executive Suite -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo $base; ?>/image/rooms/room8.jpg" alt="Executive Suite">
                    <!-- <div class="price-tag">₹6500 <span>per night</span></div> -->
                </div>
                <div class="room-content">
                    <h3>Executive Suite</h3>
                    <p>Elegant space designed for business and comfort, complete with workspace, minibar, and luxury
                        finishes.</p>
                    <p class="details">👤 2 Adults &nbsp;&nbsp;&nbsp; 📐 450 sq ft</p>
                    <div class="tags"><span>AC</span><span>WiFi</span><span>Mini Bar</span></div>
                </div>
                <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
            </div>

            <!-- Presidential Suite -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo $base; ?>/image/rooms/room1.jpg" alt="Presidential Suite">
                    <!-- <div class="price-tag">₹8500 <span>per night</span></div> -->
                </div>
                <div class="room-content">
                    <h3>Presidential Suite</h3>
                    <p>Unmatched luxury featuring spacious interiors, private balcony, and sophisticated elegance for
                        elite guests.</p>
                    <p class="details">👤 2 Adults &nbsp;&nbsp;&nbsp; 📐 600 sq ft</p>
                    <div class="tags"><span>AC</span><span>WiFi</span><span>Jacuzzi</span></div>
                </div>
                <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
            </div>

            <!-- Family Luxury Room -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo $base; ?>/image/rooms/room7.jpg" alt="Family Luxury Room">
                    <!-- <div class="price-tag">₹7000 <span>per night</span></div> -->
                </div>
                <div class="room-content">
                    <h3>Family Luxury Room</h3>
                    <p>Perfect for families — spacious, warm, and relaxing with multiple beds and all premium amenities.
                    </p>
                    <p class="details">👤 4 Adults &nbsp;&nbsp;&nbsp; 📐 550 sq ft</p>
                    <div class="tags"><span>AC</span><span>WiFi</span><span>Room Service</span></div>
                </div>
                <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
            </div>
        </div>
    </div>

    <style>
    /* === Animated Background === */
    .rooms-section {
        position: relative;
        padding: 100px 0;
        overflow: hidden;
        color: #111;
        /* background: linear-gradient(120deg, #fff4e6, #4f737d82, #e6faffff); */
        background-size: 400% 400%;
        animation: luxuryShine 18s ease infinite;
    }

    @keyframes luxuryShine {
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

    /* === Titles === */
    .rooms-title {
        font-size: 38px;
        font-weight: 800;
        margin-bottom: 12px;
        letter-spacing: 1px;
        color: #222;
    }

    .rooms-subtitle {
        font-size: 18px;
        color: #333;
        max-width: 800px;
        margin: 0 auto 60px auto;
        line-height: 1.7;
    }

    /* === Grid === */
    .rooms-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        position: relative;
        z-index: 2;
    }

    /* === Room Card === */
    .room-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        overflow: hidden;
        position: relative;
    }

    .room-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 35px rgba(245, 124, 0, 0.3);
    }

    /* === Image === */
    .room-image {
        position: relative;
        overflow: hidden;
    }

    .room-image img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform 0.4s ease, filter 0.4s ease;
    }

    .room-card:hover .room-image img {
        transform: scale(1.08);
        filter: brightness(1.08);
    }

    /* === Price Tag === */
    .price-tag {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.9);
        color: #d67a00;
        padding: 8px 14px;
        border-radius: 25px;
        font-weight: 700;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .price-tag span {
        font-size: 13px;
        color: #555;
        font-weight: 500;
    }

    /* === Text Content === */
    .room-content {
        padding: 20px;
        text-align: left;
    }

    .room-content h3 {
        font-size: 20px;
        font-weight: 700;
        color: #111;
        margin-bottom: 10px;
    }

    .room-content p {
        font-size: 15px;
        color: #444;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .room-content .details {
        font-size: 14px;
        color: #666;
    }

    /* === Tags === */
    .tags span {
        background: linear-gradient(135deg, #f57c00, #f9b24b);
        color: #fff;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 13px;
        margin-right: 5px;
        display: inline-block;
    }

    /* === Button === */
    .btn-wrap {
        background: linear-gradient(135deg, #f57c00, #f9a825);
        text-align: center;
        padding: 14px;

    }

    .btn-wrap a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: 0.3s;

    }

    .btn-wrap a:hover {
        opacity: 0.9;
    }

    /* === Responsive === */
    @media (max-width: 768px) {
        .rooms-title {
            font-size: 30px;
        }

        .rooms-subtitle {
            font-size: 16px;
        }
    }
    </style>
</section>

<section class="booking-info-section">
    <div class="booking-container">
        <h2>Room Booking Information</h2>

        <div class="booking-grid">
            <!-- Check-in / Check-out -->
            <div class="info-block">
                <h3>Check-in / Check-out</h3>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Check-in: <strong>12:00 PM</strong></li>
                    <li><i class="fa-solid fa-circle-check"></i> Check-out: <strong>11:00 AM</strong></li>
                    <li><i class="fa-solid fa-circle-check"></i> Early check-in subject to availability</li>
                </ul>
            </div>

            <!-- Policies -->
            <div class="info-block">
                <h3>Policies</h3>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Free cancellation up to 24 hours before check-in</li>
                    <li><i class="fa-solid fa-circle-check"></i> Valid ID proof, Aadhaar Card required at check-in</li>
                    <li><i class="fa-solid fa-circle-check"></i> Extra bed available on request
                        (<strong>₹500/night</strong>)</li>
                </ul>
            </div>
        </div>
    </div>

    <style>
    /* === Section Background === */
    .booking-info-section {
        padding: 80px 20px;
        background: linear-gradient(135deg, #fffaf3 0%, #fff5e1 100%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* === Container === */
    .booking-container {
        max-width: 1100px;
        background: #fffdf9;
        border-radius: 18px;
        padding: 50px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #f5d9a4;
        animation: fadeUp 1.2s ease both;
    }

    /* === Title === */
    .booking-container h2 {
        text-align: center;
        font-size: 32px;
        font-weight: 800;
        color: #111;
        margin-bottom: 50px;
        position: relative;
    }

    .booking-container h2::after {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #f9a825, #f57c00);
        margin: 12px auto 0;
        border-radius: 5px;
    }

    /* === Grid Layout === */
    .booking-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 50px;
    }

    /* === Info Blocks === */
    .info-block h3 {
        color: #d67a00;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .info-block ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .info-block li {
        font-size: 16px;
        color: #333;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-block li i {
        color: #f57c00;
        background: rgba(245, 124, 0, 0.1);
        border-radius: 50%;
        padding: 6px;
        font-size: 16px;
        box-shadow: 0 2px 6px rgba(245, 124, 0, 0.25);
    }

    /* === Hover Glow === */
    .info-block li:hover i {
        transform: scale(1.1);
        background: #f57c00;
        color: #fff;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(245, 124, 0, 0.4);
    }

    /* === Animation === */
    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* === Responsive === */
    @media (max-width: 768px) {
        .booking-container {
            padding: 30px;
        }

        .booking-container h2 {
            font-size: 26px;
        }
    }
    </style>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a2e0e9b6d8.js" crossorigin="anonymous"></script>
</section>

<section class="cta-section">
    <div class="cta-container">
        <h2>Need Help Choosing?</h2>
        <p>Our friendly team is here to help you select the perfect room or suite for a memorable stay at <strong>Hotel
                Jeevak International</strong>.</p>
        <a href="<?php echo $base; ?>/contact.php" class="cta-button">Contact Us</a>
    </div>

    <style>
    /* === CTA Section with Animated Gradient === */
    .cta-section {
        background: linear-gradient(135deg, #e87a00, #f57c00, #f9b24b);
        background-size: 400% 400%;
        animation: gradientMove 15s ease infinite;
        padding: 80px 20px;
        border-radius: 14px;
        text-align: center;
        margin: 60px auto;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    @keyframes gradientMove {
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

    /* === Text === */
    .cta-container h2 {
        font-size: 34px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 14px;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    .cta-container p {
        font-size: 18px;
        color: #fff;
        opacity: 0.95;
        margin-bottom: 30px;
        line-height: 1.6;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    /* === Button === */
    .cta-button {
        display: inline-block;
        background: #fff;
        color: #d67a00;
        font-weight: 600;
        padding: 12px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .cta-button::before {
        content: "";
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: rgba(255, 215, 125, 0.6);
        transform: skewX(-25deg);
        transition: all 0.5s ease;
    }

    .cta-button:hover::before {
        left: 130%;
    }

    .cta-button:hover {
        color: #fff;
        background: linear-gradient(135deg, #f57c00, #f9b24b);
        box-shadow: 0 6px 18px rgba(245, 124, 0, 0.4);
        transform: translateY(-2px);
    }

    /* === Responsive === */
    @media (max-width: 768px) {
        .cta-container h2 {
            font-size: 26px;
        }

        .cta-container p {
            font-size: 16px;
        }
    }
    </style>
</section>




<?php include __DIR__ . '/includes/footer.php'; ?>