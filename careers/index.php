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
                            <h1 class="animate-heading" >Our Careers</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">Careers</li>
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
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../img/banner/careers.jpg') no-repeat center center;
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
        <section class="about-area pt-120 pb-90">
            <div class="container">
                <div class="row"
                    style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-left-side pos-rel mb-30">
                            <div class="medical-icon-brand-2 medical-icon-brand-3">
                                <img src="../img/about/medical-brand-icon-border.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="about-front-img pos-rel">
                                <img src="../img/about/about-img-3.jpg" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                            <div class="about-shape">
                                <img src="../img/about/about-shape.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side pt-55 mb-30">
                            <div class="about-title mb-20">
                                <h5 class="animate-heading" style="color: #db0000;">About Us</h5>
                                <h2 class="animate-heading" style="color: #020025;">Why Work With Star?</h2>
                            </div>
                            <div class="about-text mb-50 just-text">
                                <p>Choosing to collaborate with Star Labs signifies becoming part of a transformative organization that is unwaveringly dedicated to advancing healthcare through innovation and excellence. We cultivate a collaborative and dynamic work environment that empowers employees to contribute their unique insights and expertise, driving the creation of groundbreaking pharmaceuticals that significantly enhance patient outcomes. Our commitment to professional development is exemplified through comprehensive training programs and mentorship opportunities, ensuring that every team member is equipped to broaden their skill set and advance their careers. <br><br>At Star Labs, we prioritize integrity, quality, and sustainability in all operational aspects, reflecting our deep-seated commitment to ethical practices and social responsibility. Additionally, our expansive global presence and robust export initiatives offer unparalleled opportunities for employees to engage in impactful work that resonates across diverse communities worldwide. By joining our team, you will be part of a mission-driven organization that values innovation, collaboration, and a shared commitment to effecting meaningful change in the healthcare landscape.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <style>
            /* Add a subtle animation to the background */
            .about-area {
                position: relative;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%), url('../img/about/background.jpg') no-repeat center center;
                background-size: cover;
                animation: backgroundMove 10s infinite alternate ease-in-out;
            }

            /* Keyframe for background animation */
            @keyframes backgroundMove {
                0% {
                    background-position: center center;
                }

                100% {
                    background-position: top right;
                }
            }

            /* Animation on image hover */
            .about-area img {
                border-radius: 5px;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
            }

            .about-area img:hover {
                transform: scale(1.1);
                /* Zoom in effect */
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
                /* Shadow for depth */
            }

            /* Icon hover animations - scale and bounce */
            .about-area .mv-icon img {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .about-area .mv-icon img:hover {
                transform: scale(1.2);
                /* Scale up on hover */
                animation: iconBounce 0.5s ease-in-out;
                /* Bounce effect */
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            @keyframes iconBounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-10px);
                }
            }

            /* Animate elements on scroll */
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

            /* Animation for section elements */
            .about-area .about-left-side,
            .about-area .about-right-side,
            .about-area .single-item {
                opacity: 0;
                animation: fadeInUp 1s ease forwards;
            }

            .about-area .about-left-side {
                animation-delay: 0.2s;
            }

            .about-area .about-right-side {
                animation-delay: 0.4s;
            }

            .about-area .single-item {
                animation-delay: 0.6s;
            }

            /* Shape rotation animation */
            .about-area .about-shape img {
                animation: rotateShape 20s linear infinite;
                transform-origin: center;
            }

            @keyframes rotateShape {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Check if an element is in the viewport
                function isInViewport(element) {
                    const rect = element.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                // Animate elements on scroll
                const scrollElements = document.querySelectorAll('.about-left-side, .about-right-side, .single-item');

                function animateOnScroll() {
                    scrollElements.forEach(element => {
                        if (isInViewport(element)) {
                            element.classList.add('animate');
                        }
                    });
                }

                window.addEventListener('scroll', animateOnScroll);

                // Background animation interactivity based on mouse movement
                const aboutArea = document.querySelector('.about-area');
                aboutArea.addEventListener('mousemove', function (e) {
                    const { offsetX, offsetY } = e;
                    const { clientWidth, clientHeight } = aboutArea;

                    // Moving background based on mouse position
                    const moveX = (offsetX / clientWidth - 0.5) * 10;
                    const moveY = (offsetY / clientHeight - 0.5) * 10;

                    aboutArea.style.backgroundPosition = `${50 + moveX}% ${50 + moveY}%`;
                });
            });

        </script>
        <!-- calculate-area start -->
        <section class="appointment-area appointment-area-3 pos-rel pt-115 pb-120"
            style="background: url('../img/appoinment/appointment-bg.jpg') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="calculate-box white-bg">
                            <div class="calculate-content">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="about-title news-letter-title mb-70">
                                            <h5 class="pink-color animate-heading">Apply Now</h5>
                                            <h2 class="animate-heading" >Job Opening
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Position Type (Job/Internship) -->
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <select>
                                            <option value="">Position Type</option>
                                            <option value="job">Job</option>
                                            <option value="internship">Internship</option>
                                        </select>
                                    </div>

                                    <!-- Full Name -->
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <form class="calculate-form appointment-form-3 mb-20" action="#">
                                            <input type="text" placeholder="Full Name">
                                            <i class="fas fa-user"></i>
                                        </form>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <form class="calculate-form appointment-form-3 mb-20" action="#">
                                            <input type="email" placeholder="Email Address">
                                            <i class="fas fa-envelope"></i>
                                        </form>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <form class="calculate-form appointment-form-3 mb-20" action="#">
                                            <input type="text" placeholder="Phone Number">
                                            <i class="fas fa-phone"></i>
                                        </form>
                                    </div>

                                    <!-- Position Applying For -->
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <form class="calculate-form appointment-form-3 mb-20" action="#">
                                            <input type="text" placeholder="Position Applying For">
                                            <i class="fas fa-briefcase"></i>
                                        </form>
                                    </div>

                                    <!-- Upload Resume -->
                                    <div class="col-xl-12">
                                        <form class="calculate-form appointment-form-3 mb-20 new-formm" action="#">
                                            <label for="resume-upload" class="custom-file-upload">
                                                <i class="fas fa-upload"></i> Upload Resume
                                            </label>
                                            <input id="resume-upload" type="file" style="display:none;">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn mt-40">submit form</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .new-formm{
                border: 1px solid #ddd;
            }
            .custom-file-upload {
                display: inline-block;
                padding: 8px 12px;
                cursor: pointer;
                color: #555;
                border: 1px solid #ddd;
                border-radius: 4px;
                background-color: #f8f9fa;
            }

            .custom-file-upload i {
                margin-right: 8px;
                color: red;
            }
        </style>
        <style>
            /* Scoped CSS for the appointment section */
            .appointment-area-3 .calculate-box {
                border-radius: 5px;
                position: relative;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                transform: scale(1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .appointment-area-3 .calculate-box:hover {
                transform: scale(1.02);
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            }

            .appointment-area-3 .calculate-content {
                animation: fadeIn 1s ease-out forwards;
            }

            .appointment-area-3 .calculate-box input,
            .appointment-area-3 .calculate-box select,
            .appointment-area-3 .calculate-box textarea {
                border-radius: 5px;
                transition: border-color 0.3s ease;
            }

            .appointment-area-3 .calculate-box input:focus,
            .appointment-area-3 .calculate-box select:focus,
            .appointment-area-3 .calculate-box textarea:focus {
                border-color: #ff4081;
            }

            .appointment-area-3 .btn {
                border-radius: 5px;
                animation: pulse 2s infinite;
            }

            /* Keyframe animations */
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
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

            @keyframes shake {

                0%,
                100% {
                    transform: translateX(0);
                }

                25% {
                    transform: translateX(-5px);
                }

                50% {
                    transform: translateX(5px);
                }

                75% {
                    transform: translateX(-5px);
                }
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const inputs = document.querySelectorAll('.appointment-area-3 input, .appointment-area-3 textarea');
                const selects = document.querySelectorAll('.appointment-area-3 select');
                const submitBtn = document.querySelector('.appointment-area-3 .btn');

                // Add focus and blur animations for inputs and textareas
                inputs.forEach(input => {
                    input.addEventListener('focus', () => {
                        input.style.borderColor = '#ff4081';
                        input.style.transition = 'border-color 0.3s ease';
                    });
                    input.addEventListener('blur', () => {
                        input.style.borderColor = '#ccc';
                    });
                });

                // Add shake animation to selects on click
                selects.forEach(select => {
                    select.addEventListener('click', () => {
                        select.style.animation = 'shake 0.5s ease';
                        setTimeout(() => {
                            select.style.animation = '';
                        }, 500);
                    });
                });

                // Animate the submit button on hover
                submitBtn.addEventListener('mouseover', () => {
                    submitBtn.style.animation = 'pulse 1s infinite';
                });
                submitBtn.addEventListener('mouseout', () => {
                    submitBtn.style.animation = '';
                });

                // Add a subtle bounce effect when submitting the form
                submitBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    submitBtn.style.animation = 'bounce 0.5s ease';
                    setTimeout(() => {
                        submitBtn.style.animation = '';
                        alert('Form submitted!');
                    }, 500);
                });
            });

            // Bounce effect for the submit button
            @keyframes bounce {
                0 %, 100 % {
                    transform: translateY(0);
                }
                50 % {
                    transform: translateY(-10px);
                }
            }

        </script>
        <!-- calculate-area end -->
        <!-- hiring-area start -->
        <section class="hiring-area pt-120 pb-120">
            <div class="container">
                <div class="row no-gutters hire-bg-2 image-first"
                    style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text">
                            <h2>
                                <div class="animate-heading" >Grow with Star</div>
                                <div class="animate-heading" >Laboratories</div> </h2>
                            <p class="just-text">
                            We invite you to embark on a journey of innovation and excellence within the pharmaceutical industry alongside us. Our dynamic work environment is meticulously designed to nurture talent and inspire creativity, providing employees with the vital resources and support necessary for personal and professional development. We are steadfast in our commitment to continuous learning, offering comprehensive training programs and mentorship opportunities that empower our team members to refine their skills and elevate their career trajectories. As part of Star Labs, you will have the extraordinary opportunity to collaborate with industry experts on pioneering projects that profoundly impact global health. We believe in fostering a culture of collaboration, where diverse perspectives are celebrated and every contribution is valued. Together, we can transcend the boundaries of possibility in healthcare and drive meaningful change. Join us at Star Labs, where your potential can flourish, and together we can shape the future of medicine.

                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../img" src="../img/carrer/carrer2.jpg" alt="Star Laboratories - Carrer2" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="row no-gutters hire-bg"
                    style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="../img" src="../img/carrer/carrer3.jpg" alt="Star Laboratories - Carrer3" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text">
                            <h2 class="animate-heading" >Ready, Set, Internships! </h2>
                            <p class="just-text">At Star Labs, we perceive internships as an exhilarating launchpad for aspiring innovators in the pharmaceutical realm! Our internship program is designed to immerse you in hands-on experiences that spark creativity and generate tangible impact. You will actively engage with our talented team on pivotal projects that align with our mission of enhancing global health. We foster a vibrant and inclusive atmosphere where learning is not only enriching but also enjoyable, and mentorship is integral—consider it your personal growth adventure! You’ll gain invaluable insights into the pharmaceutical industry while forging connections that can shape your future career. If you're ready to unleash your potential and make a meaningful difference, join us at Star Labs and embark on an exhilarating journey that will set you on the path to success!

                            </p>
                            <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                class="btn btn-icon ml-0"><span>+</span>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hiring-area end -->
        <style>
            /* Ensure styles are scoped to the hiring-area */
            .hiring-area .hire-img img {
                border-radius: 5px;
                transition: transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease;
            }

            .hiring-area .hire-img img:hover {
                transform: scale(1.05);
                opacity: 0.9;
                box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
                /* Adds a 3D shadow effect */
            }

            .hiring-area .hire-text h1 {
                animation: slideInFromLeft 1s ease-in-out;
            }

            .hiring-area .hire-text p {
                animation: fadeInText 2s ease-in-out;
            }

            .hiring-area .btn-icon {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .hiring-area .btn-icon:hover {
                transform: scale(1.05);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            @keyframes slideInFromLeft {
                from {
                    transform: translateX(-50px);
                    opacity: 0;
                }

                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes fadeInText {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes pulseAnimation {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.02);
                }

                100% {
                    transform: scale(1);
                }
            }

            .hiring-area .btn-icon:hover {
                animation: pulseAnimation 0.6s infinite;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Smooth reveal effect on scroll for hire-text elements
                const elements = document.querySelectorAll('.hiring-area .hire-text');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        } else {
                            entry.target.classList.remove('visible');
                        }
                    });
                }, {
                    threshold: 0.5
                });

                elements.forEach(element => {
                    observer.observe(element);
                });

                // Add hover effects for images
                const images = document.querySelectorAll('.hiring-area .hire-img img');
                images.forEach(img => {
                    img.addEventListener('mouseover', () => {
                        img.style.transform = 'scale(1.05)';
                        img.style.opacity = '0.9';
                        img.style.boxShadow = '0 15px 25px rgba(0, 0, 0, 0.3)';
                    });

                    img.addEventListener('mouseout', () => {
                        img.style.transform = 'scale(1)';
                        img.style.opacity = '1';
                        img.style.boxShadow = 'none';
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