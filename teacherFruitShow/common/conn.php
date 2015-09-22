<?php
    $con = mysql_connect("localhost","root","")or die("数据库连接失败");
    $db = mysql_select_db("fruit_db",$con)or die("db连接失败".mysql_error());
    mysql_query('set names utf8')or die("字符集错误".mysql_error());
?>