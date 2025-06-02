
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p><i class="fa-solid fa-envelope"></i> Email Id : <a href="mailto:info@ewasterecyclersindia.com">info@ewasterecyclersindia.com</a> | <i class="fa-solid fa-phone"></i> Contact No. : <a href="tel:+917400055174">+91 74000 55174</a></p>
            </div>
            <div class="col-5 right">
                <div class="call-us">
                    <span class="call">
                        <a href="https://api.whatsapp.com/send?phone=917400055174&text=Hello%20," target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp Us</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="https://www.ewasterecyclersindia.com/images/eco-birdd-recycling.png"
                    alt="E-waste Recyclers India" title="E-waste Recyclers India"></a>
        </div>
        <div class="menu-toggle">&#9776;</div>
        <nav class="menu">
            <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about-us.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : '' ?>">About
                Us</a>
            <!-- Services Dropdown -->
            <div class="dropdown">
                <a href="#"
                    class="dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['weee-recycling.php', 'reverse-logistics.php', 'data-destruction.php', 'asset-management.php', 'data-wiping.php', 'extended-producer-responsibility.php', 'e-waste-management.php', 'e-waste-disposal.php']) ? 'active' : '' ?>">Our
                    Services</a>
                <ul class="dropdown-menu">
                    <li><a href="weee-recycling.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'weee-recycling.php' ? 'active' : '' ?>">WEEE
                            Recycling</a></li>
                    <li><a href="reverse-logistics.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'reverse-logistics.php' ? 'active' : '' ?>">Reverse
                            Logistics</a></li>
                    <li><a href="data-destruction.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'data-destruction.php' ? 'active' : '' ?>">Data
                            Destruction</a></li>
                    <li><a href="asset-management.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'asset-management.php' ? 'active' : '' ?>">Asset
                            Management</a></li>
                    <li><a href="data-wiping.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'data-wiping.php' ? 'active' : '' ?>">Data
                            Wiping</a></li>
                    <li><a href="extended-producer-responsibility.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'extended-producer-responsibility.php' ? 'active' : '' ?>">Extended
                            Producer Responsibility</a></li>
                    <li><a href="e-waste-management.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'e-waste-management.php' ? 'active' : '' ?>">E-Waste
                            Management</a></li>
                    <li><a href="e-waste-disposal.php"
                            class="<?= basename($_SERVER['PHP_SELF']) == 'e-waste-disposal.php' ? 'active' : '' ?>">E-Waste
                            Disposal</a></li>
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
        <a href="#" class="cta-button"><i class="fa-solid fa-file-pdf"></i> E-waste Guidelines</a>
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
                class="dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['weee-recycling.php', 'reverse-logistics.php', 'data-destruction.php', 'asset-management.php', 'data-wiping.php', 'extended-producer-responsibility.php', 'e-waste-management.php', 'e-waste-disposal.php']) ? 'active' : '' ?>">Our
                Services</a>
            <div class="dropdown-menu">
                <li><a href="weee-recycling.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'weee-recycling.php' ? 'active' : '' ?>">WEEE
                        Recycling</a></li>
                <li><a href="reverse-logistics.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'reverse-logistics.php' ? 'active' : '' ?>">Reverse
                        Logistics</a></li>
                <li><a href="data-destruction.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'data-destruction.php' ? 'active' : '' ?>">Data
                        Destruction</a></li>
                <li><a href="asset-management.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'asset-management.php' ? 'active' : '' ?>">Asset
                        Management</a></li>
                <li><a href="data-wiping.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'data-wiping.php' ? 'active' : '' ?>">Data
                        Wiping</a></li>
                <li><a href="extended-producer-responsibility.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'extended-producer-responsibility.php' ? 'active' : '' ?>">Extended
                        Producer Responsibility</a></li>
                <li><a href="e-waste-management.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'e-waste-management.php' ? 'active' : '' ?>">E-Waste
                        Management</a></li>
                <li><a href="e-waste-disposal.php"
                        class="<?= basename($_SERVER['PHP_SELF']) == 'e-waste-disposal.php' ? 'active' : '' ?>">E-Waste
                        Disposal</a></li>
            </div>
        </div>

        <a href="images.php" class="<?= basename($_SERVER['PHP_SELF']) == 'images.php' ? 'active' : '' ?>">Images</a>
        <a href="videos.php" class="<?= basename($_SERVER['PHP_SELF']) == 'videos.php' ? 'active' : '' ?>">Videos</a>
        <a href="blogs.php" class="<?= basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : '' ?>">Blogs</a>
        <a href="contact-us.php"
            class="<?= basename($_SERVER['PHP_SELF']) == 'contact-us.php' ? 'active' : '' ?>">Contact Us</a>
    </div>
</div>