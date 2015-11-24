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
				<div class="account-title">My Account</div>
				
				<div class="col2-set" id="customer_login">

	<div class="col-1">


		<div class="login-page">
			<h2>Login</h2>

			<form method="post" class="login" action="<?php echo site_url('myaccount/index') ?>">

				<input type="hidden" name="mode" value="login" />
				<?php if (isset($arrErr2)) { ?>
				<?php foreach ($arrErr2 as $val) { ?>
				<div class="red">
					<?php echo $val ?>
				</div>
				<?php } } ?>
				<p class="form-row form-row-wide top-30">
					<label for="username">Email address<span class="required">*</span></label>
					<?php echo form_error('username'); ?>
					<input type="email" class="input-text" name="username" id="username" value="">
				</p>
				<p class="form-row form-row-wide">
					<label for="password">Password <span class="required">*</span></label>
					<?php echo form_error('password'); ?>
					<input class="input-text" type="password" name="password" id="password">
				</p>

				
				<p class="form-row">
					<input type="submit" class="button" name="login" value="Login">
					<label for="rememberme" class="inline" >
						<input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
						<span>Remember Me</span>
					</label>
				</p>
				<p class="lost_password">
					<a href="<?php echo site_url('myaccount/lost_password'); ?>">Lost your password?</a>
				</p>

				
			</form>
		</div>


	</div>

	<div class="col-2">

		<h2>Register</h2>

		<form method="post" class="register" action="<?php echo site_url('myaccount/index') ?>">

			<input type="hidden" name="mode" value="register" />
			
			<?php if (isset($arrErr)) { ?>
				<?php foreach ($arrErr as $val) { ?>
				<div class="red">
					<?php echo $val ?>
				</div>
				<?php } } ?>
			<p class="form-row form-row-wide top-30">
				<label for="reg_email">Email address <span class="required">*</span></label>
				<?php echo form_error('reg_email'); ?>
				<input type="email" class="input-text" name="reg_email" id="reg_email" value="">
			</p>

			
				<p class="form-row form-row-wide">
					<label for="reg_password">Password <span class="required">*</span></label>
					<?php echo form_error('reg_password'); ?>
					<input type="password" class="input-text" name="reg_password" id="reg_password">
				</p>

						
			<p class="form-row">
				<input type="submit" class="button" name="register" value="Register">
			</p>

			
		</form>

	</div>

</div>
	</div>				
		</div>
</article>

<div class="clear height-50"></div>