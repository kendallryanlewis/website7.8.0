jQuery(document).ready(function() {
    jQuery('.tabsPortal .tabPortal-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabsPortal ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('activePortal').siblings().removeClass('activePortal');
 
        e.preventDefault();
    });
});
