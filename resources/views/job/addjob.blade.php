@extends('layouts.master')
@section('content')

	<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot">
                            <i class="la la-dashboard"></i>
                            <span>HRMS</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="{{ route('home') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="{{ route('userManagement') }}">All User</a></li>
                                <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                                <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="menu-title"> <span>Employees</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('all/employee/card') }}">All Employees</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>HR</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="user-dashboard.html"> Add job Application</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<!-- /Sidebar -->
    <!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Jobs</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Jobs</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_job"><i class="fa fa-plus"></i> Add Job</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Job Title</th>
											<th>Department</th>
											<th>Start Date</th>
											<th>Expire Date</th>
											<th class="text-center">Job Type</th>
											<th class="text-center">Status</th>
											<th>Applicants</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="job-details.html">Web Developer</a></td>
											<td>Development</td>
											<td>3 Mar 2019</td>
											<td>31 May 2019</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Full Time
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Open
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td><a href="job-applicants.html" class="btn btn-sm btn-primary">3 Candidates</a></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="job-details.html">Web Designer</a></td>
											<td>Designing</td>
											<td>3 Mar 2019</td>
											<td>31 May 2019</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Part Time
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Closed
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td><a href="job-applicants.html" class="btn btn-sm btn-primary">2 Candidates</a></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="job-details.html">Android Developer</a></td>
											<td>Android</td>
											<td>3 Mar 2019</td>
											<td>31 May 2019</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Internship
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
														\<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Cancelled
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td><a href="job-applicants.html" class="btn btn-sm btn-primary">1 Candidates</a></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_job"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>Commit1
				<!-- /Page Content -->
				
				<!-- Add Job Modal -->
				<div id="add_job" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Job</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							 <form action="{{ route('HR/jobs/AddJob') }}" method="POST">
                                @csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Job Title</label>
												<input class="form-control" type="text" id="jobTitle" name="jobTitle">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Department</label>
												<select class="select" id="department" name="department">
													<option>-</option>
													<option>Web Development</option>
													<option>Application Development</option>
													<option>IT Management</option>
													<option>Accounts Management</option>
													<option>Support Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Job Location</label>
												<input class="form-control" type="text" id="job_location" name="job_location">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>No of Vacancies</label>
												<input class="form-control" type="text" id="no_of_vacancies" name="no_of_vacancies">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Salary From</label>
												<input type="text" class="form-control" id="salaryFrom" name="salaryFrom">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Salary To</label>
												<input type="text" class="form-control" id="salaryTo" name="salaryTo">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Job Type</label>
												<select class="select" id="jobType" name="jobType"> 
													<option>Full Time</option>
													<option>Part Time</option>
													<option>Internship</option>
													<option>Temporary</option>
													<option>Remote</option>
													<option>Others</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select class="select" id="status" name="status">
													<option>Open</option>
													<option>Closed</option>
													<option>Cancelled</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Start Date</label>
												<input type="text" class="form-control datetimepicker" id="start_date" name="start_date">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Expired Date</label>
												<input type="text" class="form-control datetimepicker" id="expired" name="expired">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" id="description" name="description"></textarea>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Job Modal -->
				
				<!-- Edit Job Modal -->
				<div id="edit_job" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Job</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Job Title</label>
												<input class="form-control" type="text" value="Web Developer">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Department</label>
												<select class="select">
													<option>-</option>
													<option selected>Web Development</option>
													<option>Application Development</option>
													<option>IT Management</option>
													<option>Accounts Management</option>
													<option>Support Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Job Location</label>
												<input class="form-control" type="text" value="California">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>No of Vacancies</label>
												<input class="form-control" type="text" value="5">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Experience</label>
												<input class="form-control" type="text" value="2 Years">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Age</label>
												<input class="form-control" type="text" value="-">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Salary From</label>
												<input type="text" class="form-control" value="32k">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Salary To</label>
												<input type="text" class="form-control" value="38k">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Job Type</label>
												<select class="select">
													<option selected>Full Time</option>
													<option>Part Time</option>
													<option>Internship</option>
													<option>Temporary</option>
													<option>Remote</option>
													<option>Others</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select class="select">
													<option selected>Open</option>
													<option>Closed</option>
													<option>Cancelled</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Start Date</label>
												<input type="text" class="form-control datetimepicker" value="3 Mar 2019">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Expired Date</label>
												<input type="text" class="form-control datetimepicker" value="31 May 2019">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Job Modal -->

				<!-- Delete Job Modal -->
				<div class="modal custom-modal fade" id="delete_job" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Job</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Job Modal -->
				
            </div>
			<!-- /Page Wrapper -->



@endsection