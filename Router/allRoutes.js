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
    new Route("/services", "Services", "/pages/services/services.html", []),
    new Route("/habitats", "Habitats", "/pages/habitats/habitats.html", []),

    new Route("/marais", "Marais", "/pages/habitats/marais/marais.html", []),
    new Route("/forets", "Forêts", "/pages/habitats/forets/forets.html", []),
    new Route("/prairies", "Prairies", "/pages/habitats/prairies/prairies.html", []),

    new Route("/employe", "Prairies", "/pages/employe/employe.html", []),
    new Route("/signupEmploye", "InscrireEmploye", "/pages/admin/signupEmploye.html", []),

    new Route("/veterinaire", "Vétérinaire", "/pages/veterinaire/veterinaire.html", []),
    new Route("/signupVeterinaire", "Vétérinaire", "/pages/admin/signupVeterinaire.html", []),

    new Route("/admin", "Administrateur", "/pages/admin/admin.html", [], "/pages/admin/js/auth/signinAdmin.js"),
    new Route("/adminDashBoard", "Administrateur", "/pages/admin/adminDashBoard.html", []),
    new Route("/signupAdmin", "Inscription de l'administrateur", "/pages/admin/signupAdmin.html", [], "/pages/admin/js/auth/signupAdmin.js"),



];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";