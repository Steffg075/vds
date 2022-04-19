<?php 
$destino= "g075@vds.edu.gt";
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$telefono= $_POST["telefono"];
$asunto= $_POST["asunto"];
$mensaje= $_POST["mensaje"];
$contenido= "nombre: " . $nombre . "/nEmail: " . $email . "/nTelefono: " . $telefono . "/nAsunto: " . $asunto . "/nMensaje: " . $mensaje;
if(@mail($destino,"asunto", $contenido)){
    echo "Correo enviado";
}
?>
