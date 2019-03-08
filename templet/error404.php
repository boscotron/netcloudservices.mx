<?php
 $page=($data['page']!='')?$data['page']:'404'; 
 $this->cargar(["pagina"=>$page]);
 ?>

<h1 class="large jmy_web_div" data-page="<?php echo $page; ?>" id="titulo" data-editor="no">
    <?php $this->pnt('titulo','UPS ): Error 404'); ?></h1>
<div class="jmy_web_div texto" data-page="<?php echo $page; ?>" id="texto" data-editor="on">
    <?php $this->pnt('texto','<p> No se encontró la página a la que estas intentando acceder o esta fuera de servicio por el momento</p> 
    '); ?>
    </div>
                           