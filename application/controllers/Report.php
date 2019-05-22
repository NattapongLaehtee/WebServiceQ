<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    
  
    // construct
    public function __construct() {
        parent::__construct();
        $this->load->library('Pdf');
          }

	
	
	public function outstudent()
	{
	    $this->load->model('Report_model');
	    $res = $this->Report_model->outqueue();
	    
	    $dataq['queue_res'] = $res;
	    
	    $this->load->view('head');
	    $this->load->view('outstudent',$dataq);
	    $this->load->view('foot'); 
	}
	
	public function queuestudentshow($id)
	{
	    $this->load->model('Util_model');
	    $this->load->model('Report_model');
	    $res = $this->Report_model->outqueuestud($id);
	    $dataqstu['qstudent'] = $res;
	    $res = $this->Report_model->outqdatestud($id);
	    $dataqstu['qdatestudent'] = $res;
	    $this->load->view('head');
	    $this->load->view('report/QPrint',$dataqstu);
	    $this->load->view('foot');
	}
	

	
	public function student()
	{
	    $this->load->model('Student_model');
	    $res = $this->Student_model->get_student();
	    $data['student_res']  = $res;
	    
	    $this->load->view('head');
	    $this->load->view('student/student_list',$data );
	    $this->load->view('foot');
	}
	
	public function index1()
	{
	    $this->load->model('Graph_model');
	    $res = $this->Graph_model->get_reservq();
	    $data['reservq_res'] = $res;
	    
	    $this->load->model('Graph_model');
	    $res = $this->Graph_model->get_useq();
	    $data['useq_res'] = $res; 
	    
	    $this->load->view('head');
	    $this->load->view('chart1', $data);
	    $this->load->view('foot');
	    
	}
	
	
	
	public function callpdf($id) {
	   
	    $this->load->model('Report_model');
	    $res = $this->Report_model->selectstdq($id);
	    $data['stdqd_res'] = $res;
	   
	   

	    $this->load->view('report/file', $data);

	}
	public function reportpdf($id1, $id2)
	{
	    $this->load->model('Report_model');
	    $res = $this->Report_model->selectstdq($id1, $id2);
	    $data['stdqd_res'] = $res;
	    $res = $this->Report_model->qreport($id1);
	    $data['q_res'] = $res;
	    $res = $this->Report_model->qdreport($id2);
	    $data['qd_res'] = $res;
	    //load pdf library
	
	    // สร้าง object สำหรับใช้สร้าง pdf
	    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	    
	    // กำหนดรายละเอียดของ pdf
	    $pdf->SetCreator(PDF_CREATOR);
	    $pdf->SetAuthor('');

	    $pdf->SetTitle('');
	    $pdf->SetSubject('');
	    $pdf->SetKeywords('');
	    
	    

	    // กำหนดข้อมูลที่จะแสดงในส่วนของ header และ footer
	    $pdf->setPrintHeader(false);
	    $pdf->setPrintFooter();
	    
    // กำหนดรูปแบบของฟอนท์และขนาดฟอนท์ที่ใช้ใน header และ footer
	    
	    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	    
	    // กำหนดค่าเริ่มต้นของฟอนท์แบบ monospaced
	    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	    
	    // กำหนด margins
	    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	
	    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	    
	    // กำหนดการแบ่งหน้าอัตโนมัติ
	  
	    
	    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	    
	    // กำหนดรูปแบบการปรับขนาดของรูปภาพ
	    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	    
	    // ---------------------------------------------------------
	    
	    // set default font subsetting mode
	    $pdf->setFontSubsetting(true);
	    
	    // กำหนดฟอนท์
	    // ฟอนท์ freeserif รองรับภาษาไทย
	    $pdf->SetFont('thsarabun', '', 16, '', true);
	    
	    
	    
	    // เพิ่มหน้า pdf
	    // การกำหนดในส่วนนี้ สามารถปรับรูปแบบต่างๆ ได้ ดูวิธีใช้งานที่คู่มือของ tcpdf เพิ่มเติม
	    $pdf->AddPage('A4');
	    
	    // กำหนดเงาของข้อความ
	    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
	    
	    // กำหนดเนื้อหาข้อมูลที่จะสร้าง pdf ในที่นี้เราจะกำหนดเป็นแบบ html โปรดระวัง EOD; โค้ดสุดท้ายต้องชิดซ้ายไม่เว้นวรรค
	
	     
	    $html= $this->load->view('report/file',$data, true);
	    
	    // สร้างข้อเนื้อหา pdf ด้วยคำสั่ง writeHTMLCell()
	    $pdf->writeHTML($html);
	    
	    // ---------------------------------------------------------
	    
	    // จบการทำงานและแสดงไฟล์ pdf
	    ob_start();
	    ob_end_flush();
	    ob_end_clean();
	    // การกำหนดในส่วนนี้ สามารถปรับรูปแบบต่างๆ ได้ เช่นให้บันทึกเป้นไฟล์ หรือให้แสดง pdf เลย ดูวิธีใช้งานที่คู่มือของ tcpdf เพิ่มเติม
	    $pdf->Output('example_001.pdf', 'I');
	    
	}
	
	
	  
	    
	 

}



