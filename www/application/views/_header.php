<div class="header-left">
	<img id="logo" src="<?php echo base_url('public/img/common/logo.png');?>" />
</div>
<div class="header-right">
	<ul id="menu-pc">
		<li>
			<a href="<?php echo site_url('top'); ?>">HOME</a>
		</li>
		<li>
			<a href="<?php echo site_url('shop'); ?>">SHOP</a>
		</li>
		<li>
			<a href="<?php echo site_url('blog'); ?>">BLOG</a>
		</li>
		<li>
			<?php if ($this->session->userdata('customer_id') == null) { ?>
				<a href="<?php echo site_url('myaccount'); ?>" title="My Account">My Account</a>
			<?php }else{ ?>
				<a href="<?php echo site_url('myaccount/detail'); ?>" title="My Account">My Account</a>
			<?php } ?>
		</li>
		<li>
			<a href="<?php echo site_url('contact'); ?>">CONTACT</a>
		</li>
		<li>
			<a href="<?php echo site_url('about'); ?>">ABOUT US</a>
		</li>
	</ul>
</div>
<div class="clear"></div>

<div id="menu-cart"  >
<div class="menu-right">
	<a class="link-menu trigger closed" id="menu-right-button"><span class="a">Menu</span></a>
		<div id="menu-right-layout" class="menu-right-layout">
			<div class="main-menu-right">
				<ul>
					<li>
						<?php
							$productCount = 0;
							if (isset($_SESSION['cart']))
							{
								$productCount = count($this->session->userdata('cart'));
							}
						?>
						<a href="<?php echo site_url('cart'); ?>">My cart ( <?php echo $productCount ?> )</a>
					</li>
					<li>
						<?php if ($this->session->userdata('customer_id') == null) { ?>
						<a href="<?php echo site_url('myaccount'); ?>" title="My Account">My Account</a>
						<?php }else{ ?>
						<a href="<?php echo site_url('myaccount/detail'); ?>" title="My Account">My Account</a>
						<?php } ?>
					</li>
					<?php if ($this->session->userdata('customer_id') == null) { ?>
					<div class="form-login">
						<li class="poup-login active">
							<a href="#">Log in</a>
						</li>
						<div class="clear"></div>

						<div class="login">
							<form method="post" class="login" action="<?php echo site_url("myaccount/login") ?>">
								<p class="form-row form-row-wide">
									<input type="text" class="input-text" name="head_email" id="head_email" value="">
								</p>
								
								<div class="clear"></div>
								<p class="form-row form-row-wide">
									<input class="input-text" type="password" name="head_password" id="head_password">
								</p>

								<p class="form-row">									
									<label for="rememberme" class="inline remember">
									<input name="head_remember" type="checkbox" id="head_remember" value="1"> 
									Remember</label>
								</p>
								
								<div class="clear"></div>
								<div class="red" id="login-error"></div>
									<input type="button" class="button" name="login" value="Sign In" onclick="sideLogin()">
									<p></p>
							</form>
						</div>
					</div>
					<div class="clear"></div>
					<?php }else {?>
					<li>
						Hello, <?php echo $this->session->userdata('first_name') ?>
					</li>
					<?php } ?>
					<?php if ($this->session->userdata('customer_id') == null) { ?>
					<li class="">
						<a href="<?php echo site_url("myaccount") ?>">Sign Up</a>
					</li>
					<?php }else { ?>
					<li>
						<a href="<?php echo site_url("myaccount/logout")."?return_url=".site_url(uri_string()) ?>">Log Out</a>
					</li>
					<?php }?>
												
					</ul>
				</div>
		</div>
	</div>
</div>

<div id="menu-sp">
	  <nav>
	  <ul>
		<li>
			<a href="<?php echo site_url('top')?>">HOME</a>
		</li>
		<li>
			<a href="<?php echo site_url('shop'); ?>">SHOP</a>
		</li>
		<li>
			<a href="<?php echo site_url('blog'); ?>">BLOG</a>
		</li>
		<li>
			<a href="<?php echo site_url('myaccount'); ?>">MY ACCOUNT</a>
		</li>
		<li>
			<a href="<?php echo site_url('myaccount'); ?>">CART</a>
		</li>
		<li>
			<a href="<?php echo site_url('contact'); ?>">CONTACT</a>
		</li>
		<li>
			<a href="<?php echo site_url('about'); ?>">ABOUT US</a>
		</li>
	  </ul>
	  </nav>
</div>