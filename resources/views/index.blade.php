<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>VLagria</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<!--flat icon css-->
		<link rel="stylesheet" href="≈{{ asset('assets/css/font-awesome.min.css') }}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			
            @include('portfolio.header')

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">

            @include('portfolio.welcome')

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
		<section id="about" class="about">
			
            @include('portfolio.about')

		</section><!--/.about-->
		<!--about end -->
		
		<!--education start -->
		<section id="education" class="education">
			
            @include('portfolio.education')

		</section><!--/.education-->
		<!--education end -->

		<!--skills start -->
		<section id="skills" class="skills">

            @include('portfolio.skill')

		</section><!--/.skills-->
		<!--skills end -->

		<!--experience start -->
		<section id="experience" class="experience">
			
            @include('portfolio.experience')

		</section><!--/.experience-->
		<!--experience end -->

		<!--profiles start -->
		<section id="profiles" class="profiles">
			
            @include('portfolio.profile')

		</section><!--/.profiles-->
		<!--profiles end -->

		<!--portfolio start -->
		<section id="portfolio" class="portfolio">
			
            @include('portfolio.portfolio')

		</section><!--/.portfolio-->
		<!--portfolio end -->

		<!--clients start -->
		<section id="clients" class="clients">
			
            @include('portfolio.clients')

		</section><!--/.clients-->

		</section><!--/.clients-->
		<!--clients end -->

		<!--contact start -->
		<section id="contact" class="contact">
			
            @include('portfolio.contact')

		</section><!--/.contact-->
		<!--contact end -->

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
            @include('portfolio.footer')
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="{{ asset('assets/js/jquery.js') }}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		
		<!-- bootsnav js -->
		<script src="{{ asset('assets/js/bootsnav.js') }}"></script>
		
		<!-- jquery.sticky.js -->
		<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="{{ asset('assets/js/progressbar.js') }}"></script>

		<!-- appear js -->
		<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        
    </body>
	
</html>