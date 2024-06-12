<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $emailForm = $_POST['username'];
    $passwordForm = $_POST['password'];
    $nameInputForm = $_POST['nameInput'];
    $prenomForm = $_POST['prenom'];

// Vérifier l'unicité de l'adresse mail

$query = "SELECT * FROM utilisateur where username = :username";
$stmt = $PDO->prepare($query);
$stmt->bindParam(':username', $emailForm);
$stmt->execute();

    // Est-ce que l'utilisateur (mail) est en base ?

    if ($stmt->rowCount() > 0) {
        die("Adresse mail déjà utilisée");
    }
    // Hashage du mot de passe
    $hashedPassword = password_hash($passwordForm, PASSWORD_DEFAULT);

    // putting

    $insertQuery = "INSERT INTO utilisateur (username, password, name, prenom) VALUES (:username, :password, :nom, :prenom)";

    $stmt = $PDO->prepare($insertQuery);
    
    $stmt->bindParam(':username', $emailForm);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':nom', $nameInputForm);
    $stmt->bindParam(':prenom', $prenomForm);
    
    $stmt->execute();
    
    echo "Inscription ok";

} catch (PDOException $e) {
    echo "Erreur lors de l'inscription". $e;
    //throw $th;
}

?>