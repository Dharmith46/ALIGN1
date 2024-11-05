@extends('master_layout.candidate_master')
@section('inbox')


<main id="main" class="main">
    <div class="pagetitle">
      <h1>Inbox</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Inbox</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Messages</h5>

              <!-- Table with inbox content -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">From</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Received</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Doe</td>
                    <td>Job Interview</td>
                    <td>Today, 2:00 PM</td>
                    <td><a href="chat.html?sender=John%20Doe" class="btn btn-primary btn-sm">View</a></td>
                  </tr>
                  <tr>
                    <td>Jane Smith</td>
                    <td>Job Application Update</td>
                    <td>Yesterday, 10:00 AM</td>
                    <td><a href="chat.html?sender=Jane%20Smith" class="btn btn-primary btn-sm">View</a></td>
                  </tr>
                  <!-- Add more messages as needed -->
                </tbody>
              </table>
              <!-- End Table with inbox content -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection