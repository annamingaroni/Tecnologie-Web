<?php
$vista="";
  $generaNotifica="";
  $spaziatore="<br/><br/>";
  $areaPersonale="";
  $modify_product="";
  $notification="";
  $TotaleCarrello=0;
  $prezzo=0;
  $set=0;
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
    $carrello="  <li class=\"nav-item active\"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
    $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
    $payButton="  <div class=\"card-footer\"><a href=\"pay.php?id=";
    $payButton2="\" class=\"btn btn-success btn-md\">Acquista</a><br/>&nbsp;<br/><a href=\"Implementation/rimuoviCarrello.php?id=";
    $text="\" class=\"btn btn-danger btn-sm\">Rimuovi dal Carrello</a>"."</div>";
    $notification='      &nbsp&nbsp&nbsp
          <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
           <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span> '.$badge.'
            <ul class="dropdown-menu"></ul>
           </li>
          </ul>';
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
  $addedProduct="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link active\">Prodotti aggiunti</a> </li>";
  $addProduct="  <li class=\"nav-item \"><a href=\"addproduct.php\" class=\"nav-link\">Aggiungi Prodotto</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
  $payButton="  <div class=\"list-group-item text-center\">";
  $payButton2="<a href=\"Implementation/removeProduct.php?id=";
  $text="\" class=\"btn btn-danger btn-md\">Elimina</a>"."</div>";
  $modify_product="<a href=\"update.php?id=";
  $modify_product2="\" class=\"btn btn-warning btn-sm\">Modifica</a>";
  $generaNotifica='          <li class="nav-item">
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
  if(!isset($_SESSION['Mail'])&&!isset($_SESSION['select'])){

  $notLogged="          <li class=\"nav-item\"><a class=\"btn btn-secondary btn-sm\" href=\"login.php\">Accedi/Registrati</a></li>";
}

?>
