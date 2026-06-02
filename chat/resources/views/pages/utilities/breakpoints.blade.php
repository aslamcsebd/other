
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Breakpoints</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Breakpoints</li>
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
                                        Containers
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Content</th>
                                                    <th>Extra small<div class="fw-normal">&lt;576px</div>
                                                    </th>
                                                    <th>Small<div class="fw-normal">≥576px</div>
                                                    </th>
                                                    <th>Medium<div class="fw-normal">≥768px</div>
                                                    </th>
                                                    <th>Large<div class="fw-normal">≥992px</div>
                                                    </th>
                                                    <th>X-Large<div class="fw-normal">≥1200px</div>
                                                    </th>
                                                    <th>XX-Large<div class="fw-normal">≥1400px</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><code>.container</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-sm</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-md</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-lg</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-xl</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-xxl</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <td><code>.container-fluid</code></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                    <td><span class="text-muted">100%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Available breakpoints
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Breakpoint</th>
                                                    <th>class infix</th>
                                                    <th>Dimensions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Extra small</td>
                                                    <td>None</td>
                                                    <td>576px</td>
                                                </tr>
                                                <tr>
                                                    <td>Small</td>
                                                    <td><code>sm</code></td>
                                                    <td>≥576px</td>
                                                </tr>
                                                <tr>
                                                    <td>Medium</td>
                                                    <td><code>md</code></td>
                                                    <td>≥768px</td>
                                                </tr>
                                                <tr>
                                                    <td>Large</td>
                                                    <td><code>lg</code></td>
                                                    <td>≥992px</td>
                                                </tr>
                                                <tr>
                                                    <td>Extra large</td>
                                                    <td><code>xl</code></td>
                                                    <td>≥1200px</td>
                                                </tr>
                                                <tr>
                                                    <td>Extra extra large</td>
                                                    <td><code>xxl</code></td>
                                                    <td>≥1400px</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

@endsection

@section('scripts')
	


@endsection
