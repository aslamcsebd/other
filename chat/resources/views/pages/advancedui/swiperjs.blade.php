
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Swiper</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Swiper</li>
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
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Swiper
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-basic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-27.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Swiper With Navigation
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-navigation">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Swiper with Pagination
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper pagination">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Dynamic Pagination
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper pagination-dynamic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-21.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Pagination With Progress
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper pagination-progress">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Pagination Fraction
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper pagination-fraction">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Custom Paginatioin
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper custom-pagination">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Scrollbar Swiper
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper scrollbar-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Vertical Swiper
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper vertical swiper-vertical">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Mouse Wheel Control
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper vertical vertical-mouse-control">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Keyboard Control
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper keyboard-control">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Nested Swiper</div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-horizontal1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                        <div class="swiper-slide">
                                            <div class="swiper vertical swiper-vertical1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Effect Cube
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-effect-cube">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Effect Fade
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-fade">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Effect Flip
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-flip">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Effect Coverflow
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-overflow">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-59.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-78.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Thumbs Gallery
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-preview">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-3.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="swiper swiper-view">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-3.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

@endsection

@section('scripts')
	
        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Internal Swiper JS -->
        @vite('resources/assets/js/swiper.js')

@endsection
