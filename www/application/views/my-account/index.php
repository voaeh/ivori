<div class="clear height-50"></div>

<article id="organic-content-grid">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php $this->load->view('_sidebar_blog.php');?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="top-30">
				<div class="account-title">My Account</div>
				
				<div class="col2-set" id="customer_login">

	<div class="col-1">


		<div class="login-page">
			<h2>Login</h2>

			<form method="post" class="login">

				
				<p class="form-row form-row-wide top-30">
					<label for="username">Username or email address <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="username" value="">
				</p>
				<p class="form-row form-row-wide">
					<label for="password">Password <span class="required">*</span></label>
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
					<a href="https://localhost/wordpress/my-account/lost-password/">Lost your password?</a>
				</p>

				
			</form>
		</div>


	</div>

	<div class="col-2">

		<h2>Register</h2>

		<form method="post" class="register">

			
			
			<p class="form-row form-row-wide top-30">
				<label for="reg_email">Email address <span class="required">*</span></label>
				<input type="email" class="input-text" name="email" id="reg_email" value="">
			</p>

			
				<p class="form-row form-row-wide">
					<label for="reg_password">Password <span class="required">*</span></label>
					<input type="password" class="input-text" name="password" id="reg_password">
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