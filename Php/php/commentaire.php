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

    $pseudo = $_POST['pseudo'];
    $opinion = $_POST['opinion'];

    $cookie_name_pseudo = "utilisateurPseudo";
    $cookie_name_opinion = "utilisateurAvis";

    setcookie($cookie_name_pseudo, $_POST['pseudo'], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_name_opinion, $_POST['opinion'], time() + (86400 * 30), "/"); // 86400 = 1 day


    // putting

    $insertQuery = "INSERT INTO avis (pseudo, avis, cookieNamePseudo, cookieNameOpinion) VALUES (:pseudo, :avis, :cookieNamePseudo, :cookieNameOpinion)";
    $stmt = $PDO->prepare($insertQuery);

    // $stmtUpdtID = $PDO->prepare($updtId);
    
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':avis', $opinion);
    $stmt->bindParam(':cookieNamePseudo', $_COOKIE["utilisateurPseudo"]);
    $stmt->bindParam(':cookieNameOpinion', $_COOKIE["utilisateurAvis"]);
    
    // $stmt->bindParam(':updtId', $updtId);


    $stmt->execute();

    // $stmtUpdtID->execute();
    
    echo "ok";

    //$Query = 'UPDATE avis SET isVisible = "oui" Where avis_id = PDO->$_COOKIE';


} catch (PDOException $e) {
    echo "Exeption". $e;
}

?>