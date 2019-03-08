<?php

if($jmyWeb->modoEditor()){

	

	function ver_lista_padre($data){ /* ["id_padre"=>"","id_empresa"=>""] */

		global $jmy;

		$out = $jmy->ver([

			"TABLA"=>'presentacion_detalles_'.$data['id_empresa'], 

			"COL"=>['padre_id'],

			"V"=>[$data['id_padre']],

		]);

		$data['col'] = ($data['col']!='') ? $data['col'] : ['nombre','tipo'];

		$out = $jmy->ver([

			"TABLA"=>'presentacion_detalles_'.$data['id_empresa'], 

			"ID_F"=>$out['otKey'],

			"COL"=>($data['col']!='')?$data['col']:null,

			"SALIDA"=>"ARRAY"

		]);

		$out['data'] = $data;

		return $out;

	}

	

	$tk = $jmyWeb->sesion();

    $out['id_empresa']=$tk['body']['api_web']['ID_F'];

	

	$pet = explode('/', strtolower($_GET['peticion'])); 

	$url = (trim($pet[0])!='')?trim($pet[0]):''; 

	if(trim($pet[1])!=''){

		unset($pet[0]); $peticiones=explode(',',implode(',',$pet));

	}

	$out['peticiones']=$peticiones;

	

	

	switch($url):

		case 'instalar':

			 $t=['presentacion_detalles'];

			for ($i=0; $i <count($t) ; $i++) { $t[$i]=$t[$i].'_'.$out['id_empresa'];  }

			$jmyWeb ->pre(['p'=>($jmyWeb->modoEditor())?$jmy->db($t):['No hay sessión iniciada'],'t'=>'Instalación']);

		break;

		case 'plantilla_editar':

			$out ['p'] = $_POST;

			$out ['id'] = ($peticiones[0]!='')?$peticiones[0]:uniqid();

			$out ['guardar'] = $out ['p']['d'];

			$out ['guardar']['html'] = $out ['p']['html']; 

			$out ['guardar']['tipo'] = $out ['p']['tipo']; 

			$out ['guardar']['padre_id'] = $out ['p']['padre_id']; 

			$jmy->guardar([

				"TABLA"=>'presentacion_detalles_'.$out['id_empresa'], 

                "ID_F"=>$out['id'], 

                "A_D"=>($tk['permiso']>2)?1:0, 

                "GUARDAR"=>$out ['guardar'],

			]);

			

		break;

		case 'ver_select':

			$out ['p'] = $_POST;

			if($peticiones[0]!=''){

				$out ['lista'] = ver_lista_padre([

					"id_padre"=>$peticiones[0],

					"id_empresa"=>$out['id_empresa']

				]);

			}else{

				$out['error']=['Se requiere padre_id'];

			}

		break;

		case 'ver':

			$out ['p'] = $_POST;

			if($peticiones[0]!=''){

				$out ['lista'] = $jmy->ver([

					"TABLA"=>'presentacion_detalles_'.$out['id_empresa'], 

					"ID_F"=>[$peticiones[0]],

					"SALIDA"=>"ARRAY"

				]);

				$out ['lista_menu'] = ver_lista_padre([

					"id_padre"=>$peticiones[0],

					"id_empresa"=>$out['id_empresa']

				]);

			}else{

				$out['error']=['Se requiere padre_id'];

			}

		break;

		default:

				

	endswitch;

	

	

}else{$out['error']='No hay sessión';}

echo json_encode(['out'=>$out]);