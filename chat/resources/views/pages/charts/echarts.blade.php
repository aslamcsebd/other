
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title fs-21 mb-1">Echart Charts</h5>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Echart Charts</li>
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
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-basic-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Smoothed Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-smoothed-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Area Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-basic-area" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Stacked Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-stacked-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Stacked Area Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-stacked-area" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Step Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-step-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-bar-basic" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Bar With Background Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-bar-background" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Style For a Single Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-bar-single" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Water Fall Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-waterfall" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Bar With Negative Values Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-negative-values" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Bar With Labels Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-bar-labels" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Horizontal Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-bar-horizontal" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Horizontal Stacked Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-stacked-horizontal" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Pie Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-pie" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Doughnut Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-doughnut" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Scatter Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-scatter" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Bubble Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-bubble" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Candlestick Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-candlestick" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Radar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-basic-radar" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Heatmap Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-heatmap" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Treemap Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-treemap" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Funnel Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-funnel" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Gauge Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-gauge-basic" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Simple Graph Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-simple-graph" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Pictorial Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="echart-pictorial" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
        
        <!-- Echarts JS -->
        <script src="{{asset('build/assets/libs/echarts/echarts.min.js')}}"></script>

        <!-- Internal Echarts JS -->
        @vite('resources/assets/js/echarts.js')

@endsection
