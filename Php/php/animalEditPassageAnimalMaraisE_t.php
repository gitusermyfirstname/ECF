<?php

    $dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
    $username = '366740_ut';
    $password = 'Aa123456789____0004';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $prenom = $_POST['prenomAnimalMaraisE_tDeMiseAJourInput'];
    $race = $_POST['raceAnimalMaraisE_tDeMiseAJourInput'];
    $habitat = $_POST['habitatAnimalMaraisE_tDeMiseAJourInput'];
    $etat = $_POST['etatAnimalMaraisE_tDeMiseAJourInput'];
    $nourriture = $_POST['nourritureAnimalMaraisE_tDeMiseAJourInput'];
    $grammage = $_POST['grammageAnimalMaraisE_tDeMiseAJourInput'];
    $date = $_POST['dateAnimalMaraisE_tDeMiseAJourInput'];
    $detail = $_POST['detailAnimalMaraisE_tDeMiseAJourInput'];

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