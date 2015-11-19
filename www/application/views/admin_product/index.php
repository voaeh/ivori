<script>
	function updateProduct(id)
	{
		$("#product_id").val(id);
		$("#form2").submit();
	}
</script>
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
				<form id="form1" name="form1" action="" method="post">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Search Product
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td style="width:200px;">Product Name</td>
                                                <td style="width:300px;">
													<input class="form-control" type="text" name="product_name">
												</td>
                                                <td style="width:100px;text-align:right;"><button type="submit" class="btn btn-default">Search</button></td>
                                            </tr>
                                        </thead>
									</table>
                                </div>
               
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
					</form>
                </div>

				<!-- /.row -->
                <div class="row">
				<form id="form2" name="form2" method="post" action="<?php echo site_url('admin_product/register'); ?>" >
					<input type="hidden" name="product_id" id="product_id" />
					<input type="hidden" name="mode" id="mode" value="edit" />
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Product List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product Name En</th>
                                                <th>Product Name Th</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($productList as $list) { ?>
                                            <tr class="gradeA">
                                                <td><?php echo $list->product_id ?></td>
                                                <td><?php echo $list->product_name_en ?></td>
                                                <td><?php echo $list->product_name_th ?></td>
                                                <td class="center"><?php echo $list->quantity ?></td>
                                                <td class="center"><?php echo $list->price ?></td>
												<td><a href="javascript:void(0)" onclick="updateProduct('<?php echo $list->product_id ?>')">Update</a></td>
                                            </tr>
                                        <?php } ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
               
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
					</form>
                </div>
            </div>
            <!-- /#page-wrapper -->