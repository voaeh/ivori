<script>
	function formSubmit()
	{
		if ($("#product_id").val() != '')
		{
			$("#mode").val('complete');
		}
		else
		{
			$("#mode").val('register');
		}
		
		$("#form1").submit();
	}
	
	function deleteImage()
	{
		$("#main_image_block").remove();
		$("#main_image").show();
		$("#h_main_image").val('');
	}
</script>
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Product</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
					<?php if (isset($success)) { ?>
												
						<div class="alert alert-success">
						<?php echo $success ?>
						</div>
					<?php } ?>
					
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please enter product
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" name="form1" id="form1" action="" method="post" enctype="multipart/form-data">
											<input type="hidden" name="product_id" id="product_id" value="<?php if (isset($arrForm['product_id'])) echo $arrForm['product_id'] ?>" />
                                            <input type="hidden" name="mode" id="mode" />
											<div class="form-group">
                                                <label>Product Name EN <span class="red">*</span></label>
												<?php echo form_error('product_name_en'); ?>
                                                <input class="form-control" type="text" name="product_name_en" value="<?php if (isset($arrForm['product_name_en'])) echo $arrForm['product_name_en'] ?>" placeholder="Enter product name en">
                                            </div>
											<div class="form-group">
                                                <label>Product Name TH <span class="red">*</span></label>
												<?php echo form_error('product_name_th'); ?>
                                                <input class="form-control" type="text" name="product_name_th" value="<?php if (isset($arrForm['product_name_th'])) echo $arrForm['product_name_th'] ?>" placeholder="Enter product name th">
                                            </div>
											<div class="form-group">
                                                <label>Product Code </label>
                                                <input class="form-control" type="text" name="product_code" value="<?php if (isset($arrForm['product_code'])) echo $arrForm['product_code'] ?>"  placeholder="Enter product code">
                                            </div>
											<div class="form-group">
                                                <label>Short Detail EN</label>
                                                <input class="form-control" type="text" name="short_detail_en" value="<?php if (isset($arrForm['short_detail_en'])) echo $arrForm['short_detail_en'] ?>"  placeholder="Enter short detail en">
                                            </div>
											<div class="form-group">
                                                <label>Short Detail TH</label>
                                                <input class="form-control" type="text" name="short_detail_th" value="<?php if (isset($arrForm['short_detail_th'])) echo $arrForm['short_detail_th'] ?>" placeholder="Enter short detail th">
                                            </div>
											<div class="form-group">
                                                <label>Long Detail EN</label>
                                                <textarea class="form-control" name="long_detail_en" rows="5"><?php if (isset($arrForm['long_detail_en'])) echo $arrForm['long_detail_en'] ?></textarea>
                                            </div>
											<div class="form-group">
                                                <label>Long Detail TH</label>
                                                <textarea class="form-control" name="long_detail_th" rows="5"><?php if (isset($arrForm['long_detail_th'])) echo $arrForm['long_detail_th'] ?></textarea>
                                            </div>
											<div class="form-group">
                                                <label>Price <span class="red">*</span></label>
												<?php echo form_error('price'); ?>
                                                <input class="form-control" type="text" name="price" value="<?php if (isset($arrForm['price'])) echo $arrForm['price'] ?>"  placeholder="Enter price">
                                            </div>
											<div class="form-group">
                                                <label>Quantity <span class="red">*</span></label>
												<?php echo form_error('quantity'); ?>
                                                <input class="form-control" type="text" name="quantity" value="<?php if (isset($arrForm['quantity'])) echo $arrForm['quantity'] ?>"  placeholder="Enter quantity">
                                            </div>
											<div class="form-group">
                                                <label>Main Image <span class="red">*</span></label>
												<?php if (isset($arrErr['main_image'])) { ?>
												
												<div class="alert alert-danger">
													<?php echo $arrErr['main_image'] ?>
												</div>
												<?php } ?>
												
												<?php if (isset($arrForm['main_image'])) { ?>
												<div id="main_image_block">
													<img src="<?php echo base_url('public/img/product/'.$arrForm['product_id'].'/'.$arrForm['main_image']); ?>" width="200" />
													
													<a href="javascript:void(0)" onclick="deleteImage()">[ remove ]</a>
												</div>
												<?php } ?>
												
                                                <input id="main_image" type="file" name="main_image" style="<?php if (isset($arrForm['main_image'])) { ?>display:none;<?php } ?>">
												
												<input type="hidden" id="h_main_image" name="h_main_image" value="<?php if (isset($arrForm['main_image'])) echo $arrForm['main_image'] ?>" />
												
                                            </div>
                                            <button type="button" onclick="formSubmit()" class="btn btn-default">Save</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->