
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Tags</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tags</li>
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
                        <div class="col-xl-12 col-lg-12">
                            <!-- div -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        DEFAULT TAG
                                    </div>
                                    <p class="mb-4">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="border rounded-2 p-3">
                                        <div class="text-wrap">
                                            <div class="example">
                                                <div class="tags">
                                                    <span class="tag">First tag</span>
                                                    <span class="tag">Second tag</span>
                                                    <span class="tag">Third tag</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        Link Tag
                                    </div>
                                    <p class="mb-4">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <a href="javascript:void(0);" class="tag tag-rounded">First tag</a>
                                                <a href="javascript:void(0);" class="tag tag-rounded">Second tag</a>
                                                <a href="javascript:void(0);" class="tag tag-rounded">Third tag</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        Default Tags Addon
                                    </div>
                                    <p class="mb-4">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <span class="tag tag-default">
                                                    One
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                                <span class="tag tag-default">
                                                    Two
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                                <span class="tag tag-default">
                                                    Three
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                                <span class="tag tag-default">
                                                    Four
                                                    <a href="javascript:void(0);" class="tag-addon"><i
                                                            class="fe fe-x"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            Colored tags Addon
                                        </div>
                                        <p class="mb-4">It is Very Easy to Customize and it uses in your website aplication.</p>
                                        <div class="text-wrap">
                                            <div class="example">
                                                <div class="tags">
                                                    <span class="tag tag-primary">primary tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-secondary">secondary tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-success">success tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-warning">warning tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-teal">teal tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                    <span class="tag tag-danger">danger tag<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--div-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        Colored tags
                                    </div>
                                    <p class="mb-4">It is Very Easy to Customize and it uses in your website aplication.
                                    </p>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="tags">
                                                <span class="tag tag-blue">Blue tag</span>
                                                <span class="tag tag-azure">Azure tag</span>
                                                <span class="tag tag-indigo">Indigo tag</span>
                                                <span class="tag tag-purple">Purple tag</span>
                                                <span class="tag tag-pink">Pink tag</span>
                                                <span class="tag tag-red">Red tag</span>
                                                <span class="tag tag-orange">Orange tag</span>
                                                <span class="tag tag-yellow">Yellow tag</span>
                                                <span class="tag tag-lime">Lime tag</span>
                                                <span class="tag tag-green">Green tag</span>
                                                <span class="tag tag-teal">Teal tag</span>
                                                <span class="tag tag-cyan">Cyan tag</span>
                                                <span class="tag tag-gray">Gray tag</span>
                                                <span class="tag tag-gray-dark">Dark gray tag</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->
                        </div>
                        <!--/div-->
                    </div>
                    <!-- End:: row-1 -->

@endsection

@section('scripts')
	


@endsection
