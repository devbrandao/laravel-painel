<!DOCTYPE html>
<html lang="en">
	<head>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	  	<meta name="description" content="">
	  	<meta name="author" content="ThemeBucket">
	  	<link rel="shortcut icon" href="#" type="image/png">

	  	<title>@yield('title', '')</title>

	  	{{ Asset::styles() }}
   		
	  	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  	<!--[if lt IE 9]>
	  		<script src="{{{ asset('assets/js/html5shiv.js') }}}"></script>
	  		<script src="{{{ asset('assets/js/respond.min.js') }}}"></script>
	  	<![endif]-->
	</head>

	<body class="sticky-header">

	<section>
	    <!-- left side start-->
	    <div class="left-side sticky-left-side">

	        <!--logo and iconic logo start-->
	        <div class="logo">
	            <a href="index.html"><img src="/assets/images/logo.png" alt=""></a>
	        </div>

	        <div class="logo-icon text-center">
	            <a href="index.html"><img src="/assets/images/logo_icon.png" alt=""></a>
	        </div>

	        <div class="left-side-inner">

	   			@include('partials.menu')

	        </div>
	    </div>

	    <div class="main-content" >

	    	@include('partials.navbar')

	        <div class="page-heading">
	            <h3>{{ $title }}</h3>

	            {{ Breadcrumbs::get() }}
	            
	        </div>
	       
	        <div class="wrapper">
	            @yield('content')
	        </div>

	        <footer class="sticky-footer">
	            {{ date('Y') }} &copy; sualoja.com
	        </footer>

	    </div>
	    <!-- main content end-->
	</section>

	{{ Asset::scripts() }}

	</body>
</html>