<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends CI_Model {
    public function insert_alumno($data){
        $this->db->insert('alumnos', $data);
    }
}
