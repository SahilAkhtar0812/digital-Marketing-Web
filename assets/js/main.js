document.addEventListener("DOMContentLoaded", function () {

    const siteHeader = document.getElementById("siteHeader");
    const mobileMenuButton = document.getElementById("mobileMenuButton");
    const navMenu = document.getElementById("navMenu");



    /* ==========================================
       STICKY HEADER EFFECT
    ========================================== */

    function updateHeader() {

        if (!siteHeader) {
            return;
        }

        if (window.scrollY > 20) {

            siteHeader.classList.add("scrolled");

        } else {

            siteHeader.classList.remove("scrolled");

        }

    }


    updateHeader();

    window.addEventListener("scroll", updateHeader);



    /* ==========================================
       MOBILE MENU
    ========================================== */

    if (mobileMenuButton && navMenu) {

        mobileMenuButton.addEventListener("click", function () {

            navMenu.classList.toggle("active");

            const isOpen = navMenu.classList.contains("active");

            mobileMenuButton.setAttribute(
                "aria-expanded",
                isOpen ? "true" : "false"
            );


            const icon = mobileMenuButton.querySelector("i");

            if (icon) {

                if (isOpen) {

                    icon.classList.remove("fa-bars");
                    icon.classList.add("fa-xmark");

                } else {

                    icon.classList.remove("fa-xmark");
                    icon.classList.add("fa-bars");

                }

            }

        });



        /* Close mobile menu when a link is clicked */

        const navLinks = navMenu.querySelectorAll("a");

        navLinks.forEach(function (link) {

            link.addEventListener("click", function () {

                navMenu.classList.remove("active");

                mobileMenuButton.setAttribute(
                    "aria-expanded",
                    "false"
                );


                const icon =
                    mobileMenuButton.querySelector("i");

                if (icon) {

                    icon.classList.remove("fa-xmark");
                    icon.classList.add("fa-bars");

                }

            });

        });

    }



    /* ==========================================
       CLOSE MENU WHEN SCREEN BECOMES DESKTOP
    ========================================== */

    window.addEventListener("resize", function () {

        if (
            window.innerWidth > 950 &&
            navMenu &&
            mobileMenuButton
        ) {

            navMenu.classList.remove("active");

            mobileMenuButton.setAttribute(
                "aria-expanded",
                "false"
            );


            const icon =
                mobileMenuButton.querySelector("i");

            if (icon) {

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            }

        }

    });



    /* ==========================================
       FAQ ACCORDION
    ========================================== */

    const faqItems =
        document.querySelectorAll(".faq-item");


    faqItems.forEach(function (item) {

        const question =
            item.querySelector(".faq-question");

        const answer =
            item.querySelector(".faq-answer");


        if (!question || !answer) {
            return;
        }


        question.addEventListener("click", function () {

            const isActive =
                item.classList.contains("active");


            /* Close all FAQs first */

            faqItems.forEach(function (otherItem) {

                const otherAnswer =
                    otherItem.querySelector(".faq-answer");


                otherItem.classList.remove("active");


                if (otherAnswer) {

                    otherAnswer.style.maxHeight = null;

                }

            });



            /* Open selected FAQ */

            if (!isActive) {

                item.classList.add("active");

                answer.style.maxHeight =
                    answer.scrollHeight + "px";

            }

        });

    });



    /* ==========================================
       ESC KEY CLOSES MOBILE MENU
    ========================================== */

    document.addEventListener("keydown", function (event) {

        if (
            event.key === "Escape" &&
            navMenu &&
            mobileMenuButton
        ) {

            navMenu.classList.remove("active");

            mobileMenuButton.setAttribute(
                "aria-expanded",
                "false"
            );


            const icon =
                mobileMenuButton.querySelector("i");

            if (icon) {

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            }

        }

    });



    /* ==========================================
       CLICK OUTSIDE MOBILE MENU
    ========================================== */

    document.addEventListener("click", function (event) {

        if (
            !navMenu ||
            !mobileMenuButton ||
            window.innerWidth > 950
        ) {
            return;
        }


        const clickedInsideMenu =
            navMenu.contains(event.target);

        const clickedButton =
            mobileMenuButton.contains(event.target);


        if (
            !clickedInsideMenu &&
            !clickedButton
        ) {

            navMenu.classList.remove("active");

            mobileMenuButton.setAttribute(
                "aria-expanded",
                "false"
            );


            const icon =
                mobileMenuButton.querySelector("i");

            if (icon) {

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            }

        }

    });

});