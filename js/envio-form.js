<script>  
  $(document).ready(function(){
	//Se verifica si es contacto o afiliacion
	var var_url = $(document).URL;
		if (var_url == "http://www.venezonaladerepuestos.com.ve/afiliacion.php"){
			$.ajax({
				type: "POST",
				url: "from-afiliacion.php",
				data: dataString,
				cache: false,
				success: function(result){
					$('#envio').html(result);
					$('#envio').hide('slow');
				}
			});
		}
});
</script>