<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>inscription</title>
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
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
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal col-lg-6" action="cible_inscription.php" method="post">
            <h1>Incrivez-vous :</h1>
              <div class="form-group">
               <label for="text" class="col-lg-2 control-label">Nom:</label>
               <input type="text" class="form-control" id="text" placeholder="Nom" name="nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Prénom:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prénom" name="prenom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Mail:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="exemple@exemple.fr" name="mail">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Naissance:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="aaaa/mm/jj" name="date_naissance">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Login:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Entrez votre login" name="login">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre password" name="password">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Commentaires: </label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Commentaires..." name="commentaires">
              </div>
              <button class="btn btn-default">S'inscricre</button>
            </form>
          </div>
        </div>
</div>
</body>
</html>