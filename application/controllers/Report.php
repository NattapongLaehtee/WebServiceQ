<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    
  
    // construct
    public function __construct() {
        parent::__construct();
        // load model
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
	
	public function callpdf(){
	    $this->load->library('Pdf');
	    
	
        $this->load->view('report/file');
	}
	
	public function index() {
	    $data['page'] = 'export-pdf';
	    $data['title'] = 'Export PDF data | Web Preparations';
	    $data['mobiledata'] = $this->pdf->mobileList();
	    // load view file for output
	    $this->load->view('header');
	    $this->load->view('report/file', $data);
	    $this->load->view('footer');
	}
	
	// for generate pdf
	public function save_pdf()
	{
	    //load mPDF library
	    $this->load->library('m_pdf');
	    //now pass the data//
	    $data['mobiledata'] = $this->pdf->mobileList();
	    $html=$this->load->view('pdf/pdf',$data, true); //load the pdf.php by passing our data and get all data in $html varriable.
	    $pdfFilePath ="webpreparations-".time().".pdf";
	    //actually, you can pass mPDF parameter on this load() function
	    $pdf = $this->m_pdf->load();
	    //generate the PDF!
	    $stylesheet = '<style>'.file_get_contents('assets/css/bootstrap.min.css').'</style>';
	    // apply external css
	    $pdf->WriteHTML($stylesheet,1);
	    $pdf->WriteHTML($html,2);
	    //offer it to user via browser download! (The PDF won't be saved on your server HDD)
	    $pdf->Output($pdfFilePath, "D");
	    exit;
	}
}
