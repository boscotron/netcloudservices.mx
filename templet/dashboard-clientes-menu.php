<?php 
//$this->pre(['p'=>$data,'t'=>'TITULO_ARRAY']);
 ?>
 
<input type="hidden" id="url_ver" value="<?php echo ($data['peticiones']!='')?$data['peticiones'][0]:''; ?>"  data-sec="<?php echo $data['sec']; ?>">
<input type="hidden" id="url_templet" value="<?php $this->url_templet(); ?>">
<input type="hidden" id="url_inicio" value="<?php $this->url_inicio(); ?>">
<input type="hidden" id="id_cliente" value="<?php echo $data['id_cliente']; ?>">
<input type="hidden" id="nombre_cliente" value="<?php echo $data['nombre_cliente']; ?>">
<input type="hidden" id="url_publico" value="<?php echo $data['url_publico']; ?>">
<input type="hidden" id="url_redirect" data-redirect="<?php echo $data['redirect']; ?>" value="<?php echo $data['url_redirect']; ?>">

<div col="row " style="position: absolute;width: 100%;z-index: 998;top:0px;">
    <div col="col-md-12">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark administrdor_nav a">
            <a href="<?php $this->url_inicio();?>administrador/clientes" class="navbar-brand" >Clientes > </a>
            <h3 class="jmy_web_div clientes_div" data-tabla="" data-page="" id="nombre_clientes" data-editor="no"></h3>
           
            
           
            
            <button class="navbar-toggler navbar-toggler-bsk" type="button" data-target="#navbarSupportedContent_b">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent_b">
                 <a class="navbar-brand float-right notas_lista btn-nav-addons " data-titulo="Notas"><i class="fa fa-sticky-note"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right presentaciones_lista btn-nav-addons " data-titulo="Presentaciones"><i class="fa fa-tv"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right archivos_lista btn-nav-addons " data-titulo="Archivos"><i class="fa fa-archive"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right diagramas_lista btn-nav-addons " data-titulo="Diagramas"><i class="fas fa-project-diagram"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right cotizaciones_lista btn-nav-addons " data-titulo="Cotizaciones"><i class="fas fa-file-invoice-dollar"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right proyectos_lista btn-nav-addons " data-titulo="Proyectos"><i class="fas fa-code-branch"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right facturacion_lista btn-nav-addons " data-titulo="Facturación"><i class="fas fa-dollar"></i><span class="badge badge-secondary"></span> <b></b></a>
                <a class="navbar-brand float-right agenda_lista btn-nav-addons " data-titulo="Agenda"><i class="fas fa-calendar"></i><span class="badge badge-secondary"></span> <b></b></a>
            </div>
            <div class="btn-group herramientas_botones " id="herramientas_botones">
                        </div>
        </nav>
        
    </div>
</div>
<div col="row " style="position: absolute;width: 100%;z-index: 991;top: 2px;height: calc( 100% - 52px );overflow-x: hidden;">
<?php 
foreach (['notas','cotizaciones','proyectos','presentaciones','diagramas', 'archivos','facturacion','servicios','agenda'] as $v){
    echo '<div id="lista_'.$v.'_drag" class="ui-widget-content listas_drag" ><button id="lista_'.$v.'_boton" class="submenu_opciones_cerrar submenu_ini btn btn-round btn-flat btn-sm btn-dark" data-id="lista_'.$v.'"><i class="fa fa-close"></i></button><div class="submenu_opciones submenu_ini" id="lista_'.$v.'"></div></div>';
}?>