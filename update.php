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
  .upload-btnfile-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }
  .btnfile {
    border: 1px;
    color: white;
    background-color: #878784;
    padding: 8px 20px;
    border-radius: 6px;
    font-size: 16px;
  }
  .upload-btnfile-wrapper input[type=file]{
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
  }
  .btnSubmit{
    border-radius: 6px;
    padding: 1.5%;
    border: none;
    cursor: pointer;
  }
  .error {color: #FF0000;}
  .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
  }
  .login-form-1{
    background-color: rgba(214, 214, 193, 0.5);
    padding: 30px;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19)
  }
  .login-form-1 h3{
    text-align: center;
  }
  .login-container form{
    padding: 7%;
  }
  .bod{
    background-color: #cecece;
  }
</style>
<?php
include 'Implementation/update_impl.php';
?>

</head>
<body class="bod">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><img src="img/Logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="logged.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contatti</a>
          </li>
          <?php echo $generaNotifica;?>
  <?php echo $carrello.$addProduct.$addedProduct.$logout.$notLogged ?>

        </ul>
      </div>
  </nav>

  <div class="container login-container">
    <a class="btn btn-secondary btn-sm" style="margin-left:80px" href="logged.php">&laquo; Torna alla Home</a>
              <div class="row">
                  <div class="col-md-9 mx-auto login-form-1" style="margin-top:20px">
                      <h3>Modifica Prodotto</h3>
                      <hr>
                      <?php echo $id_Setter;?>
                          <div class="form-group">
                            <label for="inputName" class="form-label">Nome Prodotto</label>
                            <input type="text" name="p_name" id="inputName" title="form" class="form-control" rows="10" cols="10" placeholder="inserisci il nome del prodotto" value="<?php echo $p_name;?>"/>
                          </div>
                          <div class="form-group">
                            <label for="inputDescr" class="form-label">Descrizione Prodotto</label>
                            <input type="text" name="p_descr" id="inputDescr" title="form" class="form-control" rows="10" cols="10" placeholder="inserisci la descrizione del prodotto" value="<?php echo $p_descr;?>" />
                          </div>

                          <div class="form-group">
                              <label for="inputNProd" class="form-label">Disponibilità Prodotto</label>
                              <input type="number" min="1" max="500" id="inputNProd" title="form" name="num_max" class="form-control" rows="10" cols="10" placeholder="inserisci il numero di prodotti disponibili" value="<?php echo $max_p;?>" />
                          </div>
                          <div class="form-group">
                              <label for="inputPrice" class="form-label">Prezzo Prodotto</label>
                              <input type="number" step="0.01" min="1.00" max="250.00" id="inputPrice" title="form" name="price" class="form-control" rows="10" cols="10" placeholder="inserisci il prezzo del prodotto" value="<?php echo $max_price;?>" />
                          </div>
                          <div class="form-group text-center" style="margin-top: 30px;">
                            <div class="upload-btnfile-wrapper">
                              <button class="btnfile">Carica immagine</button>
                              <input type="file" name="image" title="image">
                            </div>
                          </div>
                        </br>
                          <hr>
                          <div class="form-group text-right">
                              <input type="submit" class="btnSubmit btn-info btn-md" name="ModProd" value="Invia"/>
                          </div>
                      </form>
                  </div>
              </div>
      </div>
    </div>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
    </div>
  </footer>

  <?php
  include 'Implementation/update_impl_2.php';
  ?>

  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
