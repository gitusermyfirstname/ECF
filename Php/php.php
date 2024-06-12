<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);    
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupération des champs
    $query = "SELECT * FROM utilisateur";
    $stmt = $PDO->query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les utilisateurs
    foreach ($users as $user) {
        echo "USERNAME : " . $user["username"] . "<br>";
        echo "NAME : " . $user["name"] . "<br>";
        echo "PRENOM : " . $user["prenom"] . "<br>";
        echo "<br>";
    }

} catch (PDOException $e) {
    echo "Erreur". $e->getMessage();
    //throw $th;
}



?>