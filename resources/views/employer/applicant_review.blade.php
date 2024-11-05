
@extends('master_layout.employer_master')
@section('applicant_review')


<style>
    .small-dropdown {
        width: 100px; 
        padding: 5px; 
        font-size: 12px; 
    }
    .filter-row {
        margin-bottom: 1rem;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .btn-search {
        margin-top: 1rem;
    }
    .applicant-section {
        background-color: #f8f9fa;
        padding: 1.5rem;
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    }
    .post-job-link {
        margin-bottom: 1rem;
    }
    .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        vertical-align: middle;
    }
    .applicant-name {
        display: flex;
        align-items: center;
    }
    .profile-pic {
width: 50px; 
height: 50px;
border-radius: 50%; 
background-color: rgb(71, 69, 69); 
display: block;
object-fit: cover; 
}
</style>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Applicant Review</h1>
      <h1 class="my-4">All Candidates</h1>
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Skills Match</th>
                  <th>Skill 1</th>
                  <th>Skill 2</th>
                  <th>Skill 3</th>
                  <th>Values Match</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody id="applicantTableBody">
          </tbody>
      </table>
    </div>

    <div class="mb-3">
        <a href="all-applicants.html" class="btn btn-link text-decoration-underline">View All</a>
    </div>
    <div class="dropdown-container">
        <div class="custom-dropdown">
            <label for="pagination" class="form-label">Show Pages:</label>
            <select id="pagination" class="form-select small-dropdown" onchange="updateTable(this.value)">
                <option value="0-25">0-25</option>
                <option value="26-50">26-50</option>
                <option value="51-75">51-75</option>
                <option value="76-100">76-100</option>
            </select>
        </div>
    </div>
    
     
    <script>
        document.addEventListener('DOMContentLoaded', function () {
     const applicantTrackingLink = document.getElementById('applicant-tracking-link');
     const applicantTrackingPage = document.getElementById('applicant-tracking-page');

     applicantTrackingLink.addEventListener('click', function (event) {
         event.preventDefault();

         showPage('applicant-tracking');
     });
 });
         function showPage(pageId) {
             var pages = document.getElementsByClassName("page-content");
             for (var i = 0; i < pages.length; i++) {
                 pages[i].style.display = "none";
             }
             document.getElementById(pageId + "-page").style.display = "block";
         }
 
         function showApplicantSection(sectionId) {
             var sections = document.getElementsByClassName("applicant-section");
             for (var i = 0; i < sections.length; i++) {
                 sections[i].style.display = "none";
             }
             document.getElementById(sectionId + "-section").style.display = "block";
         }
 
         function showSubSidebar() {
             document.getElementById("sub-sidebar").style.display = "block";
         }

     function triggerFileUpload() {
     document.getElementById('fileInput').click();
     }

         function saveApplicant(name) {
             alert("Save details for " + name);
         }
 
         function interviewApplicant(name) {
             if (confirm("Interview " + name + "?")) {
                 alert("Interview has been sent.");
             }
         }
         function downloadPDF(applicantName, skills, experience, contact, email) {
 const { jsPDF } = window.jspdf;
 const doc = new jsPDF();

 doc.text("Applicant Details", 10, 10);
 doc.text(`Name: ${applicantName}`, 10, 20);
 doc.text(`Skills: ${skills}`, 10, 30);
 doc.text(`Experience: ${experience}`, 10, 40);
 doc.text(`Contact: ${contact}`, 10, 50);
 doc.text(`Email: ${email}`, 10, 60);


 const valuesChart = document.getElementById('valuesRadarChart');
 const behaviorChart = document.getElementById('behaviorRadarChart');

 if (valuesChart && behaviorChart) {
     const valuesChartImage = valuesChart.toDataURL('image/png');
     const behaviorChartImage = behaviorChart.toDataURL('image/png');

    
     doc.addImage(valuesChartImage, 'PNG', 10, 70, 90, 90); 
     doc.addImage(behaviorChartImage, 'PNG', 10, 170, 90, 90); 
 }

 doc.save(`${applicantName.replace(" ", "_")}_details.pdf`);
}

function downloadAllPDF() {
 const applicants = [
     {
         name: 'John Doe',
         skills: 'JavaScript, Python, HTML',
         experience: '5 years in web development',
         contact: '123-456-7890',
         email: 'john@example.com'
     },
     {
         name: 'Jane Smith',
         skills: 'Project Management, Agile, Scrum',
         experience: '7 years in project management',
         contact: '987-654-3210',
         email: 'jane@example.com'
     },
     {
         name: 'Sam Wilson',
         skills: 'Graphic Design, UI/UX, Adobe Suite',
         experience: '4 years in graphic design',
         contact: '555-123-4567',
         email: 'sam@example.com'
     },
     {
         name: 'Alice Johnson',
         skills: 'Data Analysis, SQL, R',
         experience: '6 years in data analysis',
         contact: '444-555-6666',
         email: 'alice@example.com'
     }
 ];
 applicants.forEach(applicant => {
     downloadPDF(applicant.name, applicant.skills, applicant.experience, applicant.contact, applicant.email);
 });
}

const applicants = [
 {
     name: 'John Doe', profilePicture: 'path/to/profile1.jpg', overallSkills: '90%',
     skill1: '88%', skill2: '76%', skill3: '91%', overallValues: '76%',
     contact: '123-456-7890', email: 'johndoe@example.com'
 },
 {
     name: 'Jane Smith', profilePicture: 'path/to/profile2.jpg', overallSkills: '88%',
     skill1: '60%', skill2: '54%', skill3: '87%', overallValues: '62%',
     contact: '987-654-3210', email: 'janesmith@example.com'
 },
 {
     name: 'Emily Johnson', profilePicture: 'path/to/profile1.jpg', overallSkills: '65%',
     skill1: '65%', skill2: '70%', skill3: '89%', overallValues: '56%',
     contact: '123-456-7890', email: 'johndoe@example.com'
 },
 {
     name: 'Jane Smith', profilePicture: 'path/to/profile2.jpg', overallSkills: '66%',
     skill1: '89%', skill2: '64%', skill3: '87%', overallValues: '61%',
     contact: '987-654-3210', email: 'janesmith@example.com'
 }
];

function updateTable(range) {
 const tableBody = document.querySelector('tbody');
 tableBody.innerHTML = '';

 const [start, end] = range.split('-').map(Number);
 const selectedApplicants = applicants.slice(start, end);

 selectedApplicants.forEach(applicant => {
     const row = document.createElement('tr');
     row.innerHTML = `
     <td>
                     <div class="applicant-name">
                         <img class="profile-pic" src="${applicant.profilePicture}" alt="Profile Picture">
                         <a href="#" onclick="showApplicantDetails('${applicant.name}', '${applicant.profilePicture}', '${applicant.contact}', '${applicant.email}')" data-bs-toggle="modal" data-bs-target="#applicantDetailsModal">
                             ${applicant.name}
                         </a>
                     </div>
                 </td>
                  <td>${applicant.overallSkills}</td>
                 <td>${applicant.skill1}</td>
                 <td>${applicant.skill2}</td>
                 <td>${applicant.skill3}</td>
                 <td>${applicant.overallValues}</td>
                 <td>
                     <div class="btn-group">
                         <button class="btn btn-secondary" onclick="saveApplicant('${applicant.name}')">Save</button>
                         <button class="btn btn-warning" onclick="interviewApplicant('${applicant.name}')">Interview</button>
                         <button class="btn btn-info" onclick="downloadPDF('${applicant.name}', '${applicant.skill1}', '${applicant.skill2}', '${applicant.skill3}', '${applicant.email}')">Download PDF</button>
                     </div>
                 </td>
             `;
             tableBody.appendChild(row);
         });
     }

function showApplicantDetails(name, profilePicture, contact, email) {
 document.getElementById('modal-applicant-name').innerText = name;
 document.getElementById('modal-profile-pic').src = profilePicture;
 document.getElementById('modal-contact-details').innerText = `Contact: ${contact}`;
 document.getElementById('modal-email').innerText = `Email: ${email}`;
}

function savedCandidates() {
 alert("Saved Candidates button clicked!");
}

function talentSearch() {
 alert("Talent Search button clicked!");
}

updateTable('0-25');

function setupCharts() {
 const ctxValues = document.getElementById('valuesRadarChart').getContext('2d');
 const ctxBehavior = document.getElementById('behaviorRadarChart').getContext('2d');

 new Chart(ctxValues, {
     type: 'radar',
     data: {
         labels: ['Skill 1', 'Skill 2', 'Skill 3'],
         datasets: [
             {
                 label: 'Candidate Values',
                 data: [83, 67, 77],
                 backgroundColor: 'rgba(255, 99, 132, 0.2)',
                 borderColor: 'rgba(255, 99, 132, 1)',
                 borderWidth: 1
             },
             {
                 label: 'Team Values',
                 data: [77, 89, 67],
                 backgroundColor: 'rgba(54, 162, 235, 0.2)',
                 borderColor: 'rgba(54, 162, 235, 1)',
                 borderWidth: 1
             }
         ]
     },
     options: {
         scale: {
             ticks: { beginAtZero: true }
         }
     }
 });

 new Chart(ctxBehavior, {
     type: 'radar',
     data: {
         labels: ['Behavior 1', 'Behavior 2', 'Behavior 3'],
         datasets: [
             {
                 label: 'Candidate Behavior',
                 data: [85, 72, 90],
                 backgroundColor: 'rgba(75, 192, 192, 0.2)',
                 borderColor: 'rgba(75, 192, 192, 1)',
                 borderWidth: 1
             },
             {
                 label: 'Team Behavior',
                 data: [70, 80, 85],
                 backgroundColor: 'rgba(153, 102, 255, 0.2)',
                 borderColor: 'rgba(153, 102, 255, 1)',
                 borderWidth: 1
             }
         ]
     },
     options: {
         scale: {
             ticks: { beginAtZero: true }
         }
     }
 });
}

window.onload = setupCharts;
</script>

  @endsection