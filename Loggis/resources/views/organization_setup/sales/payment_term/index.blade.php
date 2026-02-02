@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-2">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Payment Term</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Payment Term</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_hs_code"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create
                        Payment Term</a>
                </div>
            </div>
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Payment Term List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Payment method</th>
                                <th>Month</th>
                                <th>Days</th>
                                <th>Is_default</th>
                                @include('common.tableHead')
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paymentTerm as $item)
                                <tr>
                                    <td>Cur-{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->paymentMethod->name }}</td>
									<td>{{ date('F', mktime(0, 0, 0, $item->month, 1)) }}</td>
                                    <td>{{ $item->days }}</td>
                                    <td>{{ $item->is_default }}</td>

                                    @include('common.status')

                                    <td>
                                        <a href="#" class="me-2 edit-Payment Term" data-bs-toggle="modal"
                                            data-bs-target="#edit_Payment Term" data-id="{{ $item->id }}"
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
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Payment Term</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('payment-term.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Term name">
                                    </div>
                                </div>

								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Payment Method<span class="text-danger">*</span></label>
										<select class="form-select" name="payment_method_id">
											<option value="">Select Payment Method</option>
											@foreach ($paymentMethod as $item)
												<option value="{{ $item->id }}">{{ $item->name }}</option>												
											@endforeach
										</select>
									</div>
								</div>

								@php
									$months = [];
									for ($m = 1; $m <= 12; $m++) {
										$months[$m] = date('F', mktime(0, 0, 0, $m, 1)); // ID = month number, Name = full month name
									}
								@endphp

								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Month<span class="text-danger">*</span></label>
										<select class="form-select" name="month">
											<option value="">Select Month</option>
											@foreach ($months as $id => $name)
												<option value="{{ $id }}">{{ $name }}</option>
											@endforeach
										</select>
									</div>
								</div>

                                <!-- Days -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Days <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="days" placeholder="Enter Days">
                                    </div>
                                </div>

                                <!-- Default Term of Payment -->
                                <div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Default Term of Payment <span class="text-danger">*</span></label>
										<div class="d-flex gap-2">
											<input type="radio" class="btn-check" name="is_default" id="default_yes" value="yes" autocomplete="off">
											<label class="btn btn-outline-success" for="default_yes">Yes</label>

											<input type="radio" class="btn-check" name="is_default" id="default_no" value="no" autocomplete="off" checked>
											<label class="btn btn-outline-danger" for="default_no">No</label>
										</div>
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
        <div class="modal fade" id="edit_Payment Term">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Payment Term</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="Payment TermForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="Payment Term_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Payment Term Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Payment Term_name" name="name"
                                    placeholder="Payment Term name">
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
                                    class="text-primary">#CLT -
                                    0024</span>
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
        document.querySelectorAll('.edit-Payment Term').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('Payment Term_id').value = btn.dataset.id;
                document.getElementById('Payment Term_name').value = btn.dataset.name;
            });
        });
    </script>
@endsection
