<?php
// =================== SIDEMENU =================== //
?>

<!-- Sidebar Section -->
<aside class="sidebar">
    <div class="sidebar-container">

        <h3 class="sidebar-title">Buddhism Guide</h3>
        <ul class="sidebar-menu">
            <li><a href="bodhgaya.php">Lord Buddha & His Life</a></li>
            <li><a href="what.php">What is Buddhism</a></li>
            <li><a href="advent.php">The Advent of Buddhism</a></li>
            <li><a href="history.php">The History of Buddhism</a></li>
            <li><a href="budhindia.php">Buddhism Outside India</a></li>
            <li><a href="religion.php">The Buddhist Religion</a></li>
            <li><a href="architecture.php">The Buddhist Architecture</a></li>
            <li><a href="buddhism_after.php">Buddhism After Buddha</a></li>
        </ul>

        <h3 class="sidebar-title">More On Bodh Gaya</h3>
        <ul class="sidebar-menu">
            <li><a href="bodhgaya.php">Bodhgaya Overview</a></li>
            <li><a href="desitination.php">Buddhist Destinations</a></li>
            <li><a href="temples.php">Buddhist Temples</a></li>
            <!-- <li><a href="#">Buddhist Caves</a></li> -->
        </ul>

        <h3 class="sidebar-title">Information</h3>
        <ul class="sidebar-menu">
            <li><a href="reach.php">How to Reach Bodhgaya</a></li>
            <li><a href="climate.php">Magadh Climate</a></li>
            <!-- <li><a href="#">Buddha Gallery</a></li> -->
        </ul>
    </div>
</aside>

<!-- ============= SIDEBAR STYLES ============= -->
<style>
.sidebar {
    flex: 0 0 280px;
    background: #fffdf8;
    border-radius: 14px;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
    height: fit-content;
    position: relative;
    /* top: 100px; */
}

.sidebar-container {
    padding: 20px 0;
}

.bodhgaya-sidebar {
    flex: 0 0 260px;
    position: sticky;
    top: 100px;
    height: fit-content;
    z-index: 5;
}

.sidebar-title {
    background: linear-gradient(90deg, #e67e22, #f57c00);
    color: #fff;
    text-align: center;
    padding: 12px;
    margin: 0;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-menu li {
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.sidebar-menu li a {
    display: block;
    padding: 10px 18px;
    text-decoration: none;
    color: #333;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
}

.sidebar-menu li a::before {
    content: "›";
    position: absolute;
    left: 10px;
    opacity: 0;
    transition: all 0.3s ease;
}

.sidebar-menu li a:hover {
    background: #f57c00;
    color: #fff;
    padding-left: 26px;
}

.sidebar-menu li a:hover::before {
    opacity: 1;
    color: #fff;
}

/* Responsive */
@media (max-width: 900px) {
    .sidebar {
        width: 100%;
        position: relative;
        top: 0;
    }
}
</style>