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
												
						<div class="success">
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
                                        <form role="form" name="form1" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Product Name EN <span class="red">*</span></label>
												<?php echo form_error('product_name_en'); ?>
                                                <input class="form-control" type="text" name="product_name_en" placeholder="Enter product name en">
                                            </div>
											<div class="form-group">
                                                <label>Product Name TH <span class="red">*</span></label>
												<?php echo form_error('product_name_th'); ?>
                                                <input class="form-control" type="text" name="product_name_th" placeholder="Enter product name th">
                                            </div>
											<div class="form-group">
                                                <label>Product Code </label>
                                                <input class="form-control" type="text" name="product_code"  placeholder="Enter product code">
                                            </div>
											<div class="form-group">
                                                <label>Short Detail EN</label>
                                                <input class="form-control" type="text" name="short_detail_en"  placeholder="Enter short detail en">
                                            </div>
											<div class="form-group">
                                                <label>Short Detail TH</label>
                                                <input class="form-control" type="text" name="short_detail_th"  placeholder="Enter short detail th">
                                            </div>
											<div class="form-group">
                                                <label>Long Detail EN</label>
                                                <textarea class="form-control" name="long_detail_en" rows="5"></textarea>
                                            </div>
											<div class="form-group">
                                                <label>Long Detail TH</label>
                                                <textarea class="form-control" name="long_detail_th" rows="5"></textarea>
                                            </div>
											<div class="form-group">
                                                <label>Price <span class="red">*</span></label>
												<?php echo form_error('price'); ?>
                                                <input class="form-control" type="text" name="price"  placeholder="Enter price">
                                            </div>
											<div class="form-group">
                                                <label>Quantity <span class="red">*</span></label>
												<?php echo form_error('quantity'); ?>
                                                <input class="form-control" type="text" name="quantity"  placeholder="Enter quantity">
                                            </div>
											<div class="form-group">
                                                <label>Main Image <span class="red">*</span></label>
												<?php if (isset($arrErr['main_image'])) { ?>
												
												<div class="red">
													<?php echo $arrErr['main_image'] ?>
												</div>
												<?php } ?>
                                                <input type="file" name="main_image">
                                            </div>
                                            <button type="submit" class="btn btn-default">Save</button>
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