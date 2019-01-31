
function controlcookies() {
// si variable no existe se crea (al hacer clic en Aceptar)
 alert("entra");
localStorage.controlcookie = (localStorage.controlcookie || 0);
 
localStorage.controlcookie++; // incrementamos la cuenta de la cookie
//cookie1.style.display="none"; // Esconde la política de cookies en futuras visitas

	if (localStorage.controlcookie>0){
		//document.getElementById("cookie1").style.bottom = "101%";
		document.getElementById("cookie1").style.visibility="hidden";
	}
}
