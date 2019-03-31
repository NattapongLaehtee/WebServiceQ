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
        $querydevice = $this->db->query('select * from Tool where Tool_status = 0');
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
    public function canceldevice($id)
    {
        $querycanceldevice =  $this->db->query('update Tool SET Tool_status  = 1 where Tool_id ='. $id);
        
        redirect('Devices_control/out_device');
        
    }
  
    public  function selectstatdevice() 
    {
        
        $querydevice = $this->db->query('select * from Tool where Tool_status = 1' );
        
        return $querydevice->result();
    }
    public function opendevice($id)
    {
        $querycanceldevice =  $this->db->query('update Tool SET Tool_status  = 0 where Tool_id ='. $id);
        
        redirect('Devices_control/out_device');
        
    }
     public function outqdevice($id){
         $queryoutqdevice=  $this->db->query('select * from queue where Cq_id = '. $id);
         return    $queryoutqdevice;
    }
   
    public function outsetdevice($id){
        $querysetdevice =    $this->db->query('select s.Step_id, SUM(s.Step_box), q.Cq_id from queue q  JOIN step s on q.Cq_id = s.Cq_id   where s.Cq_id  group by s.Cq_id');
        return   $querysetdevice->result();
    }
    public function outqsetdevice(){
       $querysetdevice =    $this->db->query(' select q.Cq_name ,s.Step_id, SUM(s.Step_box) as sumbox, q.Cq_id from queue q JOIN step s on q.Cq_id = s.Cq_id where s.Cq_id  GROUP BY s.Cq_id '); 
       return  $querysetdevice->result();
    }
    
    
   
    
}