<?php
class Report_model extends CI_Model{
    
    public function student_report() {
        
        $this->db->select('Studentid, Studentname, Studentsurname, Facultyname ');
        $this->db->from('student, faculty');
        $this->db-join();
        $query = $this->db->query('select Studentid, Studentname, Studentsurname, Facultyname 
                                    from student, faculty
                                    where student.Studentid =  faculty.Facultyid');
           return $query->result();                          
     
    }
    
    
    
    
}