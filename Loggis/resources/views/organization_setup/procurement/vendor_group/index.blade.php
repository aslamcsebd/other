@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-2">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Vendor Group</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href=""><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Organization Setup
                        </li>
                        <li class="breadcrumb-item">
                            Sales
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Vendor Group</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_VendorGroup"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create
                        Vendor Group</a>
                </div>
            </div>
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Vendor Group List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Payment term</th>
                                <th>Tax group</th>

								@include('common.tableHead')								
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendorGroup as $item)
                                <tr>
                                    <td>VG-{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->paymentTerm->name }}</td>
                                    <td>{{ $item->taxGroup->name }}</td>
                                   
            						@include('common.status')

                                    <td>
										<a href="#" class="me-2 edit-Customer  Group" data-bs-toggle="modal"
											data-bs-target="#edit_Customer  Group" data-id="{{ $item->id }}"
											data-name="{{ $item->name }}">
											<i class="ti ti-edit"></i>
										</a>
	
										@include('common.delete.btn')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add -->
        <div class="modal fade" id="add_VendorGroup">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Vendor Group</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('vendor-group.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
								<div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>

								<div class="col">
									<div class="mb-3">
										<label class="form-label">Payment term<span class="text-danger">*</span></label>
										<select class="form-select" name="payment_term_id">
											<option value="">Select Payment term</option>
											@foreach ($paymentTerm as $item)
												<option value="{{ $item->id }}">{{ $item->name }}</option>												
											@endforeach
										</select>
									</div>
								</div>

								<div class="col">
									<div class="mb-3">
										<label class="form-label">Tax group<span class="text-danger">*</span></label>
										<select class="form-select" name="tax_group_id">
											<option value="">Select Tax Group</option>
											@foreach ($taxGroup as $item)
												<option value="{{ $item->id }}">{{ $item->name }}</option>												
											@endforeach
										</select>
									</div>
								</div>					
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger border" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit -->
        <div class="modal fade" id="edit_Customer  Group">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Vendor Group</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="Customer  GroupForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="Customer  Group_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Customer  Group Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Customer  Group_name" name="name"
                                    placeholder="Customer  Group name">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Add Client Success -->
        <div class="modal fade" id="success_modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center p-3">
                            <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                    class="ti ti-check fs-24"></i></span>
                            <h5 class="mb-2">Client Added Successfully</h5>
                            <p class="mb-3">Stephan Peralt has been added with Client ID : <span
                                    class="text-primary">#CLT - 0024</span>
                            </p>
                            <div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="clients.html" class="btn btn-dark w-100">Back to List</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="client-details.html" class="btn btn-primary w-100">Detail Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Client Success -->

        <!-- Delete Modal -->
        @include('common.delete.modal')
    </div>
@endsection

@section('js')
    <script>
		document.querySelectorAll('.edit-Customer  Group').forEach(btn => {
			btn.addEventListener('click', () => {
				document.getElementById('Customer  Group_id').value = btn.dataset.id;
				document.getElementById('Customer  Group_name').value = btn.dataset.name;
			});
		});
    </script>
@endsection
