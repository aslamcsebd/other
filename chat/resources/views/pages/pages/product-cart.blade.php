
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">cart</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cart</li>
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
                        <div class="col-lg-12 col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Shopping Cart-->
                                    <div class="product-details table-responsive text-nowrap">
                                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-start">Product</th>
                                                    <th>Quantity</th>
                                                    <th>Prize</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="card-aside-img">
                                                                <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="img" class="h-60 w-60">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc mt-0">
                                                                    <h6 class="fw-medium mt-0 text-uppercase fs-14">Ceramic Pot</h6>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Size: </dt>
                                                                    <dd class="mb-0">XXL</dd>
                                                                    </dl>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Color: </dt>
                                                                    <dd class="mb-0">purple color</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <td class="text-center product-quantity-container">
                                                    <div class="handle-counter input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center" aria-label="quantity" id="product-quantity1" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                    </td>
                                                    <td class="text-center text-lg text-medium fw-bold  fs-15">$80.00</td>
                                                    <td class="text-center"><span class="badge bg-danger p-1">Out of stock</span></td>
                                                    <td class="text-center">
                                                    <a class="btn btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="Remove item"><i class="fe fe-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="card-aside-img">
                                                                <img src="{{asset('build/assets/images/ecommerce/09.jpg')}}" alt="img" class="h-60 w-60">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc mt-0">
                                                                    <h6 class="fw-medium mt-0 text-uppercase fs-14">Digital Camera</h6>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Size: </dt>
                                                                    <dd class="mb-0">XL</dd>
                                                                    </dl>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Color: </dt>
                                                                    <dd class="mb-0">Red color</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center product-quantity-container">
                                                        <div class="handle-counter input-group rounded flex-nowrap">
                                                            <button class="btn btn-icon btn-light input-group-text product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                            <input type="text" class="form-control form-control-sm text-center" aria-label="quantity" id="product-quantity2" value="2">
                                                            <button class="btn btn-icon btn-light input-group-text product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="text-center text-lg text-medium fw-bold  fs-15">$50.30</td>
                                                    <td class="text-center"> <span class="badge bg-success p-1">In stock</span></td>
                                                    <td class="text-center">
                                                        <a class="btn  btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="Remove item"><i class="fe fe-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="card-aside-img">
                                                                <img src="{{asset('build/assets/images/ecommerce/08.jpg')}}" alt="img" class="h-60 w-60">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc mt-0">
                                                                    <h6 class="fw-medium mt-0 text-uppercase fs-14">Wrist Watch</h6>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Size: </dt>
                                                                    <dd class="mb-0">M</dd>
                                                                    </dl>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Color: </dt>
                                                                    <dd class="mb-0">LightPink color</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center product-quantity-container">
                                                        <div class="handle-counter input-group rounded flex-nowrap">
                                                            <button class="btn btn-icon btn-light input-group-text product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                            <input type="text" class="form-control form-control-sm text-center" aria-label="quantity" id="product-quantity3" value="2">
                                                            <button class="btn btn-icon btn-light input-group-text product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="text-center text-lg text-medium fw-bold  fs-15">$79.90</td>
                                                    <td class="text-center"><span class="badge bg-danger p-1">Out of stock</span></td>
                                                    <td class="text-center">
                                                        <a class="btn  btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="Remove item"><i class="fe fe-trash"></i></a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  class="">
                                                        <div class="media">
                                                            <div class="card-aside-img">
                                                                <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" alt="img" class="h-60 w-60">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc mt-0">
                                                                    <h6 class="fw-medium mt-0 text-uppercase fs-14">Wooden Chair</h6>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Size: </dt>
                                                                    <dd class="mb-0">11-12 inches</dd>
                                                                    </dl>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Color: </dt>
                                                                    <dd class="mb-0">Red color</dd>
                                                                    </dl>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center product-quantity-container">
                                                        <div class="handle-counter input-group rounded flex-nowrap">
                                                            <button class="btn btn-icon btn-light input-group-text product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                            <input type="text" class="form-control form-control-sm text-center" aria-label="quantity" id="product-quantity4" value="2">
                                                            <button class="btn btn-icon btn-light input-group-text product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="text-center text-lg text-medium fw-bold fs-15">$79.90</td>
                                                    <td class="text-center "> <span class="badge bg-success p-1 ">In stock</span></td>
                                                    <td class="text-center ">
                                                        <a class="btn  btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="Remove item"><i class="fe fe-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap gap-2">
                                        <div>
                                            <a class="btn btn-secondary" href="{{url('products')}}"><i class="fe fe-corner-up-left me-2"></i>Back to Shopping</a>
                                        </div>
                                        <div class="btn-list">
                                            <a class="btn btn-primary" href="{{url('product-cart')}}"><i class="fe fe-refresh-cw me-2"></i>Update Cart</a>
                                            <a class="btn btn-outline-primary" href="{{url('check-out')}}"><i class="fe fe-log-in me-2"></i>Checkout</a>
                                        </div>
                                    
                                </div>
                            </div>
                            </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Handle-counter js -->
        @vite('resources/assets/js/handlecounter.js')

@endsection
