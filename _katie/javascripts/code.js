$(document).ready(function(){
	/*$('.main a').click(function(){
		$('.index_main_title').animate({opacity:"0.3"}, 1500, function(){
		$('.index_main_title').css({position: "static"})
		.animate({marginLeft: "", marginTop: ""}, function(){
														   $('#top').animate({fontSize: "24px"})
														   $('.index_cont').fadeIn(3000)

						   }); });}); */
		$('#hide').click(function(){
								  $('.officers').slideUp()
								  $('#hide').css('display', 'none')
								  $('#show').css('display', 'block')});
		$('#show').click(function(){$('.officers').slideDown('fast') 
									$('#show').css('display','none') 
									$('#hide').css('display','block')});
		$('#showhide_PM').click(function(){
									  $('#PM').slideToggle('slow')});
		$('#showhide_assistantPM').click(function(){
									  $('#assistantPM').slideToggle('slow')});	
		$('#showhide_designteam').click(function(){
									  $('#designteam').slideToggle('slow')});
		$('#showhide_solidworks').click(function(){
									  $('#solidworks').slideToggle('slow')});
		$('#showhide_davisshop').click(function(){
									  $('#davisshop').slideToggle('slow')});
		$('#showhide_etch').click(function(){
									  $('#etch').slideToggle('slow')});
		$('#showhide_budget').click(function(){
									  $('#budget').slideToggle('slow')});
		$('#showhide_graphics').click(function(){
									  $('#graphics').slideToggle('slow')});
		});
/*	$('.sub_title').click(function(){
									$('.officers').css('display', 'block')});*/


function changeColor (){
	$('.sub_title').click(function(){
	$('.sub_tagline').css('color','blue');});
}

function changeColor2 (){
	$('.sub_title').click(function(){
	$('.sub_tagline').css('color','red');});
}

function showOfficers(){
	$('.sub_title').click(function(){
	$('.officers').css('display','block');});
}

function hideOfficers(){
	$('.sub_title').click(function(){
	$('.officers').css('display','none');});
}

/*	$("#statusMaker").slideUp('slow', function() {
		$("#newStatus").fadeIn('slow')
	});*/


/*$(document).ready(function(){

	$(".run").click(function(){
	
	  $("#box").animate({opacity: "0.1", left: "+=400"}, 1200)
	  .animate({opacity: "0.4", top: "+=160", height: "20", width: "20"}, "slow")
	  .animate({opacity: "1", left: "0", height: "100", width: "100"}, "slow")
	  .animate({top: "0"}, "fast")
	  .slideUp()
	  .slideDown("slow")
	  return false;
	
	});
});	,


	position: absolute;
	left: 50%;
	margin-left: -372px;
	margin-top: 200px;*/

	