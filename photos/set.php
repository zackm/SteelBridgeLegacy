<?$theSet = $_GET['id'];$theTitle = $_GET['title'];include('../setUp/preferences.php');   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/slimbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/themes/snow/styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/mootools.js"></script>
<script type="text/javascript" src="../js/slimbox.js"></script>

<link rel="stylesheet" href="../style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
<div class="wrapper">
<div class="hwrap">
	<div class="header">
        <div class="header_left"><a href="/"><img id="cal" src="../images/cal.png"/></a></div>
        <div class="header_right">
        	<div class="header_right_top">
        	<a href="/"><img id="steelbridge" src="../images/steelbridge.png"/></a>
            </div>
            <div class="header_right_bottom">
            	<div class="table">
                    <div class="nav_bar">
                          <ul id="menu">
                              <li class="about"><a href="/about" class="nav_links">About</a></li>
                              <li class="news"><a href="/design" class="nav_links" >Design</a></li>
                              <li class="photos"><a href="/photos" class="nav_links" id="current">Photos</a></li>
                              <li class="sponsors"><a href="/sponsors" class="nav_links">Sponsors</a></li>
                              <li class="contact"><a href="/contact" class="nav_links">Contact</a></li>
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
    <div class="heading"><? echo "The Collection : $theTitle"; ?></div>
    <div class="back"><? echo "\n\n<a href=\"/photos\" class=\"backButton\">&lt;&lt;back</a>"; ?></div>
	<div class="sets">
	<? $flickr = getSet($theSet); ?>
        <div id="imagediv" style="display: none; border: 1px solid white; position: absolute; left: 200px; top: 50px;" onclick="this.style.display = 'none';"><img id="bigimage" 		src="" /></div>
        <script>  function showimage(src) {    var bigimage = document.getElementById('bigimage');    var imagediv = document.getElementById('imagediv');    bigimage.src = src;    imagediv.style.display = '';    }</script>
        </div>
	</div>
    
    <div class="buffer"></div>
</div>

<div class="footer">
	<div class="ocflogo"><a href="http://www.ocf.berkeley.edu"><img src="http://www.ocf.berkeley.edu/images/hosted-logos/ocfbadge_platinum.png" alt="Hosted by the OCF" width="128" height="36" style="border:0"/></a></div>
    <div class="table">
    <div class="footer_sec"><div class="footer_title">University of California, Berkeley</div><div class="footer_cont"><ul><li><a href="http://berkeley.edu/" target="_blank">UC Berkeley</a></li><li><a href="http://coe.berkeley.edu" target="_blank">Berkeley Engineering</a></li><li><a href="http://ce.berkeley.edu" target="_blank">Civil & Environmental Engineering</a></li><li><a href="http://www.calasce.org/" target="_blank">Cal ASCE</a></li></ul></div></div>
    <div class="footer_sec"><div class="footer_title">Steel Bridge Competition 2012</div><div class="footer_cont"><ul><li><a href="http://www.aisc.org/WorkArea/showcontent.aspx?id=21576" target="_blank">Official 2012 Competition Rules</a></li><li><a href="http://www.aisc.org/content.aspx?id=3232" target="_blank">Official 2012 Rules Clarifications</a></li><li><a href="http://www.nssbc.info/index.htm" target="_blank">National Student Steel Bridge Competition Guide</a></li></ul></div></div>
    <div class="footer_sec"><div class="footer_title">Archive</div><div class="footer_cont"><ul><li><a href="http://www.aisc.org/content.aspx?id=7176" target="_blank">2011 National Student Steel Bridge Competition Results</a></li><li><a href="http://www.nssbc.info/History/2008NSSBCResults.pdf" target="_blank">2008 National Competition Results</a></li></ul></div></div>
    </div>
<div class="footer_nav"><a href="/" alt="home">Home</a> | <a href="/about" alt="about">About</a> | <a href="/design" alt="design">Design</a> | <a href="/photos" alt="photos">Photos</a> | <a href="/sponsors" alt="sponsors">Sponsors</a> | <a href="/contact" alt="contact">Contact</a></div>
<div class="break"></div>
<div>University of California, Berkeley © 2011 KML</div>
</div>
</body>
</html>