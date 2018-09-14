 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_Database extends CI_Controller {

 public function Insert()
    {
    	$this->load->model(Queue_Model);
    	
    	
    	$data_queue = array(
    		'Cq_name' => $qname//,
		);
    	
      
        

        $data_dateandtime = array(
        	'Date_usedate' => $startuse,
        	'Date_lastuse' => $enduse,
        	'Date_reserdate' => $stratreserv, 
        	'Date_lastreser' => $endreserv//,
        	//'Time_usedate' => $, 
        	//'Time_lastuse' => $, 
        	//'Time_reserdate' => $, 
        	//'Time_lastreser' => $
        );
    }