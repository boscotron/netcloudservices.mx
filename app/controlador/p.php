<?php
$config=[
    "nombre_seccion"=>"Páginas",
    "url_seccion"=>"p",
    "tabla"=>"pagina",
    "vista_pagina"=>"pagina",
    "lista_pagina"=>"lista_pagina",
    "breadcrum"=>true
];
$pet = explode('/', strtolower($_GET['peticion'])); 
$url = (trim($pet[0])!='')?trim($pet[0]):''; 
if($url=='instalar')
    $jmyWeb ->pre(['p'=>($jmyWeb->modoEditor())?$jmy->db([$config['tabla']]):['No hay sessión iniciada'],'t'=>'Instalacaión']);
if($url!=''){
    $out = $jmyWeb->cargar(["pagina"=>$url,"tabla"=>$config['tabla']]);
    $out['page'] = $url;
    $out['tabla'] = $config['tabla'];
    $out['nombre_seccion'] = $config['nombre_seccion'];
    $out['url_seccion'] = $config['url_seccion'];
    $out['breadcrum'] = $config['breadcrum'];
    if($jmyWeb->modoEditor() || count($out['otKey'])>0)
        $jmyWeb->cargar_vista(["url"=>$config['vista_pagina'].".php","data"=>$out]);
    else
        $jmyWeb->cargar_vista(["url"=>"error404.php","data"=>['page'=>"404".$config['vista_pagina']]]);
}else{
    $jmyWeb->cargar(["pagina"=>$config['lista_pagina'],"tabla"=>$config['tabla']]);
    $lista = $jmy->ver([	
        "TABLA"=>$config['tabla'] ,
        "COLUMNAS"=>["titulo","imagen","url","fecha"],
        "SALIDA"=>"ARRAY"
    ]);
    //$jmyWeb ->pre(['p'=>$lista,'t'=>'lista']);
    $jmyWeb->cargar_vista([
        "url"=>$config['lista_pagina'].".php",
        "data"=>['page'=>$config['lista_pagina'],"tabla"=>$config['tabla'],"lista"=>$lista['otFm'],"url_seccion"=>$config['url_seccion']]
    ]);
}
?>