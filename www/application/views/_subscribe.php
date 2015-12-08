<script>
	function formSubscribe()
	{
		var email = $("#subcribe_email").val();
		
		if (email == '')
		{
			alert('<?php echo $this->lang->line('sub_require_email');?>');
			return false;
		}
		
		var is_email = validateEmail(email);
		
		if (!is_email)
		{
			alert('<?php echo $this->lang->line('sub_valid_email');?>');
			return false;
		}
		
		$.post( "<?php echo site_url('top/registSubscribe'); ?>", { email: email }
		, function( data ) {
		  if (data.status)
		  {
			  alert('<?php echo $this->lang->line('sub_success_news');?>');
			  $("#es_msg").html('<?php echo $this->lang->line('sub_successful');?>');
			  $("#es_msg").show();
		  }
		  else
		  {
			  $("#es_msg").html('<?php echo $this->lang->line('sub_fail');?>');
			  $("#es_msg").show();
		  }
		}, "json");
	}
	
	function validateEmail(email) {
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
	}
	
</script>
<article id="organic-send-mail">
	<div class="container">
		<div class="bg-subcribe">
			<div id="email-subscribers-4" class="form-send-letter">
			<h2><?php echo $this->lang->line('sub_ivori');?></h2>			
		<div>
						
			<div class="es_lablebox"><?php echo $this->lang->line('sub_email');?> <span class="red">*</span></div>
			<div class="es_textbox">
				<input class="es_textbox_class" name="subcribe_email" id="subcribe_email" value="" maxlength="225" type="text" placeholder="email...">
			</div>
			<div class="clear-sp"></div>
			<div class="es_button">
				<input class="es_textbox_button" name="es_txt_button" id="es_txt_button" value="<?php echo $this->lang->line('sub_subscribe');?>" type="button" onclick="formSubscribe()">
			</div>

			<div class="es_msg"><span id="es_msg" style="display:none;"></span></div>
		</div>
		</div>		
		</div>
		
	</div>
</article>