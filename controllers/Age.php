<?php
 class Age extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();

 		$this->load->database();

 		$this->load->helper('url');
 	}

 	public function index()

 	{	
 		if($this->input->post('age'))
 		{
 			$birth=$this->input->post('dob');
 			$current=$this->input->post('cdob');

 			$diff = date_diff(date_create($birth), date_create($current));

 			$data['year']=$diff->format('%y').'years';
 			$data['month']=$diff->format('%m').'months';
 			$data['days']=$diff->format('%d').'days';

 			// return $diff;

 			// $this->load->view('age',$data);

 			// echo 'Age is '.$diff->format('%y').'year'.$diff->format('%m').'months'.$diff->format('%d').'days' ;
 		}

 		$this->load->view('age',@$data);
 		
 	}
 }

//  $from = new DateTime($user['date_of_birth']);
// $to = new DateTime('today');
// $age = $from->diff($to)->y . "years and " . $from->diff($to)->m . " months."