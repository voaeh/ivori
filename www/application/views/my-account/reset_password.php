<div class="clear height-50"></div>

<form method="post" action="" >
<article id="organic-content-grid">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php $this->load->view('_sidebar_blog.php');?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="top-30">
				<div class="account-title"><?php echo $this->lang->line('reset_password');?></div>
				
				<?php echo $this->lang->line('reset_can');?>

				<p class="top-20">
					<label><?php echo $this->lang->line('my_new_password');?>	<span class="red">*</span></label><br>
					<?php echo form_error('new_password'); ?>
					<input type="password" name="new_password" id="new_password" class="normal-input-text" />
				</p>
				<p>
					<label><?php echo $this->lang->line('my_renew_password');?>	<span class="red">*</span></label><br>
					<?php echo form_error('renew_password'); ?>
					<input type="password" name="renew_password" id="renew_password" class="normal-input-text" />
				</p>
				
				<input type="submit" class="normal-button" name="register" value="<?php echo $this->lang->line('my_save');?>" >
				
				<?php if (isset($error)) { ?>
					<div class="red">
						<?php echo $error ?>
					</div>
				<?php } ?>
			
				<?php if (isset($success)) { ?>
					<div class="green">
						<?php echo $success ?>
					</div>
				<?php } ?>

			</div>				
		</div>
</article>
</form>
<div class="clear height-50"></div>