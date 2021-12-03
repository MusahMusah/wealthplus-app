@extends('frontendnew.layouts.master')

@section('title', __($pgtitle))
@section('desc', $pgdesc)
@section('keyword', $pgkeyword)

@section('content')
<section class="wrapper bg-gray">
  <div class="container pt-10 pt-md-14 text-center">
    <div class="row">
      <div class="col-xl-6 mx-auto">
        <h1 class="display-1 mb-4">Hello! This is <mark>Finance+</mark></h1>
        <p class="lead fs-lg mb-0">A company turning ideas into Investments</p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{ asset('frontend-assets/front/img/photos/bg12.jpg') }}" alt="" /></figure>
</section>



<section class="wrapper bg-light wrapper-border">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-6 order-lg-2 position-relative">
        <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
        <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
        <figure class="rounded mb-0"><img src="{{ asset('frontend-assets/front/img/concept/about1.png') }}" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h3 class="display-4 mb-4">What is Finance+</h3>
        <p class="mb-5"> We are a digital and investment company, that aggregates funds for investment in Cryptocurrency. We are Here to help the World Achieve  Financial  Freedom  and  Stability. .</p>
        <div class="row gy-3">
          <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
              <li><span><i class="uil uil-check"></i></span><span>Quality execution on every trade<br /> See the stats and standards behind how we seek a quality execution on each order.</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>A more human way to learn. <br /> We’re redefining what it means to learn about finance—and that means education resources that are built for today. </span></li>
            </ul>
          </div>
          <!--/column -->
          <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
              <li><span><i class="uil uil-check"></i></span><span>See how it all works. <br /> We believe everyone has the right to know the cost of a trade—so we’re showing you how our business works.</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>We believe the financial system should be built to work for everyone. <br /> That’s why we create products that let you start investing at your own pace, on your own terms.</span></li>
            </ul>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <a href="register.html" class="btn btn-soft-aqua rounded-pill mt-6 mb-0">Join Us</a>
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
    <div class="row mb-5">
      <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
        <img src="{{ asset('frontend-assets/front/img/demos/icon.png') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-4 px-lg-14">We’re on a mission to democratize finance for all.</h2>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-6">
          <div class="card me-lg-6">
          <div class="card-body p-6">
          <h2 class="display-6 mb-3">Safety First</h2>
        <p class="lead fs-lg pe-lg-5">Finance+ is a safety-first company</p>
        <p>The reliability of our platform takes precedence over all else, so that we can be there for our customers when they need us the most. We relentlessly protect our customers’ security and privacy, and we only share with our counterparties what they need to fulfill our customers’ financial needs, nothing more.
</p>
        <p class="mb-6">We build safeguards and provide education so that our customers are in the best position to succeed. We have high quality timely customer support, and when things aren’t right, we fix them. We work closely with regulators and lawmakers to protect our customers and the broader financial system.</p>
      
        </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-lg-6">
          <div class="card me-lg-6">
          <div class="card-body p-6">
        <h2 class="display-6 mb-3">Participation is Power</h2>
        <p class="lead fs-lg pe-lg-5">At <mark> Finance+ </mark>, the rich don’t get a better deal.</p>
        <p>We founded <mark> Finance+ </mark> in the wake of the financial crisis because we identified a gap - the more you had, the better deal you got. We aim to give everyone access to the financial system, regardless of their background or bank account balance.  
        That’s why we have uniform interest rates, no account minimums, and a product that was designed from the ground up for small accounts.</p>
        <p class="mb-6"> We would rather serve many small customers over a few large ones. We reflect the world around us, and we elevate and embrace all voices so everyone feels at home at <mark> Finance+ </mark>.</p>
      
        </div>
        </div>
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
    
    <!-- /.row -->
    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-6">
           <div class="card me-lg-6">
          <div class="card-body p-6">
        <h2 class="display-6 mb-3">Radical Customer Focus</h2>
        <p class="lead fs-lg pe-lg-5">We exist to make our customers happy</p>
        <p>From the early days of <mark> Finance+ </mark>, we have prioritized getting direct customer feedback on what we were building. Talking to our customers forms the kernel of the product development process we have today. We listen with empathy, ask questions, and critically evaluate our work by how valuable our customers find it.</p>
        <p class="mb-6"> We never stop asking how we can make our product better, and we never settle for ‘good enough’. We listen to our colleagues, and we start from a place of believing they are capable and well-intentioned. We delight our customers and take pride in our work. Otherwise, why even be here?</p>
       
        </div>
        </div>
      </div>
      <!--/column -->
      <div class="col-lg-6">
           <div class="card me-lg-6">
          <div class="card-body p-6">
        <h2 class="display-6 mb-3">First-Principles Thinking</h2>
        <p class="lead fs-lg pe-lg-5">We make bold bets and challenge the status quo</p>
        <p>Our foundation is in art, science, and pure mathematics, and we have a deep appreciation for the scientific process. We develop hypotheses and design experiments to test them. We reduce complex problems to their constituent bits.
</p>
        <p class="mb-6">We debate vigorously and change our minds when confronted with the right evidence. We bravely do what’s right, even when it hasn't been done before. We treat our company like a product and aim to get better, every single day.
        </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->



<section class="wrapper bg-light wrapper-border">
<section class="wrapper bg-gray">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-center">
      <div class="col-lg-7">
        <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/about3.png') }}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-line text-primary mb-3">How we make money.</h2>
        <h3 class="display-5 mb-7 pe-xxl-5">Explore the revenue streams that support our business.</h3>
        <div class="d-flex flex-row mb-4">
          <div>
            <img src="{{ asset('frontend-assets/front/img/icons/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-sm text-blue me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">Rebates from Market Makers and Trading Venues</h4>
            <p class="mb-1">When you buy or sell stocks, ETFs, and options through your brokerage account, your orders are sent to market makers for execution. To compete with exchanges, market makers offer rebates to brokerages. Market makers typically offer better prices than exchanges.</p>
          </div>
        </div>
        <div class="d-flex flex-row mb-4">
          <div>
            <img src="{{ asset('frontend-assets/front/img/icons/pie-chart-2.svg') }}" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">Income from Cash</h4>
            <p class="mb-1">Finance+ Securities generates income on uninvested cash that isn't swept to the Cash Management network of program banks, primarily by depositing this cash in interest-bearing bank accounts..</p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <img src="{{ asset('frontend-assets/front/img/icons/design.svg') }}" class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
          </div>
          <div>
            <h4 class="mb-1">Stock Loan Income</h4>
            <p class="mb-0">Finance+ Securities earns income from lending stocks purchased on margin to counterparties.</p>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7 order-lg-2">
        <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/about2.png') }}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Why Choose Us?</h2>
        <h3 class="display-5 mb-7">A few reasons why our valued customers choose us.</h3>
        <div class="accordion accordion-wrapper" id="accordionExample">
          <div class="card plain accordion-item">
            <div class="card-header" id="headingOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Intelligent approach </button>
            </div>
            <!--/.card-header -->
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>We offer the best Cryptocurrency Investment Services, which focus on matching customer requirements to innovative technologies, delivering truly positive outcomes.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingTwo">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Amazing Support </button>
            </div>
            <!--/.card-header -->
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>We strive to provide service that you will love. Our team does everything to ensure that you are completely satisfied and we’re always looking for ways to improve what we do.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingThree">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Integrated Partnership </button>
            </div>
            <!--/.card-header -->
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>We integrate with You or Your Business. Our staff are trustworthy, dedicated and experienced. We’ll go the extra mile to solve your Investment issues.</p>
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
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-4">
        <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
        <h3 class="display-5 mb-5">Save your time and money by choosing <mark> Finance+ </mark> as your Investment Company.</h3>
        <p>At Finance+, we believe that success depends on great minds not thinking alike. Our work relies on the constant sharing of knowledge and the generation of fresh ideas. So, we have a collaborative approach that recognises people’s individual strengths, respects their expertise, and enables them to develop a variety of solutions.</p>
        <!--<a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>-->
      </div>
      <!--/column -->
      <div class="col-lg-8">
        <div class="carousel owl-carousel text-center" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
          <div class="item">
            <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('frontend-assets/front/img/avatars/t1.jpg') }}" alt="" />
            <h4 class="mb-1">Cory Zamora</h4>
            <div class="meta mb-2">Sales</div>
            <p class="mb-2">Our current sales team consists of Strategic Sales Managers, Business Development Managers all of which are supported by the Sales Office Team.</p>
            <!--<nav class="nav social justify-content-center text-center mb-0">-->
            <!--  <a href="#"><i class="uil uil-twitter"></i></a>-->
            <!--  <a href="#"><i class="uil uil-slack"></i></a>-->
            <!--  <a href="#"><i class="uil uil-linkedin"></i></a>-->
            <!--</nav>-->
            <!-- /.social -->
          </div>
          <!-- /.item -->
          <div class="item">
            <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('frontend-assets/front/img/avatars/t2.jpg') }}" alt="" />
            <h4 class="mb-1">Coriss Ambady</h4>
            <div class="meta mb-2">Business Team</div>
            <p class="mb-2">Like any other organisation, we rely on the expertise of our people in our business service teams.</p>
            <!--<nav class="nav social justify-content-center text-center mb-0">-->
            <!--  <a href="#"><i class="uil uil-youtube"></i></a>-->
            <!--  <a href="#"><i class="uil uil-facebook-f"></i></a>-->
            <!--  <a href="#"><i class="uil uil-dribbble"></i></a>-->
            <!--</nav>-->
            <!-- /.social -->
          </div>
          <!-- /.item -->
          <div class="item">
            <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('frontend-assets/front/img/avatars/t3.jpg') }}" alt="" />
            <h4 class="mb-1">Nikolas Brooten</h4>
            <div class="meta mb-2">Technical Team</div>
            <p class="mb-2">There are various disciplines within the teams ranging from Data Analysts and Software Developers to Electrical Engineers.</p>
            <!--<nav class="nav social justify-content-center text-center mb-0">-->
            <!--  <a href="#"><i class="uil uil-linkedin"></i></a>-->
            <!--  <a href="#"><i class="uil uil-tumblr-square"></i></a>-->
            <!--  <a href="#"><i class="uil uil-facebook-f"></i></a>-->
            <!--</nav>-->
            <!-- /.social -->
          </div>
          <!-- /.item -->
          <div class="item">
            <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('frontend-assets/front/img/avatars/t4.jpg') }}" alt="" />
            <h4 class="mb-1">Jackie Sanders</h4>
            <div class="meta mb-2">Marketing</div>
            <p class="mb-2">Our Marketing Team consists of marketing and digital marketing professionals. Who are responsible for the company’s marketing strategy.</p>
            <!--<nav class="nav social justify-content-center text-center mb-0">-->
            <!--  <a href="#"><i class="uil uil-twitter"></i></a>-->
            <!--  <a href="#"><i class="uil uil-facebook-f"></i></a>-->
            <!--  <a href="#"><i class="uil uil-dribbble"></i></a>-->
            <!--</nav>-->
            <!-- /.social -->
          </div>
          <!-- /.item -->
          <!--<div class="item">-->
          <!--  <img class="rounded-circle w-20 mx-auto mb-4" src="https://financeplus.io/invest/{{ asset('frontend-assets/front/img/avatars/t5.jpg') }}" alt="" />-->
          <!--  <h4 class="mb-1">Tina Geller</h4>-->
          <!--  <div class="meta mb-2">Assistant Buyer</div>-->
          <!--  <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>-->
            <!--<nav class="nav social justify-content-center text-center mb-0">-->
            <!--  <a href="#"><i class="uil uil-facebook-f"></i></a>-->
            <!--  <a href="#"><i class="uil uil-slack"></i></a>-->
            <!--  <a href="#"><i class="uil uil-dribbble"></i></a>-->
            <!--</nav>-->
            <!-- /.social -->
          <!--</div>-->
          <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-gray">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-6 mb-15 align-items-center">
      <div class="col-lg-7 order-lg-2">
        <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/concept4.png') }}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-12">
        <div class="basic-slider owl-carousel gap-small" data-margin="30">
          <div class="item">
            <blockquote class="icon icon-top fs-lg text-center">
              <p>“Taking the financial system apart has a lot of costs: economic costs, financial costs, job losses, income losses, fiscal costs. But we Help you manage all this at <mark> Finance+ </mark>”</p>
              <div class="blockquote-details justify-content-center text-center">
                <div class="info ps-0">
                  <h5 class="mb-1">Coriss Ambady</h5>
                  <p class="mb-0">Financial Analyst</p>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- /.item -->
          <div class="item">
            <blockquote class="icon icon-top fs-lg text-center">
              <p>“The best marketing strategy ever: CARE. Thats why we at <mark> Finance+ </mark> CARE alot about you”</p>
              <div class="blockquote-details justify-content-center text-center">
                <div class="info ps-0">
                  <h5 class="mb-1">Cory Zamora</h5>
                  <p class="mb-0">Marketing Specialist</p>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- /.item -->
          <div class="item">
            <blockquote class="icon icon-top fs-lg text-center">
              <p>“We cannot solve our problems with the same thinking we used when we created them. ”</br> Thats Why we have fresh and young people working tirelessly to secure your investment</p>
              <div class="blockquote-details justify-content-center text-center">
                <div class="info ps-0">
                  <h5 class="mb-1">Nikolas Brooten</h5>
                  <p class="mb-0">Sales Manager</p>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
      </div>
      <!--/column -->
    </div>
    
  <div class="container py-14 py-md-16">
    <!-- /.row -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
      <div class="col">
        <div class="card shadow-lg h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z1.png') }}" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card shadow-lg h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z2.png') }}" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card shadow-lg h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z3.png') }}" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card shadow-lg h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z4.png') }}" alt="" /></figure>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col">
        <div class="card shadow-lg h-100 align-items-center">
          <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
            <figure class="px-md-3 mb-0"><img src="{{ asset('frontend-assets/front/img/brands/z5.png') }}" alt="" /></figure>
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

  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">
        <figure><img class="w-auto" src="{{ asset('frontend-assets/front/img/concept/concept5.png') }}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Get In Touch</h2>
        <h3 class="display-5 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Address</h5>
            <address>M1, Rue des Coquelicots Luxembourg, L-1356 Luxembourg</address>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Phone</h5>
            <p>+00 (123) 456 78 90</p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">E-mail</h5>
            <p class="mb-0"><a href="mailto:info@<mark> Finance+ </mark>.io" class="link-body">info@financeplus.io</a></p>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection