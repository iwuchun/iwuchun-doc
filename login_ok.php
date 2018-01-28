<?php 
include('m.php');
if(!empty($_POST['password'])&&!empty($_POST['nickname'])){
    $sql = "SELECT * FROM user WHERE nickname='{$_POST['nickname']}' and password='{$_POST['password']}'";
    $res = mysqli_query($conn,$sql);
    if(!$res){
        die(mysqli_error);
    }
    $row=mysqli_fetch_row($res);
    session_start();
    if($_POST['password']!=$row['password']){
        echo "密码错误！";
    }else{
        $seid=md5($_POST['password']);
        $_session['nickname']=$row['nickname'];
        setcookie('seid',$seid);
        echo "登录成功！";
    }
}else{
    echo 'error:password';
}

?>