<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Marais</h1>
    </div>
</div>

<?php

$dsn = 'mysql:host=mysql-utilisateur.alwaysdata.net;dbname=utilisateur_arecadia';
$username = '366740_ut';
$password = 'Aa123456789____0004';

try {
    $PDO = new PDO($dsn, $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupération des champs


    // Animaux


    // Marais
    // E_t


    // $queryAnimalMaraisE_t = "SELECT * FROM animal where animal_id = (SELECT COUNT(espece = 'Hippopotame amphibie') from anim!!al)";

    $queryAnimalMaraisE_t = "SELECT * FROM animal where espece = 'Hippopotame amphibie'";
    // $queryAnimalMaraisE_t = "SELECT * FROM animal where  = 1";
    // $queryAnimalMaraisE_t = "SELECT * FROM animal where animal_id = (SELECT COUNT(espece = 'Hippopotame amphibie') from animal)";

    $stmtAnimalMaraisE_t = $PDO->query($queryAnimalMaraisE_t);
    $AnimalMaraisE_t = $stmtAnimalMaraisE_t->fetch(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Récupération
    $titreAnimalMaraisE_t = $AnimalMaraisE_t['espece'];
    $descriptionAnimalMaraisE_t = $AnimalMaraisE_t['description'];

    // EditPassageAnimalMaraisE_t
    $queryEditPassageAnimalMaraisE_t = "SELECT * FROM animal where animal_id = (SELECT COUNT(prenom = 'tamee' and race = 'ok') from animal)";
    // $queryEditPassageAnimalMaraisE_t = "SELECT * FROM animal where animal_id = (SELECT COUNT(prenom = 'tamee' and date <> '0000-00-00 00:00:00'))";
    $stmtEditPassageAnimalMaraisE_t = $PDO->query($queryEditPassageAnimalMaraisE_t);
    $AnimalEditPassageMaraisE_t = $stmtEditPassageAnimalMaraisE_t->fetch(PDO::FETCH_ASSOC);
    // Récupération
    $prenomAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['prenom'];
    $raceAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['race'];
    $habitatAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['habitat'];
    $etatAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['etat'];
    $nourritureAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['nourriture'];
    $grammageAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['grammage'];
    $dateAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['date'];
    $detailAnimalMaraisE_t = $AnimalEditPassageMaraisE_t['detail'];


    // Marais
    // E_u

    $queryAnimalMaraisE_u = "SELECT * FROM animal where espece = 'Le capybara'";
    $stmtAnimalMaraisE_u = $PDO->query($queryAnimalMaraisE_u);
    $AnimalMaraisE_u = $stmtAnimalMaraisE_u->fetch(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Récupération
    $titreAnimalMaraisE_u = $AnimalMaraisE_u['espece'];
    $descriptionAnimalMaraisE_u = $AnimalMaraisE_u['description'];

    // EditPassageAnimalMaraisE_u
    $queryEditPassageAnimalMaraisE_u = "SELECT * FROM animal where animal_id = (SELECT COUNT(prenom = 'lecb' and race = 'ok') from animal)";
    // $queryEditPassageAnimalMaraisE_u = "SELECT * FROM animal where animal_id = (SELECT COUNT(prenom = 'tamee' and date <> '0000-00-00 00:00:00'))";
    $stmtEditPassageAnimalMaraisE_u = $PDO->query($queryEditPassageAnimalMaraisE_u);
    $AnimalEditPassageMaraisE_u = $stmtEditPassageAnimalMaraisE_u->fetch(PDO::FETCH_ASSOC);
    // Récupération
    $prenomAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['prenom'];
    $raceAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['race'];
    $habitatAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['habitat'];
    $etatAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['etat'];
    $nourritureAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['nourriture'];
    $grammageAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['grammage'];
    $dateAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['date'];
    $detailAnimalMaraisE_u = $AnimalEditPassageMaraisE_u['detail'];





    // Marais
    // E_v

    $queryAnimalMaraisE_v = "SELECT * FROM animal where espece = 'Le flamant rose'";
    $stmtAnimalMaraisE_v = $PDO->query($queryAnimalMaraisE_v);
    $AnimalMaraisE_v = $stmtAnimalMaraisE_v->fetch(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Récupération
    $titreAnimalMaraisE_v = $AnimalMaraisE_v['espece'];
    $descriptionAnimalMaraisE_v = $AnimalMaraisE_v['description'];

    // EditPassageAnimalMaraisE_v
    $queryEditPassageAnimalMaraisE_v = "SELECT * FROM animal where animal_id = (SELECT COUNT(prenom = 'flat' and race = 'ok') from animal)";
    // $queryEditPassageAnimalMaraisE_v = "SELECT * FROM animal where animal_id = (SELECT COUNT(prenom = 'tamee' and date <> '0000-00-00 00:00:00'))";
    $stmtEditPassageAnimalMaraisE_v = $PDO->query($queryEditPassageAnimalMaraisE_v);
    $AnimalEditPassageMaraisE_v = $stmtEditPassageAnimalMaraisE_v->fetch(PDO::FETCH_ASSOC);
    // Récupération
    $prenomAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['prenom'];
    $raceAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['race'];
    $habitatAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['habitat'];
    $etatAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['etat'];
    $nourritureAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['nourriture'];
    $grammageAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['grammage'];
    $dateAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['date'];
    $detailAnimalMaraisE_v = $AnimalEditPassageMaraisE_v['detail'];


} catch (PDOException $e) {
    echo "Erreur". $e;
}

?>

<section>

    <article class="presentation">
        <div class="container p-4">
            <h2 class="text-center text-primary p-4">Les espèces à Arcadia</h2>
        </div>
    </article>
    
    <article class="espece">
        <div class="container p-4">
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">

                <?php

                    echo '<h3 class="text-primary p-3 inline">'.   
                                $titreAnimalMaraisE_t .
                            '</h3>

                            <div class="inline" data-show="">
                                <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editAnimalMaraisE_t"></i></button>
                            </div>

                    <p class="text-justify text-primary p-3">' . 
                                $descriptionAnimalMaraisE_t .
                    '</p>'

                ?>

                    <!--<h3 class="p-3">Hippopotame amphibie</h3>
                    <p class="text-justify p-3">
                        L'hippopotame amphibie passe la majeure partie de son temps dans l'eau et la boue
                    </p>-->
                    <div class="caracteristiques text-primary">
                        
                        <ul>

                            <?php
                                echo

                                    '<div class="inline" data-show="">
                                        <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editPassageAnimalMaraisE_t"></i></button>
                                    </div>
                                    
                                    <li>Prénom : '. $prenomAnimalMaraisE_t .'</li>
                                    <li>Race : '. $raceAnimalMaraisE_t .'</li>
                                    <li>Habitat : '. $habitatAnimalMaraisE_t .'</li>'
                            ?>

                        </ul>
                </div>
                    
                    <div class="text-primary">
                        <ul>
                            <?php
                            
                                echo '<li>Etat de l\'animal : '. $etatAnimalMaraisE_t .'</li>
                                <li>Nourriture proposée : '. $nourritureAnimalMaraisE_t .'</li>
                                <li>Grammage de la nourriture : '. $grammageAnimalMaraisE_t .' </li>
                                <li>Date de passage : '. $dateAnimalMaraisE_t .'</li>
                                <li>Détails de l\'état de l\'animal : '. $detailAnimalMaraisE_t .' </li>'
                            ?>
                        </ul>
                    </div>

                </div>

                <div class="col img-card">
                    <a href="#" id="espece1">

                        <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DES_RIVIÈRES_ET_DES_MARAIS/hypopotame-2380601_640.jpg" id="espece1" alt="ImgsAnimalMaraisE_t">
                        <p class="titre-image text-white">Hippopotame Amphipie</p>
                
                    </a>

                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModalAnimalMaraisE_t"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModalAnimalMaraisE_t"></i></button>
                    </div>
                
                </div>
            </div>

            <div class="text-center pt-4">
                <button class="btn btn-secondary" id="apprecierEspece1">J'apprécie</button>
            </div>

        </div>
    </article>

    <article class="bg-black espece">
        <div class="container p-4">
            <div class="row row-col-2 align-items-center">
                <div class="col img-card">
                    <a href="#" id="espece2">
                        <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DES_JUNGLES_ET_DES_FORÊTS/badger-4814484_640.jpg" alt="">
                    
                        <div class="action-image-buttons" data-show="">
                            <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                            <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                        </div>
                    
                    </a>
                </div>

                <div class="col text-justify">
                    <?php
                    
                        echo '<h3 class="text-white inline p-3">'.
                                $titreAnimalMaraisE_u .
                            '</h3>

                            <div class="inline" data-show="">
                                <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editAnimalMaraisE_u"></i></button>
                            </div>

                            <p class="text-justify text-white p-3">'.
                                $descriptionAnimalMaraisE_u .
                            '</p>'
                    ?>

                    <div class="caracteristiques text-white">

                        <ul class="text-white">
                            <?php
                                echo

                                    '<div class="inline" data-show="">
                                        <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editPassageAnimalMaraisE_t"></i></button>
                                    </div>

                                    <li>Prénom : '. $prenomAnimalMaraisE_u .'</li>
                                    <li>Race : '. $raceAnimalMaraisE_u .'</li>
                                    <li>Habitat : '. $habitatAnimalMaraisE_u .'</li>'
                            ?>

                        </ul>
                    </div>
                    
                    <div class="infosVeto">
                        <ul class="text-white">
                            <?php
                            
                                echo '<li>Etat de l\'animal : '. $etatAnimalMaraisE_u .'</li>
                                <li>Nourriture proposée : '. $nourritureAnimalMaraisE_u .'</li>
                                <li>Grammage de la nourriture : '. $grammageAnimalMaraisE_u .' </li>
                                <li>Date de passage : '. $dateAnimalMaraisE_t .'</li>
                                <li>Détails de l\'état de l\'animal : '. $detailAnimalMaraisE_u .' </li>'
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center pt-4">
                <button class="btn btn-secondary" id="apprecierEspece2">J'apprécie</button>
            </div>

        </div>
    </article>

    <article class="espece">
        <div class="container p-4">
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">

                <?php

                    echo '<h3 class="text-primary p-3 inline">'.
                                $titreAnimalMaraisE_v . 
                            '</h3>

                            <div class="inline" data-show="">
                                <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editAnimalMaraisE_t"></i></button>
                            </div>

                    <p class="text-justify p-3">'.
                        $descriptionAnimalMaraisE_v .
                    '</p>'
                ?>

                    <div class="caracteristiques text-primary">

                        <ul>
                            <?php
                                echo
                                    
                                    '<div class="inline" data-show="">
                                        <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editPassageAnimalMaraisE_t"></i></button>
                                    </div>
                                    
                                    <li>Prénom : '. $prenomAnimalMaraisE_v .'</li>
                                    <li>Race : '. $raceAnimalMaraisE_v .'</li>
                                    <li>Habitat : '. $habitatAnimalMaraisE_v .'</li>'
                            ?>
                        </ul>
                    </div>
                    
                    <div class="infosVeto">
                        <ul>
                        <?php
                            
                            echo '<li>Etat de l\'animal : '. $etatAnimalMaraisE_v .'</li>
                            <li>Nourriture proposée : '. $nourritureAnimalMaraisE_v .'</li>
                            <li>Grammage de la nourriture : '. $grammageAnimalMaraisE_v .' </li>
                            <li>Date de passage : '. $dateAnimalMaraisE_v .'</li>
                            <li>Détails de l\'état de l\'animal : '. $detailAnimalMaraisE_v .' </li>'
                        ?>
                        </ul>
                    </div>

                </div>
                <div class="col img-card">
                    <a href="#" id="espece3">
                        <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DE_LA_SAVANE_ET_DES_PRAIRIES/kangaroos-340287_640.jpg" alt="">
                    </a>

                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                </div>
            </div>

            <div class="text-center pt-4">
                <button class="btn btn-secondary" id="apprecierEspece3">J'apprécie</button>
            </div>

            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary">Voir tous les animaux d'Arcadia</a>
                <!--<a href="/forets" class="btn btn-primary">Accéder aux espèce des forêts</a>-->
            </div>

            
            
        </div>
    </article>

</section>






<!-- Modal édition -->

<div class="modal fade" id="EditionPhotoModalAnimalMaraisE_t" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditionPhotoModalAnimalMaraisE_tLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="EditionPhotoModalAnimalMaraisE_tLabel">Edition Photo </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="EditionPhotoModalAnimalMaraisE_t.php" method="post">
                <div class="mb-3">
                  <label for="NamePhotoInputAnimalMaraisE_t" class="form-label">Titre</label>
                  <input type="text" class="form-control" name="NamePhotoInputAnimalMaraisE_t" id="NamePhotoInputAnimalMaraisE_t" placeholder="AnimalMaraisE_t">
                </div>
        
                <div class="mb-3">
                  <label for="ImgInputAnimalMaraisE_t" class="form-label">Img</label>
                  <input type="file" class="form-control" name="ImgInputAnimalMaraisE_t" id="ImgInputAnimalMaraisE_t">
                </div>
        
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>

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


<!-- Edition des Animaux -->

<!-- Edit Animaux des Marais E_t -->

<div class="modal fade" id="editAnimalMaraisE_t" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnimalMaraisE_tLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editAnimalMaraisE_tLabel">Edition de l'animal des marais sélectionné </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/animalEditAnimalMaraisE_t.php" method="post">
                <div class="mb-3">
                  <label for="titreAnimalMaraisE_tDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input value="Hippopotame amphibie" type="text" class="form-control" name="titreAnimalMaraisE_tDeMiseAJourInput" id="titreAnimalMaraisE_tDeMiseAJourInput" placeholder="Animal Marais E_t" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionAnimalMaraisE_tDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea value="ok" class="champ" name="descriptionAnimalMaraisE_tDeMiseAJourInput" placeholder="Description Marais" id="descriptionAnimalMaraisE_tDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditAnimalMaraisE_t" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>

<!-- editPassageAnimalMaraisE_t -->

<div class="modal fade" id="editPassageAnimalMaraisE_t" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnimalMaraisE_tLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editAnimalMaraisE_tLabel">Edition de l'animal des marais sélectionné </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/animalEditPassageAnimalMaraisE_t.php" method="post">

                <div class="mb-3">
                  <label for="prenomAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier le prénom :</label>
                  <input value="tame" type="text" class="form-control" name="prenomAnimalMaraisE_tDeMiseAJourInput" id="prenomAnimalMaraisE_tDeMiseAJourInput" placeholder="Prénom animal Marais E_t" required>
                </div>

                <div class="mb-3">
                  <label for="raceAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier la race :</label>
                  <input value="ok" type="text" class="form-control" name="raceAnimalMaraisE_tDeMiseAJourInput" id="raceAnimalMaraisE_tDeMiseAJourInput" placeholder="Race animal Marais E_t" required>
                </div>

                <div class="mb-3">
                  <label for="habitatAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier l'habitat :</label>
                  <input value="marais" type="text" class="form-control" name="habitatAnimalMaraisE_tDeMiseAJourInput" id="habitatAnimalMaraisE_tDeMiseAJourInput" placeholder="Habitat animal Marais E_t" required>
                </div>

                <div class="mb-3">
                  <label for="etatAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier l'état :</label>
                  <input value="C'est ok" type="text" class="form-control" name="etatAnimalMaraisE_tDeMiseAJourInput" id="etatAnimalMaraisE_tDeMiseAJourInput" placeholder="Etat animal Marais E_t" required>
                </div>

                <div class="mb-3">
                  <label for="nourritureAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier la nourriture :</label>
                  <input value="herbes et crabes" type="text" class="form-control" name="nourritureAnimalMaraisE_tDeMiseAJourInput" id="nourritureAnimalMaraisE_tDeMiseAJourInput" placeholder="Nourriture animal Marais E_t" required>
                </div>

                <div class="mb-3">
                  <label for="grammageAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier le grammage :</label>
                  <input value="380" type="number" class="form-control" name="grammageAnimalMaraisE_tDeMiseAJourInput" id="grammageAnimalMaraisE_tDeMiseAJourInput" placeholder="Grammage de nourriture animal Marais E_t" required>
                </div>

                <div class="mb-3">
                  <label for="dateAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier la date de passage, JJ/MM/AAAA :</label>
                  <input type="date" class="form-control" name="dateAnimalMaraisE_tDeMiseAJourInput" id="dateAnimalMaraisE_tDeMiseAJourInput" placeholder="Prénom animal Marais E_t" required>
                </div>


                <div class="mb-3">
                  <label for="detailAnimalMaraisE_tDeMiseAJourInput" class="form-label">Modifier les détails</label>
                  <textarea value="Ok" class="champ" name="detailAnimalMaraisE_tDeMiseAJourInput" placeholder="Détails de l'animal Marais E_t" id="detailAnimalMaraisE_tDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditAnimalMaraisE_t" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>








<!-- Edit Animaux des Marais E_u -->

<div class="modal fade" id="editAnimalMaraisE_u" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnimalMaraisE_uLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editAnimalMaraisE_uLabel">Edition de l'animal des marais sélectionné </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/animalEditAnimalMaraisE_u.php" method="post">
                <div class="mb-3">
                  <label for="titreAnimalMaraisE_uDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input value="Le capybara" type="text" class="form-control" name="titreAnimalMaraisE_uDeMiseAJourInput" id="titreAnimalMaraisE_uDeMiseAJourInput" placeholder="Animal Marais E_u" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionAnimalMaraisE_uDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea value="Description" class="champ" name="descriptionAnimalMaraisE_uDeMiseAJourInput" placeholder="Description Marais" id="descriptionAnimalMaraisE_uDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditAnimalMaraisE_u" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>

<!-- editPassageAnimalMaraisE_u -->

<div class="modal fade" id="editPassageAnimalMaraisE_u" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnimalMaraisE_uLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editAnimalMaraisE_uLabel">Edition de l'animal des marais sélectionné </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/animalEditPassageAnimalMaraisE_u.php" method="post">

                <div class="mb-3">
                  <label for="prenomAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier le prénom :</label>
                  <input value="lecb" type="text" class="form-control" name="prenomAnimalMaraisE_uDeMiseAJourInput" id="prenomAnimalMaraisE_uDeMiseAJourInput" placeholder="Prénom animal Marais E_u" required>
                </div>

                <div class="mb-3">
                  <label for="raceAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier la race :</label>
                  <input value="" type="text" class="form-control" name="raceAnimalMaraisE_uDeMiseAJourInput" id="raceAnimalMaraisE_uDeMiseAJourInput" placeholder="Race animal Marais E_u" required>
                </div>

                <div class="mb-3">
                  <label for="habitatAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier l'habitat :</label>
                  <input value="marais" type="text" class="form-control" name="habitatAnimalMaraisE_uDeMiseAJourInput" id="habitatAnimalMaraisE_uDeMiseAJourInput" placeholder="Habitat animal Marais E_u" required>
                </div>

                <div class="mb-3">
                  <label for="etatAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier l'état :</label>
                  <input value="ok" type="text" class="form-control" name="etatAnimalMaraisE_uDeMiseAJourInput" id="etatAnimalMaraisE_uDeMiseAJourInput" placeholder="Etat animal Marais E_u" required>
                </div>

                <div class="mb-3">
                  <label for="nourritureAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier la nourriture :</label>
                  <input value="herbes et crabes" type="text" class="form-control" name="nourritureAnimalMaraisE_uDeMiseAJourInput" id="nourritureAnimalMaraisE_uDeMiseAJourInput" placeholder="Nourriture animal Marais E_u" required>
                </div>

                <div class="mb-3">
                  <label for="grammageAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier le grammage :</label>
                  <input value="380" type="number" class="form-control" name="grammageAnimalMaraisE_uDeMiseAJourInput" id="grammageAnimalMaraisE_uDeMiseAJourInput" placeholder="Grammage de nourriture animal Marais E_u" required>
                </div>

                <div class="mb-3">
                  <label for="dateAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier la date de passage, JJ/MM/AAAA :</label>
                  <input type="date" class="form-control" name="dateAnimalMaraisE_uDeMiseAJourInput" id="dateAnimalMaraisE_uDeMiseAJourInput" placeholder="Prénom animal Marais E_u" required>
                </div>


                <div class="mb-3">
                  <label for="detailAnimalMaraisE_uDeMiseAJourInput" class="form-label">Modifier les détails</label>
                  <textarea value="C'est ok, mais reste à surveiller de près" class="champ" name="detailAnimalMaraisE_uDeMiseAJourInput" placeholder="Détails de l'animal Marais E_u" id="detailAnimalMaraisE_uDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditAnimalMaraisE_u" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>








<!-- Edit Animaux des Marais E_v -->

<div class="modal fade" id="editAnimalMaraisE_v" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnimalMaraisE_vLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editAnimalMaraisE_vLabel">Edition de l'animal des marais sélectionné </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/animalEditAnimalMaraisE_v.php" method="post">
                <div class="mb-3">
                  <label for="titreAnimalMaraisE_vDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input value="Le flamant rose" type="text" class="form-control" name="titreAnimalMaraisE_vDeMiseAJourInput" id="titreAnimalMaraisE_vDeMiseAJourInput" placeholder="Animal Marais E_v" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionAnimalMaraisE_vDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea value="Description" class="champ" name="descriptionAnimalMaraisE_vDeMiseAJourInput" placeholder="Description Marais" id="descriptionAnimalMaraisE_vDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditAnimalMaraisE_v" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>

<!-- editPassageAnimalMaraisE_v -->

<div class="modal fade" id="editPassageAnimalMaraisE_v" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAnimalMaraisE_vLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editAnimalMaraisE_vLabel">Edition de l'animal des marais sélectionné </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/animalEditPassageAnimalMaraisE_v.php" method="post">

                <div class="mb-3">
                  <label for="prenomAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier le prénom :</label>
                  <input value="flat" type="text" class="form-control" name="prenomAnimalMaraisE_vDeMiseAJourInput" id="prenomAnimalMaraisE_vDeMiseAJourInput" placeholder="Prénom animal Marais E_v" required>
                </div>

                <div class="mb-3">
                  <label for="raceAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier la race :</label>
                  <input value="" type="text" class="form-control" name="raceAnimalMaraisE_vDeMiseAJourInput" id="raceAnimalMaraisE_vDeMiseAJourInput" placeholder="Race animal Marais E_v" required>
                </div>

                <div class="mb-3">
                  <label for="habitatAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier l'habitat :</label>
                  <input value="marais" type="text" class="form-control" name="habitatAnimalMaraisE_vDeMiseAJourInput" id="habitatAnimalMaraisE_vDeMiseAJourInput" placeholder="Habitat animal Marais E_v" required>
                </div>

                <div class="mb-3">
                  <label for="etatAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier l'état :</label>
                  <input value="ok" type="text" class="form-control" name="etatAnimalMaraisE_vDeMiseAJourInput" id="etatAnimalMaraisE_vDeMiseAJourInput" placeholder="Etat animal Marais E_v" required>
                </div>

                <div class="mb-3">
                  <label for="nourritureAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier la nourriture :</label>
                  <input value="herbes et crabes" type="text" class="form-control" name="nourritureAnimalMaraisE_vDeMiseAJourInput" id="nourritureAnimalMaraisE_vDeMiseAJourInput" placeholder="Nourriture animal Marais E_v" required>
                </div>

                <div class="mb-3">
                  <label for="grammageAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier le grammage :</label>
                  <input value="380" type="number" class="form-control" name="grammageAnimalMaraisE_vDeMiseAJourInput" id="grammageAnimalMaraisE_vDeMiseAJourInput" placeholder="Grammage de nourriture animal Marais E_v" required>
                </div>

                <div class="mb-3">
                  <label for="dateAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier la date de passage, JJ/MM/AAAA :</label>
                  <input type="date" class="form-control" name="dateAnimalMaraisE_vDeMiseAJourInput" id="dateAnimalMaraisE_vDeMiseAJourInput" placeholder="Prénom animal Marais E_v" required>
                </div>


                <div class="mb-3">
                  <label for="detailAnimalMaraisE_vDeMiseAJourInput" class="form-label">Modifier les détails</label>
                  <textarea value="C'est ok, mais reste à surveiller de près" class="champ" name="detailAnimalMaraisE_vDeMiseAJourInput" placeholder="Détails de l'animal Marais E_v" id="detailAnimalMaraisE_vDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditAnimalMaraisE_v" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>
