<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Emailmodelo extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }

    public function getPass($email){
        
        $query = $this->db->query("select u.pass from usuario u,administrativo a,usuario_perfil up
            where a.email = ".$email." and a.id_usuario = up.id_usuario and up.id_usuario = u.id_usuario and (up.id_perfil = 1 or up.id_perfil = 2)
            and up.estado_up=true;");
       
        //print_r($query);

        $data = $query->result_array();
        
        //echo count($data);

        return $data;
    }
}
