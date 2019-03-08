<?php
$pet = explode("/",$_GET['peticion']);
$p=$_POST;
$p['FN']=($p['FN']!='')?$p['FN']:$pet[0];
$t='gantt__'.$jmyWeb->sesion(['return'=>'db']);
$o['pe']=$jmyWeb->modulos(["modulos_permisos"=>true]);
$o['pe']=$o['pe']['modulos_permisos']['gantt'];
if($o['pe']>0){
    $o['id']=$pet[0];
    if($pet[0]!=''){
        switch($p['FN']):
            case 'instalar':
                $o['instalar']=($jmyWeb->sesion(['return'=>'permisos_api'])>3)?$jmy->db([$t]):"No tienes permisos para esta accion";        
            break;
            case 'SVPROJECT':
                $o['g']=$jmy->guardar([
                    "TABLA"=>$t,
                    "ID"=>$o["id"],
                    "A_D"=>true,
                    "GUARDAR"=>["prj"=>$_POST['prj']]
                ]);
            default;
                $o['per']=[
                    "canWrite"=>($o['pe']>1)?true:false,
                    "canDelete"=>($o['pe']>1)?true:false,
                    "canWriteOnParent"=>($o['pe']>1)?true:false,
                    "canAdd"=>($o['pe']>1)?true:false
                ];
                $o['v']=$jmy->ver([
                    "TABLA"=>$t,
                    "ID"=>$o['id']
                ]);
            break; 
        endswitch;
    }else{
        $o['v']=$jmy->ver([
            "TABLA"=>$t,
            "COL"=>"nombre"
        ]);
    }

}else{
    $o['error']="No hay acceso a esta sección";
}
echo json_encode([
    "o"=>$o,
    "ok"=>true,
    "project"=>$o['v']['ot'][$o['id']]['prj'],
    "POST"=>$_POST,
    "TEST"=>json_decode($_POST['prj'],1),
    "GET"=>$_GET
]);