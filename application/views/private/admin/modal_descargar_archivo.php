<div class="modal fade" id="modalDescargarReporte" tabindex="-1" role="dialog" aria-labelledby="modalDescargarReporte" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Descargar Reporte</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() ?>internal_private/descargar_reporte" method="post" >
                <div class="modal-body">
                    <h5><strong>Seleccione la carrera:</strong></h5>
                    <select name="carrera" id="disabledSelect" class="form-control" required="">
                <option value=""></option>
                <option value="general">General</option>
                <option value="contador">Lic. Contador Público</option>
                <option value="informatica">Ing. Informática</option>
                <option value="sistemas">Ing. en Sistemas Computacionales</option>
                <option value="industrial">Ing. Industrial</option>
                <option value="electronica">Ing. Electrónica</option>
                <option value="gestion">Ing. en Gestión Empresarial</option>
                <option value="innovacion">Ing. Innovación Agrícola Sustentable</option>
                <option value="petrolera">Ing. Petrolera</option>
                <option value="tic">Ing. Tic</option>
                <option value="energias">Ing. Energías Renovables</option>
            </select>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Generar Reporte">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
