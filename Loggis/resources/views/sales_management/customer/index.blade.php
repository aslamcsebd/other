@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Clients</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Employee
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Client List</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_client"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                        Client</a>
                </div>
            </div>
        </div>

        <!-- Clients Info -->
        <div class="row d-none">
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <span
                                        class="p-2 br-10 bg-pink-transparent border border-pink d-flex align-items-center justify-content-center">
                                        <i class="ti ti-users-group text-pink fs-18"></i>
                                    </span>
                                </div>
                                <div>
                                    <p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Total Clients</p>
                                    <h4>300</h4>
                                </div>
                            </div>
                            <span class="badge bg-transparent-purple d-inline-flex align-items-center fw-normal">
                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                +19.01%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <span
                                        class="p-2 br-10 bg-success-transparent border border-success d-flex align-items-center justify-content-center">
                                        <i class="ti ti-user-share fs-18"></i>
                                    </span>
                                </div>
                                <div>
                                    <p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Active Clients</p>
                                    <h4>270</h4>
                                </div>
                            </div>
                            <span
                                class="badge bg-transparent-primary text-primary d-inline-flex align-items-center fw-normal">
                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                +19.01%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <span
                                        class="p-2 br-10 bg-danger-transparent border border-danger d-flex align-items-center justify-content-center">
                                        <i class="ti ti-user-pause fs-18"></i>
                                    </span>
                                </div>
                                <div>
                                    <p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Inactive Clients</p>
                                    <h4>30</h4>
                                </div>
                            </div>
                            <span class="badge bg-transparent-dark text-dark d-inline-flex align-items-center fw-normal">
                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                +19.01%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <span
                                        class="p-2 br-10 bg-info-transparent border border-info d-flex align-items-center justify-content-center">
                                        <i class="ti ti-user-plus fs-18"></i>
                                    </span>
                                </div>
                                <div>
                                    <p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">New Clients</p>
                                    <h4>300</h4>
                                </div>
                            </div>
                            <span
                                class="badge bg-transparent-secondary text-dark d-inline-flex align-items-center fw-normal">
                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                +19.01%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Clients Info -->

        <!-- Clients list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Client List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Client Name</th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Phone</th>

                                @include('common.tableHead')
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $item)
                                <tr>
                                    <td data-order="{{ $item->id }}">CL-{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->client->company_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->full_number }}</td>

                                    @include('common.status')

                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_HS code" data-id="{{ $item->id }}"
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

        <!-- Add Client -->
        <div class="modal fade" id="add_client">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Client</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="{{ route('client.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="col-md-12 d-none">
                                <div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                    <div
                                        class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                        <i class="ti ti-photo"></i>
                                    </div>
                                    <div class="profile-upload">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Upload Profile Image</h6>
                                            <p class="fs-12">Image should be below 4 mb</p>
                                        </div>
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-danger">Client type<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="client_type" required>
                                        <option value="" selected disabled>Select Client type</option>
                                        @foreach ($client_types as $index => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-danger">Legal Entity<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="legal_entity_id" required>
                                        <option value="" selected disabled>Select Legal Entity</option>
                                        @foreach ($legal_entity as $index => $item)
                                            <option value="{{ $index + 1 }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-danger">Company<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="company_id" required>
                                        <option value="" selected disabled>Select Company</option>
                                        @foreach ($company as $id => $item)
                                            <option value="{{ $id }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Mobile Number</label>
                                    <div class="input-group">
                                        <select class="form-control" name="country_code" required>
                                            <option value="">Select country code</option>
                                            @foreach (config('country_codes') as $country)
                                                <option value="{{ $country['dial_code'] }}">
                                                    {{ $country['name'] }} ({{ $country['dial_code'] }})
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="text" class="form-control" name="mobile"
                                            placeholder="Mobile number">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password<span class="text-danger">*</span></label>
                                    <input type="text" name="password" class="form-control" value="123456" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Customer Group<span class="text-danger">*</span></label>
                                    <select class="form-select" name="customer_group_id" required>
                                        <option value="" selected disabled>Select Group</option>
                                        @foreach ($customerGroup as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-danger">Language<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="language_id" required>
                                        <option value="" selected disabled>Select Language</option>
                                        @foreach ($language as $index => $item)
                                            <option value="{{ $index + 1 }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Currency<span class="text-danger">*</span></label>
                                    <select class="form-select" name="currency_id" required>
                                        <option value="" selected disabled>Select Currency</option>
                                        @foreach ($currency as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Delivery Term<span class="text-danger">*</span></label>
                                    <select class="form-select" name="delivery_term_id" required>
                                        <option value="" selected disabled>Select Delivery Term</option>
                                        @foreach ($deliveryTerm as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Payment Term<span class="text-danger">*</span></label>
                                    <select class="form-select" name="payment_term_id" required>
                                        <option value="" selected disabled>Select Payment Term</option>
                                        @foreach ($paymentTerm as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Payment Method<span class="text-danger">*</span></label>
                                    <select class="form-select" name="payment_method_id" required>
                                        <option value="" selected disabled>Select Payment Method</option>
                                        @foreach ($paymentMethod as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Sales Person<span class="text-danger">*</span></label>
                                    <select class="form-select" name="sales_person_id" required>
                                        <option value="" selected disabled>Select Sales Person</option>
                                        @foreach ($salesPerson as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label text-danger">UPS Zone<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="ups_zone_id" required>
                                        <option value="" selected disabled>Select UPS Zone</option>
                                        @foreach ($upsZone as $index => $item)
                                            <option value="{{ $index + 1 }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div id="address-wrapper">
                                <div class="address-row mb-2">
                                    <div>Address 1</div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control" name="country[]" id="country1"
                                                placeholder="Country">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" name="state[]" id="state1"
                                                placeholder="State">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="city[]" id="city1"
                                                placeholder="City">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Zip Code</label>
                                            <input type="number" class="form-control" name="postal[]" id="postal1"
                                                placeholder="Zip/Postal Code">
                                        </div>

                                        <div class="col-md-8">
                                            <label class="form-label">Address</label>
                                            <div class="d-flex align-items-end">
                                                <input type="text" class="form-control me-2" name="address[]"
                                                    id="address1" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary col-md-3" id="add-address">
                                <i class="ti ti-circle-plus me-2"></i> Add Another Address
                            </button>

                            <script>
                                let addressCount = 1;

                                document.getElementById('add-address').addEventListener('click', function() {
                                    addressCount++;
                                    const wrapper = document.getElementById('address-wrapper');
                                    const firstRow = wrapper.querySelector('.address-row');
                                    const newRow = firstRow.cloneNode(true);

                                    newRow.querySelectorAll('input').forEach(el => el.value = '');

                                    newRow.querySelector('div:first-child').innerText = 'Address ' + addressCount;

                                    const addressDiv = newRow.querySelector('input[name="address[]"]').parentElement;

                                    if (!addressDiv.querySelector('.btn-delete')) {
                                        addressDiv.insertAdjacentHTML(
                                            'beforeend',
                                            `<button type="button" class="btn btn-danger btn-delete ms-2" style="padding:6px 16px;">
											<i class="ti ti-trash" style="font-size:20px;"></i>
										</button>`
                                        );

                                        // attach click event
                                        addressDiv.querySelector('.btn-delete').addEventListener('click', function() {
                                            newRow.remove();
                                            // Re-number remaining addresses
                                            const rows = wrapper.querySelectorAll('.address-row');
                                            rows.forEach((row, index) => {
                                                row.querySelector('div:first-child').innerText = 'Address ' + (index + 1);
                                            });
                                            addressCount = rows.length;
                                        });
                                    }

                                    wrapper.appendChild(newRow);
                                });
                            </script>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger border" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Client -->
        <div class="modal fade" id="edit_client">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Client</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="clients.html">
                        <div class="contact-grids-tab">
                            <ul class="nav nav-underline" id="myTab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="info-tab2" data-bs-toggle="tab"
                                        data-bs-target="#basic-info2" type="button" role="tab"
                                        aria-selected="true">Basic Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="address-tab2" data-bs-toggle="tab"
                                        data-bs-target="#address2" type="button" role="tab"
                                        aria-selected="false">Permissions</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="basic-info2" role="tabpanel"
                                aria-labelledby="info-tab2" tabindex="0">
                                <div class="modal-body pb-0 ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                                <div
                                                    class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                    <i class="ti ti-photo"></i>
                                                </div>
                                                <div class="profile-upload">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Upload Profile Image</h6>
                                                        <p class="fs-12">Image should be below 4 mb</p>
                                                    </div>
                                                    <div class="profile-uploader d-flex align-items-center">
                                                        <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                            Upload
                                                            <input type="file" class="form-control image-sign"
                                                                multiple="">
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light btn-sm">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control" value="Michael">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="email" class="form-control" value="Walker">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Username <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control" value="Michael Walker">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email<span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control" value="michael@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 ">
                                                <label class="form-label">Password <span class="text-danger">
                                                        *</span></label>
                                                <div class="pass-group">
                                                    <input type="password" class="pass-input form-control"
                                                        value="1234">
                                                    <span class="ti toggle-password ti-eye-off"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 ">
                                                <label class="form-label">Confirm Password <span class="text-danger">
                                                        *</span></label>
                                                <div class="pass-group">
                                                    <input type="password" class="pass-inputs form-control"
                                                        value="1234">
                                                    <span class="ti toggle-passwords ti-eye-off"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control" value="(163) 2459 315">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Company</label>
                                                <input type="text" class="form-control"
                                                    value="BrightWave Innovations">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-light border me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2"
                                tabindex="0">
                                <div class="modal-body pb-0 ">
                                    <div class="card bg-light-500 shadow-none">
                                        <div
                                            class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6>Enable Options</h6>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="form-check form-check-md form-switch me-2">
                                                    <label class="form-check-label mt-0">
                                                        <input class="form-check-input me-2" type="checkbox"
                                                            role="switch">
                                                        Enable all Module
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-md d-flex align-items-center">
                                                    <label class="form-check-label mt-0">
                                                        <input class="form-check-input" type="checkbox" checked="">
                                                        Select All
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-light border me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Edit Client -->

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