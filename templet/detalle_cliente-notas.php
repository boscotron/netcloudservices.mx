<?php 
$data=$data['data'];
$animacion = $data['animacion'];
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
//$this ->pre(['p'=>$data['peticiones'],'t'=>'TITULO_ARRAY']);
?>

<input type="hidden" id="id_nota" value="<?php echo $data['id_fn_ver']; ?>">
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
                    <div class="col-xs-12 col-sm-12  ">
                        <div class="row">
                            <div class="col-md-10" id="lista">
                            </div>
                            
                            <div class="col-md-12 btn-group herramientas_botones " id="herramientas_botones">
                            </div>

                            
                            <div class="col-md-0" id="contenido_notas">
                                <div class="bs-component dark ">
                                    <div class="contenido_nota">
                                    



                                        <h3 class="divs_notas <?php echo($data['editor'])?'jmy_web_div':'';?>  sombra" id="nombre_notas" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>" data-editor="no" ><?php $this->pnt('nombre_notas','Titulo nota'); ?></h1>   
                                        

                                          

                                            
                                        <div class="divs_notas <?php echo($data['editor'])?'jmy_web_div':'';?> contenido_nota contenido_nota_dark sombra" id="contenido_nota" data-page="<?php echo $data['pagina']; ?>" data-tabla="<?php echo $data['tabla']; ?>"><?php $this->pnt('contenido_nota','<h3>Hola Mundo!!</h3><p class="lead">Nueva nota.</p><hr class="my-4"><p>De click en este espacio para editar esta nota nueva.</p>'); ?></div>






                                            
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
