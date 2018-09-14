<?php

class Login_model extends CI_Model {
    public function checkLogin($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('login'); 
		if ($query->num_rows() == 1) {
			$row = $query->row();
			if($row->username == $username && $row->password==$password){
				//set session
 				$this -> session -> set_userdata('userlogin',true);
 				$this -> session -> set_userdata('userid',$row->logid);
 				$this -> session -> set_userdata('username',$row->username);
 				$this -> session -> set_userdata('userautority',$row->autority);
 				$this -> session -> set_userdata('userofficeid',$row->officerid);
 				
 				$this->db->where('officerid', $row->officerid);
 				$query2 = $this->db->get('officer'); 
 				$row2 = $query2->row();
				$this -> session -> set_userdata('userfname',$row2->Officername);
 				$this -> session -> set_userdata('userlname',$row2->Officersurname);
 				$this -> session -> set_userdata('useremail',$row2->Officermail);
 				
 				
 				$this->db->where('prefixid', $row2->Prefixid);
 				$query3 = $this->db->get('prefix'); 
 				$row3 = $query3->row();
 				$this -> session -> set_userdata('userprefixname',$row3->Prefixname);
         		
             	
				return true;
			}else{
				 				$this -> session -> set_userdata('user_login',false);

				return false;
			}
		}else{
			 				$this -> session -> set_userdata('user_login',false);

			return false;
		}


		var_dump($query);
    }
    public function get_useq()
    {
        $query = $this->db->query('select gr_sch, gr_value from grahp_demo where gr_type = 2 ORDER BY gr_sch  ');
        return $query->result();
    }
}


