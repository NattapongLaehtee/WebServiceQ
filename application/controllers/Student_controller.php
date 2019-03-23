<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_controller extends CI_Controller {
    
    public function student()
    {
        $this->load->view('head');
        $this->load->view('student/student_list' );
        $this->load->view('foot');
    }
    
    public function outstudent()
    {
        $this->load->model('Report_model');
        $res = $this->Report_model->outqueue();
        
        $dataq['queue_res'] = $res;
        $this->load->view('head');
        $this->load->view('outstudent', $dataq);
        $this->load->view('foot');
    }
 

}