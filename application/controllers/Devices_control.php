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
       
        // Start Table Queue  
        $queueid = $this->input->post('queueid');
        // End Table Queue
        // Start Table Step  
        $stepid = $this->input->post('stepid');
        // End Table Step 
        // Start Table Servicebox
        $boxname = $this->input->post('boxname');
        // End Table Servicebox
        // Start Table Usingdevice
        $usingid = $this->input->post('usingid');
        $startdevice = $this->input->post('startdevice');
        $enddevice = $this->input->post('enddevice');
        // End Table Usingdevice
        // Start Table Tool 
        $toolid = $this->input->post('toolid');
        $toolbarcode = $this->input->post('barcode');
        // End Table Tool
       /* var_dump($queueid);
        echo "</br>"."========"."</br>";
        var_dump($stepid);
        echo "</br>"."========"."</br>";
        var_dump($boxname);
        echo "</br>"."========"."</br>";
        var_dump($usingid);
        echo "</br>"."========"."</br>";
        var_dump($startdevice);
        echo "</br>"."========"."</br>";
        var_dump($enddevice);
        echo "</br>"."========"."</br>";
        var_dump($toolid);
        echo "</br>"."========"."</br>";
        var_dump($toolbarcode);
        die();*/
        $this->load->model('Util_model');
        $this->load->model('Device_model');
        $datausing = array(
         
            'startuse' => $this->Util_model->convertDateToDB($startdevice),
            'enduse' => $this->Util_model->convertDateToDB($enddevice),
            'Cq_id' =>  $queueid
        );
        $datastep = array();
        $recstep = 0;
        foreach ($stepid as $step_id){
        $datastep[$recstep]= array (
            'Step_id' => $step_id
        );
        for  ($i=1; $i<= $boxname; $i++){
        $dataservicebox= array(
            'Box_name' => $boxname,
            'Tool_id' => $toolid,
            'Step_id' => $stepid,
            'Using_id'=> $usingid
        );
        
        }
        $recstep++;        
        }
    

    
          $dataservicebox= array(
               'Box_name' => $boxname,
                   'Tool_id' => $toolid,
              'Step_id' => $stepid,
                           'Using_id'=> $usingid
           );
   
           
        
          $this->Device_model->setdatedevice($datausing, $datastep, $dataservicebox);
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
