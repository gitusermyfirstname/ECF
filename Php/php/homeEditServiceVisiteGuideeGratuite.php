<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $titre = $_POST['titreServiceVisiteGuideeGratuiteDeMiseAJourInput'];
    $description = $_POST['descriptionServiceVisiteGuideeGratuiteDeMiseAJourInput'];

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