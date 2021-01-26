<!DOCTYPE html>
<html lang="it" >
<head>
<meta charset="UTF-8">
<title>Chemical-GUT</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php session_start(); ?>
<style>
body{
  padding-top: 60px;
}
.jumbotron{
  margin-top: 50px;
  padding: 30px;
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.bod{
  background-color: #cecece;
}
</style>
<?php
include 'Implementation/productInfo_impl.php';
?>
</head>
<body class="bod">
  <div class="container">
    <a class="btn btn-light btn-md" style="margin-left:80px" href="carrello.php">&laquo; Torna ai Prodotti aggiunti</a>
    <div class="jumbotron">
      <h2 class="display-4 text-center" style="color: #424f75;">Dati relativi ai tuoi prodotti aggiunti</h2>
      <hr class="my-4">
      <p class="lead text-center">Totale prodotti acquistati dai clienti:  <strong><?php echo $p_sold;?> Prodotti</strong></p>
      <hr class="my-4">
      <p class="lead text-center">Articoli disponibili:  <strong><?php echo $p_available;?></strong> (di cui totale: <?php echo $total_prod;?> Prodotti)</p>
      <hr class="my-4">
      <p class="lead text-center">Prodotti Soldout:  <strong><?php echo $p_soldout;?> Prodotti</strong></p>
      <hr class="my-4">
      <p class="lead text-center">Totale Profitto:  <strong><?php echo $total_earned." €";?></strong></p>
      <hr class="my-4">
      </div>
    </div>
    <br/><br/><br/>
    <footer class="py-5 bg-dark">
    <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
    </div>
    </footer>
</body>
</html>
