<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class data_mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mahasiswa');
	}
	public function index(){
		$data['dt_mahasiswa']=$this->m_mahasiswa->tampil_mhs()->result();
		$this->load->view('v_mahasiswa',$data);
	}
	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->m_mahasiswa->deleterecords($id);
	echo "data deleted successfully !";
	}
	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->m_mahasiswa->displayrecordsById($id);
	$this->load->view('update_mhs',$result);
	
		if($this->input->post('update'))
		{
			$nama=$this->input->post("nama");
			$tempat=$this->input->post("tempat");
			$tanggal=$this->input->post("tanggal");
			$jurusan=$this->input->post("jurusan");
			$ipk=$this->input->post("ipk");
			
		$this->m_mahasiswa->update_records($nama,$tempat,$tanggal,$jurusan,$ipk,$id);
		echo "Date updated successfully !";
		}
	}
	

}
 ?>