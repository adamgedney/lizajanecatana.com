//@codekit-prepend "jquery-1.10.2.min.js"
//@codekit-prepend "init.js"
//@codekit-prepend "jquery.parallax.min.js"
//@codekit-prepend "jquery.event.special.js"
//@codekit-prepend "jquery.easing.min.js"
//@codekit-prepend "lightbox-2.6.min.js"



//namespace
$(function(){

// $('.video-wrapper').show();
// $('.video-links').hide();

$('#main-nav').hide();
 
//------------------------Animation query handling---------------
// $(window).resize(function(){
// 	console.log('resize' , $(window).width())

	if($(window).width() >= 770){

		$('#main-nav').show();

	};


	if($(window).width() >= 837){

		//css chandelier swing
		swing();

		//fog loop
		fog_loop();

		//chandeleir flicker
		flicker();

		//scene animation
		animate_scene();

	}else{

	// 	$('.swing').stop();
	// 	$('#inner-fog').stop();
	// 	$('#scene li.anim').stop();
	// 	$('#scene li.light').stop();

	};// if < 769
// });// resize




//---------------------drop down menu------------------------

		 
		 var toggle = false;
		
		$('#menu').on('mousedown', function(e){
			
			if(toggle == false){

				$('#main-nav').show();
				toggle = true;

			}else{

				$('#main-nav').hide();
				toggle = false;
				
			};

			e.preventDefault();
		});

		

		




//------------------------------------------Picasa album slideshow----------------------------------

var username = 'lizadivacatana';//gmail address less the @gmail.com
var album = 'WebsiteAlbum';//make sure album is set to public throught the "share with" options
var protocol = document.location.protocol == 'http:' ? 'http:' : 'https:';
var url = protocol + '//picasaweb.google.com/data/feed/api/user/' + username + '/album/' + album + '?kind=photo&alt=json';


$.ajax({
	url: url,
	type: 'get',
	dataType: 'json',
	success: function(response){

		var result_array = response.feed.entry;
		var pic_array = [];

		//loops through album pics, storing in an array
		for(var i=0; i < result_array.length; i++){
			
			var pic = result_array[i].content.src;
			pic_array.push(pic);

			// //img tag plus lightbox support
			//enable this for floated boxes to fill div
			// var html = '<a data-lightbox="' + i + '" href="' + pic + '"><img src="' + pic + '" alt="picasa image"/></a>'
			// $('.picasagallery').append(html);
		}// for

		var count = 0;
		var img = pic_array;
		var html = '<a href="' + img[count] + '" data-lightbox="' + img[count] + '"><img class="pic" src="' + img[count] + '" alt="picasa image"/></a>'
		$('.picasagallery').append(html);

		//next button click handler
		$(document).on('click', '#nextbtn', function(e){
			next_img()
		});

		//previous button click handler
		$(document).on('click', '#prevbtn', function(e){
			prev_img();
		});

		function prev_img(){
			count--;
			if(count <= 0){
				count = pic_array.length;
			}

			//img tag plus lightbox support
			$('.picasagallery').empty();
			var html = '<a href="' + img[count] + '" data-lightbox="' + img[count] + '"><img class="pic" src="' + img[count] + '" alt="picasa image"/></a>'
			$('.picasagallery').append(html);
		};


		function next_img(){
			count++;
			if(count >= pic_array.length){
				count = 0;
			}

			//img tag plus lightbox support
			$('.picasagallery').empty();
			var html = '<a href="' + img[count] + '" data-lightbox="' + img[count] + '"><img class="pic" src="' + img[count] + '" alt="picasa image"/></a>'
			$('.picasagallery').append(html);
		};




		//begins slideshow loop
		looper();

		function looper(){
			setTimeout(nextLoopImg,3000);
		};


		function nextLoopImg(){
			count++;
			if(count >= pic_array.length){
				count = 0;
			}

			//img tag plus lightbox support
			$('.picasagallery').empty();
			var html = '<a href="' + img[count] + '" data-lightbox="' + img[count] + '"><img class="pic" src="' + img[count] + '" alt="picasa image"/></a>'
			$('.picasagallery').append(html);

			looper();// reruns settimeout
		};
		
	}// success
});

//-------------------------------------------Parallax.js--------------------------------------------
$('#scene').parallax({
  calibrateX: false,
  calibrateY: true,
  invertX: false,
  invertY: true,
  limitX: false,
  limitY: 4,
  scalarX: 9,
  scalarY: 4,
  frictionX: 0.4,
  frictionY: 0.8
});


//--------------------------------------------Animation---------------------------------------------

// http://paulirish.com/2011/requestanimationframe-for-smart-animating/
// http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 
// requestAnimationFrame polyfill by Erik Möller
// fixes from Paul Irish and Tino Zijdel
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
 
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
 
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };











	function swing(){
	     $('.swing').toggleClass('right');
	     // setTimeout(swing, 5000);
	     setTimeout(function(){
	     	requestAnimationFrame(swing);
	     }, 5000);
	};




	function fog_loop(){

		var w = $(window).width();

		$('#inner-fog').animate({"left": w}, 80000, function(){
			$('#inner-fog').animate({"left": -w}, 100000, function(){
				fog_loop();
			});
		});
	};// fog_loop()




	//chandeleir flicker controller
	var on = true;
	function flicker(){

		//time controls setTimeout retrigger time. Mimics random flickering
		var time = [40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140];
		var index = Math.floor(Math.random() * time.length);
		var current_time = time[index];

		if(on){
			$('#flicker').hide();
			on = false;
		}else{
			$('#flicker').show();
			on = true;
		};
		
		// setTimeout(flicker, current_time);
		setTimeout(function(){
	     	requestAnimationFrame(flicker);
	     }, current_time);
	};





	function animate_scene(){

		//animated parts
		$('#scene li.anim').each(function(index){

			var motion_h = ['-=6px', '+=8px', '-=9px', '-=11px', '+=13px', '-=14px', '+=5px','-=7px', '+=6px', '-=8px', '+=9px', '+=11px', '-=13px', '+=14px', '-=5px','+=7px'];
			var motion_v = ['-=6px', '+=8px', '-=4px', '+=7px','-=5px', '+=9px', '+=6px', '-=8px', '+=4px', '-=7px','+=5px', '-=9px'];

			var rand_mo_h = Math.floor(Math.random() * motion_h.length);
			var rand_mo_v = Math.floor(Math.random() * motion_v.length);


	        //if #scene li.lights then multiply their motion to add drama
			if($(this).hasClass('light')){
				
				var motion_h = ['-=36px', '+=38px', '-=39px', '-=31px', '+=33px', '-=34px', '+=35px','-=37px', '+=36px', '-=38px', '+=39px', '+=31px', '-=33px', '+=34px', '-=35px','+=37px'];
				var motion_v = ['-=36px', '+=38px', '-=34px', '+=37px','-=35px', '+=39px', '+=36px', '-=38px', '+=34px', '-=37px','+=35px', '-=39px'];
			
				//creates synchronous flow of animation events
				$(this).animate(
		            {"left": motion_h[rand_mo_h]},
		            2000, 'easeInBack', function(){
			
			    });// animate() left

			    $(this).animate(
		            {'top': motion_v[rand_mo_v]},
		            2500, 'easeInBack', function(){

		            	//reset to 0
						$(this).animate(
							{'left': '0', 'top': '0', 'bottom': '0', 'right': '0'}, 
							4000, 'easeInBack', function(){
								//looper
								// setTimeout(animate_scene, 500);
								// animate_scene();
							});//animate() reset
		        	
						animate_scene();
		        });// animate() top

			}else{//normal scene animation

				//creates synchronous flow of animation events
				$(this).animate(
		            {"left": motion_h[rand_mo_h]},
		            4000, 'easeInBack', function(){
			
			    });// animate() left

			    $(this).animate(
		            {'top': motion_v[rand_mo_v]},
		            3000, 'easeInBack', function(){

		            	//reset to 0
						$(this).animate(
							{'left': '0', 'top': '0', 'bottom': '0', 'right': '0'}, 
							6000, 'easeOutBack', function(){
								//looper
								// setTimeout(animate_scene, 500);
								// animate_scene();
							});//animate() reset
		        	
						animate_scene();
		        });// animate() top
			};//else
		});// each
	};// animate_scene()



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




//-------------------------------------------Validate contact form---------------------------------
$('#submit-btn').on("click", function(e){

	var email = $('#con-email').val();
	var phone = $('#con-phone').val();
	var message = $('#con-message').val();

	var emailPat = /^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/; // standard email validation
	var phonePat = /^[2-9]\d{2}-\d{3}-\d{4}$/; //845-216-5030 


	//contact form validation conditions
	if(!emailPat.test(email)){

		e.preventDefault();
		$('[name=email]').css('background', '#ff0000');
	}else if(!phonePat.test(phone)){

		e.preventDefault();
		$('[name=phone]').css('background', '#ff0000');
	}else if(message == "" || message == null){

		e.preventDefault();
		$('[name=message]').css('background', '#ff0000');
	}else{

		return "true";
	}

});// Validate Contact
















});// function