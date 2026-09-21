<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include_once('../../include/seo.php'); ?>
        <!-- Include GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" defer></script>
    <?php include_once('../../include/head2.php'); ?>
</head>

<body>

    <!-- header begin -->
    <?php include_once('../../include/header2.php'); ?>
    <!-- header end -->

    <main id="main-content">
        <!-- hero-area start -->
        <section class="breadcrumb-bg pt-200 pb-180">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="page-title">
                            <p class="small-text pb-15 animate-heading">Cure, Care, Connect!</p>
                            <h1 class="animate-heading" >Our Production</h1>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                        <div class="page-breadcumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item">
                                        <a href="../../">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Production</li>
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
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../../img/banner/manufacturing.jpg') no-repeat center center;
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

        <!-- about-area start -->
        <section class="hiring-area pt-120 pb-120">
            <div class="container">
                <div class="row no-gutters hire-bg-2 image-first"
                    style="background-image: url('../../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text" style="margin-top: -60px;">
                            <h2 class="animate-heading" style="color: #020025;">Scalable Manufacturing</h2>
                            <p class="just-text">
                            Our approach to scalable manufacturing is meticulously crafted to accommodate the ever-evolving demands of the pharmaceutical market while upholding the highest standards of quality and efficiency. We employ cutting-edge technologies and flexible production methodologies that empower us to rapidly scale operations in alignment with project requirements, without compromising product integrity. Our state-of-the-art facilities are equipped with modular systems that facilitate the efficient production of diverse formulations, enabling us to swiftly respond to emergent health needs and market dynamics. By integrating advanced automation and real-time data analytics into our manufacturing processes, we enhance operational efficiency and minimize lead times, thereby optimizing resource allocation. Our commitment to scalability extends to our workforce, where ongoing training ensures that our teams are adept at navigating the complexities associated with increased production demands. At STAR Laboratories, we believe that our capacity for effective scaling not only enhances our operational capabilities but also empowers us to deliver high-quality pharmaceuticals to patients and healthcare providers, meeting their needs in a timely and reliable manner.

                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../../img" style="border-radius: 5px;" src="../../img/manufacturing/production1.jpg" alt="Star Laboratories pharmaceutical manufacturing facility" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="row no-gutters hire-bg"
                    style="background-image: url('../../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="hire-img">
                            <img class="../../img" style="border-radius: 5px; width: 100%;" src="../../img/manufacturing/production2.jpg" alt="Star Laboratories pharmaceutical manufacturing facility" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="hire-text">
                            <h2 class="animate-heading" style="color: #020025;">Supply Chain </h2>
                            <p class="just-text">Our supply chain strategy is meticulously crafted to facilitate the seamless delivery of high-quality pharmaceuticals while maintaining flexibility and resilience in an ever-changing market landscape. We prioritize strategic partnerships with dependable suppliers and distributors, fostering collaborative relationships that enhance transparency and efficiency throughout the supply chain. By leveraging advanced technologies such as data analytics and real-time tracking, we optimize inventory management and streamline logistics, ensuring that our products are delivered on time and in full. Our commitment to sustainability is intricately woven into our supply chain practices, as we actively pursue initiatives aimed at minimizing environmental impact through responsible sourcing and waste reduction. Furthermore, our dedicated team continuously monitors market trends and regulatory changes, enabling us to proactively address potential disruptions and adapt our strategies accordingly. At STAR Laboratories, we understand that a robust supply chain is critical not only to our operational success but also to our mission of improving patient outcomes, empowering us to respond effectively to the healthcare needs of communities worldwide.

                            </p>
                            <a data-animation="fadeInLeft" data-delay=".6s" href="../../contact/"
                                class="btn btn-icon ml-0"><span>+</span>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            /* Scoped CSS to avoid affecting other elements */
            .hiring-area img {
                transition: transform 0.3s ease, opacity 0.3s ease;
            }

            /* Image hover animation */
            .hiring-area img:hover {
                transform: scale(1.1);
                opacity: 0.8;
            }

            /* Button hover animation */
            .hiring-area .btn {
                position: relative;
                overflow: hidden;
                transition: all 0.3s ease;
            }

            .hiring-area .btn::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.1);
                transition: left 0.3s ease;
            }

            .hiring-area .btn:hover::before {
                left: 0;
            }

            /* Button icon scaling on hover */
            .hiring-area .btn-icon span {
                display: inline-block;
                transition: transform 0.3s ease;
            }

            .hiring-area .btn:hover span {
                transform: rotate(90deg);
            }

            /* Text fade-in animation */
            .hiring-area .hire-text h2,
            .hiring-area .hire-text p {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }

            /* Animate text on hover */
            .hiring-area .row.no-gutters:hover .hire-text h2,
            .hiring-area .row.no-gutters:hover .hire-text p {
                opacity: 1;
                transform: translateY(0);
            }
        </style>
        <script>
            // Add scroll-based animation for lazy loading elements
            document.addEventListener('DOMContentLoaded', function () {
                const hireTexts = document.querySelectorAll('.hire-text h2, .hire-text p');
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, { threshold: 0.1 });

                hireTexts.forEach((text) => observer.observe(text));
            });

            // Add hover animations for images and buttons
            const images = document.querySelectorAll('.hiring-area img');
            const buttons = document.querySelectorAll('.hiring-area .btn');

            images.forEach((img) => {
                img.addEventListener('mouseenter', () => {
                    img.style.transform = 'scale(1.1)';
                    img.style.opacity = '0.8';
                });
                img.addEventListener('mouseleave', () => {
                    img.style.transform = 'scale(1)';
                    img.style.opacity = '1';
                });
            });

            buttons.forEach((button) => {
                button.addEventListener('mouseenter', () => {
                    const span = button.querySelector('span');
                    if (span) span.style.transform = 'rotate(90deg)';
                });
                button.addEventListener('mouseleave', () => {
                    const span = button.querySelector('span');
                    if (span) span.style.transform = 'rotate(0deg)';
                });
            });

        </script>
        <!-- about-area end -->

    </main>

    <!-- footer start -->
    <?php include_once('../../include/footer2.php'); ?>
    <!-- footer end -->

    <!-- JS here -->
    <?php include_once('../../include/end2.php'); ?>



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
