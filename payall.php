<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Chemical-GUT</title>
  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <style>
  .bod{
    background-color: #cecece;
  }
  .login-container form{
      padding: 2%;
  }
  .login-form-1{
    padding: 5%;
    background-color: rgba(240, 240, 240, 0.8);
  }
  </style>
</head>
<?php
include 'Implementation/payall_impl.php';
?>
<body class="bod">
<br/><br/>
<div class="container text-center">
  <a class="btn btn-lg" style=" background-color:#6a95ab;" href="carrello.php">&laquo; Torna al Carrello</a>
</div>
<div class="container login-container">
            <div class="row">
                <div class="col-md-10 mx-auto login-form-1" style="margin-top:20px">
                    <h2 class="text-center" style="font-family:sans-serif;">Dettagli pagamento</h2>
                    <hr>
                      <form role="form">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" title="form" for="form" class="form-control" id="nome" name="nome" required autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="nome2">Cognome</label>
                            <input type="text" title="form" for="form" class="form-control" id="nome2" name="nome2" required autofocus/>
                        </div>
                        <hr>
                      </br>
                        <h3 style="font-family:sans-serif;">Dati per la spedizione</h3>
                      </br>
                        <div class="form-group">
                          <div class="container text-center">
                            <div class="row">
                                <input type="text" title="form" for="form" class="form-control w-25" placeholder="Città" id="city" name="city" required autofocus/>
                                &emsp; &emsp; <input type="text" title="form" for="form" class="form-control w-50" placeholder="Indirizzo" id="address" name="address" required autofocus/>
                            </div>
                          </div>
                        </div>
                        <hr>
                      </br>
                        <h3 style="font-family:sans-serif;">Dati per il pagamento</h3>
                      </br>
                        <div class="form-group">
                          <div class="container text-center">
                            <div class="row">
                                <input type="text" title="form" for="form" class="form-control w-25" placeholder="Numero di carta" id="ncart" name="ncart" required autofocus/>
                                &emsp; &emsp; <input type="text" title="form" for="form" class="form-control w-25" placeholder="Data di scadenza" id="expsate" name="expdate" required autofocus/>
                                &emsp; &emsp; <input type="password" class="form-control w-25" title="form" id="cvCode" placeholder="Codice CV" required autofocus/>
                            </div>
                          </div>
                        </div>
                        <hr>
                      </br>
                        <a href="Implementation/buyall.php<?php echo"$payThat"; ?>" class="btn btn-success btn-lg btn-block" role="button">Checkout</a>
                    </form>
                </div>
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
