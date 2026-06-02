
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">File Manager List</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Manager List</li>
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
						<div class="col-lg-12 col-xl-12">
							<div class="row">
								<div class="col-6">
									<div class="fs-20 mb-4">
										Files List
									</div>
								</div>
								<div class="col-6 col-auto file-1">
									<div class="input-group">
										<input class="form-control" placeholder="Search folder..." type="text">
										<button class="btn btn-primary" type="button">Search</button>
									</div>
								</div>
							</div>
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">videos</h6>
												<span class="text-muted">4.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">Images</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">Word document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
                                    <div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/4.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold mt-1">Document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold mt-2">login image</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
                                    <div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold mt-2">beach image</h6>
												<span class="text-muted">4.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold mt-2">sky image</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold mt-2">Sea</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu rounded-7">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<a href="{{url('file-manager-details')}}">
														<img src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt="img" class="rounded-7">
													</a>
												</div>
												<h6 class="mb-1 fs-14 font-weight-semibold mt-2">Outdoor Image</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
							</div>
							<ul class="pagination float-end mb-4">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="javascript:void(0);">Next</a>
								</li>
						</ul>
						</div>
					</div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	


@endsection
