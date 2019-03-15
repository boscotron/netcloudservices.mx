<?php 

$pet = explode("/",$_GET['peticion']);

if($pet[0]=='__'&&$pet[1]=='auth'){
	$url= $jmyWeb->url_actual(['return'=>true]);
	$u=explode(RUTA_ACTUAL,$url);
	$jmyWeb ->redireccionar($jmyWeb->url_inicio(['return'=>true])."oauth/".$u[1]);
}

$out = $jmy->ver([	
			"TABLA"=>"blog", 		
			"COLUMNAS"=>["titulo","subtitulo","imagen_1","url","fecha","sub_titulo"],
			"SALIDA"=>"ARRAY"
			//"FO"=>true
			//"ID_F"=>'blog'
		]);
$t = $jmyWeb->cargar(["pagina"=>"inicio"]);
//$jmyWeb ->pre(['p'=>$t,'t'=>'TITULO_ARAY']);


$jmyWeb ->cargar_js(["url"=>$jmyWeb->url_templet(['return'=>true])."assets/js/inicio.js"]);
/* $jmyWeb ->cargar_js(["url"=>$jmyWeb ->cdn(["return"=>true])."app/jmyweb/v1/assets/js/contacto.js"]); */
$jmyWeb ->cargar_vista(["url"=>"inicio.php","data"=>["blog"=>$out['otFm']]]);

?>