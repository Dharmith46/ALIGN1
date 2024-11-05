
@extends('master_layout.employer_master')
@section('employer_team_assesment')



<main id="main" class="main">
    
    <div class="pagetitle">
        <h1 style="font-size: 40px;">Team Assesment</h1>
        <br><br><br>
        <h3>Team Members</h3>
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Member Name</th>
                    <th>Role</th>
                    <th>Admin Status</th>
                    <th>Email Address</th>
                    <th colspan="2">Assessment Taken</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Values Assessment</th>
                    <th>Behaviours Assessment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <tr>
                        <td>Member1</td>
                        <td>Head of Insight</td>
                        <td>Admin</td>
                        <td>member1@gmail.com</td>
                        <td>&#10003;</td> 
                        <td>&#10003;</td> 
                    </tr>
                </tr>
                <tr>
                    <td>Member 2</td>
                    <td>Insight Manager</td>
                    <td>Collaborator</td>
                    <td>member2@gmail.com</td>
                    <td>Invite Sent</td> 
                    <td>Invite Sent</td> 
                </tr>
                </tr>
                    <tr>
                        <td>Member 3</td>
                        <td>Insight Executive</td>
                        <td>Team Member</td>
                        <td>member3@gmail.com</td>
                        <td>&#10003;</td>
                        <td>Reminder Sent</td> 
                    </tr>
            </tbody>
        </table>
        <a href="view-all-team-members.html" class="btn btn-link">View All</a>
    </div>

    <h2 class="mt-5">Values Assessment Details</h2>
     <table id="values-assessment" class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Member</th>
                <th>Role</th>
                <th>
                    Test Status
                    <select id="status-filter" class="form-select">
                        <option value="">All</option>
                        <option value="Completed">Completed</option>
                        <option value="Not Completed">Not Completed</option>
                    </select>
                </th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr data-status="Completed">
                <td>Member1</td>
                <td>Head of Insight</td>
                <td>Completed</td>
                <td>01.01.24</td>
            </tr>
            <tr data-status="Not Completed">
               <td>Member2</td>
               <td>Insight Manager</td>
               <td>Not Completed</td>
               <td>10.01.24</td>
           </tr>
           <tr data-status="Not Completed">
               <td>Member3</td>
               <td>Insight Manager</td>
               <td>Not Completed</td>
               <td>20.01.24</td>
           </tr>
        </tbody>
     </table>
     <a href="view-all-team-members.html" class="btn btn-link">View All</a>

     <h2 class="mt-5">Behaviour Assessment Details</h2>
     <table id="behaviour-assessment" class="table table-bordered table-hover">
         <thead class="thead-light">
             <tr>
                 <th>Member</th>
                 <th>Role</th>
                 <th>
                     Test Status
                     <select id="behaviour-status-filter" class="form-select">
                         <option value="">All</option>
                         <option value="Completed">Completed</option>
                         <option value="Not Completed">Not Completed</option>
                     </select>
                 </th>
                 <th>Date</th>
             </tr>
         </thead>
         <tbody>
             <tr data-status="Completed">
                 <td>Member1</td>
                 <td>Behaviour Head</td>
                 <td>Completed</td>
                 <td>01.02.24</td>
             </tr>
             <tr data-status="Not Completed">
                 <td>Member2</td>
                 <td>Behaviour Analyst</td>
                 <td>Not Completed</td>
                 <td>15.02.24</td>
             </tr>
             <tr data-status="Completed">
                 <td>Member3</td>
                 <td>Behaviour Specialist</td>
                 <td>Completed</td>
                 <td>20.02.24</td>
             </tr>
         </tbody>
     </table>
     <a href="view-all-team-members.html" class="btn btn-link">View All</a>
     <h2 class="mt-5">Values Radar Chart</h2>
         <canvas id="valuesRadarChart" style="max-height: 400px;"></canvas>

         <h2 class="mt-5">Behaviour Radar Chart</h2>
         <canvas id="behaviourRadarChart" style="max-height: 400px;"></canvas>
    
      
        </main>     
   
  @endsection