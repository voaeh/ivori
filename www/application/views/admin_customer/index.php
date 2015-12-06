<script>
	function updateCustomer(id)
	{
		$("#customer_id").val(id);
		$("#form2").submit();
	}
</script>
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Customer List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
				<form id="form1" name="form1" action="" method="post">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Search Customer
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td style="width:200px;">Customer Name</td>
                                                <td style="width:300px;">
													<input class="form-control" type="text" name="name">
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
				<form id="form2" name="form2" method="post" action="<?php echo site_url('admin_customer/detail'); ?>" >
					<input type="hidden" name="customer_id" id="customer_id" />
					<input type="hidden" name="mode" id="mode" value="edit" />
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Customer List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Customer ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
												<th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($customerList as $list) { ?>
                                            <tr class="gradeA">
                                                <td><?php echo $list->customer_id ?></td>
                                                <td><?php echo $list->first_name ?></td>
                                                <td><?php echo $list->last_name ?></td>
                                                <td class="center"><?php echo $list->email ?></td>
												<td><a href="javascript:void(0)" onclick="updateCustomer('<?php echo $list->customer_id ?>')">Update</a></td>
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