<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cal Steel Bridge</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="lightbox/css/styles.css" type="text/css" media="screen" />

<?php
 require_once("lightbox/phpFlickr.php");
 $f = new phpFlickr("b16911dd0ec59f16ed66e80711edbdaf"); // API
 $user = "62176568@N05";
 $ph_sets = $f->photosets_getList($user);
?>

</head>

<body>
<div class="wrapper">
	<div class="header">
    	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="logo" height="150px" width="auto"/></a>
        </div>
    </div>
    
	<div class="nav_bar">
		<div class="table">
			<ul id="menu">
                <li class="about"><a href="about.php" class="nav_links">About</a></li>
                <li class="news"><a href="news.php" class="nav_links" >News</a></li>
                <li class="resources"><a href="resources.php" class="nav_links">Resources</a></li>
                <li class="photo"><a href="photos.php" class="nav_links" id="current">Photos</a></li>
                <li class="sponsors"><a href="sponsors.php" class="nav_links">Sponsors</a></li>
                <li class="contact"><a href="contact.php" class="nav_links">Contact</a></li>
            </ul>
        </div>
	</div>
    
    <div class="main">
		<div id="main_title">Photos</div>
		<div id="main_tagline">Witness all the excitement by browsing through some of our memories.</div>
	</div>
    
    <div id="gallery">
 <?php foreach ($ph_sets['photoset'] as $ph_set): ?>
  <div class="photosets">
  <div class="sub_title"><?php print $ph_set['title']; ?></div>
  <?php $photoset_id = $ph_set['id'];
  $photos = $f->photosets_getPhotos($photoset_id);
  foreach ($photos['photoset']['photo'] as $photo): ?>
  <div class="photos">
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

    
    <div class="buffer"></div>

</div>

<div class="footer">
    <div class="table">
    <div class="footer_sec"><div class="footer_title">University of California, Berkeley</div><div class="footer_cont"><ul><li><a href="http://berkeley.edu/" target="_blank">UC Berkeley</a></li><li><a href="http://coe.berkeley.edu" target="_blank">Berkeley Engineering</a></li><li><a href="http://ce.berkeley.edu" target="_blank">Civil & Environmental Engineering</a></li><li><a href="http://www.calasce.org/" target="_blank">Cal ASCE</a></li></ul></div></div>
    <div class="footer_sec"><div class="footer_title">Steel Bridge Competition 2012</div><div class="footer_cont"><ul><li><a href="http://www.aisc.org/WorkArea/showcontent.aspx?id=21576" target="_blank">Official 2012 Competition Rules</a></li><li><a href="http://www.aisc.org/content.aspx?id=3232" target="_blank">Official 2012 Rules Clarifications</a></li><li><a href="http://www.nssbc.info/index.htm" target="_blank">National Student Steel Bridge Competition Guide</a></li></ul></div></div>
    <div class="footer_sec"><div class="footer_title">Archive</div><div class="footer_cont"><ul><li><a href="http://www.aisc.org/content.aspx?id=7176" target="_blank">2011 National Student Steel Bridge Competition Results</a></li><li><a href="http://www.nssbc.info/History/2008NSSBCResults.pdf" target="_blank">2008 National Competition Results</a></li></ul></div></div>
    </div>
<div class="footer_nav"><a href="index.php" alt="home">Home</a> | <a href="about.php" alt="about">About</a> | <a href="news.php" alt="news">News</a> | <a href="photos.php" alt="photos">Photos</a> | <a href="sponsors.php" alt="sponsors">Sponsors</a> | <a href="contact.php" alt="contact">Contact</a></div>
<div class="break"></div>
<div>University of California, Berkeley © 2011 KML</div></div>

</body>
</html>
