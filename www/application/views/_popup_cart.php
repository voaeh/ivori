<div id="popup-cart" class="popup-cart">
	<a href="javascript:void(0)" onclick="closeCart()">
		<img src="<?php echo base_url("public/img/common/close.png"); ?>" class="popup-close-button" />
	</a>
	
	<div class="popup-cart-title">
		Added <span id="popup-product-name"></span>&nbsp;<span id="popup-product-quantity"></span> piece
	</div>
	
	<img src="<?php echo base_url("public/img/common/cart.gif"); ?>" class="img-25" />
	
	<table class="popup-table">
	<tr>
		<td>
		<input type="button" class="popup-button" value="continue shopping" onclick="closeCart()"/>
		</td>
		<td>
		<input type="button" class="popup-button" value="view cart" />
		</td>
	</tr>
	</table>
</div>
<div id="overlay" class="overlay">
</div>
<input type="hidden" id="url" value="<?php echo site_url(); ?>" />