<?php
$mensaje="<h3>";
$mensaje.=$_POST['autor'];
$mensaje.="</h3>";
$mensaje.="<p>";
$mensaje.="<span>";
$mensaje.=$_POST['mensaje'];
$mensaje.="</span>";
$mensaje.="<p>";
$mensaje.="<a href='inicio.html'>volver al foro</a>";
$fp= fopen('data.htm', 'w');
fwrite($fp, $mensaje);
fclose($fp);
header("location:data.htm");
?>