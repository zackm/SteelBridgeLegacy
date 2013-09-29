<? include('../setUp/preferences.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photos | Cal Steel Bridge</title>
<!--<link rel="stylesheet" href="/themes/snow/styles.css" type="text/css"/>-->

<link rel="stylesheet" href="../style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="lightbox/css/styles.css" type="text/css" media="screen" />

<?php
 require_once("lightbox/phpFlickr.php");
 $f = new phpFlickr("72ac8a8a200a38d173077041342ed991"); // API
 $user = "68286384@N08";
 $ph_sets = $f->photosets_getList($user);
?>

<link rel="shortcut icon" href="/favicon.ico">
</head>

<body>
<div class="wrapper">
<div class="hwrap">
	<div class="header">
        <div class="header_left"><a href="http://steelbridge.berkeley.edu"><img id="cal" src="../images/cal.png" /></a></div>
        <div class="header_right">
        	<div class="header_right_top">
        	<a href="http://steelbridge.berkeley.edu"><img id="steelbridge" src="../images/steelbridge.png"/></a>
            </div>
            <div class="header_right_bottom">
            	<div class="table">
                    <div class="nav_bar">
                          <ul id="menu">
                              <li class="about"><a href="../about" class="nav_links">About</a></li>
                              <li class="news"><a href="../news" class="nav_links">News</a></li>
                              <li class="design"><a href="../design" class="nav_links" >Design</a></li>
                              <li class="photo"><a href="../photos" class="nav_links" id="current">Photos</a></li>
                              <li class="sponsors"><a href="../sponsors" class="nav_links">Sponsors</a></li>
                              <li class="contact"><a href="../contact" class="nav_links">Contact</a></li>
                          </ul>
                    </div>
            	</div>
       		</div>
		</div>
	</div>
    </div>
    
    <div class="banner">
    <img src="../images/photos.jpg"/>
    </div>
    
    <div class="main">
    <div class="heading">The Collection</div>
    <div class="sets">
<?php foreach ($ph_sets['photoset'] as $ph_set): ?>
  <div class="photosets">
  <div class="sub_title"><?php print $ph_set['title']; ?></div>
  <?php $photoset_id = $ph_set['id'];
  $photos = $f->photosets_getPhotos($photoset_id);
  foreach ($photos['photoset']['photo'] as $photo): ?>
  <div class="photos" id="images">
   <a rel="lightbox[]"
     href="<?= $f->buildPhotoURL($photo, 'medium') ?>"
     title="<?= $photo['title'] ?>">
   <img src="<?= $f->buildPhotoURL($photo, 'square') ?>"
     alt="<?= $photo['title'] ?>" title="<?= $photo['title'] ?>" />
   </a>
  </div>
  <?php endforeach; ?>
  <div class="break"></div>
  </div>
 <?php endforeach; ?>  
    </div>
    </div>
    
    <div class="push"></div>
    
    <div class="buffer"></div>
</div>

<div class="footer">
	<div class="ocflogo"><a href="http://www.ocf.berkeley.edu"><img src="http://www.ocf.berkeley.edu/images/hosted-logos/ocfbadge_platinum.png" alt="Hosted by the OCF" width="128" height="36" style="border:0"/></a></div>
    <div class="table">
    <div class="footer_sec"><div class="footer_title">University of California, Berkeley</div><div class="footer_cont"><ul><li><a href="http://berkeley.edu/" target="_blank">UC Berkeley</a></li><li><a href="http://coe.berkeley.edu" target="_blank">Berkeley Engineering</a></li><li><a href="http://ce.berkeley.edu" target="_blank">Civil & Environmental Engineering</a></li><li><a href="http://www.calasce.org/" target="_blank">Cal ASCE</a></li></ul></div></div>
    <div class="footer_sec"><div class="footer_title">Steel Bridge Competition 2012</div><div class="footer_cont"><ul><li><a href="http://www.aisc.org/WorkArea/showcontent.aspx?id=21576" target="_blank">Official 2012 Competition Rules</a></li><li><a href="http://www.aisc.org/content.aspx?id=3232" target="_blank">Official 2012 Rules Clarifications</a></li><li><a href="http://www.nssbc.info/index.htm" target="_blank">National Student Steel Bridge Competition Guide</a></li></ul></div></div>
    <div class="footer_sec"><div class="footer_title">Archive</div><div class="footer_cont"><ul><li><a href="http://www.aisc.org/content.aspx?id=7176" target="_blank">2011 National Student Steel Bridge Competition Results</a></li><li><a href="http://www.nssbc.info/History/2008NSSBCResults.pdf" target="_blank">2008 National Competition Results</a></li></ul></div></div>
    </div>
<div class="footer_nav"><a href="../index.php" alt="home">Home</a> | <a href="../about" alt="about">About</a> | <a href="../design" alt="design">Design</a> | <a href="../photos" alt="photos">Photos</a> | <a href="../sponsors" alt="sponsors">Sponsors</a> | <a href="../contact" alt="contact">Contact</a></div>
<div class="break"></div>
<div>University of California, Berkeley © 2011 SteelBridgeatCal</div>
</div>

</body>
</html>
