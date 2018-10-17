<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des jeux</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background-image: url(./photo/Lion-1.jpg);
            background-size: cover;
            color: white;
            background-repeat: no-repeat;
            background-position: center; 
            background-attachment: fixed;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Liste des jeux :</h1>
    <?php
try
{

    $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video ORDER BY nom');

while ($donnees = $reponse->fetch())
{
?>
    <p>
        <?php echo $donnees['nom']; ?>
   </p>
<?php
}

$reponse->closeCursor();

?>
<p>
    <a href="index.php" class="btn btn-default">Retour</a>
</p>
</body>
</html>