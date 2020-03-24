<?php 
/**
 * The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/
   ?>
<!doctype html>
<html <?php language_attributes(); ?> >
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/bootsnav.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">
   </head>
   <body <?php body_class(); ?>>

   	<div class="row">
   		<div class="col-md-12 logo">
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>"> <img src="<?php 
             echo get_template_directory_uri(); ?>/assets/images/mobio-logo.png" alt="Company Logo" /> </a>
   		</div>
   		<div class="col-md-12">
        <?php 
             wp_nav_menu( array(
                'menu' => 'Top Menu',
                'menu_class' => 'nav topnav',
                'container' => 'false'
             ) ); ?>
   		</div>
   	</div>