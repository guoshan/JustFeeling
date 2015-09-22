<?php
    include('../common/conn.php');
     function yearId($year_id){
            $result=mysql_query("SELECT id from year WHERE year='$year_id'") or die(mysql_error());
            $year = mysql_fetch_object($result);
             if($year){
                  return $year->id;
             }else{
                 $sql="INSERT INTO year VALUES(NULL,'$year_id');";
                 mysql_query($sql) or die(mysql_error());
                 $result=mysql_query("SELECT id from year WHERE year='$year_id'");
                 $year = mysql_fetch_object($result);
                 return $year->id;
             }
         }
    if(!empty($_POST['sub'])){
         $title=$_POST['title'];
         $content=$_POST['content'];
         $department_id=$_POST['department-id'];
         $fruit_type_id=$_POST['f-t-id'];
         $ownner=$_POST['owner'];
         $year=$_POST['year'];
        
        $year_id = yearId($year);
         $sql="INSERT INTO fruit VALUES (NULL, $department_id, $fruit_type_id, '$title', '$content', NOW(), '$ownner',$year_id);"; 
         //echo $sql;
         $row = mysql_query($sql) or die(mysql_error());
         mysql_close();
    }
   
?>