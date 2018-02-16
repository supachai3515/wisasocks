<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//call model inti 
		$this->load->model('initdata_model');
		$this->load->library('pagination');
		 session_start();
	}

	public function index($ref_order_id="")
	{
		if($ref_order_id != ""){

		//get menu database 
		$this->load->model('initdata_model');
		$data['menus_list'] = $this->initdata_model->get_menu();
		$data['menu_type'] = $this->initdata_model->get_type();
		$data['menu_brands'] = $this->initdata_model->get_brands();

		$sql ="SELECT * FROM orders WHERE ref_id = '".$ref_order_id."'"; 
		$query = $this->db->query($sql);
		$row = $query->row_array();
		$data['order'] = $row;

		$sql_detail ="SELECT * ,r.price price_order FROM order_detail r INNER JOIN  products p ON r.product_id = p.id
						WHERE r.order_id ='".$row['id']."' ORDER BY r.linenumber ";
		$re = $this->db->query($sql_detail);
		$data['order_detail'] = $re->result_array();
		$this->load->view('invoice', $data);

		}
		else{
			echo "fail";
		}
	
	}
	public function doc($ref_order_id="")
	{
		print("sfs");
	
	}

}

/* End of file invoice.php */
/* Location: ./application/controllers/invoice.php */