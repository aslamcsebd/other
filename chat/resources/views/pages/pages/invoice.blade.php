
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Invoice</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                                </ol>
                            </nav>
                        </div>
        
                        <div class="d-flex my-xl-auto right-content align-items-center">
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
                            </div>
                            <div class="pe-1 mb-xl-0">
                                <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
                            </div>
                            <div class="mb-xl-0">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
                                        14 Aug 2019
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate">
                                    <li><a class="dropdown-item" href="javascript:void(0);">2015</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">2016</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">2017</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">2018</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class=" main-content-body-invoice">
                                <div class="card card-invoice">
                                    <div class="card-body">
                                        <div class="invoice-header">
                                            <h2 class="invoice-title">Invoice</h2>
                                            <div class="billed-from">
                                                <h6>BootstrapDash, Inc.</h6>
                                                <p>201 Something St., Something Town, YT 242, Country 6546<br>
                                                Tel No: 324 445-4544<br>
                                                Email: youremail@companyname.com</p>
                                            </div><!-- billed-from -->
                                        </div><!-- invoice-header -->
                                        <div class="row mt-4">
                                            <div class="col-md">
                                                <label class="text-gray-6">Billed To</label>
                                                <div class="billed-to">
                                                    <h6 class="fs-14 fw-semibold">Juan Dela Cruz</h6>
                                                    <p>4033 Patterson Road, Staten Island, NY 10301<br>
                                                    Tel No: 324 445-4544<br>
                                                    Email: youremail@companyname.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <label class="text-gray-6">Invoice Information</label>
                                                <p class="invoice-info-row"><span>Invoice No</span> <span>GHT-673-00</span></p>
                                                <p class="invoice-info-row"><span>Project ID</span> <span>32334300</span></p>
                                                <p class="invoice-info-row"><span>Issue Date:</span> <span>November 21, 2017</span></p>
                                                <p class="invoice-info-row"><span>Due Date:</span> <span>November 30, 2017</span></p>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-invoice border text-md-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="w-20">Type</th>
                                                        <th class="w-40">Description</th>
                                                        <th class="text-center">QNTY</th>
                                                        <th>Unit Price</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Website Design</td>
                                                        <td class="fs-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>
                                                        <td class="text-center">2</td>
                                                        <td>$150.00</td>
                                                        <td>$300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Firefox Plugin</td>
                                                        <td class="fs-12">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td>
                                                        <td class="text-center">1</td>
                                                        <td>$1,200.00</td>
                                                        <td>$1,200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>iPhone App</td>
                                                        <td class="fs-12">Et harum quidem rerum facilis est et expedita distinctio</td>
                                                        <td class="text-center">2</td>
                                                        <td>$850.00</td>
                                                        <td>$1,700.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Android App</td>
                                                        <td class="fs-12">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
                                                        <td class="text-center">3</td>
                                                        <td>$850.00</td>
                                                        <td>$2,550.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-top" colspan="2" rowspan="4">
                                                            <div class="invoice-notes">
                                                                <label class="main-content-label fs-13">Notes</label>
                                                                <p class="fw-normal fs-13">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                            </div><!-- invoice-notes -->
                                                        </td>
                                                        <td>Sub-Total</td>
                                                        <td colspan="2">$5,750.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax (5%)</td>
                                                        <td colspan="2">$287.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discount</td>
                                                        <td colspan="2">-$50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" text-uppercase tx-inverse">Total Due</td>
                                                        <td colspan="2">
                                                            <h4 class="text-primary">$5,987.50</h4>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <a class="btn btn-purple float-end mt-3 ms-2" href="">
                                            <i class="mdi mdi-currency-usd me-1"></i>Pay Now
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger float-end mt-3 ms-2"  onclick="javascript:window.print();">
                                            <i class="mdi mdi-printer me-1"></i>Print
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-success float-end mt-3">
                                            <i class="mdi mdi-telegram me-1"></i>Send Invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	


@endsection
