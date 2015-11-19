<?php $lang = get_lang(); ?>
<div class="clear height-pc-50 height-sp-40"></div>

<article id="organic-content-grid">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="sidebar-product">
				<div class="account-title">Shop</div>
				<div class="height-sp-20"></div>
				<div id="woocommerce_product_categories-4">
					<h2>Category</h2>
					<ul class="product-categories">
						<li>
							<a href="http://localhost/wordpress/product-category/butchers/">Butchers</a>
						</li>
						<li>
							<a href="http://localhost/wordpress/product-category/butchers/">Butchers</a>
						</li>
						<li>
							<a href="http://localhost/wordpress/product-category/butchers/">Butchers</a>
						</li>
						<li>
							<a href="http://localhost/wordpress/product-category/butchers/">Butchers</a>
						</li>
						<li>
							<a href="http://localhost/wordpress/product-category/butchers/">Butchers</a>
						</li>
						</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="product-right top-30">
				<nav class="gridlist-toggle">
					<a href="#" id="grid" title="Grid view" class="active"></a>
					<a href="#" id="list" title="List view"></a>
				</nav>
				<div class="shop-line"></div>
				
				<div id="product-gallery">
				<?php foreach($productList as $product) { ?>
				<div class="shop-product">
						<a href="<?php echo site_url('product/index/id/'.$product->product_id); ?>"><img src="<?php echo base_url('public/img/product/'.$product->product_id.'/'.$product->main_image); ?>" class="img-100" /></a>
						
						<div class="feature-title">
							<a href="<?php echo site_url('product/index/id/'.$product->product_id); ?>"><?php $product_name_en = 'product_name_'.$lang; echo $product->$product_name_en; ?></a>
						</div>
						<div class="feature-line">
						</div>
						<div class="feature-price">
							<?php echo $product->price ?> Baht
						</div>
						<div class="feature-button-block">
							<a href=""><button class="feature-button">ADD TO CART</button></a>
						 </div>
				</div>
				<?php } ?>
				
				<div class="clear"></div>
				</div>
				
			<div id="product-list">
			<?php foreach($productList as $product) { ?>
			<div class="shop-product-hon">
					<div class="product-hon-img">
						<a href="<?php echo site_url('product'); ?>?id=<?php echo $product->product_id ?>"><img src="<?php echo base_url('public/img/product/'.$product->product_id.'/'.$product->main_image); ?>" class="img-100" /></a>
					</div>
					<div class="product-hon-desc">
						<div class="product-hon-title"><a href="<?php echo site_url('product'); ?>"><?php $product_name_en = 'product_name_'.$lang; echo $product->$product_name_en; ?></a></div>
						<div class="product-line">
						<div class="product-hon-text"><?php $short_detail = 'short_detail_'.$lang; echo $product->$short_detail ?></div>
						<div class="product-hon-price"><?php echo $product->price ?> Baht</div>
						<div class="product-button-block">
							<a href=""><button class="product-button">ADD TO CART</button></a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="clear height-20"></div>

			<div class="shop-line"></div>
			
			<?php } ?>

			</div>
		</div>				
	</div>
</article>

<div class="clear height-50"></div>