<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>基础导航栏</title>
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Bootstrap框架</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">iOS</a></li>
                    <li><a href="#">GIT</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            学院
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">计科院</a></li>
                            <li><a href="#">机电院</a></li>
                            <li><a href="#">经管院</a></li>
                            <li class="divider"></li>
                            <li><a href="#">医学院</a></li>
                            <li class="divider"></li>
                            <li><a href="#">另一个分离的链接</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>

</body>
</html>