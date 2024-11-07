//Implémenter le JS de laa page

const inputNom = document.getElementById("NomInput");
const inputPreNom = document.getElementById("PrenomInput");

const inputVeterinaireMail = document.getElementById("EmailVeterinaireInput");
const inputVeterinairePassword = document.getElementById("PasswordVeterinaireInput");
const inputVeterinaireValidationPassword = document.getElementById("ValidateVeterinairePasswordInput");

const btnValidationInscriptionVeterinaire = document.getElementById("btnValidationInscriptionVeterinaire");

const formInscriptionVeterinaire = document.getElementById("formulaireInscriptionVeterinaire");

inputNom.addEventListener("keyup", validateForm); 
inputPreNom.addEventListener("keyup", validateForm);

inputVeterinaireMail.addEventListener("keyup", validateForm);
inputVeterinairePassword.addEventListener("keyup", validateForm);
inputVeterinaireValidationPassword.addEventListener("keyup", validateForm);

btnValidationInscriptionVeterinaire.addEventListener("click", inscrireUtilisateur);

//Function permettant de valider tout le formulaire

function validateForm(){

    const nomOk = validateRequired(inputNom);
    const prenomOk = validateRequired(inputPreNom);

    const mailOk = validateMail(inputVeterinaireMail);
    const passwordOk = validatePassword(inputVeterinairePassword)
    const validationPasswordOk = validatePasswordEntry(inputVeterinairePassword, inputVeterinaireValidationPassword);

    if (nomOk && prenomOk && mailOk && passwordOk && validationPasswordOk) {
        btnValidationInscriptionVeterinaire.disabled = false;
    } else {
        btnValidationInscriptionVeterinaire.disabled = true;
    }
}

function validateMail(input){
    //Définir mon regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mailUser = input.value;
    if(mailUser.match(emailRegex)){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid"); 
        return true;
    }
    else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

function validatePassword(input){
    //Définir mon regex
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
    const passwordUser = input.value;
    if(passwordUser.match(passwordRegex)){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid"); 
        return true;
    }
    else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

function validatePasswordEntry(inputPwd, inputValidatePwd){
    if(inputPwd.value == inputValidatePwd.value && inputPwd.value != "" && inputValidatePwd.value != ""){
        inputValidatePwd.classList.add("is-valid");
        inputValidatePwd.classList.remove("is-invalid");
        return true;
    }
    else{
        inputValidatePwd.classList.add("is-invalid");
        inputValidatePwd.classList.remove("is-valid");
        return false;
    }
}

function validateRequired(input){

    if(input.value != ''){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    }
    else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

function inscrireUtilisateur() {

// A )
    // Récupérer les données du formulaire
    // Pour le faire, on untilise l'objet javascript formdata
    // qui est l'objet pour loisiblement, récupérer les données depuis un formulaire, de part les attributs name

    const dataform = new FormData(formInscriptionVeterinaire);

    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    // B )
    // Et via le JSON.stringify, je vais passer les éléments name récupéré, et listés sur le tableau de l'objet DataForm, soit
    // Soit la variable formdata qui est un tableau

    const raw = JSON.stringify({
        "firstName": dataform.get("nom"),
        "lastName": dataform.get("prenom"),
        "email": dataform.get("email"),
        "password": dataform.get("mdp")
    });

    const requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: raw,
        redirect: "follow",
        mode: "*cors",
        redirect: "follow",
        mode: "*cors"
    };

    fetch("https://apiecf.alwaysdata.net/api/registration", requestOptions)
    .then(response => {
        
        if (response.ok) {
            return response.json();

        } else {
            alert("erreur lors de l'inscription");
        }
    })

    .then(result => {
        alert("Super, inscription ok");
        document.location.href = "/adminDashBoard";

    })
    
    .catch((error) => console.error(error));
    
}