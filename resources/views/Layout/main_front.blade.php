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
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
        @include('Layout/top_bar')
    <!-- #Top Bar -->
    <br><br><br><br><br>
    <section>
        <div class="container-fluid">
            <div class="block-header">
                <h2>@yield('title')</h2>
            </div>
            <!-- Basic Example -->
				<div class="row clearfix">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card">
							<div class="header bg-red">
								<h2>
									Red - Title <small>Description text here...</small>
								</h2>
								<ul class="header-dropdown m-r-0">
									<li>
										<a href="javascript:void(0);">
											<i class="material-icons">arrow_forward</i>
										</a>
									</li>
								</ul>
							</div>
							<div class="body">
								Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card">
							<div class="header bg-cyan">
								<h2>
									Cyan - Title <small>Description text here...</small>
								</h2>
								<ul class="header-dropdown m-r-0">
									<li>
										<a href="javascript:void(0);">
											<i class="material-icons">arrow_forward</i>
										</a>
									</li>
								</ul>
							</div>
							<div class="body">
								Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card">
							<div class="header bg-green">
								<h2>
									Green - Title <small>Description text here...</small>
								</h2>
								<ul class="header-dropdown m-r-0">
									<li>
										<a href="javascript:void(0);">
											<i class="material-icons">arrow_forward</i>
										</a>
									</li>
								</ul>
							</div>
							<div class="body">
								Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
							</div>
						</div>
					</div>
				</div>
            
        </div>
    </section>

    
    @include('Layout/js_global')
    @yield('js_custom')
</body>

</html>
