
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Widget Notification</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Widget Notification</li>
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
                        <div class="col-lg-6 col-md-12 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border border-success mb-4">
                                <div class="card-body text-success text-center">
                                    <div class="success-widget">
                                        <h4 class="text-success">Success!</h4>
                                        <p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and
                                            will try our best to respond to your inquiry.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-6 col-md-12 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border border-danger mb-4">
                                <div class="card-body text-danger text-center">
                                    <div class="danger-widget">
                                        <h4 class="text-danger">Danger!</h4>
                                        <p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and
                                            will try our best to respond to your inquiry.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border border-warning mb-4">
                                <div class="card-body text-warning text-center">
                                    <div class="warning-widget">
                                        <h4 class="text-warning">Warning!</h4>
                                        <p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and
                                            will try our best to respond to your inquiry.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>

                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4">
                                <div class="card-body text-danger">
                                    <div class="main-error-wrapper">
                                        <i class="si si-close mb-4 fs-50"></i>
                                        <h5 class="mb-4 text-danger">Data Not Found.</h5>
                                        <a class="btn btn-outline-danger btn-sm" href="javascript:void(0);">Click to view details</a>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4">
                                <div class="card-body text-success">
                                    <div class="main-error-wrapper">
                                        <i class="si si-check mb-4 fs-50"></i>
                                        <h5 class="mb-4 text-success">Submitted Successfully</h5>
                                        <a class="btn btn-outline-success btn-sm" href="javascript:void(0);">Click to view details</a>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4">
                                <div class="card-body text-info">
                                    <div class="main-error-wrapper">
                                        <i class="si si-info mb-4 fs-50"></i>
                                        <h5 class="mb-4 text-info">Info Alert</h5>
                                        <a class="btn btn-outline-info btn-sm" href="javascript:void(0);">Click to view details</a>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4 bg-danger">
                                <div class="card-body text-fixed-white">
                                    <div class="main-error-wrapper">
                                        <i class="si si-close mb-4 fs-50"></i>
                                        <h5 class="mb-0 text-fixed-white">Data Not Found.</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4 bg-success">
                                <div class="card-body text-fixed-white">
                                    <div class="main-error-wrapper">
                                        <i class="si si-check mb-4 fs-50"></i>
                                        <h5 class="mb-0 text-fixed-white">Submitted Successfully</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4 bg-info">
                                <div class="card-body text-fixed-white">
                                    <div class="main-error-wrapper">
                                        <i class="si si-info mb-4 fs-50"></i>
                                        <h5 class="mb-0 text-fixed-white">Info Alert</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4 bg-danger-transparent alert p-0 alert-danger">
                                <div class="card-header d-flex align-items-center text-danger fw-bold">
                                    <i class="me-2 far fa-times-circle"></i> Error Data
                                    <button type="button" class="btn-close ms-auto p-0" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                                </div>
                                <div class="card-body text-danger">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4 bg-success-transparent alert p-0 alert-success">
                                <div class="card-header d-flex align-items-center text-success fw-bold">
                                    <i class="me-2 far fa-check-circle"></i> Success Data
                                    <button type="button" class="btn-close ms-auto p-0" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                                </div>
                                <div class="card-body text-success">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-4">
                            <!--Page Widget Error-->
                            <div class="card border-0 mb-4 bg-info-transparent alert p-0 alert-info">
                                <div class="card-header d-flex align-items-center text-info fw-bold">
                                    <i class="me-2 far fa-question-circle"></i> Info Data
                                    <button type="button" class="btn-close ms-auto p-0" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                                </div>
                                <div class="card-body text-info">
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super
                                    important.
                                </div>
                            </div>
                            <!--Page Widget Error-->
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <div class="card mb-4 text-center">
                                <div class="card-body h-100">
                                    <img src="{{asset('build/assets/images/svgicons/no-data.svg')}}" alt="" class="w-35">
                                    <h5 class="mt-3 tx-18">Items Not Found</h5>
                                    <a href="javascript:void(0);" class="text-muted">Check The Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xl-4">
                            <div class="card mb-4 text-center">
                                <div class="card-body h-100">
                                    <img src="{{asset('build/assets/images/svgicons/note_taking.svg')}}" alt="" class="w-35">
                                    <h5 class="mt-3 tx-18">Its Empty In Here</h5>
                                    <a href="javascript:void(0);" class="text-muted">Check The Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-4">
                            <div class="card mb-4 text-center">
                                <div class="card-body h-100">
                                    <img src="{{asset('build/assets/images/svgicons/imac.svg')}}" alt="" class="w-39">
                                    <h5 class="mt-3 tx-18">No Site Selected</h5>
                                    <a href="javascript:void(0);" class="text-muted">Check The Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

@endsection

@section('scripts')
	


@endsection
