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
                            <h1 class="animate-heading" >Code Of Conduct</h1>
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
                                    <li class="breadcrumb-item">
                                        <a href="../">About</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Code Of Conduct</li>
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
        <div class="testimonials-area pt-65 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section-title text-center pos-rel mb-40">
                            <div class="section-icon">
                                <img class="section-back-icon" src="../../img/shape/section-title-line.png" alt="Decorative icon" aria-hidden="true" loading="lazy" decoding="async">
                            </div>
                            <div class="section-text pos-rel">
                                <h5 style="color: #db0000;"></h5>
                                <h2 class="animate-heading" style="color: #020025;">Code of Conduct for STAR Labs</h2>
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
                                        <img src="../../img/testimonials/testi-box-bg.png" alt="Card background" aria-hidden="true" loading="lazy" decoding="async">
                                    </div>
                                    <img src="../../img/about/code.png" alt="About Star Laboratories" style="margin-top: -40px;" loading="lazy" decoding="async">
                                    <div class="text-text-boxx">
                                        <p style="all: unset; margin: initial; padding: initial; font-size: 16px;">
                                            This Code of Conduct is applicable to all personnel at STAR Labs,
                                            irrespective of their roles or
                                            employment terms. This includes members of the Board of Directors, interns,
                                            trainees, and
                                            third-party contractors present on STAR Labs premises, collectively referred
                                            to as
                                            "Employee(s)." Employees are required to adhere to the standards set forth
                                            in this Code and to
                                            stay updated on its provisions and any changes. Compliance with relevant
                                            government
                                            regulations and local laws is mandatory. Violations of this Code may lead to
                                            disciplinary actions,
                                            which can include termination of employment. STAR Labs provides a secure
                                            channel for all
                                            employees to confidentially report any unethical or illegal activities that
                                            may violate professional
                                            standards or this Code of Conduct. Employees can report concerns anonymously
                                            or openly, with
                                            all submissions treated seriously. Reports can be made directly to the HR
                                            Department or sent via
                                            email to <a href="mailto:starlabshr@starlabs.com.pk" style="color: #db0000;">starlabshr@starlabs.com.pk</a>.
                                        </p>
                                    </div>
                                </div>
                                <br><br>
                                <div class="mission-vision-list text-center">
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Workplace Respect and Integrity</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                All employees are expected to treat colleagues, customers, and business
                                                partners with respect.
                                                STAR Labs is committed to maintaining a safe work environment free from
                                                harassment, discrimination,
                                                and unprofessional behavior. Any instances of harassment or bullying
                                                must be reported immediately.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Commitment to Diversity and Inclusion</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                STAR Labs values a diverse workforce and is dedicated to fostering an
                                                inclusive culture.
                                                Discrimination based on any characteristic—such as religion, race,
                                                gender, age, or disability—is
                                                strictly prohibited. This commitment extends to all aspects of
                                                employment, from recruitment to
                                                employee development.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Avoidance of Conflicts of Interest</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Employees and board members must exercise good judgment to prevent
                                                conflicts between personal interests
                                                and those of STAR Labs. It is vital to disclose any actual or potential
                                                conflicts of interest, which may
                                                arise from various situations, including outside employment or financial
                                                ties.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Safeguarding Confidential Information</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Protecting sensitive and proprietary information is critical at STAR
                                                Labs. Employees must ensure that
                                                such information is kept secure and not used inappropriately or without
                                                authorization.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Substance Abuse Policy</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                STAR Labs is committed to providing a healthy workplace devoid of
                                                alcohol and drug misuse. This policy
                                                applies to all employees, contractors, and visitors, regardless of the
                                                time or place.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Anti-Bribery Standards</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                STAR Labs prohibits any form of bribery, including gifts, payments, or
                                                benefits that could be seen as
                                                attempting to gain an unfair advantage. Employees must not engage in or
                                                accept actions intended to
                                                improperly influence decisions.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Addressing Misconduct</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Misconduct refers to any violation of this Code. Serious or repeated
                                                infractions may result in
                                                disciplinary actions, including warnings or termination. Specific
                                                examples of misconduct include
                                                demonstrating behavior against STAR Labs' values, defaming STAR Labs and
                                                its employees across various
                                                platforms, negligence or carelessness in the performance of duty, being
                                                habitually late or absent
                                                without permission, leaving the job without permission or conducting
                                                personal affairs at work without
                                                authorization, committing acts that could affect the safety of others,
                                                disturbing other employees during
                                                work hours, failing to meet specific performance targets, using profane
                                                or abusive language while on
                                                duty, unauthorized use of STAR Labs’ letterhead or logo, failing to
                                                declare foreseeable conflicts of
                                                interest, and willful misuse or mistreatment of property.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Gift Acceptance and Hospitality</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Employees should handle gifts and hospitality responsibly, ensuring
                                                compliance with established limits
                                                and avoiding situations that could undermine integrity or influence
                                                business decisions.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Official Representation of STAR Labs</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Employees are not authorized to speak on behalf of STAR Labs without
                                                prior written consent from the CEO,
                                                MD, or Chairman. Communication with the media or public should be
                                                approached with caution.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Enforcement and Compliance</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                STAR Labs is committed to enforcing this Code and ensuring that all
                                                employees understand their
                                                responsibilities. Management and the HR Department will regularly
                                                monitor compliance and address any
                                                violations promptly.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Training and Awareness</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                To uphold the standards outlined in this Code, STAR Labs will provide
                                                regular training sessions to
                                                ensure all employees are familiar with the policies and understand the
                                                expectations for ethical
                                                behavior.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Reporting Concerns</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Employees share the responsibility for identifying and reporting
                                                suspected fraudulent activities. Any
                                                employee who suspects fraudulent conduct should notify their Department
                                                Head or Group Head. If the
                                                immediate supervisor is implicated, the issue should be escalated to a
                                                higher authority. Confidentiality
                                                of the whistleblower is assured, and retaliation is not tolerated.
                                                Detailed procedures for reporting
                                                concerns will be outlined in the training sessions.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Employee Rights and Responsibilities</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                All employees have the right to a safe and respectful work environment
                                                and are responsible for reporting
                                                any unethical behavior they witness. STAR Labs encourages an open
                                                dialogue about ethics and integrity
                                                to foster a positive workplace culture.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Sexual Harassment Policy</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                STAR Labs is committed to providing a work environment free from sexual
                                                harassment. Examples of sexual
                                                harassment include unwelcome sexual advances or requests for sexual
                                                favors, inappropriate touching or
                                                physical contact, sexually oriented comments, jokes, or gestures,
                                                displaying or distributing sexually
                                                suggestive materials, and implying that employment decisions will be
                                                made based on an employee’s
                                                submission to or rejection of sexual overtures. All employees are
                                                encouraged to report any instances of
                                                sexual harassment to their supervisor, departmental head, or HR
                                                department. STAR Labs will take all
                                                complaints seriously and investigate them thoroughly. Retaliation
                                                against individuals who report
                                                harassment or participate in investigations is strictly prohibited.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Misconduct – Breach of the Code of Conduct</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                Serious misconduct involves repeated violations of the Code. Established
                                                misconduct may lead to
                                                reprimands or warnings. Serious misconduct may result in dismissal,
                                                which can include termination
                                                without notice. STAR Labs reserves the right to take legal action if
                                                necessary.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mv-single-list d-flex">
                                        <div class="mv-text">
                                            <p style="color: #020025;">Policy Amendments</p>
                                            <p style="all: unset; margin: initial; padding: initial;" class="just-text">
                                                This policy may be revised at the discretion of STAR Labs. The Chairman
                                                retains the authority to
                                                approve any exceptions or special conditions that align with the
                                                organization’s best interests.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p style="margin-top: 40px;">STAR Labs is dedicated to fostering a workplace that
                                    promotes ethical behavior, respect, and
                                    integrity. By adhering to this Code of Conduct, we can ensure a positive work
                                    environment for
                                    all employees and uphold the values of our organization.</p>

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