@extends('master_layout.master')
@section('candidate_landing')




<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
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
        <a class="nav-link text-dark" href="{{ route('candidate.all_jobs') }}"> Browse Jobs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('candidate.help') }}">Help Center</a>
      </li>
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/placeholder.jpg" alt="" class="rounded-circle" />
          <span class="d-none d-md-block dropdown-toggle ps-2">Account</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{route('candidate_login_form')}}">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Login</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-person-plus"></i>
              <span>Sign-Up</span>
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
<div class="d-flex align-items-center justify-content-center text-center " style=" margin-top: -12px; height: 90vh; color: black; background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <div class="p-4" style="max-width: 90%; z-index: 2">
    <h1 class="fw-bold" style="font-size: 3.5rem">
      YOUR PATH TO CAREER SUCCESS!
    </h1>
    <p class="fs-5" style="font-size: 1.25rem">
      Connect with top employers and advance your career today!
    </p>
    <a href="jobs.html" class="btn btn-light fw-semibold rounded-pill" style="
            font-size: 1.25rem;
            padding: 0.75rem 1.5rem;
            margin-top: 1rem;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, color 0.3s ease;
          ">Browse Jobs</a>
  </div>
</div>


<!-- START THE FEATURETTES -->

<div class="row featurette section-one text-center align-items-center py-4 bg-white">
  <div class="col-md-7">
    <h2 class="featurette-heading">Unlock your potential</h2>
    <p class="lead">
      Discover your strengths, values, and ideal work environment through
      our comprehensive assessments. Gain deep insights to align your career
      path, maximize your potential, and thrive in the perfect job setting.
    </p>
  </div>
  <div class="col-md-5">
    <img src="{{asset('assets/img/unlock.png')}}" alt="Unlock your potential" class="img-fluid mx-auto"
      style="max-width: 100%; height: auto" />
  </div>
</div>

<div class="row featurette section-two text-center align-items-center py-4" style="background-color: #c3ebfd">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Apply smartly</h2>
    <p class="lead">
      With your personalized Job Passport, you can effortlessly apply to
      multiple jobs that truly align with your strengths, values, and ideal
      work environment, streamlining the application process and saving you
      significant time and effort.
    </p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="{{asset('assets/img/applysmartly.png')}}" alt="Apply smartly" class="img-fluid mx-auto"
      style="max-width: 100%; height: auto" />
  </div>
</div>

<div class="row featurette section-three text-center align-items-center py-4 bg-white">
  <div class="col-md-7">
    <h2 class="featurette-heading">Skill Guidance</h2>
    <p class="lead">
      Receive personalized recommendations for skill enhancement tailored to
      your career goals. Whether you're looking to switch careers or climb
      the corporate ladder, our insights will guide your professional
      development.
    </p>
  </div>
  <div class="col-md-5">
    <img src="{{asset('assets/img/skill.png')}}" alt="Skill Guidance" class="img-fluid mx-auto"
      style="max-width: 100%; height: auto" />
  </div>
</div>

<!-- /END THE FEATURETTES -->

<!-- New Card Section with Bootstrap -->
<section class="card-section py-5" style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">HOW IT WORKS?</h2>
    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-lg rounded-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-1-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title fw-bold">Profile Builder</h5>
            <p class="card-text">
              Register and complete your profile by selecting your seniority
              level, location, salary expectations, and flexible working
              preferences to tailor your job search effectively.
            </p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-lg rounded-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-2-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title fw-bold">Assessments</h5>
            <p class="card-text">
              Take comprehensive competency, behavioral, and values
              assessments to build your personalized Job Passport, ensuring
              a tailored job search that aligns perfectly with your
              strengths and career goals.
            </p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-lg rounded-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-3-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title fw-bold">Explore Jobs</h5>
            <p class="card-text">
              Explore job opportunities by filtering based on your skills
              and values to find positions that genuinely align with your
              career aspirations and personal goals.
            </p>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-lg rounded-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-4-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title fw-bold">Apply</h5>
            <p class="card-text">
              Apply to multiple jobs seamlessly using your Job Passport,
              streamlining the application process and increasing your
              chances of finding the perfect fit.
            </p>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-lg rounded-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-5-circle-fill fs-2 transition"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title fw-bold">Recommendations</h5>
            <p class="card-text">
              Receive tailored job matches, gain insights into your
              competencies, behaviors, and values, and get personalized
              skill enhancement recommendations based on your career goals.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action (CTA) -->
<section class="cta-section text-center p-5" style="background-color: #4b4e51">
  <div class="container" style="color: white">
    <h1>READY FOR YOUR NEXT CAREER STEP?</h1>
    <p>
      Embark on a new era of effortless, fair and personalised recruitment.
      Join Aligned now and find your dream-fit role!
    </p>
    <a href="register.html" class="btn btn-light btn-lg">Get Started</a>
  </div>
</section>

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
            <a href="https://landingpage.idrisforid.com/index.html" class="text-dark text-decoration-none">Home</a>
          </li>
          <li>
            <a href="register.html" class="text-dark text-decoration-none">Register</a>
          </li>
          <li>
            <a href="jobs.html" class="text-dark text-decoration-none">Browse Jobs</a>
          </li>
          <li>
            <a href="candidatehelpcenter.html" class="text-dark text-decoration-none">Help Center</a>
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