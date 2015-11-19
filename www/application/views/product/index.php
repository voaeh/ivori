<?php $lang = get_lang(); ?>
<div class="clear height-40"></div>

<div class="product-line-full"></div>

<nav class="breadcrumb"><a href="http://localhost/wordpress">Home</a>
 / <a href="http://localhost/wordpress/product-category/fresh-noodle-tofe/">Fresh noodle &amp; Tofe</a>
 / Sample Shampoo</nav>
 
<div class="clear height-20"></div>

<article id="organic-detail">
	<div class="container">
	<div id="container">
	
	<?php if (isset($product)) { ?>
	<div id="content" role="main">

	<div itemscope="" itemtype="http://schema.org/Product" id="product-1515" class="post-1515 product type-product status-publish has-post-thumbnail product_cat-butchers product_cat-fresh-noodle-tofe product_cat-frozen product_cat-greens product_cat-pantry product_cat-small-goods shipping-taxable purchasable product-type-simple product-cat-butchers product-cat-fresh-noodle-tofe product-cat-frozen product-cat-greens product-cat-pantry product-cat-small-goods instock">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="images">
			<div class="img-big">
				<a href="<?php echo base_url('public/img/product/58.jpg');?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">
				<img width="600" height="600" src="<?php echo base_url('public/img/product/'.$product->product_id.'/'.$product->main_image); ?>" class="attachment-shop_single wp-post-image"></a>	
			</div>
	
		</div>
		</div>


	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="summary entry-summary pad-top-40">
			<div class="product_meta">
				<span class="posted_in title-detail"> 
					<a href="http://localhost/wordpress/product-category/butchers/" rel="tag">Butchers</a>, 
					<a href="http://localhost/wordpress/product-category/fresh-noodle-tofe/" rel="tag">Fresh noodle &amp; Tofe</a>, 
					<a href="http://localhost/wordpress/product-category/frozen/" rel="tag">Frozen</a>, 
					<a href="http://localhost/wordpress/product-category/greens/" rel="tag">Greens</a>, 
					<a href="http://localhost/wordpress/product-category/pantry/" rel="tag">Pantry</a>, 
					<a href="http://localhost/wordpress/product-category/small-goods/" rel="tag">Small goods</a>
				</span>
	
	
			</div>
			
		<h1 itemprop="name" class="product_title entry-title name-detail"><?php $product_name_en = 'product_name_'.$lang; echo $product->$product_name_en; ?></h1>
		<div class="border-description">
			<div itemprop="description" class="description-detail">
				<p><?php $short_detail = 'short_detail_'.$lang; echo $product->$short_detail; ?></p>
			</div>
		</div>


		<div class="price-detail"><span class="amount"><?php echo $product->price ?> Baht</span></div>
		<form class="cart" method="post" enctype="multipart/form-data">
	 		<div class="content-detail"></div>
			<span>Quantity</span>
		<div class="quantity"><input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"></div>
		
	 	<button type="submit" class="single_add_to_cart_button button alt">add to basket</button>
	 	

		</form>

<div class="clear"></div>
</div>



	</div><!-- .summary -->
	</div>

</div><!-- #product-1515 -->

	<?php } ?>
				
	</div>
	</div>
</article>

<div class="clear height-40"></div>