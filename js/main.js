$(function(){




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

			count++;
			if(count >= pic_array.length){
				count = 0;
			}

			//img tag plus lightbox support
			$('.picasagallery').empty();
			var html = '<a href="' + img[count] + '" data-lightbox="' + img[count] + '"><img class="pic" src="' + img[count] + '" alt="picasa image"/></a>'
			$('.picasagallery').append(html);
		});




		//previous button click handler
		$(document).on('click', '#prevbtn', function(e){

			count--;
			if(count <= 0){
				count = pic_array.length;
			}

			//img tag plus lightbox support
			$('.picasagallery').empty();
			var html = '<a href="' + img[count] + '" data-lightbox="' + img[count] + '"><img class="pic" src="' + img[count] + '" alt="picasa image"/></a>'
			$('.picasagallery').append(html);
		});







		//begins slideshow loop
		looper();

		function looper(){
			setTimeout(nextImg,3000);
		};


		function nextImg(){
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
  scalarY: 8,
  frictionX: 0.8,
  frictionY: 0.8
});



//--------------------------------------------Animation---------------------------------------------

//css chandelier swing
function swing(){
     $('.swing').toggleClass('right');
     setTimeout(swing, 3000);
  };

  swing();

//animation run only on desktop sized devices
if($(window).width() > 769){


//fog loop
fog_loop();

function fog_loop(){

	var w = $(window).width();

	$('#inner-fog').animate({"left": w}, 80000, function(){
		$('#inner-fog').animate({"left": -w}, 100000, function(){
			fog_loop();
		});
	});
};// fog_loop()






animate_scene();

function animate_scene(){

	var motion_h = ['-=6px', '+=8px', '-=9px', '-=11px', '+=13px', '-=14px', '+=5px','-=7px', '+=6px', '-=8px', '+=9px', '+=11px', '-=13px', '+=14px', '-=5px','+=7px'];
	var motion_v = ['-=6px', '+=8px', '-=4px', '+=7px','-=5px', '+=9px', '+=6px', '-=8px', '+=4px', '-=7px','+=5px', '-=9px'];



	
//if #scene li.lights then multiply their motion to add drama

	//animated parts
	$('#scene li.anim').each(function(index){

		var rand_mo_h = Math.floor(Math.random() * motion_h.length);
		var rand_mo_v = Math.floor(Math.random() * motion_v.length);
		var deg = Math.floor(Math.random() * 360);


		//creates synchronous flow of animation events
		$(this).animate(
            {"left": motion_h[rand_mo_h],
        	 "rotate": deg},
            4000, 'easeInBack', function(){
	
	    });// animate() left

	    $(this).animate(
            {'top': motion_v[rand_mo_v],
        	 "rotate": deg},
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
	});// each
};// animate_scene()

}// if




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







//---------------------Sidr slide in menu------------------------

//runs only on mobile sizes devices
// $(window).resize(function(event){
	// if($(window).width() < 769){
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
	// }
// });





// //-------------------------------------------Scrollsnap.js-----------------------------------
// 	//https://github.com/benoitpointet/jquery-scrollsnap-plugin/blob/master/index.html

// 	$(document).scrollsnap({
//         snaps: '.snap',
//         proximity: 250,
//         easing: 'easeOutQuint'
//         });






});// function





