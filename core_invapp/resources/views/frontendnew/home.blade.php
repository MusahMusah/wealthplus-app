@extends('frontendnew.layouts.master')

@section('title', __('Welcome'))
@section('desc', '')
@section('keyword', '')

@section('content')
    <section class="wrapper bg-gradient-primary">
        <div class="container pt-10 pt-md-14 pb-8 text-center">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7">
                    <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/concept2.png') }}"
                            srcset="https://financeplus.io/invest/assets/front/img/concept/concept2@2x.png 2x" alt="" />
                    </figure>
                </div>
                <!-- /column -->
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
                    <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Build Your Future With Investments.</h1>
                    <p class="lead fs-lg mb-7">We're Making Money From The Volatility of Cryptocurrencies and
                        Offering Great Returns to Our Clients.</p>


                    <span>

                        <a class="btn btn-primary rounded-pill me-2" href="register.html">Setup Profile</a>

                    </span>


                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pt-14 pt-md-16">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">What We Do?</h2>
                    <h3 class="display-4 mb-10 px-xl-10">Put your money on autopilot.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
                <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1"
                    style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5 text-center">
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src="{{ asset('frontend-assets/front/img/icons/search-1.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                <h4>Auto-deposits</h4>
                                <p class="mb-2">Never miss a milestone with automatic contributions stay
                                    on track.</p>
                                <a href="register.html" class="more hover link-yellow">Start Investing</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src="{{ asset('frontend-assets/front/img/icons/browser.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                <h4>Dividend reinvesting</h4>
                                <p class="mb-2">We'll instantly put your stock dividends back to work,
                                    earning you more.</p>
                                <a href="register.html" class="more hover link-red">Start Investing</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src="{{ asset('frontend-assets/front/img/icons/chat-2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                                <h4>Automatic rebalancing</h4>
                                <p class="mb-2">We precisely rebalance your portfolio as the market
                                    changes.</p>
                                <a href="register.html" class="more hover link-green">Start Investing</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src="{{ asset('frontend-assets/front/img/icons/megaphone.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                                <h4>Easy access</h4>
                                <p class="mb-2">Manage your accounts from anywhere with our award-winning
                                    website.</p>
                                <a href="register.html" class="more hover link-blue">Start Investing</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-reverse-primary">
        <div class="container py-16 py-md-18">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 align-items-center">
                <div class="col-lg-7 order-lg-2">
                    <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/concept3.png') }}"
                            srcset="https://financeplus.io/invest/assets/front/img/concept/concept3 .png 2x" alt="" />
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Our Methodology</h2>
                    <h3 class="display-4 mb-5">Backed by Nobel Prize-winning Research.</h3>
                    <p class="mb-7">Research has proven that<mark> Passive Investing </mark> — Tracking
                        the Market Over Time Using a Diversified Portfolio — is The Most Reliable Way to Grow Your
                        Money Over the Long Term.</p>
                    <div class="row">
                        <div class="col-lg-9">
                            <form action="#">
                                <div class="form-label-group input-group">
                                    <input type="url" class="form-control" placeholder="Enter Website URL" id="seo-check">
                                    <label for="seo-check">Enter email Address</label>
                                    <a href="register.html"><button class="btn btn-primary" type="button">Start</button></a>
                                </div>
                            </form>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <div class="container py-14 pt-md-17 pb-md-15">
        <div class="row gx-md-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="card shadow-lg me-lg-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                        class="number">01</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Setup</h4>
                                <p class="mb-0">Answer a few questions about your financial goals.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card shadow-lg ms-lg-13 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                        class="number">02</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">quick Analysis</h4>
                                <p class="mb-0">We'll suggest a portfolio with the right amount of risk
                                    for you.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card shadow-lg mx-lg-6 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                        class="number">03</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Make Deposit</h4>
                                <p class="mb-0">Connect your wallet accounts and make a deposit.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-muted mb-3">Ready Yet?</h2>
                <h3 class="display-4 mb-5">Start Investing in 5 minutes.</h3>
                <p>Invest in the companies you believe in — starting with just $100. Fractional shares make it easy
                    to start small and get comfortable with investing.</p>
                <p class="mb-6">New to investing? No worries. We’ll give you all the right information to
                    start growing your money.</p>
                <a href="register.html" class="btn btn-primary rounded-pill mb-0">Start Investing</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-lg-22 mb-xl-24 align-items-center">
            <div class="col-lg-7">
                <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/concept6.png') }}"
                        srcset="https://financeplus.io/invest/assets/front/img/concept/concept6 .png 2x" alt="" />
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="fs-16 text-uppercase text-muted mb-3">Why Choose Us?</h2>
                <h3 class="display-4 mb-7">We bring solutions to make life easier for our clients.</h3>
                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Honest</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>We're what's called a fiduciary. That means we're obligated to give you
                                    actionable feedback that's in your best interest, not ours. Schedule a portfolio
                                    review..</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingTwo">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo"> Human </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>We're loved for our technology. But we also have smart people to answer any
                                    questions or give advice when you need it.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingThree">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Experienced </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Our advisors have thousands of hours of experience advising seasoned,
                                    high-net-worth investors, and folks just starting out..</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                </div>
                <!--/.accordion -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    <div class="container pt-13 pt-md-16 pb-14 pb-md-17">
        <div class="row mt-n3 mb-8 text-center">
            <div class="col-md-11 col-lg-10 col-xl-8 col-xxl-7 mx-auto">
                <img src="{{ asset('frontend-assets/front/img/demos/icon.png') }}"
                    srcset="https://financeplus.io/invest/assets/front/img/demos/icon.png 2x" alt="" />
                <h2 class="display-3 mt-3 mb-3 mb-0 px-lg-10 px-xl-0">Save your time and money by choosing
                    <mark>Finance+</mark> as your Investment Company.
                </h2>
            </div>
            <!-- /column -->
        </div>


        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 pt-md-18 pb-md-16">
                <div class="row gx-md-8 gx-xl-10">
                    <div class="col-lg-6">
                        <div class="card bg-soft-leaf mb-10">
                            <div class="card-body p-12 pb-0">
                                <div class="post-category mb-3 text-leaf">Profits</div>
                                <h3 class="h1 post-title mb-3">Invest and Earn</h3>
                                <p>Diversifying your investments means you can minimize risk while maximizing
                                    rewards. We invest your money across the entire stock market using Exchange
                                    Traded Funds (ETFs).
                                </p>
                                <p>We'll help you choose a risk level you're comfortable with.</p>
                                <a href="register.html" class="more hover link-leaf mb-8">Invest Now</a>
                            </div>
                            <!--/.card-body -->
                            <img class="card-img-bottom" src="{{ asset('frontend-assets/front/img/photos/f3.png') }}"
                                srcset="https://financeplus.io/invest/assets/front/img/photos/f3 .png 2x" alt="" />
                        </div>
                        <!--/.card -->
                    </div>
                    <!-- /column -->
                    <div class="col-lg-6">
                        <div class="card bg-soft-pink">
                            <div class="card-body p-12 pb-0">
                                <div class="post-category mb-3 text-pink">Incentives</div>
                                <h3 class="h1 post-title mb-3">Refer and Earn</h3>
                                <p>You’ve outdone yourself.
                                    Calling all publishers, creators, and bloggers. Join our afﬁliate program to
                                    monetize your content and connect with the broader Finance+ community.
                                </p>
                                <p>
                                    Help us democratize finance for all.</p>
                                <a href="register.html" class="more hover link-pink mb-8">Apply Now</a>
                            </div>
                            <!--/.card-body -->
                            <img class="card-img-bottom" src="{{ asset('frontend-assets/front/img/photos/f4.png') }}"
                                srcset="https://financeplus.io/invest/assets/front/img/photos/f4 .png 2x" alt="" />
                        </div>
                        <!--/.card -->
                    </div>
                    <!-- /column -->

                    <!-- /.row -->
                </div>
                <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/concept8.png') }}"
                                srcset="https://financeplus.io/invest/assets/front/img/concept/concept8 .png 2x" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Our Solutions</h2>
                        <h3 class="display-4 mb-5">Totally secure. Without the security questions.</h3>
                        <p class="mb-6">Your security and trust are important to us. We're committed to
                            protecting your account with the highest standards of security available.</p>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Your money is CDIC insured
                                            up to specified limits.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Control
                                            who can find you on
                                            the app for added privacy.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Two-factor authentication
                                            for added security.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>More than
                                            1.5 million
                                            people use Finance+ products.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-gradient-reverse-primary">
            <div class="container py-14 py-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-6 col-xl-5 align-self-end">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>'Taking the financial system apart has a lot of costs, But we Help
                                                you manage all this at Financ+</p>
                                            <div class="blockquote-details">
                                                <div class="info p-0">
                                                    <h5 class="mb-1">Coriss Ambady</h5>
                                                    <!--<p class="mb-0">Financial Analyst</p>-->
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>“My work at Finance+ has a clear and direct impact on our clients. I
                                                know the things I work on make a difference in people's lives.”</p>
                                            <div class="blockquote-details">
                                                <div class="info p-0">
                                                    <h5 class="mb-1">Cory Zamora</h5>
                                                    <!-- <p class="mb-0">Marketing Specialist</p>-->
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 col-xl-5 offset-xl-1">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>“I feel truly supported to start the kind of projects that I've
                                                wanted to build my whole career. There's a sense of trust and
                                                ownership here.”</p>
                                            <div class="blockquote-details">
                                                <div class="info p-0">
                                                    <h5 class="mb-1">Barclay Widerski</h5>
                                                    <!--  <p class="mb-0">Sales Specialist</p>-->
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-start">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>“I joined the team remotely from Montreal, but I've still been able
                                                to enjoy meaningful work and relationships with my colleagues.
                                                Finance+'s culture is just that strong.”</p>
                                            <div class="blockquote-details">
                                                <div class="info p-0">
                                                    <h5 class="mb-1">Jackie Sanders</h5>

                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-muted mb-3 mt-lg-n6">Our Community</h2>
                        <h3 class="display-4 mb-5">Don't take our word for it. See what customers are saying about
                            us.</h3>
                        <p>“I’ve received an overwhelming amount of support from my Finance+ peers and mentors who
                            helped me grow. I’m incredibly humbled to work with people who genuinely care about my
                            development and inspire me to be better.”</p>
                        <a href="register.html" class="btn btn-primary rounded-pill mt-3">Convinced?</a>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Investment Plans</h2>
                        <h3 class="display-4 mb-15 mb-md-6 px-lg-10">We offer great plans, considerate of your
                            current financial budget.</h3>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="pricing-wrapper position-relative">
                    <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1"
                        style="top: 2rem; right: -2.4rem;"></div>
                    <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1"
                        style="bottom: 0.5rem; left: -2.5rem;"></div>
                    <div class="pricing-switcher-wrapper switcher">
                        <p class="mb-0 pe-3">FOMO</p>
                        <div class="pricing-switchers">
                            <div class="pricing-switcher pricing-switcher-active"></div>
                            <div class="pricing-switcher"></div>
                            <div class="switcher-button bg-primary"></div>
                        </div>
                        <p class="mb-0 ps-3">INVESTOR</p>
                    </div>
                    <div class="row gy-6 mt-3 mt-md-5">
                        <div class="col-md-6 col-lg-4">
                            <div class="pricing card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('frontend-assets/front/img/icons/shopping-basket.svg') }}"
                                        class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                    <h4 class="card-title">9 - 5ive</h4>
                                    <center>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">$</span><span
                                                    class="price-value">100+</span> <span
                                                    class="price-duration">month</span></div>
                                            <div class="price price-hide price-hidden"><span
                                                    class="price-currency">$</span><span class="price-value">5K+</span>
                                                <span class="price-duration">6Months</span></div>
                                        </div>
                                    </center>

                                    <!--/.prices -->
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                        <li><i class="uil uil-check"></i><span> Pay 0.5% management fee </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Personalized portfolio </span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Expert financial advice</span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Dividend reinvesting </span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> Auto-rebalancing
                                            </span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> Auto-deposits
                                            </span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> 24/7 Support</span>
                                        </li>
                                    </ul>



                                    <a class="btn btn-primary rounded-pill" href="register.html">choose plan</a>



                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4 popular">
                            <div class="pricing card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('frontend-assets/front/img/icons/home.svg') }}"
                                        class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                    <h4 class="card-title">Self Employed</h4>
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">5K+</span> <span
                                                class="price-duration">6months</span></div>
                                        <div class="price price-hide price-hidden"><span
                                                class="price-currency">$</span><span class="price-value">50K+</span>
                                            <span class="price-duration">2years</span></div>
                                    </div>
                                    <!--/.prices -->
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                        <li><i class="uil uil-check"></i><span>All 9-5 plan features</span></li>
                                        <li><i class="uil uil-check"></i><span>Reduced 0.4% management fee</span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span>Financial planning session</span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Tax loss harvesting </span></li>
                                        <li><i class="uil uil-check"></i><span> Tax efficient funds</span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> 24/7 Support</span>
                                        </li>
                                    </ul>

                                    <br></br>

                                    <a class="btn btn-primary rounded-pill" href="self.html">Learn More</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                            <div class="pricing card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('frontend-assets/front/img/icons/briefcase-2.svg') }}"
                                        class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                    <h4 class="card-title">Retired</h4>
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">50K+</span> <span
                                                class="price-duration">year</span></div>
                                        <div class="price price-hide price-hidden"><span
                                                class="price-currency">$</span><span class="price-value">150K+</span>
                                            <span class="price-duration">5years</span></div>
                                    </div>
                                    <!--/.prices -->
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                        <li><i class="uil uil-check"></i><span>All self employed plan
                                                features</span></li>
                                        <li><i class="uil uil-check"></i><span> In-depth financial planning
                                            </span></li>
                                        <li><i class="uil uil-check"></i><span>Asset location</span></li>
                                        <li><i class="uil uil-check"></i><span> Dedicated team of advisors</span>
                                        </li>
                                        <li><i class="uil uil-check"></i><span> Personalized financial
                                                report</span></li>
                                        <li><i class="uil uil-check"></i><span> Individualized portfolios
                                                </strong></span></li>
                                        <li><i class="uil uil-check"></i><span> 24/7 Support</span></li>
                                    </ul>

                                    <a class="btn btn-primary rounded-pill" href="retired.html">Learn More</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.pricing-wrapper -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 py-md-16">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Our Clients</h2>
                <div class="row gx-lg-8 mb-10 gy-5">
                    <div class="col-lg-6">
                        <h3 class="display-5 mb-0">We are trusted by over 1.5M+ Businesses. Join them by using our
                            services to grow your assets.</h3>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-6">
                        <p class="lead mb-0">“Outside of fintech applications, blockchain has yet to make its
                            impact felt.” However, contributor Derek Handova predicted B2B applications will catch
                            on soon. In 2016, the writer saw it serving only the finance/tech world. But, he
                            envisioned future value in real estate transactions, identity management, healthcare
                            records and more. He called it a “Swiss Army Knife of technology.”</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
                    <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                            <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                <figure class="px-md-3 mb-0"><img src="assets/front/img/brands/z1.png" alt="" />
                                </figure>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                            <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                <figure class="px-md-3 mb-0"><img src="assets/front/img/brands/z2.png" alt="" />
                                </figure>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                            <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                <figure class="px-md-3 mb-0"><img src="assets/front/img/brands/z3.png" alt="" />
                                </figure>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                            <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z4.png') }}" alt="" />
                                </figure>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                            <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                                <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z5.png') }}" alt="" />
                                </figure>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
@endsection
