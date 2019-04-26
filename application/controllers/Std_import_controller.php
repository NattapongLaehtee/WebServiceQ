<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Std_import_controller extends CI_Controller {
   
    
    public function __construct()
    {
        parent::__construct();
    }
    public function  importstd(){
        $this->load->model('Std_import_Models');
        $this->load->library('std_import_libraries');
    }
    
    function index()
    {
        $this->load->view('content');
    }
    

    function import()
    {
        $file_data = $this->std_import_libraries->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach($file_data as $row)
        {
            $data[] = array(
                
                'Studentid' => $row["id"],
                'Studentname' => $row["First Name"],
                'Studentsurname'  => $row["Last Name"],
                
            );
        }
        $this->Std_import_Models->insert($data);
    }
    
    
}

