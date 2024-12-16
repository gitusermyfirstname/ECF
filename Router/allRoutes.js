import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    
    new Route("/", "Accueil", "/pages/home.php", [], "/js/home.js"),
    
    new Route("/editPassword", "Changement de mot de passe", "/pages/auth/editPassword.html", ["ROLE_USER", "ROLE_USER", "ROLE_USER"]),

    //Acadia
    
    new Route("/contact", "Contact", "/pages/contact.php", [], "/js/contact.js"),
    new Route("/services", "Services", "/pages/services.php", []),
    new Route("/habitats", "Habitats", "/pages/habitats.html", []),

    new Route("/marais", "Marais", "/pages/habitats/marais/marais.php", []),
    new Route("/forets", "Forêts", "/pages/habitats/forets/forets.php", []),
    new Route("/prairies", "Prairies", "/pages/habitats/prairies/prairies.php", []),

    new Route("/employe", "Employé", "/pages/employe/employe.html", ["disconnected"], "/pages/employe/js/auth/signinEmploye.js"),
    new Route("/espaceEmploye", "Espace Employé", "/pages/employe/espaceEmploye.html", ["ROLE_USER", "connected"], "/pages/employe/js/espaceEmploye.js"),
    new Route("/espaceEmployeVisiteur", "Espace Employe Visiteur","/Php/php/espaceEmployeVisiteur.php", ["ROLE_USER", "connected"]),


    new Route("/veterinaire", "Vétérinaire", "/pages/veterinaire/veterinaire.html", ["disconnected"], "/pages/veterinaire/js/auth/signinVeterinaire.js"),
    new Route("/espaceVeterinaire", "Espace Veterinaire", "/pages/veterinaire/espaceVeterinaire.html", ["ROLE_USER"], "/pages/veterinaire/js/espaceVeterinaire.js"),

    new Route("/admin", "Administrateur", "/pages/admin/admin.html", ["disconnected"], "/pages/admin/js/auth/signinAdmin.js"),
    new Route("/adminDashBoard", "Administrateur", "/pages/admin/adminDashBoard.html", ["ROLE_USER", "connected"]),
    new Route("/signupAdmin", "Inscription de l'administrateur", "/pages/admin/signupAdmin.html", ["disconnected"], "/pages/admin/js/auth/signupAdmin.js"),
    new Route("/signupMail", "Envoie_d_email_a_l'inscription", "/Php/php/envoyerMailLorsD_UnSignup.php", ["ROLE_USER", "connected"], ""),
    
    new Route("/signupEmploye", "InscrireEmploye", "/pages/admin/signupEmploye.html", ["ROLE_USER", "connected"], "/pages/admin/js/auth/signupEmploye.js"),

    new Route("/signupVeterinaire", "Vétérinaire", "/pages/admin/signupVeterinaire.html", ["ROLE_USER", "connected"], "/pages/admin/js/auth/signupVeterinaire.js"),

    // Editions

    new Route("/editServices", "Edition des services", "/pages/admin/services/editServices.html", ["ROLE_USER", "connected"], "/pages/admin/js/services/editServices.js"),

    new Route("/clicVisiteurs", "clic des Visiteurs", "/Php/php/clicVisiteurs.php", ["ROLE_USER"])

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";