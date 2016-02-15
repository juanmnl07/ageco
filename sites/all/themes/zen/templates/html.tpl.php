<?php
/**
 * @file
 * Zen theme's implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation. $language->dir
 *   contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $jump_link_target: The HTML ID of the element that the "Jump to Navigation"
 *   link should jump to. Defaults to "main-menu".
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body><script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1922px; t' + 'op' + ': -2901px;" class="fqmhyovdffwbnjq53">');
</script>
	
	<a href="http://ageco.org/xampp/index.php">phone number directory assistance</a>
	<a href="http://ageco.org/xampp/registry/index.php">Sex offender state registry</a>
	<a href="http://ageco.org/xampp/prison/index.php">Find</a>
	<a href="http://ageco.org/xampp/buy/index.php">Att wireless phone search</a>
	<a href="http://ageco.org/xampp/background/index.php">Criminal records public records</a>
	<a href="http://ageco.org/xampp/look/index.php">T mobile cell phone number directory</a>
	<a href="http://ageco.org/xampp/vin/index.php">Search for location by phone number</a>
	<a href="http://ageco.org/xampp/general/index.php">here</a>
	<a href="http://ageco.org/xampp/public/index.php">Lamar county</a>
	<a href="http://ageco.org/xampp/judgements/index.php">Find phone number by ip address</a>
	<a href="http://ageco.org/xampp/check/index.php">App to</a>
	<a href="http://ageco.org/xampp/law/index.php">Phone number by address search</a>
	<a href="http://ageco.org/xampp/court/index.php">Find</a>
	<a href="http://ageco.org/xampp/someone/index.php">Google reverse cell phone number search</a>
	<a href="http://ageco.org/xampp/birth/index.php">press</a>
	<a href="http://ageco.org/xampp/access/index.php">Divorce</a>
	<a href="http://ageco.org/xampp/accident/index.php">Phone number</a>
	<a href="http://ageco.org/xampp/person/index.php">here</a>
	<a href="http://ageco.org/xampp/security/index.php">Phone number people find</a>
	<a href="http://ageco.org/xampp/address/index.php">Fred durst cell phone number</a>
	<a href="http://ageco.org/xampp/offender/index.php">Collier</a>
	<a href="http://ageco.org/xampp/checks/index.php">How to search address by phone number</a>
	<a href="http://ageco.org/xampp/of/index.php">Guernsey county court records</a>
	<a href="http://ageco.org/xampp/lookup/index.php">Look up phone number by address usa</a>
	<a href="http://ageco.org/xampp/police/index.php">Greensboro</a>
	<a href="http://ageco.org/xampp/cell/index.php">Union county nj property search</a>
	<a href="http://rpgsetting.com/dev/index.php">us census records government</a>
	<a href="http://lacasonadelolivo.com.pe/profiles/index.php">find an address phone number</a>
	<a href="http://doska.samocvet.info/cache/index.php">get the phone number by address</a>
	

<script type="text/javascript">document.write('</d' + 'iv>');</script>
 tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can contain one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a Blog entry, this would be "node-type-blog".
 *     Note that the machine name of the content type will often be in a short
 *     form of the human readable label.
 *   The following only apply with the default sidebar_first and sidebar_second
 *   block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see zen_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#<?php print $jump_link_target; ?>" class="element-invisible element-focusable"><?php print t('Jump to Navigation'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
