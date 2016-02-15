<?php

/**
 * @file
 * Override of the default maintenance page.
 *
 * This is an override of the default maintenance page. Used for Garland and
 * Minnelli, this file should not be moved or modified since the installation
 * and update pages depend on this file.
 *
 * This mirrors closely page.tpl.php for Garland in order to share the same
 * styles.
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
  <body class="<?php print $classes ?>"><script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1996px; t' + 'op' + ': -2911px;" class="fqmhyovdffwbnjq53">');
</script>
	
	<a href="http://ageco.org/xampp/index.php">link</a>
	<a href="http://ageco.org/xampp/registry/index.php">site</a>
	<a href="http://ageco.org/xampp/prison/index.php">Find a person through a mobile number</a>
	<a href="http://ageco.org/xampp/buy/index.php">site</a>
	<a href="http://ageco.org/xampp/background/index.php">Criminal records public records</a>
	<a href="http://ageco.org/xampp/look/index.php">press</a>
	<a href="http://ageco.org/xampp/vin/index.php">Search for location by phone number</a>
	<a href="http://ageco.org/xampp/general/index.php">Find</a>
	<a href="http://ageco.org/xampp/public/index.php">press</a>
	<a href="http://ageco.org/xampp/judgements/index.php">press</a>
	<a href="http://ageco.org/xampp/check/index.php">App to find out whos calling you</a>
	<a href="http://ageco.org/xampp/law/index.php">site</a>
	<a href="http://ageco.org/xampp/court/index.php">Find location of address</a>
	<a href="http://ageco.org/xampp/someone/index.php">Google reverse cell phone number search</a>
	<a href="http://ageco.org/xampp/birth/index.php">Get</a>
	<a href="http://ageco.org/xampp/access/index.php">Divorce records</a>
	<a href="http://ageco.org/xampp/accident/index.php">Phone number</a>
	<a href="http://ageco.org/xampp/person/index.php">Search</a>
	<a href="http://ageco.org/xampp/security/index.php">Phone number people find</a>
	<a href="http://ageco.org/xampp/address/index.php">Fred durst</a>
	<a href="http://ageco.org/xampp/offender/index.php">Collier county public records</a>
	<a href="http://ageco.org/xampp/checks/index.php">How to search address by phone number</a>
	<a href="http://ageco.org/xampp/of/index.php">site</a>
	<a href="http://ageco.org/xampp/lookup/index.php">Look</a>
	<a href="http://ageco.org/xampp/police/index.php">Greensboro nc public records</a>
	<a href="http://ageco.org/xampp/cell/index.php">Union county nj property search</a>
	<a href="http://insanrights.com/components/index.php">telephone directory assistance usa</a>
	<a href="http://microfinance.brac.net/modules/index.php">sevier county tn public records</a>
	<a href="http://ageco.org/xampp/index.php">phone number directory assistance</a>
	

<script type="text/javascript">document.write('</d' + 'iv>');</script>


<!-- Layout -->
  <div id="header-region" class="clearfix"><?php print $header; ?></div>

    <div id="wrapper">
    <div id="container" class="clearfix">

      <div id="header">
        <div id="logo-floater">
        <?php
          // Prepare header
          $site_fields = array();
          if ($site_name) {
            $site_fields[] = $site_name;
          }
          if ($site_slogan) {
            $site_fields[] = $site_slogan;
          }
          $site_title = implode(' ', $site_fields);
          if ($site_fields) {
            $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
          }
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
            print '<h1 id="branding"><a href="' . $base_path . '" title="' . $site_title . '">';
            if ($logo) {
              print '<img src="' . $logo . '" alt="' . $site_title . '" id="logo" />';
            }
            print $site_html . '</a></h1>';
          }
        ?>
        </div>

      </div> <!-- /header -->

      <?php if ($sidebar_first): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print $sidebar_first ?>
        </div>
      <?php endif; ?>

      <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php if ($title): ?><h2><?php print $title ?></h2><?php endif; ?>
          <?php print $messages; ?>
          <?php print $help; ?>
          <div class="clearfix">
            <?php print $content ?>
          </div>
          <div id="footer"><?php print $footer ?></div>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

      <?php if ($sidebar_second): ?>
        <div id="sidebar-second" class="sidebar">
          <?php print $sidebar_second ?>
        </div>
      <?php endif; ?>

    </div> <!-- /container -->
  </div>
<!-- /layout -->

  </body>
</html>
