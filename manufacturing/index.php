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
                            <h1 class="animate-heading" >Our Manufacturing</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">Manufacturing</li>
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
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../img/banner/manufacturing.jpg') no-repeat center center;
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
        <section class="about-area pt-130 pb-40"
            style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="h4about-thumb pos-rel">
                            <img src="../img/manufacturing/research.jpg" style="border-radius: 5px" alt="Star Laboratories pharmaceutical manufacturing facility" loading="lazy" decoding="async">
                            <a href="tel:+923092554000" class="call-btn f-700 white-color green-bg"
                                style="border-radius: 5px"><i class="call-icon"><img
                                        src="../img/home4/icon/about__phone__icon.png" alt="Phone inquiry icon" loading="lazy" decoding="async"></i><span>Call : +92 309
                                    2554000</span></a>
                            <img src="../img/manufacturing/research3.jpg" style="border-radius: 5px" alt="Star Laboratories pharmaceutical manufacturing facility"
                                class="about-overlap__thumb" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side h4about-right mb-30">
                            <div class="about-title mb-20">
                                <h5 class="pink-color animate-heading">Research and Development
                                </h5>
                                <h2 style="color: #020025;">
                                    <div class="animate-heading">Innovation and Drug</div>
                                    <div class="animate-heading">Discovery</div> </h2>
                            </div>
                            <div class="about-text">
                                <p class="theme-color just-text">At STAR Laboratories, we recognize that innovation is the cornerstone of our commitment to advancing health outcomes for both humans and animals. Our Research and Development team stands at the vanguard of therapeutic innovation, employing state-of-the-art scientific methodologies to address unmet medical needs and respond to emergent health challenges. We harness groundbreaking technologies—including genomics, biotechnology, and artificial intelligence—to efficiently identify and cultivate promising therapeutic candidates. Our rigorous research protocols encompass extensive preclinical and clinical testing phases, ensuring that our innovations culminate in safe and effective pharmacological solutions. Beyond leveraging our internal expertise, we actively pursue collaborations with leading academic institutions, healthcare organizations, and industry partners, augmenting our research capabilities. This collaborative framework not only accelerates our drug discovery initiatives but also positions us at the forefront of evolving industry trends.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-area pt-10 pb-100">
            <div class="container">
                <div class="row image-first">
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side h4about-right mb-30">
                            <div class="about-title mb-20">
                            <h2 class="animate-heading" style="color: #020025;">Clinical Trials and Studies</h2>
                            </div>
                            <div class="about-text" style="margin-top: -20px;">
                                <p class="theme-color just-text">At STAR Laboratories, our dedication to advancing medical science is manifested through innovative clinical trials and studies that prioritize patient safety and therapeutic efficacy. Our commitment to research excellence enables us to explore pioneering therapies across a spectrum of conditions, encompassing both chronic diseases and rare disorders. We meticulously design and conduct clinical trials in strict adherence to the highest regulatory standards and ethical practices, ensuring that each participant is treated with the utmost respect and care. Our multidisciplinary team—comprising scientists, researchers, and healthcare professionals—collaborates intimately to analyze data and extract meaningful insights that propel our drug development efforts. By fostering transparency and engagement with our trial participants, we enhance the quality of our research while empowering individuals to play an integral role in the advancement of healthcare. At STAR Laboratories, we firmly believe that rigorous clinical studies can unlock the potential of novel treatments, thereby improving patient outcomes and ultimately transforming the future of medicine.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="h4about-thumb pos-rel">
                            <img src="../img/manufacturing/research2.jpg" style="border-radius: 5px" alt="Star Laboratories pharmaceutical manufacturing facility" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .about-area .h4about-thumb img {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .about-area .h4about-thumb img:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            .about-area .call-btn {
                transition: background-color 0.3s ease, transform 0.3s ease;
            }

            .about-area .call-btn:hover {
                background-color: #28a745;
                /* Slightly brighter green */
                transform: translateY(-3px);
            }

            .about-area .about-overlap__thumb {
                opacity: 0.8;
                transition: opacity 0.3s ease;
            }

            .about-area .about-overlap__thumb:hover {
                opacity: 1;
            }

            .about-area .h4about-right {
                position: relative;
                overflow: hidden;
            }

            .about-area .h4about-right::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.2);
                transition: left 0.5s ease;
                pointer-events: none;
            }

            .about-area .h4about-right:hover::before {
                left: 100%;
            }

            .call-btn {
                position: relative;
                overflow: hidden;
            }

            .call-btn .ripple {
                position: absolute;
                width: 20px;
                height: 20px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }

            @keyframes ripple-animation {
                to {
                    transform: scale(10);
                    opacity: 0;
                }
            }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const images = document.querySelectorAll(".h4about-thumb img");
                const buttons = document.querySelectorAll(".call-btn");

                // Add scroll animations
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.transform = "scale(1)";
                            entry.target.style.opacity = "1";
                        } else {
                            entry.target.style.transform = "scale(0.95)";
                            entry.target.style.opacity = "0.7";
                        }
                    });
                }, { threshold: 0.5 });

                images.forEach((img) => {
                    img.style.transform = "scale(0.95)";
                    img.style.opacity = "0.7";
                    observer.observe(img);
                });

                // Add ripple effect on button click
                buttons.forEach((btn) => {
                    btn.addEventListener("click", function (e) {
                        const ripple = document.createElement("span");
                        ripple.classList.add("ripple");
                        ripple.style.left = `${e.clientX - btn.getBoundingClientRect().left}px`;
                        ripple.style.top = `${e.clientY - btn.getBoundingClientRect().top}px`;
                        this.appendChild(ripple);

                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });
                });
            });

        </script>
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