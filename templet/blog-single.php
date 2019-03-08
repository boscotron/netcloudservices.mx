<?php
$page = $data['page']; 
$tabla="blog";

?>
<!--PAGE-->
<div id="page">
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
            <div class="layer animate" data-layer-depth="450">
                <div id="content">             
                    <div class="content-wrapper"> 
                        <div class="container">     
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
                        <div class="container">       
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
                        <div class="container">    		
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
                                <h1 class="large jmy_web_div" data-tabla="<?php echo $tabla; ?>" data-page="<?php echo $page; ?>" id="titulo" data-editor="no">
                                    <?php $this->pnt('titulo','Título de la página'); ?></h1>
                                <div class="jmy_web_div texto"  data-tabla="<?php echo $tabla; ?>" data-page="<?php echo $page; ?>" id="texto" data-editor="on">
                                    <?php $this->pnt('texto','<p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> 
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> 
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> 
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> 
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                                    <p> Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p> 
                                    '); ?>
                                    </div> 
                            
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
</div>
<!--end page-->

<!--SIDE PANEL-->

<!--end side-panel-->