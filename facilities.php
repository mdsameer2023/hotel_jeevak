<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <section class="container">
  <h2 class="section-title">Facilities</h2>
  <div class="facility-grid">
    <div class="facility"><h4>24/7 Reception</h4><p>Round-the-clock assistance.</p></div>
    <div class="facility"><h4>Laundry Service</h4><p>Professional laundry and dry cleaning.</p></div>
    <div class="facility"><h4>Doctor on Call</h4><p>Medical assistance available on request.</p></div>
    <div class="facility"><h4>Travel Desk</h4><p>Tour packages and local sightseeing arrangements.</p></div>
  </div>
</section> -->



<!-- ================= Facilities Section ================= -->
<section class="facilities-header" id="facilities">
    <div class="content">
        <h2>Our Facilities</h2>
        <p>From relaxing spaces to modern comforts, we make every stay more enjoyable, relaxing, and memorable.</p>
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

<!-- ================= Our Facilities Section ================= -->
<section class="facilities-section" id="facilities">

    <div class="container">

        <h2 style="margin-top:-60px; color:#111;">Hotel Amenities</h2>
        <!-- <p>Experience modern amenities and exceptional hospitality designed to make your stay comfortable, relaxing, and
            memorable.</p> -->

        <div class="facilities-grid">
            <!-- Facility Cards -->
            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/clock.png" alt="24/7 Reception">
                </div>
                <h3>24/7 Reception</h3>
                <p>Round-the-clock front desk assistance ensuring seamless hospitality anytime you need it.</p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/wifi1.png" alt="Free WiFi">
                </div>
                <h3>Free WiFi</h3>
                <p>Stay connected with our complimentary high-speed internet access available throughout the property.
                </p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/resturant.png" alt="Restaurant">
                </div>
                <h3>Restaurant</h3>
                <p>Enjoy authentic Indian and international cuisine crafted by our expert chefs at Sakya Restaurant.</p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/room_service.png" alt="Room Service">
                </div>
                <h3>Room Service</h3>
                <p>Indulge in 24-hour in-room dining with a variety of freshly prepared dishes delivered to your door.
                </p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/laundry_service.png" alt="Laundry Service">
                </div>
                <h3>Laundry Service</h3>
                <p>Professional laundry and dry-cleaning services to keep your clothes fresh and crisp during your stay.
                </p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/travel.png" alt="Travel Desk">
                </div>
                <h3>Travel Desk</h3>
                <p>Personalized travel assistance, sightseeing tours, and local experiences arranged for your
                    convenience.</p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/car.png" alt="Parking">
                </div>
                <h3>Parking</h3>
                <p>Secure, spacious parking facilities available for all guests within the hotel premises.</p>
            </div>

            <div class="facility-card">
                <div class="icon">
                    <img src="<?php echo $base; ?>/image/call.png" alt="Doctor on Call">
                </div>
                <h3>Doctor on Call</h3>
                <p>24/7 medical assistance on request for your safety and peace of mind.</p>
            </div>
        </div>

        <!-- Button -->
        <!-- <div class="view-all">
            <a href="facilities.php">View All Facilities</a>
        </div> -->
    </div>
</section>

<style>
/* =============== Facilities Section Styling =============== */
.facilities-section {
    position: relative;
    padding: 100px 0;
    /* background: linear-gradient(145deg, #eceae7ff, #558eabf5, #f7dcbcff); */
    background-size: 200% 200%;
    animation: gradientShift 15s ease-in-out infinite;
    overflow: hidden;
    text-align: center;
}

/* Gradient Animation */
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

/* Parallax Shine Overlay */
.facilities-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: -60%;
    width: 60%;
    height: 100%;
    background: rgba(255, 255, 255, 0.25);
    transform: skewX(-25deg);
    animation: shine 8s infinite;
}

@keyframes shine {
    0% {
        left: -60%;
    }

    50% {
        left: 120%;
    }

    100% {
        left: 120%;
    }
}

/* Container */
.facilities-section .container {
    max-width: 1200px;
    margin: auto;
    position: relative;
    z-index: 2;
}

/* Headings */
.facilities-section h2 {
    font-size: 38px;
    font-weight: 800;
    color: #222;
    margin-bottom: 15px;
}

.facilities-section p {
    font-size: 18px;
    color: #444;
    margin-bottom: 50px;
    max-width: 850px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
}

/* Grid Layout */
.facilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

/* Facility Card */
.facility-card {
    background: #fff;
    border-radius: 16px;
    padding: 35px 20px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
    transition: all 0.4s ease;
    position: relative;
}

.facility-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
}

/* Icon Circle */
.facility-card .icon {
    width: 90px;
    height: 90px;
    margin: 0 auto 20px;
    background: radial-gradient(circle, #f8b500 25%, #ffeec3 40%, #fff8e5 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.facility-card .icon img {
    width: 50px;
    height: 50px;
}

/* Text */
.facility-card h3 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 12px;
    color: #222;
}

.facility-card p {
    font-size: 15px;
    color: #555;
    line-height: 1.6;
}

/* Button */
.view-all {
    margin-top: 50px;
}

.view-all a {
    display: inline-block;
    background: #0f1724;
    color: #fff;
    padding: 12px 38px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.view-all a:hover {
    background: #f8b500;
    color: #111;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .facilities-section {
        padding: 80px 20px;
    }

    .facilities-section h2 {
        font-size: 28px;
    }

    .facilities-section p {
        font-size: 16px;
    }
}
</style>


<!-- ================= In-Room Amenities Section ================= -->
<section class="amenities-section" id="amenities">
    <div class="container">
        <h2>In-Room Amenities</h2>

        <div class="amenities-box">
            <div class="amenity-card">
                <div class="icon"><img src="<?php echo $base; ?>/image/ac.jpg" alt="Air Conditioning"></div>
                <div class="text">
                    <h3>Air Conditioning</h3>
                    <p>All rooms equipped with modern air-conditioning for your comfort.</p>
                </div>
            </div>

            <div class="amenity-card">
                <div class="icon"><img src="<?php echo $base; ?>/image/tv.png" alt="Satellite TV"></div>
                <div class="text">
                    <h3>Satellite TV</h3>
                    <p>Wide selection of cable channels and on-demand entertainment.</p>
                </div>
            </div>

            <div class="amenity-card">
                <div class="icon"><img src="<?php echo $base; ?>/image/telephone.jpg" alt="Direct Dial Telephone"></div>
                <div class="text">
                    <h3>Direct Dial Telephone</h3>
                    <p>Local and international calling available directly from your room.</p>
                </div>
            </div>

            <div class="amenity-card">
                <div class="icon"><img src="<?php echo $base; ?>/image/coffee.png" alt="Hot & Cold Water"></div>
                <div class="text">
                    <h3>Hot & Cold Water</h3>
                    <p>24-hour continuous hot and cold water supply for your convenience.</p>
                </div>
            </div>

            <div class="amenity-card">
                <div class="icon"><img src="<?php echo $base; ?>/image/wifi1.png" alt="Free WiFi"></div>
                <div class="text">
                    <h3>Free WiFi</h3>
                    <p>Unlimited high-speed internet access available in all rooms.</p>
                </div>
            </div>

            <div class="amenity-card">
                <div class="icon"><img src="<?php echo $base; ?>/image/room_service1.png" alt="Room Service"></div>
                <div class="text">
                    <h3>Room Service</h3>
                    <p>24/7 in-room service ensuring comfort and convenience at any time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* =============== In-Room Amenities Section =============== */
.amenities-section {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(135deg, #fffaf2, #fff3e0, #ffe0b2);
    overflow: hidden;
    text-align: center;
}

/* Section Heading */
.amenities-section h2 {
    font-size: 38px;
    font-weight: 800;
    color: #222;
    margin-bottom: 50px;
    position: relative;
    display: inline-block;
}

.amenities-section h2::after {
    content: "";
    display: block;
    width: 60px;
    height: 4px;
    background: #f8b500;
    margin: 10px auto 0;
    border-radius: 2px;
}

/* Container */
.amenities-section .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}

/* Amenities Box */
.amenities-box {
    background: rgba(255, 255, 255, 0.85);
    border: 1px solid #ffe0b2;
    border-radius: 16px;
    padding: 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 24px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    animation: fadeInUp 1.2s ease both;
}

/* Individual Amenity Card */
.amenity-card {
    display: flex;
    align-items: center;
    background: #fffdf8;
    border-radius: 12px;
    padding: 18px 20px;
    transition: all 0.3s ease;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
}

.amenity-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    background: #fff9ee;
}

/* Icon */
.amenity-card .icon {
    min-width: 60px;
    height: 60px;
    background: radial-gradient(circle, #ffffff04 35%, #f7d980ff 70%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 18px;
}

.amenity-card .icon img {
    width: 30px;
    height: 30px;
}

/* Text */
.amenity-card .text h3 {
    font-size: 18px;
    font-weight: 700;
    color: #222;
    margin-bottom: 5px;
}

.amenity-card .text p {
    font-size: 15px;
    color: #555;
    line-height: 1.6;
}

/* Animation */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .amenities-box {
        padding: 25px;
    }

    .amenity-card {
        flex-direction: column;
        text-align: center;
    }

    .amenity-card .icon {
        margin-right: 0;
        margin-bottom: 10px;
    }
}
</style>


<!-- ================= Additional Services Section ================= -->
<section class="additional-services" id="services">
    <div class="container">
        <h2>Additional Services</h2>

        <div class="services-grid">
            <!-- Guest Services -->
            <div class="service-card">
                <h3>Guest Services</h3>
                <ul>
                    <li><span>✔</span> Airport pick-up and drop service</li>
                    <li><span>✔</span> Railway station transfers</li>
                    <li><span>✔</span> Luggage storage facility</li>
                    <li><span>✔</span> Wake-up call service</li>
                    <li><span>✔</span> Newspaper delivery</li>
                    <li><span>✔</span> Currency exchange assistance</li>
                    <li><span>✔</span> Postal services</li>
                    <li><span>✔</span> Travel and tour information desk</li>
                </ul>
            </div>

            <!-- Business Services -->
            <div class="service-card">
                <h3>Business Services</h3>
                <ul>
                    <li><span>✔</span> Conference hall facilities</li>
                    <li><span>✔</span> Business center access</li>
                    <li><span>✔</span> Printing and photocopying</li>
                    <li><span>✔</span> Fax services</li>
                    <li><span>✔</span> Meeting room arrangements</li>
                    <li><span>✔</span> Event hosting support</li>
                    <li><span>✔</span> Audio-visual equipment on request</li>
                    <li><span>✔</span> High-speed internet throughout</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
/* =============== Additional Services Section =============== */
.additional-services {
    position: relative;
    padding: 100px 0;
    /* background: linear-gradient(135deg, #fffaf3, #fff3e0, #ffecb3); */
    background-size: 200% 200%;
    animation: gradientFlow 12s ease-in-out infinite;
    overflow: hidden;
}

@keyframes gradientFlow {
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

/* Section Title */
.additional-services h2 {
    text-align: center;
    font-size: 38px;
    font-weight: 800;
    color: #222;
    margin-bottom: 60px;
    position: relative;
}

.additional-services h2::after {
    content: "";
    width: 80px;
    height: 4px;
    background: #f8b500;
    display: block;
    margin: 10px auto 0;
    border-radius: 2px;
}

/* Container */
.additional-services .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    gap: 40px;
}

/* Service Card */
.service-card {
    background: rgba(255, 255, 255, 0.85);
    border-radius: 16px;
    padding: 40px 35px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    border: 1px solid #ffebc1;
    backdrop-filter: blur(10px);
    transition: all 0.4s ease;
    animation: fadeUp 1.2s ease both;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
    background: rgba(255, 255, 255, 0.95);
}

/* Headings */
.service-card h3 {
    font-size: 22px;
    font-weight: 800;
    color: #222;
    margin-bottom: 20px;
    border-left: 4px solid #f8b500;
    padding-left: 12px;
}

/* List */
.service-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-card ul li {
    font-size: 16px;
    color: #333;
    line-height: 1.8;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: color 0.3s ease;
}

.service-card ul li span {
    color: #f8b500;
    font-size: 20px;
    transition: transform 0.3s ease;
}

.service-card ul li:hover {
    color: #111;
}

.service-card ul li:hover span {
    transform: scale(1.3);
}

/* Animation */
@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .service-card {
        padding: 30px 20px;
    }

    .service-card h3 {
        font-size: 20px;
    }

    .service-card ul li {
        font-size: 15px;
    }
}
</style>




<!-- ================= Safety & Security Section ================= -->
<section class="safety-section" id="safety">
    <div class="container">
        <h2 style="color:#fff">Safety & Security</h2>

        <div class="safety-grid">
            <div class="safety-card">
                <div class="number">1</div>
                <h3>24/7 Security Personnel</h3>
            </div>

            <div class="safety-card">
                <div class="number">2</div>
                <h3>CCTV Surveillance</h3>
            </div>

            <div class="safety-card">
                <div class="number">3</div>
                <h3>Fire Safety Equipment</h3>
            </div>

            <div class="safety-card">
                <div class="number">4</div>
                <h3>First Aid Facilities</h3>
            </div>
        </div>
    </div>
</section>

<style>
/* =============== Safety & Security Section =============== */
.safety-section {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(135deg, #261e1bff, #acf7fcff, #4f5e5bff);
    background-size: 200% 200%;
    animation: gradientMove 14s ease-in-out infinite;
    overflow: hidden;
    text-align: center;
}

/* Gradient Animation */
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

/* Section Heading */
.safety-section h2 {
    font-size: 38px;
    font-weight: 800;
    color: #222;
    margin-bottom: 50px;
    position: relative;
}

.safety-section h2::after {
    content: "";
    width: 70px;
    height: 4px;
    background: #f8b500;
    display: block;
    margin: 10px auto 0;
    border-radius: 2px;
}

/* Container */
.safety-section .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}

/* Grid */
.safety-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 30px;
    justify-items: center;
}

/* Safety Cards */
.safety-card {
    background: rgba(255, 255, 255, 0.85);
    border-radius: 16px;
    padding: 40px 25px;
    width: 100%;
    max-width: 260px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    animation: fadeUp 1.2s ease both;
    border: 1px solid #ffe5b5;
    backdrop-filter: blur(10px);
}

.safety-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    background: rgba(255, 255, 255, 0.95);
}

/* Number Circle */
.safety-card .number {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: radial-gradient(circle, #f8b500 35%, #ffe9b3 75%);
    color: #fff;
    font-weight: 800;
    font-size: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    box-shadow: 0 0 15px rgba(248, 181, 0, 0.3);
}

.safety-card:hover .number {
    background: radial-gradient(circle, #ffca28 20%, #f8b500 90%);
    transform: scale(1.1);
    box-shadow: 0 0 25px rgba(248, 181, 0, 0.5);
}

/* Title */
.safety-card h3 {
    font-size: 17px;
    font-weight: 600;
    color: #222;
    margin-top: 8px;
    line-height: 1.5;
}

/* Animation */
@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .safety-section {
        padding: 80px 20px;
    }

    .safety-card {
        max-width: 100%;
    }

    .safety-card .number {
        width: 70px;
        height: 70px;
        font-size: 20px;
    }

    .safety-card h3 {
        font-size: 16px;
    }
}
</style>




<?php include __DIR__ . '/includes/footer.php'; ?>