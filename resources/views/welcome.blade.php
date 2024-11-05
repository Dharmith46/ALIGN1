@extends('master_layout.master')
@section('welcome')

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <img src="{{asset('assets/img/logo.png')}}" alt="Logo" style="
                  max-height: 3rem;
                  height: auto;
                  margin-right: 0;
                  background: transparent;
                " /> </a>
  </div>
  <!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('landing.page') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('employer.landing')}}"> For Employer</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('candidate.landing')}}"> For Candidate </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"> Contact Us</a>

      </li>
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/placeholder.jpg" alt="" class="rounded-circle" />
          <span class="d-none d-md-block dropdown-toggle ps-2">Account</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{route('employer_login_form')}}">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Login</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#" id="registerBtn">
              <i class="bi bi-person-plus"></i>
              <span>Register</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- End Icons Navigation -->
</header>
<!-- End Header -->

<!-- Hero Section -->
<div class="d-flex align-items-center"
  style="margin-top: -12px; height: 90vh; color: black; background: linear-gradient(to right, #cee5f8 20%, #bbeeff 50%, #99ccff 80%, #77aaff);">
  <div class="container">
    <div class="row">
      <!-- Left Column: Text Content -->
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <div class="p-4">
          <h1 class="fw-bold" style="font-size: 2.25rem">ALIGN - Connecting Talent with Opportunity</h1>
          <h4 class="fs-5 mt-3" style="font-size: 1rem; ">
            Empowering professionals to find their next career move and helping businesses discover top talent
            effortlessly.
          </h4>


        </div>
      </div>
      <!-- Right Column: Larger Video Content -->
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="embed-responsive embed-responsive-16by9" style="max-width: 100%; height: auto;">
          <iframe class="embed-responsive-item" src="" allowfullscreen
            style="border: none; width: 480px; height: 340px;"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Employer Section -->
<div class="row featurette py-4 bg-white d-flex align-items-center justify-content-center text-md-start text-center">
  <div class="col-md-7 px-5">
    <h2 class="featurette-heading fw-bold mb-3">Employer</h2>
    <p class="lead">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim non in, hic et ipsam amet culpa nihil, repellat
      corrupti asperiores architecto fugiat impedit eum tempora, id porro at molestiae aut vero odio modi commodi?
      Maiores odio nulla autem illum vel?
    </p>
    <a href="{{route('employer.landing')}}" class="btn btn-light fw-semibold" style="
            font-size: 1rem;
            margin-top: 1rem;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, color 0.3s ease;
          ">Learn More</a>
  </div>
  <div class="col-md-5">
    <img src="{{asset('assets/img/employer.jpg')}}" alt="Employer" class="img-fluid mx-auto" />
  </div>
</div>

<!-- Candidate Section -->
<div class="row featurette py-4 bg-white d-flex align-items-center justify-content-center text-md-start text-center">
  <div class="col-md-5">
    <img src="{{asset('assets/img/candidate.jpg')}}" alt="Candidate" class="img-fluid mx-auto" />
  </div>
  <div class="col-md-7 px-5">
    <h2 class="featurette-heading fw-bold mb-3">Candidate</h2>
    <p class="lead">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim non in, hic et ipsam amet culpa nihil, repellat
      corrupti asperiores architecto fugiat impedit eum tempora, id porro at molestiae aut vero odio modi commodi?
      Maiores odio nulla autem illum vel?
    </p>
    <a href="{{route('candidate.landing')}}" class="btn btn-light fw-semibold" style="
            font-size: 1rem;
            margin-top: 1rem;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, color 0.3s ease;
          ">Learn More</a>
  </div>
</div>

<!-- Newsletter Section -->
<section class="newsletter-section text-center p-5 " style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <div class="container">
    <h2>Subscribe to Our Newsletter</h2>
    <p>Get the latest updates directly to your inbox.</p>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="newsletter-form d-flex flex-column flex-lg-row align-items-center">
          <input type="email" class="form-control me-lg-2 mb-2 mb-lg-0 email-input" placeholder="Enter your email" />
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Main Footer -->
<footer class="bg-light text-center py-5">
  <div class="container">
    <div class="row">
      <!-- Left Side -->
      <div class="col-md-4 d-flex flex-column align-items-center mb-4">
        <a href="https://landingpage.idrisforid.com/index.html"
          class="d-flex align-items-center mb-3 text-decoration-none">
          <img src="{{asset('assets/img/logo.png')}}" alt="Logo" class="footer-logo" style="
                  max-height: 3rem;
                  height: auto;
                  margin-right: 0;
                  background: transparent;
                " />
        </a>
        <p class="text-dark mt-2">
          Aligned revolutionizes recruitment with advanced technology and
          data-driven assessments, helping companies streamline hiring and
          build diverse, high-performing teams efficiently.
        </p>
      </div>
      <!-- Middle Side -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li>
            <a href="{{ route('landing.page') }}" class="text-dark text-decoration-none">Home</a>
          </li>
          <li>
            <a href="{{route(name: 'employer.landing')}}" class="text-dark text-decoration-none">For Employer</a>
          </li>
          <li>
            <a href="{{route('candidate.landing')}}" class="text-dark text-decoration-none">For Candidate</a>
          </li>
          <li>
            <a href="candidatehelpcenter.html" class="text-dark text-decoration-none">Contact Us</a>
          </li>
        </ul>
      </div>
      <!-- Right Side -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Legal</h5>
        <ul class="list-unstyled">
          <li>
            <a href="terms.html" class="text-dark text-decoration-none">Terms & Conditions</a>
          </li>
          <li>
            <a href="privacy.html" class="text-dark text-decoration-none">Privacy Policy</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>



@endsection()