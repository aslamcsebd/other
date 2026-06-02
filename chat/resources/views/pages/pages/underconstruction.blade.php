
@extends('layouts.custom-master')

@section('styles')



@endsection

@section('content')
	
        <div class="container-fluid custom-page">
            <div class="row bg-white">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
                    <div class="row w-100 mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
                            <img src="{{asset('build/assets/images/media/pngs/8.png')}}"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="main-card-signin construction text-center border-0 mx-auto">
                                    <div class="p-4 w-100 mx-auto">
                                        <div>
                                            <h2 class="fs-30">Under Maintenance</h2>
                                            <p class="fs-12 text-muted">Our website is currently undergoing scheduled maintenance. We Should be back shortly. Thank you for your patience!</p>
                                            <div class="row mt-4 gy-xxl-0 gy-3 mb-5 justify-content-center">
                                                <div  id="timer" class="d-flex justify-content-center flex-wrap">
                                                </div>
                                            </div>
                                            <div class="input-group mt-5 text-center sub-input mt-1 ml-auto mr-auto mt-3">
                                                <input type="text" class="form-control input-lg " placeholder="Enter your Email">
                                                <button type="button" class="btn btn-danger-gradient btn-lg">
                                                    Subscribe
                                                </button>
                                            </div>
                                            <div class="mt-4 d-flex mx-auto text-center justify-content-center">
                                                <div class="btn-list">
                                                    <button class="btn btn-icon rounded-pill text-primary" type="button">
                                                        <span class="btn-inner--icon m-0"> <i class="bx bxl-facebook"></i> </span>
                                                    </button>
                                                    <button class="btn btn-icon rounded-pill text-info" type="button">
                                                        <span class="btn-inner--icon m-0"> <i class="ri-twitter-x-fill fs-14"></i> </span>
                                                    </button>
                                                    <button class="btn btn-icon rounded-pill text-dark" type="button">
                                                        <span class="btn-inner--icon m-0"> <i class="bx bxl-github"></i> </span>
                                                    </button>
                                                    <button class="btn btn-icon rounded-pill text-pink" type="button">
                                                        <span class="btn-inner--icon m-0"> <i class="bx bxl-instagram"></i> </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Internal Under Maintenance JS -->
        <script src="{{asset('build/assets/under-maintenance.js')}}"></script>
        
@endsection
