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
                //创建数据库连接
                $conn = mysqli_connect("localhost", "root", "", "testdb");

                // 检测连接
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                //echo "连接成功";

                $sql = "select * from tbl_user order by uid DESC";
                    
                //执行查询语句
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
    </div>

</body>
</html>