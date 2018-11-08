<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
/**
 *
 */
class EmailController extends REST_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('emailmodelo');
    }

    public function index_get(){
        $email = $this->get('email');
        
        $respuesta = $this->emailmodelo->getPass($email);
/*
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_port' => 587,
        'smtp_user' => 'cerdomora3@gmail.com',
        'smtp_pass' => 'cinescape',
        'charset' => 'utf-8',
        'wordwrap' => true,
        'priority' => 1
        );

        $this->email->initialize($config);*/
        $this->email->from('cerdomora3@gmail.com', 'Your Name');
        $this->email->to('jonathanperalta1893@gmail.com');
        
        $this->email->subject('Email Test');
        $this->email->message($email);
        //var_dump($this->email->send());
        if($this->email->send())
            echo "adas";
        else
            echo "123456";

        $this->response(array("wea"=>$email));
    }


}


 ?>
