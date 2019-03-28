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
        
        
 
}
