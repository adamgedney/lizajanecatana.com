$(function(){





//---------------------Sidr slide in menu------------------------

//runs only on mobile sizes devices
$(window).resize(function(event){
	if($(window).width() < 769){
		//creates a new menu
		$('#menu').sidr();
		  
		//closes menu on document click
		$(document).on('click', function(e){
			console.log('close');
			$.sidr('close', 'sidr');
		});


		//jquery touchwipe control over Sidr menu
		//http://www.netcu.de/jquery-touchwipe-iphone-ipad-library
		$(window).touchwipe({
			wipeLeft: function() {
			  // Close
			  $.sidr('close', 'sidr');
			},
			wipeRight: function() {
			  // Open
			  $.sidr('open', 'sidr');
			},
			preventDefaultEvents: false
		});
	}
});






//-------------------------------------------Scroll to Jump links-----------------------------------

//slow jump event
$('a.slow-jump').on('click', function(e){
	e.preventDefault();
	goToByScroll($(this).attr('href'));
	return false;
});


//jumplink handler
function goToByScroll(id){
$('html,body').animate({scrollTop: $(id).offset().top}, 1000, 'easeOutQuint');
};


// //-------------------------------------------Scrollsnap.js-----------------------------------
// 	//https://github.com/benoitpointet/jquery-scrollsnap-plugin/blob/master/index.html

// 	$(document).scrollsnap({
//         snaps: '.snap',
//         proximity: 250,
//         easing: 'easeOutQuint'
//         });






});// function





