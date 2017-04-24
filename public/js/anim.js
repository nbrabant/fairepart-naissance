$(document).ready(function(){
	var scroll_speed = 1;

	$('.play').click(function(e){
		var page_height = $('body').height();
		var page_position = $(document).scrollTop();
		$("body, html").animate( { scrollTop: page_height } , Math.abs(page_position - page_height) * scroll_speed);
	});
	var state = s.getScrollTop();

	function setOdometerState() {
		state = s.getScrollTop();
		if(state >= 13700 && state <= 14100){
			$("#odometer_1").html(85);
		}
		if(state >= 18700 && state <= 19500){
			$("#odometer_2").html(822);
		}
		if(state >= 24250 && state <= 25000){
			$("#odometer_3").html(10);
		}
		if(state >= 30250 && state <= 34000){
			$("#odometer_4").html(2762305);
		}
		if(state >= 36250 && state <= 37000){
			$("#odometer_5").html(635);
		}
	}

	$(window).scroll(function() {
		setOdometerState();
	});
	$('body').bind('touchmove', function(e) {
		setOdometerState();
	});

});