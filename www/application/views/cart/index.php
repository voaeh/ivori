<script>
	function formSubmit(mode)
	{
		$("#mode").val(mode);
		$("#form1").submit();
	}
	
	function deleteCart(product_id)
	{
		$("#mode").val('deleteCart');
		$("#product_id").val(product_id);
		$("#form1").submit();
	}
</script>
<div class="clear height-pc-50"></div>

<article id="organic-content-grid" class="blog-left">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <?php $this->load->view('_sidebar_blog.php');?>
        </div>

		
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div id="content-blog-full">
                    
<article id="post-7" class="post-7 page type-page status-publish hentry">
<div class="entry-content">
    <div class="woocommerce">
		<form id="form1" action="<?php echo site_url("cart/updateCart"); ?>" method="post">
		<input type="hidden" name="mode" id="mode" />
		<input type="hidden" name="product_id" id="product_id" />
		<div class="title-order"><?php echo $this->lang->line('cart_yourorder');?></div>
		
		<?php if (!isset($cart)) { ?>
		
		<div><?php echo $this->lang->line('cart_empty');?></div>
		
		<?php } else { ?>
		
		<table id="cart-table-pc" class="shop_table cart" cellspacing="0">
			<thead>
				<tr>
					<th class="product-thumbnail">&nbsp;</th>
					<th class="product-name"><?php echo $this->lang->line('cart_product');?></th>
					<th class="product-remove">&nbsp;</th>
					<th class="product-price"><?php echo $this->lang->line('cart_price');?></th>
					<th class="product-quantity"><?php echo $this->lang->line('cart_quantity');?></th>
					<th class="product-subtotal"><?php echo $this->lang->line('cart_total');?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($cart as $val) { ?>
				<tr class="cart_item">
					<td class="product-remove">
						<a href="javascript:void(0)" onclick="deleteCart('<?php echo $val['product_id'] ?>')" class="remove" title="Remove this item">×</a></td>
					<td class="product-thumbnail">
						<a href="">
							<img width="180" height="180" src="<?php echo base_url('public/img/product/'.$val['product_id'].'/'.$val['main_image']);?>" class="attachment-shop_thumbnail wp-post-image"></a>					
					</td>
					<td class="product-name">
						<a href=""><?php echo $val['product_name'] ?></a><br>					
					</td>
					<td class="product-price">
						<span class="amount"><?php echo $val['price'] ?> <?php echo $this->lang->line('shop_baht');?></span>					
					</td>
					<td class="product-quantity">
						<div class="quantity">
							<input type="number" step="1" min="0" name="quantity[<?php echo $val['product_id'] ?>]" value="<?php echo $val['quantity'] ?>" title="Qty" class="input-text qty text" size="4"></div>
					</td>
					<td class="product-subtotal">
						<span class="amount"><?php echo $val['subtotal'] ?> <?php echo $this->lang->line('shop_baht');?></span>					
					</td>
				</tr>
			<?php } ?>
				<tr>
					<td colspan="6" class="actions right">
						<input type="button" class="button" onclick="formSubmit('pc')" name="update_cart" value="<?php echo $this->lang->line('cart_updatecart');?>">
					</td>
				</tr>

			</tbody>
	</table>
	
	<table id="cart-table-sp" class="shop_table cart" cellspacing="0">
			<?php foreach ($cart as $val) { ?>
				<tr class="cart_item">
					<td class="product-remove">
						<a href="javascript:void(0)" class="remove" title="Remove this item" onclick="deleteCart('<?php echo $val['product_id'] ?>')">×</a>
					</td>
				</tr>
				<tr>
					<td class="product-thumbnail">
						<a href="">
							<img width="180" height="180" src="<?php echo base_url('public/img/product/'.$val['product_id'].'/'.$val['main_image']);?>" class="attachment-shop_thumbnail wp-post-image" ></a>					
					</td>
				</tr>
				<tr>
					<td class="product-name">
						<a href=""><?php echo $val['product_name'] ?></a><br>					
					</td>
				</tr>
				<tr>
					<td class="product-price">
						<span class="amount"><?php echo $val['price'] ?> <?php echo $this->lang->line('shop_baht');?></span>					
					</td>
				</tr>
				<tr>
					<td class="product-quantity">
						<div class="quantity">
						<?php echo $this->lang->line('cart_quantity');?>&nbsp;&nbsp;<input type="number" step="1" min="0" name="quantity2[<?php echo $val['product_id'] ?>]" value="<?php echo $val['quantity'] ?>" title="Qty" class="input-text qty text" size="4"></div>
					</td>
				</tr>
				<tr>	
					<td class="product-subtotal">
						<?php echo $this->lang->line('cart_total');?>&nbsp;&nbsp;<span class="amount"><?php echo $val['subtotal'] ?> <?php echo $this->lang->line('shop_baht');?></span>					
					</td>
				</tr>
			<?php } ?>
				<tr>
					<td colspan="6" class="actions right">
						<input type="button" class="button" onclick="formSubmit('sp')" name="update_cart" value="Update Cart">
					</td>
				</tr>
	</table>


<div class="cart-collaterals">
	<div class="cart_totals ">
	<h2><?php echo $this->lang->line('cart_cart_total');?></h2>

	<table cellspacing="0" class="cart-table">
		<tr class="cart-subtotal">
			<th><?php echo $this->lang->line('cart_subtotal');?></th>
			<td><span class="amount"><?php echo $total ?> <?php echo $this->lang->line('shop_baht');?></span></td>
		</tr>
		<tr class="order-total">
			<th><?php echo $this->lang->line('cart_total');?></th>
			<td><strong><span class="amount"><?php echo $total ?> <?php echo $this->lang->line('shop_baht');?></span></strong></td>
		</tr>
	</table>

	
	<div class="wc-proceed-to-checkout">
		<a href="<?php echo site_url("shop") ?>" class="feature-button"><?php echo $this->lang->line('cart_continue');?></a>
		<a href="<?php echo site_url("checkout") ?>" class="feature-button"><?php echo $this->lang->line('cart_checkout');?></a>
	</div>

	
</div>

</div>
</form>
<?php } ?>
</div>
</div><!-- .entry-content -->

                    <footer class="entry-meta">
                                            </footer><!-- .entry-meta -->
                </article><!-- #post -->

                 
<div id="comments" class="comments-area">
 	
	
		<div class="form-comment">
													</div>

						<div class="form-reply">
							<div class="row">
																		 
		 		 	
 
	
 
</div><!-- #comments -->                                </div>  
                </div>
            </div>
</div>                                        
<div class="clear height-50"></div>