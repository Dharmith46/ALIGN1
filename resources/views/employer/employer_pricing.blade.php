@extends('master_layout.master')
@section('employer_pricing')


<style>
    body {
        background: linear-gradient(to right,
                #cee5f8 20%,
                #bbeeff 50%,
                #99ccff 80%,
                #77aaff);
        min-height: 100vh;
    }
</style>


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
                <!-- In employer_pricing.blade.php -->
                <a class="nav-link" href="{{ route('employer.landing') }}#request-demo">
                    Request a Demo
                </a>

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
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{ route('employer.landing') }}#register">
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



<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h4 class="display-4 fw-bold">Pricing</h4>
        <p class="lead mb-4">
            At present, we are in the process of refining our pricing model as we
            continue to develop and test our demo. We are diligently working to
            ensure that our pricing is both competitive and reflective of the
            value we offer. Once we complete this phase, we will provide detailed
            and transparent pricing information to ensure you have a clear
            understanding of the costs involved.
        </p>
        <a href="employerhelpcenter.html" class="text-primary text-decoration-none">
            For further information, contact us
        </a>
    </div>
</div>



@endsection()