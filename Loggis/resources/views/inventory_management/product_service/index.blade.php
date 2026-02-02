@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-2">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Product & Service</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href=""><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Organization Setup
                        </li>
                        <li class="breadcrumb-item">
                            Inventory
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product & Service</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_ProductService"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create
                        Product & Service</a>
                </div>
            </div>
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Product & Service List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Storage Group</th>
                                <th>Tracking Group</th>
                                <th>UOM</th>
                                <th>Qty</th>

								@include('common.tableHead')				
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productService as $item)
                                <tr>									
									<td data-order="{{ $item->id }}">PS-{{ $item->id }}</td> <!-- Numeric sort -->
									<td>{{ $item->name }}</td>
									<td>{{ ucfirst($item->type) }}</td>
									<td>{{ $item->storageGroup->name ?? '-' }}</td>
									<td>{{ $item->trackingGroup->name ?? '-' }}</td>
									<td>{{ $item->uom->name ?? '-' }}</td>
									<td>{{ $item->qty }}</td>
                                   
            						@include('common.status')

                                    <td>                                       
										<a href="#" class="me-2 edit-Product & Service" data-bs-toggle="modal"
											data-bs-target="#edit_Product & Service" data-id="{{ $item->id }}"
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
        <div class="modal fade" id="add_ProductService">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product & Service</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('product-service.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
								<div class="col-md-4 mb-3">
									<label class="form-label">Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="name" placeholder="Name">
                                </div>

								<div class="col-md-4 mb-3">
									<label class="form-label">Types<span class="text-danger">*</span></label>
									<select class="form-select" name="type">
										<option value="">Select type</option>
										@foreach ($productTypes as $item)
											<option value="{{ $item }}">{{ ucfirst($item) }}</option>												
										@endforeach
									</select>
								</div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Storage Group</label>
                                    <select class="form-select" name="storage_group_id">
                                       <option value="">Select storage group</option>
										@foreach ($storageGroup as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>												
										@endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Tracking Group</label>
                                    <select class="form-select" name="tracking_group_id">
                                        <option value="">Select tracking group</option>
										@foreach ($trackingGroup as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>												
										@endforeach
                                    </select>
                                </div>                              

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">UOM</label>
                                    <select class="form-select" name="uom_id">
                                        <option value="">Select UOM</option>
										@foreach ($uoms as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>												
										@endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Qty</label>
                                    <input type="number" class="form-control" name="qty" placeholder="Enter Quantity">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Costing Model Group</label>
                                    <select class="form-select" name="costing_model_group_id">
                                        <option value="">Select Costing Model</option>
										@foreach ($costingModelGroup as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>												
										@endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Purchase Unit</label>
                                    <input type="text" class="form-control" name="purchase_unit" placeholder="Enter Purchase Unit">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Sales Unit</label>
                                    <input type="text" class="form-control" name="sales_unit" placeholder="Enter Sales Unit">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Inventory Unit</label>
                                    <input type="text" class="form-control" name="inventory_unit" placeholder="Enter Inventory Unit">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Purchase Price</label>
                                    <input type="number" class="form-control" name="purchase_price" placeholder="Enter Purchase Price">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Sales Price</label>
                                    <input type="number" class="form-control" name="sales_price" placeholder="Enter Sales Price">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Tax</label>
                                    <input type="text" class="form-control" name="tax" placeholder="Enter Tax">
                                </div>
								
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Origin</label>
                                    <select class="form-select" name="origin_id">
                                        <option value="">Select Origin</option>
										@foreach ($origin as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>												
										@endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">HS Code</label>
                                    <select class="form-select" name="hscode_id">
                                        <option value="">Select HS Code</option>
										@foreach ($hscode as $item)
											<option value="{{ $item->id }}">{{ $item->name }}</option>												
										@endforeach
                                    </select>
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
        <div class="modal fade" id="edit_Product & Service">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product & Service</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="Product & ServiceForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="Product & Service_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Product & Service Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Product & Service_name" name="name"
                                    placeholder="Product & Service name">
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

@endsection
