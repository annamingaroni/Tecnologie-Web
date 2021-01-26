<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Chemical-GUT</title>
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
  .image{
    width: 100%;
    height: 200px;
    object-fit: contain;
    margin-top: 10px;
  }
  .bod{
    background-color: #cecece;
  }
  h3{
    font-family: sans-serif;;
  }
  .card:hover{
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
    box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
  }
  </style>
  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
include 'Implementation/product_impl.php';
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
          <li class="nav-item">
            <a class="nav-link" href="product.php">Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contatti</a>
          </li>
          <?php echo $generaNotifica;?>
          <?php echo $carrello.$addProduct.$addedProduct.$logout ?>
        </ul>
      </div>
  </nav>
  <div class="container">
  </br><hr>
  <div class="text-center">
    <a class="btn btn-light btn-active btn-lg" href="carrello.php">Visualizza Carrello &raquo;</a>
  </div>
  <hr>
      <?php
include 'Implementation/product_impl_2.php';
      ?>
  </div>
  <div class="container">
  <hr>
  <div class="text-center">
    <a class="btn btn-light btn-active btn-lg" href="carrello.php">Visualizza Carrello &raquo;</a>
  </div>
  </div>
  <hr>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
    </div>

  </footer>
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
