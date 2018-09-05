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


$(window).bind("load", function() {
  $('#media_one').prepend('<iframe width="100%" height="100%" src="http://kendalllewisMedia.us.to:32400/web/index.html" style="border:none"></iframe>');
});

$(window).bind("load", function() {
  $('#media_two').prepend('<iframe width="100%" height="100%" src="http://kendalllewisMedia.us.to:32400/web/index.html" style="border:none"></iframe>');
});

$(window).bind("load", function() {
  $('#media_three').prepend('<iframe width="100%" height="100%" src="http://kendalllewisMedia.us.to:32400/web/index.html" style="border:none"></iframe>');
});

$(window).bind("load", function() {
  $('#media_four').prepend('<iframe width="100%" height="100%" src="http://kendalllewisMedia.us.to:32400/web/index.html" style="border:none"></iframe>');
});