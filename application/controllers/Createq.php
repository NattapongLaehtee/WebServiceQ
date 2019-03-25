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
    public function openq()
    
    {
        $this->load->model('Queue_model');
        $res = $this->Queue_model->outstatusq ();
        
        $dataq['queue_res'] = $res;
        $this->load->view('head');
        $this->load->view('openq' , $dataq);
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
          var_dump($_POST);
         // $this->load->view('content/post');
         
           // Start Table Queue            
            $qname = $this->input->post('qname');
            $startreserv = $this->input->post('startreserv');
            $endreserv = $this->input->post('endreserv');
            $startuse = $this->input->post('startuse');
            $enduse = $this->input->post('enduse');
          // End Table Queue
          // Start Table Qdatetime
            $starttime = $_POST['starttime'];
            $endtime = $_POST['endtime'];
            $amountstd = $this->input->post('amountstdf1');
            // End Table Qdatetime
          // Start Table Step
            $amounttime = $this->input->post('amountstep');
            $stepname = $this->input->post('stepname');
            var_dump($amounttime,$stepname );
          // End Table Step
        
         
         // echo ( $strattime . " คนละอันกัน" .$endtime);
            
         // If you have post data...
        //  echo "1==".$qname;
       //   echo "2==".$startreserv;
          //echo "3==".$endreserv;
          //echo "4==".$startuse;
     //     echo "5==".$enduse;      
    //  if ($qname!="" && $startreserv!="" && $endreserv!="" && $startuse!="" &&  $enduse!="" && $stepname!="" &&  $amounttime!="" && $strattime!="" &&   $endtime!="" ) {
              //die(); 
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
          
            $data_step = array();
            
            $rec = 0;
            echo ("<br/><br/>");
            //var_dump($amounttime);
            foreach ($stepname as $stp_name){
                $data_step[$rec] = array(
                    'step_detail' => $stp_name ,
                    'step_alm'  => $amounttime[$rec]
                );
                $rec++;
            }
            
            var_dump($data_step);
         
           
            $data_datetime = array();
            $datadate = 0;
            echo ("<br/><br/>");
            //var_dump($amounttime);
            foreach ($starttime as $starttime){
                $data_datetime[$datadate] = array(
                  'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                    'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[$datadate]),          
                  'amount_std' => $amountstd[$datadate]
            );
                $datadate++;
            }
                
                var_dump($data_datetime);
                
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
        $data =array();
        
           
        $this->load->model('Queue_Model');
        $this->load->model('Util_model');
        $res = $this->Queue_Model->selectqueue($id); 
        $data['dataq'] = $res;
        $res = $this->Queue_Model->selectstep($id); 
        $data['datastep'] = $res;
        $res = $this->Queue_Model->selectdatetime($id); 
        $data['datatime'] = $res;
  
        
       
         
        //var_dump($res);
            
            $this->load->view('head');
            $this->load->view('editq', $data);
            $this->load->view('foot');
            
            
       
        
    }
    public function update_queue(){
        
       
        $queue_id =$this->input->post('queue_id');
        $qname = $this->input->post('qname');
        $startreserv = $this->input->post('startreserv');
        $endreserv = $this->input->post('endreserv');
        $startuse = $this->input->post('startuse');
        $enduse = $this->input->post('enduse');
        // End Table Queue
        // Start Table Qdatetime
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $amountstd = $this->input->post('amountstdf1');
        // End Table Qdatetime
        // Start Table Step
        $amounttime = $this->input->post('amountstep');
        $stepname = $this->input->post('stepname');
        //var_dump($amounttime,$stepname );
        // End Table Step
        
        
        // echo ( $strattime . " คนละอันกัน" .$endtime);
        
        // If you have post data...
        //  echo "1==".$qname;
        //   echo "2==".$startreserv;
        //echo "3==".$endreserv;
        //echo "4==".$startuse;
        //     echo "5==".$enduse;
        //  if ($qname!="" && $startreserv!="" && $endreserv!="" && $startuse!="" &&  $enduse!="" && $stepname!="" &&  $amounttime!="" && $strattime!="" &&   $endtime!="" ) {
        //die();
        $this->load->model("Queue_Model");
        $this->load->model("Util_Model");
        $data_queue = array(
            'Cq_id'=> $queue_id,
            'Cq_name' => $qname,
            'Cq_reserdate' => $this->Util_Model->convertDateToDB($startreserv),
            'Cq_lastreser' => $this->Util_Model->convertDateToDB($endreserv),
            'Cq_usedate' => $this->Util_Model->convertDateToDB($startuse),
            'Cq_lastuse' => $this->Util_Model->convertDateToDB($enduse),
            'Officerid '=>$this -> session -> userdata('userofficeid')
        );
       // var_dump( $data_queue);
        
        $data_step = array();
        
        $rec = 0;
        //echo ("<br/><br/>");
        //var_dump($amounttime);
        foreach ($stepname as $stp_name){
            $data_step[$rec] = array(
                
                'step_detail' => $stp_name ,
               //'Cq_id'=> $queue_id[$rec],
                'step_alm'  => $amounttime[$rec]
            );
            $rec++;
        }
        
        //var_dump($data_step);
        //echo ("<br/><br/>");
        
        $data_datetime = array();
        $datadate = 0;
       // echo ("<br/><br/>");
        //var_dump($amounttime);
        foreach ($starttime as $starttime){
            $data_datetime[$datadate] = array(
                'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[$datadate]),
                //'Cq_id'=> $queue_id[$datadate],
                'amount_std' => $amountstd[$datadate]
            );
            $datadate++;
        }
        
       // var_dump($data_datetime);
        //echo ("<br/><br/>");
            
        
        $this->Queue_Model->updateq($data_queue,$data_step,$data_datetime);
    }
    public function cancelq($id){
        $this->load->model("Queue_Model");
     
        
      
        
        
           $this->Queue_Model->cancelq($id);
    }
    public function openstatusq($id){
        $this->load->model("Queue_Model");
        
        $this->Queue_Model->openstatusq($id);
        
    }
    
}
