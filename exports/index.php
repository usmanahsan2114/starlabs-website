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
        <section class="breadcrumb-bg pt-200 pb-180 position-relative" data-background="../img/banner/exports.jpg">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="page-title">
                            <p class="small-text pb-15 animate-heading">Cure, Care, Connect!</p>
                            <h1 class="animate-heading" >Our Exports</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page">Exports</li>
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
                overflow: hidden;
                padding: 130px 0;
            }

            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4));
                z-index: 1;
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

            .parallax > use {
                animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
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
            <div class="container">
                <div class="row" style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-5">
                        <div class="medical-icon-brand-2">
                            <img src="../img/about/medical-brand-icon-border.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                        </div>
                        <div class="about-left-side pos-rel mb-30">
                            <div class="about-front-img">
                                <img src="../img/exports/exports1.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="about-shape">
                                <img src="../img/about/about-shape.png" alt="About Star Laboratories" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side pt-55 mb-30">
                            <div class="about-title mb-20">
                                <h5 class="animate-heading" style="color: #db0000;">Exports</h5>
                                <h2 style="color: #020025;"> <div class="animate-heading">Star Laboratories Global</div>
                                <div class="animate-heading">Footprints</div> </h2>
                            </div>
                            <div class="about-text just-text">
                                <p>STAR Laboratories stands as a beacon of excellence in global health through its expansive export operations. With a meticulously designed export strategy, we ensure that our wide-ranging portfolio of cutting-edge veterinary and human health products reaches international markets seamlessly. <br><br> By adhering to the most stringent global regulatory standards, STAR Laboratories guarantees that each consignment meets or exceeds expectations in terms of quality, safety, and efficacy. Our advanced logistics and distribution networks enable timely, secure, and efficient deliveries to a growing list of international partners, affirming our position as a trusted global health solution provider. <br><br> We are not just exporting products; we are exporting trust, innovation, and a commitment to improving lives worldwide.
                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->

        <style>
            /* Ensure all images inside the about-area have 5px border radius with smooth hover effects */
            .about-area img {
                border-radius: 5px;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
                will-change: transform, box-shadow;
            }

            /* Image hover effect - No tilting, only scaling and shadow */
            .about-area img:hover {
                transform: scale(1.1);
                /* Slight scaling */
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
                /* Depth shadow for 3D effect */
            }

            /* Animated gradient background for the about-area */
            .about-area {
                position: relative;
                overflow: hidden;
                background: linear-gradient(135deg, rgba(250, 250, 250, 1), rgba(240, 240, 240, 0.9));
                background-size: 300% 300%;
                /* Enlarged for smooth animation */
                animation: backgroundShift 12s ease-in-out infinite;
            }

            /* Background gradient shift animation */
            @keyframes backgroundShift {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            /* Fade-in animation for rows as they appear on the screen */
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(30px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .about-area .row {
                opacity: 0;
                /* Hidden initially */
                animation: fadeIn 0.8s ease-in-out;
                animation-fill-mode: forwards;
            }

            /* Hover effects on about-left-side and about-right-side for interactivity */
            .about-area .about-left-side:hover,
            .about-area .about-right-side:hover {
                transform: scale(1.02);
                /* Subtle scaling on hover */
                transition: transform 0.3s ease;
            }

            /* Author section hover effect with shadow and movement */
            .about-area .about-author:hover {
                transform: translateY(-5px);
                transition: transform 0.3s ease;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const rows = document.querySelectorAll('.about-area .row');
                const aboutArea = document.querySelector('.about-area');

                // IntersectionObserver to animate rows as they appear in the viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1'; // Ensure visibility
                            entry.target.classList.add('visible'); // Trigger fade-in animation
                        }
                    });
                }, { threshold: 0.2 });

                rows.forEach(row => observer.observe(row));

                // Parallax effect for the background on mouse movement
                aboutArea.addEventListener('mousemove', (e) => {
                    const { width, height } = aboutArea.getBoundingClientRect();
                    const x = (e.clientX / width - 0.5) * 15; // Adjust range for movement
                    const y = (e.clientY / height - 0.5) * 15;

                    aboutArea.style.backgroundPosition = `${x}px ${y}px`;
                });

                // Reset background position on mouse leave
                aboutArea.addEventListener('mouseleave', () => {
                    aboutArea.style.backgroundPosition = '0 0';
                });
            });

        </script>
        <!-- Map Start -->
        <!-- ===================== GLOBAL PRESENCE (map + search) ===================== -->
        <section class="sl-gp" aria-labelledby="sl-gp-title">
            <div class="container sl-gp__inner">
                <div class="sl-gp__head">
                    <span class="sl-gp__eyebrow">Cure, Care, Connect!</span>
                    <h2 id="sl-gp-title" class="sl-gp__title">Global Presence</h2>
                    <p class="sl-gp__sub">Star Laboratories exports WHO-GMP certified human and veterinary
                        pharmaceuticals to partners across three continents.</p>
                </div>

                <div class="sl-gp__stats">
                    <div class="sl-gp__stat">
                        <span class="sl-gp__stat-num" data-count="30">0</span><span class="sl-gp__stat-plus">+</span>
                        <span class="sl-gp__stat-label">Countries Served</span>
                    </div>
                    <div class="sl-gp__stat">
                        <span class="sl-gp__stat-num" data-count="3">0</span>
                        <span class="sl-gp__stat-label">Continents</span>
                    </div>
                    <div class="sl-gp__stat">
                        <span class="sl-gp__stat-num" data-count="60">0</span><span class="sl-gp__stat-plus">+</span>
                        <span class="sl-gp__stat-label">Years of Trust</span>
                    </div>
                </div>

                <div class="sl-gp__layout">
                    <!-- LEFT: country search + list (1/4) -->
                    <aside class="sl-gp__panel">
                        <div class="sl-gp__search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input type="text" id="sl-gp-search" placeholder="Search country..."
                                aria-label="Search export countries" autocomplete="off">
                        </div>
                        <ul class="sl-gp__list" id="sl-gp-list" role="listbox" aria-label="Export countries"></ul>
                        <p class="sl-gp__noresult" id="sl-gp-noresult" hidden>No matching country.</p>
                    </aside>
                    <!-- RIGHT: world map with markers (3/4) -->
                    <div class="sl-gp__mapwrap" id="sl-gp-mapwrap">
                        <img id="sl-gp-map" class="sl-gp__map" src="../img/map/world-map.png"
                            alt="World map showing Star Laboratories export countries" decoding="async">
                        <div class="sl-gp__markers" id="sl-gp-markers" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .sl-gp {
                position: relative;
                overflow: hidden;
                padding: 70px 0 80px;
                background: linear-gradient(135deg, #b00000 0%, #db0000 55%, #ff4d4d 100%);
                color: #fff;
            }
            .sl-gp__inner { position: relative; z-index: 2; }
            .sl-gp__head { text-align: center; max-width: 760px; margin: 0 auto 34px; }
            .sl-gp__eyebrow {
                display: inline-block; letter-spacing: 2px; text-transform: uppercase;
                font-size: 13px; font-weight: 700; opacity: 0.85; margin-bottom: 8px;
            }
            .sl-gp__title { color: #fff; font-size: clamp(30px, 4vw, 46px); margin: 0 0 14px; font-weight: 800; }
            .sl-gp__sub { font-size: 16px; opacity: 0.92; margin: 0; }
            .sl-gp__stats { display: flex; flex-wrap: wrap; justify-content: center; gap: 16px; margin-bottom: 40px; }
            .sl-gp__stat {
                background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.22);
                border-radius: 14px; padding: 18px 30px; text-align: center; min-width: 160px;
            }
            .sl-gp__stat-num { font-size: 40px; font-weight: 800; line-height: 1; }
            .sl-gp__stat-plus { font-size: 28px; font-weight: 800; vertical-align: top; }
            .sl-gp__stat-label {
                display: block; margin-top: 6px; font-size: 12px; letter-spacing: 0.5px;
                text-transform: uppercase; opacity: 0.9;
            }

            /* layout: 1/4 panel + 3/4 map */
            .sl-gp__layout { display: flex; gap: 22px; align-items: stretch; }
            .sl-gp__panel {
                flex: 0 0 25%; max-width: 25%;
                background: rgba(255,255,255,0.10); border: 1px solid rgba(255,255,255,0.22);
                border-radius: 16px; padding: 18px; display: flex; flex-direction: column;
            }
            .sl-gp__search { position: relative; margin-bottom: 14px; }
            .sl-gp__search i { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #db0000; }
            .sl-gp__search input {
                width: 100%; border: none; border-radius: 50px; padding: 12px 16px 12px 40px;
                font-size: 14px; color: #222; outline: none;
            }
            .sl-gp__list {
                list-style: none; margin: 0; padding: 0; overflow-y: auto; max-height: 430px; flex: 1;
            }
            .sl-gp__list::-webkit-scrollbar { width: 7px; }
            .sl-gp__list::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.35); border-radius: 10px; }
            .sl-gp__list li {
                display: flex; align-items: center; gap: 9px; padding: 9px 11px; border-radius: 9px;
                cursor: pointer; font-size: 14px; font-weight: 600; transition: background .18s ease;
            }
            .sl-gp__list li:hover { background: rgba(255,255,255,0.16); }
            .sl-gp__list li.is-active { background: #fff; color: #db0000; }
            .sl-gp__list li .flag { font-size: 20px; line-height: 1; }
            .sl-gp__list li .reg { margin-left: auto; font-size: 11px; opacity: 0.75; font-weight: 600; }
            .sl-gp__list li.is-active .reg { color: #db0000; opacity: 0.7; }
            .sl-gp__noresult { text-align: center; opacity: 0.85; font-size: 14px; padding: 14px 0; }

            /* map */
            .sl-gp__mapwrap {
                flex: 1 1 75%; max-width: 75%; position: relative;
                background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.18);
                border-radius: 16px; padding: 20px; display: flex; align-items: center; justify-content: center;
            }
            .sl-gp__map {
                width: 100%; height: auto; display: block;
                filter: brightness(0) invert(1); opacity: 0.92;
            }
            .sl-gp__markers { position: absolute; inset: 20px; pointer-events: none; }
            .sl-gp__marker {
                position: absolute; width: 14px; height: 14px; transform: translate(-50%, -50%);
                pointer-events: auto; cursor: pointer;
            }
            .sl-gp__marker::before {
                content: ""; position: absolute; inset: 0; border-radius: 50%;
                background: #fff; border: 3px solid #8a0104;
                box-shadow: 0 0 0 0 rgba(255,255,255,0.7);
                transition: transform .2s ease;
            }
            .sl-gp__marker:hover::before,
            .sl-gp__marker.is-active::before {
                transform: scale(1.5);
                background: #ffe24d; border-color: #fff;
            }
            .sl-gp__marker.is-active::before { animation: sl-gp-pulse 1.4s infinite; }
            @keyframes sl-gp-pulse {
                0% { box-shadow: 0 0 0 0 rgba(255,255,255,0.75); }
                70% { box-shadow: 0 0 0 16px rgba(255,255,255,0); }
                100% { box-shadow: 0 0 0 0 rgba(255,255,255,0); }
            }
            .sl-gp__marker .tip {
                position: absolute; bottom: 150%; left: 50%; transform: translateX(-50%);
                background: #1a1a2e; color: #fff; font-size: 12px; font-weight: 600;
                padding: 4px 10px; border-radius: 6px; white-space: nowrap;
                opacity: 0; visibility: hidden; transition: opacity .2s ease; pointer-events: none;
            }
            .sl-gp__marker:hover .tip,
            .sl-gp__marker.is-active .tip { opacity: 1; visibility: visible; }

            @media (max-width: 991px) {
                .sl-gp__layout { flex-direction: column; }
                .sl-gp__panel, .sl-gp__mapwrap { flex: 1 1 100%; max-width: 100%; }
                .sl-gp__list { max-height: 240px; }
            }
            @media (prefers-reduced-motion: reduce) {
                .sl-gp__marker.is-active::before { animation: none; }
            }
        </style>

        <script>
            (function () {
                var COUNTRIES = [
                    { n: "Afghanistan", lat: 33.9391, lon: 67.7100, r: "Asia", f: "🇦🇫" },
                    { n: "Bahrain", lat: 26.0667, lon: 50.5577, r: "Middle East", f: "🇧🇭" },
                    { n: "Cambodia", lat: 12.5657, lon: 104.9910, r: "Asia", f: "🇰🇭" },
                    { n: "Chad", lat: 15.4542, lon: 18.7322, r: "Africa", f: "🇹🇩" },
                    { n: "D.R Congo", lat: -4.0383, lon: 21.7587, r: "Africa", f: "🇨🇩" },
                    { n: "Iraq", lat: 33.2232, lon: 43.6793, r: "Middle East", f: "🇮🇶" },
                    { n: "Jordan", lat: 30.5852, lon: 36.2384, r: "Middle East", f: "🇯🇴" },
                    { n: "Kenya", lat: -0.0236, lon: 37.9062, r: "Africa", f: "🇰🇪" },
                    { n: "Kuwait", lat: 29.3117, lon: 47.4818, r: "Middle East", f: "🇰🇼" },
                    { n: "Lebanon", lat: 33.8547, lon: 35.8623, r: "Middle East", f: "🇱🇧" },
                    { n: "Libya", lat: 26.3351, lon: 17.2283, r: "Africa", f: "🇱🇾" },
                    { n: "Madagascar", lat: -18.7669, lon: 46.8691, r: "Africa", f: "🇲🇬" },
                    { n: "Mauritania", lat: 21.0079, lon: -10.9408, r: "Africa", f: "🇲🇷" },
                    { n: "Mauritius", lat: -20.3484, lon: 57.5522, r: "Africa", f: "🇲🇺" },
                    { n: "Mozambique", lat: -18.6657, lon: 35.5296, r: "Africa", f: "🇲🇿" },
                    { n: "Niger", lat: 17.6078, lon: 8.0817, r: "Africa", f: "🇳🇪" },
                    { n: "Nigeria", lat: 9.0820, lon: 8.6753, r: "Africa", f: "🇳🇬" },
                    { n: "Oman", lat: 21.4735, lon: 55.9754, r: "Middle East", f: "🇴🇲" },
                    { n: "Qatar", lat: 25.3548, lon: 51.1839, r: "Middle East", f: "🇶🇦" },
                    { n: "Saudi Arabia", lat: 23.8859, lon: 45.0792, r: "Middle East", f: "🇸🇦" },
                    { n: "Somalia", lat: 5.1521, lon: 46.1996, r: "Africa", f: "🇸🇴" },
                    { n: "Sri Lanka", lat: 7.8731, lon: 80.7718, r: "Asia", f: "🇱🇰" },
                    { n: "Sudan", lat: 12.8628, lon: 30.2176, r: "Africa", f: "🇸🇩" },
                    { n: "Syria", lat: 34.8021, lon: 38.9968, r: "Middle East", f: "🇸🇾" },
                    { n: "Turkmenistan", lat: 38.9697, lon: 59.5563, r: "Asia", f: "🇹🇲" },
                    { n: "U.A.E", lat: 23.4241, lon: 53.8478, r: "Middle East", f: "🇦🇪" },
                    { n: "Uzbekistan", lat: 41.3775, lon: 64.5853, r: "Asia", f: "🇺🇿" },
                    { n: "Vietnam", lat: 14.0583, lon: 108.2772, r: "Asia", f: "🇻🇳" },
                    { n: "Yemen", lat: 15.5527, lon: 48.5164, r: "Middle East", f: "🇾🇪" },
                    { n: "Zambia", lat: -13.1339, lon: 27.8493, r: "Africa", f: "🇿🇲" }
                ];

                var listEl = document.getElementById('sl-gp-list');
                var markersEl = document.getElementById('sl-gp-markers');
                var mapImg = document.getElementById('sl-gp-map');
                var searchEl = document.getElementById('sl-gp-search');
                var noResult = document.getElementById('sl-gp-noresult');
                if (!listEl || !markersEl || !mapImg) { return; }

                // projection calibrated for this world-map.png (matches the original layout bounds)
                var BOUNDS = { left: -169, right: 190, top: 83, bottom: -60 };
                function project(lat, lon, w, h) {
                    var x = (lon - BOUNDS.left) / (BOUNDS.right - BOUNDS.left) * w;
                    var y = (BOUNDS.top - lat) / (BOUNDS.top - BOUNDS.bottom) * h;
                    y += Math.sin((lat - BOUNDS.bottom) / (BOUNDS.top - BOUNDS.bottom) * Math.PI) * (h * 0.15);
                    return { x: x, y: y };
                }

                // build the country list
                COUNTRIES.forEach(function (c, idx) {
                    var li = document.createElement('li');
                    li.setAttribute('role', 'option');
                    li.dataset.idx = idx;
                    li.innerHTML = '<span class="flag">' + c.f + '</span>' +
                        '<span class="name">' + c.n + '</span>' +
                        '<span class="reg">' + c.r + '</span>';
                    li.addEventListener('click', function () { select(idx); });
                    listEl.appendChild(li);
                    c._li = li;
                });

                // build markers
                function placeMarkers() {
                    var w = mapImg.clientWidth, h = mapImg.clientHeight;
                    if (!w || !h) { return; }
                    markersEl.innerHTML = '';
                    COUNTRIES.forEach(function (c, idx) {
                        var p = project(c.lat, c.lon, w, h);
                        var m = document.createElement('div');
                        m.className = 'sl-gp__marker';
                        m.style.left = p.x + 'px';
                        m.style.top = p.y + 'px';
                        m.dataset.idx = idx;
                        m.innerHTML = '<span class="tip">' + c.n + '</span>';
                        m.addEventListener('click', function () { select(idx); });
                        markersEl.appendChild(m);
                        c._marker = m;
                    });
                    if (currentIdx > -1) { highlight(currentIdx); }
                }

                var currentIdx = -1;
                function highlight(idx) {
                    COUNTRIES.forEach(function (c, i) {
                        var on = i === idx;
                        if (c._li) { c._li.classList.toggle('is-active', on); }
                        if (c._marker) { c._marker.classList.toggle('is-active', on); }
                    });
                }
                function select(idx) {
                    currentIdx = idx;
                    highlight(idx);
                    var c = COUNTRIES[idx];
                    if (c._li) { c._li.scrollIntoView({ block: 'nearest', behavior: 'smooth' }); }
                }

                // search
                if (searchEl) {
                    searchEl.addEventListener('input', function () {
                        var q = this.value.trim().toLowerCase();
                        var shown = 0;
                        COUNTRIES.forEach(function (c) {
                            var match = c.n.toLowerCase().indexOf(q) > -1;
                            if (c._li) { c._li.style.display = match ? '' : 'none'; }
                            if (match) { shown++; }
                        });
                        if (noResult) { noResult.hidden = shown !== 0; }
                    });
                }

                // animated stat counters
                function animateCounts() {
                    document.querySelectorAll('.sl-gp__stat-num').forEach(function (el) {
                        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
                        var start = null;
                        function step(ts) {
                            if (!start) { start = ts; }
                            var prog = Math.min((ts - start) / 1400, 1);
                            el.textContent = Math.floor(prog * target);
                            if (prog < 1) { requestAnimationFrame(step); }
                        }
                        requestAnimationFrame(step);
                    });
                }

                // init when the map image is ready (robust: handles cached + late load)
                function ready() { placeMarkers(); }
                if (mapImg.complete && mapImg.naturalWidth) {
                    ready();
                } else {
                    mapImg.addEventListener('load', ready);
                    mapImg.addEventListener('error', function () {
                        // map failed to load: still keep the searchable list usable
                        markersEl.style.display = 'none';
                    });
                }
                window.addEventListener('resize', function () {
                    clearTimeout(window._slGpRz);
                    window._slGpRz = setTimeout(placeMarkers, 150);
                });

                var section = document.querySelector('.sl-gp');
                if ('IntersectionObserver' in window && section) {
                    var io = new IntersectionObserver(function (entries) {
                        entries.forEach(function (e) {
                            if (e.isIntersecting) { animateCounts(); io.disconnect(); }
                        });
                    }, { threshold: 0.3 });
                    io.observe(section);
                } else {
                    animateCounts();
                }
            })();
        </script>
        <!-- Map End  -->
        <!-- Countries Start  -->
        <div class="photo-gallery pt-70 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title text-center pos-rel mb-75">
                            <div class="section-icon">
                                <img class="section-back-icon" src="../img/section/section-back-icon.png" alt="Star Laboratories - Section Back Icon" loading="lazy" decoding="async">
                            </div>
                            <div class="section-text pos-rel">
                                <h2 class="animate-heading" style="color: #db0000;">Our Global Presence</h2>
                                
                            </div>
                            <div class="section-line pos-rel">
                                <img src="../img/shape/section-title-line.png" alt="Section title accent line" aria-hidden="true" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="gallery-button mb-50">
                            <div class="gallery-filter">
                                
                                <button class="active" data-filter=".cate1">Middle East & North Africa</button>
                                <button data-filter=".cate2">South Asia</button>
                                <button data-filter=".cate3">Sub-Saharan Africa</button>
                                <button data-filter=".cate4">Central Asia</button>
                                <button data-filter=".cate5">Southeast Asia</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gallery-portfolio">
                    <!-- Middle East & North Africa (MENA) -->
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/saudia.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/saudia.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Saudi Arabia</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/iraq.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/iraq.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Iraq</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/oman.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/oman.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Oman</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/jordan.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/jordan.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Jordan</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Lebanon.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Lebanon.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Lebanon</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Kuwait.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Kuwait.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Kuwait</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/U.A.E.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/U.A.E.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >U.A.E</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Qatar.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Qatar.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Qatar</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Bahrain.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Bahrain.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Bahrain</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Yemen.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Yemen.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Yemen</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Syria.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Syria.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Syria</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Libya.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Libya.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Libya</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate1">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Sudan.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Sudan.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Sudan</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- South Asia -->
                    <div class="col-lg-4 col-md-6 grid-gallery cate2">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Sri Lanka.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Sri Lanka.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Sri Lanka</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate2">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Afghanistan.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Afghanistan.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Afghanistan</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Central Asia -->
                    <div class="col-lg-4 col-md-6 grid-gallery cate4">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Uzbekistan.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Uzbekistan.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Uzbekistan</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate4">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/turkmenistan.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/turkmenistan.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Turkmenistan</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Sub-Saharan Africa -->
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/nigria.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/nigria.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  ></a>Nigeria</h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/MAURITANIA.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/MAURITANIA.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Mauritania</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/niger.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/niger.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Niger</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/SOMALIA.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/SOMALIA.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Somalia</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/kenya.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/kenya.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Kenya</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/ZAMBIA.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/ZAMBIA.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Zambia</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/MOZAMBIQUE.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/MOZAMBIQUE.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Mozambique</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/MADAGASCAR.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/MADAGASCAR.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Madagascar</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/CHAD.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/CHAD.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Chad</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate3">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/D.R CONGO.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/D.R CONGO.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >D.R. Congo</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Southeast Asia -->
                    <div class="col-lg-4 col-md-6 grid-gallery cate5">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/VIETNAM.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/VIETNAM.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Vietnam</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-gallery cate5">
                        <div class="h5gallery__wrapper pos-rel text-center mb-30">
                            <div class="h5gallery-thumb">
                                <img class="img" src="../img/exports/Cambodia.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                            </div>
                            <div class="h5gallery-content">
                                <a class="popup-image" href="../img/exports/Cambodia.jpg"><i
                                        class="fal fa-plus"></i></a>
                                <h4 class="white-color"><a  >Cambodia</a></h4>
                                <span>
                                    <p style="color: white;"> </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Countries end -->
        <style>
            /* Transparent grey background with border-radius for texts */
            .photo-gallery h4.white-color a {
                background-color: rgba(0, 0, 0, 0.1);
                /* Very transparent grey */
                border-radius: 5px;
                padding: 5px 10px;
                display: inline-block;
                transition: background-color 0.3s ease;
            }

            .photo-gallery span p {
                background-color: rgba(0, 0, 0, 0.1);
                /* Very transparent grey */
                border-radius: 5px;
                padding: 5px 10px;
                display: inline-block;
                transition: background-color 0.3s ease;
            }

            /* Hover effect for texts */
            .photo-gallery h4.white-color a:hover,
            .photo-gallery span p:hover {
                background-color: rgba(0, 0, 0, 0.2);
                /* Slightly darker grey on hover */
            }

            /* Enhanced animated gradient background */
            .photo-gallery {
                position: relative;
                overflow: hidden;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(245, 245, 245, 0.9));
                background-size: 300% 300%;
                /* For smooth gradient animation */
                animation: gradientAnimation 10s ease infinite;
            }

            /* Keyframes for background gradient animation */
            @keyframes gradientAnimation {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            /* Parallax effect for gallery items on hover */
            .photo-gallery .grid-gallery:hover {
                transform: scale(1.05);
                transition: transform 0.5s ease;
            }

            /* Animated glow effect for images */
            .photo-gallery img {
                border-radius: 5px;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
                will-change: transform, box-shadow;
            }

            .photo-gallery img:hover {
                transform: perspective(800px) rotateY(8deg) scale(1.1);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
                /* Strong shadow for 3D effect */
            }

            /* Smooth button hover interaction */
            .photo-gallery .gallery-filter button {
                border-radius: 5px;
                transition: all 0.3s ease;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                position: relative;
                overflow: hidden;
            }

            .photo-gallery .gallery-filter button::after {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 200%;
                height: 100%;
                background: rgba(255, 255, 255, 0.2);
                transition: left 0.4s;
            }

            .photo-gallery .gallery-filter button:hover::after {
                left: 0;
            }

            .photo-gallery .gallery-filter button:hover {
                transform: scale(1.15);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const galleries = document.querySelectorAll('.photo-gallery .grid-gallery');
                const buttons = document.querySelectorAll('.photo-gallery .gallery-filter button');
                const photoGallery = document.querySelector('.photo-gallery');

                // IntersectionObserver for fade-in animation on scroll
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                }, { threshold: 0.3 });

                galleries.forEach(gallery => observer.observe(gallery));

                // Smooth button click with bounce animation
                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        buttons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');

                        // Bounce animation on click
                        button.style.transform = 'scale(1.2)';
                        setTimeout(() => {
                            button.style.transform = 'scale(1)';
                        }, 150);
                    });
                });

                // Parallax background effect based on mouse movement
                photoGallery.addEventListener('mousemove', (e) => {
                    const { width, height } = photoGallery.getBoundingClientRect();
                    const x = (e.clientX / width) * 30 - 15; // Adjust the range for parallax effect
                    const y = (e.clientY / height) * 30 - 15;

                    photoGallery.style.backgroundPosition = `${x}px ${y}px`;
                });

                // Parallax effect on individual gallery items when hovered
                galleries.forEach(gallery => {
                    gallery.addEventListener('mousemove', (e) => {
                        const { width, height } = gallery.getBoundingClientRect();
                        const x = (e.clientX / width - 0.5) * 10; // Adjust range for subtle parallax
                        const y = (e.clientY / height - 0.5) * 10;

                        gallery.style.transform = `translate(${x}px, ${y}px)`;
                    });

                    gallery.addEventListener('mouseleave', () => {
                        gallery.style.transform = 'translate(0, 0)'; // Reset on mouse leave
                    });
                });
            });

        </script>

        <!-- hiring-area start -->
        <section class="hiring-area pt-120 pb-120">
            <div class="container">
                <div class="row no-gutters hire-bg-2" style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="img" src="../img/exports/exports2.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text">
                        <h2  style="color: #020025;">
                                <div class="animate-heading" >Export growth and</div>
                                <div class="animate-heading" >expansion</div> </h2>
                            <p class="just-text">
                            We are currently experiencing substantial export growth as we extend our reach into international markets. Our unwavering commitment to quality and innovation has established us as a trusted partner for healthcare providers across the globe. By meticulously adhering to stringent regulatory standards and fostering robust relationships with distributors, we ensure that our high-quality pharmaceuticals remain accessible to patients in diverse geographical regions. This growth not only underscores our dedication to enhancing global health but also exemplifies our agility in adapting to evolving market demands and regulatory landscapes, thereby solidifying our presence on the world stage.
                            </p>
                            <a data-animation="fadeInLeft" data-delay=".6s" href="../contact/"
                                class="btn btn-icon btn-icon-green ml-0"><span>+</span>Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters hire-bg image-first" style="background-image: url('../img/star-b.gif'); background-size: cover; background-position: center;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text">
                            <p class="just-text">
                            Our strategic expansion initiatives are meticulously focused on augmenting our global footprint while upholding the highest standards of product integrity. We are proactively exploring new markets and cultivating partnerships that resonate with our mission of improving patient outcomes. By harnessing advanced logistics and distribution networks, we guarantee the timely delivery of our products, a critical factor in addressing the healthcare needs of various communities. At STAR Laboratories, we firmly believe that our expansion efforts will not only enhance access to our innovative therapies but also play a pivotal role in the overall advancement of global healthcare.

                            </p>
                            <a data-animation="fadeInLeft" data-delay=".6s" href="../products/"
                                class="btn btn-icon ml-0"><span>+</span>View Products</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-img">
                            <img class="img" src="../img/exports/exports3.jpg" alt="Star Laboratories pharmaceutical exports" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hiring-area end -->
        <style>
            /* Ensure all images in this section have a 5px border radius */
            .hiring-area img {
                border-radius: 5px;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
                will-change: transform, box-shadow;
            }

            /* 3D hover effect for images */
            .hiring-area img:hover {
                transform: scale(1.05);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
                /* Shadow effect for depth */
            }

            /* Button animations and hover effects */
            .hiring-area .btn {
                border-radius: 5px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
            }

            .hiring-area .btn:hover {
                transform: scale(1.1);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                /* 3D effect */
                cursor: pointer;
            }

            .hiring-area .btn::after {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 200%;
                height: 100%;
                background: rgba(255, 255, 255, 0.1);
                transition: left 0.4s;
            }

            .hiring-area .btn:hover::after {
                left: 0;
            }

            /* Fade-in animation for rows on scroll */
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

            .hiring-area .row {
                animation: fadeIn 0.8s ease-in-out;
                opacity: 1;
            }

            /* Background gradient animation */
            .hiring-area {
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(245, 245, 245, 0.9));
                background-size: 200% 200%;
                /* Enlarged background for smooth animation */
                animation: backgroundShift 8s ease infinite;
            }

            @keyframes backgroundShift {
                0% {
                    background-position: 0% 50%;
                }

                100% {
                    background-position: 100% 50%;
                }
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const rows = document.querySelectorAll('.hiring-area .row');
                const hireArea = document.querySelector('.hiring-area');

                // IntersectionObserver to animate rows on scroll
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                }, { threshold: 0.3 });

                rows.forEach(row => observer.observe(row));

                // Parallax effect on images within the hiring area
                hireArea.addEventListener('mousemove', (e) => {
                    const { width, height } = hireArea.getBoundingClientRect();
                    const x = (e.clientX / width - 0.5) * 10;
                    const y = (e.clientY / height - 0.5) * 10;

                    hireArea.querySelectorAll('img').forEach(img => {
                        img.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
                    });
                });

                // Reset image position on mouse leave
                hireArea.addEventListener('mouseleave', () => {
                    hireArea.querySelectorAll('img').forEach(img => {
                        img.style.transform = 'translate(0, 0) scale(1)';
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