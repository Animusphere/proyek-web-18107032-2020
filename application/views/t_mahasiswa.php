<!DOCTYPE html>
<html> 
 <head>        
    <title>Tambah Data Mahasiswa</title>
    <link  href="<?php echo base_url('asset/css/bootstrap.min.css');?>"
    rel="stylesheet">
 </head>
 <body>
   <form method ="POST"> 
       <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
      </div>
      <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" placeholder="00000000000">
      </div>
      <div class="form-group">
        <label for="tempat">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat" id="tempat" placeholder="contoh : Jakarta">
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal">
      </div>
       
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
          <select class="form-control" name="jurusan" id="jurusan">
            <option value="" selected disabled hidden>Pilih Jurusan</option>
            <?php
                foreach ($dt_jurusan as $row) { 
                  echo "<option value='".$row->id_jurusan."'>".$row->jurusan."</option>";}
            ?>
             </select>
          </div>
          <div class="form-group">
            <label for="ipk">IPK</label>
            <input type="text" class="form-control" name="ipk" id="ipk" placeholder="0.0">
      </div>
      <button type="submit" id="save" name="save" value="Save Data" class="btn btn-primary">Submit</button>
<script  src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
<script  src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
 </body>
</html>