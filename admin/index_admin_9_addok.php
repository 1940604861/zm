<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
  include"../conn/conn.php";
	 $h4=$_POST['h4'];
	 $zhuozhe=$_POST['zhuozhe'];
	 $date=$_POST['date'];
	 $yue=$_POST['yue'];
	 $ri=$_POST['ri'];
	 $title=$_POST['title'];
	 $new1=$_POST['new1'];
	 $new2=$_POST['new2'];
	 $new3=$_POST['new3'];
	 $new4=$_POST['new4'];
	 $new5=$_POST['new5'];
 	 $sql1="select * from xinxi order by id desc";
	 $result1=mysql_query($sql1);
	 $num=mysql_num_rows($result1)+1;//数据总条数
	 $sql="insert into myby.xinxi(id,h4,zhuozhe,date,yue,ri,title,new1,new2,new3,new4,new5)
	 values('$num','$h4','$zhuozhe','$yue','$ri','$title','$new1','$new2','$new3','$new4','$new5')";
	 $result=mysql_query($sql); 
   echo "<script>alert('添加成功');window.close();</script>";

 ?>
</body>
</html>