/*
Copyright (c) 2014 Himanshu Softtech.
------------------------------------------------------------------
[Master Stylesheet]

Project:	 Meet Up Landing Page With Builder Access
Version:	 1.0.0
Assigned to: Themeforest
-------------------------------------------------------------------*/
(function($){
  "use strict";
	
	// on ready function
	jQuery(document).ready(function($) {
   		var $this = $(window);
		
		// header2 scroll menu jquery variable
		var sections = $('.page .item')
		, hs_nav = $('#hs_header2 .nav')
		, nav_height = hs_nav.outerHeight();
		
		// header3 scroll menu jquery variable
		var sections = $('.page .item')
		, hs_nav_header3 = $('#hs_header3 .hs_scroll');
		
		
		// on scroll function
		$this.on("scroll",function(){
			
			// header2 scroll menu jquery function
			var cur_pos = $(this).scrollTop();
			sections.each(function() {
				var top = $(this).offset().top,
				bottom = top + $(this).outerHeight();

				if (cur_pos >= top && cur_pos <= bottom) {
					hs_nav.find('a').removeClass('active');
					sections.removeClass('active');

					$(this).addClass('active');
					hs_nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
				}
			});
			
			
			
			// header3 scroll menu jquery function
			var cur_pos = $(this).scrollTop();
			sections.each(function() {
				var top = $(this).offset().top - nav_height,
				bottom = top + $(this).outerHeight();

				if (cur_pos >= top && cur_pos <= bottom) {
					hs_nav_header3.find('a').removeClass('active');
					sections.removeClass('active');

					$(this).addClass('active');
					hs_nav_header3.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
				}
			});
			
			
		}); 
		
		// header2 scroll menu jquery event
		hs_nav.find('a').on('click', function () {
		  var $el = $(this)
			, id = $el.attr('href');
		  
		  $('html, body').animate({
			scrollTop: $(id).offset().top - nav_height
		  }, 500);
		  
		  return false;
		});
		
		
		// header3 scroll menu jquery event
		hs_nav_header3.find('a').on('click', function () {
		  var $el = $(this)
			, id = $el.attr('href');
		  
		  $('html, body').animate({
			scrollTop: $(id).offset().top - nav_height
		  }, 500);
		  
		  return false;
		});
		
		//stellar jquery
		$.stellar({
			horizontalScrolling: false
		});
		
		$.smoothScroll();
		
		
		// mail function
		$('#hs_sub').on("click",function(){
			var un=$('#uname').val();
			var em=$('#uemail').val();
			var phone=$('#phone').val();
			$.ajax({
				type: "POST",
				url: "ajaxmail.php",
				data: {
					'username':un,
					'useremail':em,
					'phone':phone
					},
				error: function() {
					$('#err').html( "<p style='color:red;'>Oop's Internal Error Occurred. Please, Try Again.</p>" );
				},
				success: function(msg) {
			var full_msg=msg.split("#");
					if(full_msg[0]=='1')
					{
						$('#uname').val("");
						$('#uemail').val("");
						$('#phone').val("");
						$('#err').html( full_msg[1] );
					}
					else
					{
						$('#uname').val(un);
						$('#uemail').val(em);
						$('#phone').val(phone);
						$('#err').html( full_msg[1] );
					}
				}
			});
		});
		
		
		
		// timer countdown
		$('[data-countdown]').each(function() {
		   var $this = $(this), finalDate = $(this).data('countdown');
		   $this.countdown(finalDate, function(event) {
			 $this.html(event.strftime('<div class="im_counter"><span><p>%w</p> <p class="txt">weeks</p></span><span><p>%D</p> <p class="txt">days</p></span> <span><p>%H</p> <p class="txt">hours</p></span> <span><p>%M</p> <p class="txt">min</p></span> <span><p>%S</p> <p class="txt">sec</p></span></div>'));
		   });
		 });
		
		
		// team1 detail open/close
		$('.image_wrapper a#team_member1').on("click",function(){
			$('.hs_team_detail_wrapper#team_detail1').animate({right:0}, 300);
			
			$('.hs_team_detail_wrapper#team_detail2').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail3').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail4').animate({right:-480}, 300);	
		});
		$('.image_wrapper a#team_member2').on("click",function(){
			$('.hs_team_detail_wrapper#team_detail2').animate({right:0}, 300);
			
			$('.hs_team_detail_wrapper#team_detail1').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail3').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail4').animate({right:-480}, 300);
		});
		$('.image_wrapper a#team_member3').on("click",function(){
			$('.hs_team_detail_wrapper#team_detail3').animate({right:0}, 300);
			
			$('.hs_team_detail_wrapper#team_detail1').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail2').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail4').animate({right:-480}, 300);
		});
		$('.image_wrapper a#team_member4').on("click",function(){
			$('.hs_team_detail_wrapper#team_detail4').animate({right:0}, 300);
			
			$('.hs_team_detail_wrapper#team_detail1').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail2').animate({right:-480}, 300);
			$('.hs_team_detail_wrapper#team_detail3').animate({right:-480}, 300);
		});
		
		
		
		
		
		$('.hs_team_detail_close').on("click",function(){
			$('.hs_team_detail_wrapper').animate({right:-480}, 300);
		});
		
		
		
		//sponsor1 slider 
		var owl = $(".sponsor_slider > .owl-carousel");
		owl.owlCarousel({
			autoPlay: true, 
			responsiveClass: true,
			items: 4,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 4
				}
			}
		});
		// Go to the next item
		$('.sponsor_slider_Next').on("click",function() {
			owl.trigger('next.owl.carousel');
		});
		// Go to the previous item
		$('.sponsor_slider_Prev').on("click",function() {
			owl.trigger('prev.owl.carousel', [300]);
		});
		
		
		//Click event to scroll to top
		$('.scrollToTop').on("click",function() {
			$('html, body').animate({
				scrollTop: 0
			}, 800);
			return false;
		});	
		
		
	});
	
})();

