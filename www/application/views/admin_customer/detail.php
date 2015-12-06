<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Customer Detail</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
					
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Customer Detail
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach($customerList as $list) {?>
											<div class="form-group">
												<label>Customer ID</label>
                                                <?php echo $list->customer_id ?>
											</div>
											<div class="form-group">
												<label>First Name</label>
                                                <?php echo $list->first_name ?>
												<label>Last Name</label>
                                                <?php echo $list->last_name ?>
											</div>
											<div class="form-group">
												<label>Phone</label>
                                                <?php echo $list->tel ?>
											</div>
											<div class="form-group">
												<label>Address</label>
                                                <?php echo $list->address1 ?> <?php echo $list->address2 ?>
											</div>
											<div class="form-group">
												<label>Province</label>
                                                <?php echo $list->province ?>
											</div>
											<div class="form-group">
												<label>Country</label>
                                                <?php echo $list->country ?>
											</div>
											<div class="form-group">
												<label>Zip</label>
                                                <?php echo $list->zip ?>
											</div>
										<?php } ?>
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