// En plus de ces methodes, je vais coder des methodes spécifique à la connexion

// La methode setCookie va me permettre de placer le cookie en token

const tokenCookieName = "accesstoken";
// Je crée la constante Rôle,

const roleCookieName = "Role";
const signouBtn = document.getElementById("signout-btn"); // Je vais ajouter un listener d'évenement sur cet elt


signouBtn.addEventListener("click", signout);

function getRole() {
    return getCookie(roleCookieName);
}
function signout() {
    eraseCookie(tokenCookieName);
    eraseCookie(roleCookieName);
    window.location.reload();
}

function setToken(token) {
    setCookie(tokenCookieName, token, 8);
}

function getToken() {
    return getCookie(tokenCookieName);
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

// Voir si l'utilisateur est connecté ou non

function isConnected() {
    if (getToken() == null || getToken == undefined) {
        return false;
    } else {
        return true;
    }

}

// if (isConnected()) {
//     alert("Online");
// } else {
//     alert("not Online");
// }

function showAndHideElementsForRoles() {
    const userConnected = isConnected();
    const role = getRole();

    const allElementsToEdit = document.querySelectorAll('[data-show]');
    allElementsToEdit.forEach(element => {
        switch (element.dataset.show) {
            case 'disconnected':
                if (userConnected) {
                    element.classList.add("d-none");
                }           
                break;
            case 'connected':
                if (!userConnected) {
                    element.classList.add("d-none");
                }            
                break;
            case 'admin':
                if (!userConnected || role != "admin") {
                    element.classList.add("d-none");
                }            
                break;
            case 'client':
                if (!userConnected || role != "client") {
                    element.classList.add("d-none");
                }
        }
    })
}

function sanitizeHtml(text){
    // Créez un élément HTML temporaire de type "div"
    const tempHtml = document.createElement('div');
    // Affectez le texte reçu en tant que contenu texte de l'élément "tempHtml"
    tempHtml.textContent = text;
    // Utilisez .innerHTML pour récupérer le contenu de "tempHtml"
    // Cela va "neutraliser" ou "échapper" tout code HTML potentiellement malveillant
    return tempHtml.innerHTML;
}

function getInfoUtilisateur() {
    const myHeaders = new Headers();
    myHeaders.append("X-AUTH-TOKEN", getToken());


    const requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
        mode: "*cors",
redirect: "follow",
        mode: "*cors"
    };

    fetch("https://apiecf.alwaysdata.net/api/account/me", requestOptions)
    .then(response => {        
        if (response.ok) {
            return response.json();
        } else {
            console.log("Non récupération des infos de l'utilisateur");
        }
    })

    .then(result => {
        console.log(result); 

    })
    
    .catch((error) => {
        console.error("erreur lors de la récupération des infos de l'utilisateur");
    });
}
