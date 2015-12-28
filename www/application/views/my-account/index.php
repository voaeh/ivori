<script>
</script>
<div class="clear height-pc-50"></div>

<article id="organic-content-grid">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php $this->load->view('_sidebar_blog.php');?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="top-40">
				<div class="account-title"><?php echo $this->lang->line('menu_my_account');?></div>
				
				<div class="col2-set" id="customer_login">

	<div class="col-1">


		<div class="login-page">
			<h2><?php echo $this->lang->line('side_login');?></h2>

			<form method="post" class="login" action="<?php echo site_url('myaccount/index') ?>">

				<input type="hidden" name="mode" value="login" />
				<?php if (isset($arrErr2)) { ?>
				<?php foreach ($arrErr2 as $val) { ?>
				<div class="red">
					<?php echo $val ?>
				</div>
				<?php } } ?>
				<p class="form-row form-row-wide top-30">
					<label for="username"><?php echo $this->lang->line('my_email');?><span class="red">*</span></label>
					<?php echo form_error('username'); ?>
					<input type="email" class="input-text" name="username" id="username" value="">
				</p>
				<p class="form-row form-row-wide">
					<label for="password"><?php echo $this->lang->line('my_password');?> <span class="red">*</span></label>
					<?php echo form_error('password'); ?>
					<input class="input-text" type="password" name="password" id="password">
				</p>

				
				<p class="form-row">
					<input type="submit" class="button" name="login" value="<?php echo $this->lang->line('my_login');?>">
					<label for="rememberme" class="inline" >
						<input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
						<span><?php echo $this->lang->line('side_remember');?></span>
					</label>
				</p>
				<p class="lost_password">
					<a href="<?php echo site_url('myaccount/lost_password'); ?>"><?php echo $this->lang->line('my_lost_password');?></a>
				</p>

				
			</form>
		</div>


	</div>

	<div class="col-2">

		<h2><?php echo $this->lang->line('my_register');?></h2>

		<form method="post" class="register" action="<?php echo site_url('myaccount/index') ?>">

			<input type="hidden" name="mode" value="register" />
			
			<?php if (isset($arrErr)) { ?>
				<?php foreach ($arrErr as $val) { ?>
				<div class="red">
					<?php echo $val ?>
				</div>
				<?php } } ?>
			<p class="form-row form-row-wide top-30">
				<label for="reg_email"><?php echo $this->lang->line('my_email');?> <span class="red">*</span></label>
				<?php echo form_error('reg_email'); ?>
				<input type="email" class="input-text" name="reg_email" id="reg_email" value="">
			</p>

			
				<p class="form-row form-row-wide">
					<label for="reg_password"><?php echo $this->lang->line('my_lost_password');?> <span class="red">*</span></label>
					<?php echo form_error('reg_password'); ?>
					<input type="password" class="input-text" name="reg_password" id="reg_password">
				</p>

						
			<p class="form-row">
				<input type="submit" class="button" name="register" value="<?php echo $this->lang->line('my_register');?>">
			</p>

			
		</form>

	</div>

</div>
	</div>				
		</div>
</article>

<div class="clear height-50"></div>