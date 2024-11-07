<?php

    $dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
    $username = '366740_ut';
    $password = 'Aa123456789____0004';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $prenom = $_POST['prenomAnimalMaraisE_vDeMiseAJourInput'];
    $race = $_POST['raceAnimalMaraisE_vDeMiseAJourInput'];
    $habitat = $_POST['habitatAnimalMaraisE_vDeMiseAJourInput'];
    $etat = $_POST['etatAnimalMaraisE_vDeMiseAJourInput'];
    $nourriture = $_POST['nourritureAnimalMaraisE_vDeMiseAJourInput'];
    $grammage = $_POST['grammageAnimalMaraisE_vDeMiseAJourInput'];
    $date = $_POST['dateAnimalMaraisE_vDeMiseAJourInput'];
    $detail = $_POST['detailAnimalMaraisE_vDeMiseAJourInput'];

    // putting

    $insertQuery = "INSERT INTO animal (prenom, race, habitat, etat, nourriture, grammage, date, detail) VALUES (:prenom, :race, :habitat, :etat, :nourriture, :grammage, :date, :detail )";
    
    $stmt = $PDO->prepare($insertQuery);
    
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':race', $race);
    $stmt->bindParam(':habitat', $habitat);
    $stmt->bindParam(':etat', $etat);
    $stmt->bindParam(':nourriture', $nourriture);
    $stmt->bindParam(':grammage', $grammage);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':detail', $detail);

    $stmt->execute();
    
    // echo "ok";
    header('Location: /marais');

} catch (PDOException $e) {
    echo "Exeption". $e;
}