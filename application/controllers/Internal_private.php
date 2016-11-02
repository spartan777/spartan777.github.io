<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class internal_private extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("jefe_carrera_model");
        $this->load->model("alumno_model");
    }

    public function index() {
        $data = array(
            'content' => "private/admin/index_tmp",
            'title' => "ITSCO | Admin sistema residencias.",
            'barraTitulo' => "Bienvenido a la zona admin",
            'nav' => "navHome"
        );
        $this->load->view("private/admin/index", $data);
    }

    public function jefes_carrera() {
        $data = array(
            'content' => "private/admin/jefe_carrera_tmp",
            'title' => "Sistema residencias | Jefes de Carrera.",
            'barraTitulo' => "Jefes de Carrera",
            'nav' => "navJefe",
            'registros' => $this->jefe_carrera_model->get_all_jefes()
        );
        $this->load->view("private/admin/index", $data);
    }

    public function add_jefe_carrera() {
        $data = array(
            'content' => "private/admin/add_jefe_carrera_tmp",
            'title' => "Sistema residencias | Agregar Jefes de Carrera.",
            'barraTitulo' => "Agregar Jefe de Carrera",
            'nav' => "navJefe"
        );
        $this->load->view("private/admin/index", $data);
    }

    public function registrar_jefe_carrera() {
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
            'telefono' => $this->input->post("telefono_residente"),
            'content' => "private/admin/add_jefe_carrera_tmp",
            'title' => "Sistema residencias | Agregar Jefes de Carrera.",
            'barraTitulo' => "Agregar Jefe de Carrera",
            'nav' => "navJefe"
        );

        $existUser = $this->login_model->check_user($data['clave_acceso']);
        $existCarrera = $this->jefe_carrera_model->check_carrera($data['carrera']);
        if ($existUser == 0) {
            if($existCarrera == 0){
                $this->login_model->insert_usuario($datosUsuario);
                $this->jefe_carrera_model->insert_jefe_carrera($data);
                redirect('internal_private/jefes_carrera');
            }else{
                $data['error'] = "La carrera ya tiene un Jefe de Carrera registrado.";
                $this->load->view("private/admin/index", $data);
            }
        } else {
            $data['error'] = "El usuario ya esta registrado.";
            $this->load->view("private/admin/index", $data);
        }
    }

    public function editar_jefe_carrera() {
        $clave_acceso = $this->uri->segment(3);
        $resultados = $this->jefe_carrera_model->buscar_id($clave_acceso);
        foreach ($resultados->result() as $fila) {
            $nombre = $fila->nombre;
            $apellido_paterno = $fila->apellido_paterno;
            $apellido_materno = $fila->apellido_materno;
            $carrera = $fila->carrera;
            $clave_acceso = $fila->clave_acceso;
            $email = $fila->email;
            $telefono = $fila->telefono;
        }
        $data = array(
            'content' => "private/admin/edit_jefe_carrera_tmp",
            'title' => "Sistema residencias | Editar Jefes de Carrera.",
            'barraTitulo' => "Editar Jefe de Carrera",
            'nav' => "navJefe",
            'nombre' => $nombre,
            'apellido_paterno' => $apellido_paterno,
            'apellido_materno' => $apellido_materno,
            'carrera' => $carrera,
            'clave_acceso' => $clave_acceso,
            'email' => $email,
            'telefono' => $telefono
        );
        $this->load->view("private/admin/index", $data);
    }

    public function edit_jefe_carrera() {
        $clave_acceso = $this->uri->segment(3);
        $data = array(
            'nombre' => $this->input->post("nombre"),
            'apellido_paterno' => $this->input->post("apellidoPaterno"),
            'apellido_materno' => $this->input->post("apellidoMaterno"),
            'carrera' => $this->input->post("carrera"),
            'email' => $this->input->post("email"),
            'telefono' => $this->input->post("telefono_residente")
        );

        $this->jefe_carrera_model->update_jefe_carrera($clave_acceso, $data);
        redirect('internal_private/jefes_carrera');
    }

    public function delete_jefe_carrera() {
        $clave_acceso = $this->uri->segment(3);
        $this->jefe_carrera_model->delete_jefe_carrera($clave_acceso);
        $this->login_model->delete_jefe_carrera($clave_acceso);
        redirect('internal_private/jefes_carrera');
    }

    public function cambiar_pass_jefe() {
        $clave_acceso = $this->uri->segment(3);
        $data['pass_usuario'] = md5($this->input->post("password"));
        $this->login_model->update_pass_jefe_carrera($clave_acceso, $data);
        redirect('internal_private/jefes_carrera');
    }

    public function alumnos() {
        $data = array(
            'content' => "private/admin/alumnos_tmp",
            'title' => "Sistema residencias | Alumnos.",
            'barraTitulo' => "Alumnos",
            'nav' => "navAlum"
        );
        $this->load->view("private/admin/index", $data);
    }

    public function add_alumno() {
        $data = array(
            'content' => "private/admin/add_alumno_tmp",
            'title' => "Sistema residencias | Alumnos.",
            'barraTitulo' => "Agregar Alumno.",
            'nav' => "navAlum"
        );
        $this->load->view("private/admin/index", $data);
    }
    
    public function registrar_alumno(){
        $datosUsuario = array(
            'no_control' => $this->input->post("numero_control"),
            'pass_usuario' => md5($this->input->post("password")),
            'tipo_usuario' => "Alumno"
        );
        $data = array(
            'numero_control' => $this->input->post("numero_control"),
            'nombre' => $this->input->post("nombre"),
            'apellido_paterno' => $this->input->post("apellidoPaterno"),
            'apellido_materno' => $this->input->post("apellidoMaterno"),
            'carrera' => $this->input->post("carrera"),
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
            redirect('internal_private/alumnos');
        }else{
            $data = array(
                'error' => "El usuario ya esta registrado.",
                'content' => "private/admin/add_alumno_tmp",
                'title' => "Sistema residencias | Alumnos.",
                'barraTitulo' => "Agregar Alumno.",
                'nav' => "navAlum",
                'numero_control' => $this->input->post("numero_control"),
                'nombre' => $this->input->post("nombre"),
                'apellido_paterno' => $this->input->post("apellidoPaterno"),
                'apellido_materno' => $this->input->post("apellidoMaterno"),
                'carrera' => $this->input->post("carrera"),
                'domicilio' => $this->input->post("domicilio"),
                'email' => $this->input->post("email"),
                'ciudad' => $this->input->post("ciudad_residente"),
                'telefono' => $this->input->post("telefono_residente"),
                'seguridad_social' => $this->input->post("seguridad_social"),
                'especifique' => $this->input->post("especifique"),
                'numero_social' => $this->input->post("numero_social")
            );
        $this->load->view("private/admin/index", $data);
        }
    }

    public function buscar_alumnos() {
        $no_control = $this->input->post("no_control");
        $carrera = $this->input->post("carrera");

        $data = array(
            'content' => "private/admin/alumnos_tmp",
            'title' => "Sistema residencias | Alumnos.",
            'barraTitulo' => "Resultado de la Búsqueda de Alumnos",
            'nav' => "navAlum",
            'registros' => $this->alumno_model->filtros_busqueda_alumno($no_control, $carrera)
        );
        $this->load->view("private/admin/index", $data);
    }

}
