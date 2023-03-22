<?php
session_start();

$realname = $_POST['realname'];
$username = $_POST['username'];
$email = $_POST['email'];
$currentimage = $_POST['currentimage'];
$aid = $_POST['aid'];

if(isset($_FILES['image_file']['name']))
{
    //获取上传图片文件名
    $image_name = $_FILES['image_file']['name'];

    //判断文件名是否为空
    if($image_name != "")
    {
        //获取图片文件的后缀(jpg, png, gif, etc.) "vijay-thapa.jpg" 则获取 jpg
        $array = explode('.', $image_name);
        $ext = end($array);

        //为图片创建新名称
        $image_name = "image-admin-".rand(0000,9999).".".$ext; 

        //现在上传的图片文件路径
        $src = $_FILES['image_file']['tmp_name'];

        //准备移动图片文件到的路径
        $dst = "../image/".$image_name;

        //将上传的文件移动的保存位置
        $upload = move_uploaded_file($src, $dst);

        //检查上传是否成功
        if($upload==false)
        {
            //上传失败，跳转到新增管理员页面，提示错误
            $_SESSION['upload'] = "<div class='error'>上传图片失败.</div>";
            header('location:'. '/admin/update_admin.php');
            //STop the process
            die();
        }
    }
    else
    {
        //如果没有上传新照片，则使用原来的照片
        $image_name = $currentimage; 
    }
                              
}



//创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "testdb");

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "连接成功";

$sql = "INSERT INTO tbl_admin (realname, username, password, email, image_filename) 
       VALUES ('$realname', '$username', '$raw_password', '$email', '$image_name')";
$sql = "UPDATE tbl_admin SET
        realname = '$realname',
        username = '$username',
        email = '$email',
        image_filename = '$image_name'
        WHERE aid='$aid'
        ";

$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:'. '/admin/list_admin.php');
} 
else {
    echo "新增失败！<br>" ;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>