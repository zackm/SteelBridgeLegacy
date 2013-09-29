<?php

/**
 * @author Mauro Pirrone (www.mauropirrone.com)
 * @version 1.0
 */

require_once("phpFlickr/phpFlickr.php");

/**
 * You may get your API key from
 * http://www.flickr.com/services/api/keys
 */
$f = new phpFlickr("9493c81dea61f7c44eefb72de33f4afa"); 

/**
 * Change this to your photoset id
 *
 * Note that the photoset id is part of the URL
 * For e.g. http://www.flickr.com/photos/26262208@N07/sets/72157605353756648/
 */
$photoset_id = '72157627565247344';

$photos = $f->photosets_getPhotos($photoset_id);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cal Steel Bridge</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link rel="stylesheet" href="css/lightbox.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
</head>

<body>
<div class="wrapper">
	<div class="header">
    	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="logo" height="150px" width="auto"/></a>
        </div>
    </div>
    
    <div class="nav_bar">
		<div class="menu">
			<div class="table">
			<ul>
                <li class="nav_links"><a href="about.php" class="nav_links"><span></span>About</a></li>
                <li class="nav_links"><a href="news.php" class="nav_links" ><span></span>News</a></li>
                <li class="nav_links"><a href="resources.php" class="nav_links"><span></span>Resources</a></li>
                <li class="nav_links"><a href="photos.php" class="nav_links" id="current"><span></span>Photos</a></li>
                <li class="nav_links"><a href="sponsors.php" class="nav_links"><span></span>Sponsors</a></li>
                <li class="nav_links"><a href="contact.php" class="nav_links"><span></span>Contact Us</a></li>
            </ul>
			</div>
		</div>
    </div>
    
    <div class="main">
		<div id="main_title">Photos</div>
		<div id="main_tagline">Witness all the excitement by browsing through some of our memories.</div>
	</div>
    
    <div id="gallery">
	<ul>
		<?php foreach ($photos['photo'] as $photo): ?>
		<li><a rel="lightbox[roadtrip]" href="<?= $f->buildPhotoURL($photo, 'medium') ?>" title="<?= $photo['title'] ?>"><img src="<?= $f->buildPhotoURL($photo, 'square') ?>" alt="<?= $photo['title'] ?>" title="<?= $photo['title'] ?>" /></a></li>
		<?php endforeach; ?>
	</ul>
</div>
    
    <div class="buffer"></div>
    <div class="footer">University of California, Berkeley © 2011 KML</div>
</div>
</body>
</html>
