<?include('../setUp/preferences.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="/themes/snow/styles.css" type="text/css" media="screen" />
<? $style = getTheme($theme); ?>
</head>
<body>
<div id="header"> HEADER?
  <div id="title">SITE NAME</div>
  <div id="menu"> </div>
</div>
<div id="pageTitle">Photosets: </div>
<div id="photos">
  <? $flickr = getSets(); ?>
</div>
WILLY!
</body>
</html>