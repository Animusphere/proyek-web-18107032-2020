<?php 
class Blog extends CI_controller{
function __construct(){
	parent::__construct();
}
function index(){
	$data['title'] = "title";
	$data['content'] = "content in here";
	$this->load->view('blog_view',$data);
}
function table(){
	$data['title'] = "table";
	$data['content'] = "This Is Content";
	$this->load->view('table_view',$data);
}
}
 ?>
