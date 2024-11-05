@extends('master_layout.master')
@section('employer_help')

<style>
    body {
        background: linear-gradient(to right,
                #cee5f8 20%,
                #bbeeff 50%,
                #99ccff 80%,
                #77aaff);
        min-height: 100vh;
        /* Ensures the gradient covers the entire viewport height */
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
                <a class="nav-link text-dark" href="pricing.html"> Pricing </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help Center</a>
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


<header class="hero-section d-flex align-items-center justify-content-center text-center" style="height: 60vh;">
    <div class="hero-content">
        <h1 class="display-3 fw-bold">Help Center</h1>
        <p class="lead">Your go-to place for all questions and support.</p>
    </div>
</header>

<main class="container my-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Lorem ipsum dolor sit amet consectetur.?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Provident unde iure ipsum tempore totam possimus labore,
                                suscipit aspernatur delectus molestias.
                            </div>
                        </div>
                    </div>

                    <!-- Continue adding more FAQs as needed -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-center mb-4">Contact Us</h2>
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required />
                        <label for="name">Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required />
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required />
                        <label for="subject">Subject</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" placeholder="Your Message"
                            style="resize: none; height: 150px" required></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection()