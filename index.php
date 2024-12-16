<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <!-- <link rel="stylesheet" href="./bootstrap-icons-1.11.3/font/bootstrap-icons.css"> -->
    
    <!-- Tout bootstrap se trouve déjà au sein de main.css, mais je ne supprime pas les fichier d'icones
    Ou plutôt, je le supprime, je j'importe bootstrap icons sur le Sass main.scss-->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./scss/main.css">

    <title>Espace zoologique Arcadia</title>
</head>

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
        // Horaire

        $queryHoraire = "SELECT * FROM horaire where horaire_id = (SELECT COUNT(*) from horaire)";
        $stmtHoraire = $PDO->query($queryHoraire);
        $horaire = $stmtHoraire->fetch(PDO::FETCH_ASSOC);

        // Récupération
        $Newhoraire = $horaire['horaire'];

      } catch (PDOException $e) {
          echo "Exeption". $e;
      }

?>

<body>
    <header>
        
        <nav class="navbar navbar-expand-lg bg-black" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Arcadia</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="/habitats">Habitats</a>
                  </li>

                  <li class="nav-item">
                      <select  name="connexionDeLUtilisateur" id="connexionDeLUtilisateur" data-show="disconnected">
                        <option value="first" selected disabled>Connexion</option>
                        <option value="employe" id="employe">Employe</option>
                        <option value="veterinaire" id="veterinaire">Vétérinaire</option>
                        <option value="admin" id="admin">Admin</option>
                      </select>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" id="signout-btn" data-show="connected">Déconnexion</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>

                </ul>
                
              </div>
            </div>
          </nav>
        
    </header>

    <main id="main-page">
        <!-- Le contenue de la page sera mis ici -->
    </main>

<!-- Modal édition -->

<div class="modal fade" id="EditionHoraire" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditionHoraireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="EditionHoraireLabel">Edition Photo</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <form action="./Php/php/homeEditHoraire.php" method="post">
              <div class="mb-3">
                <label for="HoraireInput" class="form-label">Horaire</label>
                <input type="text" class="form-control" name="HoraireInput" id="HoraireInput" placeholder="Horaire">
              </div>

              <div class="text-center">
                  <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
          </form>

      </div>
    
    </div>
  </div>
</div>

        <footer class="bg-black text-white text-center footer">
            
            <div class="row">

                    <div class="col-12 col-lg-4">

                        <h3 class="text-primary inline">Nos horaires</h3>
                          <div class="inline action-image-buttons" data-show="connected">
                            <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionHoraire"></i></button>
                          </div>
                            <?php
                                  echo '<p>'. $Newhoraire . '</p>';
                            ?>
                    </div>

                    <div class="col-12 col-lg-4">
                        <p>Arcadia<br/>
                          Situé en France près de la forêt de Brocéliande <br/>
                          Bretagne <br/>
                        </p>
                    </div>

                    <div class="col-12 col-lg-4">
                        <p class="inline">arcadia@gmail.com</p>
                    </div>
                    
            </div>

        </footer>

    <script src="js/scriptArcadia.js"></script>


    <!-- <script src="./pages/admin/js/services/editServices.js"></script> -->
    <script type="module" src="./Router/router.js"></script>

    <script src="./bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>

         
</body>
</html>



