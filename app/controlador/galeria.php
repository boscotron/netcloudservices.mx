<?php 
$pagina = "galeria";
$jmyWeb->cargar(["pagina"=>$pagina]);
$jmyWeb ->cargar_js(["url"=>$jmyWeb ->cdn(["return"=>true])."app/jmyweb/v1/assets/js/contacto.js"]);
$jmyWeb ->cargar_vista(["url"=>$pagina.'.php']);

?>