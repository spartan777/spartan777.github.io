<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alumno extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("alumno_model");
        $this->load->model("jefe_carrera_model");
        $this->load->library('word');
        $this->load->library('zip');
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
    
    public function subir_archivo(){
        $tipo_archivo = $this->uri->segment(3);
        
        switch ($tipo_archivo){
            case "constancia_creditos" : $archivo = "Constancia Créditos";        break;
            case "carta_presentacion"  : $archivo = "Carta Presentación";         break;
            case "carta_aceptacion"    : $archivo = "Carta Aceptación Empresa";   break;
            case "asig_asesor_int"     : $archivo = "Asignacion Asesor Interno";  break;
            case "asig_asesor_ext"     : $archivo = "Asignacion Asesor Externo";  break;
            case "liberacion_jefe"     : $archivo = "Liberación Jefe de Carrera"; break;
            case "liberacion_dep"      : $archivo = "Liberación de la DEP";       break;
        }
        
        $data = array(
            'content' => "private/alumno/upload_file",
            'title' => "Sistema residencias | Subir Archivo.",
            'barraTitulo' => "Subir ".$archivo,
            'nav' => "navSubir",
            'tipo_archivo' => $tipo_archivo
            
        );
        $this->load->view("private/alumno/index", $data);
    }
    
    public function do_upload() {
        $tipo_archivo = $this->input->post('tipo_archivo');
        $numero_control = $this->session->userdata('user_login');
        $file_path = './uploads/escaneos/' . $numero_control;
        switch ($tipo_archivo){
            case "constancia_creditos" : $archivo = "Constancia Créditos";        break;
            case "carta_presentacion"  : $archivo = "Carta Presentación";         break;
            case "carta_aceptacion"    : $archivo = "Carta Aceptación Empresa";   break;
            case "asig_asesor_int"     : $archivo = "Asignacion Asesor Interno";  break;
            case "asig_asesor_ext"     : $archivo = "Asignacion Asesor Externo";  break;
            case "liberacion_jefe"     : $archivo = "Liberación Jefe de Carrera"; break;
            case "liberacion_dep"      : $archivo = "Liberación de la DEP";       break;
        }
        
        if (!file_exists($file_path)) {
            mkdir($file_path, 0777, true);
        }
        
        $config['upload_path'] = $file_path . '/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000000';
        $config['file_name'] = $tipo_archivo;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $data = array(
                'content' => "private/alumno/upload_file",
                'title' => "Sistema residencias | Subir Archivo.",
                'barraTitulo' => "Subir ".$archivo,
                'nav' => "navSubir",
                'tipo_archivo' => $tipo_archivo,
                'error' => "Ocurrió un error al procesar el archivo."
            );
            $this->load->view("private/alumno/index", $data);

        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Archivo subido correctamente");'; 
            echo 'window.location.href = "'.  base_url().'alumno/subir_archivo/'.$tipo_archivo.'";';
            echo '</script>';
        }
    }
    
    public function subir_archivo_word(){
        $data = array(
            'content' => "private/alumno/upload_file_word",
            'title' => "Sistema residencias | Subir Archivo.",
            'barraTitulo' => "Subir Anteproyecto.",
            'nav' => "navSubir",
            'tipo_archivo' => "anteproyecto"
        );
        $this->load->view("private/alumno/index", $data);
    }
    
    public function do_upload_word() {
        $tipo_archivo = $this->input->post('tipo_archivo');
        $numero_control = $this->session->userdata('user_login');
        $file_path = './uploads/escaneos/' . $numero_control;
               
        if (!file_exists($file_path)) {
            mkdir($file_path, 0777, true);
        }
        
        $config['upload_path'] = $file_path . '/';
        $config['allowed_types'] = 'doc|docx';
        $config['max_size'] = '10000000';
        $config['file_name'] = $tipo_archivo;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $data = array(
                'content' => "private/alumno/upload_file_word",
                'title' => "Sistema residencias | Subir Archivo.",
                'barraTitulo' => "Subir Anteproyecto.",
                'nav' => "navSubir",
                'tipo_archivo' => $tipo_archivo,
                'error' => "Ocurrió un error al procesar el archivo."
            );
            $this->load->view("private/alumno/index", $data);

        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Archivo subido correctamente");'; 
            echo 'window.location.href = "'.  base_url().'alumno/subir_archivo_word/";';
            echo '</script>';
        }
    }

    public function consultar_dictamen(){
        $numero_control = $this->session->userdata('user_login');
        $data = array(
                'content' => "private/alumno/dictamen_consulta",
                'title' => "Sistema residencias | Consultar Dictamen.",
                'barraTitulo' => "Consultar dictamen.",
                'nav' => "navDictamen",
                'resultados' => $this->alumno_model->buscar_dictamen($numero_control)
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
        $formato = substr($numero_control, 0, 3);
        if($formato == "155"){
            $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA_10.docx');
        }if($formato == "165"){
            $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA_11.docx');
        }else{
            $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA.docx');
        }
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
        header("Content-Disposition: attachment; filename=".$file_name."; charset=iso-8859-1");
        echo file_get_contents($file_name);
        unlink($file_name);
    }
    
    public function descargar_formatos(){
        $numero_control = $this->session->userdata('user_login');
        $fileSolicitud = $this->generar_solicitud($numero_control);
        $anexo3 = $this->generar_anexo_tres($numero_control);
        $anexo5 = $this->generar_anexo_cinco($numero_control);
        $fileZip = "Archivos_Residencias_".$numero_control.".zip";
        $this->zip->read_file($fileSolicitud);
        $this->zip->read_file($anexo3);
        $this->zip->read_file($anexo5);
        $this->zip->download($fileZip);
        unlink($fileSolicitud);
        unlink($fileZip);
    }
    
    public function generar_anexo_cinco($numero_control){
        $resultAlumno = $this->alumno_model->buscar_id_alumno($numero_control);
        $resultEmpresa = $this->alumno_model->check_empresa($numero_control);
        $resultProyecto = $this->alumno_model->check_proyecto($numero_control);
        
        foreach ($resultAlumno->result() as $alumno){
            $nombre_alum = $alumno->nombre." ".$alumno->apellido_paterno." ".$alumno->apellido_materno;
            $carrera = $alumno->carrera;
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
        
        foreach ($resultProyecto->result() as $proyecto){
            $nombre_proyecto = $proyecto->nombre_proyecto;
            $periodo = $proyecto->periodo;
            
        }
        
        foreach ($resultEmpresa->result() as $empresa){
            $nombre_empresa = $empresa->nombre_empresa;
        }
        
        $templateProcesador = new PHPWord_Template('././template/Anexo_V.docx');
        
        $templateProcesador->setValue('nombre_residente', $nombre_alum);
        $templateProcesador->setValue('numero_control', $numero_control);
        $templateProcesador->setValue('carrera', $carrera_alum);
        $templateProcesador->setValue('nombre_proyecto', $nombre_proyecto);
        $templateProcesador->setValue('periodo', $periodo);
        $templateProcesador->setValue('nombre_empresa', $nombre_empresa);
        
        $file_name = "Anexo_V_".$numero_control.".docx";
        $templateProcesador->save($file_name);
        
        return $file_name;
    }
    
    public function generar_anexo_tres($numero_control){
        $resultAlumno = $this->alumno_model->buscar_id_alumno($numero_control);
        $resultProyecto = $this->alumno_model->check_proyecto($numero_control);
        
        foreach ($resultAlumno->result() as $alumno){
            $nombre_alum = $alumno->nombre." ".$alumno->apellido_paterno." ".$alumno->apellido_materno;
            $carrera = $alumno->carrera;
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
            case "tecnologias de la informacion y comunicacion":         $carrera_alum = "Ing. Tecnologias de la informacion y Comunicacion";                             break;
            case "energias":    $carrera_alum = "Ing. Energías Renovables";             break;
        }
        
        foreach ($resultProyecto->result() as $proyecto){
            $nombre_proyecto = $proyecto->nombre_proyecto;
            $periodo = $proyecto->periodo;
            
        }
                
        $templateProcesador = new PHPWord_Template('././template/Anexo_III.docx');
        
        $templateProcesador->setValue('nombre_residente', $nombre_alum);
        $templateProcesador->setValue('numero_control', $numero_control);
        $templateProcesador->setValue('carrera', $carrera_alum);
        $templateProcesador->setValue('nombre_proyecto', $nombre_proyecto);
        $templateProcesador->setValue('periodo', $periodo);
        
        $file_name = "Anexo_III_".$numero_control.".docx";
        $templateProcesador->save($file_name);
        
        return $file_name;
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
        
        $formato = substr($numero_control, 0, 3);
        if($formato == "155"){
            $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA_10.docx');
        }if($formato == "165"){
            $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA_11.docx');
        }else{
            $templateProcesador = new PHPWord_Template('././template/SOLICITUD_RESIDENCIA.docx');
        }
        
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
