<?php
ini_set("session.cookie_lifetime","950400");
ini_set("session.gc_maxlifetime","950400");  
session_start();
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_PARSE); 
date_default_timezone_set('America/Mexico_City');
$raiz= './';
require($raiz.'config.inc.php');
require(BASE_APP.'h.php'); 
?> 