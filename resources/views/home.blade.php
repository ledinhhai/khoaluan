<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Environmental Monitoring">
    <meta name="author" content="HaiHamHo">

    <title>Environmental Monitoring</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	<link href="css/soon.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">EMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <h1 data-animated="GoIn"><b>Environmental Monitoring</b> site is coming soon...</h1>
					<!-- START TIMER -->
					<div id="timer" data-animated="FadeIn">
						<p id="message"></p>
						<div id="days" class="timer_box"></div>
						<div id="hours" class="timer_box"></div>
						<div id="minutes" class="timer_box"></div>
						<div id="seconds" class="timer_box"></div>
					</div>
					<!-- END TIMER -->
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
		<div class="row">
		  <div class="col-sm-6">
			<img src="img/about_bg.jpg" alt="" />
		  </div>
		  <div class="col-sm-6 text-center">
			<h2>Environmental monitoring </h2>
			<p class="lead">
			Environmental monitoring assists aquaculture operators controlling the environmental impacts of their operations
			Our specialists advise operators in finding optimal sites, and in planning the size and the design of aquaculture farms. 
			We give recommendations with regard to discharges to the sea according to local, national and international regulatory regulations and standards
			</p>
		  </div>
		</div>
	  </div>
    </section>
	
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>The address on Google maps</h2>
				</div>
			</div>
			<div id="google_map"></div>
		</div>
    </section>
	<!-- google map -->
	
	<!-- /google map -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	<script src="js/soon/plugins.js"></script>
    <script src="js/soon/jquery.themepunch.revolution.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/soon/custom.js"></script>
	
</body>

</html>
