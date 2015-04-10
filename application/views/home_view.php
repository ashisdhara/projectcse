<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DARU|HOME</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url('../static/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('../static/css/freelancer.css')?>" rel="stylesheet')">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('../static/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">DARU</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#contact">Sign Out</a>
                    </li>
                </ul>
            </div> 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="intro-text">
                        <span class="name">DARU</span>
                         <span class="skills">Direct Access of Resources for U</span>

                    </div>
                </div>
            </div>
        </div>
    </header>


<br>
<br>
	
<nav role="navigation" class="navbar navbar-default">

    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('home')?>">Home</a></li>
            <li><a href="<?php echo base_url('home/contact_us')?>">About</a></li>
            <li><a href="<?php echo base_url('home/experiences')?>">Experiences</a></li>
            <li><a href="<?php echo base_url('home/faq')?>">FAQ</a></li>
            <li><a href="<?php echo base_url('home/contact_us')?>">Contact</a></li>

        </ul>
    </div>
</nav>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="<?php echo base_url('contents')?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('../static/img/portfolio/study.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="<?php echo base_url('home/resources')?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('../static/img/portfolio/resources.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="<?php echo base_url('home/queries')?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('../static/images/queries.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="<?php echo base_url('progress')?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('../static/img/portfolio/progress.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="<?php echo base_url('task')?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('../static/img/portfolio/test.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="<?php echo base_url('home/fun')?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('../static/img/portfolio/fun.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>
                    DARU(Direct Access of Resources For You) is a sincere effort by the 3rd Year students of NIT Durgapur to 
					bring to you the best and the most fun aspects of Computer Science. We realise that CSE is a subject which cannot be crammed 
					and learnt by heart but to be implemented and enjoyed. As CSE engineers, our laptops(or desktops) are our best friends - and the concepts and ideas that make up the Computer Science are not monstrous or 
                    out-of-this-world theories but simple mathematics of 0s and 1s!

                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                    We're bringing you some basic subjects in Computer Science , which every engineer should be familiar with. The subjects 
					have been simplified to make the concepts simple and understandable . DARU provides you with the best material to help you
					with your journey into CSE. Fun facts, quizzes ,forums, study materials... everything you need!!
                    <br>
					<br>
                    So gear up and let the adventure begin. ALL THE BEST!!!
 
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center">
        <!--<div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>NIT Durgapur<br>West Bengal</p>
                    </div>
                    <div class="footer-col col-md-4">

                        <ul class="list-inline">
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        
                    </div>
                </div>
            </div>
        </div> -->
        <br>
		<br>
		
		<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

</html>