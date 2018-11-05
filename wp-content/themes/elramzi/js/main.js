$(document).ready(function() {
	'use strict';

	var scrollBotton = $("#topbotton");
	$(window).scroll(function() {
		//console.log($(this).scrollTop());
		if($(this).scrollTop() >= 500) {
			scrollBotton.show();
		} else {
			scrollBotton.hide();
		}

	});
	scrollBotton.click(function() {
		$("html,body").animate({
			scrollTop : 0
		}, 600);
	});
	
	 
});