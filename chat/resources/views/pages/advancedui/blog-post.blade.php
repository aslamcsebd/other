
@extends('layouts.master')

@section('styles')

        <!-- Quill Editor Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- File pond Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Blog Post</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
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
                        <div class="col-lg-12 col-md-12 col-md-12">
                            <div class="card blog-edit">
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark">Course Title</label>
                                        <input type="text" class="form-control" value="Advanced Web Development">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark">Category</label>
                                        <select class="form-control" data-trigger name="language" id="language">
                                            <option>Select</option>
                                            <option value="1" selected>IT</option>
                                            <option value="2">Language</option>
                                            <option value="3">Science</option>
                                            <option value="4">Health</option>
                                            <option value="5">Humanities</option>
                                            <option value="6">Business</option>
                                            <option value="7">Maths</option>
                                            <option value="8">Marketing</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark">Instructor</label>
                                        <select class="form-control" data-trigger name="instructor" id="instructor">
                                            <option>Select</option>
                                            <option value="1" selected>Pedro Cox</option>
                                            <option value="2">Vera Guzman</option>
                                            <option value="3">Glenda Long</option>
                                            <option value="4">Joel Anderson</option>
                                            <option value="5">Blanche Henderson</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark">Type of mode</label>
                                        <div class="d-md-flex ad-post-details">
                                            <div class="custom-control form-radio mb-2 me-4">
                                                <input class="form-check-input" type="radio" name="radios2" id="option1" checked="">
                                                <label class="form-check-label" for="option1"> Online </label>
                                            </div>

                                            <div class="custom-control form-radio mb-2">
                                                <input class="form-check-input" type="radio" name="radios2" id="option2">
                                                <label class="form-check-label" for="option2"> Offline</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="ql-wrapper ql-wrapper-demo mb-3">
                                            <label class="form-label">Product Description</label>
                                            <div id="editor">
                                                <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                                <p><br></p>
                                                <ol>
                                                    <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                    <li class="">This is quill snow editor.</li>
                                                    <li class="">Easy to customize and flexible.</li>
                                                </ol>
                                                <p><br></p>
                                                <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark">Course Type</label>
                                        <div class="d-md-flex ad-post-details">
                                            <div class="custom-control form-radio mb-2 me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                <label class="form-check-label" for="flexRadioDefault1"> Free </label>
                                            </div>

                                            <div class="custom-control form-radio mb-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2"> Paid</label>
                                            </div>

                                        </div>
                                    </div>
                                    <label class="form-label">Upload File</label>
                                    <div class="p-4 border rounded-6 mb-4 form-group">
                                        <div>
                                            <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone"></form>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Upload Video URL</label>
                                        <input type="text" class="form-control" placeholder="https://videos.com" value="https://www.youtube.com/embed/tMWkeBIohBs">
                                    </div>
                                    <div class="control-group form-group  mb-0">
                                        <label class="form-label text-dark">Course Post Package</label>
                                        <div class=" border p-3 rounded-7">
                                            <div class="d-md-flex ad-post-details">
                                                <label class="custom-control form-radio mb-0 me-5">
                                                    <input type="radio" class="form-check-input" name="radios1" value="option7">
                                                    <span class="custom-control-label">30 Days Free</span>
                                                </label>
                                                <label class="custom-control form-radio  mb-0 me-4">
                                                    <input type="radio" class="form-check-input" name="radios1" value="option8" checked="">
                                                    <span class="custom-control-label">60 days / <span class="font-weight-bold">$20</span></span>
                                                </label>
                                                <label class="custom-control form-radio  mb-0 me-4">
                                                    <input type="radio" class="form-check-input" name="radios1" value="option9">
                                                    <span class="custom-control-label">6months / <span class="font-weight-bold">$50</span></span>
                                                </label>
                                                <label class="custom-control form-radio  mb-0">
                                                    <input type="radio" class="form-check-input" name="radios1" value="option10">
                                                    <span class="custom-control-label">1 year / <span class="font-weight-bold">$80</span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <a href="javascript:void(0);" class="btn btn-secondary">Save to Draft</a>
                                    <a href="javascript:void(0);" class="btn btn-primary float-end">Publish Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.js')}}"></script>

        <!-- Dropzone JS -->
        <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

        <!-- Fileupload JS -->
        @vite('resources/assets/js/blog-post.js')

@endsection
