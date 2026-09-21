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
                            <h1 class="animate-heading" >Our Journey</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">Journey</li>
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
        <!-- Our Journey Start -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="timeline-section">
                        <div class="timeline-container">
                            <svg class="timeline-svg" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"
                                viewBox="0 0 800 400">
                                <path
                                    d="M373.03546142578125,2.5077602863311768C372.88623046875,9.372331341107685,391.9876403808594,36.97984524567922,372.14007568359375,43.695186614990234C352.2925109863281,50.41052798430125,274.0960973103841,36.382927576700844,253.9500732421875,42.799808502197266C233.80404917399088,49.21668942769369,231.8640594482422,76.07805061340332,251.26393127441406,82.19647216796875C270.66380310058594,88.31489372253418,333.9372329711914,80.10725657145183,370.34930419921875,79.51033782958984C406.7613754272461,78.91341908772786,453.3210805257161,72.79499689737956,469.7363586425781,78.61495971679688C486.1516367594401,84.43492253621419,485.4054819742839,107.71477381388347,468.8409729003906,114.43011474609375C452.2764638264974,121.14545567830403,406.61214447021484,117.56393686930339,370.34930419921875,118.9070053100586C334.08646392822266,120.2500737508138,271.70841217041016,115.77318445841472,251.26393127441406,122.488525390625C230.81945037841797,129.2038663228353,227.83485666910806,153.826779683431,247.6824188232422,159.1990509033203C267.5299809773763,164.57132212320963,333.3403142293294,155.3190714518229,370.34930419921875,154.72215270996094C407.3582941691081,154.12523396809897,453.6195373535156,149.05142720540366,469.7363586425781,155.61753845214844C485.8531799316406,162.18364969889322,483.91319783528644,187.5527089436849,467.05023193359375,194.1188201904297C450.18726603190106,200.68493143717447,404.6721776326497,194.11882527669272,368.5585632324219,195.0142059326172C332.44494883219403,195.90958658854166,270.51456960042316,192.62653350830078,250.36854553222656,199.49110412597656C230.22252146402994,206.35567474365234,228.2825444539388,230.0832087198893,247.6824188232422,236.20162963867188C267.0822931925456,242.32005055745444,330.2064895629883,237.2462387084961,366.7677917480469,236.20162963867188C403.32909393310547,235.15702056884766,450.63495381673175,225.15862019856772,467.05023193359375,229.93397521972656C483.46551005045575,234.7093302408854,481.97320048014325,258.13842010498047,465.25946044921875,264.853759765625C448.54572041829425,271.56909942626953,402.5829442342122,268.7337137858073,366.7677917480469,270.22601318359375C330.95263926188153,271.7183125813802,270.21610768636066,267.53990173339844,250.36854553222656,273.80755615234375C230.52098337809244,280.07521057128906,228.2825444539388,302.4596710205078,247.6824188232422,307.8319396972656C267.0822931925456,313.20420837402344,331.1018702189128,306.7873179117839,366.7677917480469,306.0411682128906C402.43371327718097,305.2950185139974,445.8595886230469,297.5350748697917,461.6779479980469,303.35504150390625C477.4963073730469,309.1750081380208,477.3470764160156,333.9471689860026,461.6779479980469,340.9609680175781C446.0088195800781,347.9747670491536,384.0784556070964,337.8271179199219,367.6631774902344,345.4378356933594C351.2478993733724,353.0485534667969,363.93242899576825,379.7607014973958,363.186279296875,386.6252746582031"
                                    fill="none" stroke-width="6" stroke="#db0000" stroke-linecap="round">
                                </path>
                                <defs>
                                    <linearGradient id="SvgjsLinearGradient1001">
                                        <stop stop-color="hsl(37, 99%, 67%)" offset="0"></stop>
                                        <stop stop-color="hsl(316, 73%, 52%)" offset="1"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div class="timeline-label start">JOURNEY OF STAR LABS</div>
                            <div class="timeline-point" id="icon1"><i class="fas fa-flag"></i></div>

                            <div class="timeline-point" id="icon2" onmouseover="flipCard(1)" onmouseout="unflipCard(1)">
                                <i class="fas fa-building"></i>
                            </div>

                            <div class="flip-card">
                                <div id="card1" class="timeline-content left" onmouseover="flipCard(1)"
                                    onmouseout="unflipCard(1)">
                                    <div class="timeline-content-front">
                                        <h3>1960 </h3>
                                        <p>Foundation Year</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Established in 1960 as a Veterinary Pharmaceutical Company</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon3" onmouseover="flipCard(2)" onmouseout="unflipCard(2)">
                                <i class="fas fa-rocket"></i>
                            </div>

                            <div class="flip-card">
                                <div id="card2" class="timeline-content right" onmouseover="flipCard(2)"
                                    onmouseout="unflipCard(2)">
                                    <div class="timeline-content-front">
                                        <h3>1978</h3>
                                        <p>Human Products</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Began production of pharmaceutical products for human use</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon4" onmouseover="flipCard(3)" onmouseout="unflipCard(3)">
                                <i class="fas fa-industry"></i>
                            </div>

                            <div class="flip-card">
                                <div id="card3" class="timeline-content left" onmouseover="flipCard(3)"
                                    onmouseout="unflipCard(3)">
                                    <div class="timeline-content-front">
                                        <h3>1994</h3>
                                        <p>Global Expansion</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Entered the export market</p>
                                    </div>
                                </div>
                            </div>

                            <!-- New timeline points and content -->
                            <div class="timeline-point" id="icon5" onmouseover="flipCard(4)" onmouseout="unflipCard(4)">
                                <i class="fas fa-flask"></i>
                            </div>

                            <div class="flip-card">
                                <div id="card4" class="timeline-content right" onmouseover="flipCard(4)"
                                    onmouseout="unflipCard(4)">
                                    <div class="timeline-content-front">
                                        <h3>1999</h3>
                                        <p>R&D Launch</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Launched a dedicated Research & Development (R&D)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon6" onmouseover="flipCard(5)" onmouseout="unflipCard(5)">
                                <i class="fas fa-globe"></i>
                            </div>


                            <div class="flip-card">
                                <div id="card5" class="timeline-content left" onmouseover="flipCard(5)"
                                    onmouseout="unflipCard(5)">
                                    <div class="timeline-content-front">
                                        <h3>2018</h3>
                                        <p>ISO Certification</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Achieved ISO 9001:2015 certification</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon7" onmouseover="flipCard(6)" onmouseout="unflipCard(6)">
                                <i class="fas fa-award"></i>
                            </div>


                            <div class="flip-card">
                                <div id="card6" class="timeline-content right" onmouseover="flipCard(6)"
                                    onmouseout="unflipCard(6)">
                                    <div class="timeline-content-front">
                                        <h3>2010</h3>
                                        <p>Export Growth</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Surpassed exports to over 30 countries</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon8" onmouseover="flipCard(7)" onmouseout="unflipCard(7)">
                                <i class="fas fa-leaf"></i>
                            </div>


                            <div class="flip-card">
                                <div id="card7" class="timeline-content left" onmouseover="flipCard(7)"
                                    onmouseout="unflipCard(7)">
                                    <div class="timeline-content-front">
                                        <h3>2021</h3>
                                        <p>Further Certifications</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Achieved ISO 14001:2015 and ISO 45001:2018 certifications.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon0" onmouseover="flipCard(8)" onmouseout="unflipCard(8)">
                                <i class="fas fa-industry"></i>
                            </div>

                            <div class="flip-card">
                                <div id="card8" class="timeline-content right" onmouseover="flipCard(8)"
                                    onmouseout="unflipCard(8)">
                                    <div class="timeline-content-front">
                                        <h3>2023 & 2024</h3>
                                        <p>Top Exporter</p>
                                    </div>
                                    <div class="timeline-content-back">
                                        <p>Awarded the PESA Award by PPMA as Pakistan's top exporter</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-point" id="icon9"><i class="fas fa-check"></i></div>
                            <div class="timeline-label end">FUTURE AWAITS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Journey End -->
        <!-- Our Journey CSS Start-->
        <style>
            .timeline-section {
                max-width: 980px;
                margin: 40px auto;
                padding: 30px;
                background-color: white;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }

            .timeline-container {
                position: relative;
                height: 400px;
                padding: 0 20px;
            }

            .timeline-svg {
                position: absolute;
                left: 54%;
                top: 0;
                transform: translateX(-50%);
                height: 100%;
                width: 100%;
            }

            .timeline-point {
                position: absolute;
                width: 30px;
                height: 30px;
                background-color: white;
                border: 2px solid #db0000;
                border-radius: 50%;
                transform: translate(-50%, -50%);
                z-index: 3;
                transition: all 0.3s ease;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #db0000;
                cursor: pointer;
            }

            #card1 {
                top: 9%;
            }

            #card2 {
                top: 16%;
            }

            #card3 {
                top: 28%;
            }

            #card4 {
                top: 35.5%;
            }

            #card5 {
                top: 47.5%;
            }

            #card6 {
                top: 55%;
            }

            #card7 {
                top: 66%;
            }

            #card8 {
                top: 73%;
            }

            /* Icons Styling Start */
            #icon1 {
                top: 2.8%;
                left: 51.8%;
            }

            #icon2 {
                top: 15.8%;
                left: 36.6%;
            }

            #icon3 {
                top: 23.8%;
                left: 62.6%;
            }

            #icon4 {
                top: 35.7%;
                left: 36.3%;
            }

            #icon5 {
                top: 44%;
                left: 62%;
            }

            #icon6 {
                top: 54.6%;
                left: 36.4%;
            }

            #icon7 {
                top: 62%;
                left: 62%;
            }

            #icon8 {
                top: 73%;
                left: 36.5%;
            }

            #icon9 {
                bottom: -2%;
                left: 49.8%;
            }

            #icon0 {
                top: 81%;
                left: 61.4%;
            }

            /* Icons Styling End*/


            .timeline-point:hover {
                transform: translate(-50%, -50%) scale(1.2);
            }


            .timeline-content {
                position: absolute;
                width: calc(30% - 40px);
                height: 55px;
                perspective: 1000px;
                transition: transform 0.2s;
                transform-style: preserve-3d;
                cursor: pointer;

            }

            .timeline-content.flip {
                transform: rotateY(180deg);
            }

            .timeline-content-front,
            .timeline-content-back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 10px;
                background-color: #e5e7e9;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .timeline-content-back {
                transform: rotateY(180deg);
                background-color: #db0000;
                color: white;
            }

            .timeline-content.left {
                right: 77%;
            }

            .timeline-content.right {
                left: 72%;
            }

            .timeline-content h3 {
                margin-top: 0;
                margin-bottom: 5px;
                color: #db0000;
                font-size: 1em;
            }

            .timeline-content p {
                margin: 0;
                font-size: 0.8em;
                line-height: 15px;
            }

            .timeline-content-back p {
                margin: 5px 0;
                color: white;
            }

            .timeline-label {
                position: absolute;
                left: 50%;
                transform: translateX(-45%);
                text-align: center;
                font-size: 0.9em;
                font-weight: bold;
                color: #db0000;
            }

            .timeline-label.start {
                top: -25px;
            }

            .timeline-label.end {
                bottom: -22px;
            }

            @media (max-width: 965px) {
                .timeline-container {
                    height: 55vw;
                    /* height for mobile */
                    position: relative;
                }

                .timeline-svg {
                    width: 100%;
                    left: 50%;
                    transform: translateX(-47%) scale(1.1);
                }

                #icon1 {
                    top: 7%;
                    left: 49.8%;
                }

                #icon2 {
                    top: 19.8%;
                    left: 30.8%;
                }

                #icon3 {
                    top: 26.9%;
                    left: 64%;
                }

                #icon4 {
                    top: 37.3%;
                    left: 30.8%;
                }

                #icon5 {
                    top: 44%;
                    left: 64%;

                }

                #icon6 {
                    top: 54%;
                    left: 31%;
                }

                #icon7 {
                    top: 60%;
                    left: 63%;
                }

                #icon8 {
                    top: 70%;
                    left: 31%;
                }

                #icon9 {
                    bottom: 3%;
                    left: 48.2%;
                }

                #icon0 {
                    top: 77%;
                    left: 63%;
                }
            }

            @media (max-width: 767px) {
                .timeline-container {
                    height: 55vw;
                    /* height for mobile */
                    position: relative;
                }

                .timeline-svg {
                    width: 100%;
                    left: 50%;
                    transform: translateX(-47%) scale(1.1);
                }

                .timeline-content {
                    height: 40px;
                    width: calc(30% - 10px);
                    font-size: 10px;
                }

                .timeline-content p {
                    font-size: 10px;
                    line-height: 10px;
                }

                .timeline-content.left {
                    right: 75%;
                    /* Adjusted position for mobile */
                }

                .timeline-content.right {
                    left: 70%;
                    /* Adjusted position for mobile */
                }

                .timeline-label {
                    font-size: 0.8em;
                    /* Smaller font size for mobile */
                }

                .timeline-point {
                    width: 25px;
                    /* Slightly smaller points */
                    height: 25px;
                }

                #card1 {
                    top: 15%;
                }

                #card2 {
                    top: 22%;
                }

                #card3 {
                    top: 32%;
                }

                #card4 {
                    top: 40%;
                }

                #card5 {
                    top: 50%;
                }

                #card6 {
                    top: 55%;
                }

                #card7 {
                    top: 66%;
                }

                #card8 {
                    top: 72%;
                }

                #icon1 {
                    top: 7%;
                    left: 49.8%;
                }

                #icon2 {
                    top: 19.8%;
                    left: 30.8%;
                }

                #icon3 {
                    top: 26.9%;
                    left: 64%;
                }

                #icon4 {
                    top: 37.3%;
                    left: 30.8%;
                }

                #icon5 {
                    top: 44%;
                    left: 64%;

                }

                #icon6 {
                    top: 54%;
                    left: 31%;
                }

                #icon7 {
                    top: 60%;
                    left: 63%;
                }

                #icon8 {
                    top: 70%;
                    left: 31%;
                }

                #icon9 {
                    bottom: 3%;
                    left: 48.2%;
                }

                #icon0 {
                    top: 76%;
                    left: 63%;
                }
            }

            @media (max-width: 480px) {

                .timeline-container {
                    height: 55vw;
                    /* height for mobile */
                    position: relative;
                }

                .timeline-svg {
                    width: 100%;
                    left: 50%;
                    transform: translateX(-47%) scale(1.1);
                }

                .timeline-content {
                    height: 32px;
                    width: calc(32.1% - 0.2px);
                    font-size: 7px;
                }

                .timeline-content p {
                    font-size: 7px;
                    line-height: 7px;
                }

                .timeline-content.left {
                    right: 75%;
                    /* Adjusted position for mobile */
                }

                .timeline-content.right {
                    left: 70%;
                    /* Adjusted position for mobile */
                }

                .timeline-content p {
                    font-size: 8px;
                    line-height: 9px;
                }

                .timeline-point {
                    width: 25px;
                    /* Slightly smaller points */
                    height: 25px;
                }

                #card1 {
                    top: 13%;
                }

                #card2 {
                    top: 20%;
                }

                #card3 {
                    top: 32%;
                }

                #card4 {
                    top: 39%;
                }

                #card5 {
                    top: 49%;
                }

                #card6 {
                    top: 55%;
                }

                #card7 {
                    top: 65%;
                }

                #card8 {
                    top: 71%;
                }

                #icon1 {
                    top: 7%;
                    left: 49.8%;
                }

                #icon2 {
                    top: 19.8%;
                    left: 30.8%;
                }

                #icon3 {
                    top: 26.9%;
                    left: 64%;
                }

                #icon4 {
                    top: 37.3%;
                    left: 30.8%;
                }

                #icon5 {
                    top: 44%;
                    left: 64%;

                }

                #icon6 {
                    top: 54%;
                    left: 31%;
                }

                #icon7 {
                    top: 60%;
                    left: 63%;
                }

                #icon8 {
                    top: 70%;
                    left: 31%;
                }

                #icon9 {
                    bottom: 3%;
                    left: 48.2%;
                }
            }

            @media (max-width: 360px) {

                .timeline-container {
                    height: 55vw;
                    /* height for mobile */
                    position: relative;
                }

                .timeline-svg {
                    width: 100%;
                    left: 50%;
                    transform: translateX(-47%) scale(1.1);
                }

                .timeline-content {
                    height: 25px;
                    width: calc(36.1% - 0.2px);
                    font-size: 5px;
                }

                .timeline-content p {
                    font-size: 6px;
                    line-height: 5px;
                }

                .timeline-content.left {
                    right: 75%;
                    /* Adjusted position for mobile */
                }

                .timeline-content.right {
                    left: 70%;
                    /* Adjusted position for mobile */
                }

                .timeline-point {
                    width: 16px;
                    height: 15px;


                }

                .timeline-point i {
                    font-size: 8px;
                    /* Added to make the icon itself smaller */
                }

                #card1 {
                    top: 14%;
                }

                #card2 {
                    top: 24%;
                }

                #card3 {
                    top: 31%;
                }

                #card4 {
                    top: 39.5%;
                }

                #card5 {
                    top: 47.3%;
                }

                #card6 {
                    top: 55.5%;
                }

                #card7 {
                    top: 62.4%;
                }

                #card8 {
                    top: 70.3%;
                }

                #icon1 {
                    top: 11.8%;
                    left: 49.8%;
                }

                #icon2 {
                    top: 22.8%;
                    left: 30.8%;
                }

                #icon3 {
                    top: 29.9%;
                    left: 64%;
                }

                #icon4 {
                    top: 38.3%;
                    left: 30.8%;
                }

                #icon5 {
                    top: 44%;
                    left: 64%;

                }

                #icon6 {
                    top: 54%;
                    left: 31%;
                }

                #icon7 {
                    top: 60%;
                    left: 63%;
                }

                #icon8 {
                    top: 67%;
                    left: 31%;
                }

                #icon9 {
                    bottom: 3%;
                    left: 48.2%;
                }

                #icon0 {
                    top: 73%;
                    left: 63%;
                }
            }
        </style>
        <!-- Our Journey CSS End-->
        <!-- Our Journey JS Start-->
        <script>
            let flipTimeout; // Variable to hold the timeout
            let currentFlippedCard = null; // Track the currently flipped card

            function flipCard(cardNumber) {
                // If there's a currently flipped card, unflip it
                if (currentFlippedCard !== null && currentFlippedCard !== cardNumber) {
                    document.getElementById('card' + currentFlippedCard).classList.remove('flip');
                }

                // Flip the selected card
                clearTimeout(flipTimeout); // Clear any existing timeout
                flipTimeout = setTimeout(() => {
                    document.getElementById('card' + cardNumber).classList.add('flip');
                    currentFlippedCard = cardNumber; // Update the currently flipped card
                }, 100); // Short delay for flipping
            }

            function unflipCard(cardNumber) {
                clearTimeout(flipTimeout); // Clear any existing timeout
                flipTimeout = setTimeout(() => {
                    document.getElementById('card' + cardNumber).classList.remove('flip');
                }, 100); // Short delay for unflipping
            }
        </script>
        <!-- Our Journey JS End-->
        <!-- testimonials-area start -->
        <div class="testimonials-area pt-25 pb-120 no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section-title text-center pos-rel mb-40">
                            <div class="section-icon">
                                <img class="section-back-icon" src="../../img/section/section-back-icon.png" alt="Star Laboratories - Section Back Icon" loading="lazy" decoding="async">
                            </div>
                            <div class="section-text pos-rel">
                                <h5> <br></h5>
                                <h2 class="animate-heading" style="color: #020025;">Inside Star Laboratories</h2>
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
                                        <img src="../../img/testimonials/testi-box-bg.png" alt="Milestone card background" aria-hidden="true" loading="lazy" decoding="async">
                                    </div>
                                    <div class="testi-quato-icon">
                                        <img src="../../img/testimonials/testi-quato-icon.png" alt="Quotation icon" aria-hidden="true" loading="lazy" decoding="async">
                                    </div>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials-area end -->
        <!-- analysis-area start -->
        <section class="analysis-area pos-rel theme-bg pb-90 no-padding-top" style="background-color: #020025;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav nav-pills mb-65 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <div class="nav-link-content">
                                        <img src="../../img/analysis/search-icon.png" alt="Star Laboratories - Search Icon" loading="lazy" decoding="async">
                                        <h6>Q&A</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <div class="nav-link-content">
                                        <img src="../../img/analysis/search-icon-2.png" alt="Star Laboratories - Search Icon 2" loading="lazy" decoding="async">
                                        <h6>R&D</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <div class="nav-link-content">
                                        <img src="../../img/analysis/search-icon-3.png" alt="Star Laboratories - Search Icon 3" loading="lazy" decoding="async">
                                        <h6>Production</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="analysis-bg-icon">
                                    <img src="../../img/about/qa.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="section-title pos-rel mb-40">
                                            <div class="section-text section-text-white section-text-green pos-rel">
                                                <h5 class="white-color animate-heading">Cure, Care, Connect!</h5>
                                                <h2 class="white-color animate-heading">Quality Control and Assurance</h2>
                                                <p class="white-color just-text">Quality Control and Assurance teams
                                                    ensure that
                                                    every product meets the highest standards of safety and efficacy
                                                    through rigorous testing and compliance with regulatory guidelines
                                                </p>
                                            </div>
                                        </div>
                                        <div class="section-button section-button-left mb-30">
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="../../contact/"
                                                class="btn btn-icon ml-0"><span>+</span>Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4">
                                        <div class="analysis-chart mb-30">
                                            <img src="../../img/about/qa.jpg" style="border-radius: 5px;" alt="About Star Laboratories" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="analysis-bg-icon">
                                    <img src="../../img/about/rnd.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="section-title pos-rel mb-40">
                                            <div class="section-text section-text-white section-text-green pos-rel">
                                                <h5 class="white-color">Cure, Care, Connect!</h5>
                                                <h2 class="white-color">Research and Development</h2>
                                                <p class="white-color just-text">R&D team is dedicated to pioneering
                                                    innovative
                                                    therapies that address critical health needs. By leveraging advanced
                                                    technologies we deliver safe and effective medications globally</p>
                                            </div>
                                        </div>
                                        <div class="section-button section-button-left mb-30">
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="../../contact/"
                                                class="btn btn-icon ml-0"><span>+</span>Contact Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4">
                                        <div class="analysis-chart mb-30">
                                            <img src="../../img/about/rnd.jpg" style="border-radius: 5px;" alt="About Star Laboratories" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="analysis-bg-icon">
                                    <img src="../../img/about/prod.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="section-title pos-rel mb-40">
                                            <div class="section-text section-text-white section-text-green pos-rel">
                                                <h5 class="white-color">Cure, Care, Connect!</h5>
                                                <h2 class="white-color">Production</h2>
                                                <p class="white-color just-text">Our production facilities adhere to
                                                    strict
                                                    regulatory standards, ensuring that every medication is safe,
                                                    effective, and reliable.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="section-button section-button-left mb-30">
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="../../contact/"
                                                class="btn btn-icon ml-0"><span>+</span>Contact Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4">
                                        <div class="analysis-chart mb-30">
                                            <img src="../../img/about/pro.jpg" style="border-radius: 5px;" alt="About Star Laboratories" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- analysis-area end -->
        <style>
            /* 15. Analysis */

            .analysis-bg-icon {
                position: absolute;
                left: 20px;
                top: 47px;
            }

            .analysis-area .nav.nav-pills {
                margin-top: -195px;
            }

            .analysis-area .nav-item {
                text-align: center;
                width: 20%;
                margin: 0 10px;
            }

            .analysis-area .nav-item:last-child {
                margin-right: 0;
            }

            .analysis-area .nav-item a.nav-link {
                padding: 20px 10px;
                border-radius: 10px;
                position: relative;
                height: 200px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
            }

            .analysis-area .nav-item a.nav-link .nav-link-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
            }

            .analysis-area .nav-item a.nav-link img {
                max-width: 50px;
                height: auto;
                margin-bottom: 20px;
            }

            .analysis-area .nav-item a h6 {
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #fff;
                margin: 0;
            }

            .analysis-area .nav-item a.nav-link::after {
                position: absolute;
                height: 20px;
                width: 20px;
                background: #db0000;
                content: "";
                left: 15%;
                bottom: -10px;
                transform: translateX(-50%) rotate(45deg);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }

            .analysis-area .nav-item:nth-child(2) a.nav-link::after {
                background: #020025;
            }

            .analysis-area .nav-item:nth-child(3) a.nav-link::after {
                background: #f4f9fc;
            }

            .analysis-area .nav-item a.nav-link.active::after {
                opacity: 1;
                visibility: visible;
            }

            .analysis-area ul li.nav-item:nth-child(1) a.nav-link {
                background: #db0000;
            }

            .analysis-area ul li.nav-item:nth-child(2) a.nav-link {
                background: #020025;
            }

            .analysis-area ul li.nav-item:nth-child(3) a.nav-link {
                background: #f4f9fc;
            }

            .analysis-area ul li.nav-item:nth-child(3) a.nav-link h6 {
                color: #223645;
            }

            .analysis-chart {
                margin-top: 50px;
            }

            @media (max-width: 991px) {
                .analysis-area .nav-item {
                    width: 25%;
                }

                .analysis-area .nav-item a.nav-link {
                    height: 180px;
                }

                .analysis-area .nav.nav-pills {
                    margin-top: -150px;
                }

                .analysis-area .nav-item a.nav-link img {
                    max-width: 40px;
                }

                .analysis-area .nav-item a h6 {
                    font-size: 12px;
                }
            }

            @media (max-width: 767px) {
                .analysis-area .nav.nav-pills {
                    margin-top: -150px;
                }

                .analysis-area .nav-item {
                    width: 28%;
                    margin: 0 5px;
                }

                .analysis-area .nav-item a.nav-link {
                    height: 160px;
                    padding: 15px 5px;
                }

                .analysis-area .nav-item a.nav-link img {
                    max-width: 30px;
                    margin-bottom: 15px;
                }

                .analysis-area .nav-item a h6 {
                    font-size: 10px;
                }
            }

            @media (max-width: 575px) {
                .analysis-area .nav.nav-pills {
                    margin-top: -100px;
                }

                .analysis-area .nav-item {
                    width: 28%;
                }

                .analysis-area .nav-item a.nav-link {
                    height: 140px;
                    padding: 10px 5px;
                }

                .analysis-area .nav-item a.nav-link img {
                    max-width: 25px;
                    margin-bottom: 10px;
                }

                .analysis-area .nav-item a h6 {
                    font-size: 8px;
                }
            }

            /* Testimonials Section Animations */
            .testimonials-area img {
                transition: transform 0.3s ease, opacity 0.3s ease;
            }

            .testimonials-area img:hover {
                transform: scale(1.1);
                opacity: 0.9;
            }

            /* Analysis Section Animations */
            .analysis-area .nav-item a.nav-link img {
                transition: transform 0.3s ease, filter 0.3s ease;
            }

            .analysis-area .nav-item a.nav-link:hover img {
                transform: rotate(10deg) scale(1.1);
                filter: brightness(1.2);
            }

            .analysis-area .nav-item a.nav-link {
                transition: background-color 0.3s ease, transform 0.3s ease;
            }

            .analysis-area .nav-item a.nav-link:hover {
                transform: translateY(-10px);
            }

            .analysis-area .analysis-chart img {
                transition: transform 0.3s ease, opacity 0.3s ease;
            }

            .analysis-area .analysis-chart img:hover {
                transform: scale(1.05);
                opacity: 0.9;
            }
        </style>

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