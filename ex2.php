<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2 php</title>
</head>
<body>

<p> Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  Afficher leur contenu.</p>
<?php
$lastname = 'Boulanger';
$firstname = 'Mickaël';
$age = 40;

echo 'Bonjour, je m\'appelle '. $firstname . ' ' . $lastname . ' et j\'ai ' . $age . ' ans !';
echo "Bonjour, je m'appelle $firstname  $lastname   et j'ai  $age  ans !"
?>

</body>
</html>