<?php 
class Queue_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}
		public function insertqueue($data_queue,$data_step,$data_datetime)
        {
        	//echo "string";
            //var_dump($data_queue);
            //$this->db->set($data_queue);
            $this->db->insert('Queue',$data_queue );
            //$Cq_id = $this->db->insert();
            
            $data_step['Cq_id']= $this->db->insert_id();;
           // $this->db->set($data_step);
            $this->db->insert('step',$data_step );
            
            $data_datetime['Cq_id']= $this->db->insert_id();
           // $this->db->set( $data_datetime);
            $this->db->insert('dateandtime', $data_datetime);
            
            redirect('Createq/content2');
        }
        
        public function outqueue(){
            $queryqueue = $this->db->query('select * from queue');
            return $queryqueue->result();
            
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
