
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Draggable Cards</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
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
                        <div class="col-xl-6" id="draggable-right">
                            <div class="card custom-card overlay-card">
                                <img src="{{asset('build/assets/images/media/media-74.jpg')}}" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text">
                                            Image Overlays Are Awesome!
                                        </div>
                                        <div class="card-text mb-2 d-none d-sm-block">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                    <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                </div>
                            </div>
                            <div class="card custom-card card-bg-success">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-semibold">Samantha sid</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card collapse-card">
                                <div class="card-header d-flex border-bottom-0 justify-content-between">
                                    <div class="card-title">
                                        Card With Collapse Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-18 collapse-open"></i>
                                        <i class="ri-arrow-up-s-line collapse-close fs-18"></i>
                                    </a>
                                </div>
                                <div class="collapse show border-top" id="collapseExample">
                                    <div class="card-body">
                                        <h6 class="card-text fw-semibold">Collapsible Card</h6>
                                        <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Close Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-remove">
                                        <i class="ri-close-line fs-18"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-semibold">Closed Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6" id="draggable-left">
                            <div class="card custom-card card-bg-primary">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <div class="card-body">
                                <blockquote class="blockquote mb-0 text-center">
                                    <h6 class="text-fixed-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                    <footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
                                </blockquote>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Fullscreen Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-fullscreen">
                                        <i class="ri-fullscreen-line"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-semibold">FullScreen Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div><div class="card overlay-card text-fixed-white">
                                <img src="{{asset('build/assets/images/media/media-71.jpg')}}" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-header text-fixed-white">
                                        <div class="card-title">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="card-body overflow-scroll text-fixed-white ">
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <span class="avatar avatar-md">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div>
                                            <p class="card-text mb-0 fs-14 fw-semibold">Atharva Simon.</p>
                                            <div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card border border-info">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <span class="avatar avatar-xl">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div>
                                            <p class="card-text text-info mb-1 fs-14 fw-semibold">Alicia Keys.</p>
                                            <div class="card-title fs-12 mb-1">Department Of Commerce</div>
                                            <div class="card-title text-muted fs-11 mb-0">24 Years, Female</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- Internal Dragula JS -->
        @vite('resources/assets/js/draggable-cards.js')

@endsection
