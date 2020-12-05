<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link  href="<?php echo base_url('asset/css/bootstrap.min.css');?>"
	rel="stylesheet">
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Fakultas</th>
      <th scope="col">IPK</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($dt_mahasiswa as $row) { ?>
  	<tr>
      <th scope="row"><?php echo $row->nim; ?></th>
      <td><?php echo $row->nama; ?></td>
      <td><?php echo $row->tempat_lahir; ?></td>
      <td><?php echo $row->tanggal_lahir; ?></td>
      <td><?php echo $row->jurusan; ?></td>
      <td><?php echo $row->fakultas; ?></td>
      <td><?php echo $row->ipk; ?></td>
      <td><a href="data_mahasiswa/deletedata?id=<?php echo $row->nim; ?>">Delete</a> 
      <a href="data_mahasiswa/updatedata?id=<?php echo $row->nim; ?>">Update</a></td>
    </tr>	
  	<?php } ?>
  	
  	 
    
  </tbody>
</table>
<script  src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
	<script  src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>