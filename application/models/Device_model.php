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
        $querydevice = $this->db->query('select * from Tool');
        return $querydevice->result();
        
    }
    
    public function outdevice_by_id($id){
        //$querydevice = $this->db->query("select * from Tool where Tool_id ='".$id."' ");
        $query = $this->db->get_where('Tool', array('Tool_id' => $id));
        $row = $query->row();
        return $row;
        
        
        
        
    }
   
    public function updatedevice($data_updevice,$id)
    {
        //echo "string";
        
        $this->db->where('Tool_id', $id);
        $this->db->update('Tool', $data_updevice);
        
    }
    function deletedevice($id)
    {
        $this->db->delete('tool', array('Tool_id' => $id));
        
    }
   
    
}