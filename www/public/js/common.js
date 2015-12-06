$(this).ready(function(){
	$("#menu-right-button").mouseenter(function () {
		if($(".menu-right-layout").css('display') === 'none') {
			$("#menu-right-button").addClass("activelink-menu");
			$(".menu-right-layout").show();
		}
    });
    $(".menu-right-layout").mouseleave(function () {
		$("#menu-right-button").removeClass("activelink-menu");
		$(".menu-right-layout").hide();
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
	
	$('#menu-sp nav').meanmenu();
	

});

$(document).mouseup(function (e)
{
    var container = $("#popup-cart");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
		$("#overlay").fadeOut();
    }
});

$( window ).resize(function() {
  if ($(window).width() <= 767 )
  {
	  $("#grid").addClass("active");
	  $("#list").hide();
	  $("#product-list").fadeOut();
	  $("#product-gallery").fadeIn();
  }
  else
  {
	  $("#grid").addClass("active");
	  $("#list").removeClass("active");
	  $("#list").show();
	  $("#product-list").fadeOut();
	  $("#product-gallery").fadeIn();
  }
});

function addToCart(product_id, quantity)
{
	if (quantity == '0')
	{
		quantity = $("#quantity").val();
	}
	
	var url = $("#url").val() + "/cart/addCart";
	$.post( url, { product_id: product_id, quantity: quantity }
	, function( data ) {
	  if (data.status)
	  {
		document.location = $("#url").val()+"/cart/index";
	  }
	}, "json");
}

function closeCart()
{
	$("#overlay").fadeOut();
	$("#popup-cart").fadeOut();
}

function sideLogin()
{
	$("#login-error").html("");
	var email = $("#head_email").val();
	var password = $("#head_password").val();
	var remember = $("#head_remember").val();
	
	var url = $("#url").val() + "/myaccount/login";

	$.post( url, { email: email, password: password, remember:remember }
	, function( data ) {
	  if (data.status)
	  {
		location.reload();
	  }
	  else
	  {
		  $("#login-error").html(data.message);
	  }
	}, "json");
}
	