<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récuprer ce ue nous voulons du formulaire de connexion
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    //Récupération des utilisateurs
    $query = "SELECT * FROM utilisateur where username = :username";
    $stmt = $PDO->prepare($query);
    $stmt->bindParam(':username', $emailForm);
    $stmt->execute();

    // Est-ce que l'utilisateur (mail) est en base ?

    if ($stmt->rowCount() == 1) {

        $leUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($passwordForm == $leUser['password']) {

            echo "Connexion ok ! Bienvenue " . $leUser['nom'] . " " . $leUser['prenom'];
        }

        // if (password_verify($passwordForm, $leUser['password'])) {

        //     echo "Connexion ok ! Bienvenue " . $leUser['nom'] . $leUser['prenom'];
        // }
        else {
            echo "Mot de passe incorrect";
        }
       
    } else {
        echo "Utilisateur introuvable, êtes-vous sûr de votre mail ?";
    }


} catch (PDOException $e) {
    echo "Erreur". $e->getMessage();
    //throw $th;
}

?>