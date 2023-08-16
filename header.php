<?php

/**
 * The Header
 * 
 * holds the navigation and allows styles loading and holds the opening body tag
 */
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo the_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head();?>

    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div class="fixed-top boxed-shadowed">

        <?php get_template_part( 'template-parts/header/top-bar' ); ?>
        <?php get_template_part( 'template-parts/header/main-bar' ); ?>

        </div>