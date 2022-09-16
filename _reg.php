<?php
//header("Content-Type:text/html;charset=utf-8");
$fullname = $_POST['fullname'];
$dorm = $_POST['dorm'];
$telephone = $_POST['telephone'];
$college = $_POST['college'];
$class = $_POST['class'];
$counseller = $_POST['counseller'];


//创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "testdb");

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "连接成功";

$test_date = date('Y-m-d h:i:s');
$sql = "INSERT INTO tbl_user (fullname, dorm, telephone, college, class, counseller, test_date) 
       VALUES ('$fullname', '$dorm', '$telephone', '$college', '$class', '$counseller', '$test_date')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:'. '/phpcourse/reg_info.php');
} 
else {
    echo "录入失败！<br>" ;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>