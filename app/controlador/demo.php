<?php
$pet=explode('/',$_GET['peticion']);
//$jmyWeb ->pre(['p'=>$pet,'t'=>'TITULO_ARAY']);
switch($pet[0]):
	case 'smartphone':
		$vista='demo-smartphone.php';
	break;
	default:
		$vista='demo.php';
	
endswitch;
//$jmyWeb ->pre(['p'=>$vista,'t'=>'TITULO_ARAY']);
$jmyWeb ->cargar_vista(["url"=>$vista]);

?>