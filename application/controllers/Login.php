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

        
        // if($u=="admin" && $p=="admin"){
        //     $this -> session -> set_userdata ( 'user_login' ,  true );
        //     $this -> session -> set_userdata ( 'user_autority' ,  1 );
        //     redirect("createq/indexad");
        // }
        // if($u=="na" && $p=="14"){
        //     $this -> session -> set_userdata ( 'user_login' ,  true );
        //     $this -> session -> set_userdata ( 'user_autority' ,  2 );
        //     redirect("createq/indexqm");
        // }
        $this->load->model('Login_model');
        $chk = $this->Login_model->checkLogin($username,$password);
        
        if($chk){
            if ($this -> session -> userdata ( 'userautority' )=="1"){
                redirect("Createq/indexqm");
            }else {
                redirect("Createq/indexad"); 
            }
        }else{
            redirect("Login/loginfrom");
        }

        
    }
    
    public function logout()
    {
        $this -> session -> set_userdata ( 'userlogin' ,  FALSE );

        $this->loginfrom();
        
    }
 

    
}
