<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ivori</title>
  <link rel="icon" href="<?php echo base_url('public/img/common/favicon.png');?>" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/common.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/slick.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/slick-theme.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/'.$this->session->userdata('lang').'.css');?>">
  <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.11.1.min.js');?>"></script>
</head>
<body>
  <div id="wrap">
  
    <!--header-->
	<?php if ($current_page == 'top') { ?>
		<?php $this->load->view('_header.php');?>
    <?php }else { ?>
		<?php $this->load->view('_header_blog.php');?>
	<?php } ?>

	<div id="content">
	<?php $this->load->view($content);?>
	</div>
	
	<?php $this->load->view('_subscribe.php');?>
	
	<div id="footer">
		<footer>
		<!--footer-->
		<?php $this->load->view('_footer.php');?>
		</footer>
    </div>
	
  </div>
  
  <script type="text/javascript" src="<?php echo base_url('public/js/slick.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/common.js');?>"></script>
</body>
</html>