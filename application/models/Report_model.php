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

    
    public function selectstdq($id1, $id2){
        $queryselectstudent = $this->db->query('SELECT * FROM bookingqueue b JOIN student s on b.Studentid = s.Studentid
                                        JOIN qdatetime qd on b.Datetime_id = qd.Datetime_id
                                        JOIN faculty f on s.Facultyid = f.Facultyid
                                        JOIN program P on s.Programid = p.Programid
                                        JOIN queue q on b.Cq_id = q.Cq_id
                                        JOIN prefix pr on s.Prefixid = pr.Prefixid
                                       
                                         WHERE q.Cq_id = ' . $id1. 
                                       ' AND qd.Date_usedate ="  '.$id2 .'  "
                                       ORDER BY b.book_time
                              ');
        return   $queryselectstudent ->result();
    }
    public function qreport($id1){
        $queryqreport = $this->db->query('select * FROM queue q  where q.Cq_id ='. $id1  );
        return $queryqreport;
    } 
    public function qdreport($id2){
        $queryqdreport = $this->db->query('select * FROM  qdatetime qd JOIN queue q on qd.Cq_id = q.Cq_id
                                         where qd.Date_usedate =" ' . $id2 . ' " ' );
        return $queryqdreport;
    } 
 

}