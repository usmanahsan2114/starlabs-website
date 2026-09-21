<a href="#main-content" class="sl-skip-link">Skip to main content</a>
<header class="main-header">
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-7 offset-md-1">
                   
                </div>
                <div class="col-xl-5 col-lg-5 col-md-4">
                    <div class="header-top-right-btn f-right">
                        <a href="../contact/" class="btn custom-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu-area -->
    <div class="header-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                    <div class="logo logo-circle pos-rel">
                        <a href="../" aria-label="Star Laboratories - Home">
                            <img src="../img/logo/logo.png" alt="Star Laboratories (Pvt) Ltd logo" class="default-logo" fetchpriority="high" width="160" height="80" decoding="async">
                            <img src="../img/logo/white-logo.png" alt="Star Laboratories (Pvt) Ltd logo" class="sticky-logo" style="display: none;" decoding="async">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="header-right f-right">
                        <div class="header-lang">
                            <div class="sl-lang">
                                <button type="button" class="sl-lang__btn" id="sl-lang-btn"
                                    aria-haspopup="true" aria-expanded="false" aria-label="Select language">
                                    <i class="fas fa-globe" aria-hidden="true"></i>
                                    <span class="sl-lang__current" id="sl-lang-current">EN</span>
                                    <i class="fas fa-angle-down sl-lang__caret" aria-hidden="true"></i>
                                </button>
                                <ul class="sl-lang__menu" id="sl-lang-menu" role="menu">
                                    <li role="none"><button role="menuitem" type="button" data-lang="en">English</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="ar">&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; &mdash; Arabic</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="ur">&#1575;&#1585;&#1583;&#1608; &mdash; Urdu</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="fr">Fran&ccedil;ais &mdash; French</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="fa">&#1601;&#1575;&#1585;&#1587;&#1740; &mdash; Persian</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="ps">&#1662;&#1690;&#1578;&#1608; &mdash; Pashto</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="sw">Kiswahili &mdash; Swahili</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="so">Soomaali &mdash; Somali</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="tr">T&uuml;rk&ccedil;e &mdash; Turkish</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="ru">&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; &mdash; Russian</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="zh-CN">&#20013;&#25991; &mdash; Chinese</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="vi">Ti&#7871;ng Vi&#7879;t &mdash; Vietnamese</button></li>
                                    <li role="none"><button role="menuitem" type="button" data-lang="km">&#6017;&#6098;&#6040;&#6082;&#6042; &mdash; Khmer</button></li>
                                </ul>
                                <!-- Hidden Google Translate engine (driven by the dropdown above) -->
                                <div id="google_translate_element" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                includedLanguages: 'en,ar,sw,fa,fr,ur,ps,so,vi,km,zh-CN,ru,tr',
                                autoDisplay: false
                            }, 'google_translate_element');
                        }
                        (function () {
                            function loadGT() {
                                if (window.__slGTLoaded) { return; }
                                window.__slGTLoaded = true;
                                var s = document.createElement('script');
                                s.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
                                s.async = true;
                                document.head.appendChild(s);
                            }
                            var LABELS = { en:'EN', ar:'AR', ur:'UR', fr:'FR', fa:'FA', ps:'PS', sw:'SW',
                                so:'SO', tr:'TR', ru:'RU', 'zh-CN':'ZH', vi:'VI', km:'KM' };
                            function getCookie(n) {
                                var m = document.cookie.match('(^|;)\\s*' + n + '\\s*=\\s*([^;]+)');
                                return m ? m.pop() : '';
                            }
                            function setTransCookie(lang) {
                                var v = '/en/' + lang, h = location.hostname;
                                document.cookie = 'googtrans=' + v + ';path=/';
                                document.cookie = 'googtrans=' + v + ';path=/;domain=' + h;
                                var parts = h.split('.');
                                if (parts.length > 1) {
                                    document.cookie = 'googtrans=' + v + ';path=/;domain=.' + parts.slice(-2).join('.');
                                }
                            }
                            function currentLang() {
                                var c = decodeURIComponent(getCookie('googtrans') || '');
                                if (c) { var p = c.split('/'); return (p[2] || 'en'); }
                                return 'en';
                            }
                            function applyLang(lang) {
                                if (lang === 'en') {
                                    setTransCookie('en');
                                    document.cookie = 'googtrans=;path=/;expires=Thu, 01 Jan 1970 00:00:00 GMT';
                                    location.reload();
                                    return;
                                }
                                setTransCookie(lang);
                                var combo = document.querySelector('.goog-te-combo');
                                if (combo) {
                                    combo.value = lang;
                                    combo.dispatchEvent(new Event('change'));
                                } else {
                                    location.reload();
                                }
                            }
                            document.addEventListener('DOMContentLoaded', function () {
                                var btn = document.getElementById('sl-lang-btn');
                                var menu = document.getElementById('sl-lang-menu');
                                var current = document.getElementById('sl-lang-current');
                                if (!btn || !menu) { return; }
                                var cur = currentLang();
                                if (cur !== 'en') { loadGT(); }
                                if (current && LABELS[cur]) { current.textContent = LABELS[cur]; }
                                btn.addEventListener('click', function (e) {
                                    e.stopPropagation();
                                    loadGT();
                                    var open = menu.classList.toggle('is-open');
                                    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
                                });
                                menu.querySelectorAll('button[data-lang]').forEach(function (it) {
                                    it.addEventListener('click', function () {
                                        applyLang(this.getAttribute('data-lang'));
                                    });
                                });
                                document.addEventListener('click', function () {
                                    menu.classList.remove('is-open');
                                    btn.setAttribute('aria-expanded', 'false');
                                });
                            });
                        })();
                    </script>

                    <style>
                        .custom-btn {
                            display: inline-block;
                            border-radius: 5px;
                            line-height: 3;
                            margin: 0px 5px 3px 5px;
                            padding: 0px 3px;
                            background-color: #db0000;
                            color: white;
                            text-decoration: none;
                            transition: background-color 0.3s ease;
                            width: 100%;
                            text-align: center;
                        }
                        .custom-btn:hover { background-color: #020025; }

                        /* ---- Custom language selector (drives Google Translate) ---- */
                        .header-lang { padding: 30px 0; float: right; position: relative; }
                        .sl-lang { position: relative; display: inline-block; }
                        .sl-lang__btn {
                            display: inline-flex; align-items: center; gap: 7px;
                            background: transparent; border: 1px solid rgba(0,0,0,0.12);
                            border-radius: 50px; padding: 7px 14px; cursor: pointer;
                            font-size: 14px; font-weight: 600; color: inherit; line-height: 1;
                            transition: border-color .2s ease, background .2s ease;
                        }
                        .sl-lang__btn:hover { border-color: #db0000; }
                        .sl-lang__btn > .fa-globe { color: #db0000; font-size: 15px; }
                        .sl-lang__caret { font-size: 11px; transition: transform .2s ease; }
                        .sl-lang__menu.is-open ~ * .sl-lang__caret,
                        .sl-lang__btn[aria-expanded="true"] .sl-lang__caret { transform: rotate(180deg); }
                        .sl-lang__menu {
                            position: absolute; top: calc(100% + 8px); right: 0;
                            min-width: 220px; max-width: 85vw; background: #fff; list-style: none;
                            margin: 0; padding: 8px 0; border-radius: 10px;
                            box-shadow: 0 10px 30px rgba(0,0,0,0.18);
                            border-top: 3px solid #db0000; z-index: 1002;
                            max-height: 340px; overflow-y: auto;
                            display: none;
                            opacity: 0; visibility: hidden; transform: translateY(-8px);
                            transition: opacity .2s ease, transform .2s ease, visibility .2s ease;
                        }
                        .sl-lang__menu.is-open { display: block !important; opacity: 1 !important; visibility: visible !important; transform: translateY(0) !important; }
                        .sl-lang__menu li { margin: 0; }
                        .sl-lang__menu button {
                            display: block; width: 100%; text-align: left; background: none;
                            border: none; padding: 9px 18px; font-size: 14px; color: #1a1a2e;
                            cursor: pointer; white-space: nowrap;
                        }
                        .sl-lang__menu button:hover { background: #fdeaea; color: #db0000; }

                        /* hide Google Translate's injected banner / tooltip / body offset */
                        #google_translate_element {
                            position: absolute !important; left: -9999px !important;
                            top: 0 !important; height: 0 !important; width: 0 !important;
                            overflow: hidden !important;
                        }
                        .goog-te-banner-frame.skiptranslate,
                        .goog-te-gadget-icon, #goog-gt-tt, .goog-te-balloon-frame { display: none !important; }
                        .goog-text-highlight { background: none !important; box-shadow: none !important; }
                        body { top: 0 !important; position: static !important; }
                        @media (max-width: 991px) {
                            .header-lang {
                                position: absolute !important;
                                right: 64px !important;
                                top: 11px !important;
                                padding: 0 !important;
                                margin: 0 !important;
                                float: none !important;
                                z-index: 1010 !important;
                            }
                            .sl-lang__menu { right: 0 !important; left: auto !important; max-width: 85vw !important; }
                        }
                    </style>
                    <div class="header__menu f-right">
                        <nav id="mobile-menu" aria-label="Primary navigation">
                            <ul>
                                <li><a href="../">Home</a>
                                </li>
                                <li><a href="../about/">About Us</a>
                                    <ul class="submenu">
                                        <li><a href="../about/">At a Glance</a></li>
                                        <li><a href="../about/the-team/">Our Team</a></li>
                                        <li><a href="../about/our-journey/">Our Journey</a></li>
                                        <li><a href="../about/code-of-conduct/">Code of Conduct</a></li>
                                    </ul>
                                </li>
                                <li><a href="../products/">Products</a>
                                    <ul class="submenu">
                                        <li><a href="../products/human/">Human</a></li>
                                        <li><a href="../products/veterinary/">Veterinary </a></li>
                                    </ul>
                                </li>
                                <li><a href="../manufacturing/">Manufacturing</a>
                                    <ul class="submenu">
                                        <li><a href="../manufacturing/">Research & Development</a></li>
                                        <li><a href="../manufacturing/quality-control-and-assurance/">Quality Control & Assurance</a></li>
                                        <li><a href="../manufacturing/production/">Production</a></li>
                                        <li><a href="/contract-manufacturing/">Contract Manufacturing</a></li>
                                        <li><a href="/quality/">Quality &amp; Certifications</a></li>
                                    </ul>
                                </li>
                                <li><a href="../exports/">Exports</a>
                                </li>
                                <li><a href="../careers/">Careers</a>
                                </li>
                                <li><a href="../news-and-events/">News & Events</a>
                                </li>
                                <li><a href="/blog/">Insights</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.main-header');
    const headerMenuArea = header.querySelector('.header-menu-area');
    const sticky = headerMenuArea.offsetTop;

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > sticky) {
            header.classList.add('sticky-header');
            document.body.classList.add('has-sticky-header');
        } else {
            header.classList.remove('sticky-header');
            document.body.classList.remove('has-sticky-header');
        }
    });
});
</script>
