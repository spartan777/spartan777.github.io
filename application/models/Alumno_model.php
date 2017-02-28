<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alumno_model extends CI_Model {

    public function insert_alumno($data) {
        $this->db->insert('alumnos', $data);
    }

    public function insert_datos_empresa($data) {
        $this->db->insert('empresa', $data);
    }

    public function insert_datos_proyecto($data) {
        $this->db->insert('proyecto', $data);
    }

    public function buscar_id_alumno($no_control) {
        $this->db->where('numero_control', $no_control);
        $query = $this->db->get('alumnos');
        return $query;
    }
    
    public function get_all_alumno(){
        $query = $this->db->query("SELECT a.numero_control, a.nombre, a.apellido_paterno, a.apellido_materno, a.email, a.sexo, p.nombre_proyecto, e.nombre_empresa, e.giro_ramo_sector "
                . "FROM alumnos a, proyecto p, empresa e "
                . "WHERE p.no_control = a.numero_control AND e.no_control = a.numero_control");
        return $query;
    }
    
    public function descargar_reporte($carrera) {
        $varQuery = "";
        
        if((!is_null($carrera) and !empty($carrera))){
            $varQuery  = $varQuery." AND a.carrera = '$carrera'";
        }
        $query = $this->db->query("SELECT a.numero_control, a.nombre, a.apellido_paterno, a.apellido_materno, a.email, a.sexo, p.nombre_proyecto, e.nombre_empresa, e.giro_ramo_sector "
                . "FROM alumnos a, proyecto p, empresa e "
                . "WHERE p.no_control = a.numero_control AND e.no_control = a.numero_control ".$varQuery);
        
        if($query->num_rows > 0){
            return $query;
        }else{
            return FALSE;
        }
    }

    public function check_proyecto($numero_control) {
        $this->db->where('no_control', $numero_control);
        $query = $this->db->get('proyecto');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function check_empresa($numero_control) {
        $this->db->where('no_control', $numero_control);
        $query = $this->db->get('empresa');
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }
    
    public function filtros_busqueda_alumno($no_control, $carrera) {
        $varQuery = "";
        
        if((!is_null($no_control) and !empty($no_control) and !trim($no_control) == "") ){
            $varQuery  = $varQuery." AND a.numero_control LIKE '%$no_control%'";
        }
        if((!is_null($carrera) and !empty($carrera))){
            $varQuery  = $varQuery." AND a.carrera = '$carrera'";
        }
        $query = $this->db->query("SELECT a.numero_control, a.nombre, a.apellido_paterno, a.apellido_materno, a.carrera, p.nombre_proyecto FROM alumnos a, proyecto p WHERE p.no_control = a.numero_control ".$varQuery);
        
        if($query->num_rows > 0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    public function buscar_dictamen($numero_control){
        $query = $this->db->query("SELECT dic.nombre_archivo, dic.hora_fecha FROM dictamen dic, alumnos al, jefe_carrera jc WHERE al.carrera = jc.carrera AND jc.clave_acceso = dic.clave_acceso AND al.numero_control = '$numero_control'");
        return $query;
    }

}
