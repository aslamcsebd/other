@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-2">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Customer Classifiaction Group</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Customer Classifiaction Group</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_CustomerClassifiactionGroup"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create
                        Customer Classifiaction Group</a>
                </div>
            </div>
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Customer Classifiaction Group List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Manual id</th>
                                <th>Name</th>
                                <th>Description</th>

								@include('common.tableHead')					
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customerClassifiactionGroup as $item)
                                <tr>
                                    <td>Group-{{ $item->id }}</td>
                                    <td>{{ $item->manual_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->details }}</td>
                                   
            						@include('common.status')

                                    <td>
										<a href="#" class="me-2 edit-Customer Classifiaction Group" data-bs-toggle="modal"
											data-bs-target="#edit_Customer Classifiaction Group" data-id="{{ $item->id }}"
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
        <div class="modal fade" id="add_CustomerClassifiactionGroup">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Customer Classifiaction Group</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('customer-classifiaction-groups.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Manual id<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="manual_id" placeholder="Manual id">
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
								<div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Description<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="description" placeholder="Description">
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
        <div class="modal fade" id="edit_Customer Classifiaction Group">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Customer Classifiaction Group</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="Customer Classifiaction GroupForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="Customer Classifiaction Group_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Customer Classifiaction Group Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Customer Classifiaction Group_name" name="name"
                                    placeholder="Customer Classifiaction Group name">
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
		document.querySelectorAll('.edit-Customer Classifiaction Group').forEach(btn => {
			btn.addEventListener('click', () => {
				document.getElementById('Customer Classifiaction Group_id').value = btn.dataset.id;
				document.getElementById('Customer Classifiaction Group_name').value = btn.dataset.name;
			});
		});
    </script>
@endsection
