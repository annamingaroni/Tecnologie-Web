<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $connection = mysqli_connect('localhost','root','','tecnologie_web');
  if(!$connection){
  echo 'error:' . mysqli_connect_error();
  }
  $autonotification="";
  if(isset($p_name)&&($p_name!="")){
    $sql_s="UPDATE `product` SET `p_name`='$p_name', `admin`='$Mail' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." Nome: $p_name ";
  }
  if(isset($p_descr)&&($p_descr!="")){
    $sql_s="UPDATE `product` SET  `p_descr`='$p_descr', `admin`='$Mail' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
  }
  if(isset($target)&&($target!="images/")){
    $sql_s="UPDATE `product` SET `admin`='$Mail', `image`='$target' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." Immagine ";
  }
  if(isset($max_p)&&($max_p!="")){
    $sql_s="UPDATE `product` SET `admin`='$Mail', `num_max`='$max_p' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
  }
  if(isset($max_price)&&($max_price!="")){
    $sql_s="UPDATE `product` SET `admin`='$Mail', `price`='$max_price' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." Prezzo: $max_price";
  }
  $product_not_modify="MODIFICATO PRODOTTO:".$id;
  $sql_s="INSERT INTO `notificheclient` (`comment_subject`,`comment_text`) VALUES ('$product_not_modify','$autonotification')";
  $result_s =mysqli_query($connection,$sql_s);
  $p_name = $admin_name = $p_descr = $file = $image = "";

mysqli_close($connection);
echo '<script> location.replace("carrello.php#modify"); </script>';
}
?>
