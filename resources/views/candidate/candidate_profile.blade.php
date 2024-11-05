@extends('master_layout.candidate_master')
@section('candidate_profile')


<style>



    a {
      color: inherit;
      text-decoration: none;
    }
    
    a:hover {
      text-decoration: underline;
    }
    
    ul {
      list-style: none;
    }
    
    
    
    
    
    .listings {
      background-color: #fff;
      padding: 24px;
      box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15), 0 2px 3px rgba(0, 0, 0, 0.2);
    }
    
    .listings__heading {
      font-size: 16px;
      color: #222;
      margin-bottom: 16px;
    }
    
    
    
    .card {
      background-color: white;
      padding: 16px;
      border: solid 1px #ccc;
      border-radius: 2px;
    }
    
    .card__logo {
      border-radius: 2px;
      height: 64px;
      width: 64px;
      margin: 4px 0;
    }
    
    .card__heading {
      color: #222;
      font-weight: bold;
      line-height: 1.5;
      font-size: 16px;
    }
    
    .card__text {
      color: #666;
      font-size: 14px;
    }
    
    .card__text--small {
      font-size: 12px;
    }
    
    .card__separator {
      width: 32px;
      border: none;
      border-top: 1px solid #ccc;
      height: 1px;
      margin: 8px 0;
    }
    
    
    
    
      </style>

<main id="main" class="main">
      
    <div class="pagetitle">
      <nav>
        <h6>Say Goodbye to traditional job search and Hello to a personalised journey towards career success</li>
        </h6>
      </nav>
    </div> 
    <!--End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
              <h2>Kevin Anderson</h2>
              <h3></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              
              <div class="card-body">
                <h5 class="card-title">Technical Skills</h5>
                <h6>Quantitative Research Design <span class="bi bi-award-fill"></span></h6>
                <h6>Statistical Analysis <span class="bi bi-award-fill"></span></h6>
                <h6>Presenting Data <span class="bi bi-award-fill"></span></h6>
                <h6>Data Cleansing <span class="bi bi-award-fill"></span></h6>
                <h6>Project Management <span class="bi bi-award-fill"></span></h6>
                <h6>Qualitative Research Design <span class="bi bi-award-fill"></span></h6>
                <h6>Qualitative Data Analysis <span class="bi bi-award-fill"></span></h6>
              </div>

            </div>
          </div>
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
             <h3>behavior</h3>
              <canvas id="radarChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#radarChart'), {
                    type: 'radar',
                    data: {
                      labels: [
                        'Curiosity', 
                        'Practicality',
                        'Discipline', 
                        'Adaptability',
                        'Sociability', 
                        'Reflectiveness',
                        'Compassion', 
                        'Confidence',
                        'Resilience',
                        'Sensitivity'
                      ],
                      datasets: [{
                        label: 'Your behavior graph',
                        data: [65, 59, 90, 81, 56, 81,96, 55, 40, 89,],
                        fill: true,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        pointBackgroundColor: 'rgb(255, 99, 132)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(255, 99, 132)'
                      }]
                    },
                    options: {
                      elements: {
                        line: {
                          borderWidth: 3
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Radar CHart -->


            </div>
          </div>

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
             <h3>Values</h3>
             <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
             <script>
               document.addEventListener("DOMContentLoaded", () => {
                 new Chart(document.querySelector('#polarAreaChart'), {
                   type: 'polarArea',
                   data: {
                     labels: [
                    'Security',	
                    'Achievement',	
                    'Universalism',	
                    'Benevolence',	
                    'Conformity',
                    'Tradition',	
                    'Hedonism',	
                    'Power',	
                    'Self-Direction',	
                    'Stimulation'
                     ],
                     datasets: [{
                       label: 'your value graph',
                       data: [11, 16, 7, 3, 14, 6, 16, 9, 11, 2 ],
                       backgroundColor: [
                         'rgb(255, 99, 132)',
                         'rgb(75, 192, 192)',
                         'rgb(255, 205, 86)',
                         'rgb(201, 203, 207)',
                         'rgb(54, 162, 235)',
                         'rgb(255, 99, 132)',
                         'rgb(75, 192, 192)',
                         'rgb(255, 205, 86)',
                         'rgb(201, 203, 207)',
                         'rgb(54, 162, 235)'
                       ]
                     }]
                   }
                 });
               });
             </script>
            </div>
          </div>


        </div>
      
  <div class="col-xl-8">

    <div class="card">
      <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab"
              data-bs-target="#profile-overview">Job Recommendations</button>
          </li>

          <section class="listings container">
           
            <ul class="listings__grid">
              <li class="card">
                <img src="https://logo.clearbit.com/google.com" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">Google</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://logo.clearbit.com/amazon.com" alt="" class="card__logo" />
                <div class="card__heading">Senior Software Engineer</div>
                <div class="card__text">Amazon</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://logo.clearbit.com/tcs.com" alt="" class="card__logo" />
                <div class="card__heading">Web Developer</div>
                <div class="card__text">TCS</div>
                <div class="card__text">Bangalore, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://images.ctfassets.net/37l920h5or7f/4DoCMtDHIs8WMMyu06eYM2/c6d3263dce37657cbdd44224f1f79a0d/Uber-Asset-Logo-18.jpg?fm=jpg&q=70&w=1600" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">Uber</div>
                <div class="card__text">Delhi, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://via.placeholder.com/64" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">Microsoft</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://via.placeholder.com/64" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">AMD</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://via.placeholder.com/64" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">Microsoft</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://via.placeholder.com/64" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">Microsoft</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
              <li class="card">
                <img src="https://via.placeholder.com/64" alt="" class="card__logo" />
                <div class="card__heading">Software Engineer</div>
                <div class="card__text">Microsoft</div>
                <div class="card__text">Hyderabad, IN</div>
                <div class="card__text card__text--small">9 connections</div>
                <hr class="card__separator" />
                <div class="card__text card__text--small">6 days ago</div>
                <!-- <button class="job-card-menu-btn">···</button> -->
              </li>
            </ul>
          </section>
          
          
          
          
      </div>
    </div>
  </div>
  </main><!-- End #main -->
  @endsection