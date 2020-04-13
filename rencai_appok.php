<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
  include"conn/conn.php";
     $name=$_POST['name'];
	 $xing=$_POST['xing'];
	 $chu=$_POST['chu'];
	 $hun=$_POST['hun'];
	 $yuanxiao=$_POST['yuanxiao'];
	 $zui=$_POST['zui'];
	 $zhuanye=$_POST['zhuanye'];
	 $shijian=$_POST['shijian'];
	 $lian=$_POST['lian'];
	 $tong=$_POST['tong'];
	 $zhuan=$_POST['zhuan'];
	 $gong=$_POST['gong'];
 	/* $sql_zp2="select * from zhaopin order by id desc";
	 $result_zp2=mysql_query($sql_zp2);
	$num=mysql_num_rows($result_zp2)+1;//数据总条数
$sql_zp3="insert into myby.zhaopin(id,name,xingbie,chusheng,hunyin,yuanxiao,zuigaoxueli,zhuanye,shijian,dianhua,zhuzhi,techang,gongzuojingli)
values('$num','$name','$xingbie','$chusheng','$hunyin','$yuanxiao','$zuigaoxueli','$zhuanye','$shijian','$dianhua','$zhuzhi','$techang','$gongzuojingli')";
$result_zp3=mysql_query($sql_zp3); */

$exec="insert into myby.zhaopin(name,xing,chu,hun,yuanxiao,zui,zhuanye,shijian,lian,tong,zhuan,gong)
values('$name','$xing','$chu','$hun','$yuanxiao','$zui','$zhuanye','$shijian','$lian','$tong','$zhuan','$gong')";
$result=mysql_query($exec);

echo "<script>alert('添加成功');location.href='rencai.php';</script>";
 mysql_close();
   ?>
</body>
</html>