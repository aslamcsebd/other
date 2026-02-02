@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-2">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Currency</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Currency</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_hs_code"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create
                        Currency</a>
                </div>
            </div>
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Currency List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Rate</th>

								@include('common.tableHead')					
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currency as $item)
                                <tr>
                                    <td>Cur-{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->rate }}</td>
                                   
            						@include('common.status')

                                    <td>
										<a href="#" class="me-2 edit-Currency" data-bs-toggle="modal"
											data-bs-target="#edit_Currency" data-id="{{ $item->id }}"
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
        <div class="modal fade" id="add_hs_code">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Currency</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('currency.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Code<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="code" placeholder="Code">
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
                                        <label class="form-label">Rate (%)<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="rate" placeholder="Rate number only">
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
        <div class="modal fade" id="edit_Currency">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Currency</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="CurrencyForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="Currency_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Currency Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Currency_name" name="name"
                                    placeholder="Currency name">
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
		document.querySelectorAll('.edit-Currency').forEach(btn => {
			btn.addEventListener('click', () => {
				document.getElementById('Currency_id').value = btn.dataset.id;
				document.getElementById('Currency_name').value = btn.dataset.name;
			});
		});
    </script>
@endsection
