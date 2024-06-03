import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html", [], "/js/home.js"),
    new Route("/galerie", "Galerie", "/pages/galerie.html", [], "/js/galerie.js"),
    new Route("/signin", "Connexion", "/pages/auth/signin.html", ["disconnected"], "/js/auth/signin.js"),
    new Route("/signup", "Inscription", "/pages/auth/signup.html", ["disconnected"], "/js/auth/signup.js"),
    new Route("/account", "Mon compte", "/pages/auth/account.html", ["client", "admin"]),
    new Route("/editPassword", "Changement de mot de passe", "/pages/auth/editPassword.html", ["client", "admin"]),
    new Route("/allResa", "Vos réservations", "/pages/reservations/allResa.html", ["client"]),
    new Route("/reserver", "réserver", "/pages/reservations/reserver.html", ["client"]),

    //Acadia
    new Route("/contact", "Contact", "/pages/contact.html", []),
    new Route("/services", "Services", "/pages/services.html", []),
    new Route("/habitats", "Habitats", "/pages/habitats.html", []),

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";