<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="register.php" method="POST">

        <label for="username">Votre mail</label>
        <input type="email" name="username" id="username" required><br><br>

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="nameInput">Votre nom</label>
        <input type="text" name="nameInput" id="nameInput"><br><br>

        <label for="prenom">Le prénom</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <input type="submit" value="Subscribe">
    </form>
</body>
</html>