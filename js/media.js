;(function() {
	
	$(function() {	
		$(window).resize(windowResize)
		
		$(window).trigger("resize")
	})
	
	function windowResize() {
		$("iframe").attr("width", $(".slideshow-container").width())
	}
	
})();