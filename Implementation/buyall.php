<?php
function ordinati($mail_f,$product){
  $connection = mysqli_connect('localhost','root','','tecnologie_web');
  if(!$connection){
    echo 'error:' . mysqli_connect_error();
  }
  $sql_Mail_a = "SELECT * FROM `ordinati` WHERE `ordinati`.`Mail`='$mail_f'";
  $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
  $row = mysqli_fetch_array($res_Mail_a);
  if($row['product_1']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_1` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_1` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_2']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_2` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_2` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_3']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_3` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_3` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_4']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_4` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_4` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_5']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_5` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_5` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_6']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_6` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_6` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_7']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_7` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_7` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_8']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_8` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_8` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_9']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_9` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_9` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
  if($row['product_10']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `product_10` = '$product' WHERE `ordinati`.`Mail` = '$mail_f'";
    $sql_num = "UPDATE `ordinati` SET `numero_p_10` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $res_num =mysqli_query($connection,$sql_num);
    return;
  }
}
$mail = $_GET['mail'];
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
    $sql_Mail_a = "SELECT * FROM `carrello` WHERE `carrello`.`Mail`='$mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $row = mysqli_fetch_array($res_Mail_a);
      if($row['product_1']!=0){
        $id_l=$row['product_1'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+1 WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_1` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_2']!=0){
        $id_l=$row['product_2'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_2` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_3']!=0){
        $id_l=$row['product_3'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_3` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_4']!=0){
        $id_l=$row['product_4'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_4` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_5']!=0){
        $id_l=$row['product_5'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_5` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_6']!=0){
        $id_l=$row['product_6'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_6` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_7']!=0){
        $id_l=$row['product_7'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_7` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_8']!=0){
        $id_l=$row['product_8'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_8` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_9']!=0){
        $id_l=$row['product_9'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_9` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['product_10']!=0){
        $id_l=$row['product_10'];
        $sql_Mail_a = "UPDATE `product` SET `n_Buy` = `n_Buy`+'1' WHERE `product`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `product_10` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      $sql_Mail_a = "UPDATE `carrello` SET `stored_product` = '0' WHERE `carrello`.`Mail` = '$mail'";
      $res_Mail_a =mysqli_query($connection,$sql_Mail_a);

      echo '<script> location.replace("../order.php"); </script>';

  mysqli_close($connection);

?>
