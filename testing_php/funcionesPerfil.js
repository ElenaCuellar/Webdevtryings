
var mostrarNuevaPass = function(){
	document.getElementById("camposPass").style.visibility = "visible";
};

var borrarCuenta = function(){
	document.getElementById("camposPass").style.visibility = "hidden";
	var borrar = confirm("Confirme que desea borrar la cuenta.");
	if(borrar==true)
		document.location.href = "borrarCuenta.php";
}

var cambiar = function(){
	document.location.href = "cambiarPassword.php?nuevaP="+document.getElementById("txNuevaPass").value;
}

var enviarIncidencia = function(){
	var nom = document.getElementById("nombreinci").value;
	var apes = document.getElementById("apesinci").value;
	var asunto = document.getElementById("asuntoinci").value;
	var descripcion = document.getElementById("descripcioninci").value;

	if(nom=='' || apes == '' || asunto=='' || descripcion==''){
		return alert("Rellene todos los campos.");
	}
	else {
		document.location.href = "insertarIncidencia.php?nom="+nom+"&apes="+apes+"&asunto="+asunto+"&descripcion="+descripcion;
	}
}
