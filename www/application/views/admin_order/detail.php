<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Order Detail</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
					
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Order Detail
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach($orderList as $list) {?>
											<div class="form-group">
												<label>Order ID</label>
                                                <?php echo $list->order_id ?>
											</div>
											<div class="form-group">
												<label>First Name</label>
                                                <?php echo $list->first_name ?>
												<label>Last Name</label>
                                                <?php echo $list->last_name ?>
											</div>
											<div class="form-group">
												<label>Total</label>
                                                <?php echo $list->total ?>
											</div>
										<?php } ?>
										
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Product Name En</th>
                                                <th>Product Name Th</th>
                                                <th>Quantity</th>
												<th>Price</th>
												<th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($orderDetailList as $list) { ?>
                                            <tr class="gradeA">
                                                <td><?php echo $list->order_id ?></td>
                                                <td><?php echo $list->product_name_en ?></td>
                                                <td><?php echo $list->product_name_th ?></td>
                                                <td class="center"><?php echo $list->quantity ?></td>
												<td class="center"><?php echo $list->price ?></td>
												<td class="center"><?php echo $list->subtotal ?></td>
                                            </tr>
                                        <?php } ?>
                                        
                                        </tbody>
                                    </table>
								
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