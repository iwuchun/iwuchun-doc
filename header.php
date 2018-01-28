<?php
/**
 * Created by PhpStorm.
 * User: iwuch
 * Date: 2018/1/25
 * Time: 22:29
 */
session_start();
if(!empty($_COOKIE['seid'])||!empty($_session['nickname'])){
    echo "<script>location.href='login.html'</script>";
}
?>