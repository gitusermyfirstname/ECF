<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <!-- JE vais me retrouver sur login.php lorsque je vais valider la connexion -->
    <!-- La mét -->

    <form action="login.php" method="POST">

        <label for="email">Votre email</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="password"><br><br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>