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
            //$this->db->set($data_queue);
            $this->db->insert('Queue',$data_queue);
            //$Cq_id = $this->db->insert();
            
            $data_step['Cq_id']= $this->db->insert_id();
           // $this->db->set($data_step);
            $this->db->insert('step',$data_step);
            
            $data_datetime['Cq_id']= $this->db->insert_id();
           // $this->db->set( $data_datetime);
            $this->db->insert('dateandtime', $data_datetime);
            
            redirect('Createq/content3');
        }
        
        public function outqueue(){
            $queryqueue = $this->db->query('select * from queue');
            return $queryqueue->result();
            
        }
        public function outqueue_by_id($id){
            $this->db->select('queue.Cq_id, Cq_name, Cq_usedate, Cq_lastuse , Cq_reserdate , Cq_lastreser, Officerid, Time_usedate,Time_lastuse, Step_detail, Step_alm');
            $this->db->from('queue');
            $this->db->join('dateandtime','queue.Cq_id = dateandtime.Cq_id ');
            $this->db->join('step', 'queue.Cq_id = step.Cq_id ');
            $query = $this->db->get();
            $row = $query->row();
            return $row;
        }
        function deletequeue($id)
        {
            $this->db->delete('queue', array('Cq_id' => $id));
            
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
