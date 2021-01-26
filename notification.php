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
  .login-form-2{
    background-color: rgba(214, 214, 193, 0.5);
    padding: 30px;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19)
  }
  .login-form-2 h2{
    text-align: center;
    color: #333;
  }
  .login-form-2 p{
    text-align: center;
    color: #333;
  }
  .login-container form{
    padding: 5%;
  }
  .login-form-2 .btnSubmit{
    font-weight: 600;
    color: #e8a5e7;
    background-color: #3d2ae8;
  }
  .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }
  .overlay:target {
    visibility: visible;
    opacity: 1;
  }
  .popup {
    margin: 70px auto;
    padding: 20px;
    background: #6e8f6b;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
  }
  .popup h2 {
    margin-top: 0;
    color: #fff;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #fff;
  }
  .popup .close:hover {
    color: #fff;
  }
  .popup .content {
    max-height: 30%;
    overflow: auto;
    color: #fff;
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
  </style>
<?php
  include 'Implementation/notification_impl.php';
?>
</head>
<body class="bod">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="logged.php"><img src="img/Logo.png"></a>
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
            <a class="nav-link" href="contact.php">Contatti</a>
          </li>
          <?php echo $generaNotifica;?>
          <?php echo $carrello.$addProduct.$addedProduct.$logout ?>
        </ul>
      </div>
  </nav>

    <div class="container login-container">
      <a class="btn btn-secondary btn-sm" style="margin-left:80px" href="logged.php">&laquo; Torna alla Home</a>
      <div class="row">
        <div class="col-md-2"></div>
                    <div class="col-md-8 login-form-2" style="margin-top:20px">
                        <h2 style="font-family: sans-serif;">Nuova Notifica</h2>
                        <p style="font-family: sans-serif;">Questa notifica apparirà nella bacheca di tutti i clienti.<p>
                        <hr>
                        <form method="post" title="form" id="comment_form">
                          <div class="form-group">
                              <label>Oggetto</label>
                              <input type="text" name="subject" title="form"id="subject" placeholder="inserisci l'oggetto del messaggio" class="form-control" required/>
                          </div>
                            <div class="form-group">
                                  <label>Messaggio</label>
                                  <textarea name="comment" title="form" id="comment" class="form-control" placeholder="inserisci il messaggio" rows="5" required/></textarea>
                            </div>
                          </br>
                          <hr>
                          <div class="form-group text-right">
                              <input type="submit" class="btn btn-info" name="post" value="Invia" />
                          </div>
                        </form>
                    </div>
                </div>
            </div>
    <br/><br/>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020</p>
    </div>
  </footer>
  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>
  <div id="not" class="overlay">
      <div class="popup">
          <h2 class="text-center">Notifica</h2>
          <a class="close" href="notification.php">&times;</a>
          <div class="content">
            Notifica creata correttamente! Gli utenti saranno informati.
          </div>
          <br/>
           <div class="text-center">
             <a class="btn btn-light" href="notification.php">Continua</a>
           </div>
      </div>
  </div>
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
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
   location.replace("notification.php#not");
  }
  else
  {
   alert("Both Fields are Required");
  }
 });

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
