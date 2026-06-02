
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Placeholders</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Placeholders</li>
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
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <img class="card-img-top" src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card" aria-hidden="true">
                                        <img class="card-img-top" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="">
                                        <div class="card-body">
                                            <div class="h5 card-title placeholder-glow">
                                                <span class="placeholder col-6"></span>
                                            </div>
                                            <p class="card-text placeholder-glow">
                                                <span class="placeholder col-7"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-6"></span>
                                            </p>
                                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Animation
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="placeholder-glow mb-0">
                                                <span class="placeholder col-12"></span>
                                            </p>
                                            <p class="placeholder-wave mb-0">
                                                <span class="placeholder col-12"></span>
                                            </p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="placeholder-glow mb-0"&gt;
    &lt;span class="placeholder col-12"&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p class="placeholder-wave mb-0"&gt;
    &lt;span class="placeholder col-12"&gt;&lt;/span&gt;
&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Sizing
                                                    </div>
                                                    <div class="prism-toggle">
                                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <span class="placeholder col-12 placeholder-xl mb-1"></span>
                                                    <span class="placeholder col-12 placeholder-lg"></span>
                                                    <span class="placeholder col-12"></span>
                                                    <span class="placeholder col-12 placeholder-sm"></span>
                                                    <span class="placeholder col-12 placeholder-xs"></span>
                                                </div>
                                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="placeholder col-12 placeholder-xl mb-1"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 placeholder-lg"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 placeholder-sm"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 placeholder-xs"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Colors
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="placeholder col-12"></span>
                                            <span class="placeholder col-12 bg-primary"></span>
                                            <span class="placeholder col-12 bg-secondary"></span>
                                            <span class="placeholder col-12 bg-success"></span>
                                            <span class="placeholder col-12 bg-danger"></span>
                                            <span class="placeholder col-12 bg-warning"></span>
                                            <span class="placeholder col-12 bg-info"></span>
                                            <span class="placeholder col-12 bg-light"></span>
                                            <span class="placeholder col-12 bg-dark"></span>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="placeholder col-12"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-primary"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-secondary"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-success"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-danger"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-warning"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-info"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-light"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-dark"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Width
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="placeholder bg-primary col-6"></span>
                                    <span class="placeholder bg-primary w-75"></span>
                                    <span class="placeholder bg-primary" style="width: 25%;"></span>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="placeholder bg-primary col-6"&gt;&lt;/span&gt;
&lt;span class="placeholder bg-primary w-75"&gt;&lt;/span&gt;
&lt;span class="placeholder bg-primary" style="width: 25%;"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start:: row-2 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
