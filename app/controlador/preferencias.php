<?php

$out = $jmyWeb->cargar(["pagina"=>$url,"tabla"=>$config['tabla']]);

$jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/boosttrapTheme.css','unico'=>true]);
$jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/clientes.css','unico'=>true]);
$jmyWeb->cargar_js(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/clientes.js','unico'=>true]);
$jmyWeb->cargar_vista(['url'=>'clientes.php']);                