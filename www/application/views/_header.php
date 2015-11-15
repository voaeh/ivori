<div class="header-left">
	<img src="<?php echo base_url('public/img/common/logo.png');?>" />
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
			<a href="<?php echo site_url('myaccount'); ?>">MY ACCOUNT</a>
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
						<a href="<?php echo site_url('cart'); ?>">My cart ( 0 )</a>
					</li>
					<li>
						<a href="https://localhost/wordpress/my-account/" title="My Account">My Account</a>
					</li>
					<div class="form-login">
						<li class="poup-login active">
							<a href="#">Log in</a>
						</li>
						<div class="clear"></div>

						<div class="login">
							<form method="post" class="login" action="https://localhost/wordpress/my-account/">
								<p class="form-row form-row-wide">
									<input type="text" class="input-text" name="username" id="username" value="">
								</p>
								
								<div class="clear"></div>
								<p class="form-row form-row-wide">
									<input class="input-text" type="password" name="password" id="password">
								</p>

								<p class="form-row">									
									<label for="rememberme" class="inline remember">
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
									Remember</label>
								</p>
								
								<div class="clear"></div>
									<input type="submit" class="button" name="login" value="Sign In">
									<p></p>
							</form>
						</div>
					</div>
					<div class="clear"></div>
					
					<li class="">
						<a href="https://localhost/wordpress/my-account/">Sign Up</a>
					</li>
												
					</ul>
				</div>
		</div>
	</div>
</div>