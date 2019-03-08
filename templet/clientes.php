<?php 
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
?>

<div class="" id="dashboard">
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
        <?php $this->pnt('titulo_lista','Título de la página'); ?></h1>
        
        <?php 

        //  echo ($this->pnt('imagen','',['return'=>true])!='')?'&nbsp;  <a href="'. $this->pnt('imagen','',['return'=>true]).'" class="image-popup" ><i class="fa fa-picture-o " data-idzoom="imagen" aria-hidden="true"></i></a>':'';
        ?>
    <div class="texto">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
            <?php for ($i=0; $i < 10 ; $i++) { 
                echo '
                <figure class="snip1566">
                <img src="'. $this->url_templet(['return'=>true]).'/assets/img/marca_fondo_logo.png" alt="sq-sample14" />
                <figcaption><i class="ion-android-add"></i></figcaption>
                <a href="#"></a>
                </figure>';
            }?>

            </div>
        </div>
    </div>
</div>