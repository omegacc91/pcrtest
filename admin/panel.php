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
        <h4>
            <nav class="navbar">
                <a href="panel.php">首页</a> 
                <a href="list_admin.php">管理员</a> 
                <a href="logout.php">退出</a> 
            </nav>
        </h4>
        <div class ="success"> 
            <?php 
                session_start();
                //访问控制，检查管理员是否登录
                if(!isset($_SESSION['username'])) //如果username session未设置
                {
                    //用户未登录，跳转到登录页面
                    header('location:'. '/admin/index.php');
                }

                //如果用户登录成功，提示登录信息
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
        </div>
        <h2>核酸检测登记信息</h2>
        <table class='panel_table'>
            <tr>
                <th>姓名</th>
                <th>宿舍</th>
                <th>学院</th>
                <th>手机号</th>
                <th>班级</th>
                <th>辅导员</th>
                <th>日期</th>
            </tr>

            <?php
                include_once 'page.php';
                //创建数据库连接
                $conn = mysqli_connect("localhost", "root", "", "testdb");

                // 检测连接
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                //echo "连接成功";

                //$sql = "select * from tbl_user order by uid DESC";
                $sql = "select count(uid) as total from tbl_user";
                    
                //执行查询语句
                $res = mysqli_query($conn, $sql);
                
                //从结果集中取得一行作为关联数组
                $oneArray = mysqli_fetch_array($res);

                //得到总记录数
                $totalNumber = $oneArray['total'];

                //设置每一页显示多少条数据
                $perPage = 10;

                //获取当前访问的页数
                $page = isset($_GET['page']) ?  $_GET['page'] : 1;

                //调用分页函数
                paging($totalNumber, $perPage);

                $sql = "select * from tbl_user order by uid DESC limit $firstCount, $perPage";

                $res = mysqli_query($conn, $sql);

                //统计结果行数
                $count = mysqli_num_rows($res);
            
                if ($count > 0) {
                    //每次选取结果集合中一行
                    while($row = mysqli_fetch_assoc($res)) {
                        $fullname = $row['fullname'];
                        $dorm = $row['dorm'];
                        $college = $row['college'];
                        $telephone = $row['telephone'];
                        $class = $row['class'];
                        $counseller = $row['counseller'];
                        $test_date = $row['test_date'];
                        ?>
                        <tr>
                            <td><?php echo $fullname  ?></td>
                            <td><?php echo $dorm  ?></td>
                            <td><?php echo $college  ?></td>
                            <td><?php echo $telephone  ?></td>
                            <td><?php echo $class  ?></td>
                            <td><?php echo $counseller  ?></td>
                            <td><?php echo $test_date  ?></td>
                        </tr>

                        <?php

                    }
                }
                else {

                }

            ?>
        </table>
        <div>
            <?php
            echo "$pageNav";//输出分页栏
            ?>
        </div> 
    </div>

</body>
</html>