
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Product Details</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body h-100">
                                    <div class="row ">
                                        <div class=" col-xl-5 col-lg-12 col-md-12">
                                            <div class="product-carousel  border br-5">
                                                <div id="Slider" class="carousel slide" data-bs-ride="false">
                                                    <div class="carousel-inner py-3">
                                                        <div class="carousel-item active"><img
                                                                src="{{asset('build/assets/images/ecommerce/13.png')}}" alt="img"
                                                                class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="carousel-item"> <img
                                                                src="{{asset('build/assets/images/ecommerce/14.png')}}" alt="img"
                                                                class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="carousel-item"> <img
                                                                src="{{asset('build/assets/images/ecommerce/15.png')}}" alt="img"
                                                                class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="carousel-item"> <img
                                                                src="{{asset('build/assets/images/ecommerce/16.png')}}" alt="img"
                                                                class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="carousel-item"> <img
                                                                src="{{asset('build/assets/images/ecommerce/17.png')}}" alt="img"
                                                                class="img-fluid mx-auto d-block">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix carousel-slider">
                                                <div id="thumbcarousel" class="carousel slide mt-2" data-bs-interval="t">
                                                    <div class="carousel-inner">
                                                        <ul class="carousel-item active d-flex justify-content-center list-unstyled nav mt-2">
                                                            <li data-bs-target="#Slider" data-bs-slide-to="0"
                                                                class="thumb wd-18 active my-2"><img
                                                                    src="{{asset('build/assets/images/ecommerce/13.png')}}"
                                                                    alt="img"></li>
                                                            <li data-bs-target="#Slider" data-bs-slide-to="1"
                                                                class="thumb wd-18 my-2"><img
                                                                    src="{{asset('build/assets/images/ecommerce/14.png')}}"
                                                                    alt="img"></li>
                                                            <li data-bs-target="#Slider" data-bs-slide-to="2"
                                                                class="thumb wd-18 my-2"><img
                                                                    src="{{asset('build/assets/images/ecommerce/15.png')}}"
                                                                    alt="img"></li>
                                                            <li data-bs-target="#Slider" data-bs-slide-to="3"
                                                                class="thumb wd-18 my-2"><img
                                                                    src="{{asset('build/assets/images/ecommerce/16.png')}}"
                                                                    alt="img"></li>
                                                            <li data-bs-target="#Slider" data-bs-slide-to="4"
                                                                class="thumb wd-18 my-2"><img
                                                                    src="{{asset('build/assets/images/ecommerce/17.png')}}"
                                                                    alt="img"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                            <h5 class="product-title mb-1">BLUE TSHIRT</h5>
                                            <p class="text-muted fs-13 mb-1">Men red & Grey Checked Casual Shirt</p>
                                            <div class="rating mb-1">
                                                <div class="stars">
                                                    <span class="bx bxs-star fs-17 align-center checked"></span>
                                                    <span class="bx bxs-star fs-17 align-center checked"></span>
                                                    <span class="bx bxs-star fs-17 align-center checked"></span>
                                                    <span class="bx bxs-star fs-17 align-center text-muted"></span>
                                                    <span class="bx bxs-star fs-17 align-center text-muted"></span>
                                                </div>
                                                <span class="review-no">41 reviews</span>
                                            </div>
                                            <h6 class="price fs-14">current price: <span class="h4 ms-2 d-inline-block">$180</span></h6>
                                            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu
                                                laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim
                                                sociosqu delectus posuere.</p>
                                            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87
                                                    votes)</strong></p>
                                            <div class="sizes d-flex">sizes:
                                                <span class="size d-flex" data-bs-toggle="tooltip" title="small"><label
                                                        class="rdiobox mb-0"><input  class="form-check-input" checked="" name="rdio" type="radio">
                                                        <span class="fw-bold">s</span></label></span>
                                                <span class="size d-flex" data-bs-toggle="tooltip" title="medium"><label
                                                        class="rdiobox mb-0"><input   class="form-check-input" name="rdio" type="radio">
                                                        <span>m</span></label></span>
                                                <span class="size d-flex" data-bs-toggle="tooltip" title="large"><label
                                                        class="rdiobox mb-0"><input  class="form-check-input" name="rdio" type="radio">
                                                        <span>l</span></label></span>
                                                <span class="size d-flex" data-bs-toggle="tooltip"
                                                    title="extra-large"><label class="rdiobox mb-0"><input  class="form-check-input" name="rdio"
                                                            type="radio"> <span>xl</span></label></span>
                                            </div>
                                            <div class="d-flex  mt-2">
                                                <div class="mt-2 product-title">Quantity:</div>
                                                <div class="d-flex ms-2">
                                                    <ul class=" mb-0 qunatity-list list-unstyled">
                                                        <li>
                                                            <div class="form-group">
                                                                <select name="quantity" id="select-countries17"
                                                                    class="form-control nice-select wd-100" data-trigger>
                                                                    <option value="1" selected="">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="colors d-flex mt-3 align-items-center">
                                                <span class="mt-2">colors:</span>
                                                <div class="d-flex ms-4">
                                                    <div class="me-2">
                                                        <label class="colorinput">
                                                            <input name="color" type="radio" value="azure"
                                                                class="colorinput-input" checked="">
                                                            <span class="colorinput-color bg-primary"></span>
                                                        </label>
                                                    </div>
                                                    <div class="me-2">
                                                        <label class="colorinput">
                                                            <input name="color" type="radio" value="indigo"
                                                                class="colorinput-input">
                                                            <span class="colorinput-color bg-secondary"></span>
                                                        </label>
                                                    </div>
                                                    <div class="me-2">
                                                        <label class="colorinput">
                                                            <input name="color" type="radio" value="purple"
                                                                class="colorinput-input">
                                                            <span class="colorinput-color bg-danger"></span>
                                                        </label>
                                                    </div>
                                                    <div class="me-2">
                                                        <label class="colorinput">
                                                            <input name="color" type="radio" value="pink"
                                                                class="colorinput-input">
                                                            <span class="colorinput-color bg-pink"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action mt-4">
                                                <a href="{{url('wish-list')}}"  class="add-to-cart btn btn-danger my-1 me-1">ADD TO
                                                WISHLIST</a>
                                                <a href="{{url('product-cart')}}"  class="add-to-cart btn btn-success">ADD TO
                                                CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row related-products-ltr-l">
                        <div class="col-xl-3 col-md-6">
                            <div class="card item-card">
                                <div class="card-body pb-0 h-100">
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="img" class="img-fluid w-100 rounded-3">
                                    </div>
                                    <div class="card-body relative product-des">
                                        <div class="cardtitle">
                                            <span>Items</span>
                                            <a>Ceramic Pot</a>
                                        </div>
                                        <div class="cardprice">
                                            <span class="type--strikethrough">$999</span>
                                            <span>$799</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center border-top py-3 px-2 ">
                                    <a href="{{url('products')}}" class="btn btn-primary my-1"><i class="fe fe-eye me-1"></i> View More</a>
                                    <a href="{{url('product-cart')}}" class="btn btn-success"><i class="fe fe-shopping-cart me-1"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card item-card">
                                <div class="card-body pb-0 h-100">
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/ecommerce/04.jpg')}}" alt="img" class="img-fluid w-100 rounded-3">
                                    </div>
                                    <div class="card-body relative product-des">
                                        <div class="cardtitle">
                                            <span>Electronics</span>
                                            <a>Head Phones</a>
                                        </div>
                                        <div class="cardprice">
                                            <span class="type--strikethrough">$999</span>
                                            <span>$799</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center border-top py-3 px-2 ">
                                    <a href="{{url('products')}}" class="btn btn-primary my-1"><i class="fe fe-eye me-1"></i> View More</a>
                                    <a href="{{url('product-cart')}}" class="btn btn-success"><i class="fe fe-shopping-cart me-1"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card item-card">
                                <div class="card-body pb-0 h-100">
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/ecommerce/07.jpg')}}" alt="img" class="img-fluid w-100 rounded-3">
                                    </div>
                                    <div class="card-body relative product-des">
                                        <div class="cardtitle">
                                            <span>Gadgets</span>
                                            <a>Laptop</a>
                                        </div>
                                        <div class="cardprice">
                                            <span class="type--strikethrough">$999</span>
                                            <span>$799</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center border-top py-3 px-2 ">
                                    <a href="{{url('products')}}" class="btn btn-primary my-1"><i class="fe fe-eye me-1"></i> View More</a>
                                    <a href="{{url('product-cart')}}" class="btn btn-success"><i class="fe fe-shopping-cart me-1"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card item-card">
                                <div class="card-body pb-0 h-100">
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/ecommerce/08.jpg')}}" alt="img" class="img-fluid w-100 rounded-3">
                                    </div>
                                    <div class="card-body relative product-des">
                                        <div class="cardtitle">
                                            <span>Accessories</span>
                                            <a>Wrist Watch</a>
                                        </div>
                                        <div class="cardprice">
                                            <span class="type--strikethrough">$999</span>
                                            <span>$799</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center border-top py-3 px-2 ">
                                    <a href="{{url('products')}}" class="btn btn-primary my-1"><i class="fe fe-eye me-1"></i> View More</a>
                                    <a href="{{url('product-cart')}}" class="btn btn-success"><i class="fe fe-shopping-cart me-1"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="feature2">
                                        <i
                                            class="mdi mdi-airplane-takeoff bg-purple ht-50 wd-50 text-center rounded-circle text-fixed-white"></i>
                                    </div>
                                    <h5 class="mb-2 fs-16">Free Shipping</h5>
                                    <span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus
                                        orioneu.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="feature2">
                                        <i class="mdi mdi-headset bg-pink  ht-50 wd-50 text-center rounded-circle text-fixed-white"></i>
                                    </div>
                                    <h5 class="mb-2 fs-16">Customer Support</h5>
                                    <span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus
                                        orioneu.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="feature2">
                                        <i class="mdi mdi-refresh bg-teal ht-50 wd-50 text-center rounded-circle text-fixed-white"></i>
                                    </div>
                                    <div class="icon-return"></div>
                                    <h5 class="mb-2  fs-16">30 days money back</h5>
                                    <span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus
                                        orioneu.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-3 -->

@endsection

@section('scripts')
	


@endsection
