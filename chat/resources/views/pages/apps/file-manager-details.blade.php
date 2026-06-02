
@extends('layouts.master')

@section('styles')

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">File Manager Details</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Manager Details</li>
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
					<div class="row row-sm">
                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body px-4 pt-4">
                                    <a href="{{url('blog-details')}}"><img src="{{asset('build/assets/images/media/media-85.jpg')}}" alt="img"
                                            class="cover-image rounded-3 w-100"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class=" card-body ">
                                    <h5 class="mb-3 fs-16">File details :</h5>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="table-responsive">
                                                <table class="table mb-0 border-top table-bordered text-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">File-name</th>
                                                            <td>image.jpg</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">File-size</th>
                                                            <td>12.45mb</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">uploaded-date</th>
                                                            <td>01-12-2020</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">uploaded-by</th>
                                                            <td>prityy abodh</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">image-width</th>
                                                            <td>1000</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">image-height</th>
                                                            <td>600</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">File-formate</th>
                                                            <td>jpg</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">File-location</th>
                                                            <td>storage/photos/image.jpg</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="swiper pagination">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-78.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-84.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">222.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-82.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">223.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-83.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">224.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-81.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">225.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-80.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">226.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-77.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">227.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-84.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">228.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden mb-0 shadow-none file-details-card">
                                                    <a href="{{url('file-manager-details')}}"><img src="{{asset('build/assets/images/media/media-79.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0 fs-14">229.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0 fs-14">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h5 class="mb-3">Recent Files</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-84.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-84.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12"> 
                                            <a href="{{asset('build/assets/images/media/media-83.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-83.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-82.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-82.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-77.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-77.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-81.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-81.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-80.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-80.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-79.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-79.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <a href="{{asset('build/assets/images/media/media-78.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-78.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
	
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')

        <!-- Custom JS -->
        @vite('resources/assets/js/file-details.js')

@endsection
