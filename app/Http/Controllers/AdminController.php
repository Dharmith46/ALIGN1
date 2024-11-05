<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.admin_login');
    }

    

    public function Login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login_form');
    }


    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    // employer

    public function AllEmployer()
    {
        return view('admin.employer.allemployer');
    }

    public function JobSlots()
    {
        return view('admin.employer.job_slots');
    }

    public function AllLicense()
    {
        return view('admin.employer.all_license');
    }

    public function AllMessage()
    {
        return view('admin.employer.all_messages');
    }

    public function AllTeamMember()
    {
        return view('admin.employer.allteam_member');
    }

    public function InterviewTracking()
    {
        return view('admin.employer.interview_tracking');
    }


    // candidate
    
    public function AllCandidate()
    {
        return view('admin.candidate.allcandidate');
    }

    public function CandidateAssesment()
    {
        return view('admin.candidate.candidate_assesment');
    }

    public function CandidateInterview()
    {
        return view('admin.candidate.interview_tracking');
    }

    public function Assesment()
    {
        return view('admin.assesment_creation');
    }


}
