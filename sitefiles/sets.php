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
</head>
<body>
<div id="header">
  <div id="title">Site Name</div>
  <div id="menu">
    <? include('menu.php'); ?>
  </div>
</div>
<div id="pageTitle">Photosets: </div>
<div id="photos">
  <? $flickr = getSets(); ?>
</div>
</body>
</html>