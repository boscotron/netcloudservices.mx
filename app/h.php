<?php
$DI=($_GET['ruta']!='')?$_GET['ruta']:TEMPLET_HOME;$RU=RUTA_APP;$ER=0;
require($RU."class/jmy3webCore.class.php");$jmycore=new JMY3WEBCORE();
require($RU."class/token_jmy.class.php");$jmyconect=new HiJMY();
if(ESTADO_WEB=='PUBLICO'||$jmycore->acceso()){
	require($RU."class/jmy3mysql.class.php"); $jmy = new JMY3MySQL();
	require($RU."class/jmy3webHelp.class.php"); $jmyWeb = new JMY3WEB();
	if(!in_array($DI,['entrar','INSTALAR','JMYWEBSYNC','JMYWEBCODE'])){
		if(file_exists($RU.'controlador/'.$DI.'.php')) include($RU.'controlador/'.$DI.'.php'); else $ER++;
		if(file_exists(BASE_TEMPLET.$DI.'.php')&&$ER>0) include(BASE_TEMPLET.$DI.'.php'); else if($ER>0) include($RU.'controlador/error404.php');
	}else{ if(file_exists($RU.'admin/'.$DI.'.php')) include($RU.'admin/'.$DI.'.php'); else include($RU.'controlador/error404.php'); }
}else{ if(file_exists(BASE_TEMPLET.TEMPLET_MANTENIMIENTO)) include(BASE_TEMPLET.TEMPLET_MANTENIMIENTO); else include($RU.'mantenimiento.php'); }
?> 