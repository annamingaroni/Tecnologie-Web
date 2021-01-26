<?php
$soldout="";
$cinquantaI="";
$cinquantaB="";
$centoB="";
$centoI="";
$testo="";
$soldout="";
$expired="";
$Mail="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
  $select=$_SESSION['select'];
  $Mail=$_SESSION['Mail'];
}
$select_Notification=0;
if(isset($_GET['Mail'])){
  $Mail=$_GET['Mail'];
}else{
    echo '<script> location.replace("../index.html"); </script>';
}
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
$sql_Prod = "SELECT * FROM `product`";
$res_Prod =mysqli_query($connection,$sql_Prod);
while($row = mysqli_fetch_array($res_Prod)){
  if($row['no_admin']==0){
    if(($row['num_max']<=$row['n_Buy'])&&($row['n_Buy'])!=0){
        $id2=$row['ID'];
        $sql = "UPDATE product SET soldout= '1' WHERE ID='$id2'";
        $res_sql =mysqli_query($connection,$sql);

        $s_text="SOLDOUT";
        $s2_text="Nome prodotto= ".$row['p_name']." Soldout</br> ID Prodotto=".$row['ID'];

        $sql = "INSERT INTO `notificheadmin` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`,`mail`) VALUES (NULL, '$s_text', '$s2_text','', '$Mail')";
        $res_sql =mysqli_query($connection,$sql);
        $sql = "UPDATE product SET no_admin= '1' WHERE ID='$id2'";
        $res_sql =mysqli_query($connection,$sql);
      }
    }
}
echo '<script> location.replace("../logged.php"); </script>';
?>
