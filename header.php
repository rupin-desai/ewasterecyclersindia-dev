<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p>Responsible E-waste Recycling for a Sustainable Future</p>
            </div>
            <div class="col-5 right">
                <div class="call-us">
                    <span class="call">
                        <a href="tel:+911234567890"><i class="fa-solid fa-mobile"></i> +91 1234 567 890</a>
                    </span>
                </div>
                <ul class="social-links">
                    <li>
                        <a href="" traget="_blank" class="facebook" previewlistener="true">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" traget="_blank" class="instagram" previewlistener="true">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="youtube" previewlistener="true">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="E-waste Recyclers India"
                    title="E-waste Recyclers India"></a>
        </div>
        <div class="menu-toggle">&#9776;</div>
        <nav class="menu">
            <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about-us.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : '' ?>">About
                Us</a>
            <!-- Pest Control with Dropdown -->
            <div class="dropdown">
                <a href="#"
                    class="dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['pleated-mosquito-net.php', 'invisible-grill.php', 'roller-blinds.php', 'accordion-door.php', 'bird-spikes.php', 'bird-net.php', 'zebra-blinds.php', 'wooden-venetian-blinds.php', 'sound-proof-window.php', 'aluminium-mosquito-net-door.php', 'zip-screen.php']) ? 'active' : '' ?>">Our
                    Services</a>
                <ul class="dropdown-menu">
                    <li><a href="pleated-mosquito-net.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'pleated-mosquito-net.php' ? 'active' : '' ?>">Pleated
                            Mosquito Net</a></li>
                    <li><a href="invisible-grill.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'invisible-grill.php' ? 'active' : '' ?>">Invisible
                            Grill</a></li>
                    <li><a href="roller-blinds.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'roller-blinds.php' ? 'active' : '' ?>">Roller
                            Blinds</a></li>
                    <li><a href="accordion-door.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'accordion-door.php' ? 'active' : '' ?>">Accordion
                            Door</a></li>
                    <li><a href="bird-spikes.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'bird-spikes.php' ? 'active' : '' ?>">Bird
                            Spikes</a></li>
                    <li><a href="bird-net.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'bird-net.php' ? 'active' : '' ?>">Bird Net</a>
                    </li>
                    <li><a href="zebra-blinds.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'zebra-blinds.php' ? 'active' : '' ?>">Zebra
                            Blinds</a></li>
                    <li><a href="wooden-venetian-blinds.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'wooden-venetian-blinds.php' ? 'active' : '' ?>">Wooden
                            Venetian Blinds</a></li>
                    <li><a href="sound-proof-window.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'sound-proof-window.php' ? 'active' : '' ?>">Sound
                            Proof Window</a></li>
                    <li><a href="aluminium-mosquito-net-door.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'aluminium-mosquito-net-door.php' ? 'active' : '' ?>">Aluminium
                            Mosquito Net Door</a></li>
                    <li><a href="zip-screen.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'zip-screen.php' ? 'active' : '' ?>">Zip
                            Screen</a></li>
                </ul>
            </div>

            <a href="images.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'images.php' ? 'active' : '' ?>">Images</a>
            <a href="videos.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'videos.php' ? 'active' : '' ?>">Videos</a>
            <a href="blogs.php" class="<?= basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : '' ?>">Blogs</a>
            <a href="contact-us.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'contact-us.php' ? 'active' : '' ?>">Contact</a>
        </nav>
        <a href="#" download class="cta-button"><i class="fa-solid fa-download"></i> Download Catalogue</a>
    </div>
</header>

<!-- Off-canvas Menu -->
<div class="off-canvas" id="offCanvasMenu">
    <span class="close-btn" id="closeMenu">&times;</span>
    <div class="menu">
        <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
        <a href="about-us.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : '' ?>">About
            Us</a>

        <!-- Services with Dropdown in Off-Canvas Menu -->
        <div class="dropdown">
            <a href="#"
                class="dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['e-waste-collection.php', 'data-destruction.php', 'it-asset-management.php', 'corporate-recycling.php', 'ewaste-awareness.php']) ? 'active' : '' ?>">Our
                Services</a>
            <div class="dropdown-menu">
                <li><a href="e-waste-collection.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'e-waste-collection.php' ? 'active' : '' ?>">E-waste
                        Collection</a></li>
                <li><a href="data-destruction.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'data-destruction.php' ? 'active' : '' ?>">Secure
                        Data Destruction</a></li>
                <li><a href="it-asset-management.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'it-asset-management.php' ? 'active' : '' ?>">IT
                        Asset Management</a></li>
                <li><a href="corporate-recycling.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'corporate-recycling.php' ? 'active' : '' ?>">Corporate
                        Recycling Programs</a></li>
                <li><a href="ewaste-awareness.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'ewaste-awareness.php' ? 'active' : '' ?>">E-waste
                        Awareness</a></li>
            </div>
        </div>


        <a href="images.php" class="<?= basename($_SERVER['PHP_SELF']) == 'images.php' ? 'active' : '' ?>">Images</a>
        <a href="videos.php" class="<?= basename($_SERVER['PHP_SELF']) == 'videos.php' ? 'active' : '' ?>">Videos</a>
        <!--<a href="blogs.php" class="<?= basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : '' ?>">Blogs</a>-->
        <a href="contact-us.php"
            class="<?= basename($_SERVER['PHP_SELF']) == 'contact-us.php' ? 'active' : '' ?>">Contact Us</a>
    </div>
</div>