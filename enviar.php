<?php
$destino= "joxar_reyes@outlook.es";
$nombre =$_post{"nombreusuario"};
$edad =$_post{"edadusuario"};
$correo =$_post{"correodelusuario"};
$comentarios =$_post{"comentarios"};
$contenido = "Nombre: " . $nombre . "\nEdad:" . $edad . "\ncorreo" . $correo . "\nComentarios" . $comentarios;
mail($destino,"cuestionario", $contenido);

 ?>
