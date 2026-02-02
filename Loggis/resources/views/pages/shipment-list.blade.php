@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Shipment list</h2>
            </div>
            {{-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2">
                    <a href="{{ url('shipments') }}" class="btn btn-primary d-flex align-items-center">
                        <i class="ti ti-circle-plus me-2"></i>Create
                        Shipment</a>
                </div>
            </div> --}}
        </div>

        <!-- Clients list -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <!-- Create Shipment Button -->
                    <div class="col-sm-12 col-md-3 mb-2">
                        <a href="{{ url('shipments') }}" class="btn btn-outline-dark w-100">
                            <i class="ti ti-plus" aria-hidden="true"></i> Create Shipment
                        </a>
                    </div>

                    <!-- Search Input -->
                    <div class="col-sm-12 col-md-4 mb-2">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control"
                                placeholder="Enter tracking number" onkeyup="cdp_load(1);">
                            <button class="btn btn-outline-dark" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <!-- Shipping Status Dropdown -->
                    <div class="col-sm-12 col-md-3 mb-2">
                        <select class="form-select" id="status_courier" name="status_courier" onchange="cdp_load(1);">
                            <option value="0">--Select Shipping Status--</option>
                            <option value="1">Pending_Collection</option>
                            <option value="2">Received Office</option>
                            <option value="3">In_Transit</option>
                            <option value="4">In_Warehouse</option>
                            <option value="5">Distribution</option>
                            <option value="6">Available</option>
                            <option value="7">On Route</option>
                            <option value="8">Delivered</option>
                            <option value="10">Approved</option>
                            <option value="11">Pending</option>
                            <option value="12">Rejected</option>
                            <option value="13">Consolidate</option>
                            <option value="14">Pick_up</option>
                            <option value="15">Picked up</option>
                            <option value="16">No Picked up</option>
                            <option value="17">Quotation</option>
                            <option value="18">Pending_quote</option>
                            <option value="19">Invoiced</option>
                            <option value="21">Cancelled</option>
                            <option value="23">Pending_payment</option>
                            <option value="25">Not Shipped</option>
                        </select>
                    </div>

                    <!-- Filter By Dropdown -->
                    <div class="col-sm-12 col-md-2 mb-2">
                        <select class="form-select" id="filterby" name="filterby" onchange="cdp_load(1);">
                            <option value="0">Filtered By</option>
                            <option value="1">Pickups</option>
                            <option value="2">Sent</option>
                            <option value="3">Consolidated</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th>Tracking</th>
                                <th>Date</th>
                                <th>Sender</th>
                                <th>Recipient</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Total Cost</th>
                                <th>Invoice Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use Faker\Factory as Faker;
                                $faker = Faker::create();
                                $statusColors = ['success', 'danger', 'warning', 'info', 'primary'];
                                $statuses = [
                                    'Pending_Collection',
                                    'Received Office',
                                    'In_Transit',
                                    'In_Warehouse',
                                    'Distribution',
                                    'Available',
                                    'On Route',
                                    'Delivered',
                                ];
                            @endphp

                            @for ($i = 1; $i <= 15; $i++)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox" name="checkbox[]"
                                                value="TRK{{ $i }}">
                                        </div>
                                    </td>
                                    <td><a href="#"><b>TRK{{ str_pad($i, 6, '0', STR_PAD_LEFT) }}</b></a></td>
                                    <td>{{ $faker->date('Y-m-d') }}</td>
                                    <td>{{ $faker->name }}</td>
                                    <td>{{ $faker->name }}</td>
                                    <td>{{ $faker->city }}, {{ $faker->country }}</td>
                                    <td>{{ $faker->city }}, {{ $faker->country }}</td>
                                    <td><b>{{ $faker->randomElement(['Cash', 'Credit', 'Online']) }}</b></td>
                                    <td>
                                        @php
                                            $randomStatus = $faker->randomElement($statuses);
                                            $randomColor = $faker->randomElement($statusColors);
                                        @endphp
                                        <span class="badge bg-{{ $randomColor }}">{{ $randomStatus }}</span>
                                    </td>
                                    <td><b>{{ $faker->randomFloat(2, 10, 500) }}</b></td>
                                    <td>
                                        <span class="badge bg-{{ $faker->randomElement(['success', 'danger']) }}">
                                            {{ $faker->randomElement(['Paid', 'Unpaid']) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="#"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <!-- /Page Wrapper -->

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
                    <form action="clients.html">
                        <div class="contact-grids-tab">
                            <ul class="nav nav-underline" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="info-tab" data-bs-toggle="tab"
                                        data-bs-target="#basic-info" type="button" role="tab"
                                        aria-selected="true">Individual</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="address-tab" data-bs-toggle="tab"
                                        data-bs-target="#address" type="button" role="tab"
                                        aria-selected="false">Organization</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel"
                                aria-labelledby="info-tab" tabindex="0">
                                <div class="modal-body pb-0 ">
                                    <div class="row">
                                        <div class="col-md-12 d-none">
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

                                        <div class="row">
                                            <!-- Legal Entity (Company Master) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Legal Entity (Company Master)<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Legal Entity</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- No. ID -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">No. ID<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Name -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Full Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Username -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Username<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Password -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Password<span
                                                            class="text-danger">*</span></label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email<span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Phone Number -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Company (Company master from CX) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Company (Company master from CX)<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Company</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Address (multiple - Map) -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Address (Multiple / Map)<span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <!-- Customer Group -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Customer Group<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Group</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Language -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Language<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Language</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Currency -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Currency<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Currency</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Mandatory Credit Limit (True/False) -->
                                            <div class="col-md-6">
                                                <div class="form-check mt-4">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="mandatoryCreditLimit">
                                                    <label class="form-check-label" for="mandatoryCreditLimit">
                                                        Mandatory Credit Limit
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Credit Limit Field (Value) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Credit Limit Value</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Sales Person (Submaster) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Sales Person (Submaster)<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Sales Person</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Term of Payment (Submaster) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Term of Payment (Submaster)<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Term</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Method of Payment (Submaster) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Method of Payment (Submaster)<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Method</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Delivery Term (Submaster) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Delivery Term (Submaster)<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select">
                                                        <option value="">Select Delivery Term</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- UPS Zone -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">UPS Zone</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Price Include Tax (True/False) -->
                                            <div class="col-md-6">
                                                <div class="form-check mt-4">
                                                    <input class="form-check-input" type="checkbox" id="priceIncludeTax">
                                                    <label class="form-check-label" for="priceIncludeTax">
                                                        Price Include Tax
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Agent License No -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Agent License No</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div id="address-wrapper">
                                            <!-- Address 1 (cannot delete) -->
                                            <div class="address-row mb-3">
                                                <div>Address 1</div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Country</label>
                                                            <select class="form-control select2" name="country[]"
                                                                id="country1">
                                                                <option value="">Select Country</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Status</label>
                                                            <select class="form-control select2" name="state[]"
                                                                id="state1">
                                                                <option value="">Select Status</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">City</label>
                                                            <select class="form-control select2" name="city[]"
                                                                id="city1">
                                                                <option value="">Select City</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Zip Code</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="postal[]" id="postal1" placeholder="Zip Code">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Address</label>
                                                            <div class="d-flex align-items-end">
                                                                <input type="text"
                                                                    class="form-control form-control-sm me-2"
                                                                    name="address[]" id="address1"
                                                                    placeholder="Address">
                                                                <!-- Delete button will be added dynamically for cloned addresses -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary mb-3 col-md-3" id="add-address">Add
                                            Another
                                            Address</button>

                                        <script>
                                            let addressCount = 1; // Already have Address 1

                                            document.getElementById('add-address').addEventListener('click', function() {
                                                addressCount++;
                                                const wrapper = document.getElementById('address-wrapper');
                                                const firstRow = wrapper.querySelector('.address-row');
                                                const newRow = firstRow.cloneNode(true);

                                                // Clear values
                                                newRow.querySelectorAll('input, select').forEach(el => el.value = '');

                                                // Update heading
                                                newRow.querySelector('div:first-child').innerText = 'Address ' + addressCount;

                                                // Add delete button after Address input
                                                const addressDiv = newRow.querySelector('input[name="address[]"]').parentElement;
                                                let delBtn = document.createElement('button');
                                                delBtn.type = 'button';
                                                delBtn.className = 'btn btn-danger btn-sm';
                                                delBtn.innerText = 'Delete';
                                                delBtn.addEventListener('click', function() {
                                                    newRow.remove();
                                                    // Re-number remaining addresses
                                                    const rows = wrapper.querySelectorAll('.address-row');
                                                    rows.forEach((row, index) => {
                                                        row.querySelector('div:first-child').innerText = 'Address ' + (index + 1);
                                                    });
                                                    addressCount = rows.length;
                                                });
                                                addressDiv.appendChild(delBtn);

                                                wrapper.appendChild(newRow);
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-light border me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab"
                                tabindex="0">
                                <div class="modal-body pb-0">
                                    <div class="row">
                                        <!-- Legal Entity (Company Master) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Legal Entity (Company Master)<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Legal Entity</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- No. ID -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">No. ID<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Name -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Full Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Username -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Username<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password<span
                                                        class="text-danger">*</span></label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email<span class="text-danger">*</span></label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Contacts (Dropdown from Contacts Master) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Contacts<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Contact</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Address (multiple / Map) -->
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address (Multiple / Map)<span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <!-- Classification Group -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Classification Group<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Classification Group</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Customer Group -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Customer Group<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Customer Group</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Language -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Language<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Language</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Currency -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Currency<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Currency</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Group of Companies -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Group of Companies<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Group of Companies</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Tax Registration No. -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tax Registration No.<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Mandatory Credit Limit (True/False) -->
                                        <div class="col-md-6">
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox"
                                                    id="mandatoryCreditLimit">
                                                <label class="form-check-label" for="mandatoryCreditLimit">
                                                    Mandatory Credit Limit
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Credit Limit Field (Value) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Credit Limit Value</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Sales Person (Submaster) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Sales Person (Submaster)<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Sales Person</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Term of Payment (Submaster) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Term of Payment (Submaster)<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Term of Payment</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Method of Payment (Submaster) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Method of Payment (Submaster)<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Method of Payment</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Delivery Term (Submaster) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Delivery Term (Submaster)<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option value="">Select Delivery Term</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- UPS Zone -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">UPS Zone</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Price Include Tax (True/False) -->
                                        <div class="col-md-6">
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" id="priceIncludeTax">
                                                <label class="form-check-label" for="priceIncludeTax">
                                                    Price Include Tax
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Agent License No -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Agent License No</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-light border me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#success_modal">Save </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Client -->

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
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                            <i class="ti ti-trash-x fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm Delete</h4>
                        <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="clients.html" class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
