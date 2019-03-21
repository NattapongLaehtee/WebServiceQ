<?php 
class Util_model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}
       
        public function convertDateToDB($str_date){
            $arr= explode('/',$str_date);
            $re_date = $arr[2].'-'.$arr[1].'-'.$arr[0];
            return $re_date;
        }
        
        public function convertTimeToDB($str_time){
            $arr = explode( ':', $str_time );
          //  var_dump($arr);
            return  $arr[0].":".$arr[1].":00";
        }
        
        public function convertDateToView($str_date){
            $arr= explode('-',$str_date);
            $re_date = $arr[2].'/'.$arr[1].'/'.$arr[0];
            return $re_date;
        }
        
        public function convertTimeToView($str_time){
            $arr = explode( ':', $str_time );
            //  var_dump($arr);
            return  $arr[0].":".$arr[1];
        }
        
       
       

}
