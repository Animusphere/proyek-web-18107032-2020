<!DOCTYPE html>
<html> 
 <head>        
    <title>Tambah Data Mahasiswa</title>
    <link  href="<?php echo base_url('asset/css/bootstrap.min.css');?>"
    rel="stylesheet">
 </head>
 <body>
  <?php foreach ($data as $row) { ?>
   <form method ="POST"> 
       
      <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $row->nim;?>" disable>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row->nama;?>"
        >
      </div>
      
      <div class="form-group">
        <label for="tempat">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat" id="tempat" value="<?php echo $row->tempat_lahir;?>">
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $row->tanggal_lahir;?>">
      </div>
       
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
          <select class="form-control" name="jurusan" id="jurusan">
            <option value="" selected disabled hidden><?php echo $row->fakultas;?></option>
            <?php
                foreach ($dt_jurusan as $row) { 
                  echo "<option value='".$row->id_jurusan."'>".$row->jurusan."</option>";}
            ?>
             </select>
          </div>
          <div class="form-group">
            <label for="ipk">IPK</label>
            <input type="text" class="form-control" name="ipk" id="ipk" value="<?php echo $row->ipk;?>">
      </div>
      <button type="submit" id="update" name="update" value="Update_Records" class="btn btn-primary">Submit</button>
      <?php } ?>
<script  src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
<script  src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
 </body>
</html>