<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index()
    {
        $user_login  =  $this -> session -> userdata ( 'user_login' );
        
        if($user_login==null){
            //echo "xxxxx";
            $this->loginfrom();
            
        }else {
            echo "yyyy";
        }
       
    }
    public function loginfrom()
    {
        $this->load->view('login');
        
    }
    
    public function checklogin()
    {
        $username = $this -> input -> post ( 'username' );
        $password =$this -> input -> post ( 'password' );

        $this->load->model('Login_model');
        $chk = $this->Login_model->checkLogin($username,$password);
        
        if($chk){
            if ($this -> session -> userdata ( 'userautority' )=="1"){
                redirect("Createq/indexqm");
            }else {
                redirect("Createq/indexad"); 
            }
        }else{
            //$this->form_validation->set_message('checklogin', '<div class="alert alert-danger text-center">Invalid username or password!</div>');
            redirect("Login/loginfrom");
        }

        
    }
    
    public function logout()
    {
        $this -> session -> set_userdata ( 'userlogin' ,  FALSE );

        $this->loginfrom();
        
    }
 

    
}
