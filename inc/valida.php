<?php 
include("../conexion.php");

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$comentario=$_POST["comentario"];
$solicitud=$_POST["solicitud"];

if (mysqli_connect_errno()){
	echo "Fallo la Conexion con MYSQL: ". mysqli_connect_errno();
}

mysql_query("INSERT INTO afiliacion (nombre_afiliacion, email_afiliacion, telefono_afiliacion, Comentarios_afiliacion, solicitud_afiliacion) VALUES ('$nombre','$email','$telefono','$comentario','$solicitud')");
mysql_close();
?>

<script type="text/javascript">
	alert("La afiliacion fue exitosa");
	location.href="../index.php";
</script>