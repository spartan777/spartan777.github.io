<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jefe_carrera extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('jefe_carrera_model');
    }
    
    public function index(){
        $data = array(
            'content' => "private/jefe/home_jefe",
            'title' => "ITSCO | Jefe de carrera sistema residencias.",
            'barraTitulo' => "Bienvenido a la zona jefe de carrera",
            'nav' => "navHome"
        );
        $this->load->view("private/jefe/index", $data);
    }
    
    public function subir_dictamen(){
        $data = array(
            'content' => "private/jefe/upload_file",
            'title' => "Sistema residencias | Dictamen.",
            'barraTitulo' => "Subir dictamen.",
            'nav' => "navDictamen",
        );
        $this->load->view("private/jefe/index", $data);
    }
    
    public function do_upload()
    {
        $clave_acceso = $this->session->userdata('user_login');
        $resultados = $this->jefe_carrera_model->buscar_id($clave_acceso);
        foreach ($resultados->result() as $row){
            $carrera = $row->carrera;
        }
        $config['upload_path'] = './uploads/'.$carrera.'/';
        $config['allowed_types'] = 'doc|docx|xls|xlsx';
        $config['max_size'] = '10000000';
        $config['file_name'] = 'Dictamen_'.$carrera;

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors());
            echo@$error['error'];
        } else {
            $file_info = $this->upload->data();
          
            $data = array('upload_data' => $this->upload->data());
            $datos = array(
                'clave_acceso' => $clave_acceso,
                'nombre_archivo' => $file_info['file_name']
            );
         
            $this->jefe_carrera_model->registrar_dictamen($datos);
    
            redirect('cuenta');

            //$this->load->view('upload_view', $data);
        }
    }
    
    public function consultar_dictamen(){
        $clave_acceso = $this->session->userdata('user_login');
        $resultados = $this->jefe_carrera_model->buscar_id_dictamen($clave_acceso);
        $data = array(
            'content' => "private/jefe/dictamen_consulta",
            'title' => "Sistema residencias | Consulta Dictamen.",
            'barraTitulo' => "Consultar dictamen.",
            'nav' => "navConsulDictamen",
            'resultados' => $resultados
        );
        $this->load->view("private/jefe/index", $data);
    }
    
    public function descargar_dictamen(){
        $nombre_archivo = $this->uri->segment(3);
        $clave_acceso = $this->session->userdata('user_login');
        $resultados = $this->jefe_carrera_model->buscar_id($clave_acceso);
        foreach ($resultados->result() as $row){
            $carrera = $row->carrera;
        }
        $this->load->helper('download');
        $data = file_get_contents(base_url().'uploads/sistemas/'.$nombre_archivo);
         force_download($nombre_archivo, $data);
    }
}
