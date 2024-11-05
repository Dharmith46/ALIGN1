<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function Index()
    {
        return view('employer.employer_login');
    }
    public function Dashboard()
    {
        return view('employer.employer_team');
    }


    public function JobPosting()
    {
        return view('employer.employer_job_posting');
    }
    public function TeamAssesment()
    {
        return view('employer.employer_team_assesment');
    }
    public function ApplicantReview()
    {
        return view('employer.applicant_review');
    }
    public function ApplicantTracking()
    {
        return view('employer.applicant_tracking');
    }
    public function TalentSearch()
    {
        return view('employer.talent_search');
    }
    



    public function landing()
    {
        return view('employer.employer_landing');
    }
    public function showHelp()
    {
        return view('employer.employer_help');
    }
    public function showPricing()
    {
        return view('employer.employer_pricing');
    }
    public function Login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
        if (Auth::guard('employer')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('employer.dashboard');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function Logout()
    {
        Auth::guard('employer')->logout();
        return redirect()->route('employer_login_form');
    }
}
