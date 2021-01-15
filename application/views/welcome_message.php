<!DOCTYPE html>
<html lang="en">
	<head>

	<title>Majoo</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css_footer/css_footer.css'); ?>">

</style>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
<div align="right" style="margin: 20px;">
			
			<?= anchor('welcome/cart','Check Out',['class'=>'btn btn-success']) ?>
		</div>
		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping products -->
		  <?php foreach($products as $product) : ?>
		  <div class="col-sm-3 col-md-3">
			<div class="thumbnail">
			  <?=img([
				'src'		=> 'uploads/' . $product->image,
				'style'		=> 'max-width: 100%; max-height:100%; height:200px'
			  ])?>
			  <div class="caption">
				<h3 align="center" style="min-height:60px;"><?=$product->name?></h3>
				<p align="center"><?=$product->description?></p>
				<p align="center"><?=$product->price?></p>
				<p align="center">
					<?=anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
						'class'	=> 'btn btn-primary',
						'role'	=> 'button'
					])?>
				</p>
			  </div>
			</div>
		  </div>
		  <?php endforeach; ?>
		
		<div class="footer">
        <!-- Footer bottom Start -->
        <div class="footer-bottom">
            &copy; PT. Majoo Teknologi Indonesia
        </div>
        <!-- Footer bottom End -->
    </div>
	</body>

</html>