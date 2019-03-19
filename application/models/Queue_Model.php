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
           // $this->db->insert('queue',$data_queue);
            //$Cq_id = $this->db->insert();
            //var_dump($data_step);
            $rec = 0;
            foreach ($data_step as $Step_detail['Step_detail']){
               // var_dump($Step_detail);
                echo $Step_detail['Step_detail'][$rec];
                $rec++;
            }
            /*
            $this->db->insert('step',$data_step);
            
            $data_datetime['Cq_id']= $this->db->insert_id();
           // $this->db->set( $data_datetime);
            $this->db->insert('qdatetime', $data_datetime);
            
            redirect('Createq/content3');*/
        }
        
        public function outqueue(){
            $queryqueue = $this->db->query('select * from queue');
            return $queryqueue->result();
            
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
           
            
            
            $this->db->update('queue');
            $this->db->set('queue.Cq_id', 'queue.Cq_name'->$qname, 'queue.Cq_usedate' -> $startuse, 
                            'queue.Cq_lastuse'-> $enduse , 'queue.Cq_reserdate' -> $startreserv ,
                            'queue.Cq_lastreser' -> $endreserv , 'queue.Officerid'); 
            $this->db->update('queue');
            $this->db->set('qdatetime.Time_usedate' -> $strattime, 'qdatetime.Time_lastuse' -> $endtime,
                            'qdatetime.amount_std' -> $amount_std );
            $this->db->update('queue');
            $this->db->set('step.Step_detail' -> $stepname, 'step.Step_alm'-> $amounttime);
            
             $this->db->join ('queue ON queue.Cq_id = qdatetime.Cq_id');
            $this->db->join ('step ON queue.Cq_id = step.Cq_id');
            $query = $this->db->get();
            
            
            
            
            
            $this->db->update('queue',$data_queue);
            //$Cq_id = $this->db->insert();
            
            $data_step['Cq_id']= $this->db->update_id();
            // $this->db->set($data_step);
            $this->db->update('step',$data_step);
            
            $data_datetime['Cq_id']= $this->db->update_id();
            // $this->db->set( $data_datetime);
            $this->db->update('qdatetime', $data_datetime);
            
            redirect('Createq/content3');
        }
       /* public function deletequeue($id)
        {
            $this->db->delete('queue', array('Cq_id' => $id));
            
        }*/
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
