
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Position</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Position</li>
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
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Positions
                                    </div>
                                </div>
                                <div class="card-body bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0"></div>
                                        <div class="position-absolute top-0 end-0"></div>
                                        <div class="position-absolute top-50 start-50"></div>
                                        <div class="position-absolute bottom-50 end-50"></div>
                                        <div class="position-absolute bottom-0 start-0"></div>
                                        <div class="position-absolute bottom-0 end-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Centering Elements With Positions
                                    </div>
                                </div>
                                <div class="card-body bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0 translate-middle"></div>
                                        <div class="position-absolute top-0 start-50 translate-middle"></div>
                                        <div class="position-absolute top-0 start-100 translate-middle"></div>
                                        <div class="position-absolute top-50 start-0 translate-middle"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle"></div>
                                        <div class="position-absolute top-50 start-100 translate-middle"></div>
                                        <div class="position-absolute top-100 start-0 translate-middle"></div>
                                        <div class="position-absolute top-100 start-50 translate-middle"></div>
                                        <div class="position-absolute top-100 start-100 translate-middle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        By adding .translate-middle-x or .translate-middle-y classes
                                    </div>
                                </div>
                                <div class="card-body bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0"></div>
                                        <div class="position-absolute top-0 start-50 translate-middle-x"></div>
                                        <div class="position-absolute top-0 end-0"></div>
                                        <div class="position-absolute top-50 start-0 translate-middle-y"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle"></div>
                                        <div class="position-absolute top-50 end-0 translate-middle-y"></div>
                                        <div class="position-absolute bottom-0 start-0"></div>
                                        <div class="position-absolute bottom-0 start-50 translate-middle-x"></div>
                                        <div class="position-absolute bottom-0 end-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Examples:
                                            </div>
                                        </div>
                                        <div
                                            class="card-body bd-example-position-examples d-flex justify-content-around">
                                            <button type="button" class="btn btn-primary position-relative">
                                                Mails <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99
                                                    <span class="visually-hidden">unread messages</span></span>
                                            </button>

                                            <button type="button" class="btn btn-dark position-relative about text-white">
                                                Marker <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="position-absolute top-100 start-50 translate-middle mt-1 svg-white"
                                                    fill="#212529" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button type="button" class="btn btn-primary position-relative">
                                                Alerts <span
                                                    class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span
                                                        class="visually-hidden">unread messages</span></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Example With Buttons
                                            </div>
                                        </div>
                                        <div class="card-body bd-example-position-examples">
                                            <div class="position-relative m-4">
                                                <div class="progress" style="height: 1px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <button type="button"
                                                    class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                                                    style="width: 2rem; height:2rem;">1</button>
                                                <button type="button"
                                                    class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                                                    style="width: 2rem; height:2rem;">2</button>
                                                <button type="button"
                                                    class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                                                    style="width: 2rem; height:2rem;">3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- End:: row-2 -->

@endsection

@section('scripts')
	


@endsection
