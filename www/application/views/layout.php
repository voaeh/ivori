<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ivori</title>
  <link rel="icon" href="<?php echo base_url('public/img/common/favicon.png');?>" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/common.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/'.$this->session->userdata('lang').'.css');?>">
  <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.11.1.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/common.js');?>"></script>
</head>
<body>
  <div id="wrap">
  
    <!--header-->
	<?php $this->load->view('_header.php');?>
    

	<div id="content">
	<?php $this->load->view($content);?>
	</div>
	
	<!--footer-->
    <?php //$this->load->view('_footer.php');?>
    
  </div>
</body>
</html>