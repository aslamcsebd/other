@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-2">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Sales person</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Sales person</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_sales_person"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create
                        Sales person</a>
                </div>
            </div>
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Sales person List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Employee id</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Job title</th>
                                <th>Manager</th>
                                <th>Commission %</th>
                                <th>Code</th>
                                <th>Customer group</th>
                                @include('common.tableHead')
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($salesPerson as $item)
                                <tr>
                                    <td>SP-{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->employee_no }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->job_title }}</td>
                                    <td>{{ $item->manager_id == 1 ? 'Manager A' : 'Manager B' }}</td>
                                    <td>{{ $item->commission }}</td>
                                    <td>{{ $item->department_code }}</td>
                                    <td>{{ $item->customerGroup->name }}</td>

                                    @include('common.status')

                                    <td>
                                        <a href="#" class="me-2 edit-Sales person" data-bs-toggle="modal"
                                            data-bs-target="#edit_Sales person" data-id="{{ $item->id }}"
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
        <div class="modal fade" id="add_sales_person">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Sales person</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('sales-person.store') }}" method="POST">
                        @csrf
                        <div class="modal-body pb-0 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Full name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee No</label>
                                        <input type="text" class="form-control" name="employee_no"
                                            placeholder="Enter Employee No">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Phone Number</label>
                                    <div class="input-group mb-3">
										<select class="form-control" name="country_code" required>
											<option value="">Select country code</option>
											@foreach (config('country_codes') as $country)
												<option value="{{ $country['dial_code'] }}">
													{{ $country['name'] }} ({{ $country['dial_code'] }})
												</option>
											@endforeach
                                        </select>
                                        <input type="text" class="form-control" name="phone" placeholder="phone number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Job Title</label>
                                        <input type="text" class="form-control" name="job_title"
                                            placeholder="Enter Job Title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Reporting Manager</label>
                                        <select class="form-control" name="manager_id">
                                            <option value="">Select Manager</option>
                                            <option value="1">Manager A</option>
                                            <option value="2">Manager B</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Commission %</label>
                                        <input type="number" class="form-control" name="commission"
                                            placeholder="Enter Commission %" step="0.01" min="0">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Department Code</label>
                                        <input type="text" class="form-control" name="department_code"
                                            placeholder="Enter Department Code">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Customer Group (Submaster)</label>
                                        <select class="form-control" name="customer_group_id">
                                            <option value="">Select Customer Group</option>
                                            @foreach ($customerGroup as $item)
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
        <div class="modal fade" id="edit_Sales person">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Sales person</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="Sales personForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="Sales person_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Sales person Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Sales person_name" name="name"
                                    placeholder="Sales person name">
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
        document.querySelectorAll('.edit-Sales person').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('Sales person_id').value = btn.dataset.id;
                document.getElementById('Sales person_name').value = btn.dataset.name;
            });
        });
    </script>
@endsection
