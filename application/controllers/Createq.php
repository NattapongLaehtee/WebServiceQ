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
    public function content3()
    {
        $this->load->model('Queue_model');
        $res = $this->Queue_model->outqueue();
        
        $dataq['queue_res'] = $res;
        $this->load->view('head');
        $this->load->view('content3', $dataq);
        $this->load->view('foot');
        
    }
    public function student()
    {
        
        
        $this->load->view('head');
        $this->load->view('student/student_list' );
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
 
    
    public function content2()
    
    {
        
        
        $this->load->model('Queue_model');
        $res = $this->Queue_model->outqueue();
        
        $dataq['queue_res'] = $res;
        $this->load->view('head');
        $this->load->view('content2', $dataq);
        $this->load->view('foot');
        
    }
    public function indexad()
    {
        $this->load->view('head');
        $this->load->view('indexadmin');
        $this->load->view('foot');
        
    }
    public function moveq()
    {
        $this->load->view('head');
        $this->load->view('moveq');
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
      
        $this->load->model('Report_model');
        $res = $this->Report_model->outqueue();
        
        $dataq['queue_res'] = $res;
        $this->load->view('head');
        $this->load->view('outstudent', $dataq);
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
        $this->load->model('Student_model');
        $res = $this->Student_model-> outstudent();
        
        $datastudent['student_res'] = $res;
        $this->load->view('head');
        $this->load->view('outstudent1',  $datastudent);
        $this->load->view('foot');
        
    }
    
   
    public function insert_queue()
    {
      //var_dump($_POST);
      
      // $this->load->view('content/post');
            
            $qname = $this->input->post('qname');
            $startreserv = $this->input->post('startreserv');
            $endreserv = $this->input->post('endreserv');
            $startuse = $this->input->post('startuse');
            $enduse = $this->input->post('enduse');
            $strattime = $_POST['starttime'];
            $endtime = $_POST['endtime'];
            $amounttime = $this->input->post('amounttime');
            $stepname = $this->input->post('stepname');
           // echo ( $strattime . " คนละอันกัน" .$endtime);
            
            // If you have post data...
      //echo "1==".$qname;
   //   echo "2==".$startreserv;
      //echo "3==".$endreserv;
      //echo "4==".$startuse;
     // echo "5==".$enduse;      
    //  if ($qname!="" && $startreserv!="" && $endreserv!="" && $startuse!="" &&  $enduse!="" && $stepname!="" &&  $amounttime!="" && $strattime!="" &&   $endtime!="" ) {
               
            $this->load->model("Queue_Model");
                $this->load->model("Util_Model");
                $data_queue = array(
                    'Cq_name' => $qname,
                    'Cq_reserdate' => $this->Util_Model->convertDateToDB($startreserv), 
                    'Cq_lastreser' => $this->Util_Model->convertDateToDB($endreserv),
                    'Cq_usedate' => $this->Util_Model->convertDateToDB($startuse), 
                    'Cq_lastuse' => $this->Util_Model->convertDateToDB($enduse),
                    'Officerid '=>$this -> session -> userdata('userofficeid')
                  );
                
                $data_step = array(
                    'Step_detail' => $stepname,
                    'Step_alm' => $amounttime
                 );
                $data_datetime = array(
                    'Time_usedate' =>$this->Util_Model->convertTimeToDB($strattime),
                    'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime)          
                    
                );
                
                $this->Queue_Model->insertqueue($data_queue,$data_step,$data_datetime);
          //  }else{
                //echo "===============";
          //  }
       //        
       // );
        
       // $data_box = array(
            //'Box_Name' => $
      //  ); 
    }
    public function editq($id)   {
      
           
        $this->load->model('Queue_Model');
        $this->load->model('Util_model');
        $res = $this->Queue_Model->outqueue_by_id($id); 
        
         $data = array (
             'queue_row' =>  $res,
             'abc'=>"F"
         );
        
        
            
            $this->load->view('head');
            $this->load->view('editq', $data);
            $this->load->view('foot');
            
            
       
        
    }
    public function update_queue(){
      //  $Tool_id = $this->input->post('tool_id');
       // $Tool_name = $this->input->post('Tool_name');
        //$Tool_detail = $this->input->post('Tool_detail_');
     //   $Tool_barcode = $this->input->post('Tool_barcode');
        
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
           // echo "======E Lee 222=========";
        }
        
    }
    /*public function delete_queue($id=0){
        if($id!=0){
            $this->load->model('Queue_model');
            $this->Queue_model->deletequeue($id);
            redirect('Createq/content3');
        }
    }*/
    
}
