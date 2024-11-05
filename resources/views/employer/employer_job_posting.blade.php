
@extends('master_layout.employer_master')
@section('employer_job_posting')


<main id="main" class="main">
    <div class="pagetitle">
      <h1>Job Posting</h1>
      
    </div>

    <br><br><br>

    <form id="jobPostingForm">
        <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="jobTitle" placeholder="Enter job title" required>
        </div>
        <div class="mb-3">
            <label for="seniority" class="form-label">Seniority Level</label>
            <select class="form-select" id="seniority" required>
                <option value="" disabled selected>Select seniority level</option>
                <option value="junior">Junior</option>
                <option value="mid">Mid</option>
                <option value="senior">Senior</option>
                <option value="lead">Lead</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salary Range</label>
            <select class="form-select" id="salary" required>
                <option value="" disabled selected>Select salary range</option>
                <option value="0-50k">0 - 50k</option>
                <option value="50k-100k">50k - 100k</option>
                <option value="100k-150k">100k - 150k</option>
                <option value="150k+">150k+</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="industry" class="form-label">Industry</label>
            <select class="form-select" id="industry" required>
                <option value="" disabled selected>Select industry</option>
                <option value="tech">Technology</option>
                <option value="finance">Finance</option>
                <option value="health">Healthcare</option>
                <option value="education">Education</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jobLocation" class="form-label">Job Location</label>
            <select class="form-select" id="jobLocation" required>
                <option value="" disabled selected>Select job location</option>
                <option value="remote">Remote</option>
                <option value="onsite">Onsite</option>
                <option value="hybrid">Hybrid</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="workingPattern" class="form-label">Working Pattern</label>
            <select class="form-select" id="workingPattern" required>
                <option value="" disabled selected>Select working pattern</option>
                <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
                <option value="contract">Contract</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="hours" class="form-label">Hours</label>
            <select class="form-select" id="hours" required>
                <option value="" disabled selected>Select hours</option>
                <option value="standard">Standard</option>
                <option value="flexible">Flexible</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sponsorship" class="form-label">Sponsorship</label>
            <select class="form-select" id="sponsorship" required>
                <option value="" disabled selected>Select sponsorship</option>
                <option value="none">Yes</option>
                <option value="possible">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="skills" class="form-label">Skills Required</label>
            <select class="form-select" id="skills" multiple required>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="javascript">JavaScript</option>
                <option value="bootstrap">Bootstrap</option>
                <option value="react">React</option>
                <option value="node">Node.js</option>
                <option value="python">Python</option>
                <option value="java">Java</option>
            </select>
            <small class="form-text text-muted">Select up to 5 skills.</small>
        </div>
        <div class="mb-3">
            <label for="roleExists" class="form-label">Why This Role Exists</label>
            <textarea class="form-control" id="roleExists" rows="3" maxlength="250" placeholder="Describe why this role exists" required></textarea>
            <small class="form-text text-muted">250 word limit.</small>
        </div>
        <div class="mb-3">
            <label for="roleInvolves" class="form-label">What This Role Involves</label>
            <textarea class="form-control" id="roleInvolves" rows="3" maxlength="250" placeholder="Describe what this role involves" required></textarea>
            <small class="form-text text-muted">250 word limit.</small>
        </div>
        <div class="form-buttons">
            <button type="button" class="btn btn-primary" onclick="submitForm()">Post Job</button>
            <button type="button" class="btn btn-secondary" onclick="cancelForm()">Cancel</button>
        </div>
    </form>
   
  @endsection