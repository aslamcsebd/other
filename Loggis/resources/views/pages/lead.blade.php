@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Lead</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Employee
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Lead List</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">
                    <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                        <a href="Lead.html" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i
                                class="ti ti-list-tree"></i></a>
                        <a href="Lead-grid.html" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_Lead"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                        Lead</a>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Lead list -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Lead List</h5>
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
                                <th>Lead ID</th>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Contact ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Source</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use Faker\Factory as Faker;
                                $faker = Faker::create();
                            @endphp

                            @for ($i = 1; $i <= 15; $i++)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td><a href="Lead-details.html">Lead-{{ str_pad($i, 3, '0', STR_PAD_LEFT) }}</a></td>
                                    <td>Cus-{{ str_pad($i, 3, '0', STR_PAD_LEFT) }}</td>
                                    <td>{{ $faker->company }}</td>
                                    <td>Con-{{ str_pad($i, 3, '0', STR_PAD_LEFT) }}</td>
                                    <td>{{ $faker->name }}</td>
                                    <td>{{ $faker->phoneNumber }}</td>
                                    <td>{{ $faker->unique()->safeEmail }}</td>
                                    <td>{{ $faker->randomElement(['Website', 'Referral', 'Advertisement', 'Social Media']) }}
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-{{ $faker->randomElement(['success', 'warning', 'info', 'danger']) }} d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>
                                            {{ $faker->randomElement(['New', 'Converted', 'Qualified', 'Proposal Sent', 'Contacted', 'Disqualified', 'On-Hold']) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#view_lead"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_lead"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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

        <!-- Add Lead -->
        <div class="modal fade" id="add_Lead">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Lead</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>

                    <div class="modal-body pb-0 ">
                        <div class="row">
                            <!-- Lead Title -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Lead Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="lead_title"
                                        placeholder="Enter Lead Title">
                                </div>
                            </div>

                            <!-- Lead Source -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Lead Source <span class="text-danger">*</span></label>
                                    <select class="form-select" name="lead_source">
                                        <option value="">Select Source</option>
                                        <option>Website</option>
                                        <option>Email</option>
                                        <option>Whatsapp</option>
                                        <option>Referral</option>
                                        <option>Agent</option>
                                        <option>Customer</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Lead Date (system default) -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Lead Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="lead_date"
                                        value="{{ date('Y-m-d') }}" readonly>
                                </div>
                            </div>

                            <!-- Customer Group -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Customer Group <span class="text-danger">*</span></label>
                                    <select class="form-select" name="customer_group">
                                        <option value="">Select Group</option>
                                        <option>Shipper</option>
                                        <option>Consignee</option>
                                        <option>Importer</option>
                                        <option>Exporter</option>
                                        <option>Agent</option>
                                        <option>Forwarder</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Customer ID -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Customer ID <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <select class="form-select" name="customer_id">
                                            <option value="">Select Existing Customer</option>
                                            <!-- Loop customers here -->
                                        </select>
                                        <button class="btn btn-primary" type="button">+ New</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact ID -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Contact ID <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <select class="form-select" name="contact_id">
                                            <option value="">Select Existing Contact</option>
                                            <!-- Loop contacts here -->
                                        </select>
                                        <button class="btn btn-primary" type="button">+ New</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Name -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Contact Name</label>
                                    <input type="text" class="form-control" name="contact_name"
                                        placeholder="Enter Contact Name">
                                </div>
                            </div>

                            <!-- Contact Email -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Contact Email</label>
                                    <input type="email" class="form-control" name="contact_email"
                                        placeholder="Enter Contact Email">
                                </div>
                            </div>

                            <!-- Contact Phone -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Contact Phone</label>
                                    <input type="text" class="form-control" name="contact_phone"
                                        placeholder="Enter Contact Phone">
                                </div>
                            </div>

                            <!-- Country -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Country <span class="text-danger">*</span></label>
                                    <select class="form-select" name="country">
                                        <option value="">Select Country</option>
                                        <!-- Populate country list -->
                                    </select>
                                </div>
                            </div>

                            <!-- Interested Services -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Interested Service <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="services[]">
                                        <option>Import</option>
                                        <option>Export</option>
                                        <option>Transfer</option>
                                        <option>Warehouse</option>
                                    </select>
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
        </div>
        <!-- /Add Lead -->

        <!-- Edit Lead -->
        <div class="modal fade" id="edit_Lead">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Lead</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="Lead.html">
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
        <!-- /Edit Lead -->

        <!-- Add Lead Success -->
        <div class="modal fade" id="success_modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center p-3">
                            <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                    class="ti ti-check fs-24"></i></span>
                            <h5 class="mb-2">Lead Added Successfully</h5>
                            <p class="mb-3">Stephan Peralt has been added with Lead ID : <span class="text-primary">#CLT
                                    - 0024</span>
                            </p>
                            <div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="Lead.html" class="btn btn-dark w-100">Back to List</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="Lead-details.html" class="btn btn-primary w-100">Detail Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Lead Success -->

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
                            <a href="Lead.html" class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
