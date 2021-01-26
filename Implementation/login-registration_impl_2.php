<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['login'])){
              if($var_1==1 && $var_2==1 && $signup==0){
                $connection = mysqli_connect('localhost','root','','tecnologie_web');
                if(!$connection){
                  echo 'error:' . mysqli_connect_error();
                }
                $sql_Mail_c = "SELECT * FROM clientlogin WHERE Mail='$email'";
                $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
                $pass=sha1($pass);
                $sql_Pass_c = "SELECT * FROM clientlogin WHERE Password='$pass'";
                $res_Pass_c =mysqli_query($connection,$sql_Pass_c);
                $sql_Mail_o = "SELECT * FROM adminlogin WHERE Mail='$email'";
                $res_Mail_o =mysqli_query($connection,$sql_Mail_o);
                $sql_Pass_o = "SELECT * FROM adminlogin WHERE Password='$pass'";
                $res_Pass_o =mysqli_query($connection,$sql_Pass_o);
                if((mysqli_num_rows($res_Mail_c) > 0)&&(mysqli_num_rows($res_Pass_c) > 0)){
                   echo "LOGIN OK";
                   $_SESSION['select'] = "Cliente";
                   echo '<script> location.replace("logged.php"); </script>';
                }else{
                    echo 'login FALLITO';
                }
                if((mysqli_num_rows($res_Mail_o) > 0)&&(mysqli_num_rows($res_Pass_o) > 0)){
                   echo "LOGIN OK";
                    $_SESSION['select'] = "Amministratore";
                   echo '<script> location.replace("Implementation/autoupdate.php?Mail='.$email.'"); </script>';
                }else{
                  echo 'login FALLITO';
                }
                mysqli_close($connection);
              }
    }

    if(!empty($_POST['signup'])){
            $connection = mysqli_connect('localhost','root','','tecnologie_web');
            if(!$connection){
              echo 'error:' . mysqli_connect_error();
            }
            echo "select: ".$select." ";
            if($select=="Amministratore"){
              $sql_Mail_s = "SELECT * FROM login WHERE Mail='$email_s'";
              $res_Mail_s =mysqli_query($connection,$sql_Mail_s);
              if((mysqli_num_rows($res_Mail_s) > 0)){
                     echo "Email già esistente";
              }else{
                   $pass_s = sha1($pass_s);
                   $sql_s="INSERT INTO adminlogin (name,Mail,Password)"." VALUES ('$name','$email_s','$pass_s')";
                   $result_s =mysqli_query($connection,$sql_s);
                   echo '<script> location.replace("registered.php"); </script>';
               }
            }
            if($select=="Cliente"){
              $sql_Mail_s = "SELECT * FROM login WHERE Mail='$email_s'";
              $res_Mail_s =mysqli_query($connection,$sql_Mail_s);
              if((mysqli_num_rows($res_Mail_s) > 0)){
                     echo "Email già esistente";
              }else{
                  $pass_s = sha1($pass_s);
                  $sql_s="INSERT INTO clientlogin (name,Mail,Password)"." VALUES ('$name','$email_s','$pass_s')";
                  $result_s =mysqli_query($connection,$sql_s);
                  echo '<script> location.replace("registered.php"); </script>';
               }
            }
            mysqli_close($connection);
    }
}
?>
