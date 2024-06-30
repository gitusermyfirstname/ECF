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

    $titre = $_POST['titreHabitatForêtsDeMiseAJourInput'];
    $description = $_POST['descriptionHabitatForêtsDeMiseAJourInput'];

    // putting

    $insertQuery = "INSERT INTO habitat (name, description) VALUES (:titre, :description)";

    $stmt = $PDO->prepare($insertQuery);
    
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':description', $description);

    $stmt->execute();
    
    echo "ok";

} catch (PDOException $e) {
    echo "Exeption". $e;
    //throw $th;
}

?>