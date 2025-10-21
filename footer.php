<!-- ================= Footer Section ================= -->
<footer class="main-footer">
    <div class="footer-container">

        <!-- Column 1: About -->
        <div class="footer-column about">
            <div class="logo">
                <img src="<?php echo $base; ?>/image/logo4.png"
                    style="height:70px; vertical-align:middle; margin-right:10px; box-shadow:0 2px 12px rgba(0,0,0,0.10); border-radius:8px;">
                <span
                    style="font-size:16px; font-weight:bold; letter-spacing:1px; color:#e67e22; vertical-align:middle; margin-left:-15px;">
                    HOTEL JEEVAK <span style="color:#fff;">INTERNATIONAL</span>
                </span>
            </div>

            <p>
                Experience peace and comfort in the spiritual heart of Bodhgaya.
                We are your friend and relative who will guide you as a family member
                while you are on holiday in this destination.
            </p>

            <div class="social-icons">
                <a href="https://www.facebook.com/sameer.alam.869166"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/official_sameer_5g?igsh=MTY4MW5hbmU1YmF6dQ=="><i
                        class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-column links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="rooms.php">Rooms & Tariff</a></li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="restaurant.php">Restaurant</a></li>
                <li><a href="gallery.php">Photo Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- Column 3: Nearby Attractions -->
        <div class="footer-column attractions">
            <h3>Nearby Attractions</h3>
            <ul>
                <li>Mahabodhi Temple (0.4 km)</li>
                <li>Thai Monastery (1 km)</li>
                <li>Sujata Temple (2 km)</li>
                <li>Chinese Temple (1.5 km)</li>
                <li>Nalanda (110 km)</li>
                <li>Rajgir (80 km)</li>
            </ul>
        </div>

        <!-- Column 4: Contact Us -->
        <div class="footer-column contact">
            <h3>Contact Us</h3>
            <ul class="contact-info">
                <li><i class="fas fa-map-marker-alt"></i> Near Mahabodhi Temple, Bodhgaya – 824231, Bihar, India</li>
                <li><i class="fas fa-phone-alt"></i> +91-07208913724</li>
                <li><i class="fas fa-envelope"></i> info@hoteljeevak.com</li>
            </ul>
        </div>

    </div>

    <h2 style="color:#ffd700; font-size:1.5em; text-shadow:1px 1px 4px #333; margin-top:10px; text-align:center;">
        Crafted with passion by
        <span style="color:#fff; background:#f57c00; padding:2px 8px; border-radius:4px;">@Sameer Alam</span>
    </h2>

    <div class="footer-bottom">
        <p>© 2025 Hotel Jeevak International. All rights reserved.</p>
    </div>
</footer>

<style>
/* ===================== FULL-WIDTH FOOTER ===================== */
.main-footer {
    width: 100%;
    background: linear-gradient(180deg, #0f1824 0%, #0b111b 100%);
    color: #cfd6df;
    font-family: "Poppins", sans-serif;
    overflow: hidden;
    padding: 80px 0 0 0;
    box-sizing: border-box;
    box-shadow: 0 -2px 12px rgba(0, 0, 0, 0.1);
}

/* Grid Layout */
.footer-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 50px;
    padding: 0 6%;
    max-width: 1600px;
    margin: 0 auto;
}

.footer-column {
    line-height: 1.8;
}

.footer-column h2,
.footer-column h3 {
    color: #fff;
    font-weight: 600;
    margin-bottom: 15px;
}

.footer-column p {
    color: #cfd6df;
    margin-bottom: 25px;
    font-size: 15px;
}

/* Links */
.footer-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-column ul li {
    margin-bottom: 10px;
    font-size: 15px;
}

.footer-column ul li a {
    text-decoration: none;
    color: #cfd6df;
    transition: 0.3s;
}

.footer-column ul li a:hover {
    color: #f6a200;
}

/* Contact Info */
.contact-info li {
    margin-bottom: 10px;
}

.contact-info li i {
    color: #f6a200;
    margin-right: 8px;
}

/* Footer Bottom */
.footer-bottom {
    background: #0b111b;
    text-align: center;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 25px 10px;
    margin-top: 50px;
    font-size: 14px;
    color: #aab4c0;
}

/* ===================== CENTERED SOCIAL ICONS ===================== */
.social-icons {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 24px;
    margin: 30px auto 10px auto;
    flex-wrap: wrap;
}

.social-icons a {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.06);
    color: #ffffff;
    font-size: 20px;
    transition: all 0.4s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

.social-icons a::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: linear-gradient(135deg, #ffb74d, #ff8a3d);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.social-icons a:hover::before {
    opacity: 1;
}

.social-icons a i {
    position: relative;
    z-index: 1;
    transition: transform 0.5s ease;
}

.social-icons a:hover i {
    transform: rotate(360deg);
}

.social-icons a:hover {
    transform: translateY(-5px) scale(1.08);
    color: #fff;
    box-shadow: 0 0 15px rgba(255, 138, 61, 0.6);
}

/* ===================== RESPONSIVE ===================== */
@media (max-width: 1200px) {
    .footer-container {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .footer-column {
        margin-bottom: 35px;
    }

    .social-icons {
        gap: 18px;
    }

    .social-icons a {
        width: 46px;
        height: 46px;
        font-size: 18px;
    }
}
</style>