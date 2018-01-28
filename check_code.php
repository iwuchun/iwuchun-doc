<?php
session_start();
if(trim($_POST['code'])==$_SESSION['rand']){
    echo 1;
}
?>

