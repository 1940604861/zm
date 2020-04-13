<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$id=@$_GET['id'];
/*  第一阶段 */
$sql="select * from xinwen order by id desc limit 0,8";
$result=mysql_query($sql);

$sql_2="select * from dongtai order by id desc limit 0,8";
$result_2=mysql_query($sql_2);

$sql_3="select * from xinxi order by id desc limit 0,8";
$result_3=mysql_query($sql_3);



/*  第二阶段 */
$sql_xw="select * from xinwen where id='$id' ";
$result_xw=mysql_query($sql_xw);
$rows_xw=mysql_fetch_array($result_xw);


$sql_dt="select * from dongtai where id='$id' ";
$result_dt=mysql_query($sql_dt);
$rows_dt=mysql_fetch_array($result_dt);

$sql_xx="select * from xinxi where id='$id' ";
$result_xx=mysql_query($sql_xx);
$rows_xx=mysql_fetch_array($result_xx);

/*  第三阶段 */
$sql_xw_1="select * from xinwen where id='$id'-1";  //实现上一篇
$result_xw_1=mysql_query($sql_xw_1);
$rows_xw_1=mysql_fetch_array($result_xw_1);


 $sql_xw_2="select * from xinwen where id='$id'+1";  //实现下一篇
$result_xw_2=mysql_query($sql_xw_2);
$rows_xw_2=mysql_fetch_array($result_xw_2);



$sql_dt_1="select * from dongtai where id='$id'-1";  //实现上一篇
$result_dt_1=mysql_query($sql_dt_1);
$rows_dt_1=mysql_fetch_array($result_dt_1);


 $sql_dt_2="select * from dongtai where id='$id'+1";  //实现下一篇
$result_dt_2=mysql_query($sql_dt_2);
$rows_dt_2=mysql_fetch_array($result_dt_2);

$sql_xx_1="select * from xinxi where id='$id'-1";  //实现上一篇
$result_xx_1=mysql_query($sql_xx_1);
$rows_xx_1=mysql_fetch_array($result_xx_1);


 $sql_xx_2="select * from xinxi where id='$id'+1";  //实现下一篇
$result_xx_2=mysql_query($sql_xx_2);
$rows_xx_2=mysql_fetch_array($result_xx_2);


?>
</body>
</html>