<?php
$notification="";
$generaNotifica="";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$email="";
$name_c="";
$select="";
$Mail="";
$addProduct="";
$addedProduct="";
$badge="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}else{
  echo '<script> location.replace("index.html"); </script>';
}
if($select=="Cliente"){
$carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
$notification='      &nbsp&nbsp&nbsp
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span>
        <ul class="dropdown-menu"></ul>
       </li>
      </ul>';
$fetch="fetch.php";
}
if($select=="Amministratore"){
  $addedProduct="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Prodotti aggiunti</a> </li>";
  $addProduct="  <li class=\"nav-item \"><a href=\"addproduct.php\" class=\"nav-link\">Aggiungi prodotto</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\"style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
  $generaNotifica='          <li class="nav-item active">
            <a class="nav-link" href="notification.php">Nuova Notifica</a>
          </li>';
  $notification='      &nbsp&nbsp&nbsp
                <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span>  '.$badge.'
                  <ul class="dropdown-menu"></ul>
                 </li>
                </ul>';
   $fetch="fetch2.php";
}
?>
