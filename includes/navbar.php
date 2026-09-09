<?php

$currentPage = basename($_SERVER['PHP_SELF']);

?>

<header
    class="site-header"
    id="siteHeader"
>

    <div class="container navbar">


        <!-- Logo -->

        <a
            href="index.php"
            class="brand"
            aria-label="SD MEDIA TECH home"
        >

            <span class="brand-mark">
                <i class="fa fa-sort-desc" aria-hidden="true"></i>   

            </span>

            <span class="brand-name">
                SD MEDIA<span> TECH</span>
            </span>

        </a>


        <!-- Desktop Navigation -->

        <nav
            class="nav-menu"
            id="navMenu"
        >

            <a
                href="index.php"
                class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>"
            >
                Home
            </a>


            <a
                href="about.php"
                class="<?php echo $currentPage === 'about.php' ? 'active' : ''; ?>"
            >
                About
            </a>


            <a
                href="services.php"
                class="<?php echo $currentPage === 'services.php' ? 'active' : ''; ?>"
            >
                Services
            </a>


            <a
                href="case-studies.php"
                class="<?php echo $currentPage === 'case-studies.php' ? 'active' : ''; ?>"
            >
                Our Work
            </a>


            <a
                href="contact.php"
                class="<?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>"
            >
                Contact
            </a>

        </nav>


        <!-- Right -->

        <div class="nav-actions">

            <a
                href="contact.php"
                class="nav-button"
            >

                Start a Project

                <i class="fa-solid fa-arrow-right"></i>

            </a>


            <button
                type="button"
                class="mobile-menu-button"
                id="mobileMenuButton"
                aria-label="Open navigation"
                aria-expanded="false"
            >

                <i class="fa-solid fa-bars"></i>

            </button>

        </div>

    </div>

</header>