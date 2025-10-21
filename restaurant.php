<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <section class="container">
  <h2 class="section-title">Restaurant</h2>
  <p>Our on-site restaurant serves a mix of Indian and international cuisine with a calm atmosphere for guests.</p>
</section> -->


<!-- ================= Facilities Section ================= -->
<section class="facilities-header">
    <div class="content">
        <h2>Sakya Restaurant</h2>
        <p>Experience authentic Indian, Chinese & Continental cuisine in a serene, elegant setting.</p>
    </div>
</section>

<style>
/* Facilities Section Styling */
.facilities-header {
    position: relative;
    padding: 50px 20px;
    text-align: center;
    color: #fff;
    background: linear-gradient(135deg, #e67e22, #e74c3c);
    background-size: 200% 200%;
    animation: gradientShift 10s ease-in-out infinite;
    overflow: hidden;
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

/* Text Animation */
.facilities-header .content {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 1.5s ease forwards;
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
    text-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
}

.facilities-header p {
    font-size: 1.25rem;
    font-weight: 400;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Subtle Shine Overlay */
.facilities-header::before {
    content: "";
    position: absolute;
    top: 0;
    left: -50%;
    width: 50%;
    height: 100%;
    background: rgba(255, 255, 255, 0.2);
    transform: skewX(-25deg);
    animation: shine 5s infinite;
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

/* Responsive Design */
@media (max-width: 768px) {
    .facilities-header h2 {
        font-size: 2.2rem;
    }

    .facilities-header p {
        font-size: 1rem;
        padding: 0 10px;
    }
}
</style>


<!-- ================== Premium Restaurant Section ================== -->
<section class="restaurant-section">
    <div class="restaurant-overlay"></div>
    <div class="container">
        <!-- Left Text Content -->
        <div class="restaurant-content">
            <h2>
                Welcome to <span>Sakya Restaurant</span>
            </h2>
            <p>
                Experience the finest dining at <strong>Sakya Restaurant</strong>, where
                authentic <strong>Indian, Chinese & Continental cuisines</strong> come
                together in a serene, elegant ambiance. Our chefs use fresh,
                locally-sourced ingredients to craft dishes that delight every palate.
            </p>

            <p>
                Whether you prefer <strong>vegetarian</strong>, <strong>non-vegetarian</strong>,
                or <strong>Jain special</strong> preparations, our extensive menu offers
                something unique for everyone.
            </p>

            <p>
                Dine in our comfortable restaurant or enjoy
                <strong>private in-room dining</strong> for a personalized experience.
            </p>

            <div class="tags">
                <span class="tag veg">🌿 Pure Vegetarian Available</span>
                <span class="tag multi">🍴 Multi-Cuisine</span>
            </div>
        </div>

        <!-- Right Image -->
        <div class="restaurant-image">
            <img src="<?php echo $base; ?>/image/info_image.jpg" alt="Fine Dining at Sakya Restaurant">
            <div class="hover-overlay"></div>
        </div>
    </div>
</section>

<!-- ================== Styling ================== -->
<style>
/* Background Animation */
.restaurant-section {
    position: relative;
    padding: 90px 0;
    overflow: hidden;
    background: linear-gradient(120deg, #fff8ec, #fff, #fef3e2);
    background-size: 400% 400%;
    animation: shimmerMove 10s ease-in-out infinite;
}

@keyframes shimmerMove {
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

/* Content Layout */
.restaurant-section .container {
    position: relative;
    z-index: 2;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Text Section */
.restaurant-content {
    flex: 1;
    min-width: 320px;
    animation: fadeUp 1.5s ease forwards;
    opacity: 0;
    transform: translateY(40px);
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.restaurant-content h2 {
    font-size: 38px;
    font-weight: 800;
    color: #2c2c2c;
    margin-bottom: 20px;
}

.restaurant-content h2 span {
    color: #c49b3d;
}

.restaurant-content p {
    font-size: 18px;
    line-height: 1.7;
    color: #555;
    margin-bottom: 16px;
}

/* Tags */
.tags {
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.tag {
    padding: 10px 18px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 15px;
    color: #fff;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: transform 0.3s ease;
}

.tag:hover {
    transform: scale(1.05);
}

.tag.veg {
    background: #0a944b;
}

.tag.multi {
    background: #f5a623;
}

/* Parallax Image */
.restaurant-image {
    flex: 1;
    min-width: 330px;
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    transform: translateZ(0);
    will-change: transform;
}

.restaurant-image img {
    width: 120%;
    height: 500px;
    border-radius: 18px;
    transform: scale(1.05);
    transition: transform 1s ease, filter 1s ease;
}

/* Hover Zoom Effect */
.restaurant-image:hover img {
    transform: scale(1.12);
    filter: brightness(1.1);
}

.hover-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.25);
    opacity: 0;
    transition: opacity 0.5s ease;
    border-radius: 18px;
}

.restaurant-image:hover .hover-overlay {
    opacity: 1;
}

/* Parallax Scroll Effect */
window.addEventListener('scroll', function() {
        const image=document.querySelector('.restaurant-image img');

        if (image) {
            let offset=window.pageYOffset * 0.1;

            image.style.transform=`translateY($ {
                    offset
                }

                px) scale(1.05)`;
        }
    }

);

/* Responsive */
@media (max-width: 768px) {
    .restaurant-section .container {
        flex-direction: column;
        text-align: center;
    }

    .restaurant-content h2 {
        font-size: 30px;
    }

    .restaurant-image {
        margin-top: 20px;
    }
}
</style>


<!-- ================== Restaurant Features Section ================== -->
<section class="restaurant-features">
    <div class="container">
        <h2 class="features-title">Restaurant Features</h2>

        <div class="features-grid">

            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">🕒</div>
                <h3>Open Daily</h3>
                <p>7:00 AM - 10:30 PM</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">🍽️</div>
                <h3>Room Service</h3>
                <p>Available 24/7</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">✨</div>
                <h3>Hygiene First</h3>
                <p>Clean & Sanitized</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon">🥗</div>
                <h3>Special Diets</h3>
                <p>Jain & Custom Meals</p>
            </div>
        </div>
    </div>
</section>

<!-- ================== Styling ================== -->
<style>
/* Section Background */
.restaurant-features {
    background: linear-gradient(135deg, #f88656ff 0%, #fff 100%);
    padding: 90px 0;
    position: relative;
    overflow: hidden;
}

/* Title */
.features-title {
    text-align: center;
    font-size: 34px;
    font-weight: 800;
    color: #2c2c2c;
    margin-bottom: 50px;
    position: relative;
}

.features-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #c49b3d, #f5cc5a);
    margin: 12px auto 0;
    border-radius: 2px;
}

/* Grid Layout */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 30px;
    justify-items: center;
}

/* Feature Card */
.feature-card {
    background: rgba(255, 255, 255, 0.6);
    border: 1px solid rgba(255, 215, 150, 0.4);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    text-align: center;
    padding: 40px 25px;
    transition: all 0.5s ease;
    backdrop-filter: blur(8px);
    animation: fadeUp 1.5s ease forwards;
    opacity: 0;
    transform: translateY(40px);
}

.feature-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 12px 35px rgba(196, 155, 61, 0.35);
    background: rgba(255, 255, 255, 0.9);
}

/* Icon */
.feature-icon {
    font-size: 42px;
    margin-bottom: 18px;
    color: #c49b3d;
    filter: drop-shadow(0 3px 6px rgba(196, 155, 61, 0.3));
    transition: transform 0.4s ease;
}

.feature-card:hover .feature-icon {
    transform: rotate(10deg) scale(1.1);
}

/* Text */
.feature-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #222;
    margin-bottom: 8px;
}

.feature-card p {
    font-size: 16px;
    color: #555;
}

/* Fade Animation */
@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .features-title {
        font-size: 28px;
    }

    .feature-card {
        padding: 35px 20px;
    }
}
</style>


<!-- ================== Our Menu Section ================== -->
<section class="menu-section">
    <div class="container">
        <h2 class="menu-title">Our Menu</h2>

        <div class="menu-grid">

            <!-- Indian Cuisine -->
            <div class="menu-card">
                <div class="menu-header">
                    <div class="menu-icon">🍛</div>
                    <h3>Indian Cuisine</h3>
                </div>
                <ul class="menu-list">
                    <li class="menu-item"><span>Paneer Butter Masala</span><span class="price">₹250</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Dal Makhani</span><span class="price">₹180</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Butter Chicken</span><span class="price">₹320</span><span
                            class="tag nonveg">🔴 Non-Veg</span></li>
                    <li class="menu-item"><span>Biryani (Veg/Chicken)</span><span class="price">₹280</span><span
                            class="tag both">🔵 Both</span></li>
                    <li class="menu-item"><span>Mix Veg Curry</span><span class="price">₹200</span><span
                            class="tag veg">🟢 Veg</span></li>
                </ul>
            </div>

            <!-- Chinese Dishes -->
            <div class="menu-card">
                <div class="menu-header">
                    <div class="menu-icon">🥢</div>
                    <h3>Chinese Dishes</h3>
                </div>
                <ul class="menu-list">
                    <li class="menu-item"><span>Veg Fried Rice</span><span class="price">₹180</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Chilli Paneer</span><span class="price">₹220</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Chicken Manchurian</span><span class="price">₹280</span><span
                            class="tag nonveg">🔴 Non-Veg</span></li>
                    <li class="menu-item"><span>Hakka Noodles</span><span class="price">₹200</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Spring Rolls</span><span class="price">₹150</span><span
                            class="tag veg">🟢 Veg</span></li>
                </ul>
            </div>

            <!-- Continental -->
            <div class="menu-card">
                <div class="menu-header">
                    <div class="menu-icon">🍝</div>
                    <h3>Continental</h3>
                </div>
                <ul class="menu-list">
                    <li class="menu-item"><span>Pasta Arrabiata</span><span class="price">₹250</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Grilled Vegetables</span><span class="price">₹220</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>French Fries</span><span class="price">₹100</span><span
                            class="tag veg">🟢 Veg</span></li>
                    <li class="menu-item"><span>Veg Burger</span><span class="price">₹150</span><span class="tag veg">🟢
                            Veg</span></li>
                    <li class="menu-item"><span>Pizza (Various)</span><span class="price">₹300</span><span
                            class="tag veg">🟢 Veg</span></li>
                </ul>
            </div>

            <!-- Beverages -->
            <div class="menu-card">
                <div class="menu-header">
                    <div class="menu-icon">☕</div>
                    <h3>Beverages</h3>
                </div>
                <ul class="menu-list">
                    <li class="menu-item"><span>Tea/Coffee</span><span class="price">₹50</span><span class="tag veg">🟢
                            Veg</span></li>
                    <li class="menu-item"><span>Fresh Juice</span><span class="price">₹80</span><span class="tag veg">🟢
                            Veg</span></li>
                    <li class="menu-item"><span>Lassi</span><span class="price">₹70</span><span class="tag veg">🟢
                            Veg</span></li>
                    <li class="menu-item"><span>Soft Drinks</span><span class="price">₹40</span><span class="tag veg">🟢
                            Veg</span></li>
                    <li class="menu-item"><span>Mineral Water</span><span class="price">₹20</span><span
                            class="tag veg">🟢 Veg</span></li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ================== Styling ================== -->
<style>
/* Background */
.menu-section {
    /* background: linear-gradient(135deg, #fff8ee, #bbfadfff); */
    padding: 90px 0;
}

/* Title */
.menu-title {
    text-align: center;
    font-size: 34px;
    font-weight: 800;
    color: #2c2c2c;
    margin-bottom: 50px;
    position: relative;
}

.menu-title::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #c49b3d, #f5cc5a);
    margin: 12px auto 0;
    border-radius: 2px;
}

/* Grid - 2x2 Layout */
.menu-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
    justify-items: center;
}

@media (max-width: 992px) {
    .menu-grid {
        grid-template-columns: 1fr;
    }
}

/* Menu Card */
.menu-card {
    background: rgba(255, 255, 255, 0.7);
    border-radius: 18px;
    border: 1px solid rgba(255, 215, 150, 0.3);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    padding: 35px;
    width: 100%;
    max-width: 520px;
    backdrop-filter: blur(8px);
    transition: all 0.4s ease;
}

.menu-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 12px 35px rgba(196, 155, 61, 0.35);
}

/* Header */
.menu-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 25px;
}

.menu-header h3 {
    font-size: 22px;
    font-weight: 700;
    color: #222;
}

.menu-icon {
    font-size: 32px;
    background: #fbeed0;
    color: #c49b3d;
    border-radius: 50%;
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 3px 10px rgba(196, 155, 61, 0.25);
}

/* Menu List */
.menu-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #eee;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease;
}

.menu-item:last-child {
    border-bottom: none;
}

.menu-list .price {
    color: #c49b3d;
    font-weight: 700;
}

/* Tags */
.tag {
    font-size: 13px;
    padding: 4px 10px;
    border-radius: 10px;
    margin-left: 8px;
    font-weight: 600;
}

.tag.veg {
    background: #d7f8dd;
    color: #0b8f36;
}

.tag.nonveg {
    background: #f8d6d6;
    color: #b62424;
}

.tag.both {
    background: #d9e5ff;
    color: #2a59c3;
}

/* Scroll-trigger animation */
.menu-item.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive */
@media (max-width: 768px) {
    .menu-title {
        font-size: 28px;
    }

    .menu-card {
        padding: 30px 20px;
    }
}
</style>

<!-- Scroll Animation Script -->
<script>
document.addEventListener("scroll", () => {
    const items = document.querySelectorAll(".menu-item");
    const triggerBottom = window.innerHeight * 0.9;
    items.forEach(item => {
        const boxTop = item.getBoundingClientRect().top;
        if (boxTop < triggerBottom) {
            item.classList.add("visible");
        }
    });
});
</script>


<!-- ================== Special Requests Section ================== -->
<section class="special-requests">
    <div class="container">
        <div class="special-box">
            <h2>Special Requests</h2>
            <p>
                We understand that every guest has unique dietary preferences. Our kitchen team is delighted
                to accommodate <strong>special requests</strong> including <strong>Jain food</strong>,
                <strong>gluten-free options</strong>, and <strong>custom preparations</strong>.
                Please inform our staff about your requirements, and we’ll ensure your meal is prepared
                exactly the way you like it — with care and perfection.
            </p>

            <a href="tel:+9107208913724" class="call-btn">
                📞 Call: +91-07208913724 for special orders
            </a>
        </div>
    </div>
</section>

<!-- ================== Styling ================== -->
<style>
/* Background Section */
.special-requests {
    background: linear-gradient(135deg, #fff9ef 0%, #fff8e6 100%);
    padding: 90px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

/* Container Box */
.special-box {
    max-width: 900px;
    width: 90%;
    background: rgba(255, 255, 255, 0.85);
    border: 1px solid rgba(255, 215, 150, 0.6);
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(196, 155, 61, 0.15);
    padding: 60px 40px;
    backdrop-filter: blur(8px);
    margin: auto;
    animation: fadeUp 1.4s ease forwards;
    opacity: 0;
    transform: translateY(40px);
}

/* Title */
.special-box h2 {
    font-size: 30px;
    font-weight: 800;
    color: #222;
    margin-bottom: 20px;
    position: relative;
}

.special-box h2::after {
    content: "";
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #c49b3d, #f5cc5a);
    display: block;
    margin: 12px auto 0;
    border-radius: 2px;
}

/* Paragraph */
.special-box p {
    font-size: 17px;
    line-height: 1.8;
    color: #444;
    margin-bottom: 35px;
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
}

/* Call Button */
.call-btn {
    display: inline-block;
    background: linear-gradient(90deg, #c49b3d, #e0b145);
    color: #fff;
    font-weight: 600;
    padding: 14px 30px;
    border-radius: 8px;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(196, 155, 61, 0.4);
    transition: all 0.4s ease;
    font-size: 16px;
    animation: pulseGlow 2s infinite ease-in-out;
}

.call-btn:hover {
    background: linear-gradient(90deg, #e0b145, #c49b3d);
    box-shadow: 0 6px 18px rgba(196, 155, 61, 0.55);
    transform: scale(1.05);
}

/* Pulse Animation (Elegant Glow) */
@keyframes pulseGlow {

    0%,
    100% {
        box-shadow: 0 0 10px rgba(196, 155, 61, 0.5), 0 0 20px rgba(245, 204, 90, 0.3);
    }

    50% {
        box-shadow: 0 0 20px rgba(196, 155, 61, 0.8), 0 0 30px rgba(245, 204, 90, 0.5);
    }
}

/* Fade-up Entrance Animation */
@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .special-box {
        padding: 45px 20px;
    }

    .special-box h2 {
        font-size: 26px;
    }

    .call-btn {
        font-size: 15px;
        padding: 12px 25px;
    }
}
</style>



<?php include __DIR__ . '/includes/footer.php'; ?>