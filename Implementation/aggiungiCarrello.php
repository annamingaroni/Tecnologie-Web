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
    $sql_Car = "INSERT INTO `carrello` (`ID`, `Mail`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_7`, `product_8`, `product_9`, `product_10`, `stored_product`)"."VALUES (NULL, '$Mail', '$id', '0', '0', '0', '0', '0', '0', '0', '0', '1')";
    $res_Car =mysqli_query($connection,$sql_Car);
    echo '<script> location.replace("../product.php"); </script>';
  }else{
    $sql_Prod = "SELECT stored_product FROM carrello WHERE Mail='$Mail'";
    $res_Prod =mysqli_query($connection,$sql_Prod);
    $sql_Cart="";
    $sql_Cart2="";
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

    $sql_Mail_sold = "SELECT `soldout` FROM `product` WHERE `ID`='$id'";
    $res_Mail_sold =mysqli_query($connection,$sql_Mail_sold);
    $row = mysqli_fetch_array($res_Mail_sold);
    if($row['soldout'] == 1){
        $_SESSION['FULLCART'] = "<div class=\"container text-center\"><div class=\"alert alert-danger\" role=\"alert\">
                                  <h3>Ci dispiace, il Prodotto è Soldout</h3>
                                </div></div>";
        echo '<script> location.replace("../product.php"); </script>';

    }else{
        if(($id!=$product_1)&&($id!=$product_2)&&($id!=$product_3)&&($id!=$product_4)&&($id!=$product_5)&&($id!=$product_6)&&($id!=$product_7)&&($id!=$product_8)&&($id!=$product_9)&&($id!=$product_10)){
          if(mysqli_num_rows($res_Prod) > 0){
              while($row = mysqli_fetch_array($res_Prod)){
                switch($row['stored_product']){
                  case '0':
                          $sql_Cart = "UPDATE `carrello` SET `product_1` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '1' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '1':
                          $sql_Cart = "UPDATE `carrello` SET `product_2` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '2' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '2':
                          $sql_Cart = "UPDATE `carrello` SET `product_3` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '3' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '3':
                          $sql_Cart = "UPDATE `carrello` SET `product_4` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '4' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '4':
                          $sql_Cart = "UPDATE `carrello` SET `product_5` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '5' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '5':
                          $sql_Cart = "UPDATE `carrello` SET `product_6` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '6' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '6':
                          $sql_Cart = "UPDATE `carrello` SET `product_7` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '7' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '7':
                          $sql_Cart = "UPDATE `carrello` SET `product_8` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '8' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '8':
                          $sql_Cart = "UPDATE `carrello` SET `product_9` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '9' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '9':
                          $sql_Cart = "UPDATE `carrello` SET `product_10` = '$id' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `carrello` SET `stored_product` = '10' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '10':
                  $_SESSION['FULLCART']="IL CARRELLO E' PIENO";
                  break;
                }
          }
              if(!($sql_Cart2=="")&&!($sql_Cart=="")){
                $res_Cart2 =mysqli_query($connection,$sql_Cart2);
                $res_Cart =mysqli_query($connection,$sql_Cart);
                  $_SESSION['FULLCART']="";
              }
              //$res_Mail_a =mysqli_query($connection,$sql_Mail_a);
              echo '<script> location.replace("../product.php"); </script>';
      }
  }else{
      $_SESSION['FULLCART']="<div class=\"container text-center\"><div class=\"alert alert-danger\" role=\"alert\">
                                <h3>Il prodotto è già stato aggiunto al Carrello</h3>
                              </div></div>";
        echo '<script> location.replace("../product.php"); </script>';
  }
  }
}

?>
