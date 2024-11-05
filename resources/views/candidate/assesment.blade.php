@extends('master_layout.candidate_master')
@section('assesment')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Assessments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Assessments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <!-- Technical Skills Assessment Card -->
        <div class="col-lg-4">
          <div class="card assessment-card">
            <div class="card-body text-center">
              <h5 class="card-title">Technical Skills</h5>
              <p class="card-text">Test your technical skills and knowledge in your field.</p>
              <a href="technical-assessment.html" class="btn btn-primary">Start Assessment</a>
            </div>
          </div>
        </div>

        <!-- Behavior Assessment Card -->
        <div class="col-lg-4">
          <div class="card assessment-card">
            <div class="card-body text-center">
              <h5 class="card-title">Behavior</h5>
              <p class="card-text">Understand your workplace behavior and how you interact with others.</p>
              <a href="{{route('behaviour.assesment')}}" class="btn btn-primary">Start Assessment</a>
            </div>
          </div>
        </div>

        <!-- Values Assessment Card -->
        <div class="col-lg-4">
          <div class="card assessment-card">
            <div class="card-body text-center">
              <h5 class="card-title">Values</h5>
              <p class="card-text">Discover your core values and how they align with your work.</p>
              <a href="{{route('value.assesment')}}" class="btn btn-primary">Start Assessment</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection