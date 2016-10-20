<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alumno extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("alumno_model");
    }
    
    public function index(){
        $data = array(
            'content' => "private/alumno/home_alumno",
            'title' => "ITSCO | Alumno sistema residencias.",
            'barraTitulo' => "Bienvenido a la zona alumno",
            'nav' => "navHome"
        );
        $this->load->view("private/alumno/index", $data);
    }
    
    public function solicitud_residencia(){
        $numero_control = $this->session->userdata('user_login');

        $data = array(
            'content' => "private/alumno/datos_alumno",
            'title' => "Sistema residencias | Solicitud de residencia.",
            'barraTitulo' => "Solicitud de Residencias | Datos del residente.",
            'nav' => "navSolicitud",
            'resultados' => $this->alumno_model->buscar_id_alumno($numero_control)
        );
        $this->load->view("private/alumno/index", $data);
    }
    
    public function datos_empresa(){
        $data = array(
            'content' => "private/alumno/datos_empresa",
            'title' => "Sistema residencias | Solicitud de residencia.",
            'barraTitulo' => "Solicitud de Residencias | Datos de la empresa.",
            'nav' => "navSolicitud"
        );
        $this->load->view("private/alumno/index", $data);
    }
}
