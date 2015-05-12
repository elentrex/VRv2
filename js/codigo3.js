// JavaScript Document
/*Para IE<7
if(window.XMLHttpRequest){
	conexion = new XMLHttpRequest();
}else{
	conexion = new ActiveXObject("Microsoft.XMLHTTP");
}*/
function ejecutar_ajax(){
var conexion;
conexion = new XMLHttpRequest();

conexion.onreadystatechange=function(){
	if(conexion.readyState==4 && conexion.status==200){
		document.getElementById("midiv").innerHTML=conexion.responseText;
	}
}
conexion.open("GET", "verificar.txt", true);/*Asincronica true*/
conexion.send();
}

/*************************************************************/

function ajaxget(){
	var conexion;
	conexion = new XMLHttpRequest();
	
conexion.onreadystatechange=function(){
	if(conexion.readyState==4 && conexion.status==200){
		document.getElementById("midiv").innerHTML=conexion.responseText;
	}
}

conexion.open("GET", "verficar.php?variable=Soy una variable", true);
conexion.send();

}

/**************************************************************/

function producto(str){
var conexion;

conexion = new XMLHttpRequest();

if (str==""){
	document.getElementById("txtHint").innerHTML="";
	return;
}

conexion.onreadystatechange=function(){
	if(conexion.readyState==4 && conexion.status==200){
		document.getElementById("midiv").innerHTML=conexion.responseText;
	}
}

conexion.open("GET", "consulta.php?c="+str, true);/*Asincronica true*/
conexion.send();

}

window.addEventListener('load', producto(str), false);


/***************************************************************/

function producto2(str){
var conexion;

conexion = new XMLHttpRequest();

if (str==""){
	document.getElementById("txtHint").innerHTML="";
	return;
}

conexion.onreadystatechange=function(){
	if(conexion.readyState==4 && conexion.status==200){
		document.getElementById("midiv2").innerHTML=conexion.responseText;
	}
}

conexion.open("GET", "consulta2.php?c="+str, true);/*Asincronica true*/
conexion.send();
}

/***************************************************************/

function producto3(str){
var conexion;

conexion = new XMLHttpRequest();

if (str==""){
	document.getElementById("txtHint").innerHTML="";
	return;
}

conexion.onreadystatechange=function(){
	if(conexion.readyState==4 && conexion.status==200){
		document.getElementById("midiv3").innerHTML=conexion.responseText;
	}
}

conexion.open("GET", "consulta3.php?c="+str, true);/*Asincronica true*/
conexion.send();
}

/***************************************************************/

function producto4(str){
var conexion;

conexion = new XMLHttpRequest();

if (str==""){
	document.getElementById("txtHint").innerHTML="";
	return;
}

conexion.onreadystatechange=function(){
	if(conexion.readyState==4 && conexion.status==200){
		document.getElementById("midiv4").innerHTML=conexion.responseText;
	}
}

conexion.open("GET", "consulta4.php?c="+str, true);/*Asincronica true*/
conexion.send();
}

