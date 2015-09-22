<?php
    include("common/conn.php");
    //include("controller/add.php");
         if(isset($_POST['subm'])){
            $parent_id=$_POST['Fname'];
            $name=$_POST['fName'];
            $sql="INSERT INTO fruit_type VALUES(null,$parent_id,'$name');";
            mysql_query($sql)or die(mysql_error());
        }
?>
<!DOCTYPE html>
<html>
   <head lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <?php include("common/header.php") ?>
    <title></title>
  </head>
    
<body>

<div class="container">
    <?php include("common/title.php")?>
      <div class="row">
        <div class="col-md-3">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-success">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            软工团队
                        </h3>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#" class="panel-success show-hide">
                                         教材
                                     </a>
                                    <div class="list-group small hide1">
                                        <a href="#" class="list-group-item noborder">中文</a>
                                        <a href="#" class="list-group-item noborder">英文</a>
                                        <a href="#" class="list-group-item noborder">计算机基础</a>
                                        <a href="#" class="list-group-item noborder">Java基础</a>
                                    </div>
                                </li>
                                <li><a href="#" class="panel-success show-hide">
                                         获奖
                                    </a>
                                    <div class="list-group small hide1">
                                        <a href="#" class="list-group-item noborder">中文</a>
                                        <a href="#" class="list-group-item noborder">英文</a>
                                        <a href="#" class="list-group-item noborder">计算机基础</a>
                                        <a href="#" class="list-group-item noborder">Java基础</a>
                                    </div>
                                </li>
                                <li><a href="#" class="panel-success show-hide">
                                    科研
                                </a>
                                    <div class="list-group small hide1">
                                        <a href="#" class="list-group-item noborder">科研1</a>
                                        <a href="#" class="list-group-item noborder">科研2</a>
                                        <a href="#" class="list-group-item noborder">科研3</a>
                                        <a href="#" class="list-group-item noborder">科研4</a>
                                    </div>
                                </li>
                                <li><a href="#" class="panel-success show-hide">
                                    教学改革
                                </a>
                                    <div class="list-group small hide1">
                                        <a href="#" class="list-group-item noborder">改革1</a>
                                        <a href="#" class="list-group-item noborder">改革2</a>
                                        <a href="#" class="list-group-item noborder">改革3</a>
                                        <a href="#" class="list-group-item noborder">改革4</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading" role="tab" id="headingTwo">
                     <h3 class="collapsed panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          网工团队
                     </h3>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                       <div class="panel-body">
                           <ul class="nav nav-pills nav-stacked">
                               <li><a href="#" class="panel-success show-hide">
                                   教材
                               </a>
                                   <div class="list-group small hide1">
                                       <a href="#" class="list-group-item noborder">中文</a>
                                       <a href="#" class="list-group-item noborder">英文</a>
                                       <a href="#" class="list-group-item noborder">计算机基础</a>
                                       <a href="#" class="list-group-item noborder">Java基础</a>
                                   </div>
                               </li>
                               <li><a href="#" class="panel-success show-hide">
                                   获奖
                               </a>
                                   <div class="list-group small hide1">
                                       <a href="#" class="list-group-item noborder">中文</a>
                                       <a href="#" class="list-group-item noborder">英文</a>
                                       <a href="#" class="list-group-item noborder">计算机基础</a>
                                       <a href="#" class="list-group-item noborder">Java基础</a>
                                   </div>
                               </li>
                               <li><a href="#" class="panel-success show-hide">
                                   科研
                               </a>
                                   <div class="list-group small hide1">
                                       <a href="#" class="list-group-item noborder">科研1</a>
                                       <a href="#" class="list-group-item noborder">科研2</a>
                                       <a href="#" class="list-group-item noborder">科研3</a>
                                       <a href="#" class="list-group-item noborder">科研4</a>
                                   </div>
                               </li>
                               <li><a href="#" class="panel-success show-hide">
                                   教学改革
                               </a>
                                   <div class="list-group small hide1">
                                       <a href="#" class="list-group-item noborder">改革1</a>
                                       <a href="#" class="list-group-item noborder">改革2</a>
                                       <a href="#" class="list-group-item noborder">改革3</a>
                                       <a href="#" class="list-group-item noborder">改革4</a>
                                   </div>
                               </li>
                           </ul>
                       </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading" role="tab" id="headingThree">
                     <h3 class="collapsed panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         计科团队
                     </h3>
                     </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                             <ul class="nav nav-pills nav-stacked">
                                 <li><a href="#" class="panel-success show-hide">
                                     教材
                                 </a>
                                     <div class="list-group small hide1">
                                         <a href="#" class="list-group-item noborder">中文</a>
                                         <a href="#" class="list-group-item noborder">英文</a>
                                         <a href="#" class="list-group-item noborder">计算机基础</a>
                                         <a href="#" class="list-group-item noborder">Java基础</a>
                                     </div>
                                 </li>
                                 <li><a href="#" class="panel-success show-hide">
                                     获奖
                                 </a>
                                     <div class="list-group small hide1">
                                         <a href="#" class="list-group-item noborder">中文</a>
                                         <a href="#" class="list-group-item noborder">英文</a>
                                         <a href="#" class="list-group-item noborder">计算机基础</a>
                                         <a href="#" class="list-group-item noborder">Java基础</a>
                                     </div>
                                 </li>
                                 <li><a href="#" class="panel-success show-hide">
                                     科研
                                 </a>
                                     <div class="list-group small hide1">
                                         <a href="#" class="list-group-item noborder">科研1</a>
                                         <a href="#" class="list-group-item noborder">科研2</a>
                                         <a href="#" class="list-group-item noborder">科研3</a>
                                         <a href="#" class="list-group-item noborder">科研4</a>
                                     </div>
                                 </li>
                                 <li><a href="#" class="panel-success show-hide">
                                     教学改革
                                 </a>
                                     <div class="list-group small hide1">
                                         <a href="#" class="list-group-item noborder">改革1</a>
                                         <a href="#" class="list-group-item noborder">改革2</a>
                                         <a href="#" class="list-group-item noborder">改革3</a>
                                         <a href="#" class="list-group-item noborder">改革4</a>
                                     </div>
                                 </li>
                             </ul>
                         </div>
                   </div>
                 </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="输入成果关键字">
                      <span class="input-group-btn">
                        <button class="btn btn-success" type="button">搜索</button>
                      </span>
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加新成果 </button>
                    <!--添加新成果弹出框开始-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">添加新的教师成果</h4>
                                </div>
                                <form action="index.php" method="post">
                                  <div class="modal-body">
                                   <div class="row">
                                       <div class="col-md-2"><h3><span class="label label-default">标题：</span></h3></div>
                                       <div class="col-md-10 text-left">
                                         <input type="text" name="title" id="title" class="form-control" style="margin-top:18px;margin-left:-10px;" placeholder="请输入标题" aria-describedby="basic-addon1"/>
                                       </div>
                                   </div>
                                    <div class="row">
                                        <div class="col-md-2"><h3><span class="label label-default">内容：</span></h3></div>
                                        <div class="col-md-10"><textarea name="content" id="content" class="form-control" style="margin-top:18px;margin-left:-10px;" rows="10"></textarea></div>
                                    </div>
                                    <div class="row">
                                        <!--<div  class="col-md-2"></div>-->
                                        <div class="col-md-3">
                                            <h5>所属团队</h5>
                                            <select id="depId" class="form-control">
                                            <?php
                                                $sql="SELECT*FROM department";
                                                $result=mysql_query($sql); 
                                                $arr = array();
                                                while($obj = mysql_fetch_object($result)){
                                                    $arr[] = $obj;
                                                }
                                                foreach($arr as $drow)
                                                {
                                                    echo "<option value='$drow->id'>$drow->name</option>";
                                                }   
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>成果类别</h5>
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span id="val" data-id>选择类别</span>
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
                                        <div class="col-md-3"><h5>荣获老师</h5>
                                            <input size="10" id="owner" type="text"/>
                                        </div>
                                        <div class="col-md-3"><h5>获得日期</h5>
                                            <input size="10" id="year" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="button" class="btn btn-primary" onclick="add()">添加</button>
                                </div>
                            </div>
                          </form>       
                        </div>
                    </div>
                    <!--添加新成果弹出框结束-->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".addFtype"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加成果类别</button>
                    <!--添加成果类别-->
                    <div class="modal fade addFtype" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="mySmallModalLabel">添加新的成果类别</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="index.php" method="post">
                                          <div class="form-group">
                                            <label for="recipient-name" class="control-label">选择类别:</label>
                                             <select name="Fname" class="form-control">
                                                <?php
                                                    $sql="SELECT id, name FROM fruit_db.fruit_type WHERE parent_id IS NULL";
                                                    $result=mysql_query($sql); 
                                                    $arr = array();
                                                    while($obj = mysql_fetch_object($result)){
                                                        $arr[] = $obj;
                                                    }
                                                    foreach($arr as $FTrow)
                                                    {
                                                        echo "<option value='$FTrow->id'>$FTrow->name</option>";
                                                    }    
                                                ?>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="message-text" class="control-label">类别名称：</label>
                                            <input name="fName" class="form-control"/>
                                          </div>
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="subm" class="btn btn-primary">添加</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--添加成果类别结束-->
                </div>
            </div>
            <div style="padding-top: 30px">
                <div class="panel panel-default">
                    <table class="table table-hover">
                        <tr class="bg-success">
                            <td><strong>成果ID</strong></td>
                            <td><strong>成果标题</strong></td>
                            <td><strong>所属团队</strong></td>
                            <td><strong>成果类别</strong></td>
                            <td><strong>获得老师</strong></td>
                            <td><strong>荣获时间</strong></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                            //删除
                            if(is_array($_GET)&&count($_GET)>0)//判断是否有Get参数 
                            { 
                                $nowId = $_GET['id'];
                                $sql2="DELETE FROM fruit WHERE id=$nowId";
                                mysql_query($sql2);
                            }
                            
                            $sql="SELECT f.id,d.name department,ft.name fruit_type,title,content,`time`,f.`ownner`,y.year `year` FROM fruit f JOIN department d JOIN fruit_type ft JOIN `year` Y ON f.department_id = d.id AND f.fruit_type_id = ft.id AND f.year_id = y.id;";
                            $result=mysql_query($sql); 
                            $arr = array();
                            while($obj = mysql_fetch_object($result)){
                                $arr[] = $obj;
                            }
                            foreach($arr as $row)
                            {
                                echo '<tr>';
                                echo   "<td>$row->id</td>";
                                echo   "<td><a href='detail.php?id=$row->id'>$row->title</a></td>";
                                echo    "<td>$row->department</td>";
                                echo     "<td>$row->fruit_type</td>";
                                echo     "<td>$row->ownner</td>";
                                echo     "<td>$row->year</td>";
                                echo     "<td><a type='button' class='btn btn-warning btn-xs' href='modify.php?id=$row->id'>修改</a></td>";
                                echo     "<td><button type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='.delete'>删除</button></td>";            
                                echo '</tr>';
                            }
                            mysql_close($con);
                        ?>
                    </table>
                    <!--删除确认弹出框-->
                     <div class="modal fade delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <h4 class="modal-title" id="mySmallModalLabel" style="color: red;">确认要删除这条成果吗？</h4>
                                    
                                </div>
                                <div class="modal-body text-right">
                                     <!--<div class="alert alert-warning" role="alert">确认要删除这条成果吗？</div>-->
                                    <button type="button" class="btn btn-warning"<?php echo "onclick='turn($row->id)'"?>>确定</button>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">取消</button>
                                </div>
                            </div>
                          </div>
                     </div>
                     <!--删除确认弹出框-->
                </div>
                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li class="disabled"><a href="#">2</a></li>
                        <li class="disabled"><a href="#">3</a></li>
                        <li class="disabled"><a href="#">4</a></li>
                        <li class="disabled"><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
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
        
        $(".tlist li a").each(function(index,value){
            $(this).bind("click",function(){
                $("#val").html($(this).html());
                $("#val").attr('data-id',$(this).attr('data-id'));
            });
        });  
    });
    /*删除跳转*/
    function turn(d){
        location.href="http://localhost:8088/teacherFruitShow/index.php?id="+d;
    }
    function add(){
        var dataJson={
            'title':$("#title").val(),
            'content':$("#content").val(),
            'department-id':$("#depId").val(),
            'f-t-id':$("#val").data('id'),
            'owner':$("#owner").val(),
            'year':$("#year").val(),
            'sub':'add'
        };
        $.ajax({
            url:"http://localhost:8088/teacherFruitShow/controller/add.php",
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