<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Createq extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
       
    }
    
    
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
        //$this->session->set_flashdata('massage', 'บันทึกข้อมูลเรียบร้อย' );
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
    public function moveq($id)
    {
        $this->load->model('Util_model');
        $this->load->model('Queue_model');
        $res = $this->Queue_model->selectmoveq($id);
        $data['move_queue'] = $res;
        $res = $this->Queue_model->selectmovedate($id);
        $data['move_date'] = $res;
        $res = $this->Queue_model->selectcountmovedate($id);
        $data['move_countdate'] = $res;
        $this->load->view('head');
        $this->load->view('moveq', $data);
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

   
 
    
    
    public function cancelq($id){
        $this->load->model("Queue_Model");
        
        $this->Queue_Model->cancelq($id);
        
        $this->session->set_flashdata('textid', 'cancelq' );
        $this->session->set_flashdata('text', 'คุณได้ยกเลิกการใช้งานคิวเรียบร้อยแล้ว' );
        redirect('Createq/content3');
    }
    
    public function openstatusq($id){
        $this->load->model("Queue_Model");
        
        $this->Queue_Model->openstatusq($id);
        $this->session->set_flashdata('textboxid', 'openq' );
        $this->session->set_flashdata('textbox', 'คุณได้เปิดการใช้งานคิวเรียบร้อยแล้ว' );
        redirect('Createq/content3');
        
    } 
    
    public function insert_queue() //สร้างคิว
    {
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
            // Strat Table student
            $csv_file = $this->input->post('csv_file');
          
            // End table Student
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

             $datadate = array();
            
            for ($i=0; $i < $date; $i++) {
           
                
                $date1 = str_replace('/', '/',  $startuse);
               $date2 = date('d/m/Y',strtotime($date1 ."+".$i." day"));
               $datadate[] = $date2;
              
                
            }
    
            
            $date2 = $this->input->post($date2);
            $rowdate = 0;
            foreach ($datadate as $datadate){
                $data_date[ $rowdate] = array(
                    'Date_usedate ' => $this->Util_Model->convertDateToDB($datadate)
                );
                $rowdate++;
           }
            
           /* foreach ($starttime as $starttime){
                $data_datetime[ $datatime] = array(
                    
                   // 'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                    
                    'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[ $datatime]),
                    'amount_std' => $amountstd[$datatime]
                );
                $datatime++;
            }*/
          //  $date2 = array();
          //  $dateuse = $date2;
            //$date_use = $date;'
         //   $dateuse = $this->input->post('dateuse');
               
           //$date2 = $this->input->post('date2');
           
         /*   foreach ($date2 as $date2){
                $datadate[$date] = array(
                           'Date_usedate '=>  $this->Util_Model->convertDateToDB($date2),
                       );
           
             
            }*/

           $this->load->model("Queue_Model");
            $data_queue = array(
                  'Cq_name' => $qname,
                'Cq_reserdate' =>  $this->Util_Model->convertDateToDB($startreserv), 
                    'Cq_lastreser' =>  $this->Util_Model->convertDateToDB($endreserv),
                  'Cq_usedate' => $startuse, 
                  'Cq_lastuse' => $enduse,
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
            
            
        /*  $data_std = array();
       
            $this->load->library('std_import_libraries');
             $file_data = $this->std_import_libraries->get_array($_FILES[$csv_file]["tmp_name"]);
           
            foreach($file_data as $row)
            {
                $data_std[] = array(
                    
                    'Studentid' => $row["id"],
                    'Studentname' => $row["First Name"],
                    'Studentsurname'  => $row[ "Last Name"]
                    
                );
               
            }*/
           // var_dump($data_step);
          //  $datadate = array(
             //   'Date_usedate '=> $this->Util_Model->convertDateToDB($date2)
           // );
         
            $data_datetime = array();
         
            $datatime = 0;
         
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
          
        
                
            $this->Queue_Model->insertqueue($data_queue,$data_step,$data_datetime, $data_date /*, $data_std*/);
          
            $this->session->set_flashdata('massageid', 'S001' );
            $this->session->set_flashdata('massage', 'บันทึกข้อมูลคิวเรียบร้อย' );
            redirect('Createq/content3');

    }
    public function editq($id)   {  //แสดงข้อมูลหน้า form แก้ไขข้อมูลคิว
        $data =array();
            
        $this->load->model('Queue_Model');
        $this->load->model('Util_model');
        $res = $this->Queue_Model->selectqueue($id); 
        $data['dataq'] = $res;
        $res = $this->Queue_Model->selectstep($id); 
        $data['datastep'] = $res;
        $res = $this->Queue_Model->selectdatetime($id); 
        $data['datatime'] = $res;
  
            $this->load->view('head');
            $this->load->view('editq', $data);
            $this->load->view('foot');
            
            
       
        
    }
    public function update_queue(){ //แก้ไขข้อมูลคิว
        
       
        $queue_id =$this->input->post('queue_id');
        $qname = $this->input->post('qname');
        $startreserv = $this->input->post('startreserv');
        $endreserv = $this->input->post('endreserv');
        $startuse = $this->input->post('startuse');
        $enduse = $this->input->post('enduse');
        // End Table Queue
        // Start Table Qdatetime
        $datetimeid = $this->input->post('datetimeid');
        $starttime = $this->input->post('starttime');
        $endtime = $this->input->post('endtime');
        $amountstd = $this->input->post('amountstdf1');
        // End Table Qdatetime
        // Start Table Step
        $stepid = $this->input->post('stepid');
        $stepbox = $this->input->post('stepbox');
        $amounttime = $this->input->post('amountstep');
        $stepname = $this->input->post('stepname');
        //var_dump($amounttime,$stepname );
        // End Table Step
        

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
        
        $datadate = array();
        
        for ($i=0; $i < $date; $i++) {
            
            
            $date1 = str_replace('/', '/',  $startuse);
            $date2 = date('d/m/Y',strtotime($date1 ."+".$i." day"));
            $datadate[] = $date2;
            
            
        }
        
        
        $date2 = $this->input->post($date2);
        $rowdate = 0;
        foreach ($datadate as $datadate){
            $data_date[ $rowdate] = array(
                'Date_usedate ' => $this->Util_Model->convertDateToDB($datadate)
            );
            $rowdate++;
        }
        
        /* foreach ($starttime as $starttime){
         $data_datetime[ $datatime] = array(
         
         // 'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
         
         'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[ $datatime]),
         'amount_std' => $amountstd[$datatime]
         );
         $datatime++;
         }*/
        //  $date2 = array();
        //  $dateuse = $date2;
        //$date_use = $date;'
        //   $dateuse = $this->input->post('dateuse');
        
        //$date2 = $this->input->post('date2');
        
        /*   foreach ($date2 as $date2){
         $datadate[$date] = array(
         'Date_usedate '=>  $this->Util_Model->convertDateToDB($date2),
         );
         
         
         }*/
        
        $this->load->model("Queue_Model");
        $data_queue = array(
            
            'Cq_name' => $qname,
            'Cq_reserdate' =>  $this->Util_Model->convertDateToDB($startreserv),
            'Cq_lastreser' =>  $this->Util_Model->convertDateToDB($endreserv),
            'Cq_usedate' =>  $this->Util_Model->convertDateToDB($startuse),
            'Cq_lastuse' =>  $this->Util_Model->convertDateToDB($enduse)
      
        );
        
        $data_step = array();
        
        $rec = 0;
        echo ("<br/><br/>");
        //var_dump($amounttime);
        foreach ($stepname as $stp_name){
            $data_step[$rec] = array(
                'step_id'=> $stepid[$rec],
                'step_detail' => $stp_name ,
                'step_box'=> $stepbox[$rec],
                'step_alm'  => $amounttime[$rec]
            );
            $rec++;
        }
        
        
        /*  $data_std = array();
        
        $this->load->library('std_import_libraries');
        $file_data = $this->std_import_libraries->get_array($_FILES[$csv_file]["tmp_name"]);
        
        foreach($file_data as $row)
        {
        $data_std[] = array(
        
        'Studentid' => $row["id"],
        'Studentname' => $row["First Name"],
        'Studentsurname'  => $row[ "Last Name"]
        
        );
        
        }*/
        // var_dump($data_step);
        //  $datadate = array(
        //   'Date_usedate '=> $this->Util_Model->convertDateToDB($date2)
        // );
        
        $data_datetime = array();
        
        $datatime = 0;
        
        echo ("<br/><br/>");
        //var_dump($amounttime);
        
        foreach ($starttime as $starttime){
            $data_datetime[ $datatime] = array(
                'Datetime_id' =>  $datetimeid[$datatime],
                'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                
                'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[ $datatime]),
                'amount_std' => $amountstd[$datatime]
            );
            $datatime++;
        }
        
        //-----------------------------------------------------------
       
     /*   $this->load->model("Queue_Model");
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
                'step_id' => $stepid[$rec],
                'step_detail' => $stp_name ,
              
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
                'Datetime_id' => $datetimeid[$datadate],
                'Time_usedate' =>$this->Util_Model->convertTimeToDB($starttime),
                'Time_lastuse' =>$this->Util_Model->convertTimeToDB($endtime[$datadate]),
                
                //'Cq_id'=> $queue_id[$datadate],
                'amount_std' => $amountstd[$datadate]
            );
            $datadate++;
        }*/
        
        //var_dump($data_datetime);
       // echo ("<br/><br/>");
         
        
        $this->Queue_Model->updateq($data_queue,$data_step,$data_datetime);
        
        $this->session->set_flashdata('editid', 'editq' );
        $this->session->set_flashdata('edittext', 'คุณได้ทำการแก้ไขข้อมูลคิวเรียบร้อยแล้ว' );
        redirect('Createq/content3');
    }

  
    public function changequeue(){//บันทึกการเลื่อนคิว
        
      
        $queueid =$this->input->post('queueid');


        // End Table Queue
        // Start Table Qdatetime
        $datetimeid = $this->input->post('datetimeid');
        $datemoveq = $this->input->post('datemoveq');
        $starttime = $this->input->post('starttime');
        $endtime = $this->input->post('endtime');
        //$amountstd = $this->input->post('amountstdf');
        // End Table Qdatetime
        $this->load->model('Util_model');
        $this->load->model('Queue_Model');
        
        
        
        //var_dump($amounttime);
   
       
        $datadatetime = array();
        $datadate = 0;
        foreach ($starttime as $starttime){
            $datadatetime[$datadate] = array(
              
                'Datetime_id' => $datetimeid[$datadate],
                'Date_usedate' => $this->Util_model->convertDateToDB($datemoveq[$datadate]),
                'Time_usedate' =>$this->Util_model->convertTimeToDB($starttime),
                'Time_lastuse' =>$this->Util_model->convertTimeToDB($endtime[$datadate]),
                
                //'Cq_id'=> $queue_id[$datadate],
                
            );
            $datadate++;
       }
      
       $this->Queue_Model->changemoveq( $datadatetime );
        // echo ("<br/><br/>");
         $this->session->set_flashdata('massageid', 'moveq' );
        $this->session->set_flashdata('massage', 'คุณได้เลื่อนคิวเรียบร้อยแล้ว' );
        redirect('Createq/content2');
    }
}
