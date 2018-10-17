<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Base de donnée</title>
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
      }
      form{
        background: rgba(45, 45, 125, 0.58);
        color: white;
        padding: 40px;
        margin-top: 200px;
        padding-bottom: 60px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.43)
      }
      h1{
        text-align: center;
      }
      .btn{
        width: 100%;
        border-radius: 0px;
        
      }
      .form-control{
        border-radius: 0px;
        background-color: rgba(23, 3, 3, 0.48);
        color: white;
        border-radius:1px solid #291212
      }
      .header{
        text-align: right;
        margin-right: 100px;
        border: 1px solid blue;
        background-color: rgba(23, 3, 3, 0.48);
        float: right; 
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.43)
      }
      .nav{
        text-align: left;
      }
    </style>
</head>
<body>
  <?php 
    session_start();
?>
<div class="header">
<h1>Bonjour, <?php echo htmlspecialchars($_SESSION['login']); ?> ! </h1>
<nav class="nav">
  <ul>
    <li><a href="moncompte.php">Mon compte</a></li>
    <li><a href="liste.php">Voir la liste des jeux</a></li>
    <li><a href="deco.php">Se déconnecter</a></li>
  </ul>
</nav>
</div>
  <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" action="cible.php" method="post">
            <h1>Ajoutez un jeu :</h1>
              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Nom</label>
                <input type="text" class="form-control" id="text" placeholder="Nom" name="nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Possesseur</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Possesseur" name="possesseur">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Console</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Console" name="console">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Prix</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prix en €" name="prix">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Nombre joueur max</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Nombre de joueur max" name="nbre_joueurs_max">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Commentaires</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Commentaires..." name="commentaires">
              </div>

              <br>
              
              <button class="btn btn-default">Ajouter le jeu</button>
            </form>
            <form class="form-horizontal" action="cible2.php" method="post">
            <h1>Modifiez un jeu :</h1>
              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Nom</label>
                <input type="text" class="form-control" id="text" placeholder="Nom" name="nom2">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Ancien possesseur</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Possesseur" name="ancien_possesseur">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Nouveau possesseur</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Possesseur" name="nouveau_possesseur">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Console</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Console" name="console2">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Prix de la vente</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prix en €" name="prix_vente">
              </div>
              <br>  
              <button class="btn btn-default">Modifier le jeu</button>
            </form>
          </div>
        </div>
</div>
</body>
</html>