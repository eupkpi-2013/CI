<?php
class Update extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$q = $_GET['q'];
		$data['kpi'] = $this->user_db->sidebar();
		$data['subkpi'] = $this->user_db->subsidebar();
		$data['metric'] = $this->user_db->query_metric($q);
		$data['checker'] = "notempty";

		$this->load->model('update_model');

		$data['data1'] = $this->update_model->get_subKPI();
		$data['data2'] = $this->update_model->get_metrics();
		$data['data3'] = $this->update_model->get_value();

		$this->load->view('kpi/header');
		$this->load->view('kpi/banner');
		$this->load->view('kpi/navbar_user');
		$this->load->view('kpi/update', $data);
		$this->load->view('kpi/footer');
	}
}
?>