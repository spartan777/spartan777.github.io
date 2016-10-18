<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class internal_private extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("jefe_carrera_model");
        $this->load->model("alumno_model");
    }
    
    public function index(){
        $data = array(
            'content' => "private/admin/index_tmp",
            'title'   => "ITSCO | Admin sistema residencias.",
            'barraTitulo' => "Bienvenido a la zona admin",
            'nav'     => "navHome"
        );
        $this->load->view("private/admin/index",$data);
    }
    
    public function jefes_carrera(){
        $data = array(
            'content' => "private/admin/jefe_carrera_tmp",
            'title'   => "Sistema residencias | Jefes de Carrera.",
            'barraTitulo' => "Jefes de Carrera",
            'nav'     => "navJefe"
        );
        $this->load->view("private/admin/index",$data);
    }
    
    public function add_jefe_carrera(){
        $data = array(
            'content' => "private/admin/add_jefe_carrera_tmp",
            'title'   => "Sistema residencias | Agregar Jefes de Carrera.",
            'barraTitulo' => "Agregar Jefe de Carrera",
            'nav'     => "navJefe"
        );
        $this->load->view("private/admin/index",$data);
    }
    
    public function registrar_jefe_carrera(){
        $datosUsuario = array(
            'no_control' => $this->input->post("numero_control"),
            'pass_usuario' => md5($this->input->post("password")),
            'tipo_usuario' => "Jefe"
        );
        $data = array(
            'nombre' => $this->input->post("nombre"),
            'apellido_paterno' => $this->input->post("apellidoPaterno"),
            'apellido_materno' => $this->input->post("apellidoMaterno"),
            'carrera' => $this->input->post("carrera"),
            'clave_acceso' => $this->input->post("numero_control"),
            'email' => $this->input->post("email"),
            'telefono' => $this->input->post("telefono_residente")
        );
        
        $existUser = $this->login_model->check_user($data['numero_control']);
        if($existUser == 0){
            $this->login_model->insert_usuario($datosUsuario);
            $this->jefe_carrera_model->insert_jefe_carrera($data);
            redirect('internal_private/jefes_carrera');
        }else{
            $data['error'] = "El usuario ya esta registrado.";
            $this->load->view('internal_private/add_jefe_carrera', $data);
        }
    }
}
