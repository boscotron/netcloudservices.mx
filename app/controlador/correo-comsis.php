<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

function correo_comsis($d=[]){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://comsis.mx/api/oka/mail/ws.php');
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,["datos"=>base64_encode(json_encode($d))]);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $r= curl_exec($ch);
    $o['outa'] = $r;
    $o['out'] = json_decode($r,1);
    curl_close($ch);
    return $o;
}
$out = correo_comsis([
    "user"=>"CorreosJuan", 
    "password"=>"0lakace", 
    "nombre"=>$nombre, 
    "email"=>$email,
    "telefono"=>$telefono, 
    "asunto"=>"Nuevo contacto Venta Online ".date("Y-m-d")." ".$asunto, 
    "mensaje"=>$mensaje, 
    "destinatario"=>"jancarls1@gmail.com", 
    "smtpHost"=>"mail.comsis.mx", 
    "smtpUsuario"=>"no_contestar@comsis.mx", 
    "smtpClave"=>"JGK3NzrmMmvj", 
    "port"=>"25"
]);
?>