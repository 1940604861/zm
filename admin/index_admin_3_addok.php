<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
  include"../conn/conn.php";
	 $name=$_POST['name'];
	 $img=$_POST['img'];
	 $new=$_POST['new'];
 	 $sql1="select * from jia order by id desc";
	 $result1=mysql_query($sql1);
	 $num=mysql_num_rows($result1)+1;//数据总条数
	 $sql="insert into myby.guang(id,name,img,new)values('$num','$name','$img','$new')";
	 $result=mysql_query($sql); 
   echo "<script>alert('添加成功');window.close();</script>";

 ?>
</body>
</html>