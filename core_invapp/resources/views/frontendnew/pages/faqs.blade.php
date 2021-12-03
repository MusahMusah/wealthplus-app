@extends('frontendnew.layouts.master')

@section('title', __($pgtitle))
@section('desc', $pgdesc)
@section('keyword', $pgkeyword)

@section('content')
<section class="wrapper bg-light wrapper-border">
  <div class="container py-14 py-md-16">
    <h2 class="display-4 mb-3 text-center">FAQ</h2>
    <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
    <div class="row">
      <div class="col-lg-6 mb-0">
        <div id="accordion-1" class="accordion-wrapper">
          <div class="card">
            <div class="card-header" id="accordion-heading-1-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I setup an account from any country?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Absolutely YES you can start investing on Finance+ from any part of the world.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header" id="accordion-heading-1-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>We currently only support Paypal and Cryptocurrency deposits, how ever withdrawals are made in FIAT currency to your preferred bank account. </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header" id="accordion-heading-1-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Well, your account is almost on auto Pilot. But yes you can assist our team since you will have access to your personal back-office.
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header" id="accordion-heading-1-4">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>All personal information you haved shared with Finance+ is secured by our third party platform over the cloud and manually.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <div id="accordion-2" class="accordion-wrapper">
          <div class="card">
            <div class="card-header" id="accordion-heading-2-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">How do I get my investments information?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Every transaction you make within your back-office is stored within the various areas depending on what transaction was done.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header" id="accordion-heading-2-2">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Are there any referral incentives?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>We offer an amazing referral program for investors and Marketers see our referral program page for more.
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header" id="accordion-heading-2-3">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Is My Investments Secured?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>Finance+ Clients Receive Institutional Custody Through Curv
One of the first questions that potential clients ask us is – “How do you secure the Digital Assets?” This is one of our favorite questions to answer because we get to explain that we arguably have the best storage and security practices in the entire industry!

We are partnered with a leading institutional wallet provider named Curv. They provide bulletproof protection over client’s digital assets powered by revolutionary cryptography.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header" id="accordion-heading-2-4">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">How do I reset my Account password?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
              <div class="card-body">
                <p>From your backend head to profile settings, the system should work you around it.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
@endsection