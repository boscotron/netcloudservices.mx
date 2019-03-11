<?php
$p=explode('/',$_GET['peticion']);
//$jmyWeb ->pre(['p'=>$p,'t'=>'TITULO_ARRAY']);
if(in_array($p[0],['es','en']))
    $_SESSION['lenguaje']=$p[0];
else
    echo '<script>alert("No existe idioma ");</script>';
?>
<script>
    javascript:history.back(1)
</script>