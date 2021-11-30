@php
use App\Enums\UserRoles;
$style = (lang_dir() == 'rtl') ? 'apps.rtl' : 'apps';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
<head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <title>Finance Token | Finance Gems</title>
    <meta name="title" content="Finance+ | Finance Tokens">
    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="site-token" content="{{ site_token() }}">
    <title>@yield('title') | {{ site_info('name') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="Finance+ | Finance Tokens">
    <meta property="og:description" content="Keeping the balance between Health and Wealth">
    <meta property="og:image" content="../www.financeplus.io/assets/meta.html">
    <meta name="image" property="og:image" content="../www.financeplus.io/assets/meta.html">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="index.html">
    <meta property="twitter:title" content="Finance Tokens | Finance Health Gems">
    <meta property="twitter:description" content="Keeping the balance between Health and Wealth">
    <meta property="twitter:image" content="../www.financeplus.io/assets/meta.html">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{ asset('frontend-assets/noften.webflow.cd0125c33.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend-assets/main-12.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('frontend-assets/webfont.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Poppins:regular,500,600,700,800,900"],
            },
        });
    </script>
    <script type="text/javascript">
        !(function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            (n.className += t + "js"),
            ("ontouchstart" in o ||
                (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
        })(window, document);
    </script>
    <link href="../www.financeplus.io/assets/6091950ff8d487e8cd404266_app.html" rel="apple-touch-icon" />
    <link href="https://unpkg.com/swiper@7/swiper-bundle.min.css" rel="stylesheet" />
    <meta name="format-detection" content="telephone=no" />
    <style>
      .btn {
        display: inline-block;
        background: #0064cf;
        border-radius: 18px;
        padding: .4rem 1rem;
        font-size: .85rem;
        color: #FFFFFF;
      }
    </style>
</head>

<body class="body">
    <div class="page-wrapper">
        <div class="right-floating-cookie" id="modal4" style="
							transform: translate3d(-80%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg)
							rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
							transform-style: preserve-3d;
							opacity: 0;
							display: none;
							">
            <div class="cookie-content"><img alt="" class="right-cookie-image" loading=" " src="{{ asset('frontend-assets/60a390ac6a869f2d984dbacb_cookie.png') }}" width="60" />
                <div>
                    <div class="cookie-text">We use cookie to improve your experience on our site. By using our site you consent cookies.</div>
                    <a class="cookie-button-blue w-button" data-w-id="737af890-45c5-121a-f6ce-7e8e0d900efa" href="index-2.html#" id="close-modal4">Allow Cookies</a></div>
            </div>
        </div>

        <div class="section header" id="header">
            <div class="arrow-menu">
                <div class="user-account-container"></div>

                <div class="user-balance-container"></div>
            </div>

            <div class="navbar-main w-nav" data-animation="default" data-collapse="medium" data-duration="400" data-w-id="946aafba-ed02-59e5-f64d-2299de98e932" role="banner">
                <div class="navbar-container w-container">
                    <div class="navbar-wrapper-main">
                        <div class="wall-logo">
                            <a class="logo w-nav-brand w--current" href="index-2.html#header"><img alt="" loading="eager" src="{{ asset('frontend-assets/logo.svg') }}" width="180" /> </a>
                        </div>

                        <nav class="w-nav-menu" role="navigation">
                          <a class="nav-link w-nav-link" href="index-2.html#about" style="max-width: 1200px">About token</a>
                          <a class="nav-link w-nav-link" href="index-2.html#roadmap" style="max-width: 1200px">Roadmap</a>
                          <a class="nav-link w-nav-link" href="" style="max-width: 1200px">Invest</a> 
                          <a class="nav-link w-nav-link" href="index-2.html#team" style="max-width: 1200px">Our team</a> 
                          <a class="nav-link w-nav-link" href="index-2.html#faq" style="max-width: 1200px">FAQ</a>
                          @auth
                          
                          @else
                            <a class="nav-link w-nav-link" href="{{ route('auth.register.form') }}" style="max-width: 1200px">Register</a>
                            <a class="nav-link w-nav-link btn" href="{{ route('auth.login.form') }}" style="max-width: 1200px">Login</a>
                          @endauth
                          {{-- <a class="nav-link w-nav-link user-balance-container" href="index-2.html#" style="max-width: 1200px"> </a>
                          <a class="nav-link w-nav-link user-account-container" href="index-2.html#" style="max-width: 1200px"> </a> --}}
                        </nav>
                    </div>
                </div>

                <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
            </div>

            <div class="container-default w-container">
                <div class="hero-content">
                    <h1 class="heading-1">This is the Dome Where All Hearts Beat</h1>
                    <div class="_2-buttons">
                        <a href="https://noften.com/assets/whitepaper.pdf" target="_blank" class="button-primary margin w-inline-block">
                            <div class="button-content">
                                <img src="https://www.noften.com/assets/6086a0afb3eac6297dfcfa0d_File List 1.svg" loading="lazy" alt="" class="button-icon margin" />
                                <div>Whitepaper</div>
                            </div>
                        </a>
                        <div>
                            {{-- <a onclick="lightbox_open();" class="button-secondary w-inline-block">
                                <div class="button-content-1">
                                    <img src="https://www.noften.com/assets/80ad3248d86a179e81c679a6_video.svg" loading="lazy" alt="" class="button-icon margin" />
                                    <div onclick="lightbox_open();" class="text-block-5">
                                        Watch Video
                                    </div>
                                </div>
                            </a> --}}
                            <a href="#modals" class="button-secondary w-inline-block">
                                <div class="button-content-1">
                                    <img src="{{ asset('frontend-assets/80ad3248d86a179e81c679a6_video.svg') }}" loading=" " alt="" class="button-icon margin" />
                                    <div class="text-block-5">
                                        Buy Token
                                    </div>
                                </div>
                            </a>
                            <div id="light">
                                <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                                <video id="VisaChipCardVideo" width="800" controls>
													<source src="assets/noften-video.html" type="video/mp4" />
													<!--Browser does not support <video> tag -->
												</video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-wrapper">
                    <div class="socials-grid">
                        <div class="w-layout-grid grid-1">
                            <a href="https://twitter.com/nOFTEN_NFT" target="_blank" class="logo-container w-inline-block">
                                <img src="{{ asset('frontend-assets/607ec2a0b3f7fe22070e27ee_twitter.svg') }}" loading="lazy" alt="" />
                            </a>
                            <a href="https://www.facebook.com/watch/?v=404981147832114" target="_blank" class="w-inline-block ftv-block">
                                <div style="position: relative;">


                                    <div id="ftv" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    </div>
                                </div>
                            </a>
                            <a href="http://instagram.com/nOFTEN_NFT" target="_blank" class="logo-container w-inline-block">
                                <img src="{{ asset('frontend-assets/607ec2a03bec193800b25354_insta.svg') }}" loading="lazy" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @yield('content')
        
        <div class="section-footer">
            <div style="justify-content: center;
								display: flex;
								align-items: center;
								flex-direction: column;">
                <div class="heading-insta terms" style="font-size: 13px; text-align: center; margin: 0;">Public Sale Address : 0x76e5266a7a3fd57c27a449ffb5c1d2c7c8ac688e</div>
                <div class="heading-insta terms" style="font-size: 13px; text-align: center; margin: 0;"><a href="https://explorer.etherlite.org/token/0xEB3CEFBfF7BDE091FFDF4e089Bd58039b3982fA8" style="color:09458d;">NOF Token Address : 0xEB3CEFBfF7BDE091FFDF4e089Bd58039b3982fA8 </a></div>
            </div>

            <div style="justify-content: center;
								display: flex;
								align-items: center;
								flex-direction: column; display: none;">
                <div class="heading-insta terms" style="font-size: 13px; text-align: center; margin: 0;">Public Sale Address : 0x76e5..c688e</div>

                <div class="heading-insta terms" style="font-size: 13px; text-align: center; margin: 0;">NOF Token Address : 0x76e5..c688e</div>
            </div>

            <ul class="terms">
                <li>
                    <div><a href="terms.html" target="_blank"><span>Terms</span></a></div>
                </li>
                <li>
                    <div><a href="privacy.html" target="_blank"><span>Privacy Policy</span></a></div>
                </li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('frontend-assets/jquery-3.5.1.min.dc5e7f18c8.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend-assets/webflow.167b7903d.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <style type="text/css">
        .section-footer {
            display: flex;
            padding-top: 10 px;
            padding-bottom: 20 px;
            display: flex;
            /* padding-bottom: 29 px ; */
            flex-direction: column;
        }
        
        .container-footer {
            margin-left: inherit;
        }
        
        .terms {
            text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            color: rgb(128, 128, 128);
            box-sizing: border-box;
            outline: none;
            margin: 0 auto;
            border: 0px;
            font: inherit;
            list-style: none;
            flex-direction: row;
            vertical-align: inherit;
            max-width: 100%;
            min-height: 0px;
            min-width: 0px;
            display: flex;
            -webkit-box-align: stretch;
            align-items: stretch;
            margin-right: 32px;
            order: 0;
            border-width: 0px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            align-items: center;
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
            margin-top: 15px;
        }
        
        .terms li {
            text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            color: rgb(128, 128, 128);
            list-style: none;
            box-sizing: border-box;
            outline: none;
            margin: 0px;
            padding: 0px;
            border: 0px;
            font: inherit;
            margin-left: 16px;
            margin-right: 16px;
            vertical-align: inherit;
            max-width: 100%;
            min-height: 0px;
            min-width: 0px;
            flex-shrink: 0;
            flex-direction: column;
            flex-basis: auto;
            display: flex;
            -webkit-box-align: stretch;
            align-items: stretch;
            border-width: 0px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
        }
        
        .terms div {
            text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            color: rgb(128, 128, 128);
            list-style: none;
            box-sizing: border-box;
            outline: none;
            margin: 0px;
            padding: 0px;
            border: 0px;
            font: inherit;
            max-width: 100%;
            min-height: 0px;
            min-width: 0px;
            flex-shrink: 0;
            flex-direction: column;
            flex-basis: auto;
            display: flex;
            -webkit-box-align: stretch;
            align-items: stretch;
            border-width: 0px;
            border-style: solid;
            border-color: rgb(255, 255, 255);
            vertical-align: middle;
        }
        
        .terms a {
            text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            list-style: none;
            box-sizing: border-box;
            outline: none;
            background-color: transparent;
            margin: 0px;
            padding: 0px;
            border: 0px;
            font: inherit;
            vertical-align: inherit;
            text-decoration: none;
            transition: all 0.12s ease-in-out 0s;
            color: rgb(128, 128, 128);
        }
        
        .terms span {
            text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            list-style: none;
            color: rgb(128, 128, 128);
            box-sizing: border-box;
            outline: none;
            margin: 0px;
            padding: 0px;
            border: 0px;
            font: inherit;
            font-family: inherit;
            font-weight: 900;
            margin-right: 8px;
            font-size: 14px;
            vertical-align: inherit;
        }
        
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        
        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 360px;
        }
        
        .swiper-slide img {
            display: block;
            width: 100%;
        }
    </style>
    <script>
        (function() {
            var deadline = "2021/10/25 00:00";

            function pad(num, size) {
                var s = "0" + num;
                return s.substr(s.length - size);
            }
            // fixes "Date.parse(date)" on safari
            function parseDate(date) {
                const parsed = Date.parse(date);
                if (!isNaN(parsed)) return parsed;
                return Date.parse(date.replace(/-/g, "index.html").replace(/[a-z]+/gi, " "));
            }

            function getTimeRemaining(endtime) {
                let total = parseDate(endtime) - Date.parse(new Date());
                let seconds = Math.floor((total / 1000) % 60);
                let minutes = Math.floor((total / 1000 / 60) % 60);
                let hours = Math.floor((total / (1000 * 60 * 60)) % 24);
                let days = Math.floor(total / (1000 * 60 * 60 * 24));
                return {
                    total,
                    days,
                    hours,
                    minutes,
                    seconds,
                };
            }

            function clock(id, endtime) {
                let days = document.getElementById(id + "-days");
                let hours = document.getElementById(id + "-hours");
                let minutes = document.getElementById(id + "-minutes");
                let seconds = document.getElementById(id + "-seconds");
                var timeinterval = setInterval(function() {
                    var time = getTimeRemaining(endtime);
                    if (time.total <= 0) {
                        clearInterval(timeinterval);
                    } else {
                        days.innerHTML = pad(time.days, 2);
                        hours.innerHTML = pad(time.hours, 2);
                        minutes.innerHTML = pad(time.minutes, 2);
                        seconds.innerHTML = pad(time.seconds, 2);
                    }
                }, 1000);
            }
            clock("js-clock", deadline);
        })();
    </script>
    <script src="{{ asset('frontend-assets/js.cookie.min.js') }}"></script>
    <script>
        var cookieName4 = "modalClosed4";
        if (typeof Cookies.get(cookieName4) !== "undefined") {
            $("#modal4").remove();
        }
        $("#close-modal4").on("click", function() {
            Cookies.set(cookieName4, "ok", {
                expires: 7,
            });
        });
    </script>
    <script type="text/javascript">
        const swiper = new Swiper('.mySwiper', {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            autoplay: true,
            loop: true
        });
        $("#news-carousel > div:gt(0)").hide();
        setInterval(function() {
            $("#news-carousel > div:first")
                .fadeIn(100)
                .next()
                .hide()
                .end()
                .appendTo("#news-carousel");
        }, 3000);
    </script>
    <script>
        window.document.onkeydown = function(e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        };

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById("light").style.display = "block";
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById("light").style.display = "none";
            lightBoxVideo.pause();
        }
    </script>
    <script src="{{ asset('frontend-assets/direflowBundle.js') }}"></script>
    <script>
        if (!window.ethereum) {
            const component = document.querySelector("noften-comps");
            let balanceList = document.querySelectorAll(".user-balance-container");
            console.log(balanceList);
            for (let i = 0; i < balanceList.length; i++) {
                let container = balanceList.item(i);
                console.log(container);
                // container.innerHTML = "Check NOF Balance";
                container.style.cursor = "pointer";
                container.addEventListener("click", () => {
                    component.setAttribute("showUserAddressModal", true);
                });
            }
            let arrowBalanceContainer = document.querySelector(
                ".arrow-menu > .user-balance-container"
            );
            let arrowAccountContainer = document.querySelector(
                ".arrow-menu > .user-account-container"
            );
            if (arrowBalanceContainer) {
                arrowBalanceContainer.style.padding = "8px";
                arrowBalanceContainer.style.borderRadius = "16px";
                arrowBalanceContainer.style.border = "1px solid 09458d";
            }
        }

        function handleNoftenComponentEvents() {
            console.log("HANDLE EVENTSS");
            const component = document.querySelector("noften-comps");
            component.addEventListener("loaded", () => {
                console.log("LOADED");
            });
            component.addEventListener("hide-user-modal", (event) => {
                component.setAttribute("showUserAddressModal", false);
            });
            component.addEventListener("account-update", (event) => {
                console.log(event);
                let containerList = document.querySelectorAll(
                    ".user-account-container"
                );
                for (let i = 0; i < containerList.length; i++) {
                    let container = containerList.item(i);
                    if (event.detail && event.detail.account) {
                        let x = event.detail.account;
                        let trimmed = x.substr(0, 5) + "..." + x.substr(-5);
                        container.innerHTML = trimmed;
                        container.classList.add("active");
                    } else {
                        container.classList.remove("active");
                    }
                }
            });
            component.addEventListener("balance-update", (event) => {
                let balanceList = document.querySelectorAll(
                    ".user-balance-container"
                );
                for (let i = 0; i < balanceList.length; i++) {
                    let container = balanceList.item(i);
                    if (event.detail && typeof event.detail.balance !== "undefined") {
                        let x = event.detail.balance;
                        container.innerHTML = `${x} NOF`;
                    }
                }
                let arrowBalanceContainer = document.querySelector(
                    ".arrow-menu > .user-balance-container"
                );
                let arrowAccountContainer = document.querySelector(
                    ".arrow-menu > .user-account-container"
                );
                if (arrowBalanceContainer) {
                    arrowBalanceContainer.style.border = "none";
                    arrowBalanceContainer.style.fontWeight = "bold";
                    arrowBalanceContainer.style.width = "100%";
                    arrowBalanceContainer.style.textAlign = "right";
                    arrowBalanceContainer.style.padding = 0;
                    arrowAccountContainer.appendChild(arrowBalanceContainer);
                }
            });
        }
        handleNoftenComponentEvents();

        function handleURL() {
            // let salesContainer = document.querySelector(".section.sale");
            // let countContainer = document.querySelector(".section.count");
            // countContainer.remove();
            // if (window.location.search && window.location.search.includes("?ico")) {
            //   // salesContainer.styles.display = "block";
            // } else {
            //   salesContainer.remove();
            // }
        }
        // handleURL();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TEZFNP4RW9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-TEZFNP4RW9");
    </script>
    <script>
        window.fwSettings = {
            'widget_id': 84000000223
        };
        ! function() {
            if ("function" != typeof window.FreshworksWidget) {
                var n = function() {
                    n.q.push(arguments)
                };
                n.q = [], window.FreshworksWidget = n
            }
        }()
    </script>
    <script type='text/javascript' src='{{ asset('frontend-assets/ind-widget.freshworks.com/widgetBase/bootstrap.js') }}' async defer></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/svg.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend-assets/starshine.t.min.js') }}"></script>
    <script type='text/javascript'>
        window.smartlook || (function(d) {
            var o = smartlook = function() {
                    o.api.push(arguments)
                },
                h = d.getElementsByTagName('head')[0];
            var c = d.createElement('script');
            o.api = new Array();
            c.async = true;
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.src = 'https://rec.smartlook.com/recorder.js';
            h.appendChild(c);
        })(document);
        smartlook('init', '4970ed036e90d5e420fe58420cf09bdef8e2bfc0');
    </script>
    <script>
        var curEff = 'ftv';
        var glamEff = new StarShine({
            ID: 'ftv',
            width: 730,
            height: 70,
            duration: 1250,
            interval: 800,
            starType: 'default',
            delay: 0,
            color: '#fff',
            size: 120
        }).loop(glamFunc);

        function glamFunc() {
            this.star({
                x: 495,
                y: 15
            });
        }
    </script>
    <style type="text/css">
        @media screen and (max-width: 479px) {
            .ftv-block {
                grid-column-start: 1;
                grid-column-end: 3;
            }
            .grid-1 a:not(.ftv-block) {
                grid-row-start: 2;
            }
        }
    </style>
</body>

<!-- Mirrored from financeplus.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Nov 2021 13:49:14 GMT -->

</html>