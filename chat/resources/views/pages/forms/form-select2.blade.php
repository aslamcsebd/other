
@extends('layouts.master')

@section('styles')

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Select2</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Select2</li>
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

                    <div class="alert alert-solid-secondary alert-dismissible fs-15 fade show mb-4">
                        We Placed <strong class="text-fixed-black">Select2</strong> only in this page by using <strong class="text-fixed-black">jquery</strong> cdn link.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                    </div>

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Select2
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="js-example-basic-single" name="state">
                                        <option value="s-1">Selection-1</option>
                                        <option value="s-2">Selection-2</option>
                                        <option value="s-3">Selection-3</option>
                                        <option value="s-4">Selection-4</option>
                                        <option value="s-5">Selection-5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Multiple Select
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <option value="m-1" selected>Multiple-1</option>
                                        <option value="m-2">Multiple-2</option>
                                        <option value="m-3">Multiple-3</option>
                                        <option value="m-4">Multiple-4</option>
                                        <option value="m-5">Multiple-5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Single Select With Placeholder
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="js-example-placeholder-single js-states form-control">
                                        <option value="st-1" selected>Texas</option>
                                        <option value="st-2">Georgia</option>
                                        <option value="st-3">California</option>
                                        <option value="st-4">Washington D.C</option>
                                        <option value="st-5">Virginia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Multiple Select With Placeholder
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="js-example-placeholder-multiple js-states" multiple="multiple">
                                        <option value="fr-1">Appple</option>
                                        <option value="fr-2">Mango</option>
                                        <option value="fr-3">Orange</option>
                                        <option value="fr-4">Guava</option>
                                        <option value="fr-5">Pineapple</option>
                                    </select>
                                </div>
                            </div>
                        </div><div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Templating
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="js-example-templating js-persons form-control">
                                        <option value="p-1">Andrew</option>
                                        <option value="p-2">Maya</option>
                                        <option value="p-3">Brodus Axel</option>
                                        <option value="p-4">Goldhens</option>
                                        <option value="p-5">Angelina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Templating Selection
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="select2-client-search form-control">
                                        <option value="p-1" selected>Andrew</option>
                                        <option value="p-2">Maya</option>
                                        <option value="p-3">Brodus Axel</option>
                                        <option value="p-4">Goldhens</option>
                                        <option value="p-5">Angelina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Max Selections Limiting
                                    </div>
                                </div>
                                <div class="card-body">
                                    <select class="js-example-basic-multiple-limit-max form-control" multiple="multiple">
                                        <option value="p-1" selected>Andrew</option>
                                        <option value="p-2" selected>Maya</option>
                                        <option value="p-3">Brodus Axel</option>
                                        <option value="p-4">Goldhens</option>
                                        <option value="p-5">Angelina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Disabling a Select2 control
                                    </div>
                                </div>
                                <div class="card-body vstack gap-3">
                                    <select class="js-example-disabled mb-3" name="state">
                                        <option value="s-1">Selection-1</option>
                                        <option value="s-2">Selection-2</option>
                                        <option value="s-3">Selection-3</option>
                                        <option value="s-4">Selection-4</option>
                                        <option value="s-5">Selection-5</option>
                                    </select>
                                    <select class="js-example-disabled-multi" name="state" multiple="multiple">
                                        <option value="s-1" selected>Selection-1</option>
                                        <option value="s-2">Selection-2</option>
                                        <option value="s-3">Selection-3</option>
                                        <option value="s-4">Selection-4</option>
                                        <option value="s-5">Selection-5</option>
                                    </select>
                                    <div>
                                        <button class="btn btn-primary-light js-programmatic-enable">Enable</button>
                                        <button class="btn btn-primary js-programmatic-disable">Disable</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

@endsection

@section('scripts')
	
        <!-- Jquery Cdn -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        
        <!-- Select2 Cdn -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- Internal Select-2.js -->
        @vite('resources/assets/js/select2.js')

@endsection
