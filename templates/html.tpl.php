<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single Drupal page.
 */
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="nl-NL"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="nl-NL"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="nl-NL"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="nl-NL"> <!--<![endif]-->
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <nav class="skip-link invisible">
      <a href="#primary-content"><?php print t('Skip to content'); ?></a>
    </nav>
    <!--[if lt IE 9]>
      <p class="browser-upgrade">Je gebruikt <strong>een hele oude</strong> browser. Op <a href="http://browsehappy.com/">browsehappy.com</a> vind je veilige en moderne browsers.</p>
    <![endif]-->
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>
