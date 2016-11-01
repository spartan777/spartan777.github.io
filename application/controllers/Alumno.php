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
            foreach ($check_solicitud->result() as $row) {
                $data = array(
                    'content' => "private/alumno/datos_empresa",
                    'title' => "Sistema residencias | Solicitud de residencia.",
                    'barraTitulo' => "Solicitud de Residencias | Datos de la empresa.",
                    'boton' => TRUE,
                    'nav' => "navSolicitud",
                    'nombre_empresa' => $row->nombre_empresa,
                    'giro_ramo_sector' => $row->giro_ramo_sector,
                    'RFC' => $row->RFC,
                    'domicilio' => $row->domicilio,
                    'colonia' => $row->colonia,
                    'codigo_postal' => $row->codigo_postal,
                    'fax' => $row->fax,
                    'ciudad' => $row->ciudad,
                    'telefono' => $row->telefono,
                    'mision_empresa' => $row->mision_empresa,
                    'nombre_titular' => $row->nombre_titular,
                    'puesto_titular' => $row->puesto_titular,
                    'asesor_externo' => $row->asesor_externo,
                    'puesto_asesor' => $row->puesto_asesor,
                    'nombre_acuerdo_trabajo' => $row->nombre_acuerdo_trabajo,
                    'puesto_acuerdo_trabajo' => $row->puesto_acuerdo_trabajo
                );
            }
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

        $check_solicitud = $this->alumno_model->check_proyecto($numero_control);
        if ($check_solicitud == FALSE) {

            $data = array(
                'content' => "private/alumno/datos_proyecto",
                'title' => "Sistema residencias | Solicitud de residencia.",
                'barraTitulo' => "Solicitud de Residencias | Datos del proyecto.",
                'nav' => "navSolicitud",
                'carrera' => $carrera,
                'jefe_carrera' => $nombre . "&nbsp;" . $apellido_paterno . "&nbsp;" . $apellido_materno
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

        $this->alumno_model->insert_datos_proyecto($data);
        redirect('alumno/solicitud_residencia');
    }

    public function descargar_solicitud() {
        $numero_control = $this->session->userdata('user_login');
        $this->load->library('word');
        
        $PHPWord = new PHPWord();

        $document = $PHPWord->loadTemplate(base_url().'templates/SOLICITUD_RESIDENCIA.docx');
        

//        $nombre = "Sandra S.L.";
//        $direccion = "Mi dirección";
//        $municipio = "Mrd";
//        $provincia = "Bdj";
//        $cp = "02541";
//        $telefono = "24536784";


// --- Asignamos valores a la plantilla
        $document->setValue('numero_control', $numero_control);
//        $templateWord->setValue('direccion_empresa', $direccion);
//        $templateWord->setValue('municipio_empresa', $municipio);
//        $templateWord->setValue('provincia_empresa', $provincia);
//        $templateWord->setValue('cp_empresa', $cp);
//        $templateWord->setValue('telefono_empresa', $telefono);

// --- Guardamos el documento
        $document->save(base_url().'desx.docx');
    }

}
