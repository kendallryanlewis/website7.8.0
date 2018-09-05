$(document).ready(function(){
	
	// Variables
	var clickedTab = $(".tabsMain > .activeMain");
	var tabWrapper = $(".tab__contentMain");
	var activeMainTab = tabWrapper.find(".activeMain");
	var activeMainTabHeight = activeMainTab.outerHeight();
	
	// Show tab on page load
	activeMainTab.show();
	
	// Set height of wrapper on page load
	tabWrapper.height(activeMainTabHeight);
	
	$(".tabsMain > li").on("click", function() {
		
		// Remove class from activeMain tab
		$(".tabsMain > li").removeClass("activeMain");
		
		// Add class activeMain to clicked tab
		$(this).addClass("activeMain");
		
		// Update clickedTab variable
		clickedTab = $(".tabsMain .activeMain");
		
		// fade out activeMain tab
		activeMainTab.fadeOut(250, function() {
			
			// Remove activeMain class all tabsMain
			$(".tab__contentMain > li").removeClass("activeMain");
			
			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class activeMain to corresponding tab
			$(".tab__contentMain > li").eq(clickedTabIndex).addClass("activeMain");
			
			// update new activeMain tab
			activeMainTab = $(".tab__contentMain > .activeMain");
			
			// Update variable
			activeMainTabHeight = activeMainTab.outerHeight();
			
			// Animate height of wrapper to new tab height
			tabWrapper.stop().delay(50).animate({
				height: activeMainTabHeight
			}, 500, function() {
				
				// Fade in activeMain tab
				activeMainTab.delay(50).fadeIn(250);
				
			});
		});
	});
	
	// Variables
	var colorButton = $(".colors li");
	
	colorButton.on("click", function(){
		
		// Remove class from currently activeMain button
		$(".colors > li").removeClass("activeMain-color");
		
		// Add class activeMain to clicked button
		$(this).addClass("activeMain-color");
		
		// Get background color of clicked
		var newColor = $(this).attr("data-color");
		
		// Change background of everything with class .bg-color
		$(".bg-color").css("background-color", newColor);
		
		// Change color of everything with class .text-color
		$(".text-color").css("color", newColor);
	});
});