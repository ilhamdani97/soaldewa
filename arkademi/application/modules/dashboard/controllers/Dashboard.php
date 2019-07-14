<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct()
	{ 
	    parent::__construct();
	    $this->load->model('M_dashboard');
	}
	public function index()
	{
	
		$data["data"]= $this->M_dashboard->getdata();
		$data["work"]    = json_encode($this->db->query("SELECT * FROM work ")->result());
		$data["salary"]      = json_encode($this->db->query("SELECT * FROM salary ")->result());
		$this->load->view("dashboard/home", $data);
	}
	public function post_insert(){
		$dataInsert = array(
			'name' 	=> $this->input->post("name"),
			'id_work' => $this->input->post("work"),
			'id_salary' 	=> $this->input->post("salary")
		);

		if ($this->M_dashboard->insert($dataInsert)){ 
			$this->session->set_flashdata('report', "<div class='alert alert-success'>Berhasil Menambahkan Data!</div>");
			redirect();
		}else{
			$data["pesan"] = "<div class='alert alert-danger'>Gagal Menambahkan Data!</div>";
		}
	}
	public function post_edit($id=""){
		$data_update = array(
			"name" 	=> $this->input->post("name"),
			"id_work"         => $this->input->post("work"),
			"id_salary"     => $this->input->post("salary")
		);

		$this->M_dashboard->update($data_update,array('id' => $id));
		$this->session->set_flashdata('report', "<div class='alert alert-success'>Berhasil Edit Data!</div>");
		redirect();
		
	}
	public function hapus($id){
        $data = $this->M_dashboard->delete($id);
        $this->session->set_flashdata('report', "<div class='alert alert-danger'>Berhasil Menghapus Data!</div>");
		redirect();
    }

}