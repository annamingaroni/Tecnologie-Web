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
  h3{
    font-family: sans-serif;;
  }
  .bod{
    background-color: #cecece;
  }
  .image{
    width: 100%;
    height: 80px;
    object-fit: contain;
    margin-top: 10px;
  }
  .image1{
    width: 100%;
    height: 200px;
    object-fit: contain;
    margin-top: 10px;
  }
  .card:hover{
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
    box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
  }
</style>
<?php
include 'Implementation/carrello_impl_2.php';
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
          <li class="nav-item">
            <a class="nav-link" href="logged.php">Home</a>
          </li>
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
    <?php if($select == 'Cliente'){
      ?>
      <h2 class="text-center" style="margin-top: 30px; font-family: sans-serif;">Carrello</h2>
      <hr>
      <br/>
    <?php } else if($select == 'Amministratore'){?>
      <h2 class="text-center" style="margin-top: 30px; font-family: sans-serif;">Prodotti Aggiunti</h2>
      <hr>
      <br/>
    <?php } ?>
<?php
include 'Implementation/carrello_impl.php';
?>
    </div>
  <br/><br/><br/><br/><?php echo $spaziatore;?><?php echo $spaziatore;?>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
    </div>
  </footer>
  <!--<div id="modify" class="overlay" style="margin-top: 80px;">
    <div class="container">
      <div class="alert alert-success" role="alert">
        <a class="close" href="carrello.php">&times;</a>
        <h4 class="alert-heading text-center">Prodotto modificato con successo.</h4>
        <hr>
        <div class="text-right">
          <a class="btn btn-light" href="carrello.php">Fine</a>
        </div>
      </div>
    </div>
  </div>
  <div id="creato" class="overlay" style="margin-top: 80px;">
    <div class="container">
      <div class="alert alert-success" role="alert">
        <a class="close" href="carrello.php">&times;</a>
        <h4 class="alert-heading text-center">Prodotto aggiunto con successo!</h4>
        <hr>
        <div class="text-right">
          <a class="btn btn-light" href="carrello.php">Fine</a>
        </div>
      </div>
    </div>
  </div>
  <div id="delete" class="overlay" style="margin-top: 80px;">
    <div class="container">
      <div class="alert alert-success" role="alert">
        <a class="close" href="carrello.php">&times;</a>
        <h4 class="alert-heading text-center">Prodotto eliminato con successo.</h4>
        <hr>
        <div class="text-right">
          <a class="btn btn-light" href="carrello.php">Fine</a>
        </div>
      </div>
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
