<?php
// slide.php — Hero banner + Map section for Hotel Jeevak
if(!isset($base)) {
  $base = rtrim(dirname($_SERVER['PHP_SELF']), '/');
  
}
?>



<--Hero Section -->
    <section class="hero">
        <div class="hero-bg" style="background-image:url('<?php echo $base; ?>/assets/images/hero.jpg')"></div>
        <div class="hero-content">
            <div class="badge">📍 Near Mahabodhi Temple, Bodhgaya</div>
            <h1>Welcome to <span class="accent">Hotel Jeevak</span></h1>
            <h2>International</h2>
            <p>Experience peace, comfort, and spirituality in the heart of Bodhgaya. Your spiritual journey begins here.
            </p>
            <div class="actions">
                <a class="primary" href="<?php echo $base; ?>/booking.php">Book Your Stay</a>
                <a class="ghost" href="<?php echo $base; ?>/rooms.php">Explore Rooms</a>
            </div>
        </div>
    </section>

    <!-- Google Map Section -->
    <section class="container" style="margin-top:50px;">
        <h2 class="section-title">Find Us on the Map</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.0045662296425!2d84.99143147535476!3d24.69510697805668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f32cf93329e7f7%3A0x89f55e883d5f60c2!2sMahabodhi%20Temple%2C%20Bodh%20Gaya%2C%20Bihar%20824131!5e0!3m2!1sen!2sin!4v1738912345678!5m2!1sen!2sin"
            width="100%" height="400" style="border:0;border-radius:10px;" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>