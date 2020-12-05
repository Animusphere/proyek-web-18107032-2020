<?php 
class m_mahasiswa extends CI_model{
public function __construct(){
		parent::__construct();
	}
function tampil_mhs(){
	$this->db->select("tb_mahasiswa.nim,tb_mahasiswa.nama,tb_mahasiswa.tempat_lahir,tb_mahasiswa.tanggal_lahir,tb_jurusan.fakultas,tb_jurusan.jurusan,tb_mahasiswa.ipk");
	$this->db->from("tb_mahasiswa");
	$this->db->join("tb_jurusan","tb_mahasiswa.id_jurusan=tb_jurusan.id_jurusan");
	return $this->db->get();
}
function tampil_jrs(){
	$this->db->select("*");
	$this->db->from("tb_jurusan");
	return $this->db->get();
}
function tambah_mhs($data){
	 $this->db->insert("tb_mahasiswa",$data);
     return $this->db->insert_id();
     redirect(data_mahasiswa);
}
function deleterecords($id)
	{
	$this->db->query("delete from tb_mahasiswa  where nim='".$id."'");
	redirect(data_mahasiswa);
	}
function displayrecordsById($id)
	{
	$query=$this->db->query("select tb_mahasiswa.nim,tb_mahasiswa.nama,tb_mahasiswa.tempat_lahir,tb_mahasiswa.tanggal_lahir,tb_jurusan.fakultas,tb_jurusan.jurusan,tb_mahasiswa.ipk from tb_mahasiswa join tb_jurusan on tb_mahasiswa.id_jurusan=tb_jurusan.id_jurusan where nim='".$id."'");
	return $query->result();
	}
	/*Update*/
function update_records($nama,$tempat,$tanggal,$jurusan,$ipk,$id)
	{
	$query=$this->db->query("update tb_mahasiswa SET nama='$nama',tempat_lahir='tempat',tanggal_lahir='tanggal',id_jurusan='$jurusan',ipk='$ipk' where nim='$id'");
	redirect(data_mahasiswa);
	}
}

 ?>
