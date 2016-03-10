<?php
/*

topico=topico
nombrecomple=nombrecompleto
empresa=empresa
telefono=telefono
correo=correo
mensaje=mensaje

$mensaje = "De: ". $_POST['nombre'];
$mensaje.= "\nCedula: ". $_POST['cedula'];
$mensaje.= "\ntelefono: ". $_POST['telefono'];
$mensaje.= "\ntipo de Vehiculo: ". $_POST['tipo_vehi'];
$mensaje.= "\nplacas: ". $_POST['placas'];
$mensaje.= "\ncapacidad: ". $_POST['captn'];
$mensaje.= "\ncorreo: ". $_POST['email'];
*/

$mensaje = "De: ". $_POST['nombre'];
$mensaje.= "\nRif: ". $_POST['rif'];
$mensaje.= "\nCorreo: ". $_POST['email'];
$mensaje.= "\nDireccion: ". $_POST['direccion'];
$mensaje.= "\nTelefono: ". $_POST['telefono'];
$mensaje.= "\nPaginaWeb: ". $_POST['paginaweb'];

//Nuestro Correo

$destino = "info@venezolanaderepuestos.com.ve";
$remitente = $_POST['email'];
$asunto = "Afiliacion de VDR";
mail($destino, $asunto, $mensaje, "FROM: VDR <info@venezolanaderepuestos.com.ve>");

//Mensaje de Confirmacion

echo ('<script language="javascript">alert("'.Mensaje Enviado.'");</script>'); 
header("location: index.php");
?>