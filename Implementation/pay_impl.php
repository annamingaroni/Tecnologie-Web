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
$id = intval($_GET['id']);
if(isset($_GET['n'])){
  $n=$_GET['n'];
}else{
  $n=0;
}
$payThat="?id=".$id."&n=".$n;
$p_price=0;
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
$sql = "SELECT * FROM product WHERE id='$id'";
$res_sql =mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($res_sql)){
  if(!$_GET['n']==0){
    $p_price=$row['price']*$_GET['n'];
  }else{
    $p_price=$row['price'];
  }
}
?>
