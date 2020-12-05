<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class tambah_mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mahasiswa');
	}
	public function index(){
		$data['dt_jurusan']=$this->m_mahasiswa->tampil_jrs()->result();
		$this->load->view('t_mahasiswa',$data);
		if($this->input->post('save'))
		{
		    $idata['nim']=$this->input->post("nim");
		    $idata['nama']=$this->input->post("nama");
			$idata['tempat_lahir']=$this->input->post("tempat");
			$idata['tanggal_lahir']=$this->input->post("tanggal");
			$idata['id_jurusan']=$this->input->post("jurusan");
			$idata['ipk']=$this->input->post("ipk");
			$user=$this->m_mahasiswa->tambah_mhs($idata);
			if($user<0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
}
 ?>