<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Services</h1>
    </div>
</div>

<?php

// require "Php/php/arcadia.php";

$dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
$username = '366740_ut';
$password = 'Aa123456789____0004';

// $dsn = 'mysql:host=localhost;dbname=arcadia';
// $username = 'root';
// $password = '';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupération des champs

    // Service restaurant

    $queryServiceRestaurantTitle = "SELECT name FROM service where service_id = (SELECT COUNT(*) from service)";
    $stmtServiceRestaurantTitle = $PDO->query($queryServiceRestaurantTitle);
    $serviceRestaurantTitle = $stmtServiceRestaurantTitle->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $newServiceRestaurantTitle = $serviceRestaurantTitle['name'];

    // Service restaurant 

    $queryServiceRestaurantImgs = "SELECT * FROM imgs where imgs_id = (SELECT COUNT(*) from imgs)";
    $stmtServiceRestaurantImgs = $PDO->query($queryServiceRestaurantImgs);
    $serviceRestaurantImgs = $stmtServiceRestaurantImgs->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $newServiceRestaurantImgs = $serviceRestaurantImgs['imgs_data'];

} catch (PDOException $e) {
    echo "Erreur". $e->getMessage();
}

?>

<div class="container">

    <div class="row row-cols-2 row-cols-lg-3" id="ImgsService">
        <!-- mettons à présent les img -->
    
    <?php
        echo '
          <div class="col p-3">
            <div class="img-card text-white">
                <img class="w-100 rounded" src="../imgs/FondHeroScene.jpg" alt="">
                <p class="titre-image">'. $newServiceRestaurantTitle . '</p>

                
                <div class="action-image-buttons" data-show="">
                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#serviceRestaurantEditCard"></i></button>
                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                </div>
            </div>
            <div class="col p-4">
                <h4>Restaurantion</h4>
                <div class="text-center pt-4 ">
                  <img class="w-75 rounded" src="../imgs/cup-hot.svg" alt="">
                </div>
            </div>
          </div>'

      ?>

      <div class="col p-3">
        <div class="img-card text-white">
            <img class="w-100 rounded" src="../imgs/prague-4484518_640.jpg" alt="">
            <p class="titre-image">Visisite guidée Gratuite</p>
            <div class="action-image-buttons" data-show="">
                <button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                <button type="button" class="btn btn-outline-primary"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
            </div>
        </div>
        <div class="col p-4">
            <h4>Visite gratuite d'Arcadia</h4>
            <div class="text-center pt-4 ">
              <img class="w-75 rounded" src="../imgs/cup-hot.svg" alt="">
            </div>
        </div>
      </div>

      <div class="col p-3">
        <div class="img-card text-white">
            <img class="w-100 rounded" src="../imgs/huntington-train-2849502_640.jpg" alt="">
            <p class="titre-image">Avoir plus d'infos</p>
            <div class="action-image-buttons" data-show="">
                <button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                <button type="button" class="btn btn-outline-primary"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
            </div>
        </div>
        <div class="col p-4">
            <h4>Visiter Arcadia sur les rails</h4>
            <div class="text-center pt-4 ">
              <img class="w-75 rounded" src="../imgs/cup-hot.svg" alt="">
            </div>
        </div>
      </div>

      <!-- Alert, si l'attribut data-show="admin" est masquée les btn d'étition le seront aussi-->
      <!-- <div class="col p-3">
          <div class="image-card text-white">
              <img class="w-100 rounded" src="../imgs/FondHeroScene.jpg" alt="">
              <p class="titre-image">Restauration</p>
              <div class="action-image-buttons" data-show="admin"> 
                  <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                  <button type="button" class="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
              </div>
          </div>
      </div> -->

    </div>

    <div class="text-center">
        <a href="#" class="btn btn-primary">Réserver</a>
    </div>

</div>

<!-- Modal édition service -->

<div class="modal fade" id="serviceRestaurantEditCard" data-bs-keyboard="false" tabindex="-1" aria-labelledby="serviceRestaurantEditCardLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="serviceRestaurantEditCardLabel">Edition Photo</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <form action="../Php/php/serviceRestaurantEditCard.php" method="post">
              
            <div class="mb-3">
                <label for="serviceRestaurantTitle" class="form-label">Titre du Service</label>
                <input type="text" class="form-control" name="serviceRestaurantTitle" id="serviceRestaurantTitle" placeholder="Titre">
            </div>

              <div class="mb-3">
                <label for="serviceRestaurantImgs" class="form-label">Img</label>
                <input type="file" class="form-control" name="serviceRestaurantImgs" id="serviceRestaurantImgs">
              </div>
      
              <div class="text-center">
                  <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Enregistrer</button> -->
                  <input type="submit" class="btn btn-primary" id="btnEditServiceRestaurant" data-bs-dismiss="modal" value="Modifier">

                </div>
          </form>

      </div>
    </div>

    </div>
     
</div>
    
    <!-- <i class="bi bi-cup-hot-fill"></i>

    <i class="bi bi-train-front-fill"></i>

    <i class="bi bi-map"></i> -->

  </div>
</div>
       
      </div>
    </div>
</div>

<!-- Modal suppression -->

<div class="modal fade" id="DeletePhotoModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="DeletePhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="DeletePhotoModalLabel">Etes-vous sûr de la suppression la photo ?</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form>
                <div class="mb-3">
                  <p>Titre</p>
                  <img class="w-100 rounded" src="../imgs/restaurant-449952_640.jpg" alt="">
                </div>
        
                <div class="text-center">
                    <button type="button" class="btn btn-danger">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>        
            </form>

        </div>
       
      </div>
    </div>
</div>
</div>
