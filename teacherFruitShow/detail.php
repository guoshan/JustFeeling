 <?php
        include("common/conn.php");
        $nowId = $_GET['id'];
        $sql="SELECT f.id,d.name department,ft.name fruit_type,title,content,`time`,f.`ownner`,y.year `year` FROM fruit f JOIN department d JOIN fruit_type ft JOIN `year` Y ON f.department_id = d.id AND f.fruit_type_id = ft.id AND f.year_id = y.id WHERE f.id =$nowId;";
        $result=mysql_query($sql);
        $fruit=mysql_fetch_object($result); 
        
?>
<html>
<head lang="en">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
         <?php include("common/header.php") ?>
        <title></title>
    </head>
<body>
<div class="container">
     <?php include("common/title.php") ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb" style="padding: 0;margin: 0;">
                <li><a href="index.php">教师成果管理</a></li>
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
    </div>
</div>

</body>
</html>