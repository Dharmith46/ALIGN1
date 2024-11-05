<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function Index()
    {
        return view('candidate.candidate_login');
    }
    public function Dashboard()
    {
        return view('candidate.candidate_profile');
    }
    public function Assesment()
    {
        return view('candidate.assesment');
    }
    public function BehaviourAssesment()
    {
        return view('candidate.behaviour_assesment');
    }
    public function ValueAssesment()
    {
        return view('candidate.value_assesment');
    }
    public function ApplicationTracking()
    {
        return view('candidate.application_tracking');
    }

    public function JobSearching()
    {
        return view('candidate.job_searching');
    }
    public function inbox()
    {
        return view('candidate.inbox');
    }
    public function careerinsight()
    {
        return view('candidate.career_insight');
    }
    public function faq()
    {
        return view('candidate.faq');
    }





    public function landing()
    {
        return view('candidate.candidate_landing');
    }
    public function showAllJobs()
    {
        // Logic to fetch jobs can go here
        return view('candidate.all_jobs'); // This will look for resources/views/all_jobs.blade.php
    }
    public function showHelp()
    {
        return view('candidate.candidate_help'); // This will look for resources/views/candidate_help.blade.php
    }



    public function Login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
        if (Auth::guard('candidate')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('candidate.dashboard');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function Logout()
    {
        Auth::guard('candidate')->logout();
        return redirect()->route('candidate_login_form');
    }
}
