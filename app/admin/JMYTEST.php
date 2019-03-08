<?php
$g=$jmy->guardar([	"TABLA"=>"formularios_contacto", 
					"A_D"=>TRUE, 
					"GUARDAR"=>["algoTron".rand(10,99)=>rand(10,99)],
					"FO"=>true
					]);
					
$jmyWeb ->pre(['p'=>$g,'t'=>'TITULO_ARAY']);