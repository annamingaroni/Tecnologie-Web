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
  .bod{
    background-color: #cecece;
  }
  .error {color: #FF0000;}
  .login-container{
      margin-top: 5%;
      margin-bottom: 5%;
  }
  .login-container form{
      padding: 5%;
  }
  h2{
      font-family: sans-serif;
      color: #1f1d63;
  }
  .login-form-2{
    background-color: rgba(214, 214, 193, 0.5);
    padding: 30px;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
  }
</style>
  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
include 'Implementation/contact_impl.php';
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
            <a class="nav-link" href="<?php echo $linkForHome; ?>">Home
            </a>
          </li>
          <?php echo $viewProduct;?>
           <li class="nav-item">
             <a class="nav-link active" href="contact.php">Contatti</a>
                           <span class="sr-only">(current)</span>
           </li>
           <?php echo $generaNotifica;?>
         <?php echo $carrello.$addProduct.$addedProduct.$logout.$notLogged ?>
         </ul>
       </div>
     </div>
   </nav>
  <div class="container login-container">
              <div class="row">
<div class="col-md-2"></div>
                  <div class="col-md-8 login-form-2">
                      <h2 class="text-center">Contattaci</h2>
                      <hr>
                      <form method="post" action="contact.php">
                        <div class="form-group">
                          <label for="inputName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="inputName" name="name_c" title="form" rows="10" cols="10" placeholder="inserisci il tuo nome" value="<?php echo $name_c;?>" />
                        </div>
                    <?php echo $mailform;?>
                          <div class="form-group">
                            <label for="inputMessage" class="form-label">Messaggio</label>
                              <textarea type="textarea" class="form-control" id="inputMessage" name="comment" title="form" rows="10" cols="10" value="<?php echo $comment;?>"> </textarea>
                          </div>
    <div class="form-group text-center">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="robot">
      <label class="form-check-label" for="exampleCheck1">&nbsp; Non sono un Robot</label>
  </div>
  <hr>
  <div class="form-group text-right">
      <input type="submit" class="btn btn-info btn-md " name="singup" value="Invia"/>
  </div>
  </form>
  </div>
  </div>
</div>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $connection = mysqli_connect('localhost','root','','tecnologie_web');
    if(!$connection){
    echo 'error:' . mysqli_connect_error();
  }
  if($select=="Cliente"){
    $sql_s="INSERT INTO `contact` (name, Mail, Comment, Robot)"." VALUES ('$name_c','$Mail','$comment','$robot')";
    $result_s =mysqli_query($connection,$sql_s);
  }else if($select="Amministratore"){
    $sql_s="INSERT INTO `contact` (name, Mail, Comment, Robot)"." VALUES ('$name_c','$Mail','$comment','$robot')";
    $result_s =mysqli_query($connection,$sql_s);
  }else{
    $sql_s="INSERT INTO `contact` (name, Mail, Comment, Robot)"." VALUES ('$name_c','$Mail','$comment','$robot')";
    $result_s =mysqli_query($connection,$sql_s);
  }
    echo '<script> location.replace("contact.php"); </script>';
    }
    ?>
    </div>
<br/>
  </div>
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
