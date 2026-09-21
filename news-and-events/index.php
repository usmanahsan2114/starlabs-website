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
                            <h1 class="animate-heading" >News and Events</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">News and Events</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-bg">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../img/banner/news.jpg') no-repeat center center;
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
            .parallax > use {
                animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;
            }
            .parallax > use:nth-child(1) {
                animation-delay: -2s;
                animation-duration: 7s;
            }
            .parallax > use:nth-child(2) {
                animation-delay: -3s;
                animation-duration: 10s;
            }
            .parallax > use:nth-child(3) {
                animation-delay: -4s;
                animation-duration: 13s;
            }
            .parallax > use:nth-child(4) {
                animation-delay: -5s;
                animation-duration: 20s;
            }
            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px,0,0);
                }
                100% { 
                    transform: translate3d(85px,0,0);
                }
            }
        </style>
        <!-- hero-area end -->

        <!-- START PORTFOLIO DESIGN AREA -->
        <section class="portfolio-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <!-- START PORTFOLIO FILTER AREA -->
                    <div class="col-12">
                        <div class="text-center">
                            <div class="portfolio-filter mb-40">
                                <button class="active" data-filter="*">Show all</button>
                                <button data-filter=".cat1">Region 1</button>
                                <button data-filter=".cat2">Region 2</button>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTFOLIO FILTER AREA -->
                </div>
                <div id="portfolio-grid" class="row row-portfolio">
                    <div class="col-lg-4 col-md-6 grid-sizer"></div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/1.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/1.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Export Award 2023 PESA, PPMA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/2.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/2.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Lenbanon Cusomter Visit to Star</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat4 cat3">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/3.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/3.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Madagascar Promotional Visit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat1 cat4">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/4.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/4.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Brunai,Vietnam,Myanmar Ambassadars Visit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/5.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/5.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Srilanka Cusomter Visit to Star</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/6.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/6.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Angola, FILDA Trade Fair, 2012.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/7.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/7.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Angola, FILDA Trade Fair,  2012</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/8.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/8.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Kenya, Aviana Vet Exhibitoin,2014.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/9.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/9.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Libya, Agro Food & Fishing Exhibtion, 2012</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/10.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/10.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Madagascar Promotional Visit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat4 cat3">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/11.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/11.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Morrocco, Visit to AMCO VET, Casablanca, 2015</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat1 cat4">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/12.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/12.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Myanmar, Livestock Expo, 2016</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/13.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/13.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4>Nigeria Ambessador Visit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/14.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/14.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Philippines, Livestock Exp, 2011.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/15.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/15.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Philippines, Livestock Exp, 2011</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/16.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/16.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Srilankan  Cusomter Visit to Star</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/17.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/17.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Srilankan  Cusomters Visit to Star</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat4 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/18.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/18.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Sudan OIE Conference, Khartoum</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat3 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/19.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/19.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Sudan University Function 2017</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat2 cat1">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <img src="../img/news/20.jpg" alt="Star Laboratories news and events" / loading="lazy" decoding="async">
                                    <div class="view-icon">
                                        <a class="popup-image" href="../img/news/20.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
 
                                    <h4>Sudan University Function 2019</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END PORTFOLIO DESIGN AREA -->
         <style>
/* Scoped styles to the portfolio-area */
.portfolio-area .portfolio-filter button {
    background-color: #ffffff; /* Keeping the original color */
    border: none;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Initial subtle shadow */
    border-radius: 5px; /* Rounded corners */
}

.portfolio-area .portfolio-filter button:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Lift-up effect with deeper shadow */
}

.portfolio-area .portfolio-filter button.active {
    background-color: #f0f0f0; /* Maintain the original active state color */
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Stronger shadow for active state */
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}

.portfolio-area .portfolio-filter button:hover {
    animation: pulse 0.6s ease-in-out;
}

.portfolio-area .portfolio-filter button:active {
    transform: translateY(0);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2); /* Softer shadow when pressed */
}

/* Image container hover effects */
.portfolio-area .portfolio-item .portfolio-wrapper {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.portfolio-area .portfolio-item .portfolio-wrapper:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2); /* 3D shadow effect on hover */
}

         </style>
         <script>
            document.addEventListener('DOMContentLoaded', function() {
    // Interactive animations for filter buttons
    const buttons = document.querySelectorAll('.portfolio-area .portfolio-filter button');

    buttons.forEach(button => {
        button.addEventListener('mouseover', () => {
            button.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            button.style.transform = 'translateY(-5px) scale(1.05)';
        });

        button.addEventListener('mouseout', () => {
            button.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
            button.style.transform = 'translateY(0) scale(1)';
        });

        button.addEventListener('click', () => {
            // Remove 'active' class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            // Add 'active' class to the clicked button
            button.classList.add('active');
        });
    });

    // Add hover effect to make portfolio image containers more interactive
    const portfolioWrappers = document.querySelectorAll('.portfolio-area .portfolio-wrapper');

    portfolioWrappers.forEach(wrapper => {
        wrapper.addEventListener('mouseover', () => {
            wrapper.style.transform = 'scale(1.05)';
            wrapper.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.3)'; // Adds a 3D shadow effect
        });

        wrapper.addEventListener('mouseout', () => {
            wrapper.style.transform = 'scale(1)';
            wrapper.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)'; // Reverts to the original shadow
        });

        // Make the entire portfolio-wrapper clickable
        wrapper.addEventListener('click', () => {
            const popupLink = wrapper.querySelector('.popup-image');
            if (popupLink) {
                popupLink.click();
            }
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