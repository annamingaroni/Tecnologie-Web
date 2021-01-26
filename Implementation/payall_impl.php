<?php
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$addProduct="";
$addedProduct="";
$id="";
$res_sql="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
}
$mail_get = intval($_GET['mail']);
$tot_get = intval($_GET['totale']);
$payThat="?mail=".$_GET['mail'];
$p_price=0;
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
$sql = "SELECT * FROM product WHERE id='$id'";
$res_sql =mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($res_sql)){
$p_price=$row['price'];
}
?>
