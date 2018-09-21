<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Devices_control extends CI_Controller {
    
    public function index(){
        
    }
    
      
    public function editdevice()   {
        
        $this->load->view('head');
        $this->load->view('editdevice');
        $this->load->view('foot');
        
    }
    public function device()    {
        
        $this->load->view('head');
        $this->load->view('devices');
        $this->load->view('foot');
    }

    public function insert_device(){
        //var_dump($_POST);
        

        
        $devicename = $this->input->post('devicename');
        $devicedetail = $this->input->post('devicedetail');
        $totaldevice = $this->input->post('totaldevice');
        
        if ( $devicename!="" &&  $devicedetail!="" && $totaldevice !="" ) {
           
            $this->load->model("Device_model");
            $data_device = array(
                'Tool_name' => $devicename,
                'Tool_detail' =>  $devicedetail,
                'Tool_amount' =>  $totaldevice
                
                
            );
            $this->Device_model->insertdevice($data_device);
        }else{
            echo "======E Lee 222=========";
        }
        
    }
    
    public function out_device(){
      
        $this->load->model('Device_model');
        $res = $this->Device_model->outdevice();
    
        $data['device_res'] = $res;
        
        $this->load->view('head');
        $this->load->view('outdevice',$data );
        $this->load->view('foot');
    }
    public function update_device(){
        //var_dump($_POST);
        
        
        $deviceid = $this->input->post('id');
        $updevicename = $this->input->post('updevicename');
        $updevicedetail = $this->input->post('updevicedetail');
        $uptotaldevice = $this->input->post('uptotaldevice');
        
        if ($updevicename!="" &&  $updevicedetail!="" && $uptotaldevice !="" ) {
            
            $this->load->model("Device_model");
            $data_updevice = array(
                'Tool_id' => $deviceid,
                'Tool_name' => $updevicename,
                'Tool_detail' =>  $updevicedetail,
                'Tool_amount' =>  $uptotaldevice
                
                
            );
            $this->Device_model->updatedevice($data_updevice);
        }else{
            echo "======E Lee 222=========";
        }
        
    }
    
}
