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
        //  var_dump($_POST);
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
            $stepbox = $this->input->post('stepbox');
            $amounttime = $this->input->post('amountstep');
            $stepname = $this->input->post('stepname');
           // var_dump($amounttime,$stepname );
          // End Table Step
            $this->load->model("Util_Model");
            $startuse =   $this->Util_Model->convertDateToDB($startuse);
            $enduse =  $this->Util_Model->convertDateToDB($enduse);
            function DateDiff ( $startuse,$enduse)
            {
              
              
                return ((strtotime($enduse) - strtotime( $startuse)) /  ( 60 * 60 * 24 )) +1 ;  // 1 day = 60*60*24
            }
            $date = DateDiff( $startuse,$enduse);
            
            
          echo "Date Diff = ". $date;
           echo "<br/>";
            $datadate = array();
            
            for ($i=0; $i < $date; $i++) {
                # code...
                
                $date1 = str_replace('-', '/',   $startuse);
               $date2 = date('d-m-Y',strtotime($date1 ."+".$i." day"));
               $datadate[] = $date2;
                echo $date2. "<br/>";
                
            }
          //  $date2 = array();
          //  $dateuse = $date2;
            //$date_use = $date;'
         //   $dateuse = $this->input->post('dateuse');
               
           $date2 = $this->input->post('date2');
           
         /*   foreach ($date2 as $date2){
                $datadate[$date] = array(
                           'Date_usedate '=>  $this->Util_Model->convertDateToDB($date2),
                       );
           
             
            }*/
      
            print_r($datadate);
            //$datadate;
           
                
          
         // If you have post data...
        //  echo "1==" .$qname;
       //   echo "2==".$startreserv;
          //echo "3==".$endreserv;
          //echo "4==".$startuse;
     //     echo "5==".$enduse;      
    //  if ($qname!="" && $startreserv!="" && $endreserv!="" && $startuse!="" &&  $enduse!="" && $stepname!="" &&  $amounttime!="" && $strattime!="" &&   $endtime!="" ) {
              //die(); 

            $this->load->model("Queue_Model");
           
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
                    'step_box'=> $stepbox[$rec],
                    'step_alm'  => $amounttime[$rec]
                );
                $rec++;
            }
            
           // var_dump($data_step);
          //  $datadate = array(
             //   'Date_usedate '=> $this->Util_Model->convertDateToDB($date2)
           // );
            $datadate1 = 0;
            foreach ($date2 as $date2){
                $datadate[ $datadate1] = array(
                    'Date_usedate ' => $this->Util_Model->convertDateToDB($date2)
                );
                $datadate1++;
            }
           
            $data_datetime = array();
            $data_date = array();
            $datatime = 0;
            $datadate = 0;
            echo ("<br/><br/>");
            //var_dump($amounttime);
         
            foreach ($starttime as $starttime){
                $data_datetime[ $datatime] = array(
              
                  'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                    
                    'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[ $datatime]),          
                    'amount_std' => $amountstd[$datatime]
            );
                $datatime++;
            }
          
                
              var_dump($data_queue);
              echo "<br/>";
              var_dump($data_step);
              echo "<br/>";
              var_dump( $data_date);
              echo "<br/>";
           
                
              $this->Queue_Model->insertqueue($data_queue,$data_step,$data_datetime, $datadate);
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
        $datetimeid = $this->input->post('datetimeid');
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $amountstd = $this->input->post('amountstdf1');
        // End Table Qdatetime
        // Start Table Step
        $stepid = $this->input->post('stepid');
        $stepbox = $this->input->post('stepbox');
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
       // echo ("<br/><br/>");
        //var_dump($amounttime);
        foreach ($stepname as $stp_name){
            $data_step[$rec] = array(
         
                'step_detail' => $stp_name ,
                'step_id' => $stepid[$rec],
                'step_box' => $stepbox[$rec],
               //'Cq_id'=> $queue_id[$rec],
                'step_alm'  => $amounttime[$rec]
            );
            $rec++;
        }
        
      // var_dump($data_step);
        //echo ("<br/><br/>");
        
        $data_datetime = array();
        $datadate = 0;
       // echo ("<br/><br/>");
        //var_dump($amounttime);
        foreach ($starttime as $starttime){
            $data_datetime[$datadate] = array(
                
                'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[$datadate]),
                'Datetime_id' => $datetimeid[$datadate],
                //'Cq_id'=> $queue_id[$datadate],
                'amount_std' => $amountstd[$datadate]
            );
            $datadate++;
        }
        
        //var_dump($data_datetime);
       // echo ("<br/><br/>");
         
        
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
