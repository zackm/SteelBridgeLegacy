<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cal Steel Bridge</title>
	<link rel="stylesheet" href="style.css" type="text/css"/> 
    <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Play:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="default/default.css" type="text/css" media="screen" />
	<script src="jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
    
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

</head>

<body>
<div class="wrapper">
<?php require('blog/wp-blog-header.php');?>
    <div class="header">		
    	<div class="logo">
		<a href="index.php"><img src="images/logo.png" id="logo"/></a>
        </div>
        
        <div class="menu">
            <ul>
                <li class="nav_links"><a href="contact.php" class="nav_menu">Contact Us</a></li>
                <li class="nav_links"><a href="sponsors.php" class="nav_menu">Sponsors</a></li>
                <li class="nav_links"><a href="photos.php" class="nav_menu">Photos</a></li>
                <li class="nav_links"><a href="resources.php" class="nav_menu">Resources</a></li>
                <li class="nav_links"><a href="about.php" class="nav_menu">About</a></li>
            </ul>
        </div>
        
        <div id="tagline">
        	--Crafty Tagline Goes Here--
        </div>
        
    </div>

	<div class="content">
		<div class="home_news">
			<div class="home_news_title">
			Latest News
			</div>
	        <div class="content_text">  
			<?php query_posts('showposts=5'); ?>
            <?php while (have_posts()) : the_post(); ?>
			<div class="news_title"><?php the_title();?></div>
            <div class="news_date"><i><?php the_time('F jS, Y') ?> </i></div>
            <div class="news_content"><?php the_content()?></div>
            <?php endwhile;?>
            </div>
	    </div>
        
        <div class="home_gallery">
        <div class="home_news_title">Meet the Team</div>
			<div class="slider-wrapper theme-default">
            	<div class="ribbon"></div>
            		<div id="slider" class="nivoSlider">
                    <img src="images/pic1.jpg" class="gallery"/>
                    <img src="images/pic2.jpg" class="gallery"/>
                    <img src="images/pic3.jpg" class="gallery"/>
                    <img src="images/pic4.jpg" class="gallery"/>
                    <img src="images/pic5.jpg" class="gallery"/>
                </div>
            </div>  
	    </div>
    </div>
    
    <div class="buffer">
    </div>
    
    <div class="footer">
    &copy; 2011 KML
    </div>
</div>



</body>
</html>
