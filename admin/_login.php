<?php
$username = $_POST['username'];
$raw_password = md5($_POST['password']);



//创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "testdb");

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "连接成功";

//查询用户和密码的sql
$sql = "select * from tbl_admin where username = '$username' and password = '$raw_password'";

//执行查询语句
$result = mysqli_query($conn, $sql);

//统计结果的行数
$count = mysqli_num_rows($result);


if ($count == 1) {
    header('location:'. '/phpcourse/admin/panel.php');
} 
else {
    echo "录入失败！<br>" ;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>