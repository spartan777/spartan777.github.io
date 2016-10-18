<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Internal_public extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
    }
    
    public function index(){
        $this->load->view('public/login');
    }
    
    public function login(){
        $user = $this->input->post("user");
        $pass = $this->input->post("pass");
        $tipoUser = $this->input->post("tipoUser");
        
        $existUser = $this->login_model->check_user($user);
        if($existUser != 0){
            $result = $this->login_model->check_password($user, md5($pass), $tipoUser);
            if ($result){
                $user_data = array(
                    'user_login' => $result->no_control,
                    'pass_login' => $result->pass_usuario,
                    'tipo_login' => $result->tipo_usuario,
                    'logueado'   => TRUE
                );
                $this->session->set_userdata($user_data);
                switch ($user_data['tipo_login']){
                    case "Admin":
                        redirect('internal_private');
                        break;
                    case "Jefe":
                        redirect('jefe_carrera');
                        break;
                    case "Alumno":
                        redirect('alumno');
                        break;
                }
            }else{
                $data['error'] = "Usuario o contraseña incorrecta.";
                $this->load->view('public/login',$data);
            }
        }else{
            $data['error'] = "El usuario no existe, contacte al administrador.";
            $this->load->view('public/login',$data);
        }
    }
}
