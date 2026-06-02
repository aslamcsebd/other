
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Breadcrumb</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
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

                    <!--ROW-START-->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                                        </ol>
                                    </nav>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                                        </ol>
                                    </nav>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb"&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;

    &lt;nav aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;

    &lt;nav aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb mb-0"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Library&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Example1
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-example1">
                                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                                        </ol>
                                    </nav>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-example1">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                                        </ol>
                                    </nav>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-example1 mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb breadcrumb-example1"&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;

    &lt;nav aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb breadcrumb-example1"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;

    &lt;nav aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb breadcrumb-example1 mb-0"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Library&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Breadcrumb Style-1
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-style1 mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb breadcrumb-style1 mb-0"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Breadcrumb Style-2
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-style2 mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="ti ti-home-2 me-1 fs-15 d-inline-block"></i>Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="ti ti-apps me-1 fs-15 d-inline-block"></i>About</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb breadcrumb-style2 mb-0"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;&lt;i class="ti ti-home-2 me-1 fs-15"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;&lt;i class="ti ti-apps me-1 fs-15"&gt;&lt;/i&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Services&lt;/li&gt;
    &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Background colors
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb mb-0"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Embedded SVG icon
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav class="breadcrumb-withsvg" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                        aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item active embedded-breadcrumb" aria-current="page">Library</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb mb-0"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active embedded-breadcrumb" aria-current="page"&gt;Library&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dividers
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav style="--bs-breadcrumb-divider: '~';" aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: '~';" aria-label="breadcrumb"&gt;
        &lt;ol class="breadcrumb mb-0"&gt;
            &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/nav&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ROW-END-->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
