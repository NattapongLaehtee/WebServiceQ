<?php 
class Queue_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}
        public function insertqueue($data_queue)
        {
        	echo "string";
            var_dump($data_queue);
            $this->db->set($data_queue);
            $this->db->insert('Queue');

            



        }

       

}
