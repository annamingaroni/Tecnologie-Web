<?php

$vista="";
$spaziatore="<br/><br/>";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$addProduct="";
$notLogged="";
$addedProduct="";
session_start();

if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
}
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
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

if($select=="Cliente"){
  $carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item active\"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a></li>";
  $payButton="  <div class=\"card-footer\"><a href=\"pay.php?id=";
  $payButton2="\" class=\"btn btn-danger btn-sm\">Acquista prodotto</a><br/>&nbsp;<br/><a href=\"Implementation/aggiungiCarrello.php?id=";
  $text="\" class=\"btn btn-dark btn-sm\">Aggiungi al Carrello</a>"."</div>";
  $notification='      &nbsp&nbsp&nbsp
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
         <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span>  '.$badge.'
          <ul class="dropdown-menu"></ul>
         </li>
        </ul>';
}
if(!isset($_SESSION['Mail'])&&!isset($_SESSION['select'])){
  $notLogged="          <li class=\"nav-item\">
              <a class=\"btn btn-secondary btn-sm\" style=\"margin-top: 7px; margin-left:12px;\" href=\"login.php\">Accedi/Registrati</a>
            </li>";
}
?>
