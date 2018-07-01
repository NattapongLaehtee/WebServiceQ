<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Createq extends CI_Controller {
    
    public function indexqm()
    {
        $this->load->view('head');
        $this->load->view('indexqm');
        //$this->load->view('foot');
        
    }
    public function content()
    {
        $this->load->view('head');
        $this->load->view('content');
        $this->load->view('foot');
        
    }
    public function student()
    {
        $this->load->model('Student_model');
        $res = $this->Student_model->get_student();
        $data['student_res'] = $res;
        
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
    
    public function device()
    {
        $this->load->view('head');
        $this->load->view('devices');
        $this->load->view('foot');
    }
    public function content2()
    {
        $this->load->view('head');
        $this->load->view('content2');
        $this->load->view('foot');
        
    }
    public function indexad()
    {
        $this->load->view('head');
        $this->load->view('indexadmin');
        $this->load->view('foot');
        
    }
    public function editq()
    {
        $this->load->view('head');
        $this->load->view('editq');
        $this->load->view('foot');
        
    }
    public function outdevice()
    {
        $this->load->view('head');
        $this->load->view('outdevice');
        $this->load->view('foot');
        
    }
    public function editdevice()
    {
        $this->load->view('head');
        $this->load->view('editdevice');
        $this->load->view('foot');
        
    }
    public function setdevice()
    {
        $this->load->view('head');
        $this->load->view('setdevice');
        $this->load->view('foot');
        
    }
    public function staff()
    {
        $this->load->view('head');
        $this->load->view('Staff');
        $this->load->view('foot');
        
    } 
    public function outstaff()
    {
        $this->load->view('head');
        $this->load->view('outstaff');
        $this->load->view('foot');
        
    }
    public function outstudent()
    {
        $this->load->view('head');
        $this->load->view('outstudent');
        $this->load->view('foot');
        
    }
    public function setdevice1()
    {
        $this->load->view('head');
        $this->load->view('setdevice1');
        $this->load->view('foot');
        
    }
    public function outstudent1()
    {
        $this->load->view('head');
        $this->load->view('outstudent1');
        $this->load->view('foot');
        
    }
    
   
 

    
}
