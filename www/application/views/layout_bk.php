<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ivori Admin Site</title>
  <link rel="icon" href="<?php echo base_url('public/img/common/favicon.png');?>" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/metisMenu.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/timeline.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/startmin.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/morris.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/admin-common.css');?>">
  <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.11.1.min.js');?>"></script>
  
</head>
<body>
  <div id="wrapper">

	<?php $this->load->view('_header_bk');?>
	<?php $this->load->view($content);?>

  </div>
  
  <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/metisMenu.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/startmin.js');?>"></script>
</body>
</html>