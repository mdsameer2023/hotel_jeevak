<?php include __DIR__ . '/includes/header.php'; ?>
<!-- <section class="container">
  <h2 class="section-title">Gallery</h2>
  <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center">
    <img src="<?php echo $base; ?>/assets/images/hero.jpg" style="width:320px;border-radius:8px">
    <img src="<?php echo $base; ?>/assets/images/room1.jpg" style="width:320px;border-radius:8px">
    <img src="<?php echo $base; ?>/assets/images/temple.jpg" style="width:320px;border-radius:8px">
  </div>
</section> -->



<!-- ================= Gallery Section ================= -->
<section class="facilities-header">
    <div class="content">
        <h2>Photo Gallery</h2>
        <p>Explore our beautiful hotel, comfortable rooms, and the spiritual atmosphere of Bodhgaya</p>
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



<!-- ================= GALLERY SECTION ================= -->
<section class="gallery-section" style="padding:80px 0; background:linear-gradient(135deg, #fffaf3, #f7f2e7);">
    <div class="container" style="max-width:1200px; margin:auto; text-align:center;">

        <h2 style="font-size:38px; font-weight:800; color:#c59d5f; margin-bottom:10px;">
            Explore Our Beautiful Hotel & Bodhgaya Attractions
        </h2>
        <p style="font-size:17px; color:#666; margin-bottom:40px;">
            Discover the luxury and spiritual essence of <strong>Hotel Jeevak International</strong> through our
            gallery.
        </p>

        <!-- Filter Buttons -->
        <div class="filter-buttons" style="margin-bottom:40px;">
            <button class="filter-btn active" data-filter="all">All Photos</button>
            <button class="filter-btn" data-filter="hotel">Hotel</button>
            <button class="filter-btn" data-filter="rooms">Rooms</button>
            <button class="filter-btn" data-filter="restaurant">Restaurant</button>
            <button class="filter-btn" data-filter="attractions">Attractions</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid"
            style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:25px;">

            <!-- Each Card -->
            <div class="gallery-item hotel"
                style="position:relative; overflow:hidden; border-radius:20px; box-shadow:0 4px 20px rgba(0,0,0,0.1); cursor:pointer;">
                <img src="<?php echo $base; ?>/image/hotel_jeevak3.jpg" alt="Hotel Jeevak International Front View"
                    style="width:100%; height:100%; object-fit:cover; transition:all 0.6s ease;">
                <div class="hover-overlay">
                    <h3>Hotel Front View</h3>
                </div>
            </div>

            <div class="gallery-item restaurant">
                <img src="<?php echo $base; ?>/image/info_image.jpg" alt="Restaurant at Hotel Jeevak International" />
                <div class="hover-overlay">
                    <h3>Restaurant</h3>
                </div>
            </div>

            <div class="gallery-item rooms">
                <img src="<?php echo $base; ?>/image/rooms/room4.jpg" alt="Luxury Room Bodhgaya" />
                <div class="hover-overlay">
                    <h3>Luxury Room</h3>
                </div>
            </div>

            <div class="gallery-item attractions">
                <img src="<?php echo $base; ?>/image/lordbudha.jpg" alt="Gautam Buddha" />
                <div class="hover-overlay">
                    <h3>Gautam Buddha</h3>
                </div>
            </div>

            <div class="gallery-item rooms">
                <img src="<?php echo $base; ?>/image/rooms/room8.jpg" alt="Deluxe Room Bodhgaya" />
                <div class="hover-overlay">
                    <h3>Deluxe Room</h3>
                </div>
            </div>

            <div class="gallery-item hotel">
                <img src="<?php echo $base; ?>/image/hotel_lobby.jpg" alt="Hotel Lobby Interior" />
                <div class="hover-overlay">
                    <h3>Hotel Lobby</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= GALLERY STYLES ================= -->
<style>
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 18px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    transition: transform .4s ease, box-shadow .4s ease;
}

.gallery-item img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    transition: transform .6s ease;
}

.gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.18);
}

.gallery-item:hover img {
    transform: scale(1.1);
    filter: brightness(0.8);
}

.hover-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.45);
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    opacity: 0;
    transition: opacity .5s ease;
}

.gallery-item:hover .hover-overlay {
    opacity: 1;
}

/* Filter Buttons */
.filter-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}

.filter-btn {
    padding: 10px 24px;
    border: none;
    border-radius: 25px;
    background: #f4ede0;
    color: #444;
    font-weight: 600;
    cursor: pointer;
    transition: all .3s ease;
}

.filter-btn.active,
.filter-btn:hover {
    background: #c59d5f;
    color: #fff;
}

@media (max-width: 768px) {
    .gallery-item {
        border-radius: 14px;
    }

    .hover-overlay h3 {
        font-size: 18px;
    }
}
</style>

<!-- ================= GALLERY SCRIPT ================= -->
<script>
// Filter Logic
const buttons = document.querySelectorAll('.filter-btn');
const items = document.querySelectorAll('.gallery-item');

buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        items.forEach(item => {
            if (filter === 'all' || item.classList.contains(filter)) {
                item.style.display = 'block';
                item.style.animation = 'fadeIn 0.5s ease';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }
}
</style>


<?php include __DIR__ . '/includes/footer.php'; ?>