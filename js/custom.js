/**	
	Custom JS
	
	1. HEADER CONTENT SLIDE
	2. FIXED MENU
	3. COUNTER
	4. TESTIMONIAL SLIDE (SLICK SLIDER)
	5. CLIENT SLIDE (SLICK SLIDER)
	6. SCROLL TOP BUTTON
	7. MENU SMOOTH SCROLLING
	8. LIGHTBOX ( FOR PORTFOLIO POPUP VIEW ) 
	9. MOBILE MENU CLOSE 
	10. PRELOADER 
	11. INSTAGRAM SLIDER (SLICK SLIDER)
	12. WOW ANIMATION 	
	13. CUSTOM EVENTS
	
**/

jQuery(function($){


	/* ----------------------------------------------------------- */
	/*  1. HEADER CONTENT SLIDE (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	jQuery('.header-slide').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows:false, 
		autoplay: true,     
      	slidesToShow: 1,
		slide: 'span',
		fade: true,
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  2. FIXED MENU
	/* ----------------------------------------------------------- */
 
	jQuery(window).bind('scroll', function () {
            if ($(window).scrollTop() > 700) {
                $('.main-navbar').addClass('navbar-fixed-top');
                $('.logo').addClass('logo-compressed');
                $('.main-nav li a').addClass('less-padding');
                $('.search-area').css('height','44');
                $('.search-area input[type="text"]').css('top','35%');
                $(".main-navbar").addClass('header-shadow');
	    } else {
	        $('.main-navbar').removeClass('navbar-fixed-top');
	        $('.logo').removeClass('logo-compressed');
	        $('.main-nav li a').removeClass('less-padding');
	        $('.search-area').css('height','60');
	        $('.search-area input[type="text"]').css('top','11%');
                $(".main-navbar").removeClass('header-shadow');
	    }
	});

	/* ----------------------------------------------------------- */
	/*  3. COUNTER
	/* ----------------------------------------------------------- */

	jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
    });


	/* ----------------------------------------------------------- */
	/*  4. TESTIMONIAL SLIDE(SLICK SLIDER)
	/* ----------------------------------------------------------- */

	jQuery('.testimonial-slider').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows:true, 
		autoplay: true,     
      	slidesToShow: 1,
		slide: 'div',		
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  5. CLIENT SLIDE (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	$('.client-table').slick({
	  dots: false,
	  infinite: true,
	  arrows:false, 
	  speed: 300,
	  autoplay: true,     
	  slidesToShow: 6,
	  slidesToScroll: 6,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	/* ----------------------------------------------------------- */
	/*  6. SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */

	//Check to see if the window is top if not then display button

	  jQuery(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      $('.scrollToTop').fadeIn();
	    } else {
	      $('.scrollToTop').fadeOut();
	    }
	  });
	   
	  //Click event to scroll to top

	  jQuery('.scrollToTop').on('click',function(){
	    $('html, body').animate({scrollTop : 0},800);
	    return false;
	  });

	/* ----------------------------------------------------------- */
	/*  7. MENU SMOOTH SCROLLING
	/* ----------------------------------------------------------- */ 
	
		//MENU SCROLLING WITH ACTIVE ITEM SELECTED

		// Cache selectors
		var lastId,
		topMenu = $(".main-nav"),
		topMenuHeight = topMenu.outerHeight()+13,
		// All list items
		menuItems = topMenu.find('a[href^=\\#]'),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.on('click',function(e){
                    // $( ".main-nav li" ).first().removeClass('active');
		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+32;
		  jQuery('html, body').stop().animate({ 
		      scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});
                $(".scroll-about").on('click',function(e){
		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+32;
		  jQuery('html, body').stop().animate({ 
		      scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});

		// Bind to scroll
		jQuery(window).on('scroll',function(){
		   // Get container scroll position
		   var fromTop = $(this).scrollTop()+topMenuHeight;
		   
		   // Get id of current scroll item
		   var cur = scrollItems.map(function(){
		     if ($(this).offset().top < fromTop)
		       return this;
		   });
		   // Get the id of the current element
		   cur = cur[cur.length-1];
		   var id = cur && cur.length ? cur[0].id : "";
		   
		   if (lastId !== id) {
		       lastId = id;
		       // Set/remove active class
		       menuItems
		         .parent().removeClass("active")
		         .end().filter("[href=\\#"+id+"]").parent().addClass("active");
		   }
		})

	/* ----------------------------------------------------------- */
	/*  8. LIGHTBOX ( FOR PORTFOLIO POPUP VIEW ) 
	/* ----------------------------------------------------------- */ 
	
	$('body').append("<div id='portfolio-popup'><div class='portfolio-popup-area'><div class='portfolio-popup-inner'></div></div></div>");
	
	// WHEN CLICK PLAY BUTTON 
	
    jQuery('.portfolio-social-icon').on('click', function(event) {
      event.preventDefault();
      $('#portfolio-popup').addClass("portfolio-popup-show");
      $('#portfolio-popup').animate({
	      "opacity": 1
      },500);   
      var portfolio_detailscontent = $(this).parent(".single-item-content").find(".portfolio-detail").html();
	  $(".portfolio-popup-inner").html(portfolio_detailscontent);     

    });  
           
    // WHEN CLICK CLOSE BUTTON
    
    $(document).on('click','.modal-close-btn', function(event) {     
	    event.preventDefault();
		$('#portfolio-popup').removeClass("portfolio-popup-show");
		$('#portfolio-popup').animate({
		      "opacity": 0
	    },500);  

    });

	/* ----------------------------------------------------------- */
	/*  9. MOBILE MENU CLOSE 
	/* ----------------------------------------------------------- */ 

	jQuery('.navbar-nav').on('click', 'li a', function() {
	  $('.in').collapse('hide');
	});

	/* ----------------------------------------------------------- */
	/*  10. PRELOADER 
	/* ----------------------------------------------------------- */ 

	jQuery(window).load(function() { // makes sure the whole site is loaded
            $('.loader').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(100).css({'overflow':'visible'});
        });

        /* ----------------------------------------------------------- */
	/*  11. INSTAGRAM SLIDER (SLICK SLIDER)
	/* ----------------------------------------------------------- */ 

	jQuery('.instagram-feed').slick({
		dots: true,
		infinite: true,
		speed: 500,
		arrows:true, 
		autoplay: true,     
                slidesToShow: 1,
		slide: 'div',		
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  12. WOW ANIMATION
	/* ----------------------------------------------------------- */ 

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

	/* ----------------------------------------------------------- */
	/* template STYLE SWITCHER 
	/* ----------------------------------------------------------- */ 

	// style switcher area hide & active

	  jQuery('.style-switch-button').on('click',function(){
	    $('.template_style_switcher').toggleClass("style-switch-active");
	  })

	  // template style css changed	 

	  $('#bridge').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/bridge-template.css');
	    e.preventDefault();
	  });

	  $('#default').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/default.css');
	    e.preventDefault();
	  });

	  $('#darkRed').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/dark-red-template.css');
	    e.preventDefault();
	  });

	  $('#green').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/green-template.css');
	    e.preventDefault();
	  });

	  $('#liteBlue').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/lite-blue-template.css');
	    e.preventDefault();
	  });

	  $('#orange').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/orange-template.css');
	    e.preventDefault();
	  });

	  $('#pink').on('click',function (e){	  	
	    $('#switcher').attr('href','resources/css/template-color/pink-template.css');
	    e.preventDefault();
	  });

	  $('#purple').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/purple-template.css');
	    e.preventDefault();
	  });

	  $('#red').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/red-template.css');
	    e.preventDefault();
	  });  

	  $('#yellow').on('click',function (e){
	    $('#switcher').attr('href','resources/css/template-color/yellow-template.css');
	    e.preventDefault();
	  });
          
	/* ----------------------------------------------------------- */
	/*  13. CUSTOM EVENTS
	/* ----------------------------------------------------------- */
        // map show
        $(".map-show").on('click',function(){
            $("#google-map").slideToggle('slow',function(){
                if($(".map-show i").hasClass( "fa-angle-down" )){
                    $(".map-show i").removeClass("fa-angle-down");
                    $(".map-show i").addClass("fa-angle-up");
                }else{
                    $(".map-show i").removeClass("fa-angle-up");
                    $(".map-show i").addClass("fa-angle-down");
                }
               
            });
        });
    
});

$(document).ready(function(){
    $('#search').val()==''
	let text = $('.newsman-button').text();
    $('.newsman-button').html('<span>'+text+'</span>');
    $('.newsman-button').closest('form').addClass('blog-search');
    $('.newsman-button').attr('data-text', text);
    $('.newsman-button').attr('class', 'button button-default');

	$('.com-like .fa.fa-thumbs-o-up, .com-like .fa.fa-thumbs-up').click(function (e) {
		e.preventDefault();
		var _this = $(this);
        var data = {
            action: 'like',
            post_id: $(this).data('id'),
        };

        $.post(ajaxurl, data, function(response) {
            response = JSON.parse(response);
        	var text = response.count == 1?' Like':' Likes';
            _this.parent().find('.like-count').text(response.count+text);
            if(response.like){
            	_this.attr("class","fa fa-thumbs-up")
			} else {
                _this.attr("class","fa fa-thumbs-o-up")
			}
        });
    })
});
var currElem = null;

$(document).mousedown(function(e) {
    currElem = e.target;
});

$('#search').on('blur', function (e) {
    if(currElem != null && currElem.id == "search_submit" && $('#search').val() != '') {
        $('#header-search').submit();
    }
});
