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

$(window).bind("load", function() {
  $('#owncloud_one').prepend('<iframe src="/owncloud/index.php" width="100%" height="100%" style="border:none"></iframe>');
});

$(window).bind("load", function() {
  $('#owncloud_two').prepend('<iframe src="/owncloud/index.php" width="100%" height="100%" style="border:none"></iframe>');
});

$(window).bind("load", function() {
  $('#owncloud_three').prepend('<iframe src="/owncloud/index.php" width="100%" height="100%" style="border:none"></iframe>');
});

$(window).bind("load", function() {
  $('#owncloud_four').prepend('<iframe src="/owncloud/index.php" width="100%" height="100%" style="border:none"></iframe>');
});