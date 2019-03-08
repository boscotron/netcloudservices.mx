<?php 
$data=$data['data'];
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
$this ->pre(['p'=>$data,'t'=>'TITULO_ARRAY']);
?>
<input type="hidden" id="url_ver" value="<?php echo ($data['peticiones']!='')?$data['peticiones'][0]:''; ?>">
<input type="hidden" id="url_templet" value="<?php $this->url_templet(); ?>">
<input type="hidden" id="url_inicio" value="<?php $this->url_inicio(); ?>">
<input type="hidden" id="id_cliente" value="<?php echo $data['id_cliente']; ?>">
<input type="hidden" id="nombre_cliente" value="<?php echo $data['nombre_cliente']; ?>">
<!--PAGE-->
<div id="zoom"><img src=""></div>
<?php if($data['animacion']){?><div id="page">
    <div class="cd-background-wrapper">
        <figure class="cd-floating-background">
            <div class="base-layer dark-overlay">
                <div class="slider"></div>
            </div>
            <!--end layer-->
            <!--end layer-->
            <div class="layer animate" data-layer-depth="200" >
                <div id="content">             
                    <div class="content-wrapper">
                        <div class="container esporas" >     
                            <canvas id="displayCanvas" ></canvas>
                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <div class="layer animate" data-layer-depth="600">
                <div id="content">             
                    <div class="content-wrapper">
                        <div class="container opacity90">     
                            
                        <img src="<?php $this->pnt('logo_cliente',$this->url_templet(['return'=>true]).'assets/img/marca_fondo_logo.png'); ?>" id="imagen" alt="" class="zoom-in clip-svg maskimg logo_cliente">

                            <svg width="0" height="0">
                            <defs>
                                <clipPath id="myClip">
                                <circle cx="400" cy="300" r="300"/>
                                </clipPath>
                            </defs>
                            </svg>

                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <div class="layer animate" data-layer-depth="900">
                <div id="content">             
                    <div class="content-wrapper">
                        <div class="container opacity30">     
                            <img src="<?php $this->url_templet(); ?>assets/img/logo_layer_1.png" class="logo_layers" alt="">
                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <!--end layer-->
            <div class="layer animate" data-layer-depth="600">
                <div id="content">               
                    <div class="content-wrapper">
                        <div class="container opacity40">       
                    <img src="<?php $this->url_templet(); ?>assets/img/logo_layer_2.png" class="logo_layers" alt=""> 
                        </div>
                    </div>                                 
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <!--end layer-->
            <div class="layer animate" data-layer-depth="750">
                <div id="content">			
                    <div class="content-wrapper">
                        <div class="container opacity50">    		
                    <img src="<?php $this->url_templet(); ?>assets/img/logo_layer_3.png" class="logo_layers" alt=""> 
                        </div>
                    </div>                                 
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <div class="layer animate pointer-events-none" data-layer-depth="500">
                <div id="particles-js"></div>
            </div>
            <!--end layer-->
            <div class="layer animate" data-layer-depth="1000">
                <div id="content">
                    <div class="content-wrapper bsk">
                        <div class="container texto_movil">
                            <div class="brand">
                                <a href="<?php $this->url_inicio(); ?>">
                                    <img src="<?php $this->url_templet(); ?>assets/img/logo.png" alt="">
                                </a>
                            </div>
                            <!--end brand-->
                            <div class="heading">
                                
                              
                            
                            </div>
                            <!--end heading-->
                        </div>
                        <!--end container-->
                    </div>
                    <!--end content-wrapper-->
                </div>
                <!--end content-->
            </div>
        </figure>
        <!--end cd-floating-background-->
    </div>
    <!--end cd-background-wrapper-->
</div> <?php } ?>
  
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
                    

        <h1 class="large jmy_web_div" data-tabla="<?php echo $tabla; ?>" data-page="<?php echo $page; ?>" id="titulo_lista" data-editor="no">
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
        <div class="row">
            <?php include('templet/dashboard-clientes-menu.php'); ?>
            
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 ">
                <div class="row">
                    <div class="col-md-10" id="lista">
                    </div>
                    <div class="col-md-6" >
                       
                        <div class="col-xs-8 offset-xs-4 col-md-8 offset-md-4 col-lg-6 offset-lg-3 " >
                                <div class="jmy_web_slider" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"  id="marco_logo_cliente"  data-marco="marco_logo_cliente"  <?php 
                                                        $marco_logo_cliente[] = [ "type"=>"imagen",
                                                            "id"=>"logo_cliente",
                                                            "class"=>"logo_cliente",
                                                            "width"=>"800",
                                                            "height"=>"700",
                                                            "url"=>$this->url_templet(["return"=>true]).' images/slides/sv1.jpg'  ];  ?>  data-var='<?php echo json_encode($marco_logo_cliente); ?>'></div>
                            <figure class="snip1566 "><img  class="logo_cliente" src="<?php $this->pnt('logo_cliente',$this->url_templet(['return'=>true]).'assets/img/marca_fondo_logo.png'); ?>" alt="Cliente Cliente de Marco"><figcaption><i class="fa fa-photo"></i></figcaption></figure>
                        </div>
                        <div type="json_campos" class="jmy_web_administrador col-md-12" id="detalles_clientes" data-tabla="clientes_" data-page="test" >Error al cargar Módulo</div>
                    </div>
                    <div class="col-md-6" >
                        <div class="bs-component">
                            <div class="jumbotron jmy_web_div" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>" id="pizzarra_cliente" data-editor="no"><?php $this->pnt('pizzarra_cliente','<h1 class="display-3">Hola!</h1><p class="lead">Útiliza esta área para dar avisos importantes sobre este cliente</p>'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12" id="contenido">
                        
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
<!-- Modal -->
<div class="ventana " tabindex="-1" id="alerta" >
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

