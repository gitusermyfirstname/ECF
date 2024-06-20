<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nameService = $_POST['serviceRestaurantTitle'];
    $leServiceImgInput = $_POST['serviceRestaurantImgs'];

    // putting

    $insertQuery = "INSERT INTO service (name) VALUES (:name)";
    $insertQueryleServiceImgInput = "INSERT INTO imgs (imgs_data) VALUES (:imgs_data)";

    $stmt = $PDO->prepare($insertQuery);
    $stmtImgsData = $PDO->prepare($insertQueryleServiceImgInput);

    $stmt->bindParam(':name', $nameService);
    $stmtImgsData->bindParam(':imgs_data', $leServiceImgInput);

    $stmt->execute();
    $stmtImgsData->execute();

    
    echo "ok";

} catch (PDOException $e) {
    echo "Exeption". $e;
}

?>