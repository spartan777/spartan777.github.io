<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function check_user($user){
        $this->db->where('no_control', $user);
        $query = $this->db->get('usuarios');
        return $query->num_rows();
    }
    
    public function check_password($user, $pass, $type){
        $this->db->where('no_control', $user);
        $this->db->where('pass_usuario', $pass);
        $this->db->where('tipo_usuario', $type);
        $query = $this->db->get('usuarios');
        return $query->row();
    }
    
    public function insert_usuario($data){
        $this->db->insert('usuarios', $data);
    }
    
    public function delete_jefe_carrera($clave_acceso){
        $this->db->where('no_control', $clave_acceso);
        $this->db->delete('usuarios');
    }
    
    public function update_pass_jefe_carrera($clave_acceso, $data){
        $this->db->where('no_control',$clave_acceso);
    	$this->db->update('usuarios',$data);
    }
}
