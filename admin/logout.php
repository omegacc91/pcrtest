<?php 
    //1. 结束 Session会话
    session_destroy(); //释放 $_SESSION['username']

    //2. 跳转到登录页面
    header('location:'. '/admin/index.php');

?>