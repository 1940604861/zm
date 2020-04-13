<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
 include"../conn/conn.php";
 $id=$_GET['id'];
 $sql="delete from yingyong where id='$id'";
  mysql_query($sql);
  echo "<script>alert('删除成功');window.close();</script>";
 ?>
</body>
</html>