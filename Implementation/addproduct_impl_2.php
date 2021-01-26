<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $connection = mysqli_connect('localhost','root','','tecnologie_web');
    if(!$connection){
      echo 'error:' . mysqli_connect_error();
    }
    $sql_s="INSERT INTO `product` (`p_name`, `p_descr`, `admin`, `image`, `num_max`, `price`) VALUES ('$p_name','$p_descr','$Mail','$target','$max_p','$max_price')";
    $result_s =mysqli_query($connection,$sql_s);
    $p_name = $admin_name = $p_descr = $file = $image = "";

    mysqli_close($connection);
    echo '<script> location.replace("carrello.php#creato"); </script>';
 }
?>
