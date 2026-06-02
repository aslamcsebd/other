<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

    <head>

        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="laravel, framework laravel, laravel template, admin, laravel dashboard, template dashboard, admin dashboard ui, bootstrap dashboard, laravel framework, vite laravel, bootstrap 5 templates, laravel admin panel, laravel tailwind, admin panel, template admin, bootstrap admin panel.">
        
		<!-- TITLE -->
        <title> Valex - Laravel Bootstrap 5 Premium Admin & Dashboard Template </title>
        
        <!-- Favicon -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        @include('layouts.components.landing.styles')
        
        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' ])

        @yield('styles')

    </head>

    <body class="landing-body">

        <!-- Switcher -->
        @include('layouts.components.landing.switcher')
        <!-- End switcher -->

        <div class="landing-page-wrapper">

            <!-- Main-Header -->
            @include('layouts.components.landing.main-header')
            <!-- End Main-Header -->

            <!-- Main-Sidebar -->
            @include('layouts.components.landing.main-sidebar')
            <!-- End Main-Sidebar -->

            <!-- Start::app-content -->
            <div class="main-content landing-main">

                @yield('content')

            </div>
            <!-- End::main-content -->
                
        </div>
        <!--app-content closed-->

        @yield('modals')  

        <!-- SCRIPTS -->
        @include('layouts.components.landing.scripts')        
      
    </body> 

</html>
