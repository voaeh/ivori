<div class="clear height-50"></div>

<article id="organic-content-grid" class="blog-left">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <?php $this->load->view('_sidebar_blog.php');?>
        </div>

		
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div id="content-blog-full">
                    
<article id="post-8" class="post-8 page type-page status-publish hentry">
    <div class="entry-header">
                        
        <h1 class="entry-title">Checkout</h1>
    </div><!-- .entry-header -->

    <div class="entry-content">
    <div class="woocommerce">
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="http://localhost/wordpress/checkout/" enctype="multipart/form-data">

		<div class="col2-set" id="customer_details">
			<div class="col-1" style="border:0">
				<div class="woocommerce-billing-fields">
	
		<h3>Billing Details</h3>
		
		<p class="form-row form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field"><label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
			<input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder="" value=""></p>
	
		<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value=""></p><div class="clear"></div>
	
		<p class="form-row form-row form-row-wide" id="billing_company_field"><label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value=""></p>
	
		<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value=""></p>
	
		<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value=""></p><div class="clear"></div>
	
		<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field"><label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
			<select name="country" id="country" class="country " placeholder="" title="Country">
				<option value="">Select country...</option>
			</select>
		</p>
	
		<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value=""></p>
	
		<p class="form-row form-row form-row-wide address-field" id="billing_address_2_field"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value=""></p>
	
		<p class="form-row form-row form-row-first address-field validate-state woocommerce-invalid woocommerce-invalid-required-field validate-required" id="billing_state_field" data-o_class="form-row form-row form-row-first address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field"><label for="billing_state" class="">State / County <abbr class="required" title="required">*</abbr></label>
			<select name="billing_state" id="billing_state" class="state_select " placeholder="" title="Province *"><option value="">Select province…</option><option value="TH-37">Amnat Charoen (อำนาจเจริญ)</option><option value="TH-15">Ang Thong (อ่างทอง)</option><option value="TH-14">Ayutthaya (พระนครศรีอยุธยา)</option><option value="TH-10">Bangkok (กรุงเทพมหานคร)</option><option value="TH-38">Bueng Kan (บึงกาฬ)</option><option value="TH-31">Buri Ram (บุรีรัมย์)</option><option value="TH-24">Chachoengsao (ฉะเชิงเทรา)</option><option value="TH-18">Chai Nat (ชัยนาท)</option><option value="TH-36">Chaiyaphum (ชัยภูมิ)</option><option value="TH-22">Chanthaburi (จันทบุรี)</option><option value="TH-50">Chiang Mai (เชียงใหม่)</option><option value="TH-57">Chiang Rai (เชียงราย)</option><option value="TH-20">Chonburi (ชลบุรี)</option><option value="TH-86">Chumphon (ชุมพร)</option><option value="TH-46">Kalasin (กาฬสินธุ์)</option><option value="TH-62">Kamphaeng Phet (กำแพงเพชร)</option><option value="TH-71">Kanchanaburi (กาญจนบุรี)</option><option value="TH-40">Khon Kaen (ขอนแก่น)</option><option value="TH-81">Krabi (กระบี่)</option><option value="TH-52">Lampang (ลำปาง)</option><option value="TH-51">Lamphun (ลำพูน)</option><option value="TH-42">Loei (เลย)</option><option value="TH-16">Lopburi (ลพบุรี)</option><option value="TH-58">Mae Hong Son (แม่ฮ่องสอน)</option><option value="TH-44">Maha Sarakham (มหาสารคาม)</option><option value="TH-49">Mukdahan (มุกดาหาร)</option><option value="TH-26">Nakhon Nayok (นครนายก)</option><option value="TH-73">Nakhon Pathom (นครปฐม)</option><option value="TH-48">Nakhon Phanom (นครพนม)</option><option value="TH-30">Nakhon Ratchasima (นครราชสีมา)</option><option value="TH-60">Nakhon Sawan (นครสวรรค์)</option><option value="TH-80">Nakhon Si Thammarat (นครศรีธรรมราช)</option><option value="TH-55">Nan (น่าน)</option><option value="TH-96">Narathiwat (นราธิวาส)</option><option value="TH-39">Nong Bua Lam Phu (หนองบัวลำภู)</option><option value="TH-43">Nong Khai (หนองคาย)</option><option value="TH-12">Nonthaburi (นนทบุรี)</option><option value="TH-13">Pathum Thani (ปทุมธานี)</option><option value="TH-94">Pattani (ปัตตานี)</option><option value="TH-82">Phang Nga (พังงา)</option><option value="TH-93">Phatthalung (พัทลุง)</option><option value="TH-56">Phayao (พะเยา)</option><option value="TH-67">Phetchabun (เพชรบูรณ์)</option><option value="TH-76">Phetchaburi (เพชรบุรี)</option><option value="TH-66">Phichit (พิจิตร)</option><option value="TH-65">Phitsanulok (พิษณุโลก)</option><option value="TH-54">Phrae (แพร่)</option><option value="TH-83">Phuket (ภูเก็ต)</option><option value="TH-25">Prachin Buri (ปราจีนบุรี)</option><option value="TH-77">Prachuap Khiri Khan (ประจวบคีรีขันธ์)</option><option value="TH-85">Ranong (ระนอง)</option><option value="TH-70">Ratchaburi (ราชบุรี)</option><option value="TH-21">Rayong (ระยอง)</option><option value="TH-45">Roi Et (ร้อยเอ็ด)</option><option value="TH-27">Sa Kaeo (สระแก้ว)</option><option value="TH-47">Sakon Nakhon (สกลนคร)</option><option value="TH-11">Samut Prakan (สมุทรปราการ)</option><option value="TH-74">Samut Sakhon (สมุทรสาคร)</option><option value="TH-75">Samut Songkhram (สมุทรสงคราม)</option><option value="TH-19">Saraburi (สระบุรี)</option><option value="TH-91">Satun (สตูล)</option><option value="TH-17">Sing Buri (สิงห์บุรี)</option><option value="TH-33">Sisaket (ศรีสะเกษ)</option><option value="TH-90">Songkhla (สงขลา)</option><option value="TH-64">Sukhothai (สุโขทัย)</option><option value="TH-72">Suphan Buri (สุพรรณบุรี)</option><option value="TH-84">Surat Thani (สุราษฎร์ธานี)</option><option value="TH-32">Surin (สุรินทร์)</option><option value="TH-63">Tak (ตาก)</option><option value="TH-92">Trang (ตรัง)</option><option value="TH-23">Trat (ตราด)</option><option value="TH-34">Ubon Ratchathani (อุบลราชธานี)</option><option value="TH-41">Udon Thani (อุดรธานี)</option><option value="TH-61">Uthai Thani (อุทัยธานี)</option><option value="TH-53">Uttaradit (อุตรดิตถ์)</option><option value="TH-95">Yala (ยะลา)</option><option value="TH-35">Yasothon (ยโสธร)</option></select></p><p class="form-row form-row form-row-last address-field validate-postcode validate-required" id="billing_postcode_field" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label for="billing_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip" value=""></p>
	
		<div class="clear"></div>

	</div>
			</div>

<div class="col-2">
	<div class="woocommerce-shipping-fields">
			<h3>Additional Information</h3>
			<p class="form-row form-row notes" id="order_comments_field"><label for="order_comments" class="">Order Notes</label>
			<textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
	<div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a></div>

	</div>			
	</div>
	</div>
</form>

	<div class="clear"></div>
	<h3 id="order_review_heading">Your order</h3>
	
	
	<div id="order_review" class="woocommerce-checkout-review-order">
		<table class="shop_table woocommerce-checkout-review-order-table">
	<thead>
		<tr>
			<th class="product-name">Product</th>
			<th class="product-price">Price</th>
			<th class="product-quatity">Quatity</th>
			<th class="product-total">Total</th>
		</tr>
	</thead>
	<tbody>
		<tr class="cart_item">
			<td class="product-name">
				<img width="180" height="180" src="<?php echo base_url('public/img/product/57.jpg');?>" class="attachment-shop_thumbnail wp-post-image" alt="58">	
							Sample Shampoo<br>&nbsp;							
			</td>
			<td>
				<span class="amount">450 Baht</span>						
			</td>
			<td>
				<strong class="product-quantity">1</strong>						
			</td>
			<td class="product-total">
				<span class="amount">450 Baht</span>						
			</td>
		</tr>
	</tbody>
	<tfoot>

		<tr class="cart-subtotal">
			<td></td>
			<td></td>
			<th>Subtotal</th>
			<td><span class="amount">450 Baht</span></td>
		</tr>

		<tr class="order-total">
			<td></td>
			<td></td>
			<th>Total</th>
			<td><strong><span class="amount">450 Baht</span></strong> </td>
		</tr>

	</tfoot>
</table>
	


<div id="payment" class="woocommerce-checkout">
		<ul class="payment_methods methods">
		<li class="payment_method_bacs">
		
		<input id="payment_method_bacs" type="radio" style="min-height:auto" class="input-radio" name="payment_method" value="bacs" checked="checked">
		<label for="payment_method_bacs" style="margin-left:10px;">
			โอนเงินผ่านธนาคาร 	
		</label>
			<div class="payment_box payment_method_bacs">
			<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		</div>
	</li>

<li class="payment_method_paypal">
	<input id="payment_method_paypal" type="radio" style="min-height:auto" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">

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



		</div>

	


</div>
                                            </div><!-- .entry-content -->

                </article>
				
</div>
</div>                                        
<div class="clear height-50"></div>