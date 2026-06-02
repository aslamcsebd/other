@extends('layouts.custom-master')

@section('styles')



@endsection

@section('content')
	
        <div class="page error-bg" id="particles-js">
            <!-- Start::error-page -->
            <div class="main-error-wrapper page-h">
                <img src="{{asset('build/assets/images/media/pngs/1.png')}}" class="error-page-img" alt="error">
                <h2 class="title">Oopps. The page you were looking for doesn't exist.</h2>
                <h6 class="sub_title">You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-danger" href="{{url('index')}}">Back to Home</a>
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection
