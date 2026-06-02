@extends('layouts.master')

@section('styles')
    <style>
        #ChatBody {
            height: calc(100vh - 350px);
            overflow-y: auto;
        }

        #main-chat-content {
            height: 100%;
            overflow-y: auto;
        }

        .main-chat-list {
            height: calc(100% - 68px);
            position: relative;
            overflow: auto;
        }
      
		#searchOutput {
			position: absolute;
			background: #fff;
			width: 99%;
            /* left: 0; */
            /* right: 0; */
			max-height: 300px;
			overflow-y: auto;
			z-index: 1000;
			margin-top: 1px;
		}

		#searchOutput.with-border {
			border: 1px solid #c2b5b5 !important;
			border-radius: 3px;
		}

        .search-item {
            padding:5px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
        }

        .search-item:hover {
            background-color: #f1f1f1;
        }
    </style>
@endsection

@section('content')
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title fs-21 mb-1">Chat</h5>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Mail</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chat</li>
                </ol>
            </nav>
        </div>

        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
                        class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate"
                        data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="row main-chart-wrapper">
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-3">
            <div class="card custom-card">
                <div class="main-content-app pt-0">
                    <div class="main-content-left main-content-left-chat">
                        <span class="nav-link active btn-block btn-danger py-1 ps-3 m-1">Recent Chat</span>
                        <div class="p-1">
                            <input type="text" id="searchUser" class="form-control" placeholder="Search user by name, email, phone" style="height: 30px !important;">
                            <div id="searchOutput"></div>
                        </div>
                        <div class="tab-content main-chat-list">
                            <div class="tab-pane p-0 border-0 active" id="recent-chat">
                                <div class="chat-users-tab" id="chat-msg-scroll">
                                    <div class="main-chat-list">
                                        @foreach ($users as $user)
                                            <a class="media new" href="#" onclick="loadMessages({{ $user->id }})"
                                                data-id="{{ $user->id }}">
                                                <div class="main-img-user">
                                                    <img alt="" src="{{ asset('storage/' . $user->image) }}">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name flex-wrap">
                                                        <span>{{ $user->name }}</span>
                                                        <span
                                                            class="ps-2">{{ $user->last_time ? $user->last_time->diffForHumans() : '' }}
                                                    </div>
                                                    <p>
                                                        <strong>
                                                            {{ $user->last_sender_id == Auth::id() ? 'You:' : '' }}
                                                        </strong>
                                                        {{ Str::limit($user->last_message ?? '', 28) }}
                                                    </p>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-0 border-0" id="groups">
                                <div class="chat-groups-tab d-none" id="groups-tab-pane">
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/5.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Amelia Taylor</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">Today, 05:30 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-outgoing"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/4.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Grace Russell</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">Today, 12:15 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-outgoing"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/9.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Joanne Miller</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">Yesterday, 02:15 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-incoming"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt=""
                                                    src="{{ asset('build/assets/images/faces/12.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Kimberly Nolan</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-down-left text-danger me-2"></i>
                                                    <p class="text-muted tx-13">Yesterday, 05:39 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/6.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Andrea Mackay</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-down-left text-danger me-2"></i>
                                                    <p class="text-muted tx-13">29 june 2020, 03:21 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-danger fe fe-phone-call"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/1.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Samantha Lewis</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">1 july 2020, 10:23 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-incoming"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/2.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Victoria Kerr</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-down-left text-danger me-2"></i>
                                                    <p class="text-muted tx-13">1 july 2020, 4:45 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-danger fe fe-phone-call"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/7.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Socrates Itumay</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">2 july 2020, 11:14 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-outgoing"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/8.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Rebecca Johnston</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-down-left text-danger me-2"></i>
                                                    <p class="text-muted tx-13">3 july 2020, 06:14 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-danger fe fe-phone-incoming"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/3.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Madeleine James</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">4 july 2020, 5:12 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-outgoing"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/5.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Socrates Itumay</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">4 july 2020, 5:12 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-outgoing"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/7.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Raymart Santiago</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fe fe-arrow-up-right text-success me-2"></i>
                                                    <p class="text-muted tx-13">4 july 2020, 5:12 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-success fe fe-phone-outgoing"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane p-0 border-0 d-none" id="calls">
                                <div id="calls-tab-pane" class="chat-calls-tab">
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/3.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Lillian Ross</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Home</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/5.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Socrates Itumay</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Mobile</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/4.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Elizabeth Scott</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Office</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/5.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Cameron Watson</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Home</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/8.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Christopher Arnold</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Mobile</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/4.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Justin Bailey</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Office</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/7.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Richard Berry</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Home</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/9.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Abraham Clark</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Mobile</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/4.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Anderson</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Office</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/2.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Clarkson Gray</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Home</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt=""
                                                    src="{{ asset('build/assets/images/faces/12.jpg') }}"> <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Henderson Dyer</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Mobile</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex align-items-center media">
                                        <div class="mb-0 me-2">
                                            <div class="main-img-user online">
                                                <img alt="" src="{{ asset('build/assets/images/faces/1.jpg') }}">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="align-items-center justify-content-between">
                                            <div class="media-body ms-2">
                                                <div class="media-contact-name flex-wrap">
                                                    <span>Marshall Fisher</span>
                                                    <span></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-muted tx-13">Office</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="contact-status text-primary fe fe-message-square  me-2"></i>
                                            <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                            <i class="contact-status text-danger fe fe-video"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="card custom-card">
                <div class="main-content-app pt-0">
                    <div class="main-content-body main-content-body-chat">
                        <div class="main-chat-header pt-3">
                            <div class="main-img-user online">
                                <img class="targrtUserImage" src="{{ asset('storage/' . $user->image) }}"
                                    alt="avatar">
                            </div>
                            <div class="main-chat-msg-name ms-2">
                                <h6 class="mb-0 fs-15 fw-semibold targrtUserName">{{ $user->name }}</h6>
                                <span class="dot-label bg-success"></span>
                                <small class="me-3 fs-12 text-muted">Last seen: 2 minutes ago</small>
                            </div>
                            <nav class="nav d-none">
                                <a class="nav-link d-lg-none" href="javascript:void(0);" data-bs-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false"><i
                                        class="fe fe-more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end shadow">
                                    <a class="dropdown-item" href="#"><i class="fe fe-phone-call me-1"></i> Phone
                                        Call</a>
                                    <a class="dropdown-item" href="#"><i class="fe fe-video me-1"></i> Video
                                        Call</a>
                                    <a class="dropdown-item" href="#"><i class="fe fe-user-plus me-1"></i> Add
                                        Contact</a>
                                    <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                </div>
                                <a class="nav-link d-lg-block d-none" data-bs-toggle="tooltip" href="javascript:void(0);"
                                    title="Phone Call"><i class="fe fe-phone-call"></i></a>
                                <a class="nav-link d-lg-block d-none" data-bs-toggle="tooltip" href="javascript:void(0);"
                                    title="Video Call"><i class="fe fe-video"></i></a>
                                <a class="nav-link d-lg-block d-none" data-bs-toggle="tooltip" href="javascript:void(0);"
                                    title="Add Contact"><i class="fe fe-user-plus"></i></a>
                                <a class="nav-link d-lg-block d-none" data-bs-toggle="tooltip" href="javascript:void(0);"
                                    title="Delete"><i class="fe fe-trash-2"></i></a>
                            </nav>
                        </div>

                        <div class="main-chat-body" id="ChatBody">
                            <div class="content-inner chat-content" id="main-chat-content">
                                <!-- Messages will be loaded here via AJAX -->
                            </div>
                        </div>

                        <div class="main-chat-footer">
                            <input id="message" type="text" class="form-control"
                                placeholder="Type your message here...">
                            <a class="main-msg-clip me-2 d-none" href="javascript:void(0);">
                                <i class="fe fe-paperclip"></i>
                            </a>
                            <a id="send" class="main-msg-send" href="javascript:void(0);">
                                <i class="fe fe-send"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <div class="card custom-card chat-account">
                <div class="main-content-app d-block pt-0">
                    <div class="chat-user-details" id="chat-user-details">
                        <div class="card-body text-center">
                            <div class="user-lock text-center">
                                <a href="#">
                                    <img id="targrtUserImage" alt="avatar" class="rounded-circle">
                                </a>
                            </div>
                            <a href="#">
                                <h5 id="profile-name" class="mb-1 mt-3 fs-17"></h5>
                            </a>
                            <p id="profile-type" class="mb-0 fs-13 text-muted"></p>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-3">Contact Details</h6>
                            <div class="d-flex">
                                <div>
                                    <p class="contact-icon text-primary m-0"><i class="fe fe-phone"></i></p>
                                </div>
                                <div class="ms-3">
                                    <p class="tx-13 mb-0">Phone</p>
                                    <p id="profile-phone" class="fs-12 text-muted"></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <p class="contact-icon text-primary m-0"><i class="fe fe-mail"></i></p>
                                </div>
                                <div class="ms-3">
                                    <p class="tx-13 mb-0">Email</p>
                                    <p id="profile-email" class="fs-12 text-muted"></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <p class="contact-icon text-primary m-0"><i class="fe fe-map-pin"></i></p>
                                </div>
                                <div class="ms-3">
                                    <p class="tx-13 mb-0">Address</p>
                                    <p id="profile-address" class="fs-12 text-muted mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-none">
                            <h6 class="mb-3">Shared Files</h6>
                            <div class="media mb-3">
                                <p class="contact-icon rounded-1 fs-17 text-primary m-0"><i
                                        class="mdi mdi-file-image"></i></p>
                                <div class="media-body ms-3 d-flex">
                                    <div class="">
                                        <p class="tx-13 text-dark mb-0">Image1.jpg</p>
                                        <span class="fs-12 text-muted">200 KB</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a href="javascript:void(0);" class="btn px-0"><i
                                                class="fe fe-download my-auto text-muted tx-18"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-3">
                                <p class="contact-icon rounded-1 fs-17 text-danger m-0"><i class="mdi mdi-file-pdf"></i>
                                </p>
                                <div class="media-body ms-3 d-flex">
                                    <div class="">
                                        <p class="tx-13 text-dark mb-0">Doc1.pdf</p>
                                        <span class="fs-12 text-muted">48 KB</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a href="javascript:void(0);" class="btn px-0"><i
                                                class="fe fe-download my-auto text-muted tx-18"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-3">
                                <p class="contact-icon rounded-1 fs-17 text-info m-0"><i class="mdi mdi-file-word"></i>
                                </p>
                                <div class="media-body ms-3 d-flex">
                                    <div class="">
                                        <p class="tx-13 text-dark mb-0">Word1.doc</p>
                                        <span class="fs-12 text-muted">35 KB</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a href="javascript:void(0);" class="btn px-0"><i
                                                class="fe fe-download my-auto text-muted tx-18"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <p class="contact-icon rounded-1 fs-17 text-warning m-0"><i
                                        class="mdi mdi-file-powerpoint"></i></p>
                                <div class="media-body ms-3 d-flex">
                                    <div class="">
                                        <p class="tx-13 text-dark mb-0">Example1.ppt</p>
                                        <span class="fs-12 text-muted">54 KB</span>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <a href="javascript:void(0);" class="btn px-0"><i
                                                class="fe fe-download my-auto text-muted tx-18"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/assets/js/chat.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <script>
        var currentUserId = null;

        $(document).ready(function() {
            @if ($lastUser)
                let lastUserId = {{ $lastUser->id }};
                loadMessages(lastUserId);
            @endif
        });

        function loadMessages(userId) {
            currentUserId = userId;
            fetchMessages(userId);
            fetchUserProfile(userId);

            $('.main-chat-list .media').removeClass('selected');
            $('.main-chat-list .media[data-id="' + userId + '"]').addClass('selected');
        }

        function fetchMessages(userId) {
            $.get(`/fetch-messages/${userId}`, function(response) {
                if (response.html && response.html.trim() !== '') {
                    $('#main-chat-content').html(response.html);
                    $('#main-chat-content').scrollTop($('#main-chat-content')[0].scrollHeight);
                } else {
                    $('#main-chat-content').html(`
						<div class="d-flex align-items-center justify-content-center h-100">
							<b class="text-center text-muted">No messages yet. Start the conversation!</b>
						</div>
					`);
                }

                $('#message').focus();

            }).fail(function(xhr) {
                console.error('Error fetching messages:', xhr.responseText);
            });
        }

        $('#send').on('click', function() {
            const message = $('#message').val();
            if (message.trim() === '') return;

            $.post('/send-message', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                receiver_id: currentUserId,
                content: message
            }, function(response) {
                $('#message').val('');
                fetchMessages(currentUserId);
            });
        });

        function fetchUserProfile(userId) {
            $.get(`/fetch-users/${userId}`, function(user) {
                //Middle part
                $('.targrtUserName').text(user.name);
                $('.targrtUserImage').attr('src', `/storage/${user.image}`);

                //Right part
                $('#targrtUserImage').attr('src', `/storage/${user.image}`);
                $('#profile-name').text(user.name);
                $('#profile-type').text(user.type);
                $('#profile-phone').text(user.phone_number);
                $('#profile-email').text(user.email);
                $('#profile-address').text(user.address);
            });
        }

        function scrollToBottom() {
            const chatBox = $('#main-chat-content');
            chatBox.scrollTop(chatBox[0].scrollHeight);
        }

        //Search user
        $('#searchUser').on("keyup", function() {
            var getName = $(this).val();
            if (getName.length > 0) {
                $.ajax({
                    url: '{{ url('search-user') }}',
                    method: 'GET',
                    data: {
                        name: getName
                    },
                    beforeSend: function() {
                        $("#searchUser").css("background", "#FFF url('/loader.gif') no-repeat 165px");
                    },
                    success: function(response) {
                        $("#searchOutput").empty().show();

                        if (response.length > 0) {
                            $.each(response, function(index, customer) {
                                var item = $('<div class="search-item"></div>')
                                    .text(customer.name + ' | ' + customer.email)
                                    .on('click', function() {
                                        selectName(customer.id);
                                    });

                                $("#searchOutput").append(item);
                            });
							$("#searchOutput").addClass('with-border').show();

                        } else {
                            // $("#searchOutput").html('<p>No results found</p>');
							$("#searchOutput").html('<p>No results found</p>').addClass('with-border').show();

                        }

                        $("#searchName").css("background", "#FFF");
                    }
                });
            } else {
                $("#searchOutput").hide();
            }
        });

        function selectName(userId) {
			$("#searchUser").val('');
			$("#searchOutput").hide().removeClass('with-border');
			loadMessages(userId);
        }

		// Refresh matter
		let messageInterval = null;
		function startMessageInterval() {
			stopMessageInterval();
			messageInterval = setInterval(function() {
				if (currentUserId !== null) {
					fetchMessages(currentUserId);
				}
			}, 3000);
		}

		function stopMessageInterval() {
			if (messageInterval !== null) {
				clearInterval(messageInterval);
				messageInterval = null;
			}
		}

		startMessageInterval();
		$('#searchUser').on('focus keyup', function() {
			if ($(this).val().trim().length > 0) {
				stopMessageInterval();
			} else {
				startMessageInterval();
			}
		});

		$('#searchUser').on('blur', function() {
			if ($(this).val().trim().length === 0) {
				startMessageInterval();
			}
		});

        // $("#message").keypress(function(event) {
        //     if (event.which === 13) {
        //         event.preventDefault();
        //         $("#send").click();
        //     }
        // });
    </script>
@endsection
