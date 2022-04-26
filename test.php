<?php require_once "repoData.php" ?> 
<!-- ici on appelle le fichier repoData qui contient les données -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    
<div class="container">
    <h1 class="my-5 text-center text-danger">
<?php echo $home ?>
<!-- ici, pour le h1, on récupère les données de repoData en appelant le nom de la variable -->
    </h1>

    <div class="card shadow col-5 text-center">
<h2 class="53">Titre : <?php echo $valo['title'] ?></h2>
<p>Editeur : <?php echo $valo['editor'] ?></p>
<p>Catégorie : <?php echo $valo['category'] ?></p>
<p>Joueurs : <?php echo $valo['nb_players'] ?></p>
<!-- ici, pour remplir les champs, on récupère les données de repoData en appelant le nom de la variable et sa valeur -->
</div>

</div>


</body>