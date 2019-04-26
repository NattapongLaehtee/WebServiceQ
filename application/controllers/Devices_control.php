<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Devices_control extends CI_Controller {
    
    public function index(){
        
    }
    
      
    public function editdevice($id)   {
        
            
            
            $this->load->model('Device_model');
            $res = $this->Device_model->outdevice_by_id($id);
            //var_dump($res);die();
            $data['device_row'] = $res;
            $this->load->view('head');
            $this->load->view('editdevice',$data);
            $this->load->view('foot');
      
    }
    public function device()    {
        
       
        
        $this->load->view('head');
        $this->load->view('devices');
        $this->load->view('foot');
    }
    public function setdevice()
    {
      
        $this->load->model('Device_model');
        $res = $this->Device_model->outqsetdevice();
        $data['datasetdevice'] = $res;
  
      
        $this->load->view('head');
        $this->load->view('setdevice', $data);
        $this->load->view('foot');
        
    }
    public function setdevice1($id)
    {   
        $this->load->model('Util_model');
        $this->load->model('Device_model');
        $res = $this->Device_model->outqdevice($id);
        $data['dataqdevice'] = $res;
        $res = $this->Device_model->outsetdevice($id);
        $data['datadevice'] = $res;
        
        $this->load->view('head');
        $this->load->view('setdevice1', $data);
        $this->load->view('foot');
    }
    public function setusingdevice(){
        $this->load->model('Util_model');
        $this->load->model('Device_model');
        
        
        $stepid = $this->input->post('Step_id');
        
    }
    public function insert_device(){
        //var_dump($_POST);
        

        
        $devicename = $this->input->post('devicename');
        $devicedetail = $this->input->post('devicedetail');
        $barcodedevice = $this->input->post('barcodedevice');
        
        if ( $devicename!="" &&  $devicedetail!="" && $barcodedevice !="" ) {
           
            $this->load->model("Device_model");
            $data_device = array(
                'Tool_name' => $devicename,
                'Tool_detail' =>  $devicedetail,
                'Tool_barcode' =>  $barcodedevice
                
                
            );
            $this->Device_model->insertdevice($data_device);
            redirect("Devices_control/out_device");
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
        $Tool_id = $this->input->post('tool_id');
        $Tool_name = $this->input->post('Tool_name');
        $Tool_detail = $this->input->post('Tool_detail_');
        $Tool_barcode = $this->input->post('Tool_barcode');
        
        if ($Tool_id!="" && $Tool_name!="" &&  $Tool_detail!="" && $Tool_barcode !="" ) {
            
            $this->load->model("Device_model");
            $data_updevice = array(
                'Tool_name' => $Tool_name,
                'Tool_detail' =>  $Tool_detail,
                'Tool_barcode' =>  $Tool_barcode
            );
            $this->Device_model->updatedevice($data_updevice,$Tool_id);
            redirect("Devices_control/out_device");
        }else{
            echo "======E Lee 222=========";
        }
        
    }
    public function statusdevice(){
        $this->load->model('Device_model');
        $res = $this->Device_model->selectstatdevice();
        
        $data ['device_row'] = $res;
        $this->load->view('head');
        $this->load->view('statusdevice', $data );
        $this->load->view('foot');
   
    }
    
    public function cancel_device($id){
      
            $this->load->model('Device_model');
            $this->Device_model->canceldevice($id);
           
          
    }
    public function opendevice($id){
        $this->load->model('Device_model');
        $this->Device_model->opendevice($id);
        
    }
    
}
