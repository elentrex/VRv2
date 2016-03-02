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

$mensaje = "Topico: ". $_POST['topico'];
$mensaje.= "\nDe: ". $_POST['nombrecompleto'];
$mensaje.= "\nEmpresa: ". $_POST['empresa'];
$mensaje.= "\nTelefono: ". $_POST['telefono'];
$mensaje.= "\nCorreo: ". $_POST['correo'];
$mensaje.= "\nMensaje: ". $_POST['mensaje'];

//Nuestro Correo

$destino = "info@venezolanaderepuestos.com.ve";
$remitente = $_POST['correo'];
$asunto = "Afiliacion de VDR";
mail($destino, $asunto, $mensaje, "FROM: VDR <info@venezolanaderepuestos.com.ve>");

//Mensaje de Confirmacion

echo ('<script language="javascript">alert("'.Mensaje Enviado.'");</script>'); 
header("location: index.php");
?>