<?php
class Report_model extends CI_Model{
    
    public function student_report() {
        
      
        $query = $this->db->query('select Studentid, Studentname, Studentsurname, Facultyname 
                                    from student left join faculty
                                    on student.Studentid = faculty.Facultyid');
           return $query->result();                          
     
    }
    
    
    
    
}