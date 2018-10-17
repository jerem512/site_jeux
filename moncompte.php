<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style type="text/css">
      body{
        background-image: url(./photo/Lion-1.jpg);
        background-size: cover;
        color: white;
        background-repeat: no-repeat;
        background-position: center; 
        background-attachment: fixed;
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
     <h1><i><u>Mon compte :</u></i></h1>
      <?php session_start(); ?>
      <h1><u>Gestion de compte :</u></h1>
      <h2><u>Changement de mot de passe :</u></h2>
      <form action="cible_mdp.php" method="post">
              <div class="form-group">
                <label for="login">Nouveau password :</label>
                <input type="password" class="form-control" id="Nouveau password" placeholder="Nouveau mot de passe" name="new_pass">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirmation password :</label>
                <input type="password" class="form-control" id="Nouveau password" placeholder="Confirmation mot de passe" name="new_pass2">
              </div>
              <br>
              <button class="btn btn-default">Changer de mot de passe</button>
              <br> <br>
      </form>
      <h2><u>Changement données personnelles :</u></h2>
      <form action="infosp.php" method="post">
              <div class="form-group">
               <label for="text" class="col-lg-2 control-label">Nouveau nom:</label>
               <input type="text" class="form-control" id="text" placeholder="Nom" name="new_nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Nouveau prénom:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prénom" name="new_prenom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Nouveau mail:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="exemple@exemple.fr" name="new_mail">
              </div>
              <button class="btn btn-default">Changer les données personnelles</button>
      </form> 
      <br> <br>      
      <a href="index.php" class="btn btn-default">Retour</a> 
  </div>

 
</body>
</html>
