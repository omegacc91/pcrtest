<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    <title>bootstrap项目实战</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!--导航-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!--小屏幕导航按钮和logo-->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">麦子学院</a>
        </div>
        <!--小屏幕导航按钮和logo-->
        <!--导航-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">首页</a></li>
                <li><a href="#bbs">论坛</a></li>
                <li><a href="#html5">前端开发</a></li>
                <li><a href="#course">最新课程</a></li>
                <li><a href="#app">移动APP</a></li>
                <li><a href="#contact">联系我们</a></li>
            </ul>
        </div>
        <!--导航-->

    </div>
</nav>
<!--导航-->

<!--home-->
<section id="home">
    <div class="lvjing">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>bootstrap实战课程等你来战！</h1>
                    <p>
                        本套课程适用于：1.WEB开发人员；2.网站维护人员、管理人员<br/>
                        培训技能的目标：使用bootstrap框架快速构建响应式网页，颠覆传统WEB前端！
                    </p>
                    <img src="images/php.jpg" class="img-responsive" alt="php"/>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>
<!--home-->

<!--bbs-->
<section id="bbs">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="0.5s">
            <div class="col-md-4">
                <a href="http://www.maiziedu.com" target="_blank">
                    <img src="images/a.png" class="img-responsive" alt=""/>
                    <h3>Android开发</h3>
                    <p>Android开发技术交流、问题求助、实战案例分享</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://www.maiziedu.com" target="_blank">
                    <img src="images/i.png" class="img-responsive" alt=""/>
                    <h3>IOS开发</h3>
                    <p>iOS开发技术交流，海量iOS实战干货分享</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://www.maiziedu.com" target="_blank">
                    <img src="images/b.png" class="img-responsive" alt=""/>
                    <h3>嵌入式底层开发</h3>
                    <p>底层嵌入式开发、实战案例等技术交流讨论</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!--bbs-->

<!--html5-->
<section id="html5">
    <div class="container">
        <div class="col-md-6 wow fadeInLeft">
            <h2>HTML5前端开发</h2>
            <p>一线资深前端开发工程师倾情打造！助你完成普通程序员到优秀工程师的华丽升级！</p>
            <p><span class="glyphicon glyphicon-grain mai-icon"></span>使用HTML5与CSS3技术轻松实现设备自适应展示。</p>
            <p><span class="glyphicon glyphicon-grain mai-icon"></span>清晰明了的语义代码结构，更高的可读性、更利于页面维护的。</p>
        </div>
        <div class="col-md-6 wow fadeInRight">
            <img src="images/html5.jpg" class="img-responsive" alt=""/>
        </div>
    </div>
</section>
<!--html5-->

<!--bootstrap-->
<section id="bootstrap">
    <div class="container wow fadeInUp">
        <div class="col-md-6">
            <img src="images/Bootstrap.jpg" class="img-responsive" alt=""/>
        </div>
        <div class="col-md-6">
            <h2>bootstrap实战视频教程</h2>
            <p>Bootstrap 是最受欢迎的 HTML、CSS 和 JS 框架，用于开发响应式布局、移动设备优先的 WEB 项目。</p>
            <p><span class="glyphicon glyphicon-grain mai-icon"></span>你的网站和应用能在 Bootstrap 的帮助下通过同一份代码快速、有效适配手机、平板、PC 设备。</p>
            <p><span class="glyphicon glyphicon-grain mai-icon"></span>Bootstrap 提供了全面、美观的文档。你能在这里找到关于 HTML 元素、HTML 和 CSS 组件、jQuery 插件方面的所有详细文档。</p>
        </div>
    </div>
</section>
<!--bootstrap-->

<!--course-->
<section id="course">
    <div class="container">
        <div class="row wow fadeIn" data-wow-delay="0.6s">
            <div class="col-md-12">
                <h2>最新课程</h2>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="course">
                    <img src="images/swift.jpg" class="img-responsive" alt=""/>
                    <a href="http://www.maiziedu.com" class="btn btn-primary" target="_blank" role="button">
                        加入学习
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--course-->

<!--app-->
<section id="app">
    <div class="container">
        <div class="row  wow fadeInUp">
            <div class="col-md-6">
                <h2>麦子学院移动APP下载</h2>
                <p>
                    全新UI交互，与新网站数据同步，更加丰富的课程，开启精彩无限，语音搜索课程，喊出你想要的课程，一件收藏，方便自己重复学习，离线下载课程，在哪儿都能开！
                </p>
                <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-download-alt"></span>
                    iPhone版
                </button>
                <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-download-alt"></span>
                    Android版
                </button>
            </div>
            <div class="col-md-6">
                <img src="images/app-banner.jpg" class="img-responsive" alt=""/>
            </div>
        </div>
    </div>
</section>
<!--app-->

<!--contact-->
<section id="contact">
    <div class="lvjing">
        <div class="container">
            <div class="row">
                <div class="col-md-6  wow fadeInLeft">
                    <h2>
                        <span class="glyphicon glyphicon-send"></span>
                        &nbsp;
                        联系小麦
                    </h2>
                    <p>
                        麦子学院是成都麦子信息技术有限公司旗下一个IT在线教育平台，目前已有30万注册用户，10万以上APP下载量，5000小时视频内容。 我们从不说空话，专注于IT在线教育，脱离传统教育的束缚，让你走哪学哪，想学就学。逗比的老师，贴心的助教，在这儿你能感受到来自五 湖四海伙伴们热情和踏实的学习态度！
                    </p>
                    <address>
                        <p>
                            <span class="glyphicon glyphicon-home"></span>
                            &nbsp;
                            地址:成都市高新区天府软件园D5-11
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-phone-alt"></span>
                            &nbsp;
                            联系电话：028-86567913
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-envelope"></span>
                            &nbsp;
                            邮箱:hr@maiziedu.com
                        </p>
                    </address>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <form action="#" method="post">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="您的姓名"/>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="您的邮箱"/>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="标题"/>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder="留言内容" rows="4"></textarea>
                        </div>
                        <div class="col-md-8">
                            <input type="submit" class="form-control" value="提交"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-->

<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright&nbsp;©&nbsp;2012-2015&nbsp;&nbsp;www.maiziedu.com&nbsp;&nbsp;蜀ICP备13014270号-4
                </p>
            </div>
        </div>
    </div>
</footer>
<!--footer-->


</body>
</html>