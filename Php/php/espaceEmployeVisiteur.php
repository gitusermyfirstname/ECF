<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Arcadia</h1>
        <button class="btn btn-primary">Explorer</button>
    </div>
</div>

<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupération des champs

    // Habitats

    //Marais
    $queryMail = "SELECT * FROM mail";
    $stmtMail = $PDO->query($queryMail);
    $listeMail = $stmtMail->fetchAll(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Récupération
    // Afficher les utilisateurs
    foreach ($listeMail as $mail) {
        echo "Mail de : " . $mail["email"] . "<br>";
        echo "Envoyé le : " . $mail["date"] . "<br>";
        echo "Le mail : " . $mail["mail"] . "<br>";
        echo "<br>";
    }

} catch (PDOException $e) {
    echo "Erreur". $e;
}

?>

<!-- <section class="container p-4">

<h2>Liste des mails</h2>

</section>

<section class="container p-4">

<h2>Liste des mails</h2>

</section> -->

    