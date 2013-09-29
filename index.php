<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cal Steel Bridge</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="javascripts/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="javascripts/code.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style_nivo.css" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
		slices:15, // For slice animations
		boxCols: 8, // For box animations
		boxRows: 4, // For box animations
		animSpeed:500, // Slide transition speed
		pauseTime:3000, // How long each slide will show
		startSlide:0, // Set starting Slide (0 index)
		directionNav:true, // Next & Prev navigation
		directionNavHide:true, // Only show on hover
		controlNav:true, // 1,2,3... navigation
		controlNavThumbs:false, // Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, // Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', // Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
		keyboardNav:true, // Use left & right arrows
		pauseOnHover:true, // Stop animation while hovering
		manualAdvance:false, // Force manual transitions
		captionOpacity:0.8, // Universal caption opacity
		prevText: 'Prev', // Prev directionNav text
		nextText: 'Next', // Next directionNav text
		beforeChange: function(){}, // Triggers before a slide transition
		afterChange: function(){}, // Triggers after a slide transition
		slideshowEnd: function(){}, // Triggers after all slides have been shown
		lastSlide: function(){}, // Triggers when last slide is shown
		afterLoad: function(){} // Triggers when slider has loaded
	});
});
</script>

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
<div class="wrapper">
<div class="hwrap">
	<div class="header">
        <div class="header_left"><a href="http://steelbridge.berkeley.edu"><img id="cal" src="images/cal.png" /></a></div>
        <div class="header_right">
        	<div class="header_right_top">
        	<a href="http://steelbridge.berkeley.edu"><img id="steelbridge" src="images/steelbridge.png"/></a>
            </div>
            <div class="header_right_bottom">
            	<div class="table">
                    <div class="nav_bar">
                          <ul id="menu">
                              <li class="about"><a href="about" class="nav_links">About</a></li>
                              <li class="news"><a href="news" class="nav_links">News</a></li>
                              <li class="design"><a href="design" class="nav_links" >Design</a></li>
                              <li class="photo"><a href="photos" class="nav_links">Photos</a></li>
                              <li class="sponsors"><a href="sponsors" class="nav_links">Sponsors</a></li>
                              <li class="contact"><a href="contact" class="nav_links">Contact</a></li>
                          </ul>
                    </div>
            	</div>
       		</div>
		</div>
	</div>
    </div>
    
    <div class="main" id="index">
    <div class="text"><center><b>2012 and 2013 National Champions</b></center></div>
          <div class="slider-wrapper theme-default">
          <div class="ribbon"></div>
          <div id="slider" class="nivoSlider">
			<img src="images/home_about2.jpg" alt="" title="#htmlcaption1"/>
            <img src="images/home_news2.jpg" alt="" title="#htmlcaption0"/>
            <img src="images/home_design2.jpg" alt="" title="#htmlcaption2" />
            <img src="images/home_photos2.jpg" alt="" title="#htmlcaption3" />
            <img src="images/home_sponsors2.jpg" alt="" title="#htmlcaption4" />
            <img src="images/home_contact2.jpg" alt="" title="#htmlcaption5" />
          </div>
		  <div id="htmlcaption0" class="nivo-html-caption">
              <div class="caption"><strong>Read the Latest News</strong>  </div><a href="news/" class="read_more"> Go&gt;&gt;</a>
          </div>
          <div id="htmlcaption1" class="nivo-html-caption">
              <div class="caption"><strong>What is Steel Bridge?</strong>  </div><a href="about/" class="read_more"> Go&gt;&gt;</a>
          </div>
          <div id="htmlcaption2" class="nivo-html-caption">
              <div class="caption"><strong>Explore Our Designs</strong> </div><a href="design/" class="read_more">Go &gt;&gt;</a>
          <div id="htmlcaption3" class="nivo-html-caption">
              <div class="caption"><strong>Remember the Moments</strong></div><a href="photos/" class="read_more">Go &gt;&gt;</a>
          </div>
          <div id="htmlcaption4" class="nivo-html-caption">
              <div class="caption"><strong>Support the Team</strong></div><a href="sponsors/" class="read_more">Go &gt;&gt;</a>
          </div>
          <div id="htmlcaption5" class="nivo-html-caption">
              <div class="caption"><strong>Questions or Comments?</strong></div><a href="contact/" class="read_more">Go &gt;&gt;</a>
          </div>
      	  </div>
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
<div class="footer_nav"><a href="index.php" alt="home">Home</a> | <a href="about" alt="about">About</a> | <a href="design" alt="design">Design</a> | <a href="photos" alt="photos">Photos</a> | <a href="sponsors" alt="sponsors">Sponsors</a> | <a href="contact" alt="contact">Contact</a></div>
<div class="break"></div>
<div>University of California, Berkeley © 2011 SteelBridgeatCal</div>
</div>
</body>
</html>
