<?php
$jmyWeb->cargar_js(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/js/borrar-cookie.js?d='.date('U'),'unico'=>true]);
$jmyWeb->cargar_vista(['url'=>'borrar-cookie.php']);