<?php
$n=null;$s=$jmyWeb->sesion();$s=$s['permiso'];if($s>3){$jmyWeb ->pre(['p'=>['Tu usuario no es válido'],'t'=>'ERROR']);}

$cu=($s>3)?new mysqli(DB_HO,DB_US,DB_PA,DB_DB):$n;
if($cu->connect_error){$error[]='Error de Conexión ('.$mysqli->connect_errno.')'.$mysqli->error;}else{
$n=($s>3)?'CREATE TABLE IF NOT EXISTS `cat_d` (`ID` int(11) NOT NULL AUTO_INCREMENT, `NAME` varchar(250) NOT NULL, PRIMARY KEY (`ID`), UNIQUE KEY `NAME` (`NAME`)) ENGINE=MyISAM DEFAULT CHARSET=latin1;':$n;
if(!$cu->query($n)){$error[] = "Tabla existente-".$cu->error;}else{$jmyWeb ->pre(['p'=>['db'=>true],'t'=>'CAT INDEX']);}
$jmyWeb ->pre(['p'=>$jmy->db(['vistaweb','blog','catalogos']),'t'=>'Auto DB']);
if(TABLAS_EXTRAS!='')  $jmyWeb->pre(['p'=>$jmy->db(explode(',',TABLAS_EXTRAS)),'t'=>'Extras DB']);

/*comprobacion */
$jmy->guardar([
  "TABLA"=>"vistaweb",
  "ID"=>"TEST",
  "A_D"=>true,
  "GUARDAR"=>["VARIABLE_PRUEBA"=>"Hola bienvenido a JMYWeb ".JMY_VERSION.". Instalación correcta."]
  ]);
$jmyWeb ->pre(['p'=>$jmy->ver(["TABLA"=>"vistaweb","ID"=>"TEST"]),'t'=>'Prueba DB']);
/*fin comprobacion */
if(count($error)>0){
  $jmyWeb ->pre(['p'=>$error,'t'=>'ERROR']);
}else{
  $jmyWeb ->redireccionar(RUTA_ACTUAL.'entrar/instalar');

}


}