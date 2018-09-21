<?php
class Device_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    public function insertdevice($data_device)
    {
        //echo "string";
        
        $this->db->set($data_device);
        $this->db->insert('Tool');
          
    }
    public function outdevice(){
        $querydevice = $this->db->query('select Tool_name, Tool_detail,Tool_amount from Tool');
        
        return $querydevice->result();
        
    }
    public function deletedevice(){
        $deldevice = $this->db->delete('tool', array('Tool_id' => $id));
        
        return $deldevice->result();
        
    }
    public function updatedevice($data_updevice)
    {
        //echo "string";
        
        $this->db->where('Tool_id', $id);
        $this->db->update('Tool', $data_updevice);
        
    }
    
   
    
}