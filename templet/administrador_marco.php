<div col="row " style="position: absolute;width: 100%;z-index: 99999;">
    <div col="col-md-12" >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

<div col="row">
    <div col="col-md-12">
        <?php 
        if(file_exists($data['url_marco']))
            include_once($data['url_marco']);
        else
            $this->pre(['p'=>['No se pudo cargar este módulo, consultelo con su administrador',$data['url_marco']],'t'=>'Error']);
        ?>
    </div>
</div>