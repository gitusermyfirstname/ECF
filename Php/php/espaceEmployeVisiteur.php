<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Arcadia</h1>
        <button class="btn btn-primary">Explorer</button>
    </div>
</div>

<div class="container row-col-1 row-col-lg-2" style="display: flex;">

    <section class="container p-4" style="overflow: scroll;">

        <h2>Liste des mails</h2>

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

                    echo '<div class="text-center p-3">

                            <form id="" action="" method="post">
                            <button type="submit" class="btn btn-primary inline" id="btnCommentaire">rep</button>
                            </form>

                            </div>';
                }

            } catch (PDOException $e) {
                echo "Erreur". $e;
            }

        ?>

    </section>

    <section class="container p-4">

        <h2>Liste des commentaires</h2>

        <?php

            try {
                $PDO = new PDO($dsn, $username, $password);
                $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                //Commentaires

                $queryAvis = "SELECT * FROM avis";
                $stmtAvis = $PDO->query($queryAvis);
                $listeAvis = $stmtAvis->fetchAll(PDO::FETCH_ASSOC);
                
                // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // Récupération
                // Afficher les utilisateurs

                foreach ($listeAvis as $avis) {
                    echo "Avis de : " . $avis["pseudo"] . "<br>";
                    echo "Envoyé le : " . $avis["date"] . "<br>";
                    echo "L'avis : " . $avis["avis"] . "<br>";
                    echo "<br>";

                    echo '<div class="text-center p-3">
                            <form id="Php/php/maj.php" action="Php/php/maj.php" method="post">
                            <button type="submit" class="btn btn-primary" id="btnCommentaire">ok</button>
                            </form>
                            </div>';

                }

            } catch (PDOException $e) {
                echo "Erreur". $e;
            }

        ?>


    </section>

</div>