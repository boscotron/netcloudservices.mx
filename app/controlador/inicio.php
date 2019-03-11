<?php 

$pet = explode("/",$_GET['peticion']);

//$_SESSION['lenguaje']=($_SESSION['lenguaje']!='')?"es":$_SESSION['lenguaje'];
/*
$out = $jmy->ver([	
			"TABLA"=>"blog", 		
			"COLUMNAS"=>["titulo","subtitulo","imagen_1","url","fecha","sub_titulo"],
			"SALIDA"=>"ARRAY"
			//"FO"=>true
			//"ID_F"=>'blog'
		]);
		*/
$l=(in_array($_SESSION['lenguaje'],['es','en']))?$_SESSION['lenguaje']:'es';
$t = $jmyWeb->cargar(["pagina"=>"inicio_".$l]);
//$jmyWeb ->pre(['p'=>$l,'t'=>'TITULO_ARAY']);


$jmyWeb ->cargar_js(["url"=>$jmyWeb->url_templet(['return'=>true])."assets/js/inicio.js"]);
$jmyWeb ->cargar_vista(["url"=>"inicio.php","data"=>["blog"=>$out['otFm'],"page"=>"inicio_".$l]]);

?>