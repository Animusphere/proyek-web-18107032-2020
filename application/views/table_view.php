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
        <h1 class="display-5"><?php echo $content; ?></h1>
				<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
	</div>
	<script  src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
	<script  src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>