@extends('master_layout.master')
@section('employer_landing')


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
        <a class="nav-link text-dark" href="{{route('employer.pricing')}}"> Pricing </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('employer.help')}}">Help Center</a>
      </li>
      <li class="nav-item">
        <button id="requestDemoBtn" class="nav-link btn">
          Request a Demo
        </button>
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
<div class="hero-section d-flex align-items-center justify-content-center text-center vh-90 px-4 py-5" style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      ); height:90vh; margin-top: -12px;">
  <h1 class="display-1 fw-bold">TRANSFORMING YOUR HIRING EXPERIENCE!</h1>
</div>


<!-- START THE FEATURETTES -->


<div class="row featurette py-4 bg-white text-center d-flex align-items-center justify-content-center">
  <div class="col-md-7">
    <h2 class="featurette-heading">Objective Hiring</h2>
    <p class="lead">
      Our platform ensures your hiring process is free from unconscious
      biases, providing a fair opportunity for every candidate.
    </p>
  </div>
  <div class="col-md-5">
    <img src="{{asset('assets/img/objective.jpg')}}" alt="Objective Hiring" class="img-fluid mx-auto" />
  </div>
</div>


<div class="row featurette py-4 text-center d-flex align-items-center justify-content-center"
  style="background:#c3ebfd">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Diverse Talent Pool</h2>
    <p class="lead">
      Unlock opportunities to explore candidates from various industries and
      prevent skills shortages. Our platform broadens your talent horizon,
      allowing you to tap into a diverse and skilled workforce.
    </p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="{{asset('assets/img/diverse.jpg')}}" alt="Diverse Talent Pools" class="img-fluid mx-auto" />
  </div>
</div>


<div class="row featurette py-4 bg-white text-center d-flex align-items-center justify-content-center">
  <div class="col-md-7">
    <h2 class="featurette-heading">Save Time, Hire Smarter</h2>
    <p class="lead">
      Streamline your hiring process, reduce time-to-hire, and minimize
      costly errors.
    </p>
  </div>
  <div class="col-md-5">
    <img src="{{asset('assets/img/savetime.jpg')}}" alt="Save Time, Hire Smarter" class="img-fluid mx-auto" />
  </div>
</div>

<!-- /END THE FEATURETTES -->


<!-- New Card Section -->
<section class="card-section bg-light py-5" style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <h1 class="text-center fw-bold mb-5">READY TO TRANSFORM YOUR RECRUITMENT STRATEGY?</h1>

  <h3 class="text-center mb-5">HOW IT WORKS?</h3>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-4 p-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-1-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title">Job Posting</h5>
            <p class="card-text">
              Create job postings with ease, showcasing the essence of the role, required skills, and team values.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-4 p-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-2-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title">Candidate Applications</h5>
            <p class="card-text">
              Receive applications filtered based on assessments, ensuring you connect with candidates who align.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-4 p-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-3-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title">Comprehensive Reports</h5>
            <p class="card-text">
              Dive into detailed candidate reports to make informed hiring decisions.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-4 p-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-4-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title">Talent Search</h5>
            <p class="card-text">
              Proactively build a talent pool by searching for passive candidates based on their skills, behaviors, and
              values.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-4 p-4">
          <div class="features-icon mt-3" style="color: #5e7dee">
            <i class="bi bi-5-circle-fill fs-2"></i>
          </div>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title">Interview Tracking</h5>
            <p class="card-text">
              Streamline your interview process by scheduling and tracking candidate progress directly through the
              platform.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section 1 - Request a Demo -->
<section id="request-demo" class="py-5" style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <div class="container">
    <div class="row g-0">
      <!-- Left side -->
      <div class="col-md-6  text-white d-flex align-items-center p-5 rounded-start" style="background:#52575d">
        <div>
          <h1 class="display-6">REQUEST A DEMO</h1>
          <p>
            Discover how Aligned can transform your hiring process. Request a demo today to see our advanced recruitment
            technology in action and learn how our data-driven assessments can help you streamline hiring, reduce
            time-to-hire, and connect with top talent more effectively. Experience firsthand how Aligned makes hiring
            smarter and more efficient.
          </p>
        </div>
      </div>
      <!-- Right side -->
      <div class="col-md-6 bg-white p-5 rounded-end">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Full Name" required />
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" required />
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Company" />
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Job Title" />
          </div>
          <div class="mb-3">
            <textarea class="form-control" placeholder="Message" rows="3" style="resize: none;"></textarea>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terms-checkbox-demo" required />
            <label class="form-check-label" for="terms-checkbox-demo">
              I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> & <a href="#"
                class="text-decoration-none">Privacy Policy</a>
            </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Request a Demo</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Section 2 - Call to Action (CTA) -->
<section class="cta-section text-center py-5 " style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <div class="container">
    <h1 class="display-6">Lorem ipsum dolor sit amet.</h1>
    <p class="lead">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nihil sequi cumque impedit nulla tenetur, eum
      repellat odit similique nesciunt praesentium ipsam, magni sit dolorum doloremque aliquam voluptate modi ducimus.
    </p>
    <h3 class="fw-bold">Lorem, ipsum dolor.</h3>
  </div>
</section>

<!-- Section 3 - Register -->
<section id="register" class="py-5" style="background: linear-gradient(
        to right,
        #cee5f8 20%,
        #bbeeff 50%,
        #99ccff 80%,
        #77aaff
      );">
  <div class="container">
    <div class="row g-0">
      <!-- Left side -->
      <div class="col-md-6  text-white d-flex align-items-center p-5 rounded-start" style="background:#52575d">
        <div>
          <h1 class="display-6">READY TO JOIN US?</h1>
          <p>
            Ready to revolutionize your hiring process? Register with Aligned to start leveraging our advanced
            technology and data-driven assessments.
          </p>
        </div>
      </div>
      <!-- Right side -->
      <div class="col-md-6 bg-white p-5 rounded-end">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Full Name" required />
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" required />
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Password" required />
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Confirm Password" required />
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terms-checkbox-register" required />
            <label class="form-check-label" for="terms-checkbox-register">
              I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> & <a href="#"
                class="text-decoration-none">Privacy Policy</a>
            </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- Newsletter Section -->
<section class="newsletter-section text-center p-5" style="background: linear-gradient(
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
        <p class="mt-2 text-dark">
          Aligned revolutionizes recruitment with advanced technology and data-driven assessments, helping companies
          streamline hiring and build diverse, high-performing teams efficiently.
        </p>
      </div>
      <!-- Middle Side -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="https://landingpage.idrisforid.com/index.html" class="text-dark text-decoration-none">Home</a>
          </li>
          <li><a href="{{route('employer.pricing')}}" class="text-dark text-decoration-none">Pricing</a></li>
          <li><a href="employerhelpcenter.html" class="text-dark text-decoration-none">Help Center</a></li>
        </ul>
      </div>
      <!-- Right Side -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Legal</h5>
        <ul class="list-unstyled">
          <li><a href="terms.html" class="text-dark text-decoration-none">Terms & Conditions</a></li>
          <li><a href="privacy.html" class="text-dark text-decoration-none">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>





@endsection()

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const requestDemoBtn = document.getElementById("requestDemoBtn");
    const registerBtn = document.getElementById("registerBtn");
    const requestDemoSection = document.getElementById("request-demo");
    const registerSection = document.getElementById("register");

    // Smooth scroll to Request a Demo section
    requestDemoBtn.addEventListener("click", function () {
      const headerOffset = document.querySelector(".header").offsetHeight;
      const elementPosition =
        requestDemoSection.getBoundingClientRect().top;
      const offsetPosition =
        elementPosition + window.scrollY - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    });

    // Smooth scroll to Register section
    registerBtn.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent default action
      const headerOffset = document.querySelector(".header").offsetHeight;
      const elementPosition = registerSection.getBoundingClientRect().top;
      const offsetPosition =
        elementPosition + window.scrollY - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    });
  });
</script>