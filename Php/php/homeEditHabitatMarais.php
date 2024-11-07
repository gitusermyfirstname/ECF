<?php

    $dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
    $username = '366740_ut';
    $password = 'Aa123456789____0004';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $titre = $_POST['titreHabitatMaraisDeMiseAJourInput'];
    $description = $_POST['descriptionHabitatMaraisDeMiseAJourInput'];

    // putting

    $insertQuery = "INSERT INTO habitat (name, description) VALUES (:titre, :description)";

    $stmt = $PDO->prepare($insertQuery);
    
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':description', $description);

    $stmt->execute();
    
    echo "ok";

} catch (PDOException $e) {
    echo "Exeption". $e;
}

?>