<div class="header-left">
	<img id="logo" src="<?php echo base_url('public/img/common/logo.png');?>" />
</div>
<div class="header-right">
	<ul id="menu-pc">
		<li>
			<a href="<?php echo site_url('top'); ?>"><?php echo $this->lang->line('menu_home');?></a>
		</li>
		<li>
			<a href="<?php echo site_url('shop'); ?>"><?php echo $this->lang->line('menu_shop');?></a>
		</li>
		<li>
			<a href="<?php echo site_url('blog'); ?>"><?php echo $this->lang->line('menu_blog');?></a>
		</li>
		<li>
			<?php if ($this->session->userdata('customer_id') == null) { ?>
				<a href="<?php echo site_url('myaccount'); ?>"><?php echo $this->lang->line('menu_my_account');?></a>
			<?php }else{ ?>
				<a href="<?php echo site_url('myaccount/detail'); ?>" ><?php echo $this->lang->line('menu_my_account');?></a>
			<?php } ?>
		</li>
		<li>
			<a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('menu_contact');?></a>
		</li>
		<li>
			<a href="<?php echo site_url('about'); ?>"><?php echo $this->lang->line('menu_ABOUTUS');?></a>
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
						<div class="header-small"><a href="<?php echo site_url('langswitch/switchLanguage/lang/th/uri/'.uri_string());?>">ภาษาไทย <img src="<?php echo base_url("public/img/common/flag_th.jpg") ?>" /></a>
						| <a href="<?php echo site_url('langswitch/switchLanguage/lang/en/uri/'.uri_string());?>">English <img src="<?php echo base_url("public/img/common/flag_en.jpg") ?>" /></a>
						</div>
					</li>
					<li>
						<?php
							$productCount = 0;
							if (isset($_SESSION['cart']))
							{
								$productCount = count($this->session->userdata('cart'));
							}
						?>
						<a href="<?php echo site_url('cart'); ?>"><?php echo $this->lang->line('side_mycart');?> ( <?php echo $productCount ?> )</a>
					</li>
					<li>
						<?php if ($this->session->userdata('customer_id') == null) { ?>
						<a href="<?php echo site_url('myaccount'); ?>" ><?php echo $this->lang->line('menu_my_account');?></a>
						<?php }else{ ?>
						<a href="<?php echo site_url('myaccount/detail'); ?>" ><?php echo $this->lang->line('menu_my_account');?></a>
						<?php } ?>
					</li>
					<?php if ($this->session->userdata('customer_id') == null) { ?>
					<div class="form-login">
						<li class="poup-login active">
							<a href="#"><?php echo $this->lang->line('side_login');?></a>
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
									<?php echo $this->lang->line('side_remember');?></label>
								</p>
								
								<div class="clear"></div>
								<div class="red" id="login-error"></div>
									<input type="button" class="button" name="login" value="<?php echo $this->lang->line('side_signin');?>" onclick="sideLogin()">
									<p></p>
							</form>
						</div>
					</div>
					<div class="clear"></div>
					<?php }else {?>
					<li>
						<?php echo $this->lang->line('side_hello');?><?php echo $this->session->userdata('first_name') ?>
					</li>
					<?php } ?>
					<?php if ($this->session->userdata('customer_id') == null) { ?>
					<li class="">
						<a href="<?php echo site_url("myaccount") ?>"><?php echo $this->lang->line('side_signup');?></a>
					</li>
					<?php }else { ?>
					<li>
						<a href="<?php echo site_url("myaccount/logout")."?return_url=".site_url(uri_string()) ?>"><?php echo $this->lang->line('side_logout');?></a>
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
			<a href="<?php echo site_url('top'); ?>"><?php echo $this->lang->line('menu_home');?></a>
		</li>
		<li>
			<a href="<?php echo site_url('shop'); ?>"><?php echo $this->lang->line('menu_shop');?></a>
		</li>
		<li>
			<a href="<?php echo site_url('blog'); ?>"><?php echo $this->lang->line('menu_blog');?></a>
		</li>
		<li>
			<?php if ($this->session->userdata('customer_id') == null) { ?>
				<a href="<?php echo site_url('myaccount'); ?>"><?php echo $this->lang->line('menu_my_account');?></a>
			<?php }else{ ?>
				<a href="<?php echo site_url('myaccount/detail'); ?>" ><?php echo $this->lang->line('menu_my_account');?></a>
			<?php } ?>
		</li>
		<li>
			<a href="<?php echo site_url('cart'); ?>"><?php echo $this->lang->line('side_mycart');?> ( <?php echo $productCount ?> )</a>
		</li>
		<?php if ($this->session->userdata('customer_id') != null) { ?>
		<li>
			<a href="<?php echo site_url('myaccount/logout'); ?>"><?php echo $this->lang->line('side_logout');?></a>
		</li>
		<?php } ?>
		<li>
			<a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('menu_contact');?></a>
		</li>
		<li>
			<a href="<?php echo site_url('about'); ?>"><?php echo $this->lang->line('menu_ABOUTUS');?></a>
		</li>
	  </ul>
	  </nav>
	  
	  <div class="header-small-sp"><a href="<?php echo site_url('langswitch/switchLanguage/lang/th/uri/'.uri_string());?>">ภาษาไทย <img src="<?php echo base_url("public/img/common/flag_th.jpg") ?>" /></a>
		| <a href="<?php echo site_url('langswitch/switchLanguage/lang/en/uri/'.uri_string());?>">English <img src="<?php echo base_url("public/img/common/flag_en.jpg") ?>" /></a>
	  </div>
</div>