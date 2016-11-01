<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jefe_carrera extends CI_Controller{
    public function __construct() {
        parent::__construct();
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
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000000';
        $config['max_width'] = '10024';
        $config['max_height'] = '10008';
        //Asignar el nombre
        $config['file_name'] = 'prueba';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors());
            //echo@$error['error'];


        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN


            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            //$this->_create_thumbnail($file_info['file_name']);
            $data = array('upload_data' => $this->upload->data());
            $titulo = $this->session->userdata('id');
            $imagen = $file_info['file_name'];
            $subir = $this->systemusermodel->subir_imagen($titulo,$imagen);
            //$data['titulo'] = $titulo;
            $data['imagen'] = $imagen;
            redirect('cuenta');

            //$this->load->view('upload_view', $data);
        }
    }
}
