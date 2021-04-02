const pass = document.getElementById("pass");
const id = document.getElementById("id");
const alertID = document.getElementById("alertID")
const btnSubmit = document.getElementById("btnSubmit")
const dangerousAlert = document.getElementById("alert")

document.addEventListener("DOMContentLoaded", function () {
    btnSubmit.addEventListener("click", function () {
    
        alertID.classList.add("d-none")
        dangerousAlert.classList.add("d-none")

        if ( id.value == "" || pass.value == ""){
            dangerousAlert.classList.remove("d-none")
            dangerousAlert.innerText = "Los campos no pueden quedar vacíos"
            return false;
        }else if(isNaN(id.value)){
            alertID.classList.remove("d-none")
            alertID.innerText = "El ID solo puede contener numeros"
            return false;
        }else{
            return true;
        }
})
})

