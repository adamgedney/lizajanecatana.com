$(function(){



//hides ugly loading images until all assets have loaded
$('.scene').hide();

$('.video-wrapper').show();
$('.video-links').hide();

$('#main-nav').hide();

//------------------------Youtube video handling---------------
if($(window).width() < 769){

		//hides youtube videos on mobile devices to increase load time
		$('.video-wrapper').hide();
		$('.video-links').show();



	}else{
		$('#main-nav').show();

	};// if < 769



//---------------------drop down menu------------------------

		 
		 var toggle = false;
		
		$('#menu').on('click', function(e){
			
			if(toggle == false){
				$('#main-nav').show();
				toggle = true;
			}else{
				$('#main-nav').hide();
				toggle = false;
			};
		});

		$('.page').on('click', function(){
			$('#main-nav').hide();
			toggle = false;
		});

		// jquery touchwipe control over dropdown menu
		// http://www.netcu.de/jquery-touchwipe-iphone-ipad-library
		// $(window).touchwipe({
		// 	wipeLeft: function() {
		// 	 //prev image
		// 	 prev_img();
		// 	},

		// 	wipeRight: function() {
		// 	  	//next image
		// 	  	next_img();
		// 	},

		// 	preventDefaultEvents: false
		// });




//------------------------------------------Picasa album slideshow----------------------------------

var username = '112323008573640601447';
var album = 'MobLive';
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
  frictionX: 0.8,
  frictionY: 0.8
});



//--------------------------------------------Animation---------------------------------------------

//starts animations once assets have loaded
$(window).load(function() {

	//shows scene upon load complete
    $('.scene').show();

	

	//animation runs only on tablet or desktop sized devices
	if($(window).width() < 769){
		$('#scene li').removeClass('anim');

		//hides youtube videos on mobile devices to increase load time
		$('.video-wrapper').hide();
		$('.video-links').show();

	}else{

		$('.video-wrapper').show();
		$('.video-links').hide();

		//css chandelier swing
		swing();

		//fog loop
		fog_loop();

		//scene animation
		animate_scene();

	};// if < 769
});// onload




	function swing(){
	     $('.swing').toggleClass('right');
	     setTimeout(swing, 5000);
	};




	function fog_loop(){

		var w = $(window).width();

		$('#inner-fog').animate({"left": w}, 80000, function(){
			$('#inner-fog').animate({"left": -w}, 100000, function(){
				fog_loop();
			});
		});
	};// fog_loop()





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













// //-------------------------------------------Scrollsnap.js-----------------------------------
// 	//https://github.com/benoitpointet/jquery-scrollsnap-plugin/blob/master/index.html

// 	$(document).scrollsnap({
//         snaps: '.snap',
//         proximity: 250,
//         easing: 'easeOutQuint'
//         });






});// function





