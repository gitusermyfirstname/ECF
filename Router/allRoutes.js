import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.php", [], "/js/home.js"),
    new Route("/galerie", "Galerie", "/pages/galerie.html", [], "/js/galerie.js"),
    //new Route("/signin", "Connexion", "/pages/auth/signin.html", ["disconnected"], "/js/auth/signin.js"),
    new Route("/signup", "Inscription", "/pages/auth/signup.html", ["disconnected"], "/js/auth/signup.js"),
    new Route("/account", "Mon compte", "/pages/auth/account.html", ["client", "admin"]),
    new Route("/editPassword", "Changement de mot de passe", "/pages/auth/editPassword.html", ["employe", "veterinaire", "admin"]),
    new Route("/allResa", "Vos réservations", "/pages/reservations/allResa.html", ["client"]),
    new Route("/reserver", "réserver", "/pages/reservations/reserver.html", ["client"]),

    //Acadia
    
    new Route("/contact", "Contact", "/pages/contact.php", [], "/js/contact.js"),
    new Route("/services", "Services", "/pages/services.php", []),
    new Route("/habitats", "Habitats", "/pages/habitats.html", []),

    new Route("/marais", "Marais", "/pages/habitats/marais/marais.html", []),
    new Route("/forets", "Forêts", "/pages/habitats/forets/forets.html", []),
    new Route("/prairies", "Prairies", "/pages/habitats/prairies/prairies.html", []),

    new Route("/employe", "Employé", "/pages/employe/employe.html", [], "/pages/employe/js/auth/signinEmploye.js"),
    new Route("/espaceEmploye", "Espace Employé", "/pages/employe/espaceEmploye.html", ["employe"], "/pages/employe/js/espaceEmploye.js"),
    new Route("/espaceEmployeVisiteur", "Espace Employe Visiteur", "/Php/php/espaceEmployeVisiteur.php", []),



    new Route("/veterinaire", "Vétérinaire", "/pages/veterinaire/veterinaire.html", [], "/pages/veterinaire/js/auth/signinVeterinaire.js"),
    new Route("/espaceVeterinaire", "Espace Veterinaire", "/pages/veterinaire/espaceVeterinaire.html", ["veterinaire"], "/pages/veterinaire/js/espaceVeterinaire.js"),

    new Route("/admin", "Administrateur", "/pages/admin/admin.html", [], "/pages/admin/js/auth/signinAdmin.js"),
    new Route("/adminDashBoard", "Administrateur", "/pages/admin/adminDashBoard.html", ["admin"]),
    new Route("/signupAdmin", "Inscription de l'administrateur", "/pages/admin/signupAdmin.html", ["admin"], "/pages/admin/js/auth/signupAdmin.js"),

    new Route("/signupEmploye", "InscrireEmploye", "/pages/admin/signupEmploye.html", [], "/pages/admin/js/auth/signupEmploye.js"),

    new Route("/signupVeterinaire", "Vétérinaire", "/pages/admin/signupVeterinaire.html", ["admin"], "/pages/admin/js/auth/signupVeterinaire.js"),

    // Editions

    new Route("/editServices", "Edition des services", "/pages/admin/services/editServices.html", ["admin"], "/pages/admin/js/services/editServices.js"),
    new Route("/editServices", "Edition des services", "/pages/admin/services/editServices.html", ["admin"], "/pages/admin/js/services/editServices.js"),
    new Route("/editServices", "Edition des services", "/pages/admin/services/editServices.html", ["admin"], "/pages/admin/js/services/editServices.js"),
    new Route("/editServices", "Edition des services", "/pages/admin/services/editServices.html", ["admin"], "/pages/admin/js/services/editServices.js"),
    
    new Route("/clicVisiteurs", "clic des Visiteurs", "/Php/php/clicVisiteurs.php", ["admin"])

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";