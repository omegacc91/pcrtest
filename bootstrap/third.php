<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Bootstrap栅格列嵌套</title>
</head>
<body>
    <div class="jumbotron text-center">
    <h1>Bootstrap 栅格列嵌套</h1>
    <p>调整这个响应页面的大小，看看效果！</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="background-color: #dedef8;box-shadow: 
                inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                <h4>第一列</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-9" style="background-color: #dedef8;box-shadow: 
                inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                <h4>第二列 - 分为四个盒子</h4>
                <div class="row">
                    <div class="col-md-6" style="background-color: #B18904;
                    box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p>Consectetur art party Tonx culpa semiotics. Pinterest 
                        assumenda minim organic quis.
                    </p>
                    </div>
                    <div class="col-md-6" style="background-color: #B18904;
                    box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p> sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6" style="background-color: #B18904;
                    box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p>quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.
                    </p>
                    </div>   
                    <div class="col-md-6" style="background-color: #B18904;
                    box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>