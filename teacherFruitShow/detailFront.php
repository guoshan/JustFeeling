<?php
        include("common/conn.php");
        $nowId = $_GET['id'];
        $sql="SELECT f.id,d.name department,ft.name fruit_type,title,content,`time`,f.`ownner`,y.year `year` FROM fruit f JOIN department d JOIN fruit_type ft JOIN `year` Y ON f.department_id = d.id AND f.fruit_type_id = ft.id AND f.year_id = y.id WHERE f.id =$nowId;";
        $result=mysql_query($sql);
        $fruit=mysql_fetch_object($result); 
        
?>
<!DOCTYPE html>
<html>
   <head lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <?php include("common/header.php") ?>
    <style>
        <?php include("common/style.php") ?>
        body{background-color: #F6F6F6;}
        .currPos{background-color: #f5f5f5;border:none;}
        .currPos a{color:#337AB7;}
        .footer{height: 110px;line-height:50px;width: 100%;position:absolute;text-align: center;background-color: #333333;color:#ffffff;clear: both;}
        .panel-body{height:450px;}
    </style>
</head>
<body>
<?php include("common/nav.php")?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb" style="padding: 0;margin: 0;">
                <li><a href="indexFront.php">教师成果</a></li>
                <li class="active">成果详情</li>
            </ol>
        </div>
        <div class="panel-body">
            <?php echo "<h3 style='border-bottom:2px dashed #dcdcdc'>$fruit->title</h3>";?> 
             <div class="text-center">
                <ul class="list-inline bg-info">
                    <li><small>所属团队：<?php echo "$fruit->department" ?></small></li>
                    <li><small>获得老师：<?php echo "$fruit->ownner" ?></small></li>
                    <li><small>时间：<?php echo "$fruit->year" ?></small></li>
                </ul>
            </div>
            <div>
               <?php  
                    echo "<p style='text-indent: 2em;'>$fruit->content</p>";
                    //echo msubstr("$fruit->content",0,10);
                ?>
            </div>
        </div>
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"说点什么吧~~","bdMini":"2","bdMiniList":false,"bdPic":"http://share.baidu.com/code","bdStyle":"2","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    </div>

</div>
<div class="footer">
    <div>Copyright © 2002-2011 成都东软学院 All Rights Reserved<br/>
        地址：四川省 成都市 都江堰市 青城山镇东软大道1号 邮编：611844   蜀ICP备12011972号
    </div>
</div>
</body>
</html>