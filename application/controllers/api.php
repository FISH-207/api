<?php
define('BASEPATH') OR exit ('No Direct Script Access Allowed');
/**
 * 
 send all sample data
 */
class api extends CI_Controller
{
	
	function __construct( )
	{
		# code...
		parent::__construct();
		$this->load->model('api_model');

		$this->load->library('form_validation');

	}
	function index(){
		$data= $this->api_model->fetch_all();
		echo json_encode($data->result_array());

	}
}

?>