<?php



	$destino="argentina.esn@gmail.com";



    $nombre=$_POST["nombre"];
    
    $apellido=$_POST["apellido"];

    $telefono=$_POST["telefono"];

    $asunto=$_POST["asunto"];
    
    $email=$_POST["correo"];

    $pais=$_POST["pais"];

    $mensaje=$_POST["mensaje"];



	$contenido="Nombre: " . $nombre . "\nApellido: " . $apellido .  "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto . "\nPais: " . $pais . "\nMensaje: " . $mensaje;



	mail($destino, $asunto, $contenido);



	header("Location:index.html");



?>