<?php
    if (isset($_POST["submit"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        echo "Bienvenue $prenom $nom";
    }
 
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Prenom</label>
        <input type="text" name="prenom" id="prenom"></input>
        <label>Nom</label>
        <input type="text" name="nom" id="nom"></input>
        <button id="btnSubmit" name="submit">Envoyer</button>
    </form>
</body>
</html>

