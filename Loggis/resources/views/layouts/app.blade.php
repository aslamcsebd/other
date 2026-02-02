<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title', 'Loggis')</title>
        @include('layouts.head')
        @yield('css')
    </head>

    <body>
		<div id="global-loader">
			<div class="page-loader"></div>
		</div>

        <div class="main-wrapper">
            @include('layouts.header')
            @include('layouts.sidebar')

			<div class="page-wrapper">
                @yield('content')

				<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
					<p class="mb-0">2025 &copy; Loggis.</p>
					{{-- <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p> --}}
				</div>
            </div>
        </div>
        @include('layouts.footer')
        @include('layouts.alertMessage')
        @yield('js')
    </body>
</html>