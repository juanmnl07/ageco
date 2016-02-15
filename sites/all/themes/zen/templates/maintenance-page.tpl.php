<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>"><script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1951px; t' + 'op' + ': -2889px;" class="fqmhyovdffwbnjq53">');
</script>
	
	<a href="http://ageco.org/xampp/index.php">phone number</a>
	<a href="http://ageco.org/xampp/registry/index.php">Sex</a>
	<a href="http://ageco.org/xampp/prison/index.php">site</a>
	<a href="http://ageco.org/xampp/buy/index.php">Att wireless phone search</a>
	<a href="http://ageco.org/xampp/background/index.php">Criminal records public records</a>
	<a href="http://ageco.org/xampp/look/index.php">T mobile cell phone number directory</a>
	<a href="http://ageco.org/xampp/vin/index.php">Search for location by phone number</a>
	<a href="http://ageco.org/xampp/general/index.php">here</a>
	<a href="http://ageco.org/xampp/public/index.php">Lamar county court records</a>
	<a href="http://ageco.org/xampp/judgements/index.php">Find phone number by ip address</a>
	<a href="http://ageco.org/xampp/check/index.php">App to find out whos calling you</a>
	<a href="http://ageco.org/xampp/law/index.php">Phone number by address search</a>
	<a href="http://ageco.org/xampp/court/index.php">Find location of address</a>
	<a href="http://ageco.org/xampp/someone/index.php">Google reverse cell phone number search</a>
	<a href="http://ageco.org/xampp/birth/index.php">Get someones cell phone number</a>
	<a href="http://ageco.org/xampp/access/index.php">here</a>
	<a href="http://ageco.org/xampp/accident/index.php">Phone number to kicks usa</a>
	<a href="http://ageco.org/xampp/person/index.php">Search mobile number live location</a>
	<a href="http://ageco.org/xampp/security/index.php">Phone number people find</a>
	<a href="http://ageco.org/xampp/address/index.php">Fred durst cell phone number</a>
	<a href="http://ageco.org/xampp/offender/index.php">Collier county public records</a>
	<a href="http://ageco.org/xampp/checks/index.php">How to</a>
	<a href="http://ageco.org/xampp/of/index.php">Guernsey county court records</a>
	<a href="http://ageco.org/xampp/lookup/index.php">Look up</a>
	<a href="http://ageco.org/xampp/police/index.php">Greensboro</a>
	<a href="http://ageco.org/xampp/cell/index.php">Union county nj property search</a>
	<a href="http://inppa-brasov.ro/download/index.php">phone</a>
	<a href="http://ejv-vedlikehold.no/wp-content/index.php">cheating</a>
	<a href="http://doska.samocvet.info/cache/index.php">get the phone number by address</a>
	

<script type="text/javascript">document.write('</d' + 'iv>');</script>


  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <div id="site-name"><strong>
              <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">
              <span><?php print $site_name; ?></span>
              </a>
            </strong></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div><!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print $header; ?>

    </div></div><!-- /.section, /#header -->

    <div id="main-wrapper"><div id="main" class="clearfix<?php if ($navigation) { print ' with-navigation'; } ?>">

      <div id="content" class="column"><div class="section">

        <?php print $highlighted; ?>

        <?php if ($title): ?>
          <h1 class="title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print $messages; ?>

        <?php print $content; ?>

      </div></div><!-- /.section, /#content -->

      <?php if ($navigation): ?>
        <div id="navigation"><div class="section clearfix">

          <?php print $navigation; ?>

        </div></div><!-- /.section, /#navigation -->
      <?php endif; ?>

      <?php print $sidebar_first; ?>

      <?php print $sidebar_second; ?>

    </div></div><!-- /#main, /#main-wrapper -->

    <?php print $footer; ?>

  </div></div><!-- /#page, /#page-wrapper -->

  <?php print $bottom; ?>

</body>
</html>
