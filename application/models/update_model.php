<?php

class Update_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->db('testkpi');
	}

	function get_subKPI(){
		$query = $this->db->query('SELECT * FROM kpi WHERE kpi_id=')
	}
}
?>