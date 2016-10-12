<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/img/favicon.ico">

        <?php wp_head(); ?>
    </head>
    <body class="home-2">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header-area start -->
        <header id="header" class="header-area">
            <div class="header-bottom">
                <?php get_template_component( 'nav-menu' ); ?>
            </div><!-- /.header-bottom -->
        </header>
        <!-- header-area end -->

        <!-- search-area start -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <span class="search-close"></span>
                            <form action="#" method="post">
                                <input type="text" placeholder="Search here..."/>
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area end -->