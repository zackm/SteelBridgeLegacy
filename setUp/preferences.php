<?

// The following are the user options. Set them up for your application.

$siteName = "Katie_Leung"; // this is the Site Name - it shows up at the top of every page
$user = "68286384@N08"; // this is your flickr id ex. 78354145@N00
$apikey = "72ac8a8a200a38d173077041342ed991"; // insert your flickr API key

$siteTitle = "Powered By Satellite"; // this is the title that appears at the top of the browser window and bookmarks.
$theme = "snow"; // Set the theme for the look of Satellite - current themes are default and snow

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








require_once('../xml/xml_domit_include.php');

function getFileContents($url) {
	$ch = curl_init();
	$timeout = 0; // set to 0 for no timeout
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$file_contents = curl_exec($ch);
	curl_close($ch);
	return $file_contents;
}

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
	
	$photoCollection =& new DOMIT_Document();
	
	$request_url = 'http://www.flickr.com/services/rest/?';
	
	if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	
	foreach ($params as $var => $val) {
		$var = urlencode($var);
		$val = urlencode($val);
		$request_url .= "&$var=$val";
	}
	$safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	$photos =& $photoCollection->documentElement->getElementsByTagName("photo");
	$total = $photos->getLength();
	  
	for ($i=0; $i<$total; $i++) {
		if ($i==$which) {
	  		$currImg =& $photos->item($i);
			$id =& $currImg->getAttributeNS($URI, 'id');
			$server =& $currImg->getAttributeNS($URI, 'server');
			$secret =& $currImg->getAttributeNS($URI, 'secret');
			echo "<img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."$size.jpg\" alt=\"\" />";
	  	}
	}
}

function getSets() {

	global $user;
	global $apikey;
	
	$method = 'flickr.photosets.getList';
	$params['user_id'] = $user;

	$photoCollection =& new DOMIT_Document();

    $request_url = 'http://www.flickr.com/services/rest/?';
     
    if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;

    foreach ($params as $var => $val) {
         $var = urlencode($var);
         $val = urlencode($val);
         $request_url .= "&$var=$val";
    }

    $safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	  
	$titles =& $photoCollection->documentElement->getElementsByTagName("photoset");
	$total = $titles->getLength(); 
	
	for ($i=0; $i<$total; $i++) {
	  	$currTitle =& $titles->item($i);
		$id =& $currTitle->getAttributeNS($URI, 'id');
		$server =& $currTitle->getAttributeNS($URI, 'server');
		$secret =& $currTitle->getAttributeNS($URI, 'secret');
		$primary =& $currTitle->getAttributeNS($URI, 'primary');
		$theTitle =& $currTitle->firstChild->firstChild->toString(false);
		echo "<div class=\"setThumb\"><div>";
		echo "<a href=\"set.php?id=".$id."&title=".urlencode($theTitle)."\"><img src=\"http://static.flickr.com/".$server."/".$primary."_".$secret."_s.jpg\" onclick=\"showimage('http://static.flickr.com/".$server."/".$primary."_".$secret.".jpg')\" alt=\"\" /></a></div>\n";
		echo "<div class=\"setTitle\">".$currTitle->firstChild->firstChild->toNormalizedString(false)."</div></div>\n";

	}
}

function getSet($which) {

	global $user;
	global $apikey;
	
	$method = 'flickr.photosets.getPhotos';
	$params['user_id'] = $user;

	$photoCollection =& new DOMIT_Document();

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
	
	$safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	$photos =& $photoCollection->documentElement->getElementsByTagName("photo");
	$total = $photos->getLength();
	  
	for ($i=0; $i<$total; $i++) {
	  	$currImg =& $photos->item($i);
		$id =& $currImg->getAttributeNS($URI, 'id');
		$server =& $currImg->getAttributeNS($URI, 'server');
		$secret =& $currImg->getAttributeNS($URI, 'secret');
		echo "<a href=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" rel=\"lightbox[flickr]\" title=\"".$id."\" name=\"$user\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."_s.jpg\" height=\"75\" width=\"75\" alt=\"\" class=\"photo\" /></a>";

	}
}

function getRecent($howmany) {

	if ($howmany=="default") $howmany = 56;
	
	global $user;
	global $apikey;
	
	$method = 'flickr.photos.search';
	$params['user_id'] = $user;
	$params['per_page'] = $howmany;

	$photoCollection =& new DOMIT_Document();

    $request_url = 'http://www.flickr.com/services/rest/?';
     
    if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;

    foreach ($params as $var => $val) {
         $var = urlencode($var);
         $val = urlencode($val);
         $request_url .= "&$var=$val";
    }

	$safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	  
	$photos =& $photoCollection->documentElement->getElementsByTagName("photo");
	$total = $photos->getLength(); 
	  
	for ($i=0; $i<$total; $i++) {
		$currImg =& $photos->item($i);
		$id =& $currImg->getAttributeNS($URI, 'id');
		$server =& $currImg->getAttributeNS($URI, 'server');
		$secret =& $currImg->getAttributeNS($URI, 'secret');
		echo "<a href=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" rel=\"lightbox[flickr]\" title=\"$id\" name=\"$user\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."_s.jpg\" height=\"75\" width=\"75\" alt=\"\" class=\"photo\" /></a>";
	} 
}

function makeTagCloud($theme) {

	global $user;
	global $apikey;
	global $tagCount;
	global $omit;
	
	$method = 'flickr.tags.getListUserPopular';
	$params['user_id'] = $user;
	$params['count'] = $tagCount;

	$tagCollection =& new DOMIT_Document();

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

	$safe_return = getFileContents($request_url);
	$response = $tagCollection->parseXML($safe_return);
	  
	$tags =& $tagCollection->documentElement->getElementsByTagName("tag");
	$total = $tags->getLength();
	  
	$highestTag = 0;
	$lowestTag = 60000;
	$maxFontSize = 40;
	$minFontSize = 7;
	$bright = 255;
	$dark = 80;
	  
	// build tag arrays
	$arrayCounter = 0;
	$match = false;
	for ($i=0; $i<$total; $i++) {
		$currTag =& $tags->item($i);
		$tagName =& $currTag->firstChild->toString(false);
		$id =& $currTag->getAttributeNS($URI, 'count');
		
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
		if ($theme=="default") {
			echo "<a href=\"tag.php?tag=".$theTag[$i]."&total=".$theCount[$i]."\" style=\"font-size: ".$fontSize."px; color: rgb(".$fontColor.",".$fontColor.",".$fontColor.");\">".$theTag[$i]."</a> ";
		} else {
			echo "<a href=\"tag.php?tag=".$theTag[$i]."&total=".$theCount[$i]."\" style=\"font-size: ".$fontSize."px; color: gray;\">".$theTag[$i]."</a> ";
		}
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
	
	$photoCollection =& new DOMIT_Document();
	
	$request_url = 'http://www.flickr.com/services/rest/?';
	
	if (empty($params)) $params = array();
	$params['api_key'] = $apikey;
	$params['method'] = $method;
	
	foreach ($params as $var => $val) {
		$var = urlencode($var);
		$val = urlencode($val);
		$request_url .= "&$var=$val";
	}
	
	$safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	  
	$photos =& $photoCollection->documentElement->getElementsByTagName("photo");
	$total = $photos->getLength(); 
	  
	for ($i=0; $i<$total; $i++) {
		$currImg =& $photos->item($i);
		$id =& $currImg->getAttributeNS($URI, 'id');
		$server =& $currImg->getAttributeNS($URI, 'server');
		$secret =& $currImg->getAttributeNS($URI, 'secret');
		echo "<a href=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" rel=\"lightbox[flickr]\" title=\"".$id."\" name=\"$user\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret."_s.jpg\" height=\"75\" width=\"75\" alt=\"\" class=\"photo\" /></a>";
	}
}

function getImageStats($which) {

	global $user;
	global $apikey;
	
	$method = 'flickr.photos.getInfo';
	
	$photoCollection =& new DOMIT_Document();
	
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
	
	$safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	  
	$photos =& $photoCollection->documentElement->getElementsByTagName("photo");
	$total = $photos->getLength(); 
	
	$currImg =& $photos->item(0);
	$id =& $currImg->getAttributeNS($URI, 'id');
	$server =& $currImg->getAttributeNS($URI, 'server');
	$secret =& $currImg->getAttributeNS($URI, 'secret');
	
	$data =& $photoCollection->documentElement->getElementsByTagName("title");
	$current =& $data->item(0);
	
	if ($current->firstChild) {
		$theTitle =& $current->firstChild->toString(false);
		$theTitle = "<b>".$theTitle."</b><br />\n<br />\n";
	} else {
		$theTitle = "<b>Untitled</b><br />\n<br />\n";
	}

	$data =& $photoCollection->documentElement->getElementsByTagName("description");
	$current =& $data->item(0);
	
	if ($current->firstChild) {
		$theDescription =& $current->firstChild->toString(false);
		$theDescription = nl2br($theDescription)."<br />\n<br />\n";
	} else {
		$theDescription = " ";
	}
	
	$data =& $photoCollection->documentElement->getElementsByTagName("dates");
	$current =& $data->item(0);
	$theDate =& $current->getAttributeNS($URI, 'posted');
	$theDate = date('F j, Y', $theDate);
	
	echo "<table width=\"660\">\n\t<tr>\n\t\t<td valign=\"bottom\"><p style=\"margin-right: 20px; margin-bottom: 0px; \">$theTitle $theDescription $theDate<br /><br />\n<a href=\"http://flickr.com/photos/$user/$id/\" target=\"_blank\">View on Flickr</a></p></td>\n";
	echo "\t\t<td align=\"right\" valign=\"top\"><img src=\"http://static.flickr.com/".$server."/".$id."_".$secret.".jpg\" alt=\"\" /></td>\n\t</tr>\n</table>";

}

function getImageDetails($which) {

	global $user;
	global $apikey;
	
	$method = 'flickr.photos.getInfo';
	
	$photoCollection =& new DOMIT_Document();
	
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
	
	$safe_return = getFileContents($request_url);
	$response = $photoCollection->parseXML($safe_return);
	  
	$photos =& $photoCollection->documentElement->getElementsByTagName("photo");
	$total = $photos->getLength(); 
	
	$currImg =& $photos->item(0);
	$id =& $currImg->getAttributeNS($URI, 'id');
	$server =& $currImg->getAttributeNS($URI, 'server');
	$secret =& $currImg->getAttributeNS($URI, 'secret');
	
	$data =& $photoCollection->documentElement->getElementsByTagName("title");
	$current =& $data->item(0);
	
	if ($current->firstChild) {
		$theTitle =& $current->firstChild->toString(false);
		$theTitle = "<b>".$theTitle."</b><br />\n<br />\n";
	} else {
		$theTitle = "<b>Untitled</b><br />\n<br />\n";
	}

	$data =& $photoCollection->documentElement->getElementsByTagName("description");
	$current =& $data->item(0);
	
	if ($current->firstChild) {
		$theDescription =& $current->firstChild->toString(false);
		$theDescription = nl2br($theDescription)."<br />\n<br />\n";
	} else {
		$theDescription = " ";
	}
	
	$data =& $photoCollection->documentElement->getElementsByTagName("dates");
	$current =& $data->item(0);
	$theDate =& $current->getAttributeNS($URI, 'posted');
	$theDate = date('F j, Y', $theDate);
	
	return "$theTitle $theDescription $theDate";

}

function getTheme($theme) {
	if ($theme=="default") {
		echo "<link href=\"shared/global_styles.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
	} else {
		echo "<link href=\"themes/$theme/styles.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
	}
		
}



?>