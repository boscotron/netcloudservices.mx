<?php 
$data=$data['data'];
$animacion = $data['animacion'];

$page = $data['page'];

$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';

//$this ->pre(['p'=>$data,'t'=>'DATA']);

?>

<input type="hidden" id="id_presentacion" value="<?php echo $data['id_fn_ver']; ?>">

<input type="hidden" id="id_presentacion_vista" value="<?php echo $data['id_fn_ver']; ?>">
<input type="hidden" id="presentacion_vista_capa" value="1">

<input type="hidden" id="tipo_presentacion_vista" value="menu">

<input type="hidden" id="modo_editor" value="<?php echo $data['modo_editor'];?>">

<input type="hidden" class="presentacion_capa" data-nu="1" id="presentacion_capa_1" value="">

<input type="hidden" class="presentacion_capa" data-nu="2" id="presentacion_capa_2" value="">

<input type="hidden" class="presentacion_capa" data-nu="3" id="presentacion_capa_3" value="">

<input type="hidden" class="presentacion_capa" data-nu="4" id="presentacion_capa_4" value="">

<input type="hidden" class="presentacion_capa" data-nu="5" id="presentacion_capa_5" value="">

<input type="hidden" class="presentacion_capa" data-nu="6" id="presentacion_capa_6" value="">

<input type="hidden" class="presentacion_capa" data-nu="7" id="presentacion_capa_7" value="">

<input type="hidden" class="presentacion_capa" data-nu="8" id="presentacion_capa_8" value="">

<input type="hidden" id="presentacion_tipo_1" value="">

<input type="hidden" id="presentacion_tipo_2" value="">

<input type="hidden" id="presentacion_tipo_3" value="">

<input type="hidden" id="presentacion_tipo_4" value="">

<input type="hidden" id="presentacion_tipo_5" value="">

<input type="hidden" id="presentacion_tipo_6" value="">

<input type="hidden" id="presentacion_tipo_7" value="">

<input type="hidden" id="presentacion_tipo_8" value="">




<div class="" id="dashboard">

    <div id="listado"> 

        <div class="jmy_web_slider" data-style="z-index:10000;position:absolute;top:5px;left:5px;" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>" id="marco" data-marco="marco" <?php

            

            $va[] = [ "type"=>"imagen",

                    "id"=>"imagen_lista",

                    //"idbackground"=>"imagen_fondo",

                    //"class"=>"tab_imagenes_",

                    //"idadd"=>"tab_imagenes_",

                        "width"=>"1024",

                        "height"=>"720",

                        "url"=>$this->url_templet(["return"=>true]).'images/slides/sv1.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>

                    </div>

                    



        <h1 class="large jmy_web_div " data-tabla="<?php echo $tabla; ?>" data-page="<?php echo $page; ?>" id="titulo_lista" data-editor="no">

            <?php $this->pnt('titulo_lista','Clientes'); ?></h1>

            

            <?php 



            //  echo ($this->pnt('imagen','',['return'=>true])!='')?'&nbsp;  <a href="'. $this->pnt('imagen','',['return'=>true]).'" class="image-popup" ><i class="fa fa-picture-o " data-idzoom="imagen" aria-hidden="true"></i></a>':'';

            ?>

        <div class="texto">

            <div class="row">

                <div class="col-md-12" style="text-align: center;" id="vista_listado">

                </div>

            </div>

        </div>

    </div>











    <div id="detalles">



        <div class="jmy_web_slider" data-style="z-index:10000;position:absolute;top:5px;left:5px;" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>" id="marco" data-marco="marco" <?php

            

            $va[] = [ "type"=>"imagen",

                    "id"=>"imagen_lista",

                    //"idbackground"=>"imagen_fondo",

                    //"class"=>"tab_imagenes_",

                    //"idadd"=>"tab_imagenes_",

                        "width"=>"1024",

                        "height"=>"720",

                        "url"=>$this->url_templet(["return"=>true]).'images/slides/sv1.jpg' ];  ?>  data-var='<?php echo json_encode($va); ?>'>

                </div>

                

                <div class="row">

                    <div class="col-xs-12">

                        <h2 class="jmy_web_div clientes_div " data-tabla="" data-page="" id="nombre_clientes" data-editor="no">Cargando nombre...</h2>

                    </div>

                </div>

                <div class="row">

                    <?php include('templet/dashboard-clientes-menu.php'); ?>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 ">

                        <div class="row">

                            <div class="col-md-10" id="lista">

                            </div>

                            

                         



                            

                            <div class="col-md-12" id="contenido_presentaciones">

                                <div class="bs-component contenido_presentaciones_dark  contenido_presentaciones_top">

                                



                                    <div class="row">                                        

                                        <div class="col-md-12"  style="z-index:999;">

                                            <div class="col-xs-10">

                                                <p type="text" class="jmy_web_div" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="nombre_presentaciones" data-editor="no"><?php $this->pnt('nombre_presentaciones','Error al cargar nombre de cotización, edite este campo para corregirlo.'); ?></p>

                                            </div>

                                            <div class="col-xs-2" >

                                                <button type="button" class="btn btn-flat btn-dark btn-sm btn-outline-warning ver_ocultar_opciones_presentacion" style="float: right;"><i class="fa fa-chevron-up"> </i> </button>

                                            </div>

                                        </div>

                                        

                                        <div class="col-md-12 ver_ocultar_opciones_presentacion_div">

                                            <div class="col-sm-12 col-md-4 btn-group herramientas_botones " id="herramientas_botones"></div>

                                            <div class="col-sm-12 col-md-8">

                                                <div class="btn-group  btn-group-sm" style="float: right;" role="group" aria-label="Basic example" aria-label="Button group with nested dropdown">

                                                

                                                    <button type="button" class="btn btn-dark vista_notas active"><i class="fa fa-pencil"></i> &nbsp;Editar presentacion</button>

                                                    <button type="button" class="btn btn-dark vista_notas"><i class="fa fa-sticky-note"></i> &nbsp;Notas</button>

                                                    <button type="button" class="btn btn-dark vista_publica"><i class="fa fa-link"></i> &nbsp;Vista publica</button>

                                                    <button type="button" class="btn btn-dark vista_copiar"><i class="fa fa-copy"></i> &nbsp;</button>

                                                                                                

                                                </div>

                                            </div>

                                        </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="bs-component contenido_presentaciones_dark contenido_presentaciones_scroll contenido_presentaciones">

                                    <div id="vista_notas">

                                        <div class="row">

                                            <div class="col-xs-12">

                                                <p>Esta sección es oculta a la vista pública. Aquí podrás guardar notas y/o archivos eferente a la realización de esa cotización</p>

                                            </div>

                                            <div class="col-sm-12 col-md-6">

                                                <div class="jumbotron jumbotron-fluid">

                                                    <div class="container <?php echo($data['editor'])?'jmy_web_div':'';?>" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="nota_presentacion" ><?php $this->pnt('nota_presentacion','<h1 class="display-4">Observaciones sobre la cotización</h1><p class="lead">Modifique esta sección para guardar notas</p>'); ?></div>

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
											<div class="row">
												<div class="col-xs-11">
                                                    <div id="selec_menu" class="col-md-12 ver_ocultar_opciones_presentacion_div" style="margin-top:10px;"></div>
                                                </div>
												<div class="col-xs-1">
                                                    <div class="btn-group  btn-group-sm" style="float: right;" role="group">
                                                        <button type="button" class="btn btn-dark refrescar_select "><i class="fa fa-home"></i></button>
                                                        <button type="button" class="btn btn-dark ver_select "><i class="fa fa-bars"></i></button>
                                                        <button type="button" class="btn btn-dark regresar_presentacion "><i class="fa fa-angle-left"></i></button>
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">
												<div class="col-xs-12">
													<style type="text/css">
														#diapositiva_activa {
														  width: 600px;
														  height: 400px;
														}
													</style>
													<div id="diapositiva_activa"></div>
												</div>
											</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

        

            

            

            <?php 



            //  echo ($this->pnt('imagen','',['return'=>true])!='')?'&nbsp;  <a href="'. $this->pnt('imagen','',['return'=>true]).'" class="image-popup" ><i class="fa fa-picture-o " data-idzoom="imagen" aria-hidden="true"></i></a>':'';

            ?>

        <div class="texto">

            <div class="row">

                <div class="col-md-12" style="text-align: center;">

            



                </div>

            </div>

        </div>

    </div>

</div>

