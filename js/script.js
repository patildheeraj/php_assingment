// JavaScript Document
jQuery(document).ready(function() {
		<!-- Js for Menu -->	
	
		jQuery(".toggle_menu a").click(function () {
			jQuery("#topMenu").slideToggle("fast");
			});	
			
		jQuery(".drop-button a").click(function () {
			jQuery(".show_dropdown").slideToggle("fast");
			});	


		/*<!-- Js for BXSLIDER -->
		$('.bxslider').bxSlider({
			captions: true,
			auto:true,
			controls:false,				
			pager: false,			
		});

		
		
		<!-- Grid Section -->
		$('.grid-scetion img').css('opacity', 0.7);
		// when hover over the selected image change the opacity to 1  
		$('.grid-scetion li').hover(  
			function(){  
			  $(this).find('img').stop().fadeTo('slow', 1.0);  
			},  
			function(){  
			  $(this).find('img').stop().fadeTo('fast', 0.7);  
		});  */
		
		$('.bxslider1').bxSlider({
			captions: true,
			auto:true,
			controls:false,				
			pager: false	
		});


	/* Fixed Header */
	var lastScroll = 0;
    $(window).scroll(function(event) {
        //Sets the current scroll position
        var st = $(this).scrollTop();
        //Determines up-or-down scrolling
        if (st > lastScroll) {
            $("header").addClass("header_fixed");
    //$("header").css("transition", "background .3s");
        } else {
            //Replace this with your function call for upward-scrolling
            if ($(this).scrollTop() == 0) {

    $("header").removeClass("header_fixed");


            }
        }
        //Updates scroll position
        lastScroll = st;

    	});
	/* Fixed Header */

	/* Fixed Contact Number */   
	$(window).scroll(function(event){
		if($(window).scrollTop() == $(document).height() - $(window).height()){
			$(".fixed_contact_number").css("display","none");
		}else{
			$(".fixed_contact_number").css("display","block");
		}
	});		
	/* Fixed Header */

});	
