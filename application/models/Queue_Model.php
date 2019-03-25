<?php 
class Queue_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}
		public function insertqueue($data_queue,$data_step,$data_datetime)
        {
        	//echo "string";
           // var_dump($data_datetime);
           // die();
          // $this->db->set($data_queue);
          $this->db->insert('queue',$data_queue);
           $Cq_id = $this->db->insert_id();
            //($data_step);
           // echo ("<br/>xxxxxxx<br/>");
             foreach ($data_step as $row){
               
               //  var_dump($step);
                 $stepinsert = array();
                 
                 $stepinsert['Cq_id']=$Cq_id;
                 $stepinsert['step_detail']= $row['step_detail'];
                 $stepinsert['step_alm']= $row['step_alm'];
                 // $this->db->set($data_step);
                $this->db->insert('step',$stepinsert);
                // var_dump($stepinsert);
                 }
              foreach ( $data_datetime as $row){
                 // var_dump($row);
                  
                  $datetimeins = array();
                  $datetimeins['Cq_id']=$Cq_id;
                  $datetimeins['Time_usedate']= $row['Time_usedate'];
                  $datetimeins['Time_lastuse']= $row['Time_lastuse'];
                  $datetimeins['amount_std']=$row['amount_std'];
                  $this->db->insert('qdatetime', $datetimeins);
                  
                }
                  //   $data_datetime['Cq_id']= $this->db->insert_id();
                     //$this->db->set($data_datetime);
                    // $this->db->insert('qdatetime', $data_datetime);
           
            
        
            redirect('Createq/content3');
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
        public function updateq($data_queue,$data_step,$data_datetime){
           
            // $this->db->set($data_queue);
            $this->db->replace('queue',$data_queue);
            $Cq_id = $this->db->insert_id();
           var_dump($data_queue);
            // echo ("<br/>xxxxxxx<br/>");
            foreach ($data_step as $row){
                
                // var_dump($step);
                $stepreplace = array();
                
                $stepreplace['Cq_id']= $Cq_id;
              //  $stepreplace['step_id']= $row['step_id'];
                $stepreplace['step_detail']= $row['step_detail'];
                $stepreplace['step_alm']= $row['step_alm'];
                // $this->db->set($data_step);
                $this->db->replace('step',$stepreplace);
                var_dump($stepreplace);
            }
            foreach ( $data_datetime as $row){
                 //var_dump($row);
                
                $datetimerep = array();
                $datetimerep['Cq_id']= $Cq_id;
               // $datetimerep['Datetime_id']= $row['Datetime_id'];
                $datetimerep['Time_usedate']= $row['Time_usedate'];
                $datetimerep['Time_lastuse']= $row['Time_lastuse'];
                $datetimerep['amount_std']=$row['amount_std'];
                $this->db->replace('qdatetime',  $datetimerep);
                
            }
            var_dump( $datetimerep);
            //   $data_datetime['Cq_id']= $this->db->insert_id();
            //$this->db->set($data_datetime);
            // $this->db->insert('qdatetime', $data_datetime);
            
            
            
            redirect('Createq/content3');
        }
        public function cancelq($id)
        {
            $querycancelq =  $this->db->query('update queue SET statusq = 1 where Cq_id ='. $id);
           
           
           
          
            
            redirect('Createq/openq');
        }
        public function openstatusq($id)
        {
            $queryopenstatusq =  $this->db->query('update queue SET statusq = 0 where Cq_id ='. $id);
           
            
            
            
            redirect('Createq/content3');
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
    
}
