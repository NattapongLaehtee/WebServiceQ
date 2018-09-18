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
        $querydevice = $this->db->query('select Tool_name, Tool_detail,Tool_amount from Tool');
        
        return $querydevice->result();
        
    }
   
    
}