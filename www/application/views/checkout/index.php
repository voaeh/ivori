<div class="clear height-pc-50"></div>

<article id="organic-content-grid" class="blog-left">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <?php $this->load->view('_sidebar_blog.php');?>
        </div>

		
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div id="content-blog-full">
                    
<article id="post-8" class="post-8 page type-page status-publish hentry">
    <div class="entry-header">
                        
        <h1 class="entry-title"><?php echo $this->lang->line('checkout_title');?></h1>
    </div><!-- .entry-header -->

    <div class="entry-content">
    <div class="woocommerce">
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">
<input type="hidden" name="mode" value="insert" />
		<div class="col2-set" id="customer_details">
			<div class="col-1" style="border:0">
				<div class="woocommerce-billing-fields">
	
		<h3><?php echo $this->lang->line('checkout_delivery');?></h3>
		
		<p class="form-row form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
		<label for="first_name" class=""><?php echo $this->lang->line('my_firstname');?> <abbr class="required" title="required">*</abbr></label>
		<?php echo form_error('first_name'); ?>
			<input type="text" class="input-text" name="first_name" id="first_name" placeholder="" value="<?php if (isset($arrForm['first_name'])) echo $arrForm['first_name'] ?>"></p>
	
		<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
			<label for="last_name" class=""><?php echo $this->lang->line('my_lastname');?> <abbr class="required" title="required">*</abbr></label>
			<?php echo form_error('last_name'); ?>
			<input type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="<?php if (isset($arrForm['last_name'])) echo $arrForm['last_name'] ?>"></p><div class="clear"></div>
	
		<p class="form-row form-row form-row-wide" id="billing_company_field">
		<label for="company_name" class=""><?php echo $this->lang->line('my_company');?></label>
		<input type="text" class="input-text " name="company_name" id="company_name" placeholder="" value="<?php if (isset($arrForm['company_name'])) echo $arrForm['company_name'] ?>"></p>
	
		<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
			<label for="email" class=""><?php echo $this->lang->line('my_email');?> <abbr class="required" title="required">*</abbr></label>
			<?php echo form_error('email'); ?>
			<input type="email" class="input-text " name="email" id="email" placeholder="" value="<?php if (isset($arrForm['email'])) echo $arrForm['email'] ?>"></p>
	
		<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
			<label for="tel" class=""><?php echo $this->lang->line('my_phone');?> <abbr class="required" title="required">*</abbr></label>
			<?php echo form_error('tel'); ?>
			<input type="tel" class="input-text " name="tel" id="tel" placeholder="" value="<?php if (isset($arrForm['tel'])) echo $arrForm['tel'] ?>"></p><div class="clear"></div>
	
		<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field">
			<label for="country" class=""><?php echo $this->lang->line('my_select_country');?> <abbr class="required" title="required">*</abbr></label>
			<?php echo form_error('country'); ?>
			<select name="country" id="country" class="country " placeholder="" title="Country">
				<option value=""><?php echo $this->lang->line('my_select_country');?></option>
				<option value="Thailand" <?php if (isset($arrForm['country']) && $arrForm['country'] == 'Thailand') echo "selected"  ?> >Thailand</option>
			</select>
		</p>
	
		<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
		<label for="address1" class=""><?php echo $this->lang->line('my_address1');?><abbr class="required" title="required">*</abbr></label>
		<?php echo form_error('address1'); ?>
		<input type="text" class="input-text " name="address1" id="address1" placeholder="" value="<?php if (isset($arrForm['address1'])) echo $arrForm['address1'] ?>"></p>
	
		<p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
			<input type="text" class="input-text " name="address2" id="address2" 
			placeholder="<?php echo $this->lang->line('my_address_place');?>" value="<?php if (isset($arrForm['address2'])) echo $arrForm['address2'] ?>"></p>
	
		<p class="form-row form-row form-row-first address-field validate-state woocommerce-invalid woocommerce-invalid-required-field validate-required" id="billing_state_field" data-o_class="form-row form-row form-row-first address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field"><label for="billing_state" class=""><?php echo $this->lang->line('my_select_province');?> <abbr class="required" title="required">*</abbr></label><br>
			<?php echo form_error('province'); ?>
			<select name="province" id="province" class="state_select " placeholder="" title="Province *"><option value=""><?php echo $this->lang->line('my_select_province');?></option><option value="TH-37">Amnat Charoen (อำนาจเจริญ)</option><option value="TH-15">Ang Thong (อ่างทอง)</option><option value="TH-14">Ayutthaya (พระนครศรีอยุธยา)</option><option value="TH-10">Bangkok (กรุงเทพมหานคร)</option><option value="TH-38">Bueng Kan (บึงกาฬ)</option><option value="TH-31">Buri Ram (บุรีรัมย์)</option><option value="TH-24">Chachoengsao (ฉะเชิงเทรา)</option><option value="TH-18">Chai Nat (ชัยนาท)</option><option value="TH-36">Chaiyaphum (ชัยภูมิ)</option><option value="TH-22">Chanthaburi (จันทบุรี)</option><option value="TH-50">Chiang Mai (เชียงใหม่)</option><option value="TH-57">Chiang Rai (เชียงราย)</option><option value="TH-20">Chonburi (ชลบุรี)</option><option value="TH-86">Chumphon (ชุมพร)</option><option value="TH-46">Kalasin (กาฬสินธุ์)</option><option value="TH-62">Kamphaeng Phet (กำแพงเพชร)</option><option value="TH-71">Kanchanaburi (กาญจนบุรี)</option><option value="TH-40">Khon Kaen (ขอนแก่น)</option><option value="TH-81">Krabi (กระบี่)</option><option value="TH-52">Lampang (ลำปาง)</option><option value="TH-51">Lamphun (ลำพูน)</option><option value="TH-42">Loei (เลย)</option><option value="TH-16">Lopburi (ลพบุรี)</option><option value="TH-58">Mae Hong Son (แม่ฮ่องสอน)</option><option value="TH-44">Maha Sarakham (มหาสารคาม)</option><option value="TH-49">Mukdahan (มุกดาหาร)</option><option value="TH-26">Nakhon Nayok (นครนายก)</option><option value="TH-73">Nakhon Pathom (นครปฐม)</option><option value="TH-48">Nakhon Phanom (นครพนม)</option><option value="TH-30">Nakhon Ratchasima (นครราชสีมา)</option><option value="TH-60">Nakhon Sawan (นครสวรรค์)</option><option value="TH-80">Nakhon Si Thammarat (นครศรีธรรมราช)</option><option value="TH-55">Nan (น่าน)</option><option value="TH-96">Narathiwat (นราธิวาส)</option><option value="TH-39">Nong Bua Lam Phu (หนองบัวลำภู)</option><option value="TH-43">Nong Khai (หนองคาย)</option><option value="TH-12">Nonthaburi (นนทบุรี)</option><option value="TH-13">Pathum Thani (ปทุมธานี)</option><option value="TH-94">Pattani (ปัตตานี)</option><option value="TH-82">Phang Nga (พังงา)</option><option value="TH-93">Phatthalung (พัทลุง)</option><option value="TH-56">Phayao (พะเยา)</option><option value="TH-67">Phetchabun (เพชรบูรณ์)</option><option value="TH-76">Phetchaburi (เพชรบุรี)</option><option value="TH-66">Phichit (พิจิตร)</option><option value="TH-65">Phitsanulok (พิษณุโลก)</option><option value="TH-54">Phrae (แพร่)</option><option value="TH-83">Phuket (ภูเก็ต)</option><option value="TH-25">Prachin Buri (ปราจีนบุรี)</option><option value="TH-77">Prachuap Khiri Khan (ประจวบคีรีขันธ์)</option><option value="TH-85">Ranong (ระนอง)</option><option value="TH-70">Ratchaburi (ราชบุรี)</option><option value="TH-21">Rayong (ระยอง)</option><option value="TH-45">Roi Et (ร้อยเอ็ด)</option><option value="TH-27">Sa Kaeo (สระแก้ว)</option><option value="TH-47">Sakon Nakhon (สกลนคร)</option><option value="TH-11">Samut Prakan (สมุทรปราการ)</option><option value="TH-74">Samut Sakhon (สมุทรสาคร)</option><option value="TH-75">Samut Songkhram (สมุทรสงคราม)</option><option value="TH-19">Saraburi (สระบุรี)</option><option value="TH-91">Satun (สตูล)</option><option value="TH-17">Sing Buri (สิงห์บุรี)</option><option value="TH-33">Sisaket (ศรีสะเกษ)</option><option value="TH-90">Songkhla (สงขลา)</option><option value="TH-64">Sukhothai (สุโขทัย)</option><option value="TH-72">Suphan Buri (สุพรรณบุรี)</option><option value="TH-84">Surat Thani (สุราษฎร์ธานี)</option><option value="TH-32">Surin (สุรินทร์)</option><option value="TH-63">Tak (ตาก)</option><option value="TH-92">Trang (ตรัง)</option><option value="TH-23">Trat (ตราด)</option><option value="TH-34">Ubon Ratchathani (อุบลราชธานี)</option><option value="TH-41">Udon Thani (อุดรธานี)</option><option value="TH-61">Uthai Thani (อุทัยธานี)</option><option value="TH-53">Uttaradit (อุตรดิตถ์)</option><option value="TH-95">Yala (ยะลา)</option><option value="TH-35">Yasothon (ยโสธร)</option></select></p>
			
			<p class="form-row form-row form-row-last address-field validate-postcode validate-required" id="billing_postcode_field" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
			
			<label for="zip" class=""><?php echo $this->lang->line('my_zip');?> <abbr class="required" title="required">*</abbr></label>
			<?php echo form_error('zip'); ?>
			<input type="text" class="input-text " name="zip" id="zip" placeholder="<?php echo $this->lang->line('my_zip');?>" value="<?php if (isset($arrForm['zip'])) echo $arrForm['zip'] ?>"></p>
	
		<div class="clear"></div>

	</div>
			</div>

<div class="col-2">
	<div class="woocommerce-shipping-fields">
			<h3><?php echo $this->lang->line('checkout_note');?></h3>
			<p class="form-row form-row notes" id="order_comments_field"><label for="comment" class=""><?php echo $this->lang->line('checkout_order_note');?></label>
			<textarea name="comment" class="input-text " id="comment" placeholder="<?php echo $this->lang->line('checkout_note_place');?>" rows="2" cols="5"></textarea></p>
	<div class="woocommerce-info"><?php echo $this->lang->line('checkout_return');?> <a href="<?php echo site_url("myaccount") ?>" class="showlogin"><?php echo $this->lang->line('checkout_login');?></a></div>

	</div>			
	</div>
	</div>

	<div class="clear"></div>
	<h3 id="order_review_heading"><?php echo $this->lang->line('cart_yourorder');?></h3>
	
	
	<div id="order_review" class="woocommerce-checkout-review-order">
		<table id="cart-table-pc" class="shop_table woocommerce-checkout-review-order-table">
		<thead>
			<tr>
				<th class="product-name"><?php echo $this->lang->line('cart_product');?></th>
				<th class="product-price"><?php echo $this->lang->line('cart_price');?></th>
				<th class="product-quatity"><?php echo $this->lang->line('cart_quantity');?></th>
				<th class="product-total"><?php echo $this->lang->line('cart_total');?></th>
			</tr>
		</thead>
		<tbody>
		<?php if (!empty($this->session->userdata('cart'))) { 
			$cart = $this->session->userdata('cart');
			foreach($cart as $val) {
		?>
			<tr class="cart_item">
				<td class="product-name">
					<img width="180" height="180" src="<?php echo base_url('public/img/product/'.$val['product_id'].'/'.$val['main_image']);?>" class="attachment-shop_thumbnail wp-post-image" >	
					<?php echo $val['product_name'] ?>						
				</td>
				<td>
					<span class="amount"><?php echo $val['price'] ?> <?php echo $this->lang->line('shop_baht');?></span>						
				</td>
				<td>
					<strong class="product-quantity" style="padding-left:50px;"><?php echo $val['quantity'] ?></strong>						
				</td>
				<td class="product-total">
					<span class="amount"><?php echo $val['subtotal'] ?> <?php echo $this->lang->line('shop_baht');?></span>						
				</td>
			</tr>
		<?php } } ?>
		</tbody>
		<tfoot>
		<tr class="cart-subtotal">
			<td></td>
			<td></td>
			<th style="padding-left:50px;"><?php echo $this->lang->line('cart_subtotal');?></th>
			<td><span class="amount"><?php if (isset($total)) echo $total ?> <?php echo $this->lang->line('shop_baht');?></span></td>
		</tr>
		<tr class="order-total">
			<td></td>
			<td></td>
			<th style="padding-left:50px;"><?php echo $this->lang->line('cart_total');?></th>
			<td><strong><span class="amount"><?php if (isset($total)) echo $total ?> <?php echo $this->lang->line('shop_baht');?></span></strong> </td>
		</tr>
	</tfoot>
	</table>
	
	<table id="cart-table-sp" class="shop_table">
		<tr>
			<th class="product-name"><?php echo $this->lang->line('cart_product');?></th>
		</tr>
		<?php if (!empty($this->session->userdata('cart'))) { 
			$cart = $this->session->userdata('cart');
			foreach($cart as $val) {
		?>
		<tr>
			<td>
				<img width="180" height="180" src="<?php echo base_url('public/img/product/'.$val['product_id'].'/'.$val['main_image']);?>" alt="58"><br>
				<?php echo $val['product_name'] ?>							
			</td>
		</tr>
		<tr class="cart_item">
			<td>
				<span class="amount"><?php echo $val['price'] ?> <?php echo $this->lang->line('shop_baht');?></span>						
			</td>
		</tr>
		<tr class="cart_item">
			<td>
				<strong class="product-quantity"><?php echo $this->lang->line('cart_quantity');?> <?php echo $val['quantity'] ?></strong>						
			</td>
		</tr>
		<tr class="cart_item">
			<td class="product-total">
				<span class="amount"><?php echo $this->lang->line('cart_total');?> <?php echo $val['subtotal'] ?> <?php echo $this->lang->line('shop_baht');?></span>						
			</td>
		</tr>
		<?php } } ?>
	</table>


<div id="payment" class="woocommerce-checkout">
		<ul class="payment_methods methods">
		<li class="payment_method_bacs">
		
		<input id="payment_method_bacs" type="radio" style="min-height:auto" class="input-radio" name="payment_type" value="1" checked="checked">
		<label for="payment_method_bacs" style="margin-left:10px;">
			โอนเงินผ่านธนาคาร 	
		</label>
			<div class="payment_box payment_method_bacs">
			<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		</div>
	</li>

<li class="payment_method_paypal">
	<input id="payment_method_paypal" type="radio" style="min-height:auto" class="input-radio" name="payment_type" value="2" data-order_button_text="Proceed to PayPal">

	<label for="payment_method_paypal" style="margin-left:10px;">
		PayPal <img src="https://www.paypalobjects.com/webstatic/en_TH/mktg/Logos/AM_mc_vs_dc_ae.jpg" alt="PayPal Acceptance Mark"><a href="https://www.paypal.com/th/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/th/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" title="What is PayPal?">What is PayPal?</a>	</label>
			<div class="payment_box payment_method_paypal" style="display:none;">
			<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
		</div>
	</li>
	</ul>
	
	<div class="form-row place-order">

		<noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;</noscript>

		
		<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">
		
		
	</div>

</div>

<?php if (isset($error)) echo $error ?>

		</div>

	


</div>
                                            </div><!-- .entry-content -->
</form>
                </article>
				
</div>
</div>                                        
<div class="clear height-50"></div>