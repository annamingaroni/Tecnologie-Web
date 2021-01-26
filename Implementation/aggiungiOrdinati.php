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
  $sql_Mail_c = "SELECT * FROM ordinati WHERE Mail='$Mail'";
  $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
  $_SESSION['FULLCART']="";
  if(!(mysqli_num_rows($res_Mail_c) > 0)){
    $sql_Car = "INSERT INTO `ordinati` (`ID`, `Mail`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_7`, `product_8`, `product_9`, `product_10`, `stored_product`)"."VALUES (NULL, '$Mail', '$id', '0', '0', '0', '0', '0', '0', '0', '0', '1')";
    $res_Car =mysqli_query($connection,$sql_Car);
    echo '<script> location.replace("../product.php"); </script>';
  }else{
    $sql_Prod = "SELECT stored_product FROM ordinati WHERE Mail='$Mail'";
    $res_Prod =mysqli_query($connection,$sql_Prod);
    $sql_Cart="";
    $sql_Cart1="";
    $sql_Cart2="";

    $sql_ordinati="SELECT * FROM ordinati WHERE Mail='$Mail'";
    $res_ordinati =mysqli_query($connection,$sql_ordinati);
    $product_1=$product_2=$product_3=$product_4=$product_5=$product_6=$product_7=$product_8=$product_9=$product_10="";
    while($row1=mysqli_fetch_array($res_ordinati)){
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

    if(($id!=$product_1)&&($id!=$product_2)&&($id!=$product_3)&&($id!=$product_4)&&($id!=$product_5)&&($id!=$product_6)&&($id!=$product_7)&&($id!=$product_8)&&($id!=$product_9)&&($id!=$product_10)){
      if(mysqli_num_rows($res_Prod) > 0){
              while($row = mysqli_fetch_array($res_Prod)){
                switch($row['stored_product']){
                  case '0':
                          $sql_Cart = "UPDATE `ordinati` SET `product_1` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_1` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '1':
                          $sql_Cart = "UPDATE `ordinati` SET `product_2` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_2` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '2' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '2':
                          $sql_Cart = "UPDATE `ordinati` SET `product_3` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_3` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '3' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '3':
                          $sql_Cart = "UPDATE `ordinati` SET `product_4` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_4` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '4' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '4':
                          $sql_Cart = "UPDATE `ordinati` SET `product_5` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_5` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '5' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '5':
                          $sql_Cart = "UPDATE `ordinati` SET `product_6` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_6` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '6' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '6':
                          $sql_Cart = "UPDATE `ordinati` SET `product_7` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_7` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '7' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '7':
                          $sql_Cart = "UPDATE `ordinati` SET `product_8` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_8` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '8' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '8':
                          $sql_Cart = "UPDATE `ordinati` SET `product_9` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_9` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '9' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '9':
                          $sql_Cart = "UPDATE `ordinati` SET `product_10` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart1 = "UPDATE `ordinati` SET `numero_p_10` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = '10' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '10':
                  $_SESSION['FULLCART']="<div class=\"alert alert-danger\" role=\"alert\">
                  La lista ordinati è piena
                  </div>";
                  break;
                }
          }
              if(!($sql_Cart2=="")&&!($sql_Cart=="")&&!($sql_Cart1=="")){
                $res_Cart2 =mysqli_query($connection,$sql_Cart2);
                $res_Cart =mysqli_query($connection,$sql_Cart);
                $res_Cart1 =mysqli_query($connection,$sql_Cart1);
                  $_SESSION['FULLCART']="";
              }
              $deleteFromCarrello="rimuoviCarrello.php?id=".$id;
              echo '<script> location.replace("'.$deleteFromCarrello.'"); </script>';
      }
    }else if(($id==$product_1)||($id==$product_2)||($id==$product_3)||($id==$product_4)||($id==$product_5)||($id==$product_6)||($id==$product_7)||($id==$product_8)||($id==$product_9)||($id==$product_10)){
        if(mysqli_num_rows($res_Prod) > 0){
                $num=1;
                while($row = mysqli_fetch_array($res_Prod)){
                            if($id==$product_1){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_1` = `numero_p_1` + '$num' WHERE `ordinati`.`product_1` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_2){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_2` = `numero_p_2` + '$num' WHERE `ordinati`.`product_2` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_3){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_3` = `numero_p_3` + '$num' WHERE `ordinati`.`product_3` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_4){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_4` = `numero_p_4` + '$num' WHERE `ordinati`.`product_4` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_5){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_5` = `numero_p_5` + '$num' WHERE `ordinati`.`product_5` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_6){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_6` = `numero_p_6` + '$num' WHERE `ordinati`.`product_6` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_7){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_7` = `numero_p_7` + '$num' WHERE `ordinati`.`product_7` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_8){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_8` = `numero_p_8` + '$num' WHERE `ordinati`.`product_8` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_9){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_9` = `numero_p_9` + '$num' WHERE `ordinati`.`product_9` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
                            if($id==$product_10){
                                $sql_Cart = "UPDATE `ordinati` SET  `numero_p_10` = `numero_p_10` + '$num' WHERE `ordinati`.`product_10` = '$id' AND `ordinati`.`Mail` = '$Mail'";
                                $sql_Cart2 = "UPDATE `ordinati` SET `stored_product` = `stored_product` + '$num' WHERE `ordinati`.`Mail` = '$Mail'";
                            }
            }
                if(!($sql_Cart2=="")&&!($sql_Cart=="")){
                  $res_Cart2 =mysqli_query($connection,$sql_Cart2);
                  $res_Cart =mysqli_query($connection,$sql_Cart);
                    $_SESSION['FULLCART']="";
                }
                $deleteFromCarrello="rimuoviCarrello.php?id=".$id;
                echo '<script> location.replace("'.$deleteFromCarrello.'"); </script>';
        }
  }
}

?>
