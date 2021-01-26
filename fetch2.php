<?php
include('connect.php');
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}

if(isset($_POST['view'])){
$update_query = "SELECT * FROM notificheadmin WHERE mail='$Mail'";
$res=mysqli_query($con, $update_query);
while($row = mysqli_fetch_array($res)){
 $vista=$row['vistada'];
}
$concat=$vista.$Mail;

if($_POST["view"] != '')
{
    $update_query = "UPDATE notificheadmin SET vistada='$concat'";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM notificheadmin ORDER BY comment_id DESC LIMIT 6";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
  $output .= '<p style=\"font-family:sans-serif; color:#05085e;\"><center>Notifiche<center></p> ';
  $contatore=0;
 while($row = mysqli_fetch_array($result))
 {
   if($row['mail']==$Mail){
   $output .= '
   <ul class="list-group">
   <hr>
   <li class="list-group-item list-group-item-warning">'.$row["comment_subject"].'</li>
   <li class="list-group-item list-group-item-secondary">'.$row["comment_text"].'</li>
   </ul>
   ';
   $contatore++;
 }
 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
$status_query = "SELECT * FROM notificheadmin WHERE mail='$Mail'";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);
echo json_encode($data);
}
?>
