<?php 
$animacion = $data['animacion'];
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
//$this ->pre(['p'=>$data,'t'=>'DATA']);
?>

<!--SIDE PANEL-->

<!--end side-panel-->

<div col="row " style="position: absolute;width: 100%;z-index: 99999;top:90px;">
    <div col="col-md-12" >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark administrdor_nav" style="margin-bottom: 0px !important;">
            <a href="#" class="navbar-brand jmy_web_div" data-page="configuracion_panel" id="titulo_panel" data-editor="no"><?php $this->pnt('titulo_panel','Panel JMY V3'); ?></a>
            <button class="navbar-toggler navbar-toggler-bsk" type="button"  data-target="#navbarSupportedContent" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" id="nav_administrador">
                </ul>
            </div>
        </nav>
    </div>
</div>

<div col="row" id="contenido_administrador">
    <div col="col-md-12">
        <?php 
        if(file_exists($data['url_marco']))
            include_once($data['url_marco']);
        else
            $this->pre(['p'=>['No se pudo cargar este módulo, consultelo con su administrador',$data['url_marco']],'t'=>'Error']);
        ?>
    </div>
</div>
<!-- Modal -->
<div class="ventana hide " tabindex="-1" id="alerta" >
  <div class="modal-header">
    <h4 id="alerta_titulo">Cargando...</h4>
    <button type="button" class="close alerta_cerrar" >×</button>
  </div>
  <div class="modal-body">
    <div id="alerta_mensaje">Cargando Módulo clientes</div>
  </div>
  <div class="modal-footer">
    
    <div id="alerta_mensje_footer"></div>
    <button class="btn btn-dark alerta_cerrar" >Cerrar</button>
    <div id="alerta_continuar_div"></div>
  </div>
</div>





