<?php 
$data=$data['data'];
$animacion = $data['animacion'];
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
//$this ->pre(['p'=>$data,'t'=>'DATA']);
?>
<input type="hidden" id="id_proyecto" value="<?php echo $data['id_fn_ver']; ?>">
<?php  include('templet/dashboard-clientes-menu.php'); ?>

<div class="" id="dashboard-proyectos" style="padding:0;">


    <div id="detalles" >
     
        <div class="row"  style="height: 100%;">
            
            <div class="col-xs-12 col-sm-12 " style="height: 100%;">
                <div class="row" style="height: 100%;">
                    <div class="col-md-10" id="lista">
                    </div>
                    <div class="col-md-12" id="contenido_proyectos" style="height: 100%;">
                        <div class="bs-component contenido_proyectos_dark  contenido_proyectos_top" style="height: 100%;">                       

                            <div class="row" style="
    height: 100%;
">                                        
                                <div class="col-md-12"  style="z-index:999;">
                                    <div class="col-xs-12 col-sm-6">
                                        <p type="text" class="jmy_web_div" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="nombre_proyectos" data-editor="no"><?php $this->pnt('nombre_proyectos','Error al cargar nombre de cotización, edite este campo para corregirlo.'); ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6" >
                                    <div class="btn-group  btn-group-sm" style="float: right;" role="group" aria-label="Basic example" aria-label="Button group with nested dropdown">                                        
                                        <button type="button" class="btn btn-dark vista_notas active"><i class="fa fa-pencil"></i> &nbsp;Editar proyecto</button>
                                        <button type="button" class="btn btn-dark vista_notas"><i class="fa fa-sticky-note"></i> &nbsp;Notas</button>
                                        <!--<button type="button" class="btn btn-dark vista_publica"><i class="fa fa-link"></i> &nbsp;Vista publica</button>
                                        <button type="button" class="btn btn-dark vista_copiar"><i class="fa fa-copy"></i> &nbsp;</button>-->
                                                                                    
                                    </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="bs-component contenido_proyectos_dark contenido_proyectos_scroll contenido_proyectos" style="height: 100%;">
                            <div id="vista_notas">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Esta sección es oculta a la vista pública. Aquí podrás guardar notas y/o archivos eferente a la realización de esa cotización</p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="jumbotron jumbotron-fluid">
                                            <div class="container <?php echo($data['editor'])?'jmy_web_div':'';?>" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="nota_proyecto" ><?php $this->pnt('nota_proyecto','<h1 class="display-4">Observaciones sobre la cotización</h1><p class="lead">Modifique esta sección para guardar notas</p>'); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <?php
                                            echo $this->archivos([	
                                                'ruta'=>'privado/'.$data['tabla'].'/'.$data['pagina'].'/',
                                                'height'=>'500',
                                                'width'=>'100%',
                                                'id'=>uniqid(),
                                                'permisos'=>[ 	
                                                            'des_del_file'=>true, // Desactivar eleiminar archivos
                                                            'des_regresar'=>true,
                                                            'des_cre_folder'=>true,
                                                            'des_del_folder'=>true,
                                                            //'des_upload'=>true,
                                                            //'des_rename_files'=>true,
                                                            'des_rename_folders'=>true,
                                                            //'des_duplicate'=>true,
                                                            'des_breadcrumb'=>true,
                                                    ]
                                                ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div id="vista_publica">
                                <div class="embed-responsive embed-responsive-16by9" style="height: 100%;opacity: 0.75;">
                                    <iframe class="embed-responsive-item" src="<?php $this->url_inicio(); ?>gantt/<?php echo $data['pagina'];?>" style="height: 90%;    background: #333;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="texto">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
            

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
