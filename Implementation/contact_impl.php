<?php
$nameErr = $emailErr = $passErr = "";
$name_c = $email = $comment =$selected= "";
$email = $comment="";
$var_1=$var_2=0;
$singup=0;
$robot="si";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST['selected'])){
    $selected=test_input($_POST['selected']);
  }

  if (empty($_POST["name_c"])) {
    $nameErr = "Name is required";
  } else {
    $name_c = test_input($_POST["name_c"]);
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }else{
        $var_1=1;
        $singup=1;
    }
  }
  if (empty($_POST["comment"])) {
    $passErr = "comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
    $var_2=1;
    $singup=1;
  }
  if (!empty($_POST["robot"])) {
    $robot="no";
  }else{
    $robot="si";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
$vista="";
$notification="";
$areaPersonale="";
$mailform='      <div class="form-group">
                      <label for="inputMail" class="form-label">Email</label>
                      <input type="text" class="form-control" id="inputMail" name="email" title="form" rows="10" cols="10" placeholder="inserisci la tua email" value="<?php echo $email?>"> </textarea>
      </div>';
$generaNotifica="";
$carrello="";
$logout="";
$name="";
$select="";
$footerCard="          <div class=\"card-body\"><h2 class=\"card-title\">Esegui il login</h2><p class=\"card-text\">così facendo potrai accedere a un mondo di offerte</p></div>  <div class=\"card-footer\"><a href=\"login.php\" class=\"btn btn-primary btn-sm\">Start Now!</a>";
$Mail="";
$addProduct="";
$notLogged="          <li class=\"nav-item\"><a class=\"btn btn-secondary btn-sm\" style=\"margin-top: 6px; margin-left:12px;\" href=\"login.php\">Accedi/Registrati</a>";
$viewProduct="";
$addedProduct="";
$linkForHome="index.html";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
$linkForHome="logged.php";
$notLogged="";
}
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}

if($select=="Cliente"){
  $update_query = "SELECT * FROM notificheclient";
  $res=mysqli_query($connection, $update_query);
  while($row = mysqli_fetch_array($res)){
   $vista=$row['vistada'];
  }
  if(isset($_SESSION['Mail'])){
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-warning count\" style=\"border-radius:10px;\"></span>";
  }}
$carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
$viewProduct="          <li class=\"nav-item\"><a class=\"nav-link\" href=\"product.php\">Prodotti</a></li>";
$footerCard="          <div class=\"card-body\"><h2 class=\"card-title\">Accedi al carrello</h2><p class=\"card-text\">Aggiungi i tuoi prodotti preferiti</p></div>  <div class=\"card-footer\"><a href=\"carrello.php\" class=\"btn btn-primary btn-sm\">Start Now!</a>";
$notLogged="";
$notification='      &nbsp&nbsp&nbsp
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
       <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span> '.$badge.'
        <ul class="dropdown-menu"></ul>
       </li>
      </ul>';
      $fetch="fetch.php";
$mailform="";
}
if($select=="Amministratore"){
  $update_query = "SELECT * FROM notificheadmin";
  $res=mysqli_query($connection, $update_query);
  while($row = mysqli_fetch_array($res)){
   $vista=$row['vistada'];
  }
  if(isset($_SESSION['Mail'])){
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-danger count\" style=\"border-radius:10px;\"></span>";
  }}
$addedProduct="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Prodotti aggiunti</a> </li>";
$addProduct="  <li class=\"nav-item \"><a href=\"addproduct.php\" class=\"nav-link\">Aggiungi Prodotto</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
$notLogged="";
$generaNotifica='          <li class="nav-item">
            <a class="nav-link" href="notification.php">Nuova Notifica</a>
          </li>';
$notification='      &nbsp&nbsp&nbsp
                <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                 <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span> '.$badge.'
                  <ul class="dropdown-menu"></ul>
                 </li>
                </ul>';
$fetch="fetch2.php";
$mailform="";
}

?>
