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

<header>
        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top clearfix">
                <div class="container">
                    <div class="navbar-header">
                        <h1 class="navbar-brand">
                            <a href="../">&nbsp;</a>
                        </h1>
                    </div>

                    <div class="navbar-right">
                        <ul class="navbar-nav sf-menu felink-menu" data-type="navbar">
                            <li>
                                <a href="./">首页</a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;">产品</a>
                                <ul class="dropdown-menu" style="display:none">
                                    <li>
                                        <a href="./zm.html">91桌面</a>
                                    </li>
                                    <li>
                                        <a href="./tq.html">黄历天气</a>
                                    </li>
                                    <li>
                                        <a href="./digitalHuman.html">数字人创作平台</a>
                                    </li>
                                    <li>
                                        <a href="./wnl.html">养生老黄历</a>
                                    </li>
                                    <li>
                                        <a href="./jl.html">精灵天气</a>
                                    </li>
                                    <li>
                                        <a href="http://vsp.felink.com/">微视频</a>
                                    </li>
                                    <li>
                                        <a href="http://qjtm.felink.com/">全局透明壁纸</a>
                                    </li>
                                    <li>
                                        <a href="http://dtbz.felink.com/">羞兔动态壁纸</a>
                                    </li>
                                    <li>
                                        <a href="./s.html">91锁屏</a>
                                    </li>
                                    <!--<li>-->
                                        <!--<a href="./dxzm.html">点心桌面</a>-->
                                    <!--</li>-->
                                    <!-- <li>
                                        <a href="http://zxtsch.com">择校通</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="http://jxds.felink.com.cn/">家校大师</a>
                                    </li> -->
                                    <!--<li>-->
                                        <!--<a href="http://youcai.felink.com.cn/">有才</a>-->
                                    <!--</li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="./support.html">支持</a>
                            </li>
                            <li>
                                <a href="./about.html">关于</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner top-fit" role="listbox">
                <div class="item active">
                    <div class="banner-box">
                        <div class="banner-box-zm"></div>
                        <div class="banner-main-zm"></div>
                    </div>
                    <div class="carousel-caption banner-content">
                        <div class="zm-content">
                            <h2>91桌面</h2>
                            <p>海量主题，个性混搭！手机美化，输出你的个性</p>
                            <div style="position: relative" id="bc1">
                                <div class="download-learn-more">
                                    <a class="btnDownload-android" href="https://ressec.ifjing.com/ops/com.nd.android.pandahome2_zljQwi1sUCNEEerqA16FD5i4ffTEguA7.apk" >Android下载</a>
                                    <a id="btnQr-zm1" class="btnDownload-qr btnDownload-androidqr" href="javascript:;">二维码</a>
                                    <!--<a class="btnDownload-ios" href="javascript:;" target="_blank">iOS下载</a>-->
                                    <!--<a id="btnQr-zm2" class="btnDownload-qr btnDownload-iosqr" href="javascript:;">二维码</a>-->
                                    <!--<ul class="btnDownload-ios-menu">-->
                                        <!--<li><a href="http://url.ifjing.com/yAvEb2">Appstore版</a></li>-->
                                        <!--&lt;!&ndash;<li><a href="https://ressec.ifjing.com/rbreszy/theme/tpbapp/2017/08/08/e35c1f2ceee64ccba9e0df95d77e469e.pxl">越狱版</a></li>&ndash;&gt;-->
                                    <!--</ul>-->
                                    <div class="km-layer clear">
                                    </div>
                                </div>
                                <div class="download-read-more-container">
                                    <div class="download-read-more"><a href="http://zm.felink.com">了解更多91桌面功能<span class="glyphicon glyphicon-upload" aria-hidden="true"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner-box">
                        <div class="banner-box-tq"></div>
                    </div>
                    <div class="carousel-caption banner-content">
                        <div class="tq-content">
                            <h2>黄历天气</h2>
                            <p style="margin-top: 10px;">好天气 好运气</p>
                            <div style="position: relative" id="bc2">
                                <div class="download-learn-more">
                                    <a class="btnDownload-android" href="https://ressec.ifjing.com/ops/com.calendar.UI_zHbax+xbH1q0ALu5Wd6D62mCRrycu37l.apk" >Android下载</a>
                                    <a id="btnQr-tq1" class="btnDownload-qr btnDownload-androidqr btnDownload-androidtq" href="javascript:;">二维码</a>
                                    <a class="btnDownload-ios" href="http://url.ifjing.com/Fbmiiu">iOS下载</a>
                                    <a id="btnQr-tq2" class="btnDownload-qr btnDownload-iosqr" href="javascript:;">二维码</a>
                                    <div class="km-layer clear">
                                    </div>
                                </div>
                                <div class="download-read-more-container">
                                    <div class="download-read-more"><a href="http://tq.felink.com">了解更多功能<span class="glyphicon glyphicon-upload" aria-hidden="true"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner-box">
                        <div class="banner-box-sp"></div>
                    </div>
                    <div class="carousel-caption banner-content">
                        <div class="sp-content">
                            <h2>91锁屏</h2>
                            <p>最简单实用的锁屏软件</p>
                            <div style="position: relative">
                                <div class="download-learn-more">
                                    <a class="btnDownload-android" href="https://ressec.ifjing.com/ops/cn.com.nd.s_r7ESIX0qFOAFU++QOxNAgDIvPO+bKdN6.apk" >Android下载</a>
                                    <a id="btnQr-sp1" class="btnDownload-qr btnDownload-androidqr" href="javascript:;">二维码</a>
                                    <div class="km-layer clear">
                                    </div>
                                </div>
                                <div class="download-read-more-container">
                                    <div class="download-read-more"><a href="http://s.felink.com">了解更多功能<span class="glyphicon glyphicon-upload" aria-hidden="true"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->

    <main>

        <section class="well2">
            <div class="container  text-center index-content">
                <div class="row">
                    
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="zm.html"><img src="https://img.t.felink.com/felinkcn/201604/images/Home/index_ico1.png" alt=""/></a>
                                    <br> <br>
                                    <a href="zm.html">91桌面<br/>玩，以我喜欢</a>
                                </div>
                            </li>

                        </ul>
                    </div>


                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="tq.html"><img src="https://img.t.felink.com/felinkcn/201604/images/Home/index_ico2_20170315.png" alt=""/></a>
                                    <br> <br>
                                    <a href="tq.html">黄历天气<br/> 好天气好运气</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="s.html"><img src="https://img.t.felink.com/felinkcn/201604/images/Home/index_ico3_20160722.png" alt=""/></a>
                                    <br> <br>
                                    <a href="s.html">91锁屏 <br/>最简单实用的锁屏软件</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section class="well2 bg-alt">
            <div class="container  text-center index-content">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <!--<a href="http://youcai.felink.com.cn/"><img src="./images/index_ico7.png" alt=""/></a>-->
                                    <!--<br> <br>-->
                                    <!--<a href="http://youcai.felink.com.cn/">有才<br/> “有才”又“有财”</a>-->
                                    <a href="http://vsp.felink.com/"><img src="./images/index_ico11.png" alt=""/></a>
                                    <br> <br>
                                    <a href="http://vsp.felink.com/">微视频<br/>有趣好玩的视频壁纸社区</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">

                            <li class="box">
                                <div class="box_aside">
                                    <a href="https://felink.com.cn/digitalHuman.html"><img src="./images/index_ico12.png" alt=""/></a>
                                    <br> <br>
                                    <a href="https://felink.com.cn/digitalHuman.html">全局透明壁纸<br/>动起来的透明，全局覆盖！</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="http://dtbz.felink.com/"><img src="./images/index_ico13.png" alt=""/></a>
                                    <br> <br>
                                    <a href="http://dtbz.felink.com/">羞兔动态壁纸<br/>一键制作专属表白视频</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--<div class="col-md-4 col-sm-4 col-xs-4">-->
                        <!--<ul class="icon-list">-->
                            <!--<li class="box">-->
                                <!--<div class="box_aside">-->
                                    <!--<a href="dxzm.html"><img src="https://img.t.felink.com/felinkcn/201604/images/dxzm/dxzm_icon2_163x163.png" alt=""/></a>-->
                                    <!--<br> <br>-->
                                    <!--<a href="dxzm.html">点心桌面<br/>简单好用，独一无二</a>-->
                                <!--</div>-->
                            <!--</li>-->
                        <!--</ul>-->
                    <!--</div>-->
                </div>
            </div>

        </section>
        <section class="well2">
            <div class="container  text-center index-content">
                <div class="row">
                    
                    <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="http://zxtsch.com/"><img src="./images/index_ico10.png" alt=""/></a>
                                    <br> <br>
                                    <a href="http://zxtsch.com/">择校通<br/>选学校来择校</a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="https://felink.com.cn/digitalHuman.html"><img src="./images/index_ico14.png" alt=""/></a>
                                    <br> <br>
                                    <a href="https://felink.com.cn/digitalHuman.html">数字人创作平台<br/>创造属于您或企业的AI数字人</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="http://jxds.felink.com.cn/"><img src="./images/index_ico9.png" alt=""/></a>
                                    <br> <br>
                                    <a href="http://jxds.felink.com.cn/">家校大师<br/>老师和家长的好帮手</a>
                                </div>
                            </li>
                        </ul>
                    </div> -->


                </div>
            </div>
        </section>
    </main>
    <!-- QR -->
    <div id="download_qr" class="qr_modal qr_effect">
        <div class="qr_content">
            <div class="qr_layer">
                <div class="close_qr"><a class="closed">关闭</a></div>
                <div class="qr_pic"><img id="QRimg" src="https://img.t.felink.com/felinkcn/201604/images/Home/coming-soon.jpg" alt="QR" /></div>
                <div class="qr_text">扫描二维码下载应用</div>
            </div>
        </div>
    </div>
    <div id="download_qr_overlay" class="qr_overlay"></div>

    <!-- 未成年举报通道对话框 -->
    <div id="report_qr" class="qr_modal qr_effect">
        <div class="qr_content">
            <div class="qr_layer">
                <div class="close_qr"><a class="close_report">关闭</a></div>
                <div id="report_title" class="report_title"></div>
                <div id="report_desc"  class="report_desc"></div>
                <div id="report_phone" class="report_item"></div>
                <div id="report_email" class="report_item"></div>
            </div>
        </div>
    </div>
    <div id="report_qr_overlay" class="qr_overlay"></div>

</body>
</html>