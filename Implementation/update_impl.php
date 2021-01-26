<?php
$p_nameWrong = $file_Err = $p_descrWrong = "";
$p_name = $admin_name = $p_descr = $file = $image = "";

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
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
}
  $id_Setter="<form method=\"post\" action=\"update.php\" enctype=\"multipart/form-data\">";
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $id_Setter="<form method=\"post\" action=\"update.php?id=".$id."\" enctype=\"multipart/form-data\">";
}
if($select=="Cliente"){
  $carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
}
if($select=="Amministratore"){
  $addedProduct="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Prodotti Aggiunti</a> </li>";
  $addProduct="  <li class=\"nav-item \"><a href=\"addproduct.php\" class=\"nav-link \">Aggiungi Prodotto</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"Implementation/logout.php\" class=\"btn btn-danger btn-sm\" style=\"margin-top: 5px; margin-left:9px;\">Esci</a>  </li>";
  $generaNotifica='          <li class="nav-item">
            <a class="nav-link" href="notification.php">Nuova Notifica</a>
          </li>';
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
if (empty($_POST["price"])) {
} else {
  $max_p = test_input($_POST["price"]);
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

if (isset($_POST['ModProd'])) {
  $image = $_FILES['image']['name'];
  $target = "images/".basename($image);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
