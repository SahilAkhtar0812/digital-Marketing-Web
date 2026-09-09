```php
<?php

$pageTitle =
    "Services | SD Media Tech - Digital Marketing Agency";

$pageDescription =
    "Explore our digital marketing services including Google Ads, Meta Ads, SEO, social media marketing, website development, landing pages and conversion optimization.";

include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/navbar.php";

?>

<main>

    <!-- =========================================
         SERVICES HERO
    ========================================== -->

    <section class="services-page-hero">

        <div class="container services-hero-grid">

            <div class="services-hero-content">

                <span class="section-kicker">
                    OUR SERVICES
                </span>

                <h1>
                    Digital solutions built to
                    <span>grow your business.</span>
                </h1>

                <p>
                    From paid advertising to SEO, social media,
                    landing pages and website development,
                    we build digital systems designed around
                    visibility, leads and conversions.
                </p>

                <div class="services-hero-actions">

                    <a
                        href="contact.php"
                        class="button button-primary"
                    >
                        Discuss Your Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a
                        href="#demo-projects"
                        class="button button-secondary"
                    >
                        View Demo Projects
                    </a>

                </div>

            </div>


            <div class="services-hero-visual">

                <div class="services-visual-card">

                    <span class="services-visual-label">
                        DIGITAL GROWTH SYSTEM
                    </span>

                    <h2>
                        Reach.
                        <br>
                        Engage.
                        <br>
                        <span>Convert.</span>
                    </h2>

                    <div class="services-visual-tags">

                        <span>Google Ads</span>
                        <span>Meta Ads</span>
                        <span>SEO</span>
                        <span>Social Media</span>
                        <span>Websites</span>
                        <span>Analytics</span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         SERVICES OVERVIEW
    ========================================== -->

    <section class="section services-overview">

        <div class="container">

            <div class="section-intro">

                <div>

                    <span class="section-kicker">
                        WHAT WE DO
                    </span>

                    <h2>
                        Everything your digital presence needs.
                    </h2>

                </div>

                <div class="section-intro-right">

                    <p>
                        We combine strategy, marketing,
                        creative and development so your
                        digital channels work together.
                    </p>

                </div>

            </div>


            <div class="services-page-grid">


                <!-- =================================
                     SERVICE 01
                ================================== -->

                <article
                    class="services-page-card"
                    id="performance"
                >

                    <div class="service-image">

                        <img
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=85"
                            alt="Performance marketing analytics dashboard"
                            loading="lazy"
                        >

                        <span class="services-card-number">
                            01
                        </span>

                        <span class="service-image-label">
                            PERFORMANCE
                        </span>

                    </div>


                    <div class="services-card-content">

                        <h3>
                            Performance Marketing
                        </h3>

                        <p>
                            Paid advertising campaigns designed
                            to generate enquiries, leads and sales
                            across high-intent digital channels.
                        </p>

                        <ul>

                            <li>Google Search Ads</li>
                            <li>Google Display Campaigns</li>
                            <li>Meta Facebook Ads</li>
                            <li>Instagram Advertising</li>
                            <li>Lead Generation Campaigns</li>
                            <li>Remarketing</li>

                        </ul>

                    </div>

                </article>


                <!-- =================================
                     SERVICE 02
                ================================== -->

                <article
                    class="services-page-card"
                    id="seo"
                >

                    <div class="service-image">

                        <img
                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=85"
                            alt="SEO analytics and organic growth dashboard"
                            loading="lazy"
                        >

                        <span class="services-card-number">
                            02
                        </span>

                        <span class="service-image-label">
                            SEO
                        </span>

                    </div>


                    <div class="services-card-content">

                        <h3>
                            SEO & Organic Growth
                        </h3>

                        <p>
                            Improve your search visibility and
                            help potential customers discover
                            your business through Google.
                        </p>

                        <ul>

                            <li>Website SEO Audit</li>
                            <li>Keyword Research</li>
                            <li>On-Page SEO</li>
                            <li>Technical SEO</li>
                            <li>Local SEO</li>
                            <li>Content Strategy</li>

                        </ul>

                    </div>

                </article>


                <!-- =================================
                     SERVICE 03
                ================================== -->

                <article
                    class="services-page-card"
                    id="social"
                >

                    <div class="service-image">

                        <img
                            src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1200&q=85"
                            alt="Social media marketing content creation"
                            loading="lazy"
                        >

                        <span class="services-card-number">
                            03
                        </span>

                        <span class="service-image-label">
                            SOCIAL MEDIA
                        </span>

                    </div>


                    <div class="services-card-content">

                        <h3>
                            Social Media Marketing
                        </h3>

                        <p>
                            Build a stronger online presence
                            with consistent content, campaigns
                            and audience engagement.
                        </p>

                        <ul>

                            <li>Social Media Strategy</li>
                            <li>Instagram Management</li>
                            <li>Facebook Management</li>
                            <li>Creative Content</li>
                            <li>Reels & Short Content</li>
                            <li>Community Engagement</li>

                        </ul>

                    </div>

                </article>


                <!-- =================================
                     SERVICE 04
                ================================== -->

                <article
                    class="services-page-card"
                    id="web"
                >

                    <div class="service-image">

                        <img
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85"
                            alt="Website development and coding workspace"
                            loading="lazy"
                        >

                        <span class="services-card-number">
                            04
                        </span>

                        <span class="service-image-label">
                            DEVELOPMENT
                        </span>

                    </div>


                    <div class="services-card-content">

                        <h3>
                            Website Development
                        </h3>

                        <p>
                            Professional websites designed
                            to communicate your brand clearly
                            and turn visitors into enquiries.
                        </p>

                        <ul>

                            <li>Business Websites</li>
                            <li>PHP Websites</li>
                            <li>Landing Pages</li>
                            <li>Responsive Development</li>
                            <li>Website Redesign</li>
                            <li>Conversion-Focused UI</li>

                        </ul>

                    </div>

                </article>


                <!-- =================================
                     SERVICE 05
                ================================== -->

                <article class="services-page-card">

                    <div class="service-image">

                        <img
                            src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=1200&q=85"
                            alt="Creative branding and design workspace"
                            loading="lazy"
                        >

                        <span class="services-card-number">
                            05
                        </span>

                        <span class="service-image-label">
                            CREATIVE
                        </span>

                    </div>


                    <div class="services-card-content">

                        <h3>
                            Creative & Branding
                        </h3>

                        <p>
                            Visual and communication assets
                            that help your business appear
                            professional and consistent online.
                        </p>

                        <ul>

                            <li>Brand Communication</li>
                            <li>Campaign Creatives</li>
                            <li>Social Media Graphics</li>
                            <li>Ad Creative Design</li>
                            <li>Landing Page Design</li>
                            <li>Content Direction</li>

                        </ul>

                    </div>

                </article>


                <!-- =================================
                     SERVICE 06
                ================================== -->

                <article class="services-page-card">

                    <div class="service-image">

                        <img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85"
                            alt="Marketing analytics and conversion strategy"
                            loading="lazy"
                        >

                        <span class="services-card-number">
                            06
                        </span>

                        <span class="service-image-label">
                            ANALYTICS
                        </span>

                    </div>


                    <div class="services-card-content">

                        <h3>
                            Analytics & Conversion
                        </h3>

                        <p>
                            Understand how visitors interact
                            with your marketing and identify
                            opportunities to improve results.
                        </p>

                        <ul>

                            <li>Website Analytics</li>
                            <li>Conversion Tracking</li>
                            <li>Campaign Reporting</li>
                            <li>Landing Page Analysis</li>
                            <li>Funnel Optimization</li>
                            <li>CRO Recommendations</li>

                        </ul>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================
         HOW WE WORK
    ========================================== -->

    <section class="section services-process">

        <div class="container">

            <div class="section-heading-center">

                <span class="section-kicker">
                    HOW WE WORK
                </span>

                <h2>
                    A simple process from idea to execution.
                </h2>

            </div>


            <div class="services-process-grid">


                <div class="services-process-item">

                    <span>01</span>

                    <h3>
                        Understand
                    </h3>

                    <p>
                        We learn about your business,
                        audience and current marketing.
                    </p>

                </div>


                <div class="services-process-item">

                    <span>02</span>

                    <h3>
                        Plan
                    </h3>

                    <p>
                        We identify the right channels,
                        messaging and digital strategy.
                    </p>

                </div>


                <div class="services-process-item">

                    <span>03</span>

                    <h3>
                        Build
                    </h3>

                    <p>
                        Campaigns, creatives, landing pages
                        or websites are prepared for launch.
                    </p>

                </div>


                <div class="services-process-item">

                    <span>04</span>

                    <h3>
                        Improve
                    </h3>

                    <p>
                        We review performance and improve
                        what can generate better results.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         DEMO PROJECTS
    ========================================== -->

    <section
        class="section demo-projects"
        id="demo-projects"
    >

        <div class="container">

            <div class="section-intro">

                <div>

                    <span class="section-kicker">
                        DEMO PROJECTS
                    </span>

                    <h2>
                        A few examples of
                        <span>our development work.</span>
                    </h2>

                </div>

                <div class="section-intro-right">

                    <p>
                        These are demo project cards.
                        You can add your GitHub,
                        Netlify or live website links later.
                    </p>

                </div>

            </div>


            <div class="demo-project-grid">


                <!-- PROJECT 01 -->

                <article class="demo-project-card">

                    <div class="demo-project-preview project-preview-purple">

                        <div class="project-browser">

                            <div class="browser-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-content">

                                <i class="fa-solid fa-chart-simple"></i>

                                <strong>
                                    Marketing Landing Page
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="demo-project-content">

                        <span class="project-type">
                            LANDING PAGE
                        </span>

                        <h3>
                            Performance Marketing Landing Page
                        </h3>

                        <p>
                            Responsive lead-generation landing
                            page designed for paid advertising campaigns.
                        </p>

                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                        </div>

                        <a href="#" class="project-link">
                            View Project
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 02 -->

                <article class="demo-project-card">

                    <div class="demo-project-preview project-preview-green">

                        <div class="project-browser">

                            <div class="browser-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-content">

                                <i class="fa-solid fa-building"></i>

                                <strong>
                                    Corporate Website
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="demo-project-content">

                        <span class="project-type">
                            BUSINESS WEBSITE
                        </span>

                        <h3>
                            Corporate Business Website
                        </h3>

                        <p>
                            A clean and professional multi-section
                            website for a service-based company.
                        </p>

                        <div class="project-tech">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>CSS</span>
                        </div>

                        <a href="#" class="project-link">
                            View Project
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 03 -->

                <article class="demo-project-card">

                    <div class="demo-project-preview project-preview-orange">

                        <div class="project-browser">

                            <div class="browser-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-content">

                                <i class="fa-solid fa-cart-shopping"></i>

                                <strong>
                                    Ecommerce Store
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="demo-project-content">

                        <span class="project-type">
                            ECOMMERCE
                        </span>

                        <h3>
                            Ecommerce Product Website
                        </h3>

                        <p>
                            Product listing, category navigation
                            and customer-focused shopping interface.
                        </p>

                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <a href="#" class="project-link">
                            View Project
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 04 -->

                <article class="demo-project-card">

                    <div class="demo-project-preview project-preview-blue">

                        <div class="project-browser">

                            <div class="browser-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-content">

                                <i class="fa-solid fa-graduation-cap"></i>

                                <strong>
                                    Learning Platform
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="demo-project-content">

                        <span class="project-type">
                            WEB APPLICATION
                        </span>

                        <h3>
                            Online Learning Platform
                        </h3>

                        <p>
                            Course browsing interface with
                            categories, filters and learning content.
                        </p>

                        <div class="project-tech">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                        </div>

                        <a href="#" class="project-link">
                            View Project
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 05 -->

                <article class="demo-project-card">

                    <div class="demo-project-preview project-preview-dark">

                        <div class="project-browser">

                            <div class="browser-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-content">

                                <i class="fa-solid fa-chart-pie"></i>

                                <strong>
                                    Admin Dashboard
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="demo-project-content">

                        <span class="project-type">
                            DASHBOARD
                        </span>

                        <h3>
                            Business Admin Dashboard
                        </h3>

                        <p>
                            Admin interface for managing
                            products, users and business information.
                        </p>

                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>

                        <a href="#" class="project-link">
                            View Project
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 06 -->

                <article class="demo-project-card">

                    <div class="demo-project-preview project-preview-pink">

                        <div class="project-browser">

                            <div class="browser-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-content">

                                <i class="fa-solid fa-bullhorn"></i>

                                <strong>
                                    Campaign Website
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="demo-project-content">

                        <span class="project-type">
                            CAMPAIGN
                        </span>

                        <h3>
                            Lead Generation Campaign Page
                        </h3>

                        <p>
                            Mobile-focused marketing page
                            designed around a clear campaign CTA.
                        </p>

                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>Tracking</span>
                        </div>

                        <a href="#" class="project-link">
                            View Project
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================
         FINAL CTA
    ========================================== -->

    <section class="final-cta">

        <div class="container">

            <div class="final-cta-box">

                <div>

                    <span class="cta-label">
                        NEED DIGITAL SUPPORT?
                    </span>

                    <h2>
                        Let's build the right solution for your business.
                    </h2>

                    <p>
                        Tell us what you want to achieve
                        and we'll discuss the right approach.
                    </p>

                </div>

                <a
                    href="contact.php"
                    class="cta-button"
                >
                    Start a Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>

</main>


<?php

include __DIR__ . "/includes/footer.php";

?>

