<script>
	function formSubmit()
	{
		$("#checkoutForm").submit();
	}
</script>
<div class="clear height-50"></div>

<article id="organic-content-grid">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php $this->load->view('_sidebar_blog.php');?>
		</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div id="content-blog-full">
                    
<article id="post-8" class="post-8 page type-page status-publish hentry">
    <div class="entry-header">
                        
        <h1 class="entry-title"><?php echo $this->lang->line('my_account_detail');?></h1><br>
		<?php echo $this->lang->line('my_account_desc');?>
    </div><!-- .entry-header -->
	
	    <div class="entry-content">
    <div class="woocommerce">
<form id="checkoutForm" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo site_url('myaccount/detail') ?>" enctype="multipart/form-data">
		<input type="hidden" name="mode" value="update" />
		<div class="col-100" style="border:0">
			<div class="woocommerce-shipping-fields">
			<h3><?php echo $this->lang->line('my_account_profile');?></h3>

			<table class="account-table">
			<tr>
				<td class="a-left">
					<p class="form-row form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
					<label for="first_name" class=""><?php echo $this->lang->line('my_firstname');?> <abbr class="required" title="required">*</abbr></label>
					<?php echo form_error('first_name'); ?>
					<input type="text" class="input-text" name="first_name" id="first_name" placeholder="" value="<?php if (isset($arrForm['first_name'])) echo $arrForm['first_name'] ?>"></p>
				</td>
	
				<td class="a-right">
					<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
						<label for="last_name" class=""><?php echo $this->lang->line('my_lastname');?> <abbr class="required" title="required">*</abbr></label>
						<?php echo form_error('last_name'); ?>
						<input type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="<?php if (isset($arrForm['last_name'])) echo $arrForm['last_name'] ?>">
					</p>
				</td>
			</tr>
			<tr>
				<td class="a-left">
				<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
					<label for="password" class=""><?php echo $this->lang->line('my_password');?> <abbr class="required" title="required">*</abbr></label>
					<?php if (isset($arrErr['password'])) { ?>
						<div class="red">
							<?php echo $arrErr['password'] ?>
						</div>
					<?php } ?>
					<input type="password" class="input-text " name="password" id="password" placeholder="" value="">
					<br>
					<?php echo $this->lang->line('my_leave_blank');?>
				</p>
				</td>
				<td class="a-right">
				</td>
			</tr>
			<tr>
				<td class="a-left">
				<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
					<label for="billing_last_name" class=""><?php echo $this->lang->line('my_new_password');?> <abbr class="required" title="required">*</abbr></label>
					<input type="password" class="input-text " name="new_password" id="new_password" placeholder="" value=""><br>
					<?php echo $this->lang->line('my_leave_blank');?>
				</p>
				</td>
				<td class="a-right">
					<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
						<label for="billing_last_name" class=""><?php echo $this->lang->line('my_renew_password');?> <abbr class="required" title="required">*</abbr></label>
						<?php if (isset($arrErr['renew_password'])) { ?>
						<div class="red">
							<?php echo $arrErr['renew_password'] ?>
						</div>
						<?php } ?>
						<?php echo form_error('renew_password'); ?>
						<input type="password" class="input-text " name="renew_password" id="renew_password" placeholder="" value="">
						<br>
						<?php echo $this->lang->line('my_leave_blank');?>
					</p>
				</td>
			</tr>
			<tr>
				<td class="a-left">
					<p class="form-row form-row form-row-wide" id="billing_company_field">
					<label for="company" class=""><?php echo $this->lang->line('menu_company');?></label>
					<input type="text" class="input-text " name="company_name" id="company_name" placeholder="" value="<?php if (isset($arrForm['company_name'])) echo $arrForm['company_name'] ?>"></p>
				</td>
				<td class="a-right">
					<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
					<label for="email" class=""><?php echo $this->lang->line('my_email');?> <abbr class="required" title="required">*</abbr></label>
					<?php echo form_error('email'); ?>
					<input type="email" class="input-text " name="email" id="email" placeholder="" value="<?php if (isset($arrForm['email'])) echo $arrForm['email'] ?>" disabled></p>
				</td>
			</tr>
			<tr>
				<td class="a-left">
					<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
					<label for="tel" class=""><?php echo $this->lang->line('my_phone');?> <abbr class="required" title="required">*</abbr></label>
					<?php echo form_error('tel'); ?>
					<input type="tel" class="input-text " name="tel" id="tel" placeholder="" value="<?php if (isset($arrForm['tel'])) echo $arrForm['tel'] ?>"></p>
					<div class="clear"></div>
				</td>
				<td class="a-right">
					<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field"><label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
						
						<?php echo form_error('country'); ?>
						<select name="country" id="country" class="country " placeholder="" title="Country">
							<option value=""><?php echo $this->lang->line('my_select_country');?></option>
							<option value="Thailand" selected >Thailand</option>
						</select>
					</p>
				</td>
			</tr>
			<tr>
				<td class="a-left">
					<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
					<label for="address1" class=""><?php echo $this->lang->line('my_address1');?> <abbr class="required" title="required">*</abbr></label>
					<?php echo form_error('address1'); ?>
					<input type="text" class="input-text " name="address1" id="address1" placeholder="Street address" value="<?php if (isset($arrForm['address1'])) echo $arrForm['address1'] ?>"></p>
				</td>
				<td class="a-right">
					<p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
					<label for="address2" class=""><?php echo $this->lang->line('my_address2');?></label>
					<input type="text" class="input-text " name="address2" id="address2" placeholder="<?php echo $this->lang->line('my_address_place');?>" value="<?php if (isset($arrForm['address2'])) echo $arrForm['address2'] ?>"></p>
				</td>
			</tr>
			<tr>
				<td class="a-left">
					<p class="form-row form-row form-row-first address-field validate-state woocommerce-invalid woocommerce-invalid-required-field validate-required" id="billing_state_field" data-o_class="form-row form-row form-row-first address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field"><label for="billing_state" class=""><?php echo $this->lang->line('my_select_province');?> <abbr class="required" title="required">*</abbr></label>
					<br>
					<?php echo form_error('province'); ?>
					<select name="province" id="province" class="state_select " placeholder="" title="Province *">
						<option value=""><?php echo $this->lang->line('my_select_province');?></option>
						<option value="Amnat Charoen (อำนาจเจริญ)">Amnat Charoen (อำนาจเจริญ)</option>
						<option value="Ang Thong (อ่างทอง)">Ang Thong (อ่างทอง)</option>
						<option value="Ayutthaya (พระนครศรีอยุธยา)">Ayutthaya (พระนครศรีอยุธยา)</option>
						<option value="Bangkok (กรุงเทพมหานคร)">Bangkok (กรุงเทพมหานคร)</option>
						<option value="Bueng Kan (บึงกาฬ)">Bueng Kan (บึงกาฬ)</option>
						<option value="Buri Ram (บุรีรัมย์)">Buri Ram (บุรีรัมย์)</option>
						<option value="Chachoengsao (ฉะเชิงเทรา)">Chachoengsao (ฉะเชิงเทรา)</option>
						<option value="Chai Nat (ชัยนาท)">Chai Nat (ชัยนาท)</option>
						<option value="Chaiyaphum (ชัยภูมิ)">Chaiyaphum (ชัยภูมิ)</option>
						<option value="Chanthaburi (จันทบุรี)">Chanthaburi (จันทบุรี)</option>
						<option value="Chiang Mai (เชียงใหม่)">Chiang Mai (เชียงใหม่)</option>
						<option value="Chiang Rai (เชียงราย)">Chiang Rai (เชียงราย)</option>
						<option value="Chonburi (ชลบุรี)">Chonburi (ชลบุรี)</option>
						<option value="Chumphon (ชุมพร)">Chumphon (ชุมพร)</option>
						<option value="Kalasin (กาฬสินธุ์)">Kalasin (กาฬสินธุ์)</option>
						<option value="Kamphaeng Phet (กำแพงเพชร)">Kamphaeng Phet (กำแพงเพชร)</option>
						<option value="Kanchanaburi (กาญจนบุรี)">Kanchanaburi (กาญจนบุรี)</option>
						<option value="Khon Kaen (ขอนแก่น)">Khon Kaen (ขอนแก่น)</option>
						<option value="Krabi (กระบี่)">Krabi (กระบี่)</option>
						<option value="Lampang (ลำปาง)">Lampang (ลำปาง)</option>
						<option value="Lamphun (ลำพูน)">Lamphun (ลำพูน)</option>
						<option value="Loei (เลย)">Loei (เลย)</option>
						<option value="Lopburi (ลพบุรี)">Lopburi (ลพบุรี)</option>
						<option value="Mae Hong Son (แม่ฮ่องสอน)">Mae Hong Son (แม่ฮ่องสอน)</option>
						<option value="Maha Sarakham (มหาสารคาม)">Maha Sarakham (มหาสารคาม)</option>
						<option value="Mukdahan (มุกดาหาร)">Mukdahan (มุกดาหาร)</option>
						<option value="Nakhon Nayok (นครนายก)">Nakhon Nayok (นครนายก)</option>
						<option value="Nakhon Pathom (นครปฐม)">Nakhon Pathom (นครปฐม)</option>
						<option value="Nakhon Phanom (นครพนม)">Nakhon Phanom (นครพนม)</option>
						<option value="Nakhon Ratchasima (นครราชสีมา)">Nakhon Ratchasima (นครราชสีมา)</option>
						<option value="Nakhon Sawan (นครสวรรค์)">Nakhon Sawan (นครสวรรค์)</option>
						<option value="Nakhon Si Thammarat (นครศรีธรรมราช)">Nakhon Si Thammarat (นครศรีธรรมราช)</option>
						<option value="Nan (น่าน)">Nan (น่าน)</option>
						<option value="Narathiwat (นราธิวาส)">Narathiwat (นราธิวาส)</option>
						<option value="Nong Bua Lam Phu (หนองบัวลำภู)">Nong Bua Lam Phu (หนองบัวลำภู)</option>
						<option value="Nong Khai (หนองคาย)">Nong Khai (หนองคาย)</option>
						<option value="Nonthaburi (นนทบุรี)">Nonthaburi (นนทบุรี)</option>
						<option value="Pathum Thani (ปทุมธานี)">Pathum Thani (ปทุมธานี)</option>
						<option value="Pattani (ปัตตานี)">Pattani (ปัตตานี)</option>
						<option value="Phang Nga (พังงา)">Phang Nga (พังงา)</option>
						<option value="Phatthalung (พัทลุง)">Phatthalung (พัทลุง)</option>
						<option value="Phayao (พะเยา)">Phayao (พะเยา)</option>
						<option value="Phetchabun (เพชรบูรณ์)">Phetchabun (เพชรบูรณ์)</option>
						<option value="Phetchaburi (เพชรบุรี)">Phetchaburi (เพชรบุรี)</option>
						<option value="Phichit (พิจิตร)">Phichit (พิจิตร)</option>
						<option value="Phitsanulok (พิษณุโลก)">Phitsanulok (พิษณุโลก)</option>
						<option value="Phrae (แพร่)">Phrae (แพร่)</option>
						<option value="Phuket (ภูเก็ต)">Phuket (ภูเก็ต)</option>
						<option value="Prachin Buri (ปราจีนบุรี)">Prachin Buri (ปราจีนบุรี)</option>
						<option value="Prachuap Khiri Khan (ประจวบคีรีขันธ์)">Prachuap Khiri Khan (ประจวบคีรีขันธ์)</option>
						<option value="Ranong (ระนอง)">Ranong (ระนอง)</option>
						<option value="Ratchaburi (ราชบุรี)">Ratchaburi (ราชบุรี)</option>
						<option value="Rayong (ระยอง)">Rayong (ระยอง)</option>
						<option value="Roi Et (ร้อยเอ็ด)">Roi Et (ร้อยเอ็ด)</option>
						<option value="Sa Kaeo (สระแก้ว)">Sa Kaeo (สระแก้ว)</option>
						<option value="Sakon Nakhon (สกลนคร)">Sakon Nakhon (สกลนคร)</option>
						<option value="Samut Prakan (สมุทรปราการ)">Samut Prakan (สมุทรปราการ)</option>
						<option value="Samut Sakhon (สมุทรสาคร)">Samut Sakhon (สมุทรสาคร)</option>
						<option value="Samut Songkhram (สมุทรสงคราม)">Samut Songkhram (สมุทรสงคราม)</option>
						<option value="Saraburi (สระบุรี)">Saraburi (สระบุรี)</option>
						<option value="Satun (สตูล)">Satun (สตูล)</option>
						<option value="Sing Buri (สิงห์บุรี)">Sing Buri (สิงห์บุรี)</option>
						<option value="Sisaket (ศรีสะเกษ)">Sisaket (ศรีสะเกษ)</option>
						<option value="Songkhla (สงขลา)">Songkhla (สงขลา)</option>
						<option value="Sukhothai (สุโขทัย)">Sukhothai (สุโขทัย)</option>
						<option value="Suphan Buri (สุพรรณบุรี)">Suphan Buri (สุพรรณบุรี)</option>
						<option value="Surat Thani (สุราษฎร์ธานี)">Surat Thani (สุราษฎร์ธานี)</option>
						<option value="Surin (สุรินทร์)">Surin (สุรินทร์)</option>
						<option value="Tak (ตาก)">Tak (ตาก)</option>
						<option value="Trang (ตรัง)">Trang (ตรัง)</option>
						<option value="Trat (ตราด)">Trat (ตราด)</option>
						<option value="Ubon Ratchathani (อุบลราชธานี)">Ubon Ratchathani (อุบลราชธานี)</option>
						<option value="Udon Thani (อุดรธานี)">Udon Thani (อุดรธานี)</option>
						<option value="Uthai Thani (อุทัยธานี)">Uthai Thani (อุทัยธานี)</option>
						<option value="Uttaradit (อุตรดิตถ์)">Uttaradit (อุตรดิตถ์)</option>
						<option value="Yala (ยะลา)">Yala (ยะลา)</option>
						<option value="Yasothon (ยโสธร)">Yasothon (ยโสธร)</option>
						</select>
						</p><p class="form-row form-row form-row-last address-field validate-postcode validate-required" id="billing_postcode_field" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
						
						<label for="billing_postcode" class=""><?php echo $this->lang->line('my_zip');?> <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="zip" id="zip" placeholder="Postcode / Zip" value="<?php if (isset($arrForm['zip'])) echo $arrForm['zip'] ?>"></p>
				</td>
				<td class="a-right">
				</td>
			</tr>
		</table>
			<div class="clear height-20"></div>
			
			<a href="javascript:void(0)" class="custom-button" onclick="formSubmit()"><?php echo $this->lang->line('my_save');?></a>
			
			</div>	
		</div>
			<div class="clear height-20"></div>
			
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
</form>


	


</div>
</div><!-- .entry-content -->
</article>	
</div>
</article>

<div class="clear height-50"></div>