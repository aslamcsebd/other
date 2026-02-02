@extends('layouts.app')

@section('content')
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Create BOE</h3>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Select Shipment ID
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Tracking Number -->
                            <div class="col-md-4 mb-3">
                                {{-- <label class="form-label">Select Shipment ID</label> --}}
                                <input type="text" class="form-control" placeholder="Select Shipment ID">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Declaration information
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Shipment ID -->
                            <div class="col mb-3">
                                <label class="form-label">Shipment ID</label>
                                <input type="text" class="form-control" name="shipment_id"
                                    placeholder="Enter Shipment ID">
                            </div>

                            <!-- BOE ID (Auto-generated, Readonly) -->
                            <div class="col mb-3">
                                <label class="form-label">BOE ID</label>
                                <input type="text" class="form-control" name="boe_id" value="AUTO-12345" readonly>
                            </div>

                            <!-- BOE No -->
                            <div class="col mb-3">
                                <label class="form-label">BOE No</label>
                                <input type="text" class="form-control" name="boe_no" placeholder="Enter BOE No">
                            </div>

                            <!-- BOE Type -->
                            <div class="col mb-3">
                                <label class="form-label">BOE Type</label>
                                <select class="form-control" name="boe_type">
                                    <option value="">Select Type</option>
                                    <option value="re-export">Re-Export</option>
                                    <option value="free-zone">Free Zone</option>
                                    <option value="mainland">Mainland</option>
                                    <option value="temporary">Temporary</option>
                                </select>
                            </div>

                            <!-- BOE Date -->
                            <div class="col mb-3">
                                <label class="form-label">BOE Date</label>
                                <input type="date" class="form-control" name="boe_date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Sender Information
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Sender/Customer -->
                            <div class="col-md-10 mb-3">
                                <label class="form-label">Sender/Customer</label>
                                <select class="select2 form-control" id="sender_id" name="sender_id">
                                    <option value="">Search sender name</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3 d-flex align-items-end">
                                <button type="button" class="btn btn-default w-100" data-type_user="user_customer"
                                    data-bs-toggle="modal" data-bs-target="#myModalAddUser">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>

                            <!-- Sender/Customer Address -->
                            <div class="col-md-10 mb-3">
                                <label class="form-label">Sender/Customer Address</label>
                                <select class="select2 form-control" id="sender_address_id" name="sender_address_id"
                                    disabled>
                                    <option value="">Search sender address</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3 d-flex align-items-end">
                                <button type="button" id="add_address_sender" class="btn btn-default w-100"
                                    data-type_user="user_customer" data-toggle="modal"
                                    data-target="#myModalAddUserAddresses" disabled>
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Recepient Information
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Recipient/Client -->
                            <div class="col-md-10 mb-3">
                                <label class="form-label">Recipient/Client</label>
                                <select class="select2 form-control" id="recipient_id" name="recipient_id" disabled>
                                    <option value="">Search Recipient Name</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3 d-flex align-items-end">
                                <button type="button" id="add_recipient" class="btn btn-default w-100"
                                    data-type_user="user_recipient" data-toggle="modal"
                                    data-target="#myModalAddRecipient" disabled>
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>

                            <!-- Recipient/Client Address -->
                            <div class="col-md-10 mb-3">
                                <label class="form-label">Recipient/Client Address</label>
                                <select class="select2 form-control" id="recipient_address_id"
                                    name="recipient_address_id" disabled>
                                    <option value="">Search recipient address</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3 d-flex align-items-end">
                                <button type="button" id="add_address_recipient" class="btn btn-default w-100"
                                    data-type_user="user_recipient" data-toggle="modal"
                                    data-target="#myModalAddRecipientAddresses" disabled>
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Bill of Entry Information
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Shipping Information
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Shipping Details
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Carrier Registration No.</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Carrier Registration No.">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Scheduled Date</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">MAWB / BOL</label>
                                                    <input type="text" class="form-control" placeholder="MAWB / BOL">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">VSL No.</label>
                                                    <input type="text" class="form-control" placeholder="VSL No.">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Shipment No.</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Shipment No.">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Customer Reference Number</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Customer Reference Number">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Declaration Number</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Declaration Number">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Delivery Date & Address</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Delivery Date & Address">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Pickup Address</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Pickup Address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Port Details
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!-- Port Details -->
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Original Load Port</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Original Load Port">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Port of Load</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Port of Load">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Port of Discharge</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Port of Discharge">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Cargo Weight/Voume/Type
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!-- Cargo Weight / Volume / Type -->
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Net Weight</label>
                                                    <input type="text" class="form-control" placeholder="Net Weight">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Gross Weight</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Gross Weight">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Cargo Type</label>
                                                    <input type="text" class="form-control" placeholder="Cargo Type">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Package Details
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Package Details -->
                                    <div class="row">
                                        <!-- Type of Package -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Type of Package</label>
                                            <input type="text" class="form-control" placeholder="Enter Package Type">
                                        </div>

                                        <!-- No. of Packages -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label">No. of Packages</label>
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>

                                        <!-- Shipping Marks -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label">Shipping Marks</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Shipping Marks">
                                        </div>
                                    </div>

                                    <!-- Add/Edit Package Button -->
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary">Add / Edit Package</button>
                                        </div>
                                    </div>

                                    <!-- Package List -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Package List</label>
                                            <table class="table table-bordered table-sm">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Type of Package</th>
                                                        <th>No. of Packages</th>
                                                        <th>Shipping Marks</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Example Row -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Box</td>
                                                        <td>10</td>
                                                        <td>Mark-123</td>
                                                        <td>2025-08-24</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning">Edit</button>
                                                            <button class="btn btn-sm btn-danger">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Container Details
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Upload Container -->
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Upload Container File</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary">Upload</button>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Add / Edit Container -->
                                    <div class="row">
                                        <!-- Container No -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Container No</label>
                                            <input type="text" class="form-control" placeholder="Container No">
                                        </div>

                                        <!-- Seal No -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Seal No</label>
                                            <input type="text" class="form-control" placeholder="Seal No">
                                        </div>

                                        <!-- Container Size -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Container Size</label>
                                            <input type="text" class="form-control" placeholder="20ft / 40ft">
                                        </div>

                                        <!-- Container Qty -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Container Qty</label>
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>

                                        <!-- Container Type -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Container Type</label>
                                            <input type="text" class="form-control" placeholder="FCL / LCL">
                                        </div>

                                        <!-- Commodity -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Commodity</label>
                                            <input type="text" class="form-control" placeholder="Commodity">
                                        </div>
                                    </div>

                                    <!-- Add/Edit Button -->
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-success">Add / Edit Container</button>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Container List -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Container List</label>
                                            <table class="table table-bordered table-sm">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Container No</th>
                                                        <th>Seal No</th>
                                                        <th>Size</th>
                                                        <th>Qty</th>
                                                        <th>Type</th>
                                                        <th>Commodity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Example Row -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>CNT12345</td>
                                                        <td>SL9876</td>
                                                        <td>40ft</td>
                                                        <td>2</td>
                                                        <td>FCL</td>
                                                        <td>Electronics</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning">Edit</button>
                                                            <button class="btn btn-sm btn-danger">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Item Information
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Item Entry -->
                                    <div class="row">
                                        <!-- Item ID -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Item ID</label>
                                            <input type="text" class="form-control" placeholder="Item ID">
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label">Description</label>
                                            <input type="text" class="form-control" placeholder="Item Description">
                                        </div>

                                        <!-- HS Code -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">HS Code</label>
                                            <input type="text" class="form-control" placeholder="HS Code">
                                        </div>

                                        <!-- Owner -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Owner</label>
                                            <input type="text" class="form-control" placeholder="Owner">
                                        </div>

                                        <!-- Origin -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label">Origin</label>
                                            <input type="text" class="form-control" placeholder="Origin Country">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Container No -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Container No</label>
                                            <input type="text" class="form-control" placeholder="Container No">
                                        </div>

                                        <!-- BO -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">BO</label>
                                            <input type="text" class="form-control" placeholder="BO">
                                        </div>

                                        <!-- Quantity -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Qty</label>
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>

                                        <!-- Unit Price -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Unit Price</label>
                                            <input type="number" step="0.01" class="form-control"
                                                placeholder="0.00">
                                        </div>

                                        <!-- UOM -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">UOM</label>
                                            <input type="text" class="form-control" placeholder="Unit">
                                        </div>

                                        <!-- Amount -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Amount</label>
                                            <input type="number" step="0.01" class="form-control" placeholder="0.00"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Discount -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">Discount %</label>
                                            <input type="number" step="0.01" class="form-control" placeholder="0">
                                        </div>

                                        <!-- VAT -->
                                        <div class="col-md-2 mb-3">
                                            <label class="form-label">VAT %</label>
                                            <input type="number" step="0.01" class="form-control" placeholder="0">
                                        </div>

                                        <!-- Total Amount -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label">Total Amount</label>
                                            <input type="number" step="0.01" class="form-control" placeholder="0.00"
                                                readonly>
                                        </div>
                                    </div>

                                    <!-- Add Button -->
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary">Add Item</button>
                                        </div>
                                    </div>

                                    <!-- Item List -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Item List</label>
                                            <table class="table table-bordered table-sm">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item ID</th>
                                                        <th>Description</th>
                                                        <th>HS Code</th>
                                                        <th>Owner</th>
                                                        <th>Origin</th>
                                                        <th>Container No</th>
                                                        <th>BO</th>
                                                        <th>Qty</th>
                                                        <th>Unit Price</th>
                                                        <th>UOM</th>
                                                        <th>Amount</th>
                                                        <th>Discount %</th>
                                                        <th>VAT%</th>
                                                        <th>Total Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Example Row -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>I001</td>
                                                        <td>Electronic Parts</td>
                                                        <td>8542</td>
                                                        <td>ABC Ltd.</td>
                                                        <td>Japan</td>
                                                        <td>CNT12345</td>
                                                        <td>BO-789</td>
                                                        <td>100</td>
                                                        <td>5.00</td>
                                                        <td>PCS</td>
                                                        <td>500.00</td>
                                                        <td>10%</td>
                                                        <td>5%</td>
                                                        <td>472.50</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning">Edit</button>
                                                            <button class="btn btn-sm btn-danger">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <a href="{{ url('shipments') }}" class="btn btn-success col-md-3">Post now</a>
            </div>
        </div>

        <div class="modal fade" id="myModalAddUser">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Sender</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="clients.html">
                        <div class="modal-body pb-0 ">
                            <form id="add_user_from_modal_shipments" name="add_user_from_modal_shipments">
                                <input type="hidden" id="type_user" name="type_user">

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="fname" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="fname" id="fname"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lname" id="lname"
                                            placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone_custom" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" name="phone_custom" id="phone_custom"
                                            placeholder="01812-345678">
                                        <div id="error-msg-sender" class="text-danger mt-1"></div>
                                    </div>
                                </div>

                                <!-- Switch -->
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="register_customer_to_user"
                                        name="register_customer_to_user">
                                    <label class="form-check-label" for="register_customer_to_user">
                                        Register a user account for this client
                                    </label>
                                </div>

                                <!-- Username & Password Fields (Initially Hidden) -->
                                <div class="row mb-3 d-none" id="show_hide_user_inputs">
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            placeholder="Username">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" autocomplete="on">
                                    </div>
                                </div>

                                <!-- Script to Toggle -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const switchInput = document.getElementById('register_customer_to_user');
                                        const userFields = document.getElementById('show_hide_user_inputs');

                                        switchInput.addEventListener('change', function() {
                                            userFields.classList.toggle('d-none', !this.checked);
                                        });
                                    });
                                </script>

                                <hr>
                                <h5>Address</h5>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="country_modal_user" class="form-label">Country</label>
                                        <select class="form-select" name="country_modal_user" id="country_modal_user">
                                            <option selected disabled>Search Country</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="state_modal_user" class="form-label">State</label>
                                        <select class="form-select" name="state_modal_user" id="state_modal_user"
                                            disabled>
                                            <option selected disabled>Search State</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="city_modal_user" class="form-label">City</label>
                                        <select class="form-select" name="city_modal_user" id="city_modal_user" disabled>
                                            <option selected disabled>Search City</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label for="postal_modal_user" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" name="postal_modal_user"
                                            id="postal_modal_user" placeholder="Zip Code">
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label for="address_modal_user" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address_modal_user"
                                            id="address_modal_user" placeholder="Address">
                                    </div>
                                </div>

                                <input type="hidden" name="total_address" id="total_address" value="1">
                                <input type="hidden" name="phone" id="phone">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-light border me-2"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
