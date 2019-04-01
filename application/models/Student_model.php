<?php 
class Student_model extends CI_Model {
 
    
    public function __construct()
    {
        parent::__construct();
    }
      

        public function outstudent()
        {
            
            $querystudent = $this->db->query('select s.Studentid, s.Studentname, s.Studentsurname, f.Facultyname , p.Programname
                                    from student s ,faculty f , program p
                                    where   s.Facultyid = f.Facultyid and   s.Programid = p.Programid');
            return $querystudent->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
        public function outqstudent(){
            
            $queryoutqstudent = $this->db->query('select * from queue');
            return  $queryoutqstudent->result();
        }
        public function outqfacstudent(){
            
           $queryoutqfacstudent = $this->db->query('select * from faculty');
            return  $queryoutqfacstudent->result();
        }
        
        public function selectstudent($id1,$id2){
            $queryselectstudent = $this->db->query('select * from bookingqueue b JOIN student s on b.Studentid = s.Studentid 
                                JOIN qdatetime qd on b.Datetime_id = qd.Datetime_id 
                                JOIN faculty f on s.Facultyid = f.Facultyid 
                                JOIN program P on s.Programid = p.Programid 
                                JOIN queue q on b.Cq_id = q.Cq_id 
                                JOIN prefix pr on s.Prefixid = pr.Prefixid
                                WHERE q.Cq_id = ' .$id1 .'
                                AND f.Facultyid = '. $id2);
            return   $queryselectstudent ->result();
            
        }
        
        
        
        
        
 
}
