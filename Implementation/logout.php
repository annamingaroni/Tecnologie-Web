<?php
session_start();
$_SESSION = array();
session_destroy();
echo '<script> location.replace("../index.html"); </script>';
?>
