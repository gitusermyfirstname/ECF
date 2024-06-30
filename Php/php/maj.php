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

    $cookieNPs = $_COOKIE["utilisateurPseudo"];
    $cookieNAv = $_COOKIE["utilisateurAvis"];

    $cookieNAv = $_COOKIE["utilisateurAvis"];

    // putting
    
    $Query = "UPDATE avis SET isVisible = 'oui' WHERE cookieNamePseudo = 'pseudo' AND cookieNameOpinion = 'Opinion'";

    // $Query = 'UPDATE avis SET isVisible = "oui" WHERE cookieNamePseudo = ' . $cookieNPs . 'AND cookieNameOpinion = ' . $cookieNAv ."'";

    $stmt = $PDO->prepare($Query);

    $stmt->execute();
    
    echo "ok";

} catch (PDOException $e) {
    echo "Exeption". $e;
}

?>