// Nous allons récupérer l'input du mail et celui du password

const mailInput = document.getElementById("EmailInput");
const passwordInput = document.getElementById("PasswordInput");
const btnSignin = document.getElementById("btnSignin");
const signinForm = document.getElementById("signinForm");

btnSignin.addEventListener("click", getCredencials);

function getCredencials() {
    
    const dataform = new FormData(signinForm);

    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    // B )
    // Et via le JSON.stringify, je vais passer les éléments name récupéré, et listés sur le tableau de l'objet DataForm, soit
    // Soit la variable formdata qui est un tableau

    const raw = JSON.stringify({

        "username": dataform.get("email"),
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

    fetch("https://apiecf.alwaysdata.net/api/login", requestOptions)
    .then(response => {
        
        if (response.ok) {
            return response.json();

        } else {
            mailInput.classList.add("is-invalid");
            passwordInput.classList.remove("is-invalid");
        }
    })

    .then(result => {
        // Il faut récupérer le vrai token
        const token = result.apiToken;
        setToken(token);
        // Placer ce token en cookies
    
        setCookie(roleCookieName, result.roles[0], 8);
        window.location.replace("/");

    })
    
    .catch((error) => console.error(error));

}