<?php
$counter=0;
if(isset($_SESSION['FULLCART'])){
  echo "<h1>".$_SESSION['FULLCART']."</h1>";
}
$sql_Prod = "SELECT * FROM product";
$res_Prod =mysqli_query($connection,$sql_Prod);
$i=0;
while($row = mysqli_fetch_array($res_Prod)){
  if($counter==0){
    echo "<div class=\"row\">";
  }
  $counter++;
  echo  "<div class=\"col-md-4 mb-5\"><div class=\"card h-100 text-center\">";
  echo  "<img class=\"image\" src=\"".$row['image']."\" class=\"card-img-top\" alt=\"\"><div class=\"card-body\"><h3 class=\"card-title\">" ;
  echo  $row['p_name']."</h3>";
  echo  "<p class=\"card-text\">" . $row['p_descr'] . "</p></div>";
  echo  "<ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">";
  echo  "<strong>" . $row['price'] . "</strong> €"."</li>";

  $id_notShow="";
  if($select=="Cliente"){
    $id_notShow=$row['ID'];
  }
  echo $payButton.$payButton2.$id_notShow.$text."</div></div>";
  if($counter==3){
    echo "</div>";
    $counter=0;
  }
}
  if($counter==1||$counter==2){
    echo "</div>";
  }

?>
