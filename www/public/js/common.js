$(this).ready(function(){
	$("#menu-right-button").mouseenter(function () {
		$("#menu-right-button").addClass("activelink-menu");
		$(".menu-right-layout").fadeIn();
    });
    $(".menu-right-layout").mouseleave(function () {
		$("#menu-right-button").removeClass("activelink-menu");
		$(".menu-right-layout").fadeOut();
    });
	
	$("#grid").click(function () {
		$("#grid").addClass("active");
		$("#list").removeClass("active");
		$("#product-list").fadeOut();
		$("#product-gallery").fadeIn();
    });
	
	$("#list").click(function () {
		$("#grid").removeClass("active");
		$("#list").addClass("active");
		$("#product-list").fadeIn();
		$("#product-gallery").fadeOut();
    });
	
	$('.single-item').slick({
			dots: true,
			slidesToShow: 1,
		    slidesToScroll: 1,
		    autoplay: true,
		    autoplaySpeed: 5000,
			arrows: false,
	});
	
	
	$('.multi-item').slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed:3000,
	  responsive: [
		{
		  breakpoint: 769,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true,
			autoplay: true,
		    autoplaySpeed:3000,
		  }
		},
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});
});
	