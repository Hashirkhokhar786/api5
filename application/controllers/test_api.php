<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test_api extends CI_Controller{
    
    
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->library('form_validation');
                $this->load->library('insert_lib');
	}
    
        
      function index()
	{
		$this->load->view('api_view');
	}

	function action()
	{
		if($this->input->post('data_action'))
		{
			$data_action = $this->input->post('data_action');
                        
                        
                        if($data_action == "Insert")
			{
                      //$api_url = "http://localhost/apiv5/index.php/api/insert";
                                $api_url="http://dk.dev1.swipbox.com/service/api_v5/shipments";
			

				$form_data = array(
					'peice_id'		=>	$this->input->post('peice_id'),
					'shipment_id'			=>	$this->input->post('shipment_id'),
                                    'pick_up_pin'		=>	$this->input->post('pick_up_pin'),
                                    'email'		=>	$this->input->post('email'),
                                    'sms'		=>	$this->input->post('sms'),
                                    'shipment_type'		=>	$this->input->post('shipment_type'),
                                    'alloc_type'		=>	$this->input->post('alloc_type'),
                                    'width'		=>	$this->input->post('width'),
                                    'height'		=>	$this->input->post('height'),
                                    'depth'		=>	$this->input->post('depth'),
                                    'show_pin'		=>	$this->input->post('show_pin'),
                                    'expire_days'		=>	$this->input->post('expire_days'),
                                    'customer_name'		=>	$this->input->post('customer_name')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;


			}
                        
                }
        }
}