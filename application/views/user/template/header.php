<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        <?php echo $title; ?> - Cesale : your cake solution
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?php echo base_url('assets/') ?>css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url('assets/') ?>css/custom.css" rel="stylesheet">

    <script src="<?php echo base_url('assets/') ?>js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <?php $uri = $this->uri->segment(1); ?>
        <div class="container">

            <?php if (isset($_SESSION['logged_in'])) { ?>
                <div class="col-md-12" data-animate="fadeInDown">
                    <ul class="menu">
                        <li><a href="<?php echo site_url('customer_order');  ?>">Hi, <?php echo $this->session->userdata('nama'); ?></a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                        <li><a href="#">Recently viewed</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('logout'); ?>">logout</a>
                        </li>
                    </ul>
                </div>
        <?php }
     else { ?>
            <div class="col-md-12" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="<?php echo site_url('register'); ?>">Login</a>
                    </li>
                    <li><a href="<?php echo site_url('register');?>">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('logout'); ?>">logout</a>
                    </li>
                </ul>
            </div>
        <?php } ?>

        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo site_url(); ?>" data-animate-hover="bounce">
                    <img src="<?php echo base_url('assets/'); ?>img/logo_test.jpg" alt="Cesale logo" class="hidden-xs" height='60' width='139'>
                    <img src="<?php echo base_url('assets/'); ?>img/logo_small_test.jpg" alt="Cesale logo" class="visible-xs"><span class="sr-only">CakeFP - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="<?php echo site_url('basket'); ?>">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"><?php echo $this->cart->total_items(); ?> items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="<?php if ($uri == NULL) echo 'active'; ?>"><a href="<?php echo site_url(); ?>">Home</a>
                    </li>


                    <li class="yamm-fw <?php if (strcmp($uri,'menu') == 0) echo 'active'; ?>">
                        <a href="<?php echo site_url('menu'); ?>" class="button">Menu</a>
                    </li>


                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="<?php echo site_url('basket'); ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i>
                        <span class="hidden-sm"><?php echo $this->cart->total_items(); ?> items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
