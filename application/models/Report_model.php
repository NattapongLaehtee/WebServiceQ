<?php
class Report_model extends CI_Model{
    
    public function student_report() {
        
      
        $query = $this->db->query('select Studentid, Studentname, Studentsurname, Facultyname 
                                    from student left join faculty
                                    on student.Studentid = faculty.Facultyid');
           return $query->result();                          
     
    }
    public function outqueue(){
        $queryqueue = $this->db->query('select * from queue q JOIN officer of on q.officerid = of.officerid
        where q.officerid = '.$this -> session -> userdata ( 'userofficeid' ));
        return $queryqueue->result();
        
        
    }
    public function outqueuestud($id){
        $queryselectqueue =  $this->db->query('select * from queue where Cq_id ='. $id);
        return $queryselectqueue;
           
    }
    
    public function outqdatestud($id){
        $queryqdatestud = $this->db->query('select * from qdatetime  qd JOIN queue q  on qd.Cq_id = q.Cq_id  
                         where qd.Cq_id  ='. $id.' GROUP BY qd.Date_usedate ' );
        return  $queryqdatestud->result();
    } 
    
    
}