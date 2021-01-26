<!DOCTYPE html>
<html lang="it">
<head>
  <title>Registrazione</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron{
    background-color: rgba(214, 214, 193, 0.5);
    padding: 30px;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
  }
  .bod{
    background-color: #cecece;
  }
  </style>
  <?php
  session_start();
  $Mail="";
  $select="";
  $name="";
  $user="";
  $name=$_SESSION['name'];
  $select=$_SESSION['select'];
  if(!$select=="Guest"){
    $user=", User:";
  }
  ?>
</head>
<body class="bod">
 <div class="container">
  <br/><br/><br/>
  <div class="alert alert-success text-center" role="alert"><h3 class="alert-heading" style="margin-top: 10px">Registrazione effettuata con successo</h3></div>
  <div class="jumbotron">
  <h2 class="text-center" style="color: #424f75; font-family: sans-serif;">Benvenuto/a,</h2>
  <p class="lead text-center"> il tuo livello di accesso è: <?php echo $select ?></p>
  <hr>
  <?php if($select == 'Cliente'){
    ?>
  <div class="text-center">
    <p style="font-family: sans-serif;">Vai alla pagina di accesso ed effettua il Login per accedere al catalogo prodotti.</p>
    <a class="btn btn-info btn-md" href="login.php" role="button">Accedi</a>
  </div>
<?php }else{
   ?>
   <div class="text-center">
     <p style="font-family: sans-serif;">Vai alla pagina di accesso ed effettua il Login per accedere all'area riservata.</p>
     <a class="btn btn-info btn-md" href="login.php" role="button">Accedi</a>
   </div>
 <?php } ?>
</div>
</div>
</body>
</html>
