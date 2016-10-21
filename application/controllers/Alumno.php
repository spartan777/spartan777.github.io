<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alumno extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("alumno_model");
        $this->load->model("jefe_carrera_model");
    }

    public function index() {
        $data = array(
            'content' => "private/alumno/home_alumno",
            'title' => "ITSCO | Alumno sistema residencias.",
            'barraTitulo' => "Bienvenido a la zona alumno",
            'nav' => "navHome"
        );
        $this->load->view("private/alumno/index", $data);
    }

    public function solicitud_residencia() {
        $numero_control = $this->session->userdata('user_login');
        $check_solicitud = $this->alumno_model->check_proyecto($numero_control);
        if ($check_solicitud == FALSE) {
            $data = array(
                'content' => "private/alumno/datos_alumno",
                'title' => "Sistema residencias | Solicitud de residencia.",
                'barraTitulo' => "Solicitud de Residencias | Datos del residente.",
                'nav' => "navSolicitud",
                'resultados' => $this->alumno_model->buscar_id_alumno($numero_control)
            );
        } else {
            $data = array(
                'content' => "private/alumno/descargar_solicitud",
                'title' => "Sistema residencias | Descargar solicitud de residencia.",
                'barraTitulo' => "Solicitud de Residencias | Descargar.",
                'nav' => "navSolicitud"
            );
        }
        $this->load->view("private/alumno/index", $data);
    }

    public function datos_empresa() {
        $numero_control = $this->session->userdata('user_login');
        $check_solicitud = $this->alumno_model->check_empresa($numero_control);
        if ($check_solicitud == FALSE) {
            $data = array(
                'content' => "private/alumno/datos_empresa",
                'title' => "Sistema residencias | Solicitud de residencia.",
                'barraTitulo' => "Solicitud de Residencias | Datos de la empresa.",
                'nav' => "navSolicitud"
            );
        } else {
            foreach ($check_solicitud->result() as $row){
                //Falta asignar a variables para pasar a la vista
            }
            $data = array(
                'content' => "private/alumno/datos_empresa",
                'title' => "Sistema residencias | Solicitud de residencia.",
                'barraTitulo' => "Solicitud de Residencias | Datos de la empresa.",
                'boton' => TRUE,
                'nav' => "navSolicitud"
            );
            
        }
        $this->load->view("private/alumno/index", $data);
    }

    public function guardar_datos_empresa() {
        $numero_control = $this->session->userdata('user_login');

        $data = array(
            'no_control' => $numero_control,
            'nombre_empresa' => $this->input->post('nombre_empresa'),
            'giro_ramo_sector' => $this->input->post('giro_ramo_sector'),
            'rfc' => $this->input->post('rfc'),
            'domicilio' => $this->input->post('domicilio'),
            'colonia' => $this->input->post('colonia'),
            'codigo_postal' => $this->input->post('codigo_postal'),
            'fax' => $this->input->post('fax'),
            'ciudad' => $this->input->post('ciudad'),
            'telefono' => $this->input->post('telefono'),
            'mision_empresa' => $this->input->post('mision_empresa'),
            'nombre_titular' => $this->input->post('nombre_titular'),
            'puesto_titular' => $this->input->post('puesto_titular'),
            'asesor_externo' => $this->input->post('asesor_externo'),
            'puesto_asesor' => $this->input->post('puesto_asesor'),
            'nombre_acuerdo_trabajo' => $this->input->post('nombre_acuerdo_trabajo'),
            'puesto_acuerdo_trabajo' => $this->input->post('puesto_acuerdo_trabajo')
        );
        $this->alumno_model->insert_datos_empresa($data);
        redirect('alumno/datos_proyecto');
    }

    public function datos_proyecto() {
        $numero_control = $this->session->userdata('user_login');
        $resultadosAlumno = $this->alumno_model->buscar_id_alumno($numero_control);

        foreach ($resultadosAlumno->result() as $row) {
            $carrera = $row->carrera;
        }

        $resultadosJefe = $this->jefe_carrera_model->buscar_nombre_jefe($carrera);

        foreach ($resultadosJefe->result() as $rowJefe) {
            $nombre = $rowJefe->nombre;
            $apellido_paterno = $rowJefe->apellido_paterno;
            $apellido_materno = $rowJefe->apellido_materno;
        }

        $data = array(
            'content' => "private/alumno/datos_proyecto",
            'title' => "Sistema residencias | Solicitud de residencia.",
            'barraTitulo' => "Solicitud de Residencias | Datos del proyecto.",
            'nav' => "navSolicitud",
            'carrera' => $carrera,
            'jefe_carrera' => $nombre . "&nbsp;" . $apellido_paterno . "&nbsp;" . $apellido_materno
        );
        $this->load->view("private/alumno/index", $data);
    }

    public function guardar_datos_proyecto() {
        $numero_control = $this->session->userdata('user_login');
        $data = array(
            'no_control' => $numero_control,
            'lugar' => $this->input->post('lugar'),
            'fecha' => $this->input->post('fecha'),
            'jefe_division' => $this->input->post('jefe_division'),
            'nombre_proyecto' => $this->input->post('nombre_proyecto'),
            'opcion_proyecto' => $this->input->post('opcion_proyecto'),
            'periodo' => $this->input->post('periodo'),
            'numero_residentes' => $this->input->post('numero_residentes')
        );
    }

}
