<?php
ini_set ('display_errors', 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<?

include('setUp/preferences.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $siteTitle; ?></title>
<link href="shared/global_styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="shared/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="shared/prototype.js"></script>
<script type="text/javascript" src="shared/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="shared/lightbox.js"></script>
</head>
<body>
<div id="header">
  <div id="title">Site Name</div>
  <div id="menu">
    <? include('menu.php'); ?>
  </div>
</div>
<div id="pageTitle">&nbsp;</div>
<div id="homeImg">
  <div id="top"></div>
  <? $flickr = getSingleImage("random", "large"); ?>
  <div style="margin-top: 20px; ">powered by <a href="http://design.tedforbes.com" target="_blank">Satellite&trade;</a> and a <a href="http://flickr.com/photos/<? echo $user; ?>/" target="_blank">Flickr Account</a></div>
  <div id="bottom"></div>
</div>
</div>
</body>
</html>