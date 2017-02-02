<!DOCTYPE html>
<html dir="ltr" lang="en-US">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="VashiHaveli" />

		<!-- Stylesheets
		============================================= -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/bootstrap.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/style.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/swiper.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/dark.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/font-icons.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/animate.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/magnific-popup.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{@asset('css/colors.css')}}" type="text/css" />
		
		@yield('extra-css')

		<link rel="stylesheet" href="{{@asset('css/responsive.css')}}" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="icon" href="{{@asset('images/logo.png')}}" type="image/png" sizes="16x16">
		
		<link rel="apple-touch-icon" href="{{@asset('images/logo.png')}}">

    	<link rel="apple-touch-icon" sizes="76x76" href="{{@asset('images/logo.png')}}">

    	<link rel="apple-touch-icon" sizes="120x120" href="{{@asset('images/logo.png')}}">

	    <link rel="apple-touch-icon" sizes="152x152" href="{{@asset('images/logo.png')}}">

		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta name="_token" content="{{ csrf_token() }}"/>
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- Document Title
		============================================= -->
		<title>Haveli</title>

		<style>

            footer{

                margin-top: 0px !important;

            }

        </style>

	</head>

<body class="stretched">
	
	<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<header id="header" class="full-header transparant">

				<div id="header-wrap">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<!-- Logo

							============================================= -->

							<div id="logo">

								<a href="/" class="standard-logo" data-dark-logo={{@asset('logo.png')}}><img src={{@asset('logo.png')}} alt="Logo"></a>

								<a href="/" class="retina-logo" data-dark-logo={{@asset('logo.png')}}><img src={{@asset('logo.png')}} alt="Logo"></a>

							</div><!-- #logo end -->

							<!-- Logo 
							============================================= -->

							@include('public.layouts.nav')
						
					</div>
				
				</div>
				
			</header>		

			@yield('slider')
			
			@yield('content')
			
			@include('public.layouts.footer')

	</div>		

<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	 @yield('extra-js')

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{@asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{@asset('js/functions.js')}}"></script>

	</body>

</html>