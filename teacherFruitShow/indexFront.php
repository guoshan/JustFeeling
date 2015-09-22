<!DOCTYPE html>
<html>
   <head lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <?php include("common/header.php") ?>
    <style>
        <?php include("common/style.php") ?>
        .group-panel{background-color:#fff;padding:55px 0 55px 0;}
        .group-lg{
            width: 980px;
            margin: 0 auto;
            overflow: visible;
            height: 390px;
        }
        .group-lg-left{float:left;width: 700px;}
        .group-lg-right{
            float: right;
            margin-right: 10px;
            width: 225px;
            height: 350px;
            border: 1px solid #cccccc;
            border-top:none;
        }
        .pan-title{
            line-height: 28px;
            padding: 0 10px;
        }
        .mor-link{
            text-decoration: none;
            color:#0092D5;
        }
        .title{display: inline;padding-right: 10px;}
        .tm-in{margin-top: 20px;}
        .info-title{background-color: #FFD199;width: 100%;height: 40px;font-size:20px;color: #ffffff;line-height:40px;}
        .media-heading{color:#0092D5;}
        .media{width:960px;}
        p{text-indent: 2em;}
        .info-con{margin-top: 10px;}
        .look-mor{padding-left: 140px;padding-top: 40px;color: red;font-weight:bold;}
        .good{padding-top:50px;padding-bottom: 20px;}
    </style>
</head>
<body>
<?php include("common/nav.php")?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators pos">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/b4.jpg" style="height: 450px;width: 100%;">
        </div>
        <div class="item">
            <img src="img/b5.jpg" style="height: 450px;width: 100%;">
        </div>
        <div class="item">
            <img src="img/b6.jpg" style="height: 450px;width: 100%;">
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
<div class="group-panel">
    <div class="group-lg">
        <div class="group-lg-left">
            <div class="pan-title">
                <h2 class="title">团队介绍</h2>
                <a class="mor-link" href="#">更多</a>
            </div>
            <div class="row tm-in">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/team1.jpg">
                        <div class="caption">
                            <h3>软工团队</h3>
                            <p>行业背景：软件工程是指用工程化的方法设计和开发有效、实用、高质量的软件。典型的软件如操作系统、银行数据库系统...</p>
                            <p><a href="#" role="button">查看详情</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/team2.jpg">
                        <div class="caption">
                            <h3>网工团队</h3>
                            <p>计算机网络将不同的计算机、终端设备及其附属设备用通信设备和线路连接起来，在网络软件的管理下实现计算机资源共享...</p>
                            <p><a href="#" role="button">查看详情</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/team3.jpg">
                        <div class="caption">
                            <h3>计科团队</h3>
                            <p>行业背景：嵌入式系统是软件和硬件的综合体，根据电气和电子工程师协会（IEEE）的定义，嵌入式系统是“控制、监视或...</p>
                            <p><a href="#" role="button">查看详情</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-lg-right">
            <div class="info-title">最新动态</div>
            <div class="info-con">
                <ul>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                    <li><a href="#">啦啦啦啦啦啦啦啦啦</a></li>
                </ul>
                <a class="look-mor" href="#">查看更多>></a>
            </div>
        </div>
    </div>
</div>
<div class="group-panel">
    <div class="group-lg">
        <div class="group-lg-left">
            <div class="pan-title">
                <h2 class="title">成果展示</h2>
                <a class="mor-link" href="#">更多</a>
            </div>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="img/fruit1.jpg"/>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">学院学子在2015年（第七届）四川省ACM大学生程序设计竞赛中喜获金牌</h4>
                    <p>6月14日，第七届四川省ACM大学生程序设计竞赛在四川大学如期举行，本次比赛聚集了四川大学、电子科技大学、西南交通大学、西北工业大学、重庆大学等共计110支队伍，学院共组织5支队伍参赛。经过五个小时的激烈鏖战，学院2011级软件工程专业学生罗新，2012级软件工程学生吴泰龙、孙春山组成的OrzOrzOrz队共解出7道题目（共10道题），最终喜获金牌。另外，2013级物联网专业学生杨富灏、计算机科学与技术专业学生魏颖婷...</p>
                    <a href="http://www.nsu.edu.cn/HTML/news/2015/06/article_1850.html" style="padding-left: 370px;">查看详情>></a>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="img/fruit2.jpg"/>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">学院学子斩获2015泛珠三角大学生计算机作品赛总决赛银奖</h4>
                    <p>本月初，2015泛珠三角大学生计算机作品赛总决赛在澳门理工学院如期举行，包括香港中文大学、国防科技大学、澳门大学等著名院校在内的52支来自泛珠江以及港澳台地区队伍参加比赛。四川省地区由成都东软学院、西南交通大学等四支队伍参赛。学院12级软件工程韩伟伟同学、12级嵌入式干阳同学以及12级软件工程米河桥同学三人组成的“寒舍”团队，凭借作品“七彩智幻灯控家居”斩获本次大赛银奖“泛珠三角大学生计算机作品赛”...</p>
                    <a href="http://www.nsu.edu.cn/HTML/news/2015/07/article_1865.html" style="padding-left: 370px;">查看详情>></a>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="img/fruit3.jpg"/>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">学院在2015年“启明星辰”杯全国暨四川省大学生信息安全技术大赛 中喜获特等奖</h4>
                    <p>月2日，由中国互联网协会、四川省教育厅共同组织主办，成都信息工程大学、四川省信息安全测评中心承办的“2015年‘启明星辰’杯全国暨四川省大学生信息安全技术大赛”在成都信息工程大学航空港校区成功落下帷幕，来自成都信息工程大学、四川大学、中国矿业大学、福州大学、西南石油大学、西安工业大学等31所省内外高校共68支队伍参加比赛。同时，主办方还邀请了国内知名信息安全论坛及企业的代表全程观摩了比赛...</p>
                    <a href="http://www.nsu.edu.cn/HTML/news/2015/08/article_1867.html" style="padding-left: 370px;">查看详情>></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="group-panel">
    <div class="group-lg">
        <div class="group-lg-left">
            <div class="pan-title good">
                <h2 class="title">优秀校友</h2>
                <a class="mor-link" href="#">更多</a>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="img/good1.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div>Copyright © 2002-2011 成都东软学院 All Rights Reserved<br/>
       地址：四川省 成都市 都江堰市 青城山镇东软大道1号 邮编：611844   蜀ICP备12011972号
    </div>
</div>
</body>
</html>