<?php
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
}
$id = intval($_GET['id']);
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
  $sql_Mail_c = "SELECT * FROM product WHERE admin='$Mail'";
  $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
  if(mysqli_num_rows($res_Mail_c) > 0){
    $sql_Mail_d = "DELETE FROM product WHERE id='$id'";
    $res_Mail_d =mysqli_query($connection,$sql_Mail_d);
}
  mysqli_close($connection);
  echo '<script> location.replace("../carrello.php#delete"); </script>';
?>
