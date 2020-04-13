<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php 
include"../conn/conn.php";
	$name=$_POST['name'];//取得提交的用户名值
    $pwd=$_POST['pwd'];//取得提交的密码值
	$sql="select * from myby.admin where name='$name' and pwd='$pwd'";
	 $result=mysql_query($sql);
	 $num=mysql_num_rows($result);
	if($num==null){
		 echo "<script>alert('用户或密码错误。。');location.href='index.php';</script>";
	}else{
		echo "<script>alert('正常登陆后台。');location.href='index_admin.php';</script>";
		
	}

?>
</body>
</html>