@extends('layouts.app')

@section('css')
	<style>
		.form-label {
			margin-bottom: .3rem !important;
		}
	</style>
@endsection

@section('content')
    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Employee</h2>
			<span>Personal details</span>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <h5>General</h5>
        </div>
        <div class="card-body">
            <form action="employees.html">
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">No</label>
							<input type="text" class="form-control" value="Super">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Gender</label>
							<select class="select">
								<option>Select</option>
								<option>Male</option>
								<option>Female</option>
								<option>Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Search Name</label>
							<input type="email" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">First Name </label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Company Landline</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Middle Name </label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Personal Phone</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Last Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Residence Landline</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Citizenship</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Company Email</label>
							<input type="email" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Place Of Origin</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Personal Email</label>
							<input type="email" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Religion</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Alternate Email</label>
							<input type="email" class="form-control">
						</div>
					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-light border me-2"
					data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Save </button>
			</div>
		</div>
	</div>

	<div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <h5>Address & Contact</h5>
        </div>
        <div class="card-body">
            <form action="employees.html">
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Address</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Private Phone No</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Address 2</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Extension</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Post Code</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Private Email</label>
							<input type="email" class="form-control">
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Country/Region Code</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Direct Phone No</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-light border me-2"
					data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Save </button>
			</div>
		</div>
	</div>

	<div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <h5>Administration</h5>
        </div>
        <div class="card-body">
            <form action="employees.html">
				<div class="row">
					@php
						$collection = [
							'Employment Date',
							'Notice Period Start',
							'Probation Duration',
							'Notice Period Duration',
							'Probation End',
							'Last Working Day',
							'Confirmation Date',
							'Employment Contract Code',
							'Holding Form',
							'Cause Of Holding',
							'Status',
							'Pay Cycle',
						];
					@endphp
					@foreach ($collection as $item)
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">{{$item}}</label>
								<input type="text" class="form-control">
							</div>							
						</div>
					@endforeach
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-light border me-2"
					data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Save </button>
			</div>
		</div>
	</div>

	<div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <h5>Personal</h5>
        </div>
        <div class="card-body">
            <form action="employees.html">
				<div class="row">
					@php
						$collection = [
							'Father Name',
							'Blood Group',
							'Mother Name',
							'Global Id',
							'Birth Date',
							'Social Security No',
							'Marital Status',
							'Family Book Id',
							'No Of Dependents',
							'Pension Id No',
							'Place Of Birth',
							'Unified No',
						];
					@endphp
					@foreach ($collection as $item)
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">{{$item}}</label>
								<input type="text" class="form-control">
							</div>							
						</div>
					@endforeach

					<div class="col-md-6">
						<div class="mb-3 float-start">
							<label class="form-label">Disability</label>
						</div>
						<div class="form-check form-switch float-end">
							<input class="form-check-input" type="checkbox" role="switch">
						</div>					
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Tawteen No</label>
							<input type="text" class="form-control">
						</div>							
					</div>					
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-light border me-2"
					data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Save </button>
			</div>
		</div>
	</div>

	<div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <h5>Professional License Information</h5>
        </div>
        <div class="card-body">
            <form action="employees.html">
				<div class="row">
					@php
						$collection = [
							'Professional License No',
							'Professional License Start Date',
							'Professional License Name',
							'Professional License End Date',
							'Professional License Issuing Country',
						];

					@endphp
					@foreach ($collection as $item)
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">{{$item}}</label>
								<input type="text" class="form-control">
							</div>							
						</div>
					@endforeach
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-light border me-2"
					data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Save </button>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script src="{{ asset('js/script2.js') }}"></script>	
@endsection