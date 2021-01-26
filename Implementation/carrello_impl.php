<?php
$i="";
$connection = mysqli_connect('localhost','root','','tecnologie_web');
if(!$connection){
  echo 'error:' . mysqli_connect_error();
}
if($select=="Amministratore"){
  $sql_Prod = "SELECT * FROM product WHERE admin='$Mail'";
  $res_Prod =mysqli_query($connection,$sql_Prod);
  $counter=0;
  echo "<div class=\"container text-right\"><a class=\"btn btn-light btn-lg\" style=\"margin-left:80px\" href=\"productInfo.php\"> Visualizza i dati sui Prodotti &raquo;</a></div></br>";
  while($row = mysqli_fetch_array($res_Prod)){
    if($counter==0){
      echo "<div class=\"row\">";
    }
    $counter++;
               echo "<div class=\"col-md-4 mb-5\"><div class=\"card h-100\">";
               echo "<img src=\"".$row['image']."\" class=\"image1 card-img-top\" alt=\"\"><div class=\"card-body\"><h3 class=\"card-title text-center\">" ;
               echo  $row['p_name']."</h3>";
               echo  "<p class=\"card-text text-center\">" . $row['p_descr'] . "</p></div>";
               echo "<ul class=\"list-group list-group-flush\">
                   <li class=\"list-group-item\">";
               echo "  <ul class=\"list-group list-group-flush\"><li class=\"list-group-item text-center\">";
               echo  "".$row['price']." €"."</li>";
                  echo $payButton.$row['ID'].$payButton2.$row['ID'].$text.$modify_product.$row['ID'].$modify_product2."</div></div>";
                     if($counter==3){
                       echo "</div>";
                       $counter=0;
                     }
       }
       if($counter==1||$counter==2){
         echo "</div>";
       }
}

if($select=="Cliente"){
        $_SESSION['FULLCART']="";
  $connection = mysqli_connect('localhost','root','','tecnologie_web');
  if(!$connection){
  echo 'error:' . mysqli_connect_error();
  }
  $sql_Prod = "SELECT * FROM product ";
  $res_Prod =mysqli_query($connection,$sql_Prod);
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
               echo  "<div class=\"card-body\"><h3 class=\"card-title text-center\">" . $row['p_name']." <img class=\"image\" src=\"".$row['image']."\" class=\"card-img-top\" alt=\"\"></h3></div>";
               echo "<ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">";
            if(isset($_GET['n'])){
              $n=$_GET['n'];
            }else{
              $n=0;
            }
            if(isset($_GET['id'])){

               if($_GET['id']==$row['ID']){
                 $n=$n+1;
                 $set=1;
                 echo "<div class=\"text-center\"><a href=\"carrello.php?id=".$row['ID']."&"."n=".$n."\" type=\"button\" class=\"btn btn-warning\">Aggiungi prodotto</a>&nbsp";
                 echo "<a href=\"carrello.php\" type=\"button\" class=\"btn btn-danger\">"."Azzera</a></div>";
                 echo "</br><p class=\"text-center\">Quantità: ".$n."</p>";
                 $prezzo=$row['price']*$n;
                 echo  "<h5 class=\"text-center\">Prezzo totale: ".$prezzo."€ </h5></li>";
               }else{

                 echo  "</br> <strong>Prezzo: ".$row['price']."€ </strong></li>";
               }}else{
                 echo "<div class=\"text-center\"><a href=\"carrello.php?id=".$row['ID']."&"."n=".$n."\" type=\"button\" class=\"btn btn-warning btn-sm\">"."Aggiungi prodotto</a></div>";
                 echo  "</br> <h5 class=\"text-center\">".$row['price']."€ </h5></li>";
               }

                    echo "<div class=\"text-center\">" . $payButton.$row['ID']."&n=".$n.$payButton2.$row['ID'].$text."</div></div></div>";

               $i++;
               $TotaleCarrello=$TotaleCarrello+$row['price'];
                     if($counter==3){
                       echo "</div>";
                       $counter=0;
                     }
       }
         }
       if($counter==1||$counter==2){
         echo "</div>";
       }
if($set!=1){
if($TotaleCarrello<=0){
  $nolink="#";
}else{
  $nolink="payall.php";
}
echo "<a class=\"btn btn-light btn-active btn-md\" style=\"margin-left:80px\" href=\"product.php\">&laquo; Torna ai prodotti</a>";
echo "<h2 class=\"text-right\" style=\"font-family: sans-serif;\"> Totale: ".$TotaleCarrello." €</h2></h3>
  <div class=\"text-right\"><a href=\"".$nolink."?mail=".$Mail."&totale=".$TotaleCarrello."\" class=\"text-center btn btn-success btn-lg \" style=\"font-family: sans-serif;\">Vai al Checkout</a></br></div></p>
</div>";
}
}
if($i==0){
  $spaziatore.="<br/><br/><br/><br/><br/><br/>";
}
?>
