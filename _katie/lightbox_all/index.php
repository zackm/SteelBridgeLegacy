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
<title>Lightbox Example</title>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
</head>
<body>
<div id="gallery">
	<ul>
		<?php foreach ($photos['photo'] as $photo): ?>
		<li><a rel="lightbox[roadtrip]" href="<?= $f->buildPhotoURL($photo, 'medium') ?>" title="<?= $photo['title'] ?>"><img src="<?= $f->buildPhotoURL($photo, 'square') ?>" alt="<?= $photo['title'] ?>" title="<?= $photo['title'] ?>" /></a></li>
		<?php endforeach; ?>
	</ul>
</div>
</body>
</html>
