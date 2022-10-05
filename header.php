<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?> <header>
  <!-- Header -->
  <div class="container-fluid p-0">
    <navbar class="navbar navbar-expand-lg p-4">
      <a href="<?php get_home_url(); ?>" class="navbar-brand pr-4 border-right">
        <?php 
        if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        }
        ?>
        <img class="img-fluid mb-3 mx-auto logo" src="<?= isset($image[0]) ? $image[0] : null; ?>" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-target="#navigation" data-toggle="collapse"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <?php get_template_part('template-parts/nav') ?>
        <span class="pl-2">
          <i class="fas fa-search"></i>
        </span>
      </div>
    </navbar>
  </div>
  </header>