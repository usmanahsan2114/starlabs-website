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
                            <h1 class="animate-heading" >Our Quality</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">Quality Control</li>
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
        <!-- testimonials-area start -->
        <div class="testimonials-area pt-115 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section-title text-center pos-rel mb-40">
                            <div class="section-icon">
                                <img class="section-back-icon" src="../../img/shape/section-title-line.png" alt="Decorative icon" aria-hidden="true" loading="lazy" decoding="async">
                            </div>
                            <div class="section-text pos-rel">
                                <h5 class="animate-heading" style="color: #db0000;">Q&A</h5>
                                <h2 class="animate-heading" style="color: #020025;">Quality Policy</h2>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="../../img/shape/section-title-line.png" alt="Section divider" aria-hidden="true" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testi">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12">
                            <div class="testi-box text-center pos-rel">
                                <div class="testi-content pos-rel">
                                    <div class="testi-bg-icon">
                                        <img src="../../img/testimonials/testi-box-bg.png" alt="Star Laboratories quality background" aria-hidden="true" loading="lazy" decoding="async">
                                    </div>
                                    <div class="text-text-boxx">
                                        <p style="all: unset; margin: initial; padding: initial; font-size: 16px;">
                                            At STAR Labs, we are committed to providing the highest quality
                                            pharmaceutical products for both veterinary and human health, ensuring they
                                            meet the needs and expectations of our customers globally. We maintain this
                                            commitment by upholding rigorous quality management systems and adhering to
                                            international standards.
                                        </p>
                                    </div>
                                </div>
                                <br><br>
                                <div class="mission-vision-list  text-center">
                                    <div class="mv-single-list d-flex">

                                        <div class="mv-text">
                                            <p style="color: #020025;">Quality Management System </p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Implementing and maintaining a Quality Management System (QMS) strictly
                                                aligned
                                                with international standards ensures compliance and enhances operational
                                                quality.</p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">

                                        <div class="mv-text">
                                            <p style="color: #020025;">ISO 9001:2015 </p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Ensuring consistent quality management practices to enhance customer
                                                satisfaction through the effective application of system controls and
                                                continual improvement.</p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">

                                        <div class="mv-text">
                                            <p style="color: #020025;">ISO 14001:2015 </p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Promoting environmental responsibility by minimizing our environmental
                                                footprint, ensuring sustainable operations, and complying with relevant
                                                environmental regulations.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">

                                        <div class="mv-text">
                                            <p style="color: #020025;">ISO 45001:2018 </p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Prioritizing the health, safety, and welfare of all employees, partners,
                                                and stakeholders by fostering a safe and healthy working environment,
                                                reducing risks, and preventing work-related incidents.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* Ensuring animations are only applied to the specific section */
            .testimonials-area .testi-bg-icon img,
            .testimonials-area .section-icon img,
            .testimonials-area .section-line img {
                transition: transform 0.3s ease, opacity 0.3s ease;
                /* Smooth transition for the transformations */
            }

            .testimonials-area .testi-bg-icon img:hover {
                transform: scale(1.1) rotate(5deg);
                /* Slight scale and rotate effect on hover */
            }

            .testimonials-area .section-icon img:hover {
                transform: scale(1.1) rotate(-5deg);
                /* Opposite rotation effect on the section icon */
            }

            .testimonials-area .section-line img:hover {
                transform: scale(1.05);
                /* Slight scale effect on the section line */
            }

            /* Additional hover effects for user interactivity */
            .testimonials-area .testi-content:hover {
                box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
                /* Adding a shadow effect on hover for the whole testimonial content */
            }

            .testi-bg-icon {
                display: flex;
                justify-content: center;
                /* Horizontally centers the image */
                align-items: center;
                /* Vertically centers the image */
                height: 100%;
                /* Ensures the container takes up the available height */
            }

            .testi-bg-icon img {
                max-width: 100%;
                /* Ensures the image is responsive */
                height: auto;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const testimonialBoxes = document.querySelectorAll('.testimonials-area .testi-box');

                testimonialBoxes.forEach(box => {
                    box.addEventListener('mouseenter', () => {
                        box.classList.add('hovered');
                        // Custom behavior when the box is hovered over, if needed
                    });

                    box.addEventListener('mouseleave', () => {
                        box.classList.remove('hovered');
                        // Custom behavior when the box is no longer hovered
                    });
                });
            });

        </script>
        <!-- testimonials-area end -->
        <section class="hiring-area pb-120" style="margin-top: -100px;">
            <div class="container"
                style="background-image: url('../../img/star-b.gif'); background-size: cover; background-position: center;">
                <div class="row no-gutters hire-bg-2">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../img" src="../../img/manufacturing/quality1.jpg" alt="Star Laboratories pharmaceutical manufacturing facility" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text"
                            style="background-image: url('../../img/star-b.gif'); background-size: cover; background-position: center;">
                            <h2 class="animate-heading" style="margin-top: -30px;" style="color: #020025;">Audits and Inspections </h2>
                            <p class="just-text pt-20">We acknowledge that rigorous audits and inspections are vital to upholding our commitment to quality and compliance within the pharmaceutical sector. Our facilities undergo regular internal and external audits to verify adherence to Good Manufacturing Practices (GMP) and regulatory standards, reinforcing our dedication to delivering safe and effective products. We actively collaborate with regulatory agencies and independent auditors, welcoming their insights to perpetually refine our operational processes. Our comprehensive inspection protocols encompass every aspect of our manufacturing and quality assurance practices—from the procurement of raw materials to the distribution of final products. By cultivating a culture of transparency and accountability, we ensure that our systems are not only compliant but also optimized for excellence. Each audit serves as a pivotal opportunity for us to enhance our practices, implement best-in-class solutions, and uphold the trust vested in us by healthcare professionals and patients. At STAR Laboratories, we are resolutely committed to maintaining the highest standards of integrity and quality through meticulous audits and inspections, thereby reinforcing our mission to advance health and well-being globally.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters hire-bg-2 image-first">
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-text"
                        style="background-image: url('../../img/star-b.gif'); background-size: cover; background-position: center;">
                        <h2 class="animate-heading" style="color: #020025;">Employee Training </h2>
                        <p class="just-text pt-20">We firmly believe that our employees constitute our most valuable asset, and we are resolutely committed to providing comprehensive training programs designed to cultivate their skills and knowledge in the dynamic pharmaceutical landscape. Our multifaceted training initiatives encompass a broad spectrum of subjects, including regulatory compliance, Good Manufacturing Practices (GMP), safety protocols, and the latest innovations in drug development. Through a blend of immersive workshops, advanced e-learning modules, and structured mentorship opportunities, we foster a robust culture of continuous learning and professional growth. We place equal emphasis on both technical competencies and essential soft skills, promoting collaboration, effective communication, and leadership within our workforce. By investing in the professional development of our employees, we ensure their preparedness to navigate the complexities of their roles and contribute meaningfully to STAR Laboratories' overarching mission. This unwavering dedication to training and development not only enhances employee satisfaction and retention but also propels innovation and operational excellence, ultimately empowering us to deliver high-quality pharmaceuticals that significantly improve patient outcomes.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="hire-img">
                        <img class="../img" src="../../img/manufacturing/quality2.jpg" alt="Star Laboratories pharmaceutical manufacturing facility" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--mission-area end -->
        <style>
            /* Animation on images */
            .hire-img img {
                transition: transform 0.4s ease-in-out;
            }

            .hire-img img:hover {
                transform: scale(1.1);
                /* Scale up slightly on hover */
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                /* Add shadow for effect */
            }

            /* Animation on icons (if any exist, adapt this if needed) */
            .icon {
                transition: transform 0.4s ease, opacity 0.4s ease;
            }

            .icon:hover {
                transform: rotate(20deg);
                /* Add a slight rotation */
                opacity: 0.8;
                /* Make the icon slightly transparent */
            }

            /* Additional hover effects for text (no change to color or layout) */
            .hire-text h2:hover {
                transform: scale(1.05);
                transition: transform 0.3s ease-in-out;
            }

            .hire-text p:hover {
                transform: scale(1.02);
                transition: transform 0.3s ease-in-out;
            }

            /*mission-vision*/
            /* Container Styling */
            .hire-text,
            .hire-text-2 {
                padding: 55px;
                background-color: #f4f4f9;
                /* Soft background color */
                text-align: center;
                /* Center align text */
                overflow: hidden;
                /* Prevent content overflow */
                opacity: 0;
                animation: fadeInUp 1s ease forwards;
                /* Trigger the animation on load */
            }

            /* Animated Heading */
            .hire-text h1,
            .hire-text-2 h1 {
                font-size: 54px;
                margin-bottom: 38px;
                opacity: 0;
                animation: fadeInUp 1s ease 0.2s forwards;
                /* Heading animation with delay */
            }

            /* Animated Paragraph */
            .hire-text p,
            .hire-text-2 p {
                line-height: 26px;
                margin-bottom: 25px;
                opacity: 0;
                animation: fadeInUp 1s ease 0.4s forwards;
                /* Paragraph animation with longer delay */
            }

            /* Keyframes for slide up and fade in effect */
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(50px);
                    /* Slide up from 50px below */
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                    /* End at original position */
                }
            }

            /* Responsive Padding for Smaller Devices */
            .hire-text-2 {
                padding-left: 244px;
                padding-right: 137px;
                padding-top: 137px;
                padding-bottom: 151px;
            }

            @media (max-width: 768px) {
                .hire-text-2 {
                    padding-left: 50px;
                    padding-right: 50px;
                    padding-top: 80px;
                    padding-bottom: 80px;
                }

                .hire-text h1,
                .hire-text-2 h1 {
                    font-size: 40px;
                }

                .hire-text p,
                .hire-text-2 p {
                    font-size: 16px;
                }
            }

            /* Hover Effect for Extra Pop */
            .hire-text h1:hover,
            .hire-text-2 h1:hover {
                color: #db0000;
                /* Change color on hover */
                transform: scale(1.05);
                /* Slight scaling effect */
                transition: color 0.4s ease, transform 0.4s ease;
            }

            .hire-text p:hover,
            .hire-text-2 p:hover {
                color: #444;
                transition: color 0.4s ease;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Add smooth scrolling to all links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();

                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
            });

        </script>
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