<header class="header--white">
  <div class="header__logo">
    <a href="<?php echo esc_url(home_url('/business')); ?>"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/logo_header_black.png" alt="WealthPark Business" /></a>
  </div>
  <?php include "business-header-menu.php" ?>
  <div class="header__button">
    <div class="button">
      <a href="<?php echo esc_url(home_url('/')); ?>business-contact/">お問合せ</a>
    </div>
  </div>
  <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
</header>
