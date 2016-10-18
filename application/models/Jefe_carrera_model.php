<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jefe_carrera_model
 *
 * @author javier.castro
 */
class Jefe_carrera_model extends CI_Model {
    public function insert_jefe_carrera(){
        $this->db->insert('jefe_carrera', $data);
    }
}
