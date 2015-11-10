$(this).ready(function(){
	$("#menu-right-button").mouseenter(function () {
		$("#menu-right-button").addClass("activelink-menu");
		$(".menu-right-layout").fadeIn();
    });
    $(".menu-right-layout").mouseleave(function () {
		$("#menu-right-button").removeClass("activelink-menu");
		$(".menu-right-layout").fadeOut();
    });
	
	$('.single-item').slick({
			dots: true,
			slidesToShow: 1,
		    slidesToScroll: 1,
		    autoplay: true,
		    autoplaySpeed: 5000,
			arrows: false,
	});
});
	