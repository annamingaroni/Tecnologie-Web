<?php
$p_sold = $total_earned = $p_soldout = $total_prod = 0;
$Mail="";
$select="";

  if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
    $select=$_SESSION['select'];
    $Mail=$_SESSION['Mail'];
  }
  $connection = mysqli_connect('localhost','root','','tecnologie_web');
  if(!$connection){
    echo 'error:' . mysqli_connect_error();
  }
  $sql = "SELECT * FROM product WHERE admin='$Mail'";
  $res_sql =mysqli_query($connection,$sql);
  $p_available=0;
  $total_prod=0;
    while($row = mysqli_fetch_array($res_sql)){
      $p_available++;
      $total_prod = $total_prod + ($row['num_max'] - $row['n_Buy']);
    }
  $p_sold=0;
  $sql = "SELECT n_Buy FROM product WHERE admin='$Mail'";
  $res_sql = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
    $p_sold = $p_sold + $row['n_Buy'];
  }
  $p_soldout=0;
  $sql = "SELECT * FROM product WHERE admin='$Mail'";
  $res_sql = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
      $p_soldout = $p_soldout + $row['soldout'];
  }
  $total_earned=0;
  $sql = "SELECT * FROM product WHERE admin='$Mail'";
  $res_sql = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
    $total_earned = $row['price'] * $row['n_Buy'];
  }
  mysqli_close($connection);
  ?>
