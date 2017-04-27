<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title><?php echo $title;?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="<?php echo $autor;?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $favicon;?>">

    <!-- Web Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/css/blocks.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/css/one.style.css">

    <!-- CSS Footer -->
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/css/footers/footer-v7.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/pace/pace-flash.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/owl-carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/plugins/shhos/shhos.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/css/app.style.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url('assetsln');?>/css/custom.css">
</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
<!-- Header -->
<nav class="one-page-header navbar navbar-default navbar-fixed-animate homeapp-header" data-role="navigation">
    <div class="container">
        <div class="menu-container page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#body">
                <img src="assets/img/logo-dark.png" alt="Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="menu-container">
                <ul class="nav navbar-nav">
                    <li class="page-scroll home">
                        <a href="#body">Inicio</a>
                    </li>



                    <li class="page-scroll">
                        <a href="#benefits">Beneficios</a>
                    </li>


                    <li class="page-scroll">
                        <a href="#subscribe">Newsletter</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#contact">Contato</a>
                    </li>
                    <li class="page-scroll hidden-xs hidden-sm">
                        <a href="<?php echo base_url('entrar');?>" class="btn-u btn-u-lg btn-u-green btn-u-upper rounded-2x">Entrar</a>
                    </li>


                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- End Header -->

