<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include_once('../include/seo.php'); ?>
            <!-- Include GSAP -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" defer></script>
    <?php include_once('../include/head1.php'); ?>

</head>

<body>

    <!-- header begin -->
    <?php include_once('../include/header1.php'); ?>
    <!-- header end -->

    <main id="main-content">
        <!-- hero-area start -->
        <section class="breadcrumb-bg pt-200 pb-180">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="page-title">
                            <p class="small-text pb-15 animate-heading">Cure, Care, Connect!</p>
                            <h1 class="animate-heading" >Our Contact</h1>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                        <div class="page-breadcumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item">
                                        <a href="../">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-bg">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </section>
        <style>
            .breadcrumb-bg {
                position: relative;
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../img/banner/contact.jpg') no-repeat center center;
                background-size: cover;
                overflow: hidden;

                padding: 130px 0;
            }

            .wave-bg {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 100px;
                overflow: hidden;
            }

            .waves {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 100px;
                min-height: 100px;
                max-height: 150px;
            }

            .parallax>use {
                animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
            }

            .parallax>use:nth-child(1) {
                animation-delay: -2s;
                animation-duration: 7s;
            }

            .parallax>use:nth-child(2) {
                animation-delay: -3s;
                animation-duration: 10s;
            }

            .parallax>use:nth-child(3) {
                animation-delay: -4s;
                animation-duration: 13s;
            }

            .parallax>use:nth-child(4) {
                animation-delay: -5s;
                animation-duration: 20s;
            }

            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px, 0, 0);
                }

                100% {
                    transform: translate3d(85px, 0, 0);
                }
            }
        </style>
        <!-- hero-area end -->
        <!-- contact-area start -->
        <section class="contact-area pt-40 pb-20" data-background="../assets/img/bg/bg-map.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-envelope"></i>
                            <h3>Mail Here</h3>
                            <p><a href="mailto:starlabshr@starlabs.com.pk">starlabshr@starlabs.com.pk</a></p>
                            <p><a href="mailto:sales@starlabs.com.pk">sales@starlabs.com.pk</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Visit Here</h3>
                            <p>23, K.M. Multan Road, Lahore 53800, PAKISTAN</p>
                        </div>
                    </div>
                    <div class="col-xl-4  col-lg-4 col-md-4 ">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-phone"></i>
                            <h3>Call Here</h3>
                            <p><a href="tel:+923092554000"> +92 309 2554000</a></p>
                            <p><a href="tel:+924237511331"> +92 42 37511331</a></p>
                            <p><a href="tel:+924237513092"> +92 42 37513092</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            /* Scoped styles to the contact-area */
            .contact-area .contact i {
                transition: transform 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
                display: inline-block;
            }

            .contact-area .contact:hover i {
                transform: translateY(-5px) scale(1.1);
                /* Icon moves up and scales slightly */
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                /* Adds a shadow for a 3D effect */
            }

            @keyframes bounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-10px);
                }
            }

            .contact-area .contact i:hover {
                animation: bounce 0.6s ease-in-out;
                /* Bounce animation on hover */
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            .contact-area .contact:hover i {
                animation: spin 1s linear;
                /* Spinning animation on hover */
            }

            .contact-area .contact {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .contact-area .contact:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                /* Adds a subtle lift and shadow on hover */
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Add interactivity to icons inside contact elements
                const contactElements = document.querySelectorAll('.contact-area .contact');

                contactElements.forEach(contact => {
                    contact.addEventListener('mouseover', () => {
                        const icon = contact.querySelector('i');
                        if (icon) {
                            icon.style.transform = 'translateY(-5px) scale(1.1)';
                            icon.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
                        }
                    });

                    contact.addEventListener('mouseout', () => {
                        const icon = contact.querySelector('i');
                        if (icon) {
                            icon.style.transform = 'translateY(0) scale(1)';
                            icon.style.boxShadow = 'none';
                        }
                    });

                    // Add a bounce animation to the icons on hover
                    contact.addEventListener('mouseenter', () => {
                        const icon = contact.querySelector('i');
                        if (icon) {
                            icon.classList.add('bounce');
                        }
                    });

                    contact.addEventListener('mouseleave', () => {
                        const icon = contact.querySelector('i');
                        if (icon) {
                            icon.classList.remove('bounce');
                        }
                    });
                });
            });

        </script>
        <!-- contact-area end -->

        <!-- contact-form-area start -->
        <section class="contact-form-area gray-bg pt-100 pb-100">
            <div class="container">
                <div class="form-wrapper">
                    <div class="row align-items-center text-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="section-title mb-55">
                                <p><span></span> Enquiries, Quotations &amp; Export Orders</p>
                                <h2 class="animate-heading">Request Information or a Quotation</h2>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <!-- Shown when the visitor arrives from a product page (?product=) -->
                        <div id="sl-product-banner" class="sl-product-banner" hidden>
                            <i class="fas fa-file-invoice" aria-hidden="true"></i>
                            <span>You're requesting a quotation for:
                                <strong id="sl-product-name"></strong></span>
                        </div>
                        <form id="contact-form" action="../include/send-enquiry.php" method="post">
                            <!-- product context (auto-filled from the product page) -->
                            <input type="hidden" name="product" id="sl-product-field" value="">
                            <!-- honeypot: hidden from people, bots tend to fill it -->
                            <div class="sl-hp" aria-hidden="true">
                                <input type="text" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Your Name *" aria-label="Your name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="email" name="email" placeholder="Your Email *" aria-label="Your email address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box phone-icon mb-30">
                                        <input type="text" name="phone" placeholder="Your Phone / WhatsApp" aria-label="Your phone or WhatsApp number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="subject" id="sl-subject" placeholder="Subject" aria-label="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            aria-label="Your message" placeholder="Your Message — tell us the product, quantity / pack size and your country *" required></textarea>
                                    </div>
                                    <div class="contact-btn text-center">
                                        <button class="btn btn-icon ml-0" type="submit"><span>+</span> Send Enquiry</button>
                                        <a id="sl-wa-btn" href="https://wa.me/923092554000" target="_blank"
                                           rel="noopener" class="btn btn-icon ml-0 sl-wa-btn">
                                            <span><i class="fab fa-whatsapp"></i></span> Enquire on WhatsApp</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response text-center"></p>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* Scoped styles to the contact-form-area */
            .contact-form-area .form-box {
                border-radius: 5px;
                /* Rounded corners for all form boxes */
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                /* Initial subtle shadow */
            }

            .contact-form-area .form-box:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                /* Lift-up effect with shadow */
            }

            .contact-form-area .btn-icon {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                /* Initial shadow for buttons */
            }

            .contact-form-area .btn-icon:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
                /* 3D shadow effect on hover */
            }

            .contact-form-area .btn-icon:active {
                transform: scale(1);
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
                /* Softer shadow when pressed */
            }

            .contact-form-area .section-title p {
                animation: fadeInFromBottom 1s ease-in-out;
            }

            .contact-form-area .section-title h1 {
                animation: slideInFromLeft 1s ease-in-out;
            }

            @keyframes fadeInFromBottom {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes slideInFromLeft {
                from {
                    opacity: 0;
                    transform: translateX(-30px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .contact-form-area .form-wrapper {
                animation: fadeIn 1s ease-in-out;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            /* Product enquiry banner (shown when arriving from a product page) */
            .sl-product-banner {
                display: flex;
                align-items: center;
                gap: 12px;
                background: #fdeaea;
                border: 1px solid #f3c2c2;
                border-left: 4px solid #db0000;
                color: #1a1a2e;
                border-radius: 8px;
                padding: 14px 18px;
                margin-bottom: 28px;
                font-size: 15px;
            }
            .sl-product-banner i {
                color: #db0000;
                font-size: 20px;
            }
            .sl-product-banner strong {
                color: #db0000;
            }
            /* honeypot — visually hidden, off-screen */
            .sl-hp {
                position: absolute;
                left: -9999px;
                width: 1px;
                height: 1px;
                overflow: hidden;
            }
            /* WhatsApp alternative button */
            .contact-form-area .sl-wa-btn {
                background: #25d366 !important;
                margin-left: 10px;
            }
            .contact-form-area .sl-wa-btn span {
                background: #fff !important;
                color: #25d366 !important;
            }
            @media (max-width: 575px) {
                .contact-form-area .sl-wa-btn {
                    margin-left: 0;
                    margin-top: 12px;
                }
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Apply hover effects and interactive animations for form boxes
                const formBoxes = document.querySelectorAll('.contact-form-area .form-box');

                formBoxes.forEach(box => {
                    box.addEventListener('mouseover', () => {
                        box.style.transform = 'translateY(-5px)';
                        box.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)'; // Adds a 3D shadow effect
                    });

                    box.addEventListener('mouseout', () => {
                        box.style.transform = 'translateY(0)';
                        box.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)'; // Reverts to the original shadow
                    });
                });

                // Apply hover effects for buttons
                const buttons = document.querySelectorAll('.contact-form-area .btn-icon');

                buttons.forEach(button => {
                    button.addEventListener('mouseover', () => {
                        button.style.transform = 'scale(1.05)';
                        button.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.3)'; // Adds a deeper shadow for 3D effect
                    });

                    button.addEventListener('mouseout', () => {
                        button.style.transform = 'scale(1)';
                        button.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)'; // Reverts to the original shadow
                    });

                    button.addEventListener('mousedown', () => {
                        button.style.transform = 'scale(0.98)';
                        button.style.boxShadow = '0 3px 8px rgba(0, 0, 0, 0.2)'; // Slightly reduces size when pressed
                    });

                    button.addEventListener('mouseup', () => {
                        button.style.transform = 'scale(1.05)';
                        button.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.3)'; // Returns to hover state
                    });
                });

                // Apply fade-in animations for the section title and wrapper when the page loads
                const formWrapper = document.querySelector('.contact-form-area .form-wrapper');
                formWrapper.style.opacity = '0';
                formWrapper.style.transition = 'opacity 1s ease-in-out';

                setTimeout(() => {
                    formWrapper.style.opacity = '1';
                }, 100);
            });

            /* ------------------------------------------------------------------
             * Product enquiry pre-fill:
             * When the visitor arrives from a product page (contact/?product=Name),
             * pre-fill the subject + message, show a banner, and point the
             * WhatsApp button at a ready-to-send message for that product.
             * ------------------------------------------------------------------ */
            (function () {
                var params;
                try { params = new URLSearchParams(window.location.search); }
                catch (e) { return; }
                var product = (params.get('product') || '').trim();
                var cat = (params.get('cat') || '').trim();

                var waBtn = document.getElementById('sl-wa-btn');
                var subjectField = document.getElementById('sl-subject');
                var productField = document.getElementById('sl-product-field');
                var messageField = document.getElementById('message');
                var banner = document.getElementById('sl-product-banner');
                var nameSpan = document.getElementById('sl-product-name');

                if (product) {
                    if (productField) { productField.value = product; }
                    if (subjectField && !subjectField.value) {
                        subjectField.value = 'Quotation Request: ' + product;
                    }
                    if (messageField && !messageField.value) {
                        messageField.value = 'Hello Star Laboratories,\n\n'
                            + 'I would like to request information and a quotation for "' + product + '"'
                            + (cat ? ' (' + cat + ')' : '') + '.\n\n'
                            + 'Please share availability, pack sizes, MOQ and pricing.\n\n'
                            + 'Quantity / pack size required: \n'
                            + 'Destination country: \n\nThank you.';
                    }
                    if (banner && nameSpan) {
                        nameSpan.textContent = product + (cat ? ' (' + cat + ')' : '');
                        banner.hidden = false;
                    }
                }

                // WhatsApp button: prefilled message (product-aware when available)
                if (waBtn) {
                    var waMsg = product
                        ? 'Hello Star Laboratories, I would like information and a quotation for "'
                            + product + '"' + (cat ? ' (' + cat + ')' : '')
                            + '. Please share availability, pack sizes and pricing.'
                        : 'Hello Star Laboratories, I would like to make a product enquiry.';
                    waBtn.href = 'https://wa.me/923092554000?text=' + encodeURIComponent(waMsg);
                }
            })();
        </script>
        <!-- contact-form-area end -->
        <!-- Map start 
        <section class="map-area">
            <div id="contact-map" class="contact-map"></div>
        </section>-->
    </main>

    <!-- footer start -->
    <?php include_once('../include/footer1.php'); ?>
    <!-- footer end -->

    <!-- JS here -->
    <?php include_once('../include/end1.php'); ?>

    <!-- Text animation Script Start-->
 <script>
    document.addEventListener('DOMContentLoaded', () => {
        const animateText = (element) => {
            const text = element.textContent;
            element.innerHTML = ''; // Clear the original text

            // Split the text into individual letters and wrap them in spans
            text.split('').forEach(letter => {
                const span = document.createElement('span');
                span.textContent = letter === ' ' ? '\u00A0' : letter; // Preserve spaces
                span.style.display = 'inline-block'; // Ensure each letter is inline-block
                element.appendChild(span);
            });

            // Animate each letter using GSAP
            const letters = element.querySelectorAll('span');
            gsap.from(letters, {
                y: 20, // Start from below
                opacity: 0,
                stagger: 0.05, // Stagger the animation
                duration: 0.5, // Duration for each letter
                ease: "power2.out" // Easing function
            });
        };

        const headings = document.querySelectorAll('.animate-heading');

        // Create an Intersection Observer to trigger animations on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateText(entry.target); // Animate the text
                    observer.unobserve(entry.target); // Stop observing after animation
                }
            });
        }, { threshold: 0.1 }); // Trigger when 10% of the element is visible

        // Observe each heading
        headings.forEach(heading => {
            observer.observe(heading);
        });
    });
 </script>
<!-- Text animation Script Start end-->
</body>

</html>