<?php
if($tk = $jmyWeb->sesion()){    
    $out['modulos']=$jmyWeb->modulos(['id'=>$out['id'],'modulos_permisos'=>false]);
    $out['modulos']=$out['modulos']['modulos_permisos'];
   // $out['token']=$tk;
    $out['usuario_session']=$tk['user']['user_id'];
    $out['id_empresa']=$tk['body']['api_web']['ID_F'];
    $config=[
        "nombre_seccion"=>"Dashboard",
        "url_seccion"=>"dashboard",
        "id_cliente"=>"",
        "tabla"=>"dashboard",
        "modulos_activos"=>"clientes,notas,tareas,usuarios,cotizaciones,proyectos,presentaciones,presentacion_detalles",
        /* Configuracion dashboard/usuarios TERMINADO */
        "tabla_usuarios"=>"usuarios",
        "variables_negadas_usuarios"=>"nombre,url,columnas,buscar,buscar_por",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_usuarios"=>"",// si se deja vacio no ejecuta la regla
        
        /* Configuracion dashboard/clientes  TERMINADO */
        "tabla_clientes"=>"clientes",
        "variables_negadas_clientes"=>"nombre,url,columnas,buscar,buscar_por",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_clientes"=>"",// si se deja vacio no ejecuta la regla
        
        /* Configuracion dashboard/notas TERMINADO*/
        "tabla_notas"=>"notas",
        "variables_negadas_notas"=>"nombre,url,columnas,buscar,buscar_por,usuario_vista_eliminar,usuario_vista",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_notas"=>"",// si se deja vacio no ejecuta la regla

        /* Configuracion dashboard/cotizaciones TERMINADO*/
        "tabla_cotizaciones"=>"cotizaciones",
        "variables_negadas_cotizaciones"=>"nombre,url,columnas,buscar,buscar_por,usuario_vista_eliminar,usuario_vista",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_cotizaciones"=>"",// si se deja vacio no ejecuta la regla
        
        /* Configuracion dashboard/presentaciones TERMINADO*/
        "tabla_presentaciones"=>"presentaciones",
        "variables_negadas_presentaciones"=>"nombre,url,columnas,buscar,buscar_por,usuario_vista_eliminar,usuario_vista",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_presentaciones"=>"",// si se deja vacio no ejecuta la regla
		
        /* Configuracion dashboard/proyectos TERMINADO*/
        "tabla_proyectos"=>"proyectos",
        "variables_negadas_proyectos"=>"nombre,url,columnas,buscar,buscar_por,usuario_vista_eliminar,usuario_vista",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_proyectos"=>"",// si se deja vacio no ejecuta la regla
        
        /* Configuracion dashboard/tareas */
        "tabla_tareas"=>"tareas",
        "variables_negadas_tareas"=>"nombre,url,columnas,buscar,buscar_por",// si se deja vacio no ejecuta la regla
        "variables_aceptadas_tareas"=>"",// si se deja vacio no ejecuta la regla
        
    ];
    $pet = explode('/', strtolower($_GET['peticion'])); 
    $url = (trim($pet[0])!='')?trim($pet[0]):''; 
    if(trim($pet[1])!=''){
        unset($pet[0]); $peticiones=explode(',',implode(',',$pet));
    }
    $out['peticiones']=$peticiones;
    $tabla='';$negadas=[];$aceptadas=[];
    if($url=='instalar'){
        $t=explode(',',$config['modulos_activos']);
        for ($i=0; $i <count($t) ; $i++) { $t[$i]=$t[$i].'_'.$out['id_empresa'];  }
        $jmyWeb ->pre(['p'=>($jmyWeb->modoEditor())?$jmy->db($t):['No hay sessión iniciada'],'t'=>'Instalación']);
    }

    if($peticiones==''){
        $out['error']='Sin peticiones';
        $out['peticiones_disponibles']='Sin peticiones';
    }else{ // carga la configuracion del módulos
        $tabla = ($tabla!='')?$tabla:$config['tabla_'.$url];
        $negadas=(count($negadas)<1)?explode(',',$config['variables_negadas_'.$url]):[];
        $aceptadas=(count($aceptadas)<1 && $config['variables_aceptadas_'.$url]!='')?explode(',',$config['variables_aceptadas_'.$url]):[];
    }
    $out['columnasT'] =$_POST['columnas']; 
    //$out['p'] =$_POST; 
    
    //if(in_array('token',$peticiones))
        $out['tk']=$tk;
  
    if(in_array('lista',$peticiones)){ //////////////////////////// LISTA /////////////////////////////////////////////
        $out['p']=$_POST;
        $i_p=$_POST['id_padre'];
        $out['lista'] = [];
        $out['filtro'] = [];
        $bandera=true;
        foreach ($out['modulos'] as $v) {
            $out['modulo'][$v['modulo']]=$v['permiso'];
        } 
        if($i_p['c']!='' && $i_p['v']!=''){ // restringe la busqueda por un id padre
            $out['lista'] = $jmy->ver([	
                "TABLA"=>$tabla.'_'.$out['id_empresa'],
                "COL"=>[$i_p['c']],
                "V"=>[$i_p['v']],
                "FO"=>true,
                ]);            
            //$out['filtro'][]=['primer filtro',$i_p['c'],$i_p['v'],$out['lista'] ];
            $id =$out['lista']['otKey'];
            $bandera=(count($out['lista']['otKey'])>0)?true:false;
        }else{
            $bandera=true;
            if($_POST['id']!='')
                $id =(is_array($_POST['id']))?$_POST['id']:[$_POST['id']];
        }
       // $out['bandera'] = $bandera;
        if($bandera){
            $out['bandera-id'] = $id;                      
            if($out['modulo'][$tabla]<4 && $tabla!='usuarios'){
                $out['lista_p'] = $jmy->ver([	
                    "TABLA"=>$tabla.'_'.$out['id_empresa'],
                    "ID"=>(count($id)>0)?$id:null,
                    "COL"=>['estado'],
                    "V"=>['restringido','todos'],
                    "FO"=>true,
                    ]);            
              // $out['filtro'][]=['permiso -4pre filtro',$out['lista_p'] ];
                $out['lista_p']['otKey']=(count($out['lista_p']['otKey'])>0)?$out['lista_p']['otKey']:null;
                $out['lista'] = $jmy->ver([	
                    "TABLA"=>$tabla.'_'.$out['id_empresa'],
                    //"ID"=>(count($out['lista_p']['otKey'])>0)?$out['lista_p']['otKey']:null,
                    "ID"=>(count($id)>0&&$id!=null&&$id!='null')?$id:$out['lista_p']['otKey'],
                    "COL"=>['usuario_editor','usuario_vista'],
                    "LIKE_V"=>[$out['tk']['user']['user_id']],
                    "FO"=>true,
                    ]);            
                    //$out['filtro'][]=['permiso -4 filtro',$out['lista'] ];
                for ($i=0; $i < count($out['lista_p']['otKey']); $i++) { 
                    if($out['lista_p']['ot'][$out['lista_p']['otKey'][$i]]['estado']=='todos')
                        $out['lista']['otKey'][]=$out['lista_p']['otKey'][$i];
                }
               //$out['filtro'][]=['permiso -4 filtro final',$out['lista'] ];
            }else{$out['error'][]='No tiene los suficientes permisos o es una consulta denegada';}
            $out['columnas'] =($_POST['columnas']!='' && $_POST['columnas']!='TODAS_LAS_COLUMNAS')? explode(',',$_POST['columnas']):[];
            if(!$_POST['des_filtro_nombre']){
                $out['columnas'] =(count($out['columnas'])>0)? $out['columnas']:['nombre_'.$config['tabla_'.$url]];
            }
            $out['columnas']=($_POST['columnas']!='TODAS_LAS_COLUMNAS')?$out['columnas']:null;
            
            $out['lista'] = $jmy->ver([	
                "TABLA"=>$tabla.'_'.$out['id_empresa'],
                "COL"=>$out['columnas'],
                "SALIDA"=>"ARRAY",
                "ID_F"=>($_POST['id']!='')?$id:$out['lista']['otKey'],
                "FO"=>true
                ]);
            if(((is_array($out['p']['buscar'])&&count($out['p']['buscar'])>0) ||(is_array($out['p']['buscar_por'])&&count($out['p']['buscar_por'])>0) ) && count($out['lista']['otKey'])>0){ // busca por buscar o buscar_por 
                $out['lista'] = $jmy->ver([	
                    "TABLA"=>$tabla.'_'.$out['id_empresa'],
                    "V"=>$out['p']['buscar'],
                    "LIKE_V"=>$out['p']['buscar_por'],
                    "ID_F"=>$out['lista']['otKey'],
                    "FO"=>true,
                    ]);            
                //$out['filtro'][]=['segundo filtro buscador',$out['p']['buscar'],$out['p']['buscar_por'],$out['lista']];
                }        
            // $out['listab'] = $out['lista']['otKey'];
            if(is_array($out['columnas']) && count($out['lista']['otKey'])>0){
                $out['filtro'][]=['tercer filtro columnas',$out['columnas']];
                $out['lista'] = $jmy->ver([	
                    "TABLA"=>$tabla.'_'.$out['id_empresa'],
                    "COL"=>(count($out['columnas'])>0)?$out['columnas']:null,
                    "SALIDA"=>"ARRAY",
                    "FO"=>true,
                    "ID_F"=>$out['lista']['otKey'], 
                ]);    
            }
        }
    }
    if(in_array('editar',$peticiones)){//////////////////////////// EDITAR /////////////////////////////////////////////
        if($jmyWeb->modoEditor()){
            if($_POST['url']!=''){
                $out['ver'] = $jmy->ver([	
                    "TABLA"=>$tabla.'_'.$out['id_empresa'],
                    "COL"=>['url'],
                    "V"=>[$_POST['url']], 
                    ]);
                }
                $out['p']=$_POST;
                if($_POST['nombre']!='' || ($_POST['id']!='' && count($_POST)>1) ){
                    $t=($_POST['id']=='')?[
                        "fecha_creacion"=>date('U'),
                        "usuario_editor"=>$tk['user']['user_id'],
                        "usuario_vista"=>'',
                        "fecha_recordatorio"=>'',
                        "estado"=>'privado'
                    ]:[];
                    $out['id']=($_POST['id']!='')?$_POST['id']:uniqid();
                    $out['URLFriendly']=$jmyWeb->URLFriendly($_POST['nombre']);
                    $g=$_POST;
                    $gK=(is_array($g))?array_keys($g):0;
                    $out['fil']=[$aceptadas,$negadas];
                    for ($i=0; $i < count($gK); $i++) {                     
                        if((in_array($gK[$i],$aceptadas) || count($aceptadas)<1) && !in_array($gK[$i],$negadas))
                            $t[$gK[$i]]=$g[$gK[$i]];
                    }
                    if($_POST['nombre']!='')
                        $t['nombre_'.$config['tabla_'.$url]]=$_POST['nombre'];
                    /* FUNCIONES USUARIOS */
                    if($_POST['usuario_vista']!=''){
                        $out['ver'] = $jmy->ver([	
                            "TABLA"=>$tabla.'_'.$out['id_empresa'],
                            "COL"=>['usuario_vista'],
                            "ID_F"=>[$out['id']], 
                            ]);
                        $out['usuario_vista']=$out['ver']['ot'][$out['id']]['usuario_vista'];
                        $tb=($out['usuario_vista']!='')?json_decode($out['usuario_vista'],1):[];
                        if(!in_array($_POST['usuario_vista'],$tb)){
                            $tb[]=$_POST['usuario_vista'];
                        }else{
                            if($_POST['usuario_vista_eliminar']){
                                for ($i=0; $i <count($tb) ; $i++) { 
                                    if($tb[$i]==$_POST['usuario_vista'])
                                        unset($tb[$i]);
                                }
                            }
                        }
                        $t['usuario_vista'] = $tb;
                    }
                    $g=$t;
                $out['g']=$g;
                $g['url']=($g['url']!='')?$g['url']:'administrador/clientes/'.$tabla.'/'.$out['id'].'/'.$out['URLFriendly'];
                //$out['g']= 
                $jmy->guardar([	"TABLA"=>$tabla.'_'.$out['id_empresa'], 
                "ID_F"=>$out['id'], 
                "A_D"=>($out['modulo'][$tabla]<4)?1:0, 
                "GUARDAR"=>$g,
                ]);
            }
            if(in_array('calendario',$peticiones)){
                //$out['filtro_calendario']
            }
            if($out['id']!=''|| $_POST['id']!=''){
                $out['editar_p']=$_POST;
                $out['id']=($_POST['id']!=''&&$out['id']=='')?$_POST['id']:$out['id'];
                $out['ver']=$jmy->ver([
                    "TABLA"=>$tabla.'_'.$out['id_empresa'],
                    "COL"=>(is_array($_POST['columnas']) && count($_POST['columnas'])>0)?$_POST['columnas']:null,
                    "ID_F"=>$out['id'], 
                    "FO"=>true, 
                ]);
            }
            if($out['ver']['otKey']=='')
                $out['error']='Módulo no instalado, por favor corra ./dashboardws/instalar con sessión activa para instalar este módulo';
        }else{
            $out['error']='Este usuario no cuenta con los permisos necesarios para hacer esta modificación';
        }
    }
}else{$out['error']='No hay sessión';}
echo json_encode(['out'=>$out]);