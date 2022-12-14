<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head() ?>
</head>

<body <?php body_class('d-flex flex-column vh-100'); ?> style="height: 100vh">
  <header>
    <!-- Header -->
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-10">
          <navbar class="navbar navbar-expand-lg p-4">
            <!-- Logo -->
            <a href="<?= esc_url(get_home_url()) ?>" class="navbar-brand pr-4 border-right">
              <?php 
            if (function_exists('the_custom_logo')) {
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            }
            ?>
              <img class="img-fluid mb-3 mx-auto logo" src="<?= isset($image[0]) ? $image[0] : null; ?>" alt="logo">
            </a>
            <!-- Mobile Menu -->
            <button class="navbar-toggler" type="button" data-target="#navigation" data-toggle="collapse"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fas fa-bars"></i></span>
            </button>
            <!-- Menu And Search Field -->
            <div class="collapse navbar-collapse" id="navigation">
              <?php get_template_part('template-parts/header/nav') ?>
              <?php get_template_part('template-parts/header/search') ?>
            </div>
          </navbar>
        </div>
        <div class="col-lg-2 d-flex align-items-center justify-content-end pr-5 mb-4 mb-lg-0">
          <div>
            <?php if (is_user_logged_in()) : ?>
            <!-- <?= get_current_user(); ?> -->
            <span class="mr-3">
              <?= get_avatar(get_current_user_id(), 60); ?>
            </span>
            <a href="<?= wp_logout_url(site_url()) ?>">Log Out</a>

            <?php else: ?>
            <a href="<?= wp_login_url() ?>" class="mr-3">Login In</a>
            <a href="<?= wp_registration_url() ?>">Sign Up</a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </header>