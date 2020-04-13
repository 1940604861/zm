<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
include("conn/conn.php");
$name=$_POST['name'];
$dianhua=$_POST['dianhua'];
$zhuti=$_POST['zhuti'];
/* $sql_lx="select * from lianxi order by id desc";
$result_lx=mysql_query($sql_lx);
$num=mysql_num_rows($result_lx)+1;//数据总条数	
$sql_lx_a="insert into myby.lianxi(name,,dianhua,zhuti)
values('$num','$name','$dianhua','$zhuti')";
$result_lx_a=mysql_query($sql_lx_a); */

$exec="insert into lianxi(name,dianhua,zhuti)values('$name','$dianhua','$zhuti')";
$result=mysql_query($exec);

echo "<script>alert('添加成功');location.href='lianxian.php';</script>";
 mysql_close();
?>
</body>
</html>