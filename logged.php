<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Chemical-GUT</title>
  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body{
    padding-top: 56px;
  }
  a img{
      height: 45px;
      width: 65px;
      max-height: 100%;
      max-width: 100%;
  }
  .jumbotron{
    margin-top: 90px;
    padding: 30px;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
  }
  .bod{
    background-color: #cecece;
  }
  </style>
<?php
include 'Implementation/logged_impl.php';
?>
</head>
<body class="bod">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><img src="img/Logo.png"></a>
      <?php echo $notification;?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php if($select == 'Cliente'){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Prodotti</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contatti</a>
          </li>
          <?php echo $generaNotifica;?>
          <?php echo $carrello.$addProduct.$addedProduct.$logout ?>
        </ul>
      </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h2 class="display-4 text-center" style="color: #424f75;">Benvenuto/a,</h2>
      <p class="lead text-center"> il tuo livello di accesso è: <?php echo $select ?></p>
      <hr class="my-4">
      <?php if ($select == 'Cliente') {
        ?>
        <div class="text-center">
          <p style="font-family: sans-serif">Puoi visualizzare il nostro catalogo prodotti ed iniziare i tuoi acquisti.</p>
          <a class="btn btn-secondary active" href="product.php" role="button">Prodotti</a>
        </div>
        <div class="text-right">
          <a class="btn btn-danger btn-md" href="Implementation/logout.php" role="button">Esci</a>
        </div>
      </div>
    </br>
      <hr>
    <br/><br/>
    <div class="container">
      <div class="row text-center">
              <div class="col-md-4 mb-5">
                <div class="card h-100" style="background-color: #dadef0">
                    <div class="card-body">
                     <h2 class="card-title">Contatti</h2>
                     <p class="card-text">Contattaci per informazioni o commenti al servizio!</p>
                    </div>
                    <div class="card-footer">
                     <a href="contact.php" class="btn btn-light btn-md">Contattaci!</a>
                    </div>
                </div>
              </div>

              <div class="col-md-4 mb-5">
                <div class="card h-100" style="background-color: #dadef0">
                  <div class="card-body">
                    <h2 class="card-title">Chemical-GUT</h2>
                      <p class="card-text">Accedi al nostro catalogo prodotti!</p>
                  </div>
                  <div class="card-footer">
                    <a href="product.php" class="btn btn-light btn-md">Catalogo prodotti</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-5">
                          <div class="card h-100" style="background-color: #dadef0">
                            <div class="card-body">
                              <h2 class="card-title">Ordini</h2>
                              <p class="card-text">Guarda l'elenco degli ordini effettuati</p>
                            </div>
                            <div class="card-footer">
                              <a href="order.php" class="btn btn-light btn-md">I miei ordini</a>
                            </div>
                          </div>
                        </div>
               </div>
            </div>
      <?php } else {
        ?>
        <div class="text-center">
          <p style="font-family: sans-serif">Sei nell'area riservata, puoi aggiungere, modificare, eliminare un Prodotto.</p>
          <a class="btn btn-secondary active" href="addproduct.php" role="button">Aggiungi Prodotto</a>
        </div>
        <div class="text-right">
          <a class="btn btn-danger btn-md" href="Implementation/logout.php" role="button">Esci</a>
        </div>
      </div>
    </br>
      <hr>
    <br/><br/>
    <div class="container">
      <div class="row text-center">
              <div class="col-md-4 mb-5">
                <div class="card h-100" style="background-color: #dadef0">
                    <div class="card-body">
                     <h2 class="card-title">Contatti</h2>
                     <p class="card-text">Contattaci per informazioni o commenti al servizio!</p>
                    </div>
                    <div class="card-footer">
                     <a href="contact.php" class="btn btn-light btn-md">Contattaci!</a>
                    </div>
                </div>
              </div>

              <div class="col-md-4 mb-5">
                <div class="card h-100" style="background-color: #dadef0">
                  <div class="card-body">
                    <h2 class="card-title">Lista prodotti aggiunti</h2>
                      <p class="card-text">Guarda, modifica o elimina i prodotti che hai aggiunto</p>
                  </div>
                  <div class="card-footer">
                    <a href="carrello.php" class="btn btn-light btn-md">Prodotti aggiunti</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-5">
                          <div class="card h-100" style="background-color: #dadef0">
                            <div class="card-body">
                              <h2 class="card-title">Nuova Notifica</h2>
                              <p class="card-text">Crea una nuova notifica per i clienti</p>
                            </div>
                            <div class="card-footer">
                              <a href="notification.php" class="btn btn-light btn-md">Notifica</a>
                            </div>
                          </div>
                        </div>
               </div>
            </div>
    <?php } ?>

    <br/><br/><br/><br/>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
    </div>
  </footer>

  <!--<div id="soldout" class="overlay">
      <div class="popup">
          <h2>Soldout</h2>
          <a class="close" href="logged.php">&times;</a>
          <div class="content">
            Prodotto SoldOut
          </div>
          <br/>
            <a class="btn btn-warning" href="carrello.php">Aggiunti</a>
      </div>
  </div>-->
  <!--<div id="exp" class="overlay">
      <div class="popup">
          <h2>exp</h2>
          <a class="close" href="logged.php">&times;</a>
          <div class="content">
            Prodotto Soldout rimosso
          </div>
          <br/>
            <a class="btn btn-warning" href="carrello.php">Aggiunti</a>
      </div>
  </div>-->
  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
<script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:<?php echo '"'.$fetch.'"';?>,
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 load_unseen_notification();

 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });

 setInterval(function(){
  load_unseen_notification();;
 }, 5000);
});
</script>
</html>
