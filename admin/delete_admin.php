<?php
session_start();

//获取管理员id，$_GET接收GET方式提交的数据
$aid = $_GET['aid'];

//访问控制，检查管理员是否登录
if(!isset($_SESSION['username'])) //如果username session未设置
{
    //用户未登录，跳转到登录页面
    header('location:'. '/admin/index.php');
}



//创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "testdb");

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "连接成功";

$raw_password = md5($password);
$sql = "DELETE FROM tbl_admin WHERE aid = '$aid'";

$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:'. '/admin/list_admin.php');
} 
else {
    echo "删除失败！<br>" ;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>