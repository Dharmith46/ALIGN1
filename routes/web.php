<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Candidate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Prevent back after logout

Route::group(['middleware' => 'prevent-back-history'],function(){
    
    
  


// Employer route starts------------



Route::prefix('employer')->group(function () {

    Route::get('/login/form', [EmployerController::class, 'Index'])->name('employer_login_form');
    Route::post('/login', [EmployerController::class, 'Login'])->name('employer.login');
    Route::get('/logout', [EmployerController::class, 'Logout'])->name('employer.logout')->middleware('employer');


    Route::get('/dashboard', [EmployerController::class, 'Dashboard'])->name('employer.dashboard')->middleware('employer');
    Route::get('/jobposting', [EmployerController::class, 'JobPosting'])->name('employer.job.posting')->middleware('employer');
    Route::get('/team_assesment', [EmployerController::class, 'TeamAssesment'])->name('employer.team.assesment')->middleware('employer');
    Route::get('/applicant_review', [EmployerController::class, 'ApplicantReview'])->name('applicant.review')->middleware('employer');
    Route::get('/applicant_tracking', [EmployerController::class, 'ApplicantTracking'])->name('applicant.tracking')->middleware('employer');
    Route::get('/talent_search', [EmployerController::class, 'TalentSearch'])->name('talent.search')->middleware('employer');


    Route::get('/landing', [EmployerController::class, 'landing'])->name('employer.landing');
    Route::get('/help', [EmployerController::class, 'showHelp'])->name('employer.help'); // Changed the route to '/help'
    Route::get('/employer-pricing', [EmployerController::class, 'showPricing'])->name('employer.pricing');

});

// Employer route ends------------


// candidate route starts-----

Route::prefix('candidate')->group(function () {

    Route::get('/login/form', [CandidateController::class, 'Index'])->name('candidate_login_form');
    Route::post('/login', [CandidateController::class, 'Login'])->name('candidate.login');
    Route::get('/logout', [CandidateController::class, 'Logout'])->name('candidate.logout')->middleware('candidate');


    Route::get('/dashboard', [CandidateController::class, 'Dashboard'])->name('candidate.dashboard')->middleware('candidate');
    Route::get('/assesment', [CandidateController::class, 'Assesment'])->name('candidate.assesment')->middleware('candidate');
    Route::get('/behaviour/assesment', [CandidateController::class, 'BehaviourAssesment'])->name('behaviour.assesment')->middleware('candidate');
    Route::get('/value/assesment', [CandidateController::class, 'ValueAssesment'])->name('value.assesment')->middleware('candidate');
    Route::get('/application/tracking', [CandidateController::class, 'ApplicationTracking'])->name('application.tracking')->middleware('candidate');
    Route::get('/job/search', [CandidateController::class, 'JobSearching'])->name('job.searching')->middleware('candidate');
    Route::get('/inbox', [CandidateController::class, 'inbox'])->name('inbox')->middleware('candidate');
    Route::get('/careerinsight', [CandidateController::class, 'careerinsight'])->name('careerinsight')->middleware('candidate');
    Route::get('/f.a.q', [CandidateController::class, 'faq'])->name('faq')->middleware('candidate');


    Route::get('/landing', [CandidateController::class, 'landing'])->name('candidate.landing');
    Route::get('/jobs', action: [CandidateController::class, 'showAllJobs'])->name('candidate.all_jobs');
    Route::get('/help', [CandidateController::class, 'showHelp'])->name('candidate.help'); // Changed the route to '/help'

});


// candidate route ends-----



// admin route starts-----

Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'Index'])->name('admin_login_form');
    Route::post('/login', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout')->middleware('admin');


    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    //employer---
    Route::get('/all-employer', [AdminController::class, 'AllEmployer'])->name('admin.AllEmployer')->middleware('admin');
    Route::get('/job-slots', [AdminController::class, 'JobSlots'])->name('admin.jobslots')->middleware('admin');
    Route::get('/all-license', [AdminController::class, 'AllLicense'])->name('admin.license')->middleware('admin');
    Route::get('/all-messages', [AdminController::class, 'AllMessage'])->name('admin.allmessage')->middleware('admin');
    Route::get('/all-team-members', [AdminController::class, 'AllTeamMember'])->name('admin.allteam_member')->middleware('admin');
    Route::get('/interview-tracking', [AdminController::class, 'InterviewTracking'])->name('admin.employer_interview_tracking')->middleware('admin');


    //candidate---
    Route::get('/all-candidate', [AdminController::class, 'AllCandidate'])->name('admin.AllCandidate')->middleware('admin');
    Route::get('/candidate-assesment', [AdminController::class, 'CandidateAssesment'])->name('admin.CandidateAssesment')->middleware('admin');
    Route::get('/interview', [AdminController::class, 'CandidateInterview'])->name('admin.candidate_interview')->middleware('admin');

    //assesment--

    Route::get('/assesment-creation', [AdminController::class, 'Assesment'])->name('admin.AssesmentCreation')->middleware('admin');
    
    
});


// admin route ends-----

});

// Prevent back after logout





//all default routes start-------

Route::get('/', function () {
    return view('welcome');
})->name('landing.page');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
