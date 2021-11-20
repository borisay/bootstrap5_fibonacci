<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 */
?>
<!-- <header id="navbar" role="banner" class="<?php print implode(" ",$navbar_classes_array); ?>"> -->
<nav id="navbar" role="banner" class="<?php print implode(" ",$navbar_classes_array); ?>">
  <div class=" <?php print $container_class;?>">
    <!-- <div class="navbar-header"> -->
      <?php if ($site_name || $logo): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <?php if ($logo): ?>
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          <?php endif; ?>
          <?php if ($site_name): ?>
            <?php print $site_name; ?>
          <?php endif; ?>
        </a>
      <?php endif; ?>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- </div> -->

    <?php if ($navigation or $menu): ?>

      <!-- <div class="navbar-collapse <?php print $navbar_menu_position; ?>"> -->
      <div class="navbar-collapse">
      <!-- <div class="block-content"> -->
        <!-- <input id="menu-toggle-state" class="menu-toggle-state element-invisible" type="checkbox" aria-controls="menu-toggle-state">
        <label class="menu-toggle-button" for="menu-toggle-state">
          <span class="menu-toggle-button-icon"></span>
          <span class="menu-toggle-button-text">Menu</span>
          <span class="menu-toggle-assistive-text element-invisible">Toggle menu visibility</span></label> -->
        <!-- <div id="phone" class="open-search"><span class="search-toggle-button-icon"><i class="bi-search" aria-hidden="true"></i></span></div> -->
        <!-- <div class="menu-tree menu menu-style-processed menu-toggles-processed" data-menu-style="tree" data-clickdown="0" data-menu-toggle-id="menu-toggle-state" style=""> -->
        <div class="menu-tree menu  collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <?php if ($menu) print $menu; ?>
          <?php if ($navigation) print $navigation; ?>

      <div class="open-search"><span class="search-toggle-button-icon"><i class="bi-search" aria-hidden="true"></i></span></div>

        </div>

      <!-- </div> -->
    <?php endif; ?>


  </div>
</header>
<header role="banner" id="page-header">
  <?php if (!empty($site_slogan)): ?>
    <p class="lead site-slogan container"><?php print $site_slogan; ?></p>
  <?php endif; ?>
<!-- </header> /#page-header -->
  </nav>
