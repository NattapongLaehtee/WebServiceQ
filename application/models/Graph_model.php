<?php

class Graph_model extends CI_Model {
    
    public function get_reservq()
    {
        $query = $this->db->query('select gr_sch, gr_value from grahp_demo where gr_type = 1 ORDER BY gr_sch ');
        return $query->result();
    }
    public function get_useq()
    {
        $query = $this->db->query('select gr_sch, gr_value from grahp_demo where gr_type = 2 ORDER BY gr_sch  ');
        return $query->result();
    }
}