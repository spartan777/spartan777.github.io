<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends CI_Model {
    public function insert_alumno($data){
        $this->db->insert('alumnos', $data);
    }
    
    public function buscar_id_alumno($no_control){
        $this->db->where('numero_control', $no_control);
        $query = $this->db->get('alumnos');
        return $query;
    }
    
    public function filtros_busqueda_alumno($no_control, $carrera){
        $query = $this->db->query("SELECT a.numero_control, a.nombre, a.apellido_paterno, a.apellido_materno, a.carrera, p.nombre_proyecto FROM alumnos a, proyecto p WHERE a.numero_control = '$no_control' AND a.carrera = '$carrera' ");
        return $query;
    }
}
