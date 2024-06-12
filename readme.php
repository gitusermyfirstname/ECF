<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Habitats

    //habitat, Marrais
    $titreHabitatMarrais = $_POST['TitreDeMiseAJourInput'];
    $descriptionHabitatMarrais = $_POST['descriptionDeMiseAJourInput'];

    //habitat, Forêts
    $titreHabitatForêts = $_POST['TitreDeMiseAJourInput'];
    $descriptionHabitatForêts = $_POST['descriptionDeMiseAJourInput'];

    //habitat, Prairies
    $titreHabitatPrairies = $_POST['TitreDeMiseAJourInput'];
    $descriptionHabitatPrairies = $_POST['descriptionDeMiseAJourInput'];

    // Services
    
    //services, Restaurant
    $titreServiceRestaurant = $_POST['TitreDeMiseAJourInput'];
    $descriptionServiceRestaurant = $_POST['descriptionDeMiseAJourInput'];

    //service, visiteGuideeGratuite
    $titreServiceVsiteGuideeGratuite = $_POST['TitreDeMiseAJourInput'];
    $descriptionServiceVsiteGuideeGratuite = $_POST['descriptionDeMiseAJourInput'];

    //service, ServiceVsiteSurRails
    $titreServiceVsiteSurRails = $_POST['TitreDeMiseAJourInput'];
    $descriptionServiceVsiteSurRails = $_POST['descriptionDeMiseAJourInput'];

    // putting Habitat Marrais

    $insertQueryHabitatMarrais = "INSERT INTO habitat (name, description) VALUES (:titre, :description)";
    $stmtHabitatMarrais = $PDO->prepare($insertQuery);
    $stmtHabitatMarais->bindParam(':titre', $titreHabitatMarrais);
    $stmtHabitatMarais->bindParam(':description', $descriptionHabitatMarrais);
    $stmtHabitatMarai->execute();
    echo "ok Habitat des Marrais";

    // putting Habitat Marrais

    $insertQueryHabitatForêts = "INSERT INTO habitat (name, description) VALUES (:titre, :description)";
    $stmtHabitatForêts = $PDO->prepare($insertQuery);
    $stmtHabitatForêt->bindParam(':titre', $titreHabitatForêts);
    $stmtHabitatForêt->bindParam(':description', $descriptionHabitatForêts);
    $stmtHabitatForêt->execute();
    echo "ok Habitat des Forêt ";

    // putting Habitat des Prairies

    $insertQueryHabitatPrairies = "INSERT INTO habitat (name, description) VALUES (:titre, :description)";
    $stmtHabitatPrairies = $PDO->prepare($insertQuery);
    $stmtHabitatPrairies->bindParam(':titre', $titreHabitatPrairies);
    $stmtHabitatPrairies->bindParam(':description', $descriptionHabitatPrairies);
    $stmtHabitatPrairies->execute();
    echo "ok Habitat des Prairies ";















} catch (PDOException $e) {
    echo "Exeption". $e;
    //throw $th;
}

?>