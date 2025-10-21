<?php include __DIR__ . '/includes/header.php'; ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<title>About Hotel Jeevak International | Luxury Stay Near Mahabodhi Temple</title>
<meta name="description"
    content="Discover Hotel Jeevak International, a serene luxury hotel near the Mahabodhi Temple in Bodhgaya. Experience comfort, spirituality, and world-class hospitality.">


<section class="hero">
    <!-- Hero Image Slider -->
    <div class="hero-slider" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;overflow:hidden;">
        <?php
        $sliderImages = [
            $base . '/image/hotel_jeevak3.jpg',
             $base . '/image/hall_image.jpg',
            $base . '/image/info_image.jpg',
            $base . '/image/room4.jpg',
             $base . '/image/room5.jpg',
            
        ];
        foreach ($sliderImages as $idx => $img) {
            echo '<div class="hero-slide" style="background-image:url(\'' . $img . '\');'
                . 'position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;'
                . 'background-position:center;opacity:' . ($idx === 0 ? '1' : '0') . ';transition:opacity 1s;"></div>';
        }
        ?>
    </div>
    <script>
    let slides = document.querySelectorAll('.hero-slide');
    let current = 0;
    setInterval(() => {
        slides[current].style.opacity = 0;
        current = (current + 1) % slides.length;
        slides[current].style.opacity = 1;
    }, 3500);
    </script>

    <div class="hero-content">
        <!-- <div class="badge" style="position:absolute; top:-50px; left:5px;">
            📍Near Mahabodhi Temple, Bodhgaya
        </div> -->
        <h1>Welcome To</h1>
        <h1 class="typewriter"><span id="typewriter"></span></h1>

        <style>
        h1 {
            /* text-align: center; */
            font-family: 'Poppins', sans-serif;
            margin: 10px 0;
        }

        .typewriter {
            color: #f57c00;
            font-size: 2.6em;
            font-weight: 800;
            display: inline-block;
            border-right: 3px solid #f57c00;
            white-space: nowrap;
            overflow: hidden;
            animation: blink-caret 0.75s step-end infinite;
            transition: opacity 0.3s ease;
        }

        /* blinking caret animation */
        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: #f57c00;
            }
        }
        </style>

        <script>
        const textElement = document.getElementById("typewriter");
        const text = "Hotel Jeevak";
        let index = 0;
        let isDeleting = false;

        function typeWriter() {
            if (!isDeleting && index <= text.length) {
                textElement.style.opacity = 1;
                textElement.textContent = text.substring(0, index++);
            } else if (isDeleting && index >= 0) {
                textElement.style.opacity = 0.4; // fade while deleting
                textElement.textContent = text.substring(0, index--);
            }

            // Pause after full typing or complete deletion
            if (index === text.length) {
                setTimeout(() => isDeleting = true, 1000);
            } else if (isDeleting && index === 0) {
                isDeleting = false;
                textElement.style.opacity = 1;
            }

            const speed = isDeleting ? 120 : 150;
            setTimeout(typeWriter, speed);
        }

        typeWriter();
        </script>


        <h2>Heart Of Bodhgaya</h2>
        <p>Discover tranquility, comfort, and spiritual bliss at Hotel Jeevak. Begin your memorable journey in Heart Of
            Bodhgaya
            with us.</p>
        <div class="actions">
            <a class="primary" href="<?php echo $base; ?>/booking.php">Book Your Stay</a>
            <a class="ghost" href="<?php echo $base; ?>/rooms.php">Explore Rooms</a>
        </div>
    </div>
    <!-- Scroll Mouse Icon -->
    <div class="scroll-down">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>

    <!-- Smooth Scroll Script -->
    <script>
    document.querySelector('.scroll-down').addEventListener('click', function() {
        window.scrollTo({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    });
    </script>

    <style>
    /* Scroll container */
    .scroll-down {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        cursor: pointer;
        animation: floatUpDown 2s ease-in-out infinite;
        z-index: 10;
    }

    /* Mouse shape */
    .mouse {
        width: 36px;
        height: 60px;
        border: 4px solid #fff;
        shadow-box: 0 0 12px rgba(0, 0, 0, 0.2);
        border-radius: 25px;
        position: relative;
        margin: 0 auto;
        box-shadow: 0 0 12px rgba(245, 124, 0, 0.4);
    }

    /* Scroll wheel */
    .wheel {
        width: 8px;
        height: 15px;
        background: #fff;
        border-radius: 50%;
        position: absolute;
        top: 12px;
        left: 50%;
        transform: translateX(-50%);
        animation: wheelMove 2s infinite;
    }

    /* Wheel move animation */
    @keyframes wheelMove {
        0% {
            top: 12px;
            opacity: 1;
        }

        50% {
            top: 30px;
            opacity: 0.3;
        }

        100% {
            top: 12px;
            opacity: 1;
        }
    }

    /* Smooth up–down float */
    @keyframes floatUpDown {

        0%,
        100% {
            transform: translate(-50%, 0);
        }

        50% {
            transform: translate(-50%, -10px);
        }
    }

    /* Optional fade in effect */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translate(-50%, 20px);
        }

        to {
            opacity: 1;
            transform: translate(-50%, 0);
        }
    }
    </style>


</section>

<!-- Info Bar Section -->
<section class="info-bar"
    style="background:#fff7e8;padding:-3px 0px;border-top:1px solid #fddfb0;border-bottom:1px solid #fddfb0;">
    <div class="container" style="display:flex;flex-wrap:wrap;justify-content:center;gap:150px;text-align:center;">

        <div class="info-item" style="display:flex;align-items:center;gap:8px;font-size:16px;color:#111;">
            <span style="color:#f57c00;font-size:20px;">📍</span>
            <span>0.4 km from Mahabodhi Temple</span>
        </div>

        <div class="info-item" style="display:flex;align-items:center;gap:8px;font-size:16px;color:#111;">
            <span style="color:#f57c00;font-size:20px;">🛜</span>
            <span>Free High-Speed WiFi</span>
        </div>

        <div class="info-item" style="display:flex;align-items:center;gap:8px;font-size:16px;color:#111;">
            <span style="color:#f57c00;font-size:20px;">☕</span>
            <span>Sakya Restaurant</span>
        </div>

        <div class="info-item" style="display:flex;align-items:center;gap:8px;font-size:16px;color:#111;">
            <span style="color:#f57c00;font-size:20px;">🚗</span>
            <span>Free Parking</span>
        </div>

    </div>

</section>


<!-- About Section -->
<!-- ================= About Section ================= -->
<section class="about-section" style="position:relative;overflow:hidden;padding:100px 0;background:#fff8ec;">

    <!-- Parallax Background -->
    <!-- <div class="about-bg" style="position:absolute;top:0;left:0;width:100%;height:100%;
               background:url('<?php echo $base; ?>/image/hotel_jeevak4.jpg') center/cover fixed no-repeat;
               z-index:0;transform:translateZ(0);transition:filter 1s ease;">
    </div> -->

    <!-- Soft Overlay -->
    <div class="about-overlay" style="position:absolute;top:0;left:0;width:100%;height:100%;
               background:rgba(255,255,255,0.7);backdrop-filter:blur(2px);
               z-index:1;transition:background 0.8s ease, backdrop-filter 0.8s ease;">
    </div>

    <!-- Content -->
    <div class="container" style="position:relative;z-index:2;max-width:1200px;margin:auto;
               display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:40px;">

        <!-- Left Content -->
        <div class="about-text" data-aos="fade-right" data-aos-duration="1000" style="flex:1;min-width:320px;">
            <h2 style="font-size:34px;font-weight:800;margin-bottom:20px;color:#111;">
                Your Sanctuary of Comfort in <span style="color:#f57c00;">Bodhgaya</span>
            </h2>
            <p style="font-size:16px;color:#111;line-height:1.7;margin-bottom:15px;font-weight:bold">
                Hotel Jeevak International invites you to experience an oasis of calm and elegance,
                just <strong>0.4 km from the revered Mahabodhi Temple</strong> — the spiritual heart of
                Bodhgaya. Whether you seek tranquility, devotion, or a restful getaway, our hotel
                provides the perfect retreat where comfort meets serenity.
            </p>
            <p style="font-size:16px;color:#111;line-height:1.7;margin-bottom:30px; font-weight:bold">
                Each of our spacious rooms has been tastefully designed to blend modern luxury with
                peaceful ambiance. Enjoy your private terrace, rejuvenate in well-appointed bathrooms
                with <strong>24-hour hot and cold water</strong>, and stay connected through satellite
                television and direct-dial facilities — every detail is crafted to ensure that your
                stay is both enriching and effortlessly relaxing.
            </p>
            <a href="<?php echo $base; ?>/about.php" style="display:inline-block;background:#0f1724;color:#fff;padding:12px 22px;
                border-radius:8px;text-decoration:none;font-weight:600;transition:all 0.3s;">
                Learn More About Us
            </a>
        </div>

        <!-- Right Image -->
        <div class="about-image" data-aos="fade-left" data-aos-duration="1000"
            style="flex:1;min-width:320px;text-align:center;">
            <div style="position:relative;display:inline-block;width:100%;height:500px;max-width:1200px;">
                <img src="<?php echo $base; ?>/image/hotel_jeevak3.jpg" alt="Mahabodhi Temple" style="width:100%;height:500px;border-radius:20px;
                           box-shadow:0 8px 25px rgba(0,0,0,0.1);
                           transition:transform 0.5s, box-shadow 0.5s;"
                    onmouseover="this.style.transform='scale(1.08)';this.style.boxShadow='0 16px 45px rgba(0,0,0,0.2)';"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';">

                <!-- Rating Badge -->
                <div style="position:absolute;top:18px;right:18px;background:rgba(255,255,255,0.95);
                           border-radius:12px;padding:8px 16px;box-shadow:0 2px 8px rgba(0,0,0,0.08);
                           display:flex;align-items:center;gap:4px;font-size:18px;font-weight:600;color:#f57c00;">
                    <span>3.6</span>
                    <span style="color:#f57c00;font-size:20px;">★</span>
                    <span style="color:#f57c00;font-size:20px;">★</span>
                    <span style="color:#f57c00;font-size:20px;">★</span>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS Animations -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        once: true,
        offset: 100,
    });

    // Scroll-triggered sunrise fade + parallax
    window.addEventListener('scroll', () => {
        const section = document.querySelector('.about-section');
        const bg = document.querySelector('.about-bg');
        const overlay = document.querySelector('.about-overlay');
        const rect = section.getBoundingClientRect();

        if (rect.top < window.innerHeight && rect.bottom > 0) {
            const progress = Math.min(1, Math.max(0, 1 - rect.top / window.innerHeight));

            // Sunrise brightness
            const brightness = 0.6 + progress * 0.5;
            bg.style.filter = `brightness(${brightness})`;

            // Overlay fade lighter
            const overlayAlpha = 0.7 - progress * 0.25;
            overlay.style.background = `rgba(255,255,255,${overlayAlpha})`;

            // Parallax shift
            bg.style.transform = `translateY(${progress * 50}px)`;
        }
    });
    </script>

    <!-- Section Styles -->
    <style>
    .about-section a:hover {
        background: #f57c00;
        box-shadow: 0 4px 14px rgba(245, 124, 0, 0.4);
        transform: translateY(-2px);
    }

    /* Smooth parallax feel */
    @media (prefers-reduced-motion: no-preference) {
        .about-bg {
            background-attachment: fixed;
        }
    }

    /* Responsive Layout */
    @media (max-width: 992px) {
        .about-section .container {
            flex-direction: column;
            text-align: center;
        }

        .about-text {
            order: 2;
        }

        .about-image {
            order: 1;
        }
    }
    </style>
</section>

<!-- Rooms Start Section (with clickable arrows + autoplay) -->
<!-- Our Rooms Section -->
<section class="rooms-section"
    style="padding:80px 0;background:#fff;  background: linear-gradient(120deg, #fff4e6, #fc7e71fb, #e6faffff);">
    <div class="container" style="max-width:1200px;margin:auto;text-align:center;">
        <h2 style="font-size:36px;font-weight:800;color:#111;margin-bottom:10px;">Our Rooms</h2>
        <p style="font-size:18px;color:#444;margin-bottom:30px;">
            Choose from our range of comfortable and well-appointed rooms, each designed
            to provide you with a peaceful retreat.
        </p>

        <div class="rooms-wrap" style="position:relative;">

            <!-- Left / Right nav -->
            <button class="nav-btn prev" aria-label="Previous room">‹</button>
            <button class="nav-btn next" aria-label="Next room">›</button>

            <!-- Scrollable slider container -->
            <div class="rooms-slider" tabindex="0" aria-roledescription="carousel">
                <div class="rooms-track">

                    <!-- Repeat room-card blocks (same as you already have) -->
                    <div class="room-card">
                        <div class="img-box">
                            <img src="<?php echo $base; ?>/image/room4.jpg" alt="Deluxe Room">
                            <!-- <div class="price-tag">₹2500 <span>per night</span></div> -->
                        </div>
                        <div class="content">
                            <h3>Deluxe Room</h3>
                            <p>Spacious air-conditioned room with modern amenities, attached bath, satellite TV, and
                                telephone.</p>
                            <p>👤 2 Adults &nbsp;&nbsp;&nbsp; 📐 250 sq ft</p>
                            <div><span class="tag">AC</span><span class="tag">WiFi</span><span class="tag">TV</span>
                            </div>
                        </div>
                        <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
                    </div>

                    <!-- Super Deluxe -->
                    <div class="room-card">
                        <div class="img-box">
                            <img src="<?php echo $base; ?>/image/rooms/room1.jpg" alt="Super Deluxe Room">
                            <!-- <div class="price-tag">₹3500 <span>per night</span></div> -->
                        </div>
                        <div class="content">
                            <h3>Super Deluxe Room</h3>
                            <p>Elegantly designed room with premium furnishings, modern bathroom facilities, and
                                beautiful views.</p>
                            <p>👤 2 Adults + 1 Child &nbsp;&nbsp;&nbsp; 📐 300 sq ft</p>
                            <div><span class="tag">AC</span><span class="tag">WiFi</span><span class="tag">TV</span>
                            </div>
                        </div>
                        <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
                    </div>

                    <!-- Suite -->
                    <div class="room-card">
                        <div class="img-box">
                            <img src="<?php echo $base; ?>/image/rooms/room6.jpg" alt="Suite Room">
                            <!-- <div class="price-tag">₹5000 <span>per night</span></div> -->
                        </div>
                        <div class="content">
                            <h3>Suite Room</h3>
                            <p>Luxurious suite with separate living area, king-size bed, and exclusive services for
                                ultimate comfort.</p>
                            <p>👤 3 Adults &nbsp;&nbsp;&nbsp; 📐 400 sq ft</p>
                            <div><span class="tag">AC</span><span class="tag">WiFi</span><span class="tag">TV</span>
                            </div>
                        </div>
                        <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
                    </div>

                    <!-- Executive -->
                    <div class="room-card">
                        <div class="img-box">
                            <img src="<?php echo $base; ?>/image/rooms/room8.jpg" alt="Executive Suite">
                            <!-- <div class="price-tag">₹6500 <span>per night</span></div> -->
                        </div>
                        <div class="content">
                            <h3>Executive Suite</h3>
                            <p>Executive room designed for business travelers featuring workspace and high-speed
                                internet.</p>
                            <p>👤 2 Adults &nbsp;&nbsp;&nbsp; 📐 450 sq ft</p>
                            <div><span class="tag">AC</span><span class="tag">WiFi</span><span class="tag">Mini
                                    Bar</span></div>
                        </div>
                        <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
                    </div>

                    <!-- Presidential -->
                    <div class="room-card">
                        <div class="img-box">
                            <img src="<?php echo $base; ?>/image/rooms/room5.jpg " alt="Presidential Suite">
                            <!-- <div class="price-tag">₹8500 <span>per night</span></div> -->
                        </div>
                        <div class="content">
                            <h3>Presidential Suite</h3>
                            <p>Experience unmatched luxury with spacious interiors, a private balcony, and premium
                                service.</p>
                            <p>👤 2 Adults &nbsp;&nbsp;&nbsp; 📐 600 sq ft</p>
                            <div><span class="tag">AC</span><span class="tag">WiFi</span><span
                                    class="tag">Jacuzzi</span></div>
                        </div>
                        <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
                    </div>

                    <!-- Family -->
                    <div class="room-card">
                        <div class="img-box">
                            <img src="<?php echo $base; ?>/image/rooms/room2.jpg" alt="Family Luxury Room">
                            <!-- <div class="price-tag">₹7000 <span>per night</span></div> -->
                        </div>
                        <div class="content">
                            <h3>Family Luxury Room</h3>
                            <p>Ideal for families, featuring multiple beds, cozy interiors, and a joyful stay
                                experience.</p>
                            <p>👤 4 Adults &nbsp;&nbsp;&nbsp; 📐 550 sq ft</p>
                            <div><span class="tag">AC</span><span class="tag">WiFi</span><span class="tag">Room
                                    Service</span></div>
                        </div>
                        <div class="btn-wrap"><a href="<?php echo $base; ?>/rooms.php">View Details</a></div>
                    </div>

                </div> <!-- /.rooms-track -->
            </div> <!-- /.rooms-slider -->

            <div style="margin-top:24px;">
                <a href="rooms.php"
                    style="display:inline-block;background:#0f1724;color:#fff; padding:12px 35px;border-radius:8px;text-decoration:none;font-weight:600;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                    View All Rooms
                </a>
            </div>
        </div> <!-- /.rooms-wrap -->
    </div>

    <style>
    /* container + layout */
    .rooms-wrap {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
    }

    .rooms-slider {
        overflow-x: auto;
        scroll-behavior: smooth;
        padding-bottom: 8px;
        -webkit-overflow-scrolling: touch;
    }

    .rooms-track {
        display: flex;
        gap: 25px;
        padding: 10px 6px;
    }

    /* card */
    .room-card {
        flex: 0 0 320px;
        background: #fff;
        border: 1px solid #eee;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        transition: transform .28s, box-shadow .28s;
    }

    .room-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .img-box img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        display: block;
    }

    .price-tag {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #fff;
        color: #d67a00;
        padding: 8px 14px;
        border-radius: 25px;
        font-weight: 700;
    }

    .content {
        padding: 20px;
        text-align: left;
    }

    .tag {
        background: #f5f5f5;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 13px;
        margin-right: 5px;
    }

    .btn-wrap {
        background: #f57c00;
        text-align: center;
        padding: 14px;
    }

    .btn-wrap a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-wrap a:hover {
        color: #fff;
        background: #d67a00;
        transition: 0.3s;
    }

    /* nav buttons */
    .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: none;
        background: #000;
        box-shadow: 0 6px 18px #fff;
        font-size: 22px;
        line-height: 44px;
        cursor: pointer;
        z-index: 20;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        ;
        transition: transform .15s, background .15s;
    }

    .nav-btn:hover {
        transform: translateY(-50%) scale(1.06);
        background: #d67a00;
        ;
    }

    .nav-btn.prev {
        left: 8px;
    }

    .nav-btn.next {
        right: 8px;
    }

    /* hide arrows on small screens if you want, or keep them */
    @media (max-width:720px) {
        .nav-btn {
            width: 40px;
            height: 40px;
            font-size: 20px;
        }

        .nav-btn.prev {
            left: 4px;
        }

        .nav-btn.next {
            right: 4px;
        }
    }

    /* remove default scrollbar visuals on some browsers (optional) */
    .rooms-slider::-webkit-scrollbar {
        height: 8px;
    }

    /* .rooms-slider::-webkit-scrollbar-thumb {
        background: #f0a14b;
        border-radius: 4px;
    } */
    </style>

    <script>
    (function() {
        const slider = document.querySelector('.rooms-slider');
        const track = document.querySelector('.rooms-track');
        const prevBtn = document.querySelector('.nav-btn.prev');
        const nextBtn = document.querySelector('.nav-btn.next');
        const card = document.querySelector('.room-card');

        if (!slider || !track || !card) return;

        // gap must match CSS gap (px). If you change CSS gap, update here too (or compute).
        const gap = 25;
        const getCardWidth = () => Math.round(card.getBoundingClientRect().width + gap);

        // click handlers: move by one card
        nextBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: getCardWidth(),
                behavior: 'smooth'
            });
            pauseAutoPlayTemporarily();
        });

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: -getCardWidth(),
                behavior: 'smooth'
            });
            pauseAutoPlayTemporarily();
        });

        // keyboard support (left/right)
        slider.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') {
                nextBtn.click();
            }
            if (e.key === 'ArrowLeft') {
                prevBtn.click();
            }
        });

        // Auto-play using JS so manual controls work reliably.
        let autoInterval = null;
        const autoplaySpeedPxPerTick = 0.6; // px per tick
        const tickMs = 16; // ~60fps
        let paused = false;

        function startAutoPlay() {
            stopAutoPlay();
            autoInterval = setInterval(() => {
                if (paused) return;
                // if reached near end, smooth-back to start
                if (Math.ceil(slider.scrollLeft + slider.clientWidth) >= slider.scrollWidth - 2) {
                    // small pause before reset for better UX
                    paused = true;
                    setTimeout(() => {
                        slider.scrollTo({
                            left: 0,
                            behavior: 'smooth'
                        });
                        paused = false;
                    }, 700);
                    return;
                }
                slider.scrollLeft += autoplaySpeedPxPerTick;
            }, tickMs);
        }

        function stopAutoPlay() {
            if (autoInterval) {
                clearInterval(autoInterval);
                autoInterval = null;
            }
        }

        // pause on hover/focus/drag
        slider.addEventListener('mouseenter', () => paused = true);
        slider.addEventListener('mouseleave', () => paused = false);
        slider.addEventListener('focusin', () => paused = true);
        slider.addEventListener('focusout', () => paused = false);
        // pause while user is dragging (pointerdown)
        let pointerDown = false;
        slider.addEventListener('pointerdown', () => {
            pointerDown = true;
            paused = true;
        });
        window.addEventListener('pointerup', () => {
            if (pointerDown) {
                pointerDown = false;
                paused = false;
            }
        });

        // short pause after clicking nav so autoplay doesn't fight scroll
        let clickPauseTimer = null;

        function pauseAutoPlayTemporarily() {
            paused = true;
            if (clickPauseTimer) clearTimeout(clickPauseTimer);
            clickPauseTimer = setTimeout(() => {
                paused = false;
            }, 900);
        }

        // start
        startAutoPlay();

        // responsive: recalc on resize
        window.addEventListener('resize', () => {
            /* card width recalculated on demand */
        });
    })();
    </script>
</section>




<!-- Our Facilities Section -->
<section class="facilities-section" style="padding:80px 0; background:#fff; ">
    <div class="container" style="max-width:1200px; margin:auto; text-align:center;">
        <h2 style="font-size:36px; font-weight:800; color:#111; margin-bottom:10px;">Our Facilities</h2>
        <p style="font-size:18px; color:#444; margin-bottom:40px;">
            We provide all modern amenities to make your stay comfortable and memorable.
        </p>

        <div class="facilities-grid"
            style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:24px;">

            <!-- Facility Card -->
            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/clock.png" alt="Reception"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">24/7 Reception</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    Round-the-clock front desk service for your convenience
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/wifi1.png" alt="WiFi"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Free WiFi</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    High-speed internet access throughout the property
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/resturant.png" alt="Restaurant"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Restaurant</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    Sakya Restaurant serving authentic Indian & International cuisine
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/room_service.png" alt="Room Service"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Room Service</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    In-room dining available 24 hours
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/laundry_service.png" alt="Laundry"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Laundry Service</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    Professional laundry and dry cleaning services
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?> /image/travel.png" alt="Travel Desk"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Travel Desk</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    Tour packages and local sightseeing arrangements
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/car.png" alt="Parking"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Parking</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    Secure parking facility for guests
                </p>
            </div>

            <div class="facility-card" style="background:#fff;border:1px solid #eee;border-radius:14px;
         padding:30px 20px;text-align:center;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
                <div class="icon" style="width:80px;height:80px;margin:0 auto 15px;
         background:radial-gradient(circle,#d67a00 25%,#ffefcc 30%,#fff6e0 100%);
         border-radius:50%;">
                    <img src="<?php echo $base; ?>/image/call.png" alt="Doctor on Call"
                        style="width:48px;height:48px;margin-top:16px;">
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;">Doctor on Call</h3>
                <p style="font-size:15px;color:#444;line-height:1.6;">
                    Medical assistance available on request
                </p>
            </div>

        </div>
        <!-- View All Facilities Button -->
        <div style="text-align:center; margin-top:40px;">
            <a href="facilities.php" style="display:inline-block; background:#0f1724; color:#fff; 
            padding:12px 35px; border-radius:8px; text-decoration:none; 
            font-weight:600; letter-spacing:0.5px; 
            box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                View All Facilities
            </a>
        </div>

    </div>
    <style>
    .facility-card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    a:hover {
        background-color: #f57c00 !important;
        color: #fff !important;
        transition: all 0.3s ease;
    }
    </style>
</section>


<!-- What Our Guests Say Section -->

<!-- ================= Testimonials Section ================= -->
<!-- ================= Testimonials Section ================= -->
<section class="testimonials" style="background:#fff8ec;padding:50px 0;">
    <div class="container" style="max-width:900px;margin:auto;text-align:center;">
        <h2 style="font-size:30px;font-weight:800;color:#111;margin-bottom:8px;">
            What Our Guests Say
        </h2>
        <p style="font-size:16px;color:#555;margin-bottom:30px;">
            Read reviews from travelers who experienced our hospitality.
        </p>

        <!-- Swiper Slider -->
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">


                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"From the warm welcome at check-in to the smooth check-out, our stay was truly exceptional.
                            The hotel’s luxurious ambiance, comfortable rooms, and attentive staff made us feel"</p>
                        <div class="guest">
                            <img src="<?php echo $base; ?>/image/sameer.jpg" alt="Sameer Alam">
                            <div>
                                <p class="name">Sameer Alam</p>
                                <p class="country">India,Bihar</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"Excellent location near Mahabodhi Temple. The staff was very helpful and the rooms were
                            clean and comfortable. Highly recommended!"</p>
                        <div class="guest">
                            <img src="<?php echo $base; ?>/image/man.png" alt="Michael Chen">
                            <div>
                                <p class="name">Michael Chen 🇸🇬</p>
                                <p class="country">Singapore</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"A peaceful retreat in the heart of Bodhgaya. The restaurant food was delicious and the tour
                            arrangements were seamless."</p>
                        <div class="guest">
                            <img src="<?php echo $base; ?>/image/women.jpg" alt="Sarah Williams">
                            <div>
                                <p class="name">Sarah Williams 🇬🇧</p>
                                <p class="country">United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"Great value for money. The location is perfect for visiting all the Buddhist sites. Will
                            definitely return!"</p>
                        <div class="guest">
                            <img src="<?php echo $base; ?>/image/salman_khan.jpg" alt="Salman Khan">
                            <div>
                                <p class="name">Salman Khan</p>
                                <p class="country">India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"From the warm welcome to the check-out, everything was beyond expectations. The ambiance is
                            luxurious, and the staff made us feel at home."</p>
                        <div class="guest">
                            <img src="<?php echo $base; ?>/image/amir_khan.jpg" alt="Amir Khan">
                            <div>
                                <p class="name">Amir Khan</p>
                                <p class="country">India</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Controls -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script>
    var swiper = new Swiper(".testimonial-slider", {
        loop: true,
        speed: 1000,
        slidesPerView: 1,
        autoHeight: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        keyboard: {
            enabled: true,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
    });
    </script>

    <style>
    .testimonial-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.07);
        padding: 22px 20px;
        max-width: 650px;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(246, 162, 0, 0.25);
    }

    .testimonial-card .stars {
        color: #f6a200;
        font-size: 18px;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
    }

    .testimonial-card p {
        font-style: italic;
        color: #444;
        line-height: 1.5;
        font-size: 15.5px;
        margin: 0 auto;
        max-width: 550px;
    }

    .guest {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 10px;
    }

    .guest img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #f6a200;
    }

    .name {
        font-weight: 700;
        color: #111;
        font-size: 14.5px;
    }

    .country {
        font-size: 13px;
        color: #777;
    }

    .swiper-pagination {
        margin-top: 10px;
    }

    .swiper-pagination-bullet {
        background: #ccc;
        opacity: 1;
        gap: 30px;
    }

    .swiper-pagination-bullet-active {
        background: #f6a200;
        width: 10px;
        height: 10px;

    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #f6a200;
        transition: all 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        transform: scale(1.2);
        color: #d98f00;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 22px;
    }

    /* RESPONSIVE FIXES */
    @media (max-width: 992px) {
        .testimonial-card {
            padding: 20px 18px;
            max-width: 90%;
        }

        .swiper-button-next,
        .swiper-button-prev {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .testimonial-card {
            padding: 18px 15px;
        }

        .testimonial-card p {
            font-size: 14.5px;
        }

        .guest img {
            width: 40px;
            height: 40px;
        }
    }
    </style>
</section>

<!-- Ready to Book Section -->
<section class="cta-section">
    <div class="cta-content">
        <h2>Ready to Book Your Spiritual Journey?</h2>
        <p>Experience the perfect blend of comfort, spirituality, and hospitality at Hotel Jeevak International.</p>
        <a href="booking.php" class="cta-btn">Book Now</a>
    </div>

    <style>
    /* ===== CTA Section ===== */
    .cta-section {
        background: linear-gradient(90deg, #d87900, #e35d02);
        color: #fff;
        text-align: center;
        padding: 100px 20px;
    }

    .cta-section h2 {
        font-size: 38px;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .cta-section p {
        font-size: 18px;
        color: #fff;
        margin-bottom: 40px;
        line-height: 1.7;
    }

    .cta-btn {
        background: #fff;
        color: #d45a00;
        padding: 14px 40px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 700;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .cta-btn:hover {
        background: #111;
        color: #fff;
        transform: translateY(-3px);
    }
    </style>
</section>

<?php
// Include footer (full-width footer). Adjust path if needed.
include __DIR__ . '/includes/footer.php';
?>