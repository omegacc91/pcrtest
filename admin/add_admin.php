<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>新增管理员</title>
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

        <h2>新增管理员</h2>
        <div class ="error"> 
            <?php 
                session_start();
                //如果后端表单校验错误，提示错误信息
                if(isset($_SESSION['check']))
                {
                    echo $_SESSION['check'];
                    unset($_SESSION['check']);
                }

                //如果文件上传失败，提示上传失败信息
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
            ?>
        </div>
        <form action='_addadmin.php' method='post' enctype="multipart/form-data" class='index_form'>
			<label >姓名:</label>
			<input type='text' name='realname' required ><br>
			<label >用户名:</label>
			<input type='text' name='username' required minlength="3" maxlength="10"><br>
            <label >密码:</label>
			<input  type='password' name='password' required minlength="6" maxlength="10"><br>
			<label >邮箱:</label>
			<input  type='email' name='email'  required><br>
			<label >照片:</label>
			<input type='file' name='image_file' required><br>

			<input type='submit' value='提交'>
		</form>
    </div>
</body>
</html>