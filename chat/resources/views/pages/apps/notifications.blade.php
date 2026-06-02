
@extends('layouts.master')

@section('styles')

        <!-- Notifications Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/awesome-notifications/style.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Notifications</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Notifications</li>
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
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-primary" id="basic">Basic Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Async Notification With Error Message</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-primary" id="async-error">Async Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Async Notification With Success Message</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-primary" id="async-success">Async Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">PopUp Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-primary" id="popup">Notification</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                        
                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Info Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn  btn-info" id="info">Info Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Success Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn  btn-success" id="success">Success Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Warning Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-warning" id="warning">Warning Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Error Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-danger" id="error">Error Notification</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Confirmation Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn  btn-secondary" id="confirm">Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Async Block With Error Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-primary" id="async">Notification</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Async Block With Success Notification</div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-primary" id="async-block">Notification</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

@endsection

@section('scripts')
	
        <!-- Rating JS -->
        <script src="{{asset('build/assets/libs/awesome-notifications/index.var.js')}}"></script>
        @vite('resources/assets/js/notifications.js')

@endsection
