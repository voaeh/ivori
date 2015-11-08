<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ivori</title>
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('public/css/common.css');?>">
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