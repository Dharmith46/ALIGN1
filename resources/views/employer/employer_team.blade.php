
@extends('master_layout.employer_master')
@section('employer_team')


<main id="main" class="main">
<div class="pagetitle">
  <h1>Team Management</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Team Management</li>
      </ol>
  </nav>
</div>
<section class="section dashboard">
  <div class="row">
      <div class="col-lg-12">
          <div class="row">
              <div class="container-fluid p-4">
                  <div id="team-assessment-content" class="form-section">
                      <h2>Team Details</h2>
                      <form id="team-form">
                          <div class="mb-3">
                              <label for="teamName" class="form-label">Team Name</label>
                              <input type="text" class="form-control" id="teamName" placeholder="Enter Team Name" required>
                          </div>
                          <div class="mb-3">
                              <label for="businessAffiliation" class="form-label">Business Affiliation</label>
                              <input list="affiliations" class="form-control" id="businessAffiliation" placeholder="Search..." required>
                              <datalist id="affiliations">
                                  <option value="Apple">
                                  <option value="Samsung">
                                  <option value="Intel">
                              </datalist>
                          </div>
                      </form>
                  </div>
                  </div>
          </div>
                  <div id="team-member-content" class="form-section">
                      <h3>Team Members</h3>
                      <button id="bulk-add-member-btn" class="btn btn-primary mb-3">Add Members (up to 10)</button>
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th><input type="checkbox" id="select-all"></th>
                                  <th>Member Name</th>
                                  <th>Role</th>
                                  <th>Admin Status</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody id="team-members-table">
                              <tr data-member-id="1">
                                  <td><input type="checkbox" class="member-checkbox"></td>
                                  <td>Member 1</td>
                                  <td>Head of Insight Team</td>
                                  <td>Admin</td>
                                  <td>member1@gmail.com</td>
                                  <td class="status-column"><i class="fas fa-envelope"></i></td>
                                  <td><button class="btn btn-danger btn-sm delete-member-btn">Delete</button></td>
                              </tr>
                              <tr data-member-id="2">
                                  <td><input type="checkbox" class="member-checkbox"></td>
                                  <td>Member 2</td>
                                  <td>Insight Manager</td>
                                  <td>Collaborator</td>
                                  <td>member2@gmail.com</td>
                                  <td class="status-column"><i class="fas fa-envelope"></i></td>
                                  <td><button class="btn btn-danger btn-sm delete-member-btn">Delete</button></td>
                              </tr>
                              <tr data-member-id="3">
                                  <td><input type="checkbox" class="member-checkbox"></td>
                                  <td>Member 3</td>
                                  <td>Insight Executive</td>
                                  <td>Team Member</td>
                                  <td>member3@gmail.com</td>
                                  <td class="status-column"><i class="fas fa-envelope"></i></td>
                                  <td><button class="btn btn-danger btn-sm delete-member-btn">Delete</button></td>
                              </tr>
                          </tbody>
                      </table>
                      <div class="mt-3">
                          <a href="view-all-team-members.html" class="btn btn-link">View All</a>
                      </div>
                  </div>

                  <div id="bulk-add-member-form" class="form-section d-none">
                      <h4>Add Members (Up to 10)</h4>
                      <form id="bulk-add-form">
                          <table class="table table-bordered" id="member-input-table">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Role</th>
                                      <th>Admin Status</th>
                                      <th>Email</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><input type="text" class="form-control" name="member-name" required></td>
                                      <td><input type="text" class="form-control" name="member-role" required></td>
                                      <td>
                                          <select class="form-control" name="member-admin" required>
                                              <option value="admin">Admin</option>
                                              <option value="collaborator">Collaborator</option>
                                              <option value="team-member">Team Member</option>
                                          </select>
                                      </td>
                                      <td><input type="email" class="form-control" name="member-email" required></td>
                                      <td><button type="button" class="btn btn-danger remove-member-row">Remove</button></td>
                                  </tr>
                              </tbody>
                          </table>
                          <button type="button" class="btn btn-secondary" id="add-row-btn">Add Another Member</button>
                          <button type="submit" class="btn btn-primary">Add Members</button>
                          <button type="button" id="cancel-bulk-add-btn" class="btn btn-secondary">Cancel</button>
                      </form>
                  </div>
                  <div id="team-assessment-content" class="form-section d-none">
                      <h3>Team Assessment</h3>
                  </div>

              </div>
          </div>
      </div>
  </div>
  @endsection