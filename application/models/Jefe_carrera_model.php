<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jefe_carrera_model extends CI_Model {
    public function get_all_jefes(){
        $query = $this->db->get('jefe_carrera');
        return $query;
    }
    
    public function insert_jefe_carrera($data){
        $this->db->insert('jefe_carrera', $data);
    }
    
    public function buscar_id($clave_acceso){
        $this->db->where('clave_acceso', $clave_acceso);
        $query = $this->db->get('jefe_carrera');
        return $query;
    }
    
    public function update_jefe_carrera($clave_acceso, $data){
        $this->db->where('clave_acceso',$clave_acceso);
    	$this->db->update('jefe_carrera',$data);
    }
    
    public function delete_jefe_carrera($clave_acceso){
        $this->db->where('clave_acceso',$clave_acceso);   
        $this->db->delete('jefe_carrera');
    }
    
    public function buscar_nombre_jefe($carrera){
        $this->db->where('carrera', $carrera);
        $query = $this->db->get('jefe_carrera');
        return $query;
    }
    
    public function registrar_dictamen($data){
        $this->db->insert('dictamen', $data);
    }
    
    public function buscar_id_dictamen($clave_acceso){
        $this->db->where('clave_acceso', $clave_acceso);
        $query = $this->db->get('dictamen');
        return $query;
    }
}
