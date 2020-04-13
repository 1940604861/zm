<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
table {
	margin: auto;
	text-align: center;
}
tr {
	height: 30px;
}
a{color:#F00; font-size:15px; line-height:25px;}
</style>
</head>

<body>
<?php
 include_once("../conn/conn.php");//插入一个文
 
$sql="select * from lianxi order by name desc ";
$result=mysql_query($sql);
$cols=mysql_num_fields($result);//总列数
$total=mysql_num_rows($result);//总条数
$num=8;//每页显示条数
$url="mysql.php";//请求的URL
$cpage=isset($_GET["page"])?$_GET["page"]:1;//当前页
$pagenum=ceil($total/$num);//总页数
$offset=($cpage-1)*$num;//开始去数据的位置
$sql="select * from lianxi limit {$offset},{$num}";
$result=mysql_query($sql);
$start=$offset+1;//开始记录页
$end=($cpage==$pagenum)?$total : ($cpage*$num);//结束记录页
$next=($cpage==$pagenum)? 0:($cpage+1);//下一页
$prev=($cpage==1)? 0:($cpage-1);//前一页
 
echo '<table align="center" width="1090px" border="2px" bordercolor="#6699CC" >';
    echo'<tr>';
		 echo'<td colspan="3">用户意见</td>';
         echo'</tr>';
		 
         echo'<tr style="font-weight:bold;">';
		 echo'<td>用户昵称</td>';
		 echo'<td>联系方式</td>';
		 echo'<td>反馈意见</td>';
		 echo'</tr>';
		 
		 echo'<tr>';
$x=1;while($row=mysql_fetch_array($result)){ ?>
      <td><?php echo $row['name']; ?></td>
      <td><?php  echo $row['dianhua'];?></td>
      <td><?php  echo $row['zhuti'];?></td>
<?php echo '</tr>';$x++;}
echo '<tr><td colspan="'.$cols.'" align="right">';
echo "共<b>$total</b>条记录，本页显示<b>{$start}-{$end}</b> {$cpage}/{$pagenum}";
	if($cpage==1)
		echo "  首页  ";
	else
		echo "  <a href='index_admin.php?y=13&page=1'>首页</a>  ";
	if($prev)
		echo "  <a href='index_admin.php?y=13&page={$prev}'>上一页</a>  ";
	else
		echo "  上一页  ";
	if($next)
		echo "  <a href='index_admin.php?y=13&page={$next}'>下一页</a>  ";
	else
		echo "  下一页  ";
	if($cpage==$pagenum)
		echo "  尾页  ";
	else
		echo "  <a href='index_admin.php?y=13&page={$pagenum}'>尾页</a>  ";
echo '</td></tr>';
echo '</table>';
mysql_close();
?>
</body>
</html>