<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>修改管理员信息</title>
</head>
<body>
    <div class='div_parent'>
        <h4>
            <nav class="navbar">
            <a href="panel.php">首页</a> 
            <a href="list_admin.php">管理员</a> 
            <a href="logout.php">退出</a> 
            </nav>
        </h4>

        <h2>修改管理员信息</h2>
        <div class ="error"> 
            <?php 
                session_start();
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }


                //获取管理员id，$_GET接收GET方式提交的数据
                $aid = $_GET['aid'];

                //创建数据库连接
                $conn = mysqli_connect("localhost", "root", "", "testdb");

                //定义SQL查询语句的字符串
                $sql="SELECT * FROM tbl_admin WHERE aid=$aid";

                //执行查询语句
                $res=mysqli_query($conn, $sql);

                //判断查询是否成功
                if($res==true)
                {
                    // 获取结果集中行的数量
                    $count = mysqli_num_rows($res);
                    if($count==1)
                    {
                        //从结果集中取得一行作为关联数组
                        $row=mysqli_fetch_assoc($res);

                        $realname = $row['realname'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $image_filename = $row['image_filename'];
                    }
                    else
                    {
                        header('location:'. '/admin/list_admin.php');
                    }
            }
            ?>
        </div>
        <form action='_updateadmin.php' method='post' enctype="multipart/form-data" class='index_form'>
			<label >姓名:</label>
			<input type='text' name='realname' value="<?php echo $realname ?>"><br>
			<label >用户名:</label>
			<input type='text' name='username' value="<?php echo $username ?>"><br>
			<label >邮箱:</label>
			<input type='text' name='email' value="<?php echo $email ?>"><br>
            <div width=100%><label >当前照片:</label></div>
			<?php echo "<img src='../image/$image_filename' width='70' class='update_image' alt='照片'> "  ?><br>
            <input type="hidden"  name="currentimage" value="<?php echo $image_filename ?>" />
            <input type="hidden"  name="aid" value="<?php echo $aid ?>" />
            <label >新照片:</label>
			<input type='file' name='image_file' ><br>

			<input type='submit' value='提交'>
		</form>
    </div>
</body>
</html>