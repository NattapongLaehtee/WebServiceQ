<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    
	
	public function index()
	{
	    
		$this->load->view('welcome_message');
	}
	
	public function outstudent()
	{
	    $this->load->model('Report_model');
	    $res = $this->Report_model->outqueue();
	    
	    $dataq['queue_res'] = $res;
	    
	    $this->load->view('head');
	    $this->load->view('outstudent',$dataq);
	    $this->load->view('foot'); 
	}
	
	
	public function studentshow()
	{
	   // $this->load->model('Printstudent_Model');
	    //$this->load->model('Util_model');
	    //$res = $this->Queue_Model->get_q_print();
	  
	    
	    $this->load->view('head');
	    $this->load->view('report/QPrint');
	    $this->load->view('foot'); 
	}
	
	
	public function student()
	{
	    $this->load->model('Student_model');
	    $res = $this->Student_model->get_student();
	    $data['student_res']  = $res;
	    
	    $this->load->view('head');
	    $this->load->view('student/student_list',$data );
	    $this->load->view('foot');
	}
	
	public function index1()
	{
	    $this->load->model('Graph_model');
	    $res = $this->Graph_model->get_reservq();
	    $data['reservq_res'] = $res;
	    
	    $this->load->model('Graph_model');
	    $res = $this->Graph_model->get_useq();
	    $data['useq_res'] = $res; 
	    
	    $this->load->view('head');
	    $this->load->view('chart1', $data);
	    $this->load->view('foot');
	    
	}
	
}
