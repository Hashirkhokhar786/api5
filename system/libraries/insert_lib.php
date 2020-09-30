<?php

class ci_insert_lib{
    
    
     public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->library('form_validation');
                
	}
    
    
    
    public function insert()
    {
        $this->form_validation->set_rules('peice_id', 'Peice Id', 'required');
		$this->form_validation->set_rules('shipment_id', 'Shipment Id', 'required');
                $this->form_validation->set_rules('pick_up_pin', 'Pick up pin', 'required');
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('sms', 'sms', 'required');
                $this->form_validation->set_rules('shipment_type', 'shipment type', 'required');
                $this->form_validation->set_rules('alloc_type', 'alloc type', 'required');
                $this->form_validation->set_rules('width', 'width', 'required');
                $this->form_validation->set_rules('height', 'height', 'required');
                $this->form_validation->set_rules('depth', 'depth', 'required');
                $this->form_validation->set_rules('show_pin', 'show pin', 'required');
                $this->form_validation->set_rules('expire_days', 'expire days', 'required');
                $this->form_validation->set_rules('customer_name', 'customer name', 'required');
		if($this->form_validation->run())
		{
			$data = array(
				'peice_id'	=>	$this->input->post('peice_id'),
				'shipment_id'		=>	$this->input->post('shipment_id'),
                            'pick_up_pin'	=>	$this->input->post('pick_up_pin'),
                            'email'	=>	$this->input->post('email'),
                            'sms'	=>	$this->input->post('sms'),
                            'shipment_type'	=>	$this->input->post('shipment_type'),
                            'alloc_type'	=>	$this->input->post('alloc_type'),
                            'width'	=>	$this->input->post('width'),
                            'height'	=>	$this->input->post('height'),
                            'depth'	=>	$this->input->post('depth'),
                            'show_pin'	=>	$this->input->post('show_pin'),
                            'expire_days'	=>	$this->input->post('expire_days'),
                            'customer_name'	=>	$this->input->post('customer_name')
			);

			$this->api_model->insert_api($data);

			$array = array(
				'success'		=>	true
			);
		}
		else
		{
			$array = array(
				'error'					=>	true,
				'peice_id_error'		=>	form_error('peice_id'),
				'shipment_id_error'		=>	form_error('shipment_id'),
                            'pick_up_pin_error'		=>	form_error('pick_up_pin'),
                            'email_error'		=>	form_error('email'),
                            'sms_error'		=>	form_error('sms'),
                            'shipment_type_error'		=>	form_error('shipment_type'),
                            'alloc_type_error'		=>	form_error('alloc_type'),
                            'width_error'		=>	form_error('width'),
                            'height_error'		=>	form_error('height'),
                            'depth_error'		=>	form_error('depth'),
                            'show_pin_error'		=>	form_error('show_pin'),
                            'expire_days_error'		=>	form_error('expire_days'),
                            'customer_name_error'		=>	form_error('customer_name')
			);
		}
		echo json_encode($array);
	
        
        
    }
    
}

