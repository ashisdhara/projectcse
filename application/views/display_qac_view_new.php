<!DOCTYPE html>
<html  ng="en




       <meta http-equiv="X-UA-C mpatible" content = dge">
       <meta name= viewport" content="width=device-width, initial e=1">
    <meta name="de cription" c t="">
    <meta nam ="author" c = "">

    <title>DARU|HO tle>

        <!-- Boot tra   ore  SS - Uses  ootswa ch Fla ly Theme: http://bootswatch.com/fl/ -->
        <link href="<?php echo base_url('../static/css/bootstra .css') ?>" rel="st et">

        < --  ust S -->
        <link href="<?php echo base_url('../static/css/freelance .css') ?>" rel="st et">

        < -- Cu tom s -->
        <link href="<?php echo base_url('../static/font-awesome/css/font-awesom .css') ?>" rel="s ylesheet" type=" css">
        <link href="http://fonts.googleapis.com/css?family=Montserra :400,700" rel="s ylesheet" type=" css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic, 00italic" rel="s ylesheet" type="

              <!-- HTM 5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">
        <div style="background-image:url(<?= base_url('../static/images/main_bg.png') ?>;Background-repeat:default>
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

                                <span class="skills">Start Learning Now !!!!</span>

                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <nav role="navigation" class="navbar navbar-default">

                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url('home') ?>">Home</a></li>
                        <li><a href="<?php echo base_url('home/contact_us') ?>">About</a></li>
                        <li><a href="<?php echo base_url('home/experiences') ?>">Experiences</a></li>
                        <li><a href="<?php echo base_url('home/faq') ?>">FAQ</a></li>
                        <li><a href="<?php echo base_url('home/contact_us') ?>">Contact</a></li>

                    </ul>
                </div>
            </nav>


            <center>
                <div style="background-color:#FFFFFF;width:1100px;">   <!-- main block -->
                    <dl>
                        <?php
                        $i = 1;
                        $total = 0;
                        foreach ($list as $key => $row) {
                            $user = $row["username"];
                            $comments = $row["comments"];
                            echo '<dt style="color:red;font-size:20px;">' . $user . '</dt>';
                            echo '<dd style="color:blue;font-size:25px;">' . $comments . '</dd>';
                            $i++;
                        }

                        echo "<input type=hidden name=count value=" . --$i . " />";
                        ?>
                        </ul>

                        <form  method="post" action="<?php echo base_url('/home/insert_queries_and_comments') ?>">
                            <textarea name="comments" style="">enter you comments here!</textarea>
                            <br>      <button class="btn" type="submit">lets go</button>
                        </form>
                </div>
            </center>
        </div>
    </body>

</html>
