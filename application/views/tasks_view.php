<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DARU|HOME</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url('../static/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('../static/css/freelancer.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('../static/font-awesome/css/font-awesome.css')?>" rel="stylesheet" type="text/css">
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
 <div style="background-image:url(<?=base_url('../static/images/main_bg.png')?>;Background-repeat:default>
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
                        <a href="#about">Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">SignUp</a>
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

                         <span class="skills">Test Yourself Now !!!!</span>

                    </div>
                </div>
            </div>
        </div>
    </header>


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


   <center>
	  <div style="background-color:#FFFFFF;width:1100px;">   <!-- main block -->
     <p>
     <form action="<?php echo base_url('tasks/subject1') ; ?>" method="post">
         <label>
             <h3>
                 Subject 1
             </h3>
         </label>
        <input type="submit" value="subject1" placeholder ="go" />
        </form>
     </p>
     <p>
     <form action="<?php echo base_url('tasks/subject2') ; ?>" method="post">
         <label>
             <h3>
                 Subject 1
             </h3>
         </label>
        <input type="submit" value="subject2" placeholder ="go" />
        </form>
     </p>
		</div>
   </center>
  </div>
</body>

</html>
