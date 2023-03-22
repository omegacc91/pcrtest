<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>核酸检测登记系统-后台</title>
</head>
<body>

    <div class='div_parent'>
		<div class ="error"> 
            <?php 
                session_start();
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
        </div>
		<h2>管理员登录</h2>
		<form action='_login.php' method='post' class='index_form'>
			<label >用户名:</label>
			<input type='text' name='username' ><br>
			<label >密码:</label>
			<input type='password' name='password' ><br>

			<input type='submit' value='登录'>
		</form>
	<div>
    
</body>
</html>