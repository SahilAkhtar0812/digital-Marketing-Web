<?php

$pageTitle = "Contact SD Media Tech | Digital Marketing Agency";

$pageDescription =
    "Contact SD Media Tech for Google Ads, Meta Ads, SEO, social media marketing, landing pages and professional website development.";

$pageKeywords =
    "digital marketing agency, SEO, Google Ads, Meta Ads, website development, SD Media Tech";

$status = $_GET['status'] ?? '';

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/navbar.php';

?>


<main>

    <section class="contact-page-hero">

        <div class="container contact-page-grid">


            <!-- LEFT SIDE -->

            <div class="contact-page-content">

                <span class="section-kicker">
                    CONTACT US
                </span>


                <h1>
                    Let's grow your
                    <span>business together.</span>
                </h1>


                <p>
                    Looking for digital marketing, paid advertising,
                    SEO or website development? Tell us about your
                    requirements and we'll help you choose the right
                    strategy for your business.
                </p>


                <!-- CONTACT DETAILS -->

                <div class="contact-direct">


                    <!-- EMAIL -->

                    <a
                        href="mailto:akhtarsahil@gmail.com"
                        class="contact-direct-item"
                    >

                        <div class="contact-direct-icon">

                            <i class="fa-solid fa-envelope"></i>

                        </div>


                        <div>

                            <span>Email Us</span>

                            <strong>
                                akhtarsahil@gmail.com
                            </strong>

                        </div>

                    </a>



                    <!-- WHATSAPP -->

                    <a
                        href="https://wa.me/918218910225?text=Hi%20SD%20Media%20Tech%2C%20I%20want%20to%20discuss%20a%20project."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="contact-direct-item"
                    >

                        <div class="contact-direct-icon whatsapp-icon">

                            <i class="fa-brands fa-whatsapp"></i>

                        </div>


                        <div>

                            <span>WhatsApp</span>

                            <strong>
                                +91 82189 10225
                            </strong>

                        </div>

                    </a>

                </div>

            </div>



            <!-- RIGHT SIDE FORM -->

            <div class="contact-page-form">


                <span class="form-label">
                    START A CONVERSATION
                </span>


                <h2>
                    Tell us about your project.
                </h2>


                <p>
                    Fill in the form and we'll contact you as soon as possible.
                </p>



                <!-- SUCCESS MESSAGE -->

                <?php if ($status === 'success'): ?>

                    <div class="form-message success">

                        <i class="fa-solid fa-circle-check"></i>

                        <span>
                            Thank you! Your enquiry has been sent successfully.
                            We will contact you soon.
                        </span>

                    </div>

                <?php endif; ?>



                <!-- ERROR MESSAGE -->

                <?php if ($status === 'error'): ?>

                    <div class="form-message error">

                        <i class="fa-solid fa-circle-exclamation"></i>

                        <span>
                            Your enquiry could not be sent.
                            Please try again or contact us on WhatsApp.
                        </span>

                    </div>

                <?php endif; ?>



                <!-- CONTACT FORM -->

                <form
                    action="/website/send-contact.php"
                    method="POST"
                    class="contact-main-form"
                >


                    <!-- NAME + PHONE -->

                    <div class="contact-form-row">


                        <div class="contact-form-group">

                            <label for="name">
                                Your Name *
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                                maxlength="100"
                                autocomplete="name"
                                required
                            >

                        </div>



                        <div class="contact-form-group">

                            <label for="phone">
                                Phone Number *
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="+91 98765 43210"
                                maxlength="20"
                                autocomplete="tel"
                                required
                            >

                        </div>

                    </div>



                    <!-- EMAIL -->

                    <div class="contact-form-group">

                        <label for="email">
                            Email Address *
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            maxlength="150"
                            autocomplete="email"
                            required
                        >

                    </div>



                    <!-- COMPANY -->

                    <div class="contact-form-group">

                        <label for="company">
                            Company / Business
                        </label>

                        <input
                            type="text"
                            id="company"
                            name="company"
                            placeholder="Your company name"
                            maxlength="150"
                            autocomplete="organization"
                        >

                    </div>



                    <!-- SERVICE -->

                    <div class="contact-form-group">

                        <label for="service">
                            Service Required *
                        </label>


                        <select
                            id="service"
                            name="service"
                            required
                        >

                            <option value="">
                                Select a service
                            </option>

                            <option value="Google Ads">
                                Google Ads
                            </option>

                            <option value="Meta Ads">
                                Meta Ads
                            </option>

                            <option value="SEO">
                                Search Engine Optimization
                            </option>

                            <option value="Social Media Marketing">
                                Social Media Marketing
                            </option>

                            <option value="Website Development">
                                Website Development
                            </option>

                            <option value="Landing Page Development">
                                Landing Page Development
                            </option>

                            <option value="Lead Generation">
                                Lead Generation
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>



                    <!-- BUDGET -->

                    <div class="contact-form-group">

                        <label for="budget">
                            Approximate Budget
                        </label>


                        <select
                            id="budget"
                            name="budget"
                        >

                            <option value="">
                                Select your budget
                            </option>

                            <option value="Under ₹10,000">
                                Under ₹10,000
                            </option>

                            <option value="₹10,000 - ₹25,000">
                                ₹10,000 - ₹25,000
                            </option>

                            <option value="₹25,000 - ₹50,000">
                                ₹25,000 - ₹50,000
                            </option>

                            <option value="₹50,000 - ₹1,00,000">
                                ₹50,000 - ₹1,00,000
                            </option>

                            <option value="₹1,00,000+">
                                ₹1,00,000+
                            </option>

                            <option value="Not Sure">
                                Not Sure
                            </option>

                        </select>

                    </div>



                    <!-- MESSAGE -->

                    <div class="contact-form-group">

                        <label for="message">
                            Tell Us About Your Project *
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            maxlength="2000"
                            placeholder="Tell us about your business, requirements and goals..."
                            required
                        ></textarea>

                    </div>



                    <!-- HONEYPOT -->

                    <div
                        class="website-field"
                        aria-hidden="true"
                    >

                        <label for="website">
                            Website
                        </label>

                        <input
                            type="text"
                            id="website"
                            name="website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>



                    <!-- SUBMIT -->

                    <button
                        type="submit"
                        class="button button-primary contact-submit"
                    >

                        Send Enquiry

                        <i class="fa-solid fa-paper-plane"></i>

                    </button>


                </form>

            </div>

        </div>

    </section>

</main>



<!-- FLOATING WHATSAPP -->

<a
    href="https://wa.me/918218910225?text=Hi%20SD%20Media%20Tech%2C%20I%20want%20to%20discuss%20a%20project."
    target="_blank"
    rel="noopener noreferrer"
    class="floating-whatsapp"
    aria-label="Chat with SD Media Tech on WhatsApp"
>

    <i class="fa-brands fa-whatsapp"></i>

    <span>
        WhatsApp
    </span>

</a>


<?php

include __DIR__ . '/includes/footer.php';

?>