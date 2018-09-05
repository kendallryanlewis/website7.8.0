// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

jQuery(document).ready(function() {
    jQuery('.tabsMediaSettings .tabMediaSettings-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabsMediaSettings ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('activeSettings').siblings().removeClass('activeSettings');
 
        e.preventDefault();
    });
});

jQuery(document).ready(function() {
    jQuery('.tabsNavigatorSettings .tabNavigatorSettings-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabsNavigatorSettings ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('activeSettings').siblings().removeClass('activeSettings');
 
        e.preventDefault();
    });
});

jQuery(document).ready(function() {
    jQuery('.tabsSettings .tabSettings-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabsSettings ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('activeSettings').siblings().removeClass('activeSettings');
 
        e.preventDefault();
    });
});

jQuery(document).ready(function() {
    jQuery('.tabsSocialSettings .tabSocialSettings-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabsSocialSettings ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('activeSettings').siblings().removeClass('activeSettings');
 
        e.preventDefault();
    });
});

jQuery(document).ready(function() {
    jQuery('.tabsNavigatorSettings .tabNavigatorSettings-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabsNavigatorSettings ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('activeNavigator').siblings().removeClass('activeNavigator');
 
        e.preventDefault();
    });
});
(function() {
    var signup = $('.container--static .button--signup');
    var login = $('.container--static .button--login');
    var signupContent = $('.container--sliding .slider-content.signup');
    var loginContent = $('.container--sliding .slider-content.login');
    var slider = $('.container--sliding');

    signup.on('click', function() {
        loginContent.css('display', 'none');
        signupContent.css('display', 'initial');
        slider.animate({
            'left': '30%'
        }, 350, 'easeOutBack');
    });

    login.on('click', function() {
        signupContent.css('display', 'none');
        loginContent.css('display', 'initial');
        slider.animate({
            'left': '70%'
        }, 350, 'easeOutBack');
    });
})();



function slideshow() {
  // clone
  $('.slider-1').clone().removeClass('slider-1').addClass('slider-2').insertAfter($('.slider'));

  // set first
  $('.slider-1').slick({
    draggable: false,
    dots: false,
    infinite: true,
    responsive: true,
    asNavFor: '.slider-2',
    touchThreshold: 20,
    speed: 1000,
    fade: true
  });

  // set second
  $('.slider-2').slick({
    dots: true,
    infinite: true,
    responsive: true,
    asNavFor: '.slider-1',
    arrows: false,
    speed: 1000,
    easing: 'easeInOutQuart'
  });
}

$(function() {
  slideshow();
  setTimeout(function() {
    $('.slider-1 .slick-next').click();
  }, 1000);
})


jQuery(document).ready(function($){
	var tabItems = $('.cd-tabs-navigation a'),
		tabContentWrapper = $('.cd-tabs-content');

	tabItems.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this);
		if( !selectedItem.hasClass('selected') ) {
			var selectedTab = selectedItem.data('content'),
				selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
				slectedContentHeight = selectedContent.innerHeight();
			
			tabItems.removeClass('selected');
			selectedItem.addClass('selected');
			selectedContent.addClass('selected').siblings('li').removeClass('selected');
			//animate tabContentWrapper height when content changes 
			tabContentWrapper.animate({
				'height': slectedContentHeight
			}, 200);
		}
	});

	//hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
	checkScrolling($('.cd-tabs nav'));
	$(window).on('resize', function(){
		checkScrolling($('.cd-tabs nav'));
		tabContentWrapper.css('height', 'auto');
	});
	$('.cd-tabs nav').on('scroll', function(){ 
		checkScrolling($(this));
	});

	function checkScrolling(tabs){
		var totalTabWidth = parseInt(tabs.children('.cd-tabs-navigation').width()),
		 	tabsViewport = parseInt(tabs.width());
		if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
			tabs.parent('.cd-tabs').addClass('is-ended');
		} else {
			tabs.parent('.cd-tabs').removeClass('is-ended');
		}
	}
});

jQuery(document).ready(function($){
	var tabItems = $('.cd-tabsNavigator-navigation a'),
		tabContentWrapper = $('.cd-tabsNavigator-content');

	tabItems.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this);
		if( !selectedItem.hasClass('selected') ) {
			var selectedTab = selectedItem.data('content'),
				selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
				slectedContentHeight = selectedContent.innerHeight();
			
			tabItems.removeClass('selected');
			selectedItem.addClass('selected');
			selectedContent.addClass('selected').siblings('li').removeClass('selected');
			//animate tabContentWrapper height when content changes 
			tabContentWrapper.animate({
				'height': slectedContentHeight
			}, 200);
		}
	});

	//hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
	checkScrolling($('.cd-tabsNavigator nav'));
	$(window).on('resize', function(){
		checkScrolling($('.cd-tabsNavigator nav'));
		tabContentWrapper.css('height', 'auto');
	});
	$('.cd-tabs nav').on('scroll', function(){ 
		checkScrolling($(this));
	});

	function checkScrolling(tabs){
		var totalTabWidth = parseInt(tabs.children('.cd-tabsNavigator-navigation').width()),
		 	tabsViewport = parseInt(tabs.width());
		if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
			tabs.parent('.cd-tabsNavigator').addClass('is-ended');
		} else {
			tabs.parent('.cd-tabsNavigator').removeClass('is-ended');
		}
	}
});