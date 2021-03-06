<?php 
class Queue_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}
		public function insertqueue($data_queue,$data_step,$data_datetime,$data_date /*,$data_std*/) //insertqueue
        {
        	
          // $this->db->insert('student',$data_std);
            
          $this->db->insert('queue',$data_queue);
           $Cq_id = $this->db->insert_id();
            //($data_step);
           // echo ("<br/>xxxxxxx<br/>");
             foreach ($data_step as $row){
               
               //  var_dump($step);
                 $stepinsert = array();
            
                 $stepinsert['Cq_id']=$Cq_id;
                 $stepinsert['step_detail']= $row['step_detail'];
                 $stepinsert['step_box']= $row['step_box'];
                 $stepinsert['step_alm']= $row['step_alm'];
                 // $this->db->set($data_step);
                $this->db->insert('step',$stepinsert);
                // var_dump($stepinsert);
                 }
                 foreach ( $data_date as $row){
                     $dateins = array();
                     $dateins['Cq_id']= $Cq_id;
                     $dateins['Date_usedate '] = $row['Date_usedate '];
                     
                     foreach ( $data_datetime as $row){
                     // var_dump($row);
                      
                     
                         $dateins['Time_usedate']= $row['Time_usedate'];
                         $dateins['Time_lastuse']= $row['Time_lastuse'];
                         $dateins['amount_std']=$row['amount_std'];
                         $this->db->insert('qdatetime', $dateins);
                      
                    }
                   // $this->db->insert('qdatetime', $dateins);
                 }
                  //   $data_datetime['Cq_id']= $this->db->insert_id();
                     //$this->db->set($data_datetime);
                    // $this->db->insert('qdatetime', $data_datetime);
               
        }
        
        public function outqueue(){
            $queryqueue = $this->db->query('select * from queue q  JOIN officer of on q.officerid = of.officerid 
        where statusq = 0 and q.officerid = '.$this -> session -> userdata ( 'userofficeid' ));
            return $queryqueue->result();
            
        }
        
        public function outstatusq(){
            $queryqueue = $this->db->query('select * from queue q  JOIN officer of on q.officerid = of.officerid
        where statusq = 1 and q.officerid = '.$this -> session -> userdata ( 'userofficeid' ));
            return $queryqueue->result();
            
        }
        
        public function selectqueue($id){
            $queryselectqueue =  $this->db->query('select * from queue where Cq_id ='. $id);
            return $queryselectqueue;
        }
        public function selectdatetime($id){
            
            $queryselectqdatetime = $this->db->query('select * from  qdatetime where Cq_id ='. $id);
            return $queryselectqdatetime->result();
        }
        public function selectstep($id){
            $queryselectstep =    $this->db->query(' select * from step  where Cq_id = '.$id);
            return $queryselectstep->result();
        }
        public function outqueue_by_id($id){
            $this->db->select('queue.Cq_id, queue.Cq_name, queue.Cq_usedate, queue.Cq_lastuse , queue.Cq_reserdate , 
                               queue.Cq_lastreser, queue.Officerid, qdatetime.Time_usedate, qdatetime.Time_lastuse, 
                               qdatetime.amount_std,step.Step_detail, step.Step_alm');
            $this->db->from('queue');
            $this->db->join('qdatetime','queue.Cq_id = qdatetime.Cq_id ');
            $this->db->join('step', 'queue.Cq_id = step.Cq_id ');
            $this->db->where('queue.Cq_id', $id);
            $query = $this->db->get( );
            $row = $query->row();
            return $row;
        }
        public function updateq($data_queue,$data_step,$data_datetime){  //editq
           
            
         
            // $this->db->set($data_queue);
           
              
              $this->db->where('Cq_id');
              $this->db->update('queue',$data_queue);
              
           
            //($data_step);
            // echo ("<br/>xxxxxxx<br/>");
            foreach ($data_step as $row){
                
                //  var_dump($step);
                $stepinsert = array();
                
             //   $stepinsert['Cq_id']=$Cq_id;
                $stepinsert['step_detail']= $row['step_detail'];
                $stepinsert['step_box']= $row['step_box'];
                $stepinsert['step_alm']= $row['step_alm'];
                // $this->db->set($data_step);
                $this->db->where("step_id", $row['step_id']);
                $this->db->update('step',$stepinsert);
                // var_dump($stepinsert);
            }
            foreach ( $data_datetime as $row){
                $dateins = array();
             //   $dateins['Cq_id']= $Cq_id;
                $dateins['Date_usedate '] = $row['Date_usedate '];
                
                foreach ( $data_datetime as $row){
                    // var_dump($row);
                    
                   
                    $dateins['Time_usedate']= $row['Time_usedate'];
                    $dateins['Time_lastuse']= $row['Time_lastuse'];
                    $dateins['amount_std']=$row['amount_std'];
                    $this->db->insert('qdatetime', $dateins);
                    $this->db->where("Datetime_id", $row['Datetime_id']);
                    $this->db->update('qdatetime', $dateins);
                    
                }
                // $this->db->insert('qdatetime', $dateins);
            }
          
            
           
        }
        public function cancelq($id)
        {
            $querycancelq =  $this->db->query('update queue SET statusq = 1 where Cq_id ='. $id);
          }
          
        public function openstatusq($id)
        {
            $queryopenstatusq =  $this->db->query('update queue SET statusq = 0 where Cq_id ='. $id);
           
        }
        
        public function get_q_all()
        {
            $query = $this->db->get('queue');
            return $query ;
        }
       
        
        public function get_q_print()
        {
            $query = $this->db->get('queue');
            return $query ;
        }
        public function selectmoveq($id){
            $queryselectmoveq =  $this->db->query('select * from queue where Cq_id ='. $id);
            return $queryselectmoveq;
        }
        
        public function selectmovedate($id){
            $queryselectmovedate =  $this->db->query('select * from qdatetime qd  JOIN queue q on qd.Cq_id = q.Cq_id
        where qd.Cq_id ='. $id);
            return $queryselectmovedate->result();
        }
        public function selectcountmovedate($id){
            $queryselectcountmovedate =  $this->db->query('select qd.Datetime_id, COUNT(qd.Date_usedate) as countqdate, qd.Date_usedate , qd.Cq_id 
            from qdatetime  qd JOIN queue q  on qd.Cq_id = q.Cq_id   where qd.Cq_id  ='. $id .' GROUP BY qd.Date_usedate ');
            return $queryselectcountmovedate->result();
        }
        public function changemoveq( $datadatetime){ //moveq
            
   
                
                foreach ($datadatetime as $row){
                    
                    $dateupdate= array();
                    $dateupdate['Date_usedate'] = $row['Date_usedate'];
                    $dateupdate['Time_usedate'] = $row['Time_usedate'];
                    $dateupdate['Time_lastuse'] = $row['Time_lastuse'];
                    $this->db->where("Datetime_id",$row['Datetime_id']);
                    $this->db->update ('qdatetime', $dateupdate);
                } 
          
        }
        
}

