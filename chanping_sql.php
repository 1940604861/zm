<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$id=@$_GET['id'];

$sql_11="select * from guang order by id desc limit 0,12 ";
$result_11=mysql_query($sql_11);

$sql_2="select * from jia order by id desc limit 0,12 ";
$result_2=mysql_query($sql_2);


$sql_3="select * from shang order by id desc limit 0,12 ";
$result_3=mysql_query($sql_3);

$sql_4="select * from hui order by id desc limit 0,12 ";
$result_4=mysql_query($sql_4);

$sql_5="select * from gong order by id desc  limit 0,12";
$result_5=mysql_query($sql_5);

/*子页面数据库*/
$sql_li="select * from guang where id='$id'";
$result_li=mysql_query($sql_li);
$rows_li=mysql_fetch_array($result_li);

$sql_jia="select * from jia where id='$id'";
$result_jia=mysql_query($sql_jia);
$rows_jia=mysql_fetch_array($result_jia);

$sql_zx="select * from zx where id='$id'";
$result_zx=mysql_query($sql_zx);
$rows_zx=mysql_fetch_array($result_zx);

$sql_yy_li="select * from yingyong where id='$id'";
$result_yy_li=mysql_query($sql_yy_li);
$rows_yy_li=mysql_fetch_array($result_yy_li);


/*上下页面数据库*/

/*数据库guang */
$sql_li_1="select * from guang where id='$id'-1";  //实现上一篇
$result_li_1=mysql_query($sql_li_1);
$rows_li_1=mysql_fetch_array($result_li_1);


 $sql_li_2="select * from guang where id='$id'+1";  //实现下一篇
$result_li_2=mysql_query($sql_li_2);
$rows_li_2=mysql_fetch_array($result_li_2);

/*数据库jia */
$sql_jia_1="select * from jia where id='$id'-1";  //实现上一篇
$result_jia_1=mysql_query($sql_jia_1);
$rows_jia_1=mysql_fetch_array($result_jia_1);


 $sql_jia_2="select * from jia where id='$id'+1";  //实现下一篇
$result_jia_2=mysql_query($sql_jia_2);
$rows_jia_2=mysql_fetch_array($result_jia_2);

/*数据库zx */
$sql_zx_1="select * from zx where id='$id'-1";  //实现上一篇
$result_zx_1=mysql_query($sql_zx_1);
$rows_zx_1=mysql_fetch_array($result_zx_1);


 $sql_zx_2="select * from zx where id='$id'+1";  //实现下一篇
$result_zx_2=mysql_query($sql_zx_2);
$rows_zx_2=mysql_fetch_array($result_zx_2);

/*数据库yingyong */
$sql_yy_1="select * from yingyong where id='$id'-1";  //实现上一篇
$result_yy_1=mysql_query($sql_yy_1);
$rows_yy_1=mysql_fetch_array($result_yy_1);


 $sql_yy_2="select * from yingyong where id='$id'+1";  //实现下一篇
$result_yy_2=mysql_query($sql_yy_2);
$rows_yy_2=mysql_fetch_array($result_yy_2);


/*图片面数据库*/
$fileimg_li="img_guangyuan/".$rows_li['img'];
$fileimg_jia="img_guangyuan/".$rows_jia['img'];
$fileimg_zx="img_zhongxin/".$rows_zx['img'];
$fileimg_yy_li="img_yingyong/".$rows_yy_li['img'];

?>
</body>
</html>