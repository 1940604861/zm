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
	 $pwd=$_POST['img'];
	 $new=$_POST['new'];
     $sql="update myby.guang set name='$name',img='$img',new='$new'";
	 $result=mysql_query($sql); 
     echo "<script>alert('数据修改成功');window.close();</script>";
 ?>
</body>
</html>