<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include_once('../include/seo.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                            <h1 class="animate-heading" >About Us</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add the waves container here -->
            <div class="wave-container">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    </g>
                </svg>
            </div>
        </section>

        <style>
            /* BANNER WAVES START */
            .breadcrumb-bg {
                position: relative;
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../img/banner/about.jpg') no-repeat center center;
                background-size: cover;
                overflow: hidden;

                padding: 130px 0;
            }


            .breadcrumb-bg .container {
                position: relative;
                z-index: 2;
            }

            .wave-container {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                overflow: hidden;
                line-height: 0;
                z-index: 3;
            }

            .waves {
                position: relative;
                width: 100%;
                height: 100px;
                margin-bottom: -7px;
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

            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px, 0, 0);
                }

                100% {
                    transform: translate3d(85px, 0, 0);
                }
            }

            /* Adjust wave height for mobile */
            @media (max-width: 768px) {
                .waves {
                    height: 40px;
                    min-height: 40px;
                }
            }

            /* BANNER WAVES END */

            /* Ensure text is visible on the gradient background */
        </style>
        <!-- hero-area end -->
        <!-- about-area start -->
        <section class="about-area pt-20 pb-90">
            <div class="container"
                style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-left-side pos-rel mb-30">
                            <div class="about-front-img pos-rel">
                                <img src="../img/about/about.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <!-- New class for two image -->
                        <div class="about-front-img-two pos-rel mb-30"> <!-- Keep 'pos-rel' for large screens -->
                            <img src="../img/about/abouttop.jpg" alt="About Star Laboratories" loading="lazy" decoding="async"> <!-- Second Image -->
                        </div>
                        <div class="about-front-img-three pos-rel mb-30"> <!-- Third Image Container -->
                            <img src="../img/about/aboutbottom.jpg" alt="About Star Laboratories" loading="lazy" decoding="async"> <!-- Third Image -->
                        </div>
                        <!--new class end-->
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side pt-55 mb-30">
                            <div class="about-title mb-20">
                                <h5 class="animate-heading" >About Us</h5>
                                <h2 class="animate-heading"  style="color: #020025;">Story About Star Labs</h2>
                            </div>
                            <div class="about-text mb-50 just-text">
                                <p>Welcome to Star Laboratories, a pioneering pharmaceutical company committed to improving health and well-being for both humans and animals. For over 60 years, we’ve pushed the frontiers of medical research, developing cutting-edge therapies that enhance lives across the globe. <br><br> Our diverse product range includes more than 500 pharmaceutical solutions for human and veterinary healthcare. Rooted in ethical practices, we maintain the trust of customers, partners, and communities worldwide. <br><br> Through collaborations with healthcare professionals and distributors, we ensure our medications reach those who need them the most.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <style>
            /*about-us-section*/

            .about-front-img {
                box-shadow: 0px 16px 32px 0px rgba(136, 136, 136, 0.2);
                margin-left: 170px;
                width: 60%;
                height: auto;
                margin-top: 150px;
                position: relative;
                z-index: 2;
                border-radius: 5px;
                overflow: hidden;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
            }

            /* Hover effect for first image */
            .about-front-img:hover {
                transform: scale(1.1);
                box-shadow: 0px 24px 48px 0px rgba(136, 136, 136, 0.4);
                z-index: 5;
                /* Ensure first image pops up */
            }

            /* Styling for the second image */
            .about-front-img-two {
                box-shadow: 0px 16px 32px 0px rgba(136, 136, 136, 0.2);
                margin-left: 30px;
                margin-top: -500px; /* Keep this for large screens */
                width: 30%;
                height: auto;
                position: absolute; /* Keep this for large screens */
                z-index: 3;
                border-radius: 5px;
                overflow: hidden;
                transition: transform 0.4s ease, box-shadow 0.4s ease, z-index 0.4s ease;
            }

            /* Hover effect for second image */
            .about-front-img-two:hover {
                transform: scale(1.1);
                box-shadow: 0px 24px 48px 0px rgba(136, 136, 136, 0.4);
                z-index: 6;
                /* Bring second image to the front */
            }

            /* Styling for the third image */
            .about-front-img-three {
                position: absolute; /* Keep this for large screens */
                box-shadow: 0px 16px 32px 0px rgba(136, 136, 136, 0.2);
                margin-left: 40px;
                margin-top: -180px; /* Keep this for large screens */
                height: auto;
                z-index: 3;
                border-radius: 5px;
                overflow: hidden;
                transition: transform 0.4s ease, box-shadow 0.4s ease, z-index 0.4s ease;
            }

            /* Hover effect for third image */
            .about-front-img-three:hover {
                transform: scale(1.1);
                box-shadow: 0px 24px 48px 0px rgba(136, 136, 136, 0.4);
                z-index: 7;
                /* Bring third image to the front */
            }

            .about-title h5 {
                margin-bottom: 27px;
                color: #db0000;
            }

            .about-title p {
                font-family: 'Poppins', sans-serif;
                font-size: xx-large;
                font-weight: 900;
                color: black;
                font-weight: bold;
                line-height: 26px;
            }

            .about-right-side {
                padding-left: 23px;
            }

            
            /* Media query for smaller screens */
            @media (max-width: 480px) {
                .about-front-img-two {
                    position: relative;
                    margin-top: -79vw;
                    width: 35%;
                    margin-left: 30px;
                }

                .about-front-img-three {
                    position: relative; /* Change to relative for smaller screens */
                    margin-top: 0; /* Reset margin-top for better alignment */
               
                    margin-left: 0; /* Reset margin-left for better alignment */
                }
            }
        </style>
        <!-- mission-area start -->
        <section class="hiring-area pb-30">
            <div class="container no-padding">
                <div class="row no-gutters hire-bg-2 image-first">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text" style="background-color: transparent;">
                            <h2 style="color: #020025;">
                            <div class="animate-heading" >Inspiring Health,</div>
                            <div class="animate-heading" >Empowering Lives</div></h2>
                            </h2>
                            <p style="text-align: justify; padding-left: 0;">At Star Laboratories, our mission is to discover, develop, and deliver safe and effective medications that enhance the quality of life for both humans and animals. We envision a future where access to innovative healthcare solutions is universal, promoting well-being across diverse communities worldwide. Our core values—integrity, innovation, and social responsibility—guide every aspect of our operations, driving us to uphold the highest ethical standards while fostering a culture of collaboration and excellence in all our endeavors.
                                <br>
                                Our commitment to sustainability and community welfare is at the heart of what we do. We strive to ensure that our products are not only effective but also ethically produced and accessible to those in need. By leveraging cutting-edge research and fostering partnerships with healthcare professionals, we aim to lead the way in developing therapies that address unmet medical needs, ultimately transforming healthcare for future generations.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../img" src="../img/about/cod.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--mission-area end -->
        <style>
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

            /* Scoped animations for images and icons within the .hiring-area */
            .hiring-area img {
                opacity: 0.9;
                /* Initial opacity */
                transition: transform 0.5s ease, opacity 0.5s ease;
            }

            .hiring-area img:hover {
                transform: scale(1.1);
                /* Zoom in effect */
                opacity: 1;
                /* Fully visible on hover */
            }

            .hiring-area .icon {
                opacity: 0.8;
                /* Initial opacity */
                transition: transform 0.3s ease, opacity 0.3s ease;
            }

            .hiring-area .icon:hover {
                transform: rotate(360deg);
                /* Spin effect */
                opacity: 1;
                /* Fully visible on hover */
            }

            /* Add subtle floating animation for images */
            .hiring-area img {
                animation: float 3s ease-in-out infinite;
            }

            /* Floating keyframe animation */
            @keyframes float {
                0% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-10px);
                }

                100% {
                    transform: translateY(0px);
                }
            }

            /* Apply animation only to the first image */
            .hiring-area .hire-img img {
                animation: fadeInUp 2s ease forwards, float 5s ease-in-out infinite;
            }

            /* Keyframes for fadeInUp used in the main text and images */
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(50px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Add hover effect with a slight delay to images for smoother animation
                const images = document.querySelectorAll(".hiring-area img");

                images.forEach(image => {
                    image.addEventListener("mouseenter", () => {
                        image.style.transition = "transform 0.5s ease, opacity 0.5s ease";
                        image.style.transform = "scale(1.1)";
                        image.style.opacity = "1";
                    });

                    image.addEventListener("mouseleave", () => {
                        image.style.transform = "scale(1)";
                        image.style.opacity = "0.9";
                    });
                });

                // Add hover interaction for any icons present
                const icons = document.querySelectorAll(".hiring-area .icon");

                icons.forEach(icon => {
                    icon.addEventListener("mouseenter", () => {
                        icon.style.transition = "transform 0.3s ease, opacity 0.3s ease";
                        icon.style.transform = "rotate(360deg)";
                        icon.style.opacity = "1";
                    });

                    icon.addEventListener("mouseleave", () => {
                        icon.style.transform = "rotate(0deg)";
                        icon.style.opacity = "0.8";
                    });
                });
            });

        </script>
        <!-- fact-area start -->

        <section class="fact-area fact-map primary-bg pos-rel pt-55 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="section-title pos-rel mb-45">
                            <div class="section-text section-text-white pos-rel">
                                <h5 class="animate-heading">We are available 24/7</h5>
                                <h2 class="white-color animate-heading">Connect With Us</h2>
                            </div>
                        </div>
                        <div class="section-button section-button-left mb-30">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="../contact/"
                                class="btn btn-icon ml-0"><span>+</span>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-md-8">
                        <div class="cta-satisfied">
                            <div class="single-satisfied mb-50">
                                <h2 class="sl-statnum">1M+</h2>
                                <h5> <i class="fas fa-user"></i> Satisfied Patients</h5>
                            </div>
                            <div class="single-satisfied mb-50">
                                <h2 class="sl-statnum">100+</h2>
                                <h5><i class="far fa-thumbs-up"></i> World Awards</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area end -->
        <!-- Counter Section Satrt 
        <section class="counter-wraper pt-120 pb-90 gray-bg " >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-couter mb-30">
                            <img src="../img/counter/counter-icon-1.png" alt="60+ years pharmaceutical manufacturing experience" loading="lazy" decoding="async">
                            <div class="counter-text-box">
                                <h2 class="sl-statnum"><span class="counter">60</span>+</h2>
                                <h3>Years in Business</h3>
                                <p>Over 60 years of pharmaceutical excellence and innovation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-couter mb-30">
                            <img src="../img/counter/counter-icon-3.png" alt="30+ export countries served worldwide" loading="lazy" decoding="async">
                            <div class="counter-text-box">
                                <h2 class="sl-statnum"><span class="counter">30</span>+</h2>
                                <h3>Countries</h3>
                                <p>Supplying high-quality healthcare products to 30+ countries globally.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-couter mb-30">
                            <img src="../img/counter/counter-icon-2.png" alt="600+ certified human and veterinary medicine formulations" loading="lazy" decoding="async">
                            <div class="counter-text-box">
                                <h2 class="sl-statnum"><span class="counter">238</span>+</h2>
                                <h3>Products</h3>
                                <p>Offering a diverse range of 500+ products for both human and animal healthcare.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Counter Section end -->

        <!-- mission-area start -->
        <section class="hiring-area pb-120 pt-40">
            <div class="container no-padding">
                <div class="row no-gutters hire-bg-2 image-first">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text"
                            style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                            <h2 class="animate-heading" style="color: #020025;">Company Overview </h2>
                            <p style="text-align: justify; padding-left: 0;">Our production facilities are equipped with state-of-the-art technology, allowing us to produce a diverse range of high-quality pharmaceuticals. We maintain rigorous safety and quality standards throughout our operations, ensuring compliance with global regulatory requirements. Star Laboratories fosters a culture of collaboration, innovation, and continuous learning, empowering our team to contribute to groundbreaking research and development.  <br><br> As a leader in both human and veterinary medicine, we remain dedicated to expanding access to quality healthcare products worldwide. Additionally, we actively engage in community initiatives and prioritize environmentally responsible practices, further solidifying our role as a trusted leader in the industry.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../img" style="border-radius: 5px;" src="../img/hire/about1.jpg" alt="Star Laboratories - About1" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container no-padding">
                <div class="row no-gutters hire-bg-2">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../img" style="border-radius: 5px;" src="../img/hire/about2.jpg" alt="Star Laboratories - About2" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text"
                            style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                            <h2 style="color: #020025;">
                            <div class="animate-heading" >Sustainability and</div>
                            <div class="animate-heading" >Responsibility</div>
                            </h2>
                            <p style="text-align: justify; padding-left: 0;">Sustainability is at the core of our operations. We strive to minimize our environmental impact through eco-friendly manufacturing processes, including waste reduction and energy conservation. <br><br>Our dedication to social responsibility is reflected in our support of local health initiatives, community engagement, and efforts to promote wellness for both people and animals. <br><br> These initiatives align with our broader mission of creating a healthier, more sustainable future for all.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <style>
            /* Ensure that changes are scoped to this section only */
            .hiring-area .hire-img img {
                transition: transform 0.5s ease, box-shadow 0.5s ease;
            }

            .hiring-area .hire-img img:hover {
                transform: scale(1.05);
                /* Zoom-in effect */
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                /* Add shadow for better focus */
            }

            .hiring-area .hire-text {
                position: relative;
                overflow: hidden;
                /* Ensure content doesn't overflow when animating */
            }

            .hiring-area .hire-text h2 {
                transition: transform 0.3s ease, color 0.3s ease;
            }

            .hiring-area .hire-text h2:hover {
                transform: scale(1.1);
                /* Slight scaling for the heading */
            }

            .hiring-area .hire-text p {
                transition: color 0.3s ease;
            }

            .hiring-area .hire-text p:hover {
                color: #333;
                /* Change text color slightly on hover (adjust as needed) */
            }

            /* Adding subtle bounce animation on hover for potential icons */
            .hiring-area .icon {
                transition: transform 0.3s ease;
            }

            .hiring-area .icon:hover {
                transform: scale(1.1);
                /* Slight bounce effect */
            }

            /* Optional: Add a hover effect for the background image if applicable */
            .hiring-area .hire-text:hover {
                background-position: center center;
                background-size: 110%;
                /* Zoom in on the background image */
                transition: background-size 0.6s ease;
            }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Select all images within the hire-img class
                const images = document.querySelectorAll(".hiring-area .hire-img img");

                images.forEach(img => {
                    img.addEventListener("mouseover", function () {
                        img.style.transition = "transform 0.5s ease-in-out";
                        img.style.transform = "scale(1.05)";
                    });

                    img.addEventListener("mouseout", function () {
                        img.style.transform = "scale(1)";
                    });
                });

                // Optionally, add more animations for icons or text
                const icons = document.querySelectorAll(".hiring-area .icon");

                icons.forEach(icon => {
                    icon.addEventListener("mouseover", function () {
                        icon.style.transition = "transform 0.3s ease";
                        icon.style.transform = "scale(1.1)";
                    });

                    icon.addEventListener("mouseout", function () {
                        icon.style.transform = "scale(1)";
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
