@php
use App\Enums\UserRoles;
$style = (lang_dir() == 'rtl') ? 'apps.rtl' : 'apps';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="site-token" content="{{ site_token() }}">
    <link rel="shortcut icon" href="{{ asset('frontend-assets/front/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/front/css/plugins.css') }}">
    
    <link rel="stylesheet" href="{{ asset('frontend-assets/front/css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('frontend-assets/front/css/colors/navy.css') }}">
    <link rel="preload" href="{{ asset('frontend-assets/front/css/fonts/thicccboi.css') }}" as="style"
    onload="this.rel='stylesheet'">
    <title>@yield('title') | {{ site_info('name') }}</title>
    <meta name="keywords"
        content="Crypto Invest, coin, FNP, Finance Token, Finance Coin, Investment, BNB, BTC, ETH, Cryptocurrency">
    <meta name="description"
        content="Finance+ : We are worldwide investment company who are committed to the principle of revenue maximization & reduction of the financial risks at investing.">
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="Finance Plus | Hello this is Finance+" />
    <meta property="og:description"
        content="Finance+ : We are worldwide investment company who are committed to the principle of revenue maximization & reduction of the financial risks at investing." />
    <meta property="og:image" content="{{ asset('front/img/favicon.html') }}" />
    <meta property="og:site_name" content="Finance+" />
</head>

<style>
  .active {
    margin-bottom: 1px solid #343f52 !important;
  }
</style>

<body>
    <div class="content-wrapper">

        <header class="wrapper bg-soft-primary">
            <nav class="navbar fancy navbar-expand-lg navbar-light caret-none navbar-bg-light">
                <div class="container">
                    <div
                        class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                        <div class="navbar-brand w-100"><a href="{{ route('welcome') }}"><img src="{{ asset('frontend-assets/front/img/logo.png') }}"
                                    srcset="https://financeplus.io/invest/assets/front/img/logo.png 2x" alt="" /></a>
                        </div>
                        <div class="navbar-collapse offcanvas-nav d-lg-flex mx-lg-auto">
                            <div class="offcanvas-header d-lg-none d-xl-none">
                                <a href="{{ route('welcome') }}"><img src="{{ asset('frontend-assets/front/img/logo.png') }}"
                                        srcset="https://financeplus.io/invest/assets/front/img/logo.png 2x"
                                        alt="" /></a>
                                <button type="button"
                                    class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                    aria-label="Close"></button>
                            </div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ route('page', 'about-us') }}">{{ __('About') }}</a>
                                  
                                </li>
                                {{-- <li class="nav-item"><a class="nav-link"
                                        href="affiliates.html">Affiliates</a>

                                </li> --}}

                                <li class="nav-item"><a class="nav-link" href="{{ route('page', 'faqs') }}">{{ __('Faq') }}</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('page', 'terms-and-condition') }}">{{ __('Terms') }}</a>

                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('page', 'privacy-policy') }}">
                                {{ __('Privacy') }} </a>

                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('page', 'contact-us') }}">
                                    {{ __('Contact') }}
                                  </a>
                                </li>
                                <li class="nav-item d-md-none d-sm-block">
                                  <a href="{{ route('auth.login') }}" class="btn mx-0 btn-sm btn-primary rounded-pill">Sign in</a>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

                                {{-- <li class="nav-item"><i id="theme-toggle" class="icon-sun"></i></li>

                                <li class="nav-item dropdown language-select text-uppercase">
                                    <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                                    </ul>
                                </li> --}}
                                @auth
                                  <li class="nav-item"><i id="theme-toggle" class="icon-sun"></i></li>

                                  <li class="nav-item dropdown language-select text-uppercase">
                                      <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          {{ auth()->user()->name }}
                                      </a>
                                      <ul class="dropdown-menu">
                                          <li class="nav-item">
                                            @switch(auth()->user()->role)
                                                @case('user')
                                                    <a class="dropdown-item" 
                                                      href="{{ route('dashboard') }}"
                                                    >
                                                      Dashboard
                                                    </a>
                                                    @break
                                                @case('admin')
                                                    <a class="dropdown-item" 
                                                      href="{{ route('admin.dashboard') }}"
                                                    >
                                                      Dashboard
                                                    </a>
                                                    @break
                                                @default
                                                  <a class="dropdown-item" 
                                                    href="{{ route('admin.dashboard') }}"
                                                  >
                                                    Dashboard
                                                  </a>
                                            @endswitch
                                          </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <em class="icon ni ni-signout"></em><span>{{ __('Sign out') }}</span></a>
                                                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                      </ul>
                                  </li>
                                @else
                                  <li class="nav-item d-none d-md-block">

                                    <a href="{{ route('auth.register') }}" class=" rounded-pill">Register</a>

                                  </li>

                                  <li class="nav-item d-none d-md-block">
                                      <a href="{{ route('auth.login') }}" class="btn btn-sm btn-primary rounded-pill">Sign in</a>
                                  </li>
                                @endauth
                                <li class="nav-item d-lg-none">
                                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                                            data-toggle="offcanvas-nav"><span></span></button></div>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.navbar-collapse-wrapper -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
            <div class="offcanvas-info text-inverse">
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-info-close"
                    aria-label="Close"></button>
                <a href="../index.html"><img src="assets/front/img/logo.png"
                        srcset="https://financeplus.io/invest/assets/front/img/logo.png 2x" alt="" /></a>
                <div class="mt-4 widget">
                    <p>Build Your Future With Investments Making Money From The Volatility of Cryptocurrencies and
                        Offering Great Returns to Our Clients.</p>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">M1, Rue des Coquelicots Luxembourg, L-1356 Luxembourg</address>
                    <a href="mailto:#">info@financeplus.io</a><br /> +00 (123) 456 78 90
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('page', 'about-us') }}">About Us</a></li>
                            <li><a href="{{ route('page', 'contact-us') }}">Contact</a></li>
                            <li><a href="{{ route('page', 'faqs') }}">Faqs</a></li>
                            <li><a href="{{ route('page', 'terms-and-condition') }}">Terms of Use</a></li>
                            <li><a href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Follow Us</h4>
                    <nav class="nav social social-white">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.offcanvas-info -->
        </header>
        <!-- /header -->
        @yield('content')

        <footer class="bg-dark text-inverse">
            <div class="container py-13 py-md-15">
                <div class="row gy-6 gy-lg-0">
                    <div class="col-md-4 col-lg-3">
                        <div class="widget">
                            <img class="mb-4" src="assets/front/img/logo.png"
                                srcset="https://financeplus.io/invest/assets/front/img/logo.png 2x" alt="" />
                            <p class="mb-4">© 2021 Finance+. <br class="d-none d-lg-block" />All rights
                                reserved.</p>
                            <nav class="nav social social-white">
                                <a href="https://twitter.com/fnpplus"><i class="uil uil-twitter"></i></a>
                                <a href="https://www.reddit.com/r/Financeplus/"><i
                                        class="uil uil-reddit-alien-alt"></i></a>
                                <a href="https://t.me/fnpplus"><i class="uil uil-telegram-alt"></i></a>
                                <a href="https://github.com/wilnates/Finance-Token"><i class="uil uil-github"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                            <address class="pe-xl-15 pe-xxl-17">M1, Rue des Coquelicots Luxembourg, L-1356 Luxembourg
                            </address>
                            <a href="mailto:info@financeplus.io">info@financeplus.io</a><br /> <a
                                href="tel:+1 (800) 480-9702">+1 (800) 480-9702</a>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title text-white mb-3">Learn More</h4>
                            <ul class="list-unstyled mb-0">
                              <li><a href="{{ route('page', 'about-us') }}">About Us</a></li>
                              <li><a href="{{ route('page', 'contact-us') }}">Contact</a></li>
                              <li><a href="{{ route('page', 'faqs') }}">Faqs</a></li>
                              <li><a href="{{ route('page', 'terms-and-condition') }}">Terms of Use</a></li>
                              <li><a href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-12 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to
                                you.</p>
                            <div class="newsletter-wrapper">
                                <!-- Begin Mailchimp Signup Form -->
                                <div id="mc_embed_signup2">
                                    <form
                                        action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                        method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                        class="validate dark-fields" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll2">
                                            <div class="mc-field-group input-group form-label-group">
                                                <input type="email" value="" name="EMAIL"
                                                    class="required email form-control" placeholder="Email Address"
                                                    id="mce-EMAIL2">
                                                <label for="mce-EMAIL2">Email Address</label>
                                                <input type="submit" value="Join" name="subscribe"
                                                    id="mc-embedded-subscribe2" class="btn btn-primary">
                                            </div>
                                            <div id="mce-responses2" class="clear">
                                                <div class="response" id="mce-error-response2"
                                                    style="display:none"></div>
                                                <div class="response" id="mce-success-response2"
                                                    style="display:none"></div>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                    type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                    tabindex="-1" value=""></div>
                                            <div class="clear"></div>
                                        </div>
                                    </form>
                                </div>
                                <!--End mc_embed_signup-->
                            </div>
                            <!-- /.newsletter-wrapper -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </footer>
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="{{ asset('frontend-assets/front/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend-assets/front/js/theme.js') }}"></script>

</body>

</html>
