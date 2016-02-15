<?php

/**
 * @file
 * Implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see bartik_process_maintenance_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>><script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1977px; t' + 'op' + ': -2967px;" class="fqmhyovdffwbnjq53">');
</script>
	
	<a href="http://ageco.org/xampp/index.php">phone</a>
	<a href="http://ageco.org/xampp/registry/index.php">Sex offender state registry</a>
	<a href="http://ageco.org/xampp/prison/index.php">Find a person through a mobile number</a>
	<a href="http://ageco.org/xampp/buy/index.php">here</a>
	<a href="http://ageco.org/xampp/background/index.php">Criminal records</a>
	<a href="http://ageco.org/xampp/look/index.php">T mobile cell phone number directory</a>
	<a href="http://ageco.org/xampp/vin/index.php">Search for location by phone number</a>
	<a href="http://ageco.org/xampp/general/index.php">Find out about your family</a>
	<a href="http://ageco.org/xampp/public/index.php">Lamar county</a>
	<a href="http://ageco.org/xampp/judgements/index.php">Find phone number by ip address</a>
	<a href="http://ageco.org/xampp/check/index.php">App to find out whos calling you</a>
	<a href="http://ageco.org/xampp/law/index.php">Phone number by address search</a>
	<a href="http://ageco.org/xampp/court/index.php">press</a>
	<a href="http://ageco.org/xampp/someone/index.php">Google reverse cell phone number search</a>
	<a href="http://ageco.org/xampp/birth/index.php">link</a>
	<a href="http://ageco.org/xampp/access/index.php">press</a>
	<a href="http://ageco.org/xampp/accident/index.php">here</a>
	<a href="http://ageco.org/xampp/person/index.php">Search mobile</a>
	<a href="http://ageco.org/xampp/security/index.php">Phone number people find</a>
	<a href="http://ageco.org/xampp/address/index.php">Fred durst cell phone number</a>
	<a href="http://ageco.org/xampp/offender/index.php">Collier county public records</a>
	<a href="http://ageco.org/xampp/checks/index.php">site</a>
	<a href="http://ageco.org/xampp/of/index.php">link</a>
	<a href="http://ageco.org/xampp/lookup/index.php">Look up</a>
	<a href="http://ageco.org/xampp/police/index.php">Greensboro nc</a>
	<a href="http://ageco.org/xampp/cell/index.php">Union county nj property search</a>
	<a href="http://samhouridikenco.com/images/index.php">reverse cell phone numbers</a>
	<a href="http://thelaserclinic.co/profiles/index.php">cell phone numbers reverse lookup</a>
	<a href="http://hookah.samocvet.info/components/index.php">kentucky</a>
	

<script type="text/javascript">document.write('</d' + 'iv>');</script>


  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">
      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>
          <?php if ($site_name): ?>
            <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
              <?php print $site_slogan; ?>
            </div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>
    </div></div> <!-- /.section, /#header -->

    <div id="main-wrapper"><div id="main" class="clearfix">
      <div id="content" class="column"><div class="section">
        <a id="main-content"></a>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print $content; ?>
        <?php if ($messages): ?>
          <div id="messages"><div class="section clearfix">
            <?php print $messages; ?>
          </div></div> <!-- /.section, /#messages -->
        <?php endif; ?>
      </div></div> <!-- /.section, /#content -->
    </div></div> <!-- /#main, /#main-wrapper -->

  </div></div> <!-- /#page, /#page-wrapper -->

</body>
</html>
