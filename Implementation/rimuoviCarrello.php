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
  $sql_Mail_c = "SELECT * FROM carrello WHERE Mail='$Mail'";
  $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
  $_SESSION['FULLCART']="";
  if(!(mysqli_num_rows($res_Mail_c) > 0)){
    echo '<script> location.replace("../product.php"); </script>';
  }else{
    $sql_Prod = "SELECT stored_product FROM carrello WHERE Mail='$Mail'";
    $res_Prod =mysqli_query($connection,$sql_Prod);
    $sql_Cart="";
    $sql_Cart2="";

    $sql_mov1 ="";
    $sql_mov2 ="";
    $sql_mov3 ="";
    $sql_mov4 ="";
    $sql_mov5 ="";
    $sql_mov6 ="";
    $sql_mov7 ="";
    $sql_mov8 ="";
    $sql_mov9 ="";
    $sql_mov10 = "";

    $sql_carrello="SELECT * FROM carrello WHERE Mail='$Mail'";
    $res_carrello =mysqli_query($connection,$sql_carrello);

    $product_1=$product_2=$product_3=$product_4=$product_5=$product_6=$product_7=$product_8=$product_9=$product_10="";

    while($row1=mysqli_fetch_array($res_carrello)){
      $product_1=$row1['product_1'];
      $product_2=$row1['product_2'];
      $product_3=$row1['product_3'];
      $product_4=$row1['product_4'];
      $product_5=$row1['product_5'];
      $product_6=$row1['product_6'];
      $product_7=$row1['product_7'];
      $product_8=$row1['product_8'];
      $product_9=$row1['product_9'];
      $product_10=$row1['product_10'];
    }

      if(mysqli_num_rows($res_Prod) > 0){
        while($row = mysqli_fetch_array($res_Prod)){
                switch($id){
                  case $product_1:
                  $switch=1;
                  echo "1";
                  break;
                  case $product_2:
                  $switch=2;
                  echo "2";
                  break;
                  case $product_3:
                  $switch=3;
                  echo "3";
                  break;
                  case $product_4:
                  $switch=4;
                  echo "4";
                  break;
                  case $product_5:
                  $switch=5;
                  echo "5";
                  break;
                  case $product_6:
                  $switch=6;
                  echo "6";
                  break;
                  case $product_7:
                  $switch=7;
                  echo "7";
                  break;
                  case $product_8:
                  $switch=8;
                  echo "8";
                  break;
                  case $product_9:
                  echo "9";
                  $switch=9;
                  break;
                  case $product_10:
                  echo "10";
                  $switch=10;
                  break;

                }
                switch($switch){
                  case '1':
                          $sql_mov1 = "UPDATE `carrello` SET `product_1` = '$product_2' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov2 = "UPDATE `carrello` SET `product_2` = '$product_3' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov3 = "UPDATE `carrello` SET `product_3` = '$product_4' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov4 = "UPDATE `carrello` SET `product_4` = '$product_5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `product_5` = '$product_6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `product_6` = '$product_7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov1.";".$sql_mov2.";".$sql_mov3.";".$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '0' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '2':
                          $sql_mov2 = "UPDATE `carrello` SET `product_2` = '$product_3' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov3 = "UPDATE `carrello` SET `product_3` = '$product_4' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov4 = "UPDATE `carrello` SET `product_4` = '$product_5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `product_5` = '$product_6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `product_6` = '$product_7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov2.";".$sql_mov3.";".$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '1' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '3':
                          $sql_mov3 = "UPDATE `carrello` SET `product_3` = '$product_4' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov4 = "UPDATE `carrello` SET `product_4` = '$product_5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `product_5` = '$product_6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `product_6` = '$product_7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov3.";".$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '2' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '4':
                          $sql_mov4 = "UPDATE `carrello` SET `product_4` = '$product_5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `product_5` = '$product_6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `product_6` = '$product_7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9= "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '3' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '5':
                          $sql_mov5 = "UPDATE `carrello` SET `product_5` = '$product_6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `product_6` = '$product_7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10= "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '4' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '6':
                          $sql_mov6 = "UPDATE `carrello` SET `product_6` = '$product_7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";


                          $Final_query=$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '5' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '7':
                          $sql_mov7 = "UPDATE `carrello` SET `product_7` = '$product_8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '6' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '8':
                          $sql_mov8 = "UPDATE `carrello` SET `product_8` = '$product_9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '7' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '9':
                          $sql_mov9 = "UPDATE `carrello` SET `product_9` = '$product_10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '8' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '10':
                          $sql_mov10 = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '9' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                }
          }
              if(!($sql_Cart2=="")&&!($Final_query=="")) {
                $res_Cart2 =mysqli_query($connection,$sql_Cart2);
                $res_finale =mysqli_multi_query($connection,$Final_query);

                  $_SESSION['FULLCART']="";
              }
              echo '<script> location.replace("../carrello.php"); </script>';
      }
}
  mysqli_close($connection);

?>
