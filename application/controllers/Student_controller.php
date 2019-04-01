<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_controller extends CI_Controller {
    
    public function student()
    {
        $this->load->model('Student_model');
        $res = $this->Student_model->outqstudent();
        $data['dataq'] = $res;
        $res = $this->Student_model->outqfacstudent();
        $data['datafac'] = $res;
        $this->load->view('head');
        $this->load->view('student/student_list', $data );
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
    
    public function selectqstudent($id1,$id2){
        $this->load->model('Util_model'); 
        $this->load->model('Student_model'); 
        $res = $this->Student_model->selectstudent($id1,$id2);
     
        $data['dataqs'] = $res;
        $this->load->view('head');
        $this->load->view('student/student_list', $data );
        $this->load->view('foot');
    }
   
 

}