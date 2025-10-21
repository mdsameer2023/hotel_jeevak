<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <section class="container">
  <h2 class="section-title">Contact Us</h2>
  <p>📍 Near Mahabodhi Temple, Bodhgaya, Bihar, India</p>
  <p>📞 +91-07208913724</p>
  <p>✉️ info@hoteljeevak.com</p>
  <h3>Send a message</h3>
  <form method="post" style="max-width:700px">
    <label>Name</label><br><input type="text" name="name" style="width:100%;padding:8px;margin:6px 0"><br>
    <label>Email</label><br><input type="email" name="email" style="width:100%;padding:8px;margin:6px 0"><br>
    <label>Message</label><br><textarea name="message" style="width:100%;padding:8px;margin:6px 0" rows="5"></textarea><br>
    <button class="btn" type="submit" style="background:#f57c00;color:#fff;padding:10px 16px;border-radius:8px;border:none">Send Message</button>
  </form>
</section> -->



<section class="facilities-header">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Get in touch with us for bookings, inquiries, or any assistance</p>
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


<?php
// ==================== PHP Email Handler ====================

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name      = htmlspecialchars(trim($_POST['name']));
    $email     = htmlspecialchars(trim($_POST['email']));
    $phone     = htmlspecialchars(trim($_POST['phone']));
    $country   = htmlspecialchars(trim($_POST['country']));
    $arrival   = htmlspecialchars(trim($_POST['arrival']));
    $departure = htmlspecialchars(trim($_POST['departure']));
    $requests  = htmlspecialchars(trim($_POST['requests']));

    // Recipient email (replace with your own)
    $to = "info@hoteljeevak.com";
    $subject = "New Booking Inquiry from $name - Hotel Jeevak International";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email message body
    $message = "
    <html>
    <body style='font-family:Arial,sans-serif;'>
        <h2 style='color:#c59d5f;'>New Booking Inquiry - Hotel Jeevak International</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Arrival Date:</strong> $arrival</p>
        <p><strong>Departure Date:</strong> $departure</p>
        <p><strong>Special Requests:</strong> $requests</p>
        <br>
        <p style='color:#555;'>This message was sent from the contact form on your website.</p>
    </body>
    </html>";

    // Attempt to send email
    if (mail($to, $subject, $message, $headers)) {
        $success_message = "✅ Your booking inquiry has been sent successfully! We’ll contact you within 24 hours.";
    } else {
        $error_message = "❌ Sorry, your message could not be sent. Please try again later or contact us directly.";
    }
}
?>

<!-- =================== CONTACT SECTION =================== -->
<section class="contact-section" style="padding:80px 0; background:linear-gradient(135deg, #fffaf3, #f7f2e7);">
    <div class="container" style="max-width:1200px; margin:auto;">

        <!-- <div style="text-align:center; margin-bottom:50px;">
            <h2 style="font-size:38px; font-weight:800; color:#c59d5f;">Contact Us</h2>
            <p style="font-size:17px; color:#555;">
                Get in touch with us for bookings, inquiries, or assistance.<br>
                We’re always here to make your stay peaceful and memorable at <strong>Hotel Jeevak International,
                    Bodhgaya.</strong>
            </p>
        </div> -->

        <!-- Alert Messages -->
        <?php if (!empty($success_message)): ?>
        <div
            style="background:#e7f9ed; color:#2a7c3e; border-left:5px solid #2a7c3e; padding:15px; margin-bottom:25px; border-radius:6px;">
            <?php echo $success_message; ?>
        </div>
        <?php elseif (!empty($error_message)): ?>
        <div
            style="background:#fdecea; color:#a12626; border-left:5px solid #a12626; padding:15px; margin-bottom:25px; border-radius:6px;">
            <?php echo $error_message; ?>
        </div>
        <?php endif; ?>

        <!-- Info Cards -->
        <div class="contact-cards"
            style="display:flex; flex-wrap:wrap; gap:25px; justify-content:center; margin-bottom:50px;">
            <div class="contact-card">
                <div style="font-size:40px; color:#c59d5f; margin-bottom:10px;">📞</div>
                <h3>Phone</h3>
                <p style="color:#c59d5f; font-weight:600;">+91-07208913724</p>
                <p>Available 24/7</p>
            </div>

            <div class="contact-card">
                <div style="font-size:40px; color:#c59d5f; margin-bottom:10px;">✉️</div>
                <h3>Email</h3>
                <p style="color:#c59d5f; font-weight:600;">info@hoteljeevak.com</p>
                <p>We’ll respond within 24 hours</p>
            </div>

            <div class="contact-card">
                <div style="font-size:40px; color:#c59d5f; margin-bottom:10px;">📍</div>
                <h3>Address</h3>
                <p>Near Mahabodhi Temple, Bodhgaya – 824231<br>Bihar, India</p>
                <p style="font-size:14px; color:#777;">0.4 km from Mahabodhi Temple</p>
            </div>
        </div>

        <!-- Form and Map -->
        <div class="contact-form-map" style="display:flex; flex-wrap:wrap; gap:30px; justify-content:space-between;">

            <!-- Booking Form -->
            <form method="POST" action="" class="contact-form">
                <h3>Book Your Stay</h3>

                <label>Full Name *</label>
                <input type="text" name="name" required placeholder="Enter your full name">

                <label>Email *</label>
                <input type="email" name="email" required placeholder="your@email.com">

                <label>Phone *</label>
                <input type="tel" name="phone" required placeholder="+91 1234567890">

                <label>Country *</label>
                <input type="text" name="country" required placeholder="Enter your country">

                <div style="display:flex; gap:15px;">
                    <div style="flex:1;">
                        <label>Arrival Date *</label>
                        <input type="date" name="arrival" required>
                    </div>
                    <div style="flex:1;">
                        <label>Departure Date *</label>
                        <input type="date" name="departure" required>
                    </div>
                </div>

                <label>Special Requests</label>
                <textarea name="requests" placeholder="Any special requirements or requests?"></textarea>

                <button type="submit" class="book-btn">Submit Booking Inquiry</button>
            </form>

            <!-- Map -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps?q=Mahabodhi+Temple+Bodhgaya&output=embed" width="100%"
                    height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>
        </div>

        <!-- ================= RECEPTION & TRAVEL INFO ================= -->
        <div class="info-grid">

            <div class="info-card">
                <h4>Reception Hours</h4>
                <ul>
                    <li><strong>Front Desk:</strong> 24/7 Available</li>
                    <li><strong>Check-in:</strong> 12:00 PM</li>
                    <li><strong>Check-out:</strong> 11:00 AM</li>
                    <li><strong>Restaurant:</strong> 7:00 AM - 10:30 PM</li>
                </ul>
            </div>

            <div class="info-card">
                <h4>Getting Here</h4>
                <ul>
                    <li><strong>From Airport:</strong> 10 km from Gaya International Airport (approx. 20 mins)</li>
                    <li><strong>From Railway:</strong> 15 km from Gaya Railway Station (approx. 30 mins)</li>
                    <li><strong>Local Transport:</strong> Auto-rickshaws and taxis readily available</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ================= STYLES ================= -->
<style>
.contact-card,
.info-card {
    flex: 1;
    min-width: 300px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    text-align: center;
    padding: 30px;
    transition: transform .4s ease;
}

.contact-card:hover,
.info-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.contact-form {
    flex: 1;
    min-width: 350px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    padding: 40px;
}

.contact-form h3 {
    font-size: 24px;
    font-weight: 700;
    color: #c59d5f;
    margin-bottom: 20px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #ddd;
    margin-bottom: 15px;
    font-size: 15px;
}

.contact-form button {
    width: 100%;
    padding: 14px;
    background: linear-gradient(90deg, #d7a654, #c59d5f);
    border: none;
    color: #fff;
    font-weight: 700;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
}

.contact-form button:hover {
    background: linear-gradient(90deg, #c59d5f, #d7a654);
}

.map-container {
    flex: 1;
    min-width: 350px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.info-grid {
    margin-top: 60px;
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: space-between;
}

.info-card h4 {
    font-size: 22px;
    font-weight: 700;
    color: #c59d5f;
    margin-bottom: 15px;
}

.info-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
    line-height: 1.8;
    color: #555;
    font-size: 16px;
    text-align: left;
}

@media (max-width:768px) {

    .contact-form-map,
    .info-grid {
        flex-direction: column;
    }
}

.book-btn {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    font-size: 17px;
    cursor: pointer;
    color: #fff;
    background: linear-gradient(90deg, #d7a654, #c59d5f);
    box-shadow: 0 4px 12px rgba(197, 157, 95, 0.4);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

/* Hover Animation */
.book-btn:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 8px 22px rgba(197, 157, 95, 0.55);
    background: linear-gradient(90deg, #c59d5f, #d7a654);
}

/* Golden Shine Effect */
.book-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg,
            transparent,
            rgba(255, 255, 255, 0.6),
            transparent);
    transition: all 0.8s ease;
}

.book-btn:hover::before {
    left: 100%;
}

/* Optional focus animation for accessibility */
.book-btn:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(197, 157, 95, 0.4);
}
</style>




<?php include __DIR__ . '/includes/footer.php'; ?>