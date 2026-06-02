
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Timeline</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Timeline</li>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Vertical Timeline</h6>
                                </div>
                                <div class="card-body">
                                    <div class="vtimeline">
                                        <div class="timeline-wrapper timeline-wrapper-primary">
                                            <div class="timeline-badge success bg-transparent"><img class="timeline-image avatar avatar-rounded avatar-lg" alt="img"
                                                    src="{{asset('build/assets/images/faces/3.jpg')}}"> </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Art Ramadani posted a status update</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not.
                                                        Add and offered prepare how cordial two promise. Greatly who affixed
                                                        suppose but enquire compact prepare all put. Added forth chief trees
                                                        but rooms think may.</p>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted me-1"></i>
                                                    <span>19</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>19
                                                        Oct 2019</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
                                            <div class="timeline-badge"><i class="las la-business-time"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Job Meeting</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>You have a meeting at Laborator Office Today.</p>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted me-1"></i>
                                                    <span>25</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>10th
                                                        Oct 2019</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-wrapper timeline-wrapper-info">
                                            <div class="timeline-badge"><i class="las la-user-circle"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Arlind Nushi checked in at New York</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Alpha 5 has arrived just over a month after Alpha 4 with some major
                                                        feature improvements and a boat load of bug fixes.</p>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted me-1"></i>
                                                    <span>19</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>5th
                                                        Oct 2019</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
                                            <div class="timeline-badge success bg-transparent"><img class="timeline-image avatar avatar-rounded avatar-lg" alt="img"
                                                    src="{{asset('build/assets/images/faces/12.jpg')}}"> </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Eroll Maxhuni uploaded 4 new photos to album
                                                        Summer Trip</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Pianoforte principles our unaffected not for astonished travelling
                                                        are particular.</p>
                                                    <img src="{{asset('build/assets/images/media/media-76.jpg')}}" class="mb-3" alt="img">
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted me-1"></i>
                                                    <span>19</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>27th
                                                        Sep 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-wrapper timeline-wrapper-success">
                                            <div class="timeline-badge"><i class="las la-envelope-open-text"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Support Team sent you an email</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah
                                                        plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora
                                                        plaxo ideeli hulu weebly balihoo....</p>
                                                    <a class="btn ripple btn-primary text-fixed-white  mb-3">Read more</a>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted me-1"></i>
                                                    <span>25</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>25th
                                                        Sep 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-wrapper timeline-inverted timeline-wrapper-warning">
                                            <div class="timeline-badge success bg-transparent"><img class="timeline-image avatar avatar-rounded avatar-lg" alt="img"
                                                    src="{{asset('build/assets/images/faces/15.jpg')}}"> </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Mr. Doe shared a video</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <div class="embed-responsive embed-responsive-16by9 mb-3">
                                                        <iframe class="embed-responsive-item"
                                                            src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted me-1"></i>
                                                    <span>32</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>19th
                                                        Sep 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-wrapper timeline-wrapper-primary">
                                            <div class="timeline-badge"><i class="las la-check-circle"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">Sarah Young accepted your friend request</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                        cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga
                                                        iste magni maxime</p>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart text-muted me-1"></i>
                                                    <span>26</span>
                                                    <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>15th
                                                        Sep 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

@endsection

@section('scripts')
	


@endsection
