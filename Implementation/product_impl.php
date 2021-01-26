<?php
$vista="";
$generaNotifica="";
$badge="";
$notification="";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$addProduct="";
$notLogged="";
$payButton="";
$payButton2="";
$pop="";
$pop2="";
$notification="";
$addedProduct="";
$text="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
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
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-warning count\" style=\"border-radius:10px;\"></span>";
  }

$carrello="<li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
$payButton="<div class=\"card-footer\">";
$payButton2="<a href=\"Implementation/aggiungiCarrello.php?id=";
$text="\" class=\"btn btn-success btn-sm\">Aggiungi al Carrello</a>"."</div>";
$notification='      &nbsp&nbsp&nbsp
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
       <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span>'."&nbsp".$badge.'
        <ul class="dropdown-menu"></ul>
       </li>
      </ul>';
$logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
$fetch="fetch.php";
}
if($select=="Amministratore"){
  $update_query = "SELECT * FROM notificheadmin";
  $res=mysqli_query($connection, $update_query);
  while($row = mysqli_fetch_array($res)){
   $vista=$row['vistada'];
  }
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-warning count\" style=\"border-radius:10px;\"></span>";
  }

$addedProduct="<li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Prodotti aggiunti</a> </li>";
$addProduct="<li class=\"nav-item \"><a href=\"addproduct.php\" class=\"nav-link\">Aggiungi prodotto</a> </li>";
$pop=" <div class=\"card-footer\"><a href=\"notification.php?id=";
$pop2="\" class=\"btn btn-primary btn-sm\">info</a></div>";
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
$logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
$fetch="fetch2.php";
}
if(!isset($_SESSION['Mail'])&&!isset($_SESSION['select'])){
  $notLogged="          <li class=\"nav-item\">
                <a class=\"btn btn-secondary btn-sm\" style=\"margin-top: 7px; margin-left:12px;\" href=\"login.php\">Accedi/Registrati</a>
            </li>";
}
?>
