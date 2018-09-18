<?php
class Device_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    public function insertdevice($data_queue)
    {
        //echo "string";
        
        $this->db->set($data_queue);
        $this->db->insert('Tool');
          
    }
    public function outdevice(){
        $query = $this->db->query('select * from Tool');
        return $query->result();
        
    }
    
}