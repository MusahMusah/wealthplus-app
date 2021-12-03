@extends('frontendnew.layouts.master')

@section('title', __($pgtitle))
@section('desc', $pgdesc)
@section('keyword', $pgkeyword)

@section('content')

<section class="wrapper bg-soft-primary">
  <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
    <div class="row">
      <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
        <h1 class="display-1 mb-3">Get in Touch</h1>
        <nav class="d-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <!-- /nav -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end">
  <div class="container py-14 py-md-16">
    <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
      <div class="col-lg-7 position-relative">
        <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5">
          <div class="col-md-6">
            <figure class="rounded mt-md-10 position-relative"><img src="{{ asset('frontend-assets/front/img/photos/g5.jpg') }}" srcset="https://financeplus.io/invest/assets/front/img/photos/g5 .jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-md-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-12 order-md-2">
                <figure class="rounded"><img src="{{ asset('frontend-assets/front/img/photos/g6.jpg') }}" srcset="https://financeplus.io/invest/assets/front/img/photos/g6 .jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-10">
                <div class="card bg-pale-primary text-center counter-wrapper">
                  <div class="card-body py-11">
                    <h3 class="counter text-nowrap">1.5M+</h3>
                    <p class="mb-0">Satisfied Investors</p>
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
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Address</h5>
            <address>M1, Rue des Coquelicots, <br class="d-none d-md-block" />Luxembourg, L-1356 Luxembourg</address>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Phone</h5>
            <p><a href="tel:+1 (800) 480-9702">+1 (800) 480-9702</a></p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">E-mail</h5>
            <p class="mb-0"><a href="mailto:info@financeplus.io" class="link-body">info@financeplus.io</a></p>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
        <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
        <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
        <form class="contact-form" method="post" action="https://financeplus.io/invest/php/contact.php">
          <div class="messages"></div>
          <div class="controls">
            <div class="row gx-4">
              <div class="col-md-6">
                <div class="form-label-group mb-4">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required="required" data-error="First Name is required.">
                  <label for="form_name">First Name *</label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-md-6">
                <div class="form-label-group mb-4">
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required="required" data-error="Last Name is required.">
                  <label for="form_lastname">Last Name *</label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-md-6">
                <div class="form-label-group mb-4">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="required" data-error="Valid email is required.">
                  <label for="form_email">Email *</label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-md-6">
                <div class="form-label-group mb-4">
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Your phone number">
                  <label for="form_phone">Phone</label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-12">
                <div class="form-label-group mb-4">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="5" required="required" data-error="Message is required."></textarea>
                  <label for="form_message">Message *</label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-12 text-center">
                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.controls -->
        </form>
        <!-- /form -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection