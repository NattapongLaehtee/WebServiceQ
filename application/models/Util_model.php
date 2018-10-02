<?php 
class Util_model extends CI_Model {

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
        public function convertDateToDB($str_date){
            $arr= explode('/',$str_date);
            $re_date = $arr[2].'-'.$arr[1].'-'.$arr[0];
            return $re_date;
        }
        
        public function convertTimeToDB($str_date){
            $arr= explode('/',$str_date);
            $re_date = $arr[2].'-'.$arr[1].'-'.$arr[0];
            return $re_date;
        }
        
       

}
