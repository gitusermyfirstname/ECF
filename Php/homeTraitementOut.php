<?php

    $dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
    $username = '366740_ut';
    $password = 'Aa123456789____0004';

    // require "./arcadia.php";

    // $dsn = 'mysql:host=localhost;dbname=arcadia';
    // $username = 'root';
    // $password = '';

try {
    $PDO = new PDO($dsn, $username, $password);    
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupération des champs

    @$count = "SELECT count(*) from habitat";
    $query = "SELECT * FROM habitat where habitat_id = $count";
    $stmt = $PDO->query($query);
    $habitat = $stmt->fetch(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // Récupération

    $titreMarrais = $habitat['name'];
    $descriptionMarrais = $habitat['description'];

    

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