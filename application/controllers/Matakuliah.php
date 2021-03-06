<?php if(! defined('BASEPATH')) exit('No direct script allowed');

class Matakuliah extends CI_Controller {
	
	function __construct ()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Matakuliah_model');
	}
	
	public function index()
	{
		$data['matakuliah'] = $this->Matakuliah_model->retrieve();
		$this->load->view('Matakuliah_view',$data);
	}
	
	public function form_tambah()
	{
		$this->load->view('Tambah_matakuliah_view');
	}
	
	public function submit()
	{
		$this->Matakuliah_model->add($this->input->post('var'));
		$data['submitted'] = TRUE ;
		$this->load->view('Tambah_matakuliah_view',$data);
	}
	
	function delete()
	{
		$this->Matakuliah_model->delete($this->uri->rsegment(3));
		$this->index();
	}
	
	function form_update()
	{
		$data['matakuliah'] = $this->Matakuliah_model->getMatakuliah($this->uri->rsegment(3));
		$this->load->view('Update_matakuliah_view' , $data);
	}
	
	function update()
	{
		$this->Matakuliah_model->update($this->input->post('old_kd_matakuliah'),
										$this->input->post('var'));
										
		$this->index();
	}
}