<?$theSet = $_GET['id'];$theTitle = $_GET['title'];include('../setUp/preferences.php');   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/slimbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/themes/snow/styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/mootools.js"></script>
<script type="text/javascript" src="../js/slimbox.js"></script>
</head>
<body>
<div id="header">
  <div id="title"><? echo $siteName; ?></div>
  <div id="menu">
  </div>
</div>
<div id="pageTitle"><? echo "Photoset: ".$theTitle."<br /><br />\n\n<a href=\"sets.php\" class=\"backButton\">&lt;-back</a>"; ?></div>
<div id="photos">
  <? $flickr = getSet($theSet); ?>
</div>
<div id="imagediv" style="display: none; border: 1px solid white; position: absolute; left: 200px; top: 50px;" onclick="this.style.display = 'none';"><img id="bigimage" src="" /></div>
<script>  function showimage(src) {    var bigimage = document.getElementById('bigimage');    var imagediv = document.getElementById('imagediv');    bigimage.src = src;    imagediv.style.display = '';    }</script>
</body>
</html>