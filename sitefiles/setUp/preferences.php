<?php

// The following are the user options. Set them up for your application.

$user = "68286384@N08"; // this is your flickr id ex. 78354145@N00
$apikey = "0a464b7410057974f6239f136f782a06"; // insert your flickr API key

$siteTitle = "Powered by Satellite&trade;"; // this is the title that appears at the top of the browser window and bookmarks.

$tagCount = 150; // This is the limit on how many tags will appear in the tag section. Adjust this if you like.

// Omit list = you can add or take away as many as you want, just follow the format
// These are tags that you don't want displayed, even though they might be used
// in your flickr account.
$omit[] = "dallas";
$omit[] = "tmaxrs";
$omit[] = "fujineopan400";
$omit[] = "100v10f";
$omit[] = "3200";

// That's it!

// Don't change anything below this line
// _________________________________________________________________________________________




function getSingleImage($which, $size) {
	
	if ($which=="random") $which=rand(1, 56);
	
	if ($size=="medium") {
		$size="_m";
	} else {
		$size="";
	}
	
	global $user;
	global $apikey;
	
	$method = 'flickr.photos.search';
	$params['user_id'] = $user;
	$params['per_page'] = 56;
	
	
	$request_url = 'http://www.flickr.com/services/rest/?';
	
	if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	
	foreach ($params as $var => $val) {
		$var = urlencode($var);
		$val = urlencode($val);
		$request_url .= "&$var=$val";
	}
	
	$response = file_get_contents($request_url);
	$simplexml = simplexml_load_string($response);
	
	$photos = $simplexml->xpath("//photo");
	
	$i = 0;
	
	foreach ($photos as $photo) {
		if ($i==$which) {
			$id = $photo['id'];
			$server = $photo['server'];
			$secret = $photo['secret'];
			echo "<img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."$size.jpg\" alt=\"\" />";
	  	}
		$i++;
	}
}

function getSets() {

	global $user;
	global $apikey;
	
	$method = 'flickr.photosets.getList';
	$params['user_id'] = $user;

    $request_url = 'http://www.flickr.com/services/rest/?';
     
    if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;

    foreach ($params as $var => $val) {
         $var = urlencode($var);
         $val = urlencode($val);
         $request_url .= "&$var=$val";
    }

    $response = file_get_contents($request_url);
	$simplexml = simplexml_load_string($response);
	
	$titles = $simplexml->xpath("//photoset");
	  
	foreach ($titles as $title) {
		$id = $title['id'];
		$server = $title['server'];
		$secret = $title['secret'];
		$primary = $title['primary'];
		$theTitle = $title->title;
		echo "<div class=\"setThumb\"><div>";
		echo "<a href=\"set.php?id=".$id."&title=".urlencode($theTitle)."\"><img src=\"http://static.flickr.com/".$server."/".$primary."_".$secret."_s.jpg\" onclick=\"showimage('http://static.flickr.com/".$server."/".$primary."_".$secret.".jpg')\" /></a></div>\n";
		echo "<div class=\"setTitle\">".$theTitle."</div></div>\n";

	}
}

function getSet($which) {

	global $user;
	global $apikey;
	
	$method = 'flickr.photosets.getPhotos';
	$params['user_id'] = $user;

    $request_url = 'http://www.flickr.com/services/rest/?';
     
    if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	$params['photoset_id'] = $which;
	

    foreach ($params as $var => $val) {
         $var = urlencode($var);
         $val = urlencode($val);
         $request_url .= "&$var=$val";
    }
	
	$response = file_get_contents($request_url);
	$simplexml = simplexml_load_string($response);
	
	$photos = $simplexml->xpath("//photo");

	foreach ($photos as $photo) {
		$id = $photo['id'];
		$server = $photo['server'];
		$secret = $photo['secret'];
		echo "<a href=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" rel=\"lightbox[flickr]\" title=\"$id\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."_s.jpg\" height=\"75\" width=\"75\" alt=\"\" class=\"photo\" /></a>";

	}
}

function getRecent($howmany) {

	if ($howmany=="default") $howmany = 56;
	
	global $user;
	global $apikey;
	
	$method = 'flickr.photos.search';
	$params['user_id'] = $user;
	$params['per_page'] = $howmany;

    $request_url = 'http://www.flickr.com/services/rest/?';
     
    if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;

    foreach ($params as $var => $val) {
         $var = urlencode($var);
         $val = urlencode($val);
         $request_url .= "&$var=$val";
    }

	$response = file_get_contents($request_url);
	
	$simplexml = simplexml_load_string($response);
	  
	$photos = $simplexml->xpath("//photo");

	foreach ($photos as $photo) {
		$id = $photo["id"];
		$server = $photo["server"];
		$secret = $photo["secret"];
		echo "<a href=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" rel=\"lightbox[flickr]\" title=\"$id\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."_s.jpg\" height=\"75\" width=\"75\" alt=\"\" class=\"photo\" /></a>";
	}
}

function makeTagCloud() {

	global $user;
	global $apikey;
	global $tagCount;
	global $omit;
	
	$method = 'flickr.tags.getListUserPopular';
	$params['user_id'] = $user;
	$params['count'] = $tagCount;

    $request_url = 'http://www.flickr.com/services/rest/?';
     
    if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	$params['count'] = $tagCount;

	foreach ($params as $var => $val) {
		$var = urlencode($var);
		$val = urlencode($val);
		$request_url .= "&$var=$val";
	}

	$response = file_get_contents($request_url);
	$simplexml = simplexml_load_string($response);
	
	$tags = $simplexml->xpath("//tag");
	  
	$highestTag = 0;
	$lowestTag = 60000;
	$maxFontSize = 40;
	$minFontSize = 7;
	$bright = 255;
	$dark = 80;
	  
	// build tag arrays
	$arrayCounter = 0;
	$match = false;
	
	foreach ($tags as $tag) {
		$id = $tag['count'];
		$tagName = $tag;
		
		foreach ($omit as $badword) {
			if ($badword==$tagName) {
				$match=true;
			}
		}
		if ($match==false) {
			$theTag[$arrayCounter]=$tagName;
			$theCount[$arrayCounter]=$id;
			$arrayCounter++;
		} else {
			$match=false;
		}
	}
	  
	// get highest and lowest count
	  
	for ($i=0; $i<count($theTag); $i++) {
		if ($theCount[$i]>$highestTag) {
			$highestTag=$theCount[$i];
		}
		if ($theCount[$i]<$lowestTag) {
			$lowestTag=$theCount[$i];
		}
	}
	echo "<p>";
	for ($i=0; $i<count($theTag); $i++) {
		// calculate the font size
		$fontOffset = $highestTag-$lowestTag;
		$fontPerc = ($theCount[$i]-$lowestTag)/$fontOffset;
		$fontSize = ($maxFontSize-$minFontSize)*$fontPerc+$minFontSize;
		$fontSize = ceil($fontSize);
		// calculate the color
		$colorOffset = $highestTag-$lowestTag;
		$colorPerc = ($theCount[$i]-$lowestTag)/$colorOffset;
		$fontColor = ($bright-$dark)*$colorPerc+$dark;
		$fontColor = ceil($fontColor);
		echo "<a href=\"tag.php?tag=".$theTag[$i]."&total=".$theCount[$i]."\" style=\"font-size: ".$fontSize."px; color: rgb(".$fontColor.",".$fontColor.",".$fontColor.");\">".$theTag[$i]."</a> ";
	}
	echo "</p>\n";
}

function displayTaggedImages($tagName, $per_page) {

	global $user;
	global $apikey;
	
	$method = 'flickr.photos.search';
	$params['user_id'] = $user;
	$params['tags'] = $tagName;
	$params['per_page'] = $per_page;
	
	$request_url = 'http://www.flickr.com/services/rest/?';
	
	if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	
	foreach ($params as $var => $val) {
		$var = urlencode($var);
		$val = urlencode($val);
		$request_url .= "&$var=$val";
	}
	
	$response = file_get_contents($request_url);
	$simplexml = simplexml_load_string($response);
	  
	$photos = $simplexml->xpath("//photo");
	  
	foreach ($photos as $photo) {
		$id = $photo["id"];
		$server = $photo["server"];
		$secret = $photo["secret"];
		echo "<a href=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" rel=\"lightbox[flickr]\" title=\"$id\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."_s.jpg\" height=\"75\" width=\"75\" alt=\"\" class=\"photo\" /></a>";
	}
}

function getImageStats($which) {

	global $user;
	global $apikey;
	
	$method = 'flickr.photos.getInfo';
	
	$request_url = 'http://www.flickr.com/services/rest/?';
	
	if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	$params['photo_id'] = $which;
	
	foreach ($params as $var => $val) {
		$var = urlencode($var);
		$val = urlencode($val);
		$request_url .= "&$var=$val";
	}
	
	$response = file_get_contents($request_url);
	$simplexml = simplexml_load_string($response);
	  
	$photos =& $simplexml->xpath("//photo");
	
	foreach ($photos as $photo) {	
		$id = $photo["id"];
		$server = $photo["server"];
		$secret = $photo["secret"];
	}
	
	$data =& $simplexml->xpath("//title");
	
	foreach ($data as $title) {
		$theTitle = $title;
	}
	
	if ($theTitle) {
		$theTitle = "<b>".$theTitle."</b><br />\n<br />\n";
	} else {
		$theTitle = "<b>Untitled</b><br />\n<br />\n";
	}

	$data =& $simplexml->xpath("//description");
	
	foreach ($data as $description) {
		$theDescription = $description;
	}

	
	if ($theDescription) {
		$theDescription = nl2br($theDescription)."<br />\n<br />\n";
	} else {
		$theDescription = " ";
	}
	
	$data =& $simplexml->xpath("//dates");
	
	foreach ($data as $date) {
		$theDate = $date['posted'];
	}
	$theDate = (int) $theDate;
	$theDate = date('F j, Y', $theDate);
	
	echo "<table width=\"660\">\n\t<tr>\n\t\t<td valign=\"bottom\"><p style=\"margin-right: 20px; margin-bottom: 0px; \">$theTitle $theDescription $theDate<br /><br />\n<a href=\"http://flickr.com/photos/$user/$id/\" target=\"_blank\">View on Flickr</a></p></td>\n";
	echo "\t\t<td align=\"right\" valign=\"top\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" alt=\"\" /></td>\n\t</tr>\n</table>";

}





?>