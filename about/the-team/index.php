<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include_once('../../include/seo.php'); ?>
            <!-- Include GSAP -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" defer></script>
    <?php include_once('../../include/head2.php'); ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Person",
          "@id": "https://starlabs.com.pk/about/the-team/#muhammad-iqbal-malik",
          "name": "Muhammad Iqbal Malik",
          "jobTitle": "Founder",
          "worksFor": {
            "@type": "Organization",
            "@id": "https://starlabs.com.pk/#organization",
            "name": "Star Laboratories (Pvt) Ltd"
          },
          "image": "https://starlabs.com.pk/img/about/1-8.jpg",
          "description": "Founder of Star Laboratories (Pvt) Ltd in 1960, establishing the company as a leading WHO-GMP certified manufacturer of human and veterinary pharmaceuticals in Pakistan.",
          "knowsAbout": ["Veterinary Medicine", "Pharmaceutical Manufacturing", "Healthcare Innovation"]
        },
        {
          "@type": "Person",
          "@id": "https://starlabs.com.pk/about/the-team/#muhammad-asrar-hussain-malik",
          "name": "Muhammad Asrar Hussain Malik",
          "jobTitle": "Chief Executive Officer",
          "worksFor": {
            "@type": "Organization",
            "@id": "https://starlabs.com.pk/#organization",
            "name": "Star Laboratories (Pvt) Ltd"
          },
          "description": "Chief Executive Officer of Star Laboratories (Pvt) Ltd, driving international expansion to over 30 countries and recipient of the PPMA PESA Top Exporter Award in 2023 and 2024.",
          "award": [
            "PPMA PESA Top Exporter Award 2023",
            "PPMA PESA Top Exporter Award 2024"
          ],
          "knowsAbout": ["Pharmaceutical Leadership", "Global Pharma Exports", "WHO-GMP Manufacturing", "Drug Regulatory Compliance"]
        }
      ]
    }
    </script>
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
                            <h1 class="animate-heading" >Our Team</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">The Team</li>
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
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../../img/banner/about.jpg') no-repeat center center;
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
        <!-- team-area start -->
        <section class="team-area pt-115 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="section-title text-center pos-rel mb-70">
                            <div class="section-icon">
                                <img class="section-back-icon" src="../../img/section/section-back-icon.png" alt="Star Laboratories - Section Back Icon" loading="lazy" decoding="async">
                            </div>
                            <div class="section-text pos-rel">
                                <h5 class="animate-heading" style="color: #db0000;">Our Founders</h5>
                                <h2 class="animate-heading" style="color: #020025;">Stars of the Industry</h2>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="../../img/shape/section-title-line.png" alt="Section divider" aria-hidden="true" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    @media (max-width: 767px) {
                        .col-md-6 {
                            flex: 1 1 100%;
                            max-width: 100%;
                        }

                        .team-member {
                            display: flex;
                            flex-direction: column;
                            order: 2;
                        }

                        .team-member:nth-child(2) {
                            order: 1;
                            /* Ensures "Muhammad Iqbal Malik" comes first */
                        }

                        .team-member:nth-child(1) {
                            order: 2;
                        }

                        .team-member:nth-child(3) {
                            order: 3;
                        }
                    }
                </style>
                <div class="row">
                    <!-- Left Team Member -->
                    <div class="col-xl-4 col-lg-4 col-md-6 team-member">
                        <div class="team-wrapper team-box-2 team-left text-center mb-30">
                            <div class="team-thumb">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="team-member-info mt-35 mb-25">
                                <h3>Muhammad Asrar Hussain Malik</h3>
                                <h6 class="f-500 text-up-case letter-spacing pink-color">Chief Executive Officer</h6>
                                <p class="just-text">Muhammad Asrar Hussain Malik brings over decades of visionary leadership to STAR Labs, steering the company toward unprecedented growth and global recognition. As CEO, his forward-thinking approach has not only expanded STAR Labs’ footprint across 30+ countries but has also cemented its status as a trailblazer in both veterinary and human healthcare industries. His strategic insight, combined with a passion for innovation, has driven the company’s transformation into a global leader, known for its high-quality products and groundbreaking medical solutions.
<br>Under his leadership, STAR Labs has grown from a trusted national name into a prominent international player, with a keen focus on research and development that pushes the boundaries of healthcare technology. Muhammad Asrar Hussain Malik champions a culture of agility and resilience, ensuring that STAR Labs is always ready to meet the changing needs of the industry. His ability to anticipate global market shifts and adapt quickly has kept STAR Labs at the forefront of the pharmaceutical world.
<br>With his unwavering commitment to innovation, Muhammad Asrar Hussain Malik is shaping the future of STAR Labs, leading the company into its next era of growth while staying true to its founding principles of quality, compassion, and excellence.

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Team Member (Highlighted) -->
                    <div class="col-xl-4 col-lg-4 col-md-6 team-member">
                        <div class="team-wrapper team-box-2 team-highlight text-center mb-30">
                            <div class="team-thumb">
                                <img src="../../img/about/1-8.jpg" alt="Muhammad Iqbal Malik" loading="lazy" decoding="async">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="team-member-info mt-35 mb-25">
                                <h3>Muhammad Iqbal <br>Malik</h3>
                                <h6 class="f-500 text-up-case letter-spacing pink-color">Founder</h6>
                                <p class="just-text">Muhammad Iqbal Malik’s journey in creating STAR Labs is a story of passion, resilience, and a deeply rooted belief in the power of science to transform lives. Over 60 years ago, he set out with a bold vision: to build a company that would not only lead the veterinary medicine industry in Pakistan but also make a meaningful impact on the lives of people and animals alike.
<br>Starting from the ground up, Muhammad Iqbal Malik faced numerous challenges, yet his unwavering determination never faltered. With limited resources but endless resolve, he established STAR Labs as a symbol of quality, integrity, and trust. His vision went beyond simply manufacturing medicines—he sought to create solutions that would raise the standard of healthcare in Pakistan, improve outcomes, and bring hope to those in need.
<br>Driven by a deep sense of responsibility to his community, Muhammad Iqbal Malik believed in the power of ethical practices and innovative research to create lasting change. He instilled in STAR Labs a culture of compassion, where the well-being of every patient—whether animal or human—was at the heart of every decision made. His ability to lead with both intellect and empathy made him a figure admired not just as an entrepreneur but as a pioneer dedicated to improving the quality of life.
<br>Muhammad Iqbal Malik’s legacy lives on in the very core of STAR Labs. His values of integrity, persistence, and care continue to inspire generations of leaders within the company. What started as a humble venture is now a market leader, exporting products to over 30 countries, and yet, the spirit of its founder remains the same: a relentless pursuit of excellence, guided by a desire to serve and uplift.
<br>Today, STAR Labs is not just a testament to Muhammad Iqbal Malik’s entrepreneurial brilliance, but to his unshakable belief that a better, healthier world is always within reach, if we dare to dream and work for it.

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Team Member -->
                    <div class="col-xl-4 col-lg-4 col-md-6 team-member">
                        <div class="team-wrapper team-box-2 team-right text-center mb-30">
                            <div class="team-thumb">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="team-member-info mt-35 mb-25">
                                <h3>M. A. Hussain <br> Malik</h3>
                                <h6 class="f-500 text-up-case letter-spacing pink-color">Managing Director</h6>
                                <p class="just-text">
                                M. A. Hussain Malik has been a driving force behind STAR Labs, with over 30 years of expertise in the pharmaceutical industry. As Managing Director, he plays a critical role in shaping the company’s strategic direction and operational excellence. His hands-on approach has led to the successful implementation of innovative processes that have significantly improved product quality and efficiency.
<br>Under M. A. Hussain Malik's leadership, STAR Labs has not only expanded its diverse portfolio of veterinary and human medicines but also strengthened its commitment to research and development. He fosters a culture of continuous improvement, encouraging teams to explore new solutions that meet the evolving needs of healthcare providers and their patients.
<br>A strong advocate for ethical practices and community engagement, M. A. Hussain Malik believes that corporate responsibility is essential for sustainable growth. His vision for STAR Labs combines business success with a commitment to enhancing the health and well-being of animals and humans alike. With a focus on excellence and integrity, he is dedicated to ensuring that STAR Labs remains a trusted leader in the healthcare industry.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area end -->



        <style>
            /* team area */
            .team-box-2 {
                padding: 30px;
                background-color: rgb(255, 255, 255);
                box-shadow: 0px 8px 16px 0px rgba(181, 179, 255, 0.1);
                padding-bottom: 18px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .team-box-2:hover {
                transform: scale(1.05);
                /* Pop-up effect */
                box-shadow: 0px 12px 24px 0px rgba(181, 179, 255, 0.2);
                /* Stronger shadow on hover */
            }

            .team-content h3,
            .team-content h6 {
                margin-bottom: 17px;
                transition: color 0.3s ease, transform 0.3s ease;
            }

            .team-content h6 {
                color: #db0000;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .team-content h3:hover,
            .team-content h6:hover {
                transform: translateY(-5px);
                /* Slight move-up on hover */
                color: #020025;
                /* Text color change */
            }

            .team-link {
                position: absolute;
                bottom: 25px;
                height: 60px;
                width: 60px;
                display: inline-block;
                border-radius: 50%;
                background-color: #020025;
                box-shadow: 0px 8px 16px 0px rgba(143, 181, 105, 0.3);
                font-size: 26px;
                font-weight: 600;
                line-height: 60px;
                color: #fff;
                right: 51px;
                transition: background-color 0.3s ease, box-shadow 0.3s ease;
            }

            .team-link:hover {
                background-color: #db0000;
                box-shadow: 0px 8px 16px 0px rgba(225, 36, 84, 0.2);
                color: #fff;
            }

            .team-author-info {
                position: absolute;
                margin-top: -60px;
                margin-left: 30px;
                transition: all 0.4s ease;
                visibility: hidden;
                opacity: 0;
                right: 0;
                width: 146%;
                left: 0;
                z-index: 99;
                box-shadow: 0px 8px 16px 0px rgba(205, 190, 255, 0.2);
                background: #fff;
            }

            .team-box:hover .team-author-info {
                opacity: 1;
                visibility: visible;
                transform: translateY(-10px);
                /* Slide-up effect */
            }

            .team-author-info span {
                font-size: 12px;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #db0000;
                padding: 11px 20px;
                display: inline-block;
            }

            .team-author-info h6 {
                font-size: 18px;
                color: #223645;
                padding: 11px 20px;
            }

            .team-activation .slick-dots {
                text-align: center;
                margin-bottom: 30px;
            }

            .team-activation .slick-dots li {
                display: inline-block;
                cursor: pointer;
            }

            .team-activation .slick-dots li button {
                text-indent: -9999px;
                padding: 0;
                width: 30px;
                height: 4px;
                border: 0;
                background: #e0e9ff;
                margin: 0 5px;
                cursor: pointer;
            }

            .team-activation .slick-dots li.slick-active button {
                background: #020025;
            }

            .team-social-profile ul {
                padding: 0;
                margin: 0;
                list-style: none;
            }

            .team-social-profile ul li {
                display: inline-block;
                margin: 0 9.5px;
            }

            .team-social-profile ul li a {
                font-size: 14px;
                color: #a0aab1;
                transition: color 0.3s ease;
            }

            .team-social-profile ul li a:hover {
                color: #ce1b28;
            }

            /* Responsive Styles */
            @media (max-width: 1200px) {
                .team-box-2 {
                    padding: 20px;
                    margin-bottom: 20px;
                }

                .team-link {
                    bottom: 20px;
                    right: 40px;
                    height: 50px;
                    width: 50px;
                    font-size: 22px;
                    line-height: 50px;
                }

                .team-author-info {
                    width: 120%;
                }
            }

            @media (max-width: 768px) {
                .team-box-2 {
                    padding: 15px;
                    margin-bottom: 15px;
                }

                .team-link {
                    bottom: 15px;
                    right: 30px;
                    height: 45px;
                    width: 45px;
                    font-size: 20px;
                    line-height: 45px;
                }

                .team-author-info {
                    margin-left: 20px;
                    width: 100%;
                }
            }

            @media (max-width: 480px) {
                .team-box-2 {
                    padding: 10px;
                    margin-bottom: 10px;
                }

                .team-link {
                    bottom: 10px;
                    right: 20px;
                    height: 40px;
                    width: 40px;
                    font-size: 18px;
                    line-height: 40px;
                }

                .team-author-info {
                    margin-left: 10px;
                    width: 100%;
                }

                .team-author-info h6 {
                    font-size: 16px;
                }

                .team-author-info span {
                    font-size: 10px;
                }
            }

            .team-thumb img {
                border-radius: 5px;
            }
        </style>
        <style>
            /* General Team Box Styling */
            .team-box-2 {
                padding: 30px;
                background-color: #fff;
                box-shadow: 0px 8px 16px rgba(181, 179, 255, 0.1);
                padding-bottom: 18px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            /* Left and Right Team Members (Smaller and set back) */
            .team-left,
            .team-right {
                transform: scale(0.9) translateY(10px);
                opacity: 0.9;
            }

            /* Middle Team Member (Highlighted, Larger, and Brought Forward) */
            .team-highlight {
                transform: scale(1.1) translateY(-10px);
                z-index: 1;
                box-shadow: 0px 16px 32px rgba(0, 0, 0, 0.15);
            }

            /* Hover Effects for All Team Members */
            .team-box-2:hover {
                transform: scale(1.05);
                box-shadow: 0px 12px 24px rgba(181, 179, 255, 0.2);
            }

            .team-highlight:hover {
                transform: scale(1.12) translateY(-15px);
            }

            /* Adjustments for Team Wrapper on Smaller Screens */
            @media (max-width: 768px) {

                .team-left,
                .team-right,
                .team-highlight {
                    transform: scale(1) translateY(0);
                }
            }

            /* Gradient overlay on images */
            .team-thumb {
                position: relative;
                overflow: hidden;
            }

            .team-thumb img {
                width: 100%;
                display: block;
            }

            .image-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4));
                transition: opacity 0.3s ease;
            }

            /* Reduce gradient opacity on hover */
            .team-thumb:hover .image-overlay {
                opacity: 0.2;
            }

            /* 3D Effect for Team Members */
            .team-box-2 {
                padding: 30px;
                background-color: #fff;
                box-shadow: 0px 8px 16px rgba(181, 179, 255, 0.1);
                padding-bottom: 18px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .team-left,
            .team-right {
                transform: scale(0.9) translateY(10px);
                opacity: 0.9;
            }

            .team-highlight {
                transform: scale(1.1) translateY(-10px);
                z-index: 1;
                box-shadow: 0px 16px 32px rgba(0, 0, 0, 0.15);
            }

            /* Hover Effects */
            .team-box-2:hover {
                transform: scale(1.05);
                box-shadow: 0px 12px 24px rgba(181, 179, 255, 0.2);
            }

            .team-highlight:hover {
                transform: scale(1.12) translateY(-15px);
            }

            /* Responsive Adjustments */
            @media (max-width: 768px) {

                .team-left,
                .team-right,
                .team-highlight {
                    transform: scale(1) translateY(0);
                }
            }
        </style>

        <!-- team-area start -->
        <!--mission-area end -->
        <section class="team-area pt-75 pb-75 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center pos-rel mb-70">
                            <div class="section-icon">
                                <img class="section-back-icon" src="../../img/section/section-back-icon.png" alt="Star Laboratories - Section Back Icon" loading="lazy" decoding="async">
                            </div>
                            <div class="section-text pos-rel">
                                <h2 class="animate-heading" style="color: #020025;">Meet Our Team</h2>
                            </div>
                            <div class="section-line pos-rel">
                                <img src="../../img/shape/section-title-line.png" alt="Section divider" aria-hidden="true" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row team-activation">
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="../../img/about/t1.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="team-author-info">
                                <span>GM Marketing 
                                </span>
                                <h6>Shabir Ahmad</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="../../img/about/t2.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="team-author-info">
                                <span>Deputy GM admin and regulatory</span>
                                <h6>Col.Tahir Majeed
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="../../img/about/t3.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="team-author-info mb-30">
                                <span>Plant Head
                                </span>
                                <h6>Hasnat Dastgir
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="../../img/about/t4.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="team-author-info mb-30">
                                <span>Director Technical
                                </span>
                                <h6>Asim Fakhar
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="../../img/about/t5.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="team-author-info">
                                <span>Sales Head
                                </span>
                                <h6>Dr Farooq Niazi
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="team-box pos-rel mb-50">
                            <div class="team-thumb">
                                <img src="../../img/about/t6.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="team-author-info">
                                <span>Export Head</span>
                                <h6>Tanveer Ahmed
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>

        </style>
        <script></script>
        <!-- team-area end -->
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