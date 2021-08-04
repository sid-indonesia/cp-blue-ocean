<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#00a6e9">

	 <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="SUMMIT Institute of Development">
    <meta property="og:title" content="    <?php if 	( is_home() ) 		{ bloginfo('name');}
				elseif 	( is_category() ) 	{ single_cat_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_single() ) 	{ single_post_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_page() ) 		{ single_post_title(); echo ' - '; bloginfo('name'); }
                else 						{ wp_title('', true); } ?>" />
       <title>
    <?php if 	( is_home() ) 		{ bloginfo('name');}
				elseif 	( is_category() ) 	{ single_cat_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_single() ) 	{ single_post_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_page() ) 		{ single_post_title(); echo ' - '; bloginfo('name'); }
                else 						{ wp_title('', true); } ?>
    </title> 
    <!-- Favicon -->
    <link rel="icon" href="#">
    <!-- Core Stylesheet -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bundel.min.css" rel="stylesheet">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/mystyle.css" rel="stylesheet">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5eb2626df4076c0012cc07e9&product=inline-share-buttons' async='async'></script>
    <?php wp_head();?>
</head>

<body style="background-color: #fdfdfd;"
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="summit-preloader"></div>
    </div> -->

    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix sticky gradasi">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Mavbar Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html">
                                <!-- this one will be visible on everything else -->
                                <img class="d-none d-sm-block d-md-block d-xs-block" width="134px" height="26px"
                                    src="<?php echo get_bloginfo( 'template_directory' );?>/img/Logo-SUmmit-FIX.png" alt="logo SID">
                                <!-- this one will be visible on mobile -->
                                <img class="d-xs-none d-md-none d-sm-none" width="90px" height="16px"
                                    src="<?php echo get_bloginfo( 'template_directory' );?>/img/Logo-SUmmit-FIX.png" alt="logo SID">
                            </a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#summit-navbar" aria-controls="summit-navbar" aria-expanded="false"
                                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="summit-navbar">
                            <?php wp_bootstrap_main_nav(); 
                                 get_search_form();
                              ?>
                          
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Navbar Area End -->
            </div>
        </div>
    </header>
 <!-- ***** Header Area End ***** -->
