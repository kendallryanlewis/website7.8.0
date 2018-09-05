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
