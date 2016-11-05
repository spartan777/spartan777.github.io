<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class internal_private extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("jefe_carrera_model");
        $this->load->model("alumno_model");
        $this->load->library('zip');
        $this->load->library('word');
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
            
        if((is_null($no_control) || empty($no_control) || trim($no_control) == "") && (is_null($carrera) || empty($carrera))){
            $data = array(
                'content' => "private/admin/alumnos_tmp",
                'title' => "Sistema residencias | Alumnos.",
                'barraTitulo' => "Resultado de la Búsqueda de Alumnos",
                'nav' => "navAlum",
                'error' => "* Ingrese un filtro de búsqueda."
            );
        }else{
            $data = array(
                'content' => "private/admin/alumnos_tmp",
                'title' => "Sistema residencias | Alumnos.",
                'barraTitulo' => "Resultado de la Búsqueda de Alumnos",
                'nav' => "navAlum",
                'registros' => $this->alumno_model->filtros_busqueda_alumno($no_control, $carrera),
                'no_control' => $no_control,
                'carrera' => $carrera
            );
        }
        $this->load->view("private/admin/index", $data);
    }
    
    public function descargar_zip(){
        $no_control = $this->uri->segment(3);
        $fileSolicitud = $this->generar_solicitud($no_control);
        $fileZip = "Archivos_Residencias_".$no_control.".zip";
        $this->zip->read_file($fileSolicitud);
        $this->zip->download($fileZip);
        unlink($fileSolicitud);
        unlink($fileZip);
    }
    
    public function generar_solicitud($numero_control){
        $resultAlumno = $this->alumno_model->buscar_id_alumno($numero_control);
        $resultEmpresa = $this->alumno_model->check_empresa($numero_control);
        $resultProyecto = $this->alumno_model->check_proyecto($numero_control);
        
        foreach ($resultAlumno->result() as $alumno){
            $nombre_alum = $alumno->nombre." ".$alumno->apellido_paterno." ".$alumno->apellido_materno;
            $carrera = $alumno->carrera;
            $domicilio_alum = $alumno->domicilio;
            $email_alum = $alumno->email;
            $ciudad_alum = $alumno->ciudad;
            $numero_social = $alumno->numero_social;
            $seguridad_social = $alumno->seguridad_social;
            $telefono_alum = $alumno->telefono;
        }
        
        if($seguridad_social == "IMSS"){
            $im = " X ";
        }else{
            $im = "  ";
        }
        
        if($seguridad_social == "ISSTE"){
            $iss = " X ";
        }else{
            $iss = "  ";
        }
        
        if($seguridad_social == "Otros"){
            $ot = " X ";
        }else{
            $ot = "  ";
        }
        
        $resultadosJefe = $this->jefe_carrera_model->buscar_nombre_jefe($carrera);

        foreach ($resultadosJefe->result() as $rowJefe) {
            $jefe_carrera = $rowJefe->nombre." ".$rowJefe->apellido_paterno." ".$rowJefe->apellido_materno;
        }
        
        foreach ($resultEmpresa->result() as $empresa){
            $nombre_empresa = $empresa->nombre_empresa;
            $giro_ramo_sector = $empresa->giro_ramo_sector;
            $rfc  = $empresa->RFC;
            $domicilio = $empresa->domicilio;
            $colonia = $empresa->colonia;
            $codigo_postal = $empresa->codigo_postal;
            $fax = $empresa->fax;
            $ciudad = $empresa->ciudad;
            $telefono = $empresa->telefono;
            $mision_empresa = $empresa->mision_empresa;
            $nombre_titular = $empresa->nombre_titular;
            $puesto_titular = $empresa->puesto_titular;
            $asesor_externo = $empresa->asesor_externo;
            $puesto_asesor = $empresa->puesto_asesor;
            $nombre_acuerdo_trabajo = $empresa->nombre_acuerdo_trabajo;
            $puesto_acuerdo_trabajo = $empresa->puesto_acuerdo_trabajo;
        }
        
        if($giro_ramo_sector == "Industrial"){
            $g_i = " X ";
        }else{
            $g_i = "  ";
        }
        
        if($giro_ramo_sector == "Servicios"){
            $g_s = " X ";
        }else{
            $g_s = "  ";
        }
        
        if($giro_ramo_sector == "Público"){
            $g_p = " X ";
        }else{
            $g_p = "  ";
        }
        
        if($giro_ramo_sector == "Privado"){
            $g_r = " X ";
        }else{
            $g_r = "  ";
        }
        
        if($giro_ramo_sector == "Otros"){
            $g_o = " X ";
        }else{
            $g_o = "  ";
        }
        
        foreach ($resultProyecto->result() as $proyecto){
            $lugar = $proyecto->lugar;
            $fecha = $proyecto->fecha;
            $jefe_division = $proyecto->jefe_division;
            $nombre_proyecto = $proyecto->nombre_proyecto;
            $opcion_proyecto = $proyecto->opcion_proyecto;
            $periodo = $proyecto->periodo;
            $numero_residentes = $proyecto->numero_residentes;
        }
        
        if($opcion_proyecto == "Banco de Proyectos"){
            $o_b = " X ";
        }else{
            $o_b = "  ";
        }
        
        if($opcion_proyecto == "Propuesta Propia"){
            $o_p = " X ";
        }else{
            $o_p = "  ";
        }
        
        if($opcion_proyecto == "Trabajador(a)"){
            $o_t = " X ";
        }else{
            $o_t = "  ";
        }
        
        switch ($carrera){
            case "contador":    $carrera_alum = "Lic. Contador Público";                break;
            case "informatica": $carrera_alum = "Ing. Informática";                     break;
            case "sistemas":    $carrera_alum = "Ing. en Sistemas Computacionales";     break;
            case "industrial":  $carrera_alum = "Ing. Industrial";                      break;
            case "electronica": $carrera_alum = "Ing. Electrónica";                     break;
            case "gestion":     $carrera_alum = "Ing. en Gestión Empresarial";          break;
            case "innovacion":  $carrera_alum = "Ing. Innovación Agrícola Sustentable"; break;
            case "petrolera":   $carrera_alum = "Ing. Petrolera";                       break;
            case "tic":         $carrera_alum = "Ing. Tic";                             break;
            case "energias":    $carrera_alum = "Ing. Energías Renovables";             break;
        }
        
        $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA.docx');
        
// --- Asignamos valores a la plantilla
        $templateProcesador->setValue('numero_control', $numero_control);
        $templateProcesador->setValue('lugar', $lugar);
        $templateProcesador->setValue('fecha', $fecha);
        $templateProcesador->setValue('jefe_division', $jefe_division);
        $templateProcesador->setValue('jefe_carrera', $jefe_carrera);
        $templateProcesador->setValue('carrera_alum', $carrera_alum);
        $templateProcesador->setValue('nombre_proyecto', $nombre_proyecto);
        $templateProcesador->setValue('o_b', $o_b);
        $templateProcesador->setValue('o_p', $o_p);
        $templateProcesador->setValue('o_t', $o_t);
        $templateProcesador->setValue('periodo', $periodo);
        $templateProcesador->setValue('n_r', $numero_residentes);
        $templateProcesador->setValue('nombre_empresa', $nombre_empresa);
        $templateProcesador->setValue('g_i', $g_i);
        $templateProcesador->setValue('g_s', $g_s);
        $templateProcesador->setValue('g_o', $g_o);
        $templateProcesador->setValue('g_p', $g_p);
        $templateProcesador->setValue('g_r', $g_r);
        $templateProcesador->setValue('rfc', $rfc);
        $templateProcesador->setValue('domicilio', $domicilio);
        $templateProcesador->setValue('colonia', $colonia);
        $templateProcesador->setValue('codigo_postal', $codigo_postal);
        $templateProcesador->setValue('fax', $fax);
        $templateProcesador->setValue('ciudad', $ciudad);
        $templateProcesador->setValue('telefono', $telefono);
        $templateProcesador->setValue('mision_empresa', $mision_empresa);
        $templateProcesador->setValue('nombre_titular', $nombre_titular);
        $templateProcesador->setValue('puesto_titular', $puesto_titular);
        $templateProcesador->setValue('asesor_externo', $asesor_externo);
        $templateProcesador->setValue('puesto_asesor', $puesto_asesor);
        $templateProcesador->setValue('nombre_acuerdo_trabajo', $nombre_acuerdo_trabajo);
        $templateProcesador->setValue('puesto_acuerdo_trabajo', $puesto_acuerdo_trabajo);
        $templateProcesador->setValue('nombre_alum', $nombre_alum);
        $templateProcesador->setValue('domicilio_alum', $domicilio_alum);
        $templateProcesador->setValue('email_alum', $email_alum);
        $templateProcesador->setValue('ciudad_alum', $ciudad_alum);
        $templateProcesador->setValue('im', $im);
        $templateProcesador->setValue('iss', $iss);
        $templateProcesador->setValue('ot', $ot);
        $templateProcesador->setValue('numero_social', $numero_social);
        $templateProcesador->setValue('telefono_alum', $telefono_alum);
        
// --- Guardamos el documento
        $file_name = "Solicitud_Residencia_".$numero_control.".docx";
        $templateProcesador->save($file_name);
        
        return $file_name;        
    }
}
