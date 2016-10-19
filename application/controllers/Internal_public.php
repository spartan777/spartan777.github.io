<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class internal_public extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("alumno_model");
    }

    public function index() {
        $this->load->view('public/login');
    }
    
    public function registro_alumno(){
        $this->load->view('public/registrar_alumno');
    }

    public function registrar_alumno() {
        $datosUsuario = array(
            'no_control' => $this->input->post("numero_control"),
            'pass_usuario' => md5($this->input->post("password")),
            'tipo_usuario' => "Alumno"
        );
        $data = array(
            'nombre' => $this->input->post("nombre"),
            'apellido_paterno' => $this->input->post("apellidoPaterno"),
            'apellido_materno' => $this->input->post("apellidoMaterno"),
            'carrera' => $this->input->post("carrera"),
            'numero_control' => $this->input->post("numero_control"),
            'domicilio' => $this->input->post("domicilio"),
            'email' => $this->input->post("email"),
            'ciudad' => $this->input->post("ciudad_residente"),
            'telefono' => $this->input->post("telefono_residente"),
            'seguridad_social' => $this->input->post("seguridad_social"),
            'especifique' => $this->input->post("especifique"),
            'numero_social' => $this->input->post("numero_social")
        );
        
        $existUser = $this->login_model->check_user($data['numero_control']);
        
        if($existUser == 0){
            $this->login_model->insert_usuario($datosUsuario);
            $this->alumno_model->insert_alumno($data);
            redirect('internal_public');
        }else{
            $data['error'] = "El usuario ya esta registrado.";
            $this->load->view('public/registrar_alumno', $data);
        }
    }

    public function login() {
        $user = $this->input->post("user");
        $pass = $this->input->post("pass");
        $tipoUser = $this->input->post("tipoUser");

        $existUser = $this->login_model->check_user($user);
        if ($existUser != 0) {
            $result = $this->login_model->check_password($user, md5($pass), $tipoUser);
            if ($result) {
                $user_data = array(
                    'user_login' => $result->no_control,
                    'pass_login' => $result->pass_usuario,
                    'tipo_login' => $result->tipo_usuario,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($user_data);
                switch ($user_data['tipo_login']) {
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
            } else {
                $data['error'] = "Usuario o contraseña incorrecta.";
                $this->load->view('public/login', $data);
            }
        } else {
            $data['error'] = "El usuario no existe, contacte al administrador.";
            $this->load->view('public/login', $data);
        }
    }
    
    public function acceso_denegado(){
        $this->load->view('public/acceso_denegado');
    }

}
