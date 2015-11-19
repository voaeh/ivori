<script>
	function formSubscribe()
	{
		var email = $("#subcribe_email").val();
		
		if (email == '')
		{
			alert('Please enter email address.');
			return false;
		}
		
		var is_email = validateEmail(email);
		
		if (!is_email)
		{
			alert('Please provide a valid email address.');
			return false;
		}
		
		$.post( "<?php echo site_url('top/registSubscribe'); ?>", { email: email }
		, function( data ) {
		  if (data.status)
		  {
			  alert('Your have successfully subcribed to newsletter.');
			  $("#es_msg").html('Subscribed successfully.');
			  $("#es_msg").show();
		  }
		  else
		  {
			  $("#es_msg").html('Subscribed fail.');
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
			<h2>Subscribe Ivori</h2>			
		<div>
						
			<div class="es_lablebox">Email *</div>
			<div class="es_textbox">
				<input class="es_textbox_class" name="subcribe_email" id="subcribe_email" value="" maxlength="225" type="text" placeholder="email...">
			</div>
			<div class="clear-sp"></div>
			<div class="es_button">
				<input class="es_textbox_button" name="es_txt_button" id="es_txt_button" value="Subscribe" type="button" onclick="formSubscribe()">
			</div>

			<div class="es_msg"><span id="es_msg" style="display:none;"></span></div>
		</div>
		</div>		
		</div>
		
	</div>
</article>