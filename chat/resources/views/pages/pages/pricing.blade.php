
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Pricing</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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
                    <h4 class="card-title mt-4 mb-3">Column pricing table</h4>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center pricing">
                                    <div class="card-category">Basic</div>
                                    <div class="display-4 my-4">$10</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>2 </strong> Free Domain Name</li>
                                        <li><strong>2</strong> One-Click Apps</li>
                                        <li><strong>1</strong> Databases</li>
                                        <li><strong>Money</strong> Back Guarantee</li>
                                        <li><strong>24/7</strong> Support</li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-block w-100">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center pricing ">
                                    <div class="card-category">Premium</div>
                                    <div class="display-4 my-4">$49</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>3 </strong> Free Domain Name</li>
                                        <li><strong>5</strong> One-Click Apps</li>
                                        <li><strong>3</strong> Databases</li>
                                        <li><strong>Money</strong> Back Guarantee</li>
                                        <li><strong>24/7</strong> Support</li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="javascript:void(0);" class="btn btn-pink btn-block w-100">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center pricing">
                                    <div class="card-category">Enterprise</div>
                                    <div class="display-4 my-4">$99</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>10 </strong> Free Domain Name</li>
                                        <li><strong>10</strong> One-Click Apps</li>
                                        <li><strong>8</strong> Databases</li>
                                        <li><strong>Money</strong> Back Guarantee</li>
                                        <li><strong>24/7</strong> Support</li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="javascript:void(0);" class="btn btn-warning btn-block w-100">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center  pricing">
                                    <div class="card-category">Unlimited</div>
                                    <div class="display-4 my-4">$139</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>12 </strong> Free Domain Name</li>
                                        <li><strong>10</strong> One-Click Apps</li>
                                        <li><strong>6</strong> Databases</li>
                                        <li><strong>Money</strong> Back Guarantee</li>
                                        <li><strong>24/7</strong> Support</li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="javascript:void(0);" class="btn btn-danger btn-block w-100">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                    </div>
                    <!-- row closed -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card pricing-card">
                                <div class="card-body text-center">
                                    <div class="card-category">Free</div>
                                    <div class="display-5 my-4">$0</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>4</strong> Ads</li>
                                        <li><i class="fe fe-check text-success me-2"></i> 30 days</li>
                                        <li><i class="fe fe-x text-danger me-2"></i> Private Messages</li>
                                        <li><i class="fe fe-x text-danger me-2"></i> Urgent Ads</li>
                                    </ul>
                                    <div class="text-center mt-6">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-block w-100">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-end -->
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card pricing-card">
                                <div class="card-body text-center">
                                    <div class="card-category">Unlimited</div>
                                    <div class="display-5 my-4">$150</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>Unlimited</strong> Ads</li>
                                        <li><i class="fe fe-check text-success me-2"></i> 365 Days</li>
                                        <li><i class="fe fe-check text-success me-2"></i> Private Messages</li>
                                        <li><i class="fe fe-check text-success me-2"></i> Urgent Ads</li>
                                    </ul>
                                    <div class="text-center mt-6">
                                        <a href="javascript:void(0);" class="btn btn-warning btn-block w-100">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-end -->
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card pricing-card ">
                                <div class="card-status bg-success"></div>
                                <div class="card-body text-center">
                                    <div class="card-category">Premium</div>
                                    <div class="display-5 my-4">$65</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>50</strong> Ads</li>
                                        <li><i class="fe fe-check text-success me-2"></i> 60 Days</li>
                                        <li><i class="fe fe-x text-danger me-2"></i> Private Messages</li>
                                        <li><i class="fe fe-x text-danger me-2"></i> Urgent Ads</li>
                                    </ul>
                                    <div class="text-center mt-6">
                                        <a href="javascript:void(0);" class="btn btn-success btn-block w-100">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-end -->
                        <div class="col-sm-6 col-lg-6 col-xl-3">
                            <div class="card pricing-card ">
                                <div class="card-body text-center">
                                    <div class="card-category">Enterprise</div>
                                    <div class="display-5 my-4">$100</div>
                                    <ul class="list-unstyled leading-loose">
                                        <li><strong>100</strong> Ads</li>
                                        <li><i class="fe fe-check text-success me-2"></i> 180 days</li>
                                        <li><i class="fe fe-check text-success me-2"></i> Private Messages</li>
                                        <li><i class="fe fe-x text-danger me-2"></i> Urgent Ads</li>
                                    </ul>
                                    <div class="text-center mt-6">
                                        <a href="javascript:void(0);" class="btn btn-danger btn-block w-100">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-end -->
                    </div>
                    <!--End::row-2 -->

                    <!-- Start::row-3 -->
                    <h4 class="card-title mt-4 mb-3">Pricing cards 4 columns</h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="panel price panel-color">
                                <div class="panel-heading bg-primary p-0 text-center">
                                    <h4 class="text-fixed-white price-heading">Personal</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead py-3"><strong>$15 /</strong> month</p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
                                    <li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
                                    <li class="list-group-item"><strong> 1 </strong> Databases</li>
                                    <li class="list-group-item"><strong> Money </strong> Back Guarantee</li>
                                    <li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
                                </ul>
                                <div class="panel-footer text-center">
                                    <a class="btn btn-primary" href="javascript:void(0);">Purchase Now!</a>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                        <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="panel price panel-color">
                                <div class="panel-heading bg-warning  p-0 text-center">
                                    <h4 class="text-fixed-white price-heading">Team</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead py-3"><strong>$25 /</strong> month</p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
                                    <li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
                                    <li class="list-group-item"><strong> 2 </strong> Databases</li>
                                    <li class="list-group-item"><strong> Money </strong> Back Guarantee</li>
                                    <li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
                                </ul>
                                <div class="panel-footer text-center">
                                    <a class="btn btn-warning" href="javascript:void(0);">Purchase Now!</a>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                        <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="panel price panel-color">
                                <div class="panel-heading bg-success p-0 text-center">
                                    <h4 class="text-fixed-white price-heading">Businesss</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead py-3"><strong>$99 /</strong> month</p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
                                    <li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
                                    <li class="list-group-item"><strong> 2 </strong> Databases</li>
                                    <li class="list-group-item"><strong> Money </strong> Back Guarantee</li>
                                    <li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
                                </ul>
                                <div class="panel-footer text-center">
                                    <a class="btn btn-success" href="javascript:void(0);">Purchase Now!</a>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                        <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="panel price panel-color">
                                <div class="panel-heading bg-danger p-0 text-center">
                                    <h4 class="text-fixed-white price-heading">Corporate</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead py-3"><strong>$35 /</strong> month</p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
                                    <li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
                                    <li class="list-group-item"><strong> 2 </strong> Databases</li>
                                    <li class="list-group-item"><strong> Money </strong> Back Guarantee</li>
                                    <li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
                                </ul>
                                <div class="panel-footer text-center">
                                    <a class="btn btn-danger" href="javascript:void(0);">Purchase Now!</a>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                    </div>
                    <!--End::row-3 -->

@endsection

@section('scripts')
	


@endsection
