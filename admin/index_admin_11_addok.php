<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

 <?php
  include"conn/conn.php";
     $name=$_POST['name'];
	 $didian=$_POST['didian'];
	 $renshu=$_POST['renshu'];
	 $zhiwei=$_POST['zhiwei'];
	 $gongzuojingyan=$_POST['gongzuojingyan'];
	 $date=$_POST['date'];
	 $new1=$_POST['new1'];
	 $new2=$_POST['new2'];
	 $lianxiren=$_POST['lianxiren'];
	 $dianhua=$_POST['dianhua'];
$exec="insert into myby.rencai(name,didian,renshu,zhiwei,gongzuojingyan,date,new1,new2,lianxiren,dianhua)
values('$name','$didian','$renshu','$zhiwei','$gongzuojingyan','$date','$new1','$new2','$lianxiren','$dianhua')";
$result=mysql_query($exec);

echo "<script>alert('添加成功');window.close();</script>";

   ?>
</body>
</html>