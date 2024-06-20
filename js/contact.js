//Implémenter le JS de laa page

const inputNom = document.getElementById("NomInput");
const inputMail = document.getElementById("EmailInput");
const mail = document.getElementById("mail");

const btnContact = document.getElementById("btnContact");

const formInscriptionEmploye = document.getElementById("formulaireContact");

inputNom.addEventListener("keyup", validateForm); 
mail.addEventListener("keyup", validateForm);
inputMail.addEventListener("keyup", validateForm);

btnContact.addEventListener("click", validateForm);

//Function permettant de valider tout le formulaire

function validateForm(){

    const nomOk = validateRequired(inputNom);
    const inputMailOk = validateMail(inputMail);
    const mailOk = validateRequired(mail);

    if (nomOk && inputMailOk && mailOk && validationPasswordOk) {
        //btnValidationInscriptionEmploye.disabled = false;
    } else {
        //btnValidationInscriptionEmploye.disabled = true;
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

    const dataform = new FormData(formInscriptionEmploye);

    const leMail = dataform.get("email");
    setCookie("userMail",leMail,44);

    // const leMail = dataform.get("email");

    // console.log(dataform.get("email"));
    // debugger;

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
        redirect: "follow"
    };

    fetch("http://127.0.0.1:8000/api/registration", requestOptions)
    .then(response => {
        
        if (response.ok) {

            return response.json();

        } else {
            alert("erreur lors de l'inscription");
        }
    })

    .then(result => {

        const dataform = new FormData(formInscriptionEmploye);
        const leMail = dataform.get("email");
        setCookie("userMail",leMail,44);
        // const leMail = dataform.get("email");
        // setCookie("userMail",leMail,44);
        // document.cookie = "userMail" +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

        
        // console.log(getCookie("userMail"));

        // document.location.href = "/notification";

        //alert("Super, inscription ok");

        //document.location.href = "/notification";

        // document.location.href = "/adminDashBoard";

    })
    
    .catch((error) => console.error(error));
    
}