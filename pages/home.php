<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Arcadia</h1>
        <button class="btn btn-primary">Explorer</button>
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

    // Habitats

    //Marais
    $queryHabitatMarais = "SELECT * FROM habitat where habitat_id = (SELECT COUNT(*) from habitat)";
    $stmtHabitatMarais = $PDO->query($queryHabitatMarais);
    $habitatMarais = $stmtHabitatMarais->fetch(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Récupération
    $titreHabitatMarais = $habitatMarais['name'];
    $descriptionHabitatMarais = $habitatMarais['description'];

    //Forêts
    $queryHabitatForêts = "SELECT * FROM habitat where habitat_id = (SELECT COUNT(*) from habitat)";
    $stmtHabitatForêts = $PDO->query($queryHabitatForêts);
    $habitatForêts = $stmtHabitatForêts->fetch(PDO::FETCH_ASSOC);
    // Récupération
    $titreHabitatForêts = $habitatForêts['name'];
    $descriptionHabitatForêts = $habitatForêts['description'];

    //Forêts
    $queryHabitatPrairie = "SELECT * FROM habitat where habitat_id = (SELECT COUNT(*) from habitat)";
    $stmtHabitatPrairie = $PDO->query($queryHabitatPrairie);
    $habitatPrairie = $stmtHabitatPrairie->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $titreHabitatPrairie = $habitatPrairie['name'];
    $descriptionHabitatPrairie = $habitatPrairie['description'];

    // Services

    // Restauration

    $queryServiceRestaurant = "SELECT * FROM service where service_id = (SELECT COUNT(*) from service)";
    $stmtSerciceRestaurant = $PDO->query($queryServiceRestaurant);
    $serviceRestaurant = $stmtSerciceRestaurant->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $titreServiceRestaurant = $serviceRestaurant['name'];
    $descriptionServiceRestaurant = $serviceRestaurant['description'];

    // Visite guidée gratuite

    $queryServiceVisiteGuideeGratuite = "SELECT * FROM service where service_id = (SELECT COUNT(*) from service)";
    $stmtServiceVisiteGuideeGratuite = $PDO->query($queryServiceVisiteGuideeGratuite);
    $serviceVisiteGuideeGratuite = $stmtServiceVisiteGuideeGratuite->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $titreServiceVisiteGuideeGratuite = $serviceVisiteGuideeGratuite['name'];
    $descriptionServiceVisiteGuideeGratuite = $serviceVisiteGuideeGratuite['description'];

    // Visite sur rails

    $queryServiceVisiteSurRails = "SELECT * FROM service where service_id = (SELECT COUNT(*) from service)";
    $stmtServiceVisiteSurRails = $PDO->query($queryServiceVisiteSurRails);
    $serviceVisiteSurRails = $stmtServiceVisiteSurRails->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $titreServiceVisiteSurRails = $serviceVisiteSurRails['name'];
    $descriptionServiceVisiteSurRails = $serviceVisiteSurRails['description'];


    // Horaire

    $queryHoraire = "SELECT * FROM horaire where horaire_id = (SELECT COUNT(*) from horaire)";
    $stmtHoraire = $PDO->query($queryHoraire);
    $horaire = $stmtHoraire->fetch(PDO::FETCH_ASSOC);

    // Récupération
    $Newhoraire = $horaire['horaire'];

    //Commentaires
    $queryAvis = 'SELECT * FROM avis where isVisible = "oui" ';
    $stmtAvis = $PDO->query($queryAvis);
    $listeAvis = $stmtAvis->fetchAll(PDO::FETCH_ASSOC);
    // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Récupération
    // Afficher les utilisateurs

} catch (PDOException $e) {
    echo "Erreur". $e;
}

?>

<section>

    <article class="presentation">
        <div class="container p-4">
            <h2 class="text-center text-primary p-4">Bienvenue à Arcadia</h2>
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">
                    <p class="text-justify">
                        Bienvenue dans un monde aux grandes valeurs écologiques
                    </p>
                </div>
            </div>
        </div>
    </article>

    <!-- Marais -->

    <article class="habitat">
        <div class="container p-4">
            <h2 class="text-center text-primary">Les différents habitats à Arcadia</h2>
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify" id="aModifier">
                              
                <?php

                    echo '<h3 class="p-3 inline" id="titre">' .
                                $titreHabitatMarais .
                            '</h3>

                            <div class="inline" data-show="">
                                    <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editHabitatMarais"></i></button>
                            </div>

                            <p class="text-justify p-3" id="descriptionHabitatMaraisDeMAJ">' . $descriptionHabitatMarais . '</p>'

                ?>


                
                <!-- <h3 class="p-3" id="titreDesMarais">
                        LES ANIMAUX DES MARAIS
                        <div class="inline" data-show="">
                            <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#modificationTexteCards"></i></button>
                        </div>
                </h3> -->

                    <!-- <p class="text-justify p-3" id="descriptionMarais">
                        Les marais sont des zones humides qui peuvent être constituées d'eau marécageuse, douce ou plus ou moins salée. Ces marais représentent un grand intérêt pour les animaux. Avec leur dense végétation, les animaux peuvent s'y reproduire, s'y réfugier et y vivre tranquillement. On y retrouve :
                    </p> -->
                    
                    <ul>
                        <li><a href="#">L’hippopotame amphibie</a></li>
                        <li><a href="#">Le capybara</a></li>
                        <li><a href="#">Le flamant rose</a></li>
                    </ul>

                </div>

                
                <div class="col img-card">
                    <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DES_RIVIÈRES_ET_DES_MARAIS/hypopotame-2380601_640.jpg" alt="">
                    
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/habitats" class="btn btn-primary">Explorer l'habitat</a>            
            </div>
        </div>

    </article>

        <!-- Forêts -->

    <article class="bg-black habitat">
        <div class="container p-4">
            <div class="row row-col-2 align-items-center">
                <div class="col img-card">
                    <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DES_JUNGLES_ET_DES_FORÊTS/koala-2549484_640.jpg" alt="">
                    
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                
                </div>

                <div class="col text-justify">

                <?php

                    echo '<h3 class="text-white p-3 inline">' .   
                                $titreHabitatForêts .
                            '</h3>

                            <div class="inline" data-show="">
                                <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editHabitatForêts"></i></button>
                            </div>

                    <p class="text-justify text-white p-3">' . 
                                $descriptionHabitatForêts .
                    '</p>'

                ?>

                    <!-- <p class="text-justify text-white p-3">
                        La forêt est composé d'une flore dense. Il existe une grande variété de forêts dans le monde et chacune possède ses caractéristiques particulières. Ce sont ces particularités et le type de végétations qu'elles abritent qui caractérisent la diversité des espèces animales. On retrouve dans la forêt :
                    </p> -->

                    <ul class="text-white">
                        <li><a href="#" class="text-white">Le badger</a></li>
                        <li><a href="#" class="text-white">Le koala</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/habitat" class="btn btn-primary">Explorer l'habitat</a>            
            </div>
        </div>
    </article>

        <!-- Prairie -->

    <article class="habitat">
        <div class="container p-4">
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">
                    
                <?php

                    echo '<h3 class="p-3 inline" id="titre">' .
                                $titreHabitatPrairie .
                            '</h3>

                            <div class="inline" data-show="">
                                    <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editHabitatPrairies"></i></button>
                            </div>

                            <p class="text-justify p-3" id="descriptionHabitatPrairiesDeMAJ">' . $descriptionHabitatPrairie . '</p>'

                ?>

                    <!-- <p class="text-justify p-3">
                        Les prairies sont de grandes étendues d'herbes qui offrent de nombreuses ressources alimentaires pour les animaux, c'est pourquoi on y trouve une grande biodiversité. Les prairies couvraient autrefois 40% de la surface terrestre.

                        On y retrouve :
                    </p> -->
                    <ul>
                        <li><a href="#">Les kangourous</a></li>
                    </ul>

                </div>
                <div class="col img-card">
                    <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DE_LA_SAVANE_ET_DES_PRAIRIES/kangaroos-340287_640.jpg" alt="">
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/habitat" class="btn btn-primary">Explorer l'habitat</a>            
            </div>
        </div>

    </article>

            <!-- Restauration -->

    <article class="bg-black service">
        <div class="container p-4">
            <h2 class="text-center text-primary p-4">Les différents services à Arcadia</h2>
            <div class="row row-col-2 align-items-center">
                <div class="col img-card">
                    <img class="w-100 rounded" src="../imgs/FondHeroScene.jpg" alt="">
                    
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                </div>

                <div class="col text-justify editService1">

                <?php

                    echo '<h3 class="text-white p-3 inline">' .   
                                $titreServiceRestaurant .
                            '</h3>

                            <div class="inline" data-show="">
                                <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editServiceRestaurant"></i></button>
                            </div>

                    <p class="text-justify text-white p-3">' . 
                                $descriptionServiceRestaurant .
                    '</p>'

                ?>
                    <!-- <p class="text-justify text-white p-3">
                        Bienvenue à de notre restaurant gastronomique à Arcadia. Vous êtes invités à un voyage de cuisine exceptionnelle
                        Découvrez nos grandes richesses avec nos plats élaborés, à partir de produits frais, de saison, et cueillis localement
                    </p> -->
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/services" class="btn btn-primary">La carte</a>            
            </div>
        </div>
    </article>

    <!-- Visite guidee gratuite -->

    <article class="service">
        <div class="container p-4">
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">

                <?php

                    echo '<h3 class="p-3 inline" id="titre">' .
                                $titreServiceVisiteGuideeGratuite .
                            '</h3>

                            <div class="inline" data-show="">
                                    <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editServiceVisiteGuideeGratuite"></i></button>
                            </div>

                            <p class="text-justify p-3" id="descriptionHabitatMaraisDeMAJ">' . $descriptionServiceVisiteGuideeGratuite . '</p>'

                ?>

                    <!-- <p class="text-justify p-3">
                        Nous proposons des visites guidées gratuites du zoo, venez explorer nos habitats, composé de notre réserve d'animaux les plus rares, nos espaces, ainsi que les itinéraires élaboré pour les visites, ne sont que pour votre po plus grand plaisir
                    </p> -->

                </div>
                <div class="col img-card">
                    <img class="w-100 rounded" src="../imgs/prague-4484518_640.jpg" alt="">
                
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/services" class="btn btn-primary">Visite guidée gratuite d'Arcadia</a>            
            </div>
        </div>

    </article>

    <!-- Visite sur rails -->

    <article class="bg-black service">
        <div class="container p-4">
            <div class="row row-col-2 align-items-center">
                <div class="col img-card">
                    <img class="w-100 rounded" src="../imgs/huntington-train-2849502_640.jpg" alt="">
                
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                
                </div>

                <div class="col text-justify">

                <?php

                    echo '<h3 class="text-white p-3 inline">' .   
                                $titreServiceVisiteSurRails .
                            '</h3>

                            <div class="inline" data-show="">
                                <button type="button" class="btn btn-outline-primary" id="btnEditIcn"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editServiceVisiteSurRails"></i></button>
                            </div>

                    <p class="text-justify text-white p-3">' . 
                                $descriptionServiceVisiteSurRails .
                    '</p>'

                ?>


                    <!-- <p class="text-justify text-white p-3">
                        Nous proposons également, des visites du zoo en train, venez explorer nos habitats, composé de notre réserve d'animaux les plus rares, nos espaces, ainsi que les itinéraires élaboré pour les visites, ne sont que pour votre po plus grand plaisir
                    </p> -->
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/services" class="btn btn-primary">Visiter Arcadia sur sur les rails</a>            
            </div>
        </div>
    </article>
    
    <article class="espece">
        <div class="container p-4">
            <h2 class="text-center text-primary">Les Animaux à Arcadia</h2>
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">
                    <h3 class="p-3">Hippopotame amphibie</h3>
                    <p class="text-justify p-3">
                        L'hippopotame amphibie passe la majeure partie de son temps dans l'eau et la boue
                    </p>

                </div>
                <div class="col img-card">
                    <a href="#" id="espece1">
                        <img class="w-100 rounded" src="../imgs/LES_ANIMAUX_DES_RIVIÈRES_ET_DES_MARAIS/hypopotame-2380601_640.jpg" id="espece1" alt="">
                    </a>
                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
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
                    </a>

                    <div class="action-image-buttons" data-show="">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"></i></button>
                        <button type="button" onclick = alertclass="btn btn-outline-light"><i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"></i></button>
                    </div>
                </div>

                <div class="col text-justify">
                    <h3 class="text-white p-3">Le badger</h3>
                    <p class="text-justify text-white p-3">
                        Se retouve en forêt
                    </p>
                </div>
            </div>

            <div class="text-center pt-4">
                <button class="btn btn-secondary" id="apprecierEspece2">J'apprécie</button>            
            </div>

        </div>
    </article>

    <article class="espece">
        <div class="container p-4">
            <h2 class="text-center text-primary">Les Animaux à Arcadia</h2>
            <div class="row row-col-4 align-items-center">
                <div class="col text-justify">
                    <h3 class="p-3">Les kangourous</h3>
                    <p class="text-justify p-3">
                        C'est un marsupial, se retrouve en forêts
                    </p>
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
                <a href="/habitats" class="btn btn-primary">Voir tous les animaux d'Arcadia</a>
            </div>

            <div class="container p-4">
                <h2 class="text-center text-primary p-4">Commentaires</h2>
                <form id="commentaires" action="Php/php/commentaire.php" method="post">

                    <div class="mb-3">
                      <label for="pseudoInput" class="form-label">Votre pseudo</label>
                      <input type="text" class="form-control" id="pseudoInput" placeholder="Votre pseudo" name="pseudo">
                    
                      <div class="invalid-feedback">
                        Requis
                    </div>
                    
                    </div>

                    <div class="">
                        <label for="opinion">Votre opinion ici</label>
                        <textarea class="champ" placeholder="Votre opinion" name="opinion" id="opinion"></textarea>
                    </div>
            
                    <div class="text-center p-3">
                        <button type="submit" class="btn btn-primary" id="btnCommentaire">Envoyer</button>
                    </div>
                </form>

                <div class="container row-col-1 row-col-lg-1">

                    <section class="container p-4">

                        <h2>Liste des commentaires</h2>

                        <?php

                            foreach ($listeAvis as $avis) {
                                echo "Avis de : " . $avis["pseudo"] . "<br>";
                                echo "Envoyé le : " . $avis["date"] . "<br>";
                                echo "L'avis : " . $avis["avis"] . "<br>";
                                echo "<br>";
                            }
                            
                        ?>

                </div>

            </div>
            
        </div>
    </article>

</section>

<!-- Modal édition -->

<div class="modal fade" id="EditionPhotoModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditionPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Edition Photo</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form>
                <div class="mb-3">
                  <label for="NamePhotoInput" class="form-label">Titre</label>
                  <input type="text" class="form-control" id="NamePhotoInput" placeholder="gratin de pomme de terre">
                </div>
        
                <div class="mb-3">
                  <label for="ImgInput" class="form-label">Img</label>
                  <input type="file" class="form-control" id="ImgInput">
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


<!-- Edition des habitats -->

<!-- Edit habitat Marais -->

<div class="modal fade" id="editHabitatMarais" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editHabitatMaraisLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editHabitatMaraisLabel">Edition de l'habitat des Marais</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/homeEditHabitatMarais.php" method="post">
                <div class="mb-3">
                  <label for="titreHabitatMaraisDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input type="text" class="form-control" name="titreHabitatMaraisDeMiseAJourInput" id="titreHabitatMaraisDeMiseAJourInput" placeholder="Marais" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionHabitatMaraisDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea class="champ" name="descriptionHabitatMaraisDeMiseAJourInput" placeholder="Description Marais" id="descriptionHabitatMaraisDeMiseAJourInput" required></textarea>
                </div>


                <div id="ListeDesAnimauxDesMarais">
                    <ul>
                        <li></li>
                    </ul>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditHabitatMarais" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>


<!-- Edit habitat Forêts -->

<div class="modal fade" id="editHabitatForêts" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editHabitatForêtsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editHabitatForêtsLabel">Edition de l'habitat des Forêts</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/homeEditHabitatForêts.php" method="post">
                <div class="mb-3">
                  <label for="titreHabitatForêtsDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input type="text" class="form-control" name="titreHabitatForêtsDeMiseAJourInput" id="titreHabitatForêtsDeMiseAJourInput" placeholder="Forêts" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionHabitatForêtsDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea class="champ" name="descriptionHabitatForêtsDeMiseAJourInput" placeholder="Description Forêts" id="descriptionHabitatForêtsDeMiseAJourInput" required></textarea>
                </div>


                <div id="ListeDesAnimauxDesForêts">
                    <ul>
                        <li></li>
                    </ul>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditHabitatForêts" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>


<!-- Edit habitat Prairies -->

<div class="modal fade" id="editHabitatPrairies" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editHabitatPrairiesLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editHabitatPrairiesLabel">Edition de l'habitat des Prairies</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/homeEditHabitatPrairies.php" method="post">
                <div class="mb-3">
                  <label for="titreHabitatPrairiesDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input type="text" class="form-control" name="titreHabitatPrairiesDeMiseAJourInput" id="titreHabitatPrairiesDeMiseAJourInput" placeholder="Forêts" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionHabitatPrairiesDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea class="champ" name="descriptionHabitatPrairiesDeMiseAJourInput" placeholder="Description Prairies" id="descriptionHabitatPrairiesDeMiseAJourInput" required></textarea>
                </div>


                <div id="ListeDesAnimauxDesForêts">
                    <ul>
                        <li></li>
                    </ul>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditHabitatPrairies" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>


<!-- Edition des services -->

<!-- Edit service restaurant -->

<div class="modal fade" id="editServiceRestaurant" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServiceRestaurantLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editServiceRestaurantLabel">Edition du service restaurant</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/homeEditServiceRestaurant.php" method="post">
                <div class="mb-3">
                  <label for="titreServiceRestaurantDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input type="text" class="form-control" name="titreServiceRestaurantDeMiseAJourInput" id="titreServiceRestaurantDeMiseAJourInput" placeholder="Restaurant" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionServiceRestaurantDeMiseAJourInput" class="form-label">Description de mise à jour</label>
                  <textarea class="champ" name="descriptionServiceRestaurantDeMiseAJourInput" placeholder="Description du service restaurant" id="descriptionServiceRestaurantDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditServiceRestaurant" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>


<!-- Edit service Visite Guidée Gratuite -->

<div class="modal fade" id="editServiceVisiteGuideeGratuite" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServiceVisiteGuideeGratuiteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editServiceVisiteGuideeGratuiteLabel">Edition du sevice de visite guidée gratuite</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/homeEditServiceVisiteGuideeGratuite.php" method="post">
                <div class="mb-3">
                  <label for="titreServiceVisiteGuideeGratuiteDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input type="text" class="form-control" name="titreServiceVisiteGuideeGratuiteDeMiseAJourInput" id="titreServiceVisiteGuideeGratuiteDeMiseAJourInput" placeholder="Forêts" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionServiceVisiteGuideeGratuiteDeMiseAJourInput" class="form-label">Description du service de visite guidée gratuite</label>
                  <textarea class="champ" name="descriptionServiceVisiteGuideeGratuiteDeMiseAJourInput" placeholder="Description de La visite guidée gratuite" id="descriptionServiceVisiteGuideeGratuiteDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditServiceVisiteGuideeGratuite" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>


<!-- Edit service Visite sur rail -->

<div class="modal fade" id="editServiceVisiteSurRails" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServiceVisiteSurRailsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="editServiceVisiteSurRailsLabel">Edition du sevice de la visite sur rails</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="../Php/php/homeEditServiceVisiteSurRails.php" method="post">
                <div class="mb-3">
                  <label for="titreServiceVisiteSurRailsDeMiseAJourInput" class="form-label">Changer le titre ? Titre de mise à jour</label>
                  <input type="text" class="form-control" name="titreServiceVisiteSurRailsDeMiseAJourInput" id="titreServiceVisiteSurRailsDeMiseAJourInput" placeholder="Visite sur rails" required>
                </div>
        
               <div class="mb-3">
                  <label for="descriptionServiceVisiteSurRailsDeMiseAJourInput" class="form-label">Description du service de visite guidée gratuite</label>
                  <textarea class="champ" name="descriptionServiceVisiteSurRailsDeMiseAJourInput" placeholder="Description de La visite sur les rails" id="descriptionServiceVisiteSurRailsDeMiseAJourInput" required></textarea>
                </div>
        
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="btnEditServiceVisiteSurRailsDeMiseAJourInput" data-bs-dismiss="modal" value="Modifier">
                </div>

            </form>

        </div>
       
      </div>
    </div>
</div>


<!-- Modal édition horaire -->

<div class="modal fade" id="EditionHoraire" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditionHoraireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="EditionHoraireLabel">Edition horaire</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <form action="./Php/php/homeEditHoraire.php" method="post">
              <div class="mb-3">
                <label for="HoraireInput" class="form-label">Horaire</label>
                <input type="text" class="form-control" name="HoraireInput" id="HoraireInput" placeholder="Horaire" required>
              </div>
      
              <div class="text-center">
              <input type="submit" class="btn btn-primary" id="btnEditHoraireInput" data-bs-dismiss="modal" value="Modifier">
              </div>
          </form>

      </div>
     
    </div>
  </div>
</div>