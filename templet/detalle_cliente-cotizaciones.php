<?php 
$data=$data['data'];
$animacion = $data['animacion'];
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
//$this ->pre(['p'=>$data,'t'=>'DATA']);
?>
<input type="hidden" id="id_cotizacion" value="<?php echo $data['id_fn_ver']; ?>"">
<?php include('templet/dashboard-clientes-menu.php'); ?>

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
                    

            <div class="row">
                <div class="col-md-6" style="text-align: left;">
                    <h1 class="large jmy_web_div" data-tabla="<?php echo $tabla; ?>" data-page="<?php echo $page; ?>" id="titulo_lista" data-editor="no"><?php $this->pnt('titulo_lista','Clientes'); ?></h1>
                </div>
                <div class="col-md-6" style="text-align: right;" id="btns_clientes">
                    
                    <button type="button" class="btn btn-dark"><i class="fa fa-sticky-note"></i></button>
                    <button type="button" class="btn btn-dark"><i class="fa fa-tv"></i></button>
                    <button type="button" class="btn btn-dark"><i class="fa fa-archive"></i></button>
                    <button type="button" class="btn btn-dark"><i class="fas fa-project-diagram"></i></button>
                    <button type="button" class="btn btn-dark"><i class="fas fa-dollar"></i></button>
                    <button type="button" class="btn btn-dark"><i class="fas fa-code-branch"></i></button>
                </div>
            </div>
        
        <div class="texto">
            <div class="row">
                <div class="col-md-12" style="text-align: center;" id="vista_listado">
                </div>
            </div>
        </div>
    </div>






    <div id="detalles">

                <div class="row">
                    <div class="col-xs-12">
                      
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-md-10" id="lista">
                            </div>
                            
                         

                            
                            <div class="col-md-12" id="contenido_cotizaciones">
                                <div class="bs-component contenido_cotizaciones_dark  contenido_cotizaciones_top">
                                

                                    <div class="row">                                        
                                        <div class="col-md-12"  style="z-index:999;">
                                            <div class="col-xs-10">
                                                <h4 type="text" class="jmy_web_div" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="nombre_cotizaciones" data-editor="no"><?php $this->pnt('nombre_cotizaciones','Error al cargar nombre de cotización, edite este campo para corregirlo.'); ?></h4>
                                            </div>
                                            <div class="col-xs-2" >
                                                <button type="button" class="btn btn-flat btn-dark btn-sm btn-outline-warning ver_ocultar_opciones_cotizacion" style="float: right;"><i class="fa fa-chevron-up"> </i> </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 ver_ocultar_opciones_cotizacion_div">
                                            <div class="col-sm-12 col-md-4 btn-group herramientas_botones " id="herramientas_botones"></div>
                                            <div class="col-sm-12 col-md-8">
                                                <div class="btn-group  btn-group-sm" style="float: right;" role="group" aria-label="Basic example" aria-label="Button group with nested dropdown">
                                                
                                                    <button type="button" class="btn btn-dark vista_cotizacion active"><i class="fa fa-pencil"></i> &nbsp;Editar cotización</button>
                                                    <button type="button" class="btn btn-dark vista_cotizacion"><i class="fa fa-sticky-note"></i> &nbsp;Notas</button>
                                                    <button type="button" class="btn btn-dark vista_publica"><i class="fa fa-link"></i> &nbsp;Vista publica</button>
                                                    <button type="button" class="btn btn-dark vista_copiar_cotizacion"><i class="fa fa-copy"></i> &nbsp;</button>
                                                                                                
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="bs-component contenido_cotizaciones_dark contenido_cotizaciones_scroll contenido_cotizaciones">
                                    <div id="vista_anotaciones">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>Esta sección es oculta a la vista pública. Aquí podrás guardar notas y/o archivos eferente a la realización de esa cotización</p>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="jumbotron jumbotron-fluid">
                                                    <div class="container <?php echo($data['editor'])?'jmy_web_div':'';?>" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="nota_cotizacion" ><?php $this->pnt('nota_cotizacion','<h1 class="display-4">Observaciones sobre la cotización</h1><p class="lead">Modifique esta sección para guardar notas</p>'); ?></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <?php /*
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
                                                        ]);*/
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="vista_publica">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="jmy_web_slider" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"   id="foto_cotizacion"  data-marco="foto_cotizacion"  <?php 
                                                                            $va=[];
                                                                            $va[] = [ "type"=>"imagen",
                                                                                "id"=>"logo_cotizacion",
                                                                                "width"=>"250",
                                                                                "height"=>"126",
                                                                                "url"=>'https://comsis.mx/panel_beta//source/8e296a067a37563370ded05f5a3bf3ec/directorio/1522257546/archivos/logo_688x349%20Alpha.png'  ];  ?>  data-var='<?php echo json_encode($va); ?>'></div>
                                                <img src="<?php $this->pnt('logo_cotizacion','https://comsis.mx/panel_beta//source/8e296a067a37563370ded05f5a3bf3ec/directorio/1522257546/archivos/logo_688x349%20Alpha.png'); ?>" width="250">
                                            </div>
                                            <div class="col-xs-7">
                                                <h2 class=" <?php echo($data['editor'])?'jmy_web_div':'';?>" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="titulo_top" data-editor="no" style="font-weight: 100;"><?php $this->pnt('titulo_top','Cotización de desarrollo web'); ?></h2>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <p class=" <?php echo($data['editor'])?'jmy_web_div':'';?>" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="presente" data-editor="no"><?php $this->pnt('presente','<small>Presente</small><br><b>'.$data['nombre_cliente'].'</b><br><br><b>Proyecto: </b> Redes sociales'); ?></p>
                                            </div>
                                            <div class="col-xs-4">
                                                <ul class=" <?php echo($data['editor'])?'jmy_web_div':'';?>" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="generales" data-editor="no"><?php $this->pnt('generales','<li>Código de cotización <span>'.$data['pagina'].'</span></li><li>Fecha: <span>'.date('Y-m-d H:i').'</span></li> '); ?></ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> descripcion_cotizacion  " id="descripcion_cotizacion" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('descripcion_cotizacion','<h3>Descripción</h3><p>Texto.</p>'); ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> propuesta_cotizacion  " id="propuesta_cotizacion" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('propuesta_cotizacion','<h3>Propuesta</h3><p>Texto </p>'); ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> metodo_planeacion_cotizacion  " id="metodo_planeacion_cotizacion" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('metodo_planeacion_cotizacion','<h3>Método de planeación</h3><p>Texto </p>'); ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> inicio_planeacion_cotizacion  " id="inicio_planeacion_cotizacion" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('inicio_planeacion_cotizacion','<h3>Inicio del proyecto</h3><p>Texto </p>'); ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> grupo_de_trabajo  " id="grupo_de_trabajo" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('grupo_de_trabajo','<h3>Equipo de trabajo</h3><p>Texto </p>'); ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> propuesta_visual  " id="propuesta_visual" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('propuesta_visual','<h3>Propuesta visual</h3>'); ?></div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="jmy_web_contador"  data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>" id="no_imagenes_cotizacion" data-value="<?php $this->pnt('no_imagenes_cotizacion','2'); ?>" data-titulo="Número de imagenes"></div>

                                                <div class="jmy_web_slider"  data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="marco_propuesta_visual"  data-marco="marco_propuesta_visual"  <?php                   $no_imagenes_cotizacion = $this->pnt('no_imagenes_cotizacion','2',['return'=>true]);
                                                $va= [];
                                                for ($i=0; $i < $no_imagenes_cotizacion ; $i++) { 
                                                    $va[] = [ 
                                                        "type"=>"imagen",
                                                        "id"=>"imagenes_cotizacion_".$i,
                                                        "idadd"=>"imagenes_cotizacion_".$i,
                                                        "class"=>"imagenes_cotizacion_".$i,
                                                        "background"=>"imagenes_cotizacion_".$i,
                                                        "width"=>"1000",
                                                        "height"=>"0",
                                                        "porcional"=>true
                                                    ]; 
                                                }
                                                ?>  data-var='<?php echo json_encode($va); ?>'></div>

                                            </div>
                                            
                                            <div class="col-xs-12">
                                                <div class="gallery">
                                                    <div class="row">
                                                        <?php
                                                        $col =($no_imagenes_cotizacion<3)?6:4;
                                                        $col =($no_imagenes_cotizacion>6)?3:$col;
                                                        for ($i=0; $i < $no_imagenes_cotizacion; $i++) { 
                                                            $img = $this->pnt('imagenes_cotizacion_'.$i,'http://social.comsis.mx/templet/images/logo.png',["return"=>true]);
                                                            echo '<div class="col-md-'.$col.' col-sm-'.$col.'"><div class="image">
                                                                <a href="'.$img.'" class="image-popup">
                                                                    <div class="bg-transfer  imagenes_cotizacion_'.$i.'" style="background-image: url('.$img.'); height:110px; border-radius:5px;"><img src="'.$img.'" id="imagenes_cotizacion_'.$i.'" alt=""></div>
                                                                </a>
                                                                <h4 class="jmy_web_div" data-page="'.$data['pagina'].'" data-tabla="'.$data['tabla'].'"
                                                                id="imagenes_cotizacion_h4_'.$i.'" data-editor="no">'.$this->pnt('imagenes_cotizacion_h4_'.$i,'Propuesta visual '.($i+1),["return"=>true]).'</h4>
                                                                <p class="jmy_web_div" data-page="'.$data['pagina'].'" data-tabla="'.$data['tabla'].'" id="imagenes_cotizacion_p_'.$i.'" data-editor="no">'. $this->pnt('imagenes_cotizacion_p_'.$i,'Justificacion de la propuesta',["return"=>true]).'</p>
                                                            </div></div>';
                                                        }?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> propuesta_economica  " id="propuesta_economica" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('propuesta_economica','
                                                <h3>Propuesta económica</h3>
                                                    <table style="height: 40px;" width="100%">
                                                    <tbody>
                                                    <tr>
                                                    <td style="text-align: left;">Costo del&nbsp;desarrollo web</td>
                                                    <td style="text-align: right;"><span style="text-align: start;">&nbsp;$ 12,000. 00&nbsp;</span>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="text-align: left;">Descuento desarrollo web (CODE:RECOMIENDA)</td>
                                                    <td style="text-align: right;">40%(-$4,800)</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="text-align: left;">Mantenimiento y soporte anual web Hosting</td>
                                                    <td style="text-align: right;">$&nbsp; 2,900. 00</td>
                                                    </tr>
                                                    <tr>
                                                    <td style="text-align: left;">Costo total del proyecto</td>
                                                    <td style="text-align: right;"><span style="text-align: start;">$10,100.00</span></td>
                                                    </tr>
                                                    <tr>
                                                    <td style="text-align: left;">&nbsp;Anticipo mínimo</td>
                                                    <td style="text-align: right;"><span style="text-align: start;">50%</span>&nbsp;</td>
                                                    </tr>
                                                    </tbody>
                                                    </table>
                                                    <h5>&nbsp; *El pago restante deberá realizarse en la segunda etapa para la liberación del proyecto.</h5>
                                                    <h3 style="text-align: center;">Servicios de mantenimiento y soporte&nbsp;</h3>
                                                    <p>El servicio de mantenimiento sirve para que el portal web se encuentre actualizado en información para un posicionamiento en google y software para el correcto funcionamiento.</p>
                                                    <table style="height: 78px;" width="100%">
                                                    <tbody>
                                                    <tr>
                                                    <td style="text-align: center;">
                                                    <h4>&nbsp;Plan 1 Mensual&nbsp;</h4>
                                                    </td>
                                                    <td style="text-align: center;">
                                                    <h4>&nbsp;Plan 2 Eventual</h4>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td style="text-align: center;">&nbsp;Desde $1,799.00<br> <a class="btn ink-reaction btn-raised btn-primary" href="http://social.comsis.mx/paquetes">Ver mas planes</a></td>
                                                    <td style="text-align: center;">&nbsp;Desde $250.00 <br>1 Modificación</td>
                                                    </tr>
                                                    <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                    <td valign="top">
                                                    <ul>
                                                    <li>Altas, bajas y modificaciones de contenido.</li>
                                                    <li>Retoque de fotografías o imágenes.</li>
                                                    <li>Gestión de anuncios patrocinados para facebook.</li>
                                                    <li>Mantenimiento del desarrollo web.</li>
                                                    <li>Mantenimiento del CORE web.</li>
                                                    <li>Soporte técnico extendido respuesta en menos de 12 horas (Dessarrollo web, correos electronicos, servidor web)</li>
                                                    </ul>
                                                    </td>
                                                    <td valign="top">
                                                    <ul>
                                                    <li>Altas, bajas y modificaciones de contenido.</li>
                                                    <li>Retoque de fotografías o imágenes.</li>
                                                    <li>Mantenimiento del CORE web.</li>
                                                    <li>Soporte técnico extendido respuesta en menos de 12 horas (Dessarrollo web, correos electronicos, servidor web)</li>
                                                    </ul>
                                                    </td>
                                                    </tr>
                                                    </tbody>
                                                    </table>
                                                    <p>&nbsp;</p>
                                                    <p>&nbsp;</p>'); ?></div>
                                            </div>
                                        </div>



                                        

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="divs_cotizaciones <?php echo($data['editor'])?'jmy_web_div':'';?> observaciones  " id="observaciones" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('observaciones','<h3>Observaciones de la Propuesta</h3>
                                                <ul>
                                                <li>El proyecto cuenta con un tiempo establecido, si se solicitan cambios fuera de tiempo se realizará un cobro extra.</li>
                                                <li>Precios expresados en pesos mexicanos.</li>
                                                <li>Precios no incluyen I.V.A.</li>
                                                <li>Precios no incluyen desarrollos de medios adicionales tales como videos, producción musical. redacción de documentos, guías, social games, inventario de tienda en línea y creación de redes sociales.</li>
                                                <li>La cotización se encuentra sujeta al cambio del Dólar.</li>
                                                <li>El contenido de las propuestas graficas son ficticias con el propósito de visualizar el diseño.</li>
                                                <li>La tranferencia de dominio tendra un costo extra de 30 dlls.</li>
                                                </ul>
                                                <p>Sin otro particular, reciba un cordial saludo.</p>
                                                <p><strong>Juan Martinez&nbsp;</strong><br>Desarrollador Web<br>CONCOMSIS<br><strong><a href="mailto:jm@comsis.mx">jm@comsis.mx</a></strong><br><strong>Oficina: 6390 2120&nbsp;</strong><br><strong>Celular: 55 2905 6979</strong></p>'); ?></div>
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
</div>
