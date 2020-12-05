<!DOCTYPE html>
<html Lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<link  href="<?php echo base_url('asset/css/bootstrap.min.css');?>"
	rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h2 class="display-4"><?php echo $content; ?></h2>
				<p class="lead">paragraph goes here</p>
				<p class="lead"><a href="http://localhost/myproject/blog/table">table</a></p>
			</div>
		</div>
	</div>
	<script  src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
	<script  src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>