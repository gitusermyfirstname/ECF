<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $horaire = $_POST['HoraireInput'];

    // putting

    $insertQuery = "INSERT INTO horaire (horaire) VALUES (:horaire)";

    $stmt = $PDO->prepare($insertQuery);
    
    $stmt->bindParam(':horaire', $horaire);

    $stmt->execute();
    
    echo "ok";

} catch (PDOException $e) {
    echo "Exeption". $e;
    //throw $th;
}

?>