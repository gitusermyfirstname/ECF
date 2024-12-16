<?php

use phpDocumentor\Reflection\Location;

$dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
$username = '366740_ut';
$password = 'Aa123456789____0004';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $titre = $_POST['name'];
    $email = $_POST['EmailInput'];
    $mail = $_POST['mail'];


    // putting

    $insertQuery = "INSERT INTO mail (titre, email, mail) VALUES (:titre, :email, :mail)";

    $stmt = $PDO->prepare($insertQuery);
    
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mail', $mail);

    $stmt->execute();
    
    // echo "ok";
    header('Location: /');

} catch (PDOException $e) {
    echo "Exeption". $e;
}