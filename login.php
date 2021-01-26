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
    .error {color: #FF0000;}
    .login-container{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    a img{
        height: 45px;
        width: 65px;
        max-height: 100%;
        max-width: 100%;
    }
    .bod{
      background-color: #cecece;
    }
    .login-container form{
      padding: 5%;
    }
    .login-form-1{
      background-color: rgba(214, 214, 193, 0.5);
      padding: 30px;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19)
    }
    .link, .link:hover{
      color: #1b6e43;
      font-size: 20px;
    }
</style>
<?php
include 'Implementation/login-registration_impl.php';
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
          <li class="nav-item active">
            <!--<a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary btn-sm" style="margin-top: 7px; margin-left:12px;" href="login.php">Accedi/Registrati</a>
                      <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
  </nav>

  <div class="container" style="margin-top:60px">
    <a class="btn btn-secondary btn-sm" style="margin-left:80px" href="index.html">&laquo; Torna alla Home</a>
    <div class="row">
      <div class="col-md-8 mx-auto login-box" style="margin-top:20px">
        <div class="container login-container">
          <div class="login-form-1">
            <h2 class="text-center" style="font-family: sans-serif;">Accedi</h2>
              <form method="post" action="login.php" class="mb-4">
                <div class="form-group">
                  <label for="email">Username</label>
                  <input name="email" id="email" type="text" placeholder="inserisci la tua email" title="form" class="form-control" value="<?php echo $email;?>" required/>
                </div>
                <div class="form-group" style="margin-top:10px">
                  <label for="name">Password</label>
                  <input name="pass" id="password" type="password" placeholder="inserisci la tua password" title="form" class="form-control" value="<?php echo $pass; ?>" required/>
                </div>
                <div class="text-center">
                  <input class="btn btn-dark" style="margin-top: 20px" type="submit" title="form" value="Accedi" name="login"/>
                </div>
                <hr class=mb-4>
                <div class="text-center" style="margin-top: 20px">
                  <p>Sei nuovo qui? <a href="registration.php" class="link active">Registrati</a></p>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<br/><br/><br/><br/>
  <footer class="py-5 bg-dark">
    <br/>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
      <br/><br/><br/>
    </div>
  </footer>
  <?php
  include 'Implementation/login-registration_impl_2.php';
  ?>
  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
