<?php
$p_nameWrong =$file_Err=$p_descrWrong = "";
$p_name = $admin_name = $p_descr =$file=$image= "";
$vista="";
$generaNotifica="";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$addProduct="";
$notLogged="";
$max_p="";
$max_price="";
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
}
$badge="";
if($select=="Cliente"){
  $carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
  $notification='      &nbsp&nbsp&nbsp
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
        <span class="badge badge-pill badge-light dropdown-toggle" data-toggle="dropdown">Notifiche</span>  '.$badge.'
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
    $badge="<span class=\"badge badge-pill badge-danger count\" style=\"border-radius:10px;\"></span>";
  }
  $addedProduct="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Prodotti aggiunti</a> </li>";
  $addProduct="  <li class=\"nav-item \"><a href=\"addproduct.php\" class=\"nav-link active\">Aggiungi Prodotto</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
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
  $notLogged="          <li class=\"nav-item\"><a class=\"btn btn-secondary btn-sm\" style=\"margin-top: 7px; margin-left:12px;\" href=\"login.php\">Accedi/Registrati</a></li>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["p_name"])) {
    $p_nameWrong = "p_name is required";
  } else {
    $p_name = test_input($_POST["p_name"]);
}
if (empty($_POST["num_max"])) {
} else {
  $max_p = test_input($_POST["num_max"]);
}
if (empty($_POST["price"])) {
} else {
  $max_price = test_input($_POST["price"]);
}
  if (empty($_POST["p_descr"])) {
    $p_descrWrong = "p_descr is required";
  } else {
    $p_descr = test_input($_POST["p_descr"]);
  }
  if (empty($_POST["file"])) {
    $file_Err = "file is required";
  } else {
    $file = test_input($_POST["file"]);
  }
}
$msg="";
if (isset($_POST['AddProd'])) {
  $image = $_FILES['image']['name'];
  $target = "images/".basename($image);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Immagine caricata con successo!";
  }else{
    $msg = "Caricamento immagine fallito.";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
