<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title_page')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    @include('Layout/css_global')
    @yield('css_custom')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
        @include('Layout/top_bar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
            @include('Layout/left_side_bar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
            <!-- @include('Layout/right_side_bar') -->
        <!-- #END# Right Sidebar -->
    </section>

    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>@yield('title')</h2>
            </div>
            @yield('content')
        </div>
    </section>

    
    @include('Layout/js_global')
    @yield('js_custom')
</body>

</html>
