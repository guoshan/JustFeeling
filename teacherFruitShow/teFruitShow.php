<?php
    include("common/conn.php");
    include("common/function.php");
    
?>
<!DOCTYPE html>
<html>
   <head lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <?php include("common/header.php") ?>
    <style>
        <?php include("common/style.php") ?>
        body{background-color: #F6F6F6;}
         p{text-indent: 2em;}
        .currPos{background-color: #ffffff;border:none;}
        .currPos a{color:#337AB7;}
        .t-fruit{width:1024px;height: 400px;margin: 20px auto;}
        .t-f-left{background-color: #ffffff;width:300px;padding-bottom:100px;overflow: hidden;float:left;}
        .noborder{
            border:none;
            padding-left: 20px;
        }
        .hide1{
            display: none;
        }
        .t-f-right{float:left;margin-left: 20px;width:700px;height:600px;background-color: #ffffff;}
        .sgle-fruit{width: 500px;height:150px;margin:10px auto;border-bottom: 1px dashed #999999;}
        .look-mor{padding-left: 70px;color: #0092D5;font-weight:bold;}
        .base-info{color:#cccccc;}
        
    </style>
</head>
<body>
<?php include("common/nav.php")?>
<div class="t-fruit">
    <div class="t-f-left">
    <ul class="nav nav-pills nav-stacked">
        <?php
            //成果类别下拉框读取
                class FruitType{
                    var $id;
                    var $name;
                    function __construct($name,$id=0)
                    {
                        $this->name = $name;
                        $this->id = $id;
                    }
                }
                $sql="SELECT*FROM fruit_type";
                $result=mysql_query($sql); 
                $arr = array();
                while($obj = mysql_fetch_object($result)){
                    $arr[] = $obj;
                }
                $arr2 = array();
                for($i = 0; $i < count($arr);$i++)
                {
                    $row = $arr[$i];
                    if(empty($row->parent_id))
                    {
                        $arr2[$row->id] = array($row);
                    }else{
                         $arr2[$row->parent_id][] = $row;
                    }
                }
               // print_r($arr2);
                foreach($arr2 as $row)
                {
                  $id =  $row[0]->id;
                   $name =  $row[0]->name;
                   echo "<li><a href='#' class='panel-success show-hide' data-id='$id'>$name</a>";
                   echo "<div class='list-group small hide1'>";
                   for($i = 1; $i < count($row);$i++)
                   {
                        $id2 = $row[$i]->id;
                        $name2 = $row[$i]->name;
                        echo "<a href='#' class='list-group-item noborder' data-id='$id2'>$name2</a>";
                   }
                   echo "</div>";
                   echo "</li>";
                }   
               
            ?> 
        </ul>
    </div>
    <div class="t-f-right"> 
            <?php
                
                $perNum = 3;
                $page = $_GET['page'];
                $count = mysql_query("SELECT COUNT(*) FROM fruit;");
                $rs = mysql_fetch_array($count);
                $totalNum = $rs[0];
                $totalPage = ceil($totalNum/$perNum);
                if(!isset($page)){
                    $page=1;
                }
                $startCount = ($page-1)*$perNum;
                $res=mysql_query("SELECT f.id,d.name department,ft.name fruit_type,title,content,`time`,f.`ownner`,y.year `year` FROM fruit f JOIN department d JOIN fruit_type ft JOIN `year` Y ON f.department_id = d.id AND f.fruit_type_id = ft.id AND f.year_id = y.id limit $startCount,$perNum;"); 
                $arr = array();
                while($obj = mysql_fetch_object($res)){
                    $arr[] = $obj;
                }
                foreach($arr as $row){
                    echo "<div class='sgle-fruit'>";
                        echo "<h3>$row->title</h3>";
                        echo "<p class=t-f-con'>";
                            echo msubstr("$row->content",0,100);
                        echo "</p>";
                        echo "<div class='text-left'>";
                            echo "<ul class='list-inline'>";
                                echo "<li class='base-info'><small>所属团队：$row->department</small></li>";
                                echo "<li class='base-info'><small>获得老师：$row->ownner</small></li>";
                                echo "<li class='base-info'><small>时间：$row->year</small></li>";
                                echo "<li><a class='look-mor' href='detailFront.php?id=$row->id'>了解详情>></a></li>";
                            echo "</ul>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
            <nav class="text-center">
                <ul class="pagination">
                    <?php
                        if($page != 1){ 
                    ?>
                    <li>
                        <a href="teFruitShow.php?page=<?php echo $page - 1;?>" aria-label='Previous'>
                            <span aria-hidden='true'>&laquo;</span>
                        </a> 
                    </li> 
                    <?php
                        } 
                        for($i=1;$i<=$totalPage;$i++){
                            if($page==$i){
                    ?>
                        <li class="active"><a href="teFruitShow.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                          }else{
                    ?>
                    <li><a href="teFruitShow.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                          }
                        }
                        if($page<$totalPage){
                    ?>
                            <li><a href="teFruitShow.php?page=<?php echo $page + 1;?>" aria-label='Next'><span aria-hidden='true'>&raquo;</span></a> </li> 
                    <?php
                        }
                    ?>
                </ul>
    </div>
</div>
<div class="footer">
    <div>Copyright © 2002-2011 成都东软学院 All Rights Reserved<br/>
        地址：四川省 成都市 都江堰市 青城山镇东软大道1号 邮编：611844   蜀ICP备12011972号
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".show-hide").each(function(index,value){
            $(this).bind("click",function(){
                $(this).siblings().toggleClass("hide1");
                $(this).parent().siblings().children().addClass("hide1");
            });
        });
        
        $(".t-f-con").each(function(){
            var wordNum = ($(this).html().replace(/\w/g,"")).length;
            var aNum = $(this).html().length-str;
            var totalNum = wordNum+aNum;
            if(totalNum>272){
                $(this).html();
            }
        });

        
    });
</script>
</body>
</html>