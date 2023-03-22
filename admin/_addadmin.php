<?php
session_start();

$realname = $_POST['realname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//进行后端表单验证，验证用户名和密码是否填写
if (!strlen($realname) || !strlen($username)) {
    $_SESSION['check'] = "<div class='error text-center'>用户名和密码都必须填写</div>";
    header('location:'. '/admin/add_admin.php');
    exit;
}

//验证密码长度
if (strlen($password) < 6 || strlen($password) > 10) {
    $_SESSION['check'] = "<div class='error text-center'>密码长度不符</div>";
    header('location:'. '/admin/add_admin.php');
    exit;
}

//验证邮箱格式
if (!strlen($email)) {
    $_SESSION['check'] = "<div class='error text-center'>邮箱必须填写</div>";
    header('location:'. '/admin/add_admin.php');
    exit;
} 
else {
    //进行邮箱格式校验，preg_match()返回正则表达式匹配次数，这部分内容比较复杂
    if (!preg_match('/^\w+@[a-z0-9]+\.[a-z]{2,4}$/', $email)){
        $_SESSION['check'] = "<div class='error text-center'>邮箱格式不正确</div>";
        header('location:'. '/admin/add_admin.php');
        exit;
    }
}


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

        //现在上传的图片文件路径,获取临时文件名
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
            header('location:'. '/admin/add_admin.php');
            //STop the process
            die();
        }
    }
                           
    
}
else
{
    $image_name = ""; 
}


//创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "testdb");

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "连接成功";

$raw_password = md5($password);
$sql = "INSERT INTO tbl_admin (realname, username, password, email, image_filename) 
       VALUES ('$realname', '$username', '$raw_password', '$email', '$image_name')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:'. '/admin/list_admin.php');
} 
else {
    echo "新增失败！<br>" ;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>