<?php
$i="";
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
if($select=="Cliente"){
        $_SESSION['FULLCART']="";
  $connection = mysqli_connect('localhost','root','','tecnologie_web');
  if(!$connection){
    echo 'error:' . mysqli_connect_error();
  }
  $sql_Prod = "SELECT * FROM product";
  $res_Prod =mysqli_query($connection,$sql_Prod);
  $sql_carrello="SELECT * FROM ordinati WHERE Mail='$Mail'";
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
  $counter=0;
  $i=0;
  while($row = mysqli_fetch_array($res_Prod)){
    if($row['ID']==$product_1||$row['ID']==$product_2||$row['ID']==$product_3||$row['ID']==$product_4||$row['ID']
    ==$product_5||$row['ID']==$product_6||$row['ID']==$product_7||$row['ID']==$product_8||$row['ID']==$product_9||$row['ID']==$product_10){
    if($counter==0){
      echo "<div class=\"row\">";
    }
    $counter++;
               echo "<div class=\"col-md-4 mb-5\"><div class=\"card h-100\">";
               echo "<img class=\"image\" src=\"".$row['image']."\" class=\"card-img-top\" alt=\"\">";
               echo  "<div class=\"card-body\"><h3 class=\"card-title text-center\">" . $row['p_name'] . "</h3></div>";
               echo " <ul class=\"list-group list-group-flush\">";
               echo  "<li class=\"list-group-item text-center\"><strong>Prezzo a prodotto: </strong>".$row['price']." €"."</li>";
              $id_E=$row['ID'];
              $sql_Mail_c = "SELECT * FROM product_q_info WHERE mail='$Mail'";
              $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
              $sql_Mail = "SELECT * FROM product_q_info WHERE product_id='$id_E'";
              $res_Mail =mysqli_query($connection,$sql_Mail);
              if((mysqli_num_rows($res_Mail) > 0)&&(mysqli_num_rows($res_Mail_c) > 0)){
                $sql_M = "SELECT * FROM product_q_info WHERE product_id='$id_E'";
                $res_M =mysqli_query($connection,$sql_M);
                while($row = mysqli_fetch_array($res_M)){
                 $numero=$row['numero'];
                }
                //echo "<center><p><strong>Quantità: </strong>".$numero."</p></center>";
              }
              echo "</div></div>";
               $i++;
                     if($counter==3){
                       echo "</div>";
                       $counter=0;
                     }
       }
         }
       if($counter==1||$counter==2){
         echo "</div>";
       }
}
if($i==0){
  $spaziatore.="<br/><br/><br/><br/><br/><br/>";
}
?>
