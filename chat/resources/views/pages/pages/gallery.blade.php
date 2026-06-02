
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Gallery</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-69.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-69.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-77.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-77.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-71.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-71.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-84.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-84.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-59.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-59.jpg')}}" alt="image" >
                            </a>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')
        
@endsection
