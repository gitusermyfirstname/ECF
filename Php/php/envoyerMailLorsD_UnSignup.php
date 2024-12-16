<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Mail de notification</h1>
    </div>
</div>

<!-- // ?php

// echo $_COOKIE["userMail"];

// $dsn = 'mysql:host=localhost;dbname=quaiantiquerestaurant';
// $username = 'root';
// $password = '';

// try {
//     $PDO = new PDO($dsn, $username, $password);
//     $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     //Récupération des champs

//     //

//     //Marais
//     $queryNotification = "SELECT * FROM user where id = (SELECT COUNT(*) from user)";
//     $stmtNotification = $PDO->query($queryNotification);
//     $mailNotification = $stmtNotification->fetch(PDO::FETCH_ASSOC);
//     // $habitat = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     // Récupération
//     $mailAEnvoyer = $mailNotification['email'];

// } catch (PDOException $e) {
//     echo "Erreur". $e;
// }

// //

<div class="container">

//?php

    // echo '

    // <form action="mailto:' . $mailAEnvoyer . ' method="post" enctype="text/plain">'

//?
        <div class="mb-3"> 
          <label for="EmailInput" class="form-label">Email</label>
          <input type="email" class="form-control" id="EmailEmployeInput" placeholder="lemail@gmail.com" name="email">
        </div> -->

<?php

$cookie_name = "userMail";

// if(!isset($_COOKIE["userMail"])) {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// }

?>

<div class="container">
    <h1>Sending e-mail to <?php echo $_COOKIE[$cookie_name] ?> </h1>

    <form action="mailto:<?php echo $_COOKIE[$cookie_name]?>?subject='Au sujet de vos Ids de connexion'" method="post" enctype="text/plain">

        <div class="mb-3"> 
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" value="<?php echo $_COOKIE["userNom"]?>">
        </div>

        <div class="mb-3"> 
            <label for="mail" class="form-label">Email</label>
            <input type="email" name="mail" class="mb-3 form-control" id="mail" value="<?php echo $_COOKIE[$cookie_name]?>"><br>
        </div>

        <div class="mb-3"> 
            <label for="comment" class="form-label">Comment</label>
            <input type="text" name="comment" size="50" class="mb-3 form-control" value="Merci de passer récupérer vos identifiants de connexion"><br>
        </div>

        <input type="submit" value="Envoyer l'email" class="btn btn-primary">
    </form>
</div>



<!-- <!DOCTYPE html>
<html>
<body>

<h2>Send e-mail to someone@example.com:</h2>

<form action="mailto:someone@example.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>

</body>
</html> -->

