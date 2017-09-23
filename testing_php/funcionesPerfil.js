
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