<?php
$pet = explode('/', strtolower($_GET['peticion'])); 

switch ($pet[0]) {
    case 'cotizacion':
        if($pet[1]!='' && $pet[2]!='' ){
            
            $out = $jmyWeb->cargar(["pagina"=>$pet[2],
            "tabla"=>'cotizaciones_'.$pet[1],
            ]);
            //$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARRAY']);
            $jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/clientes.css','unico'=>true]);
            $jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/cotizaciones.css','unico'=>true]);
            $jmyWeb->cargar_js(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/js/publico-cotizacion.js?d='.date('U'),'unico'=>true]);
            $jmyWeb->cargar_vista(['url'=>'publico-cotizacion.php','data'=>['pagina'=>'sin_codigo','animacion'=>true]]);
        }else{
            //$jmyWeb ->pre(['p'=>'No hay código de cotizacion','t'=>'Error']);
            $jmyWeb->cargar_vista(['url'=>'error404.php','data'=>['pagina'=>'sin_codigo']]);
        }
    break;
    
    default:
        # code...
        break;
}