<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devices_control extends CI_Controller {
    public function insert_device(){
        var_dump($_POST);
        

        
        $devicename = $this->input->post('devicename');
        $devicedetail = $this->input->post('devicedetail');
        
        if ( $devicename!="" &&  $devicedetail!=""  ) {
           
            $this->load->model("Device_model");
            $data_device = array(
                'Tool_name' => $devicename,
                'Tool_detial' =>  $devicedetail
                
            );
            $this->Device_model->insertdevice($data_device);
        }else{
            echo "===============";
        }
    }
}