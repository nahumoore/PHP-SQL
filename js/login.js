let pass = document.getElementById("pass");
let id = document.getElementById("id");

function login(){
if(id.value == ""){
    alert("Ingresa tu ID")
    return false;
}else if(isNaN(id.value) || id.value.length <= 3){
    alert("El id debe ser un numero y contener más de 3 caracteres")
    return false;
}else if(pass.value == ""){
    alert("Ingresa tu contraseña")
    return false;
}else{
    window.location.href = 'recepcion.html';
}
}
