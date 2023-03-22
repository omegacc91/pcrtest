<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>管理员</title>
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
        <div class = "btn_div">
            <a href="add_admin.php" ><button class="btn_primary">新增管理员</button></a>
        </div>

        <h2>管理员列表</h2>
        <table class='panel_table'>
            <tr>
                <th>序号</th>
                <th>姓名</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>照片</th>
                <th>操作</th>
            </tr>

            <?php
                //创建数据库连接
                $conn = mysqli_connect("localhost", "root", "", "testdb");

                // 检测连接
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                //echo "连接成功";

                $sql = "select * from tbl_admin order by aid ASC";
                    
                //执行查询语句
                $res = mysqli_query($conn, $sql);
                
                //统计结果行数
                $count = mysqli_num_rows($res);
            
                if ($count > 0) {
                    //设置序号变量
                    $i = 1;
                    //每次选取结果集合中一行
                    while($row = mysqli_fetch_assoc($res)) {
                        $username = $row['username'];
                        $realname = $row['realname'];
                        $email = $row['email'];
                        $image_filename = $row['image_filename'];
                        $aid = $row['aid'];
                        ?>

                        <tr>
                            <td><?php echo $i  ?></td>
                            <td><?php echo $realname  ?></td>
                            <td><?php echo $username  ?></td>
                            <td><?php echo $email  ?></td>
                            <td><?php echo "<img src='../image/$image_filename' width='70' alt='照片'> "  ?>
                            </td>
                            <td>
                                <a href="update_admin.php?aid=<?php echo $aid; ?>"><button class='btn_secondary'>修改</button></a>
                                <a href="delete_admin.php?aid=<?php echo $aid; ?>"> <button class='btn_danger'>删除</button></a>
                            </td>
                        </tr>

                        <?php
                        $i++;

                    }
                }
            ?>

        </table>
    </div>
</body>
</html>