<?php
        include("common/conn.php");
        $nowId = $_GET['id'];
        $sql="SELECT f.id,d.name department,d.id,ft.name fruit_type,f.fruit_type_id,title,content,`time`,f.`ownner`,y.year `year` FROM fruit f JOIN department d JOIN fruit_type ft JOIN `year` Y ON f.department_id = d.id AND f.fruit_type_id = ft.id AND f.year_id = y.id WHERE f.id =$nowId;";
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
    <?php include("common/title.php")?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb" style="padding: 0;margin: 0;">
                <li><a href="index.php">教师成果管理</a></li>
                <li class="active">修改页面</li>
            </ol>
        </div>
        <div class="panel-body">
            <div class="row">
                <!--<div class="col-md-1"></div>-->
                <div class="col-md-1"><h3><span class="label label-default">标题：</span></h3></div>
                <div class="col-md-10 text-left">
                <?php
                   echo "<input type='text' id='title' value='$fruit->title' class='form-control' style='margin-top:18px;margin-left:-10px;' aria-describedby='basic-addon1'/>";
                ?>
                </div>
            </div>
            <div class="row">
                <!--<div class="col-md-1"></div>-->
                <div class="col-md-1"><h3><span class="label label-default">内容：</span></h3></div>
                <div class="col-md-10">
                <?php
                    echo "<textarea id='content' class='form-control' style='margin-top:18px;margin-left:-10px;' rows='12'>$fruit->content</textarea>";
                ?>
                </div>
            </div>
            <div class="row">
                <div  class="col-md-1"></div>
                <div class="col-md-3">
                    <h5>所属团队</h5>
                    <select id="dpId" class="form-control">
                        <?php
                            $sql="SELECT * FROM department";
                            $result=mysql_query($sql); 
                            $arr = array();
                            while($obj = mysql_fetch_object($result)){
                                $arr[] = $obj;
                            }
                            foreach($arr as $drow)
                            {
                                if($drow->id==$fruit->department_id){
                                    echo "<option value='$drow->id' selected='selected'>$drow->name</option>";
                                }
                               else{
                                    echo "<option value='$drow->id'>$drow->name</option>";
                               }
                            }   
                      ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <h5>成果类别</h5>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span id="val" data-id='<?php echo "$fruit->fruit_type_id";?>'><?php echo "$fruit->fruit_type";?></span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
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
                               echo "<li class='dropdown-submenu'>";
                               echo "<a tabindex='-1' href='#' data-id='$id'>$name</a>";
                               echo "<ul class='dropdown-menu tlist'>";
                               for($i = 1; $i < count($row);$i++)
                               {
                                    $id2 = $row[$i]->id;
                                    $name2 = $row[$i]->name;
                                   echo "<li><a tabindex='-1'' href='#'  data-id='$id2'>$name2</a></li>";
                               }
                               echo "</ul>";
                               echo "</li>";
                            }   
                           
                        ?>
                        </ul>
                   </div>
                   </div>
                <div class="col-md-2"><h5>荣获老师</h5>
                <?php
                    echo "<input id='owner' size='10' type='text' value='$fruit->ownner'/>";
                ?> 
                </div>
                <div class="col-md-3"><h5>获得日期</h5>
                 <?php
                    echo "<input id='year' size='10' type='text' value='$fruit->year'/>";
                ?> 
                </div>
            </div>
            <div class="row">
                <div class="modal-footer" style="margin-top: 10px;">
                    <button type="button" name="sub" class="btn btn-primary" onclick="update(<?php echo "$nowId"?>)">保存</button>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
$(function(){
    $(".tlist li a").each(function(index,value){
        $(this).bind("click",function(){
            $("#val").html($(this).html());
            $("#val").attr('data-id',$(this).attr('data-id'));
        });
    });  
});
 function update(d){
        var dataJson={
            'title':$("#title").val(),
            'content':$("#content").val(),
            'department-id':$("#dpId").val(),
            'f-t-id':$("#val").data('id'),
            'owner':$("#owner").val(),
            'year':$("#year").val(),
            'sub':'update'
        };
        $.ajax({
            url:"http://localhost:8088/teacherFruitShow/controller/update.php?id="+d,
            type:"post",
            data:dataJson,
            success:function(){
                location.href="http://localhost:8088/teacherFruitShow/index.php";
            }
            
        });
    }

</script>
</body>
</html>