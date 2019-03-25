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
	
	public function queuestudentshow($id)
	{
	    $this->load->model('Report_model');
	    $res = $this->Report_model->outqueuestud($id);
	    
	    $dataqstu['qstudent'] = $res;
	    $this->load->view('head');
	    $this->load->view('report/QPrint',$dataqstu);
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
	
	public function callpdf(){
	    $this->load->library('Pdf');
	    
	
        $this->load->view('report/file');
	}
}
