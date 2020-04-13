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
 
$sql="select * from xinxi order by id desc ";
$result=mysql_query($sql);
$cols=mysql_num_fields($result);//总列数
$total=mysql_num_rows($result);//总条数
$num=8;//每页显示条数
$url="mysql.php";//请求的URL
$cpage=isset($_GET["page"])?$_GET["page"]:1;//当前页
$pagenum=ceil($total/$num);//总页数
$offset=($cpage-1)*$num;//开始去数据的位置
$sql="select * from xinxi limit {$offset},{$num}";
$result=mysql_query($sql);
$start=$offset+1;//开始记录页
$end=($cpage==$pagenum)?$total : ($cpage*$num);//结束记录页
$next=($cpage==$pagenum)? 0:($cpage+1);//下一页
$prev=($cpage==1)? 0:($cpage-1);//前一页
 
echo '<table align="center" width="1090px" border="2px" bordercolor="#6699CC" >';
    echo'<tr>';
		 echo'<td colspan="4">综合信息</td>';
		 echo'<td ><a href="index_admin_9_add.php?id=<?php echo $row[0];?>" target="_blank">添加</a></td>';
         echo'</tr>';
		 
         echo'<tr style="font-weight:bold;">';
		 echo'<td>ID</td>';
		 echo'<td>标题</td>';
		 echo'<td>时间</td>';
		 echo'<td>内容</td>';
		 echo'<td>设置</td>';
		 echo'</tr>';
		 
		 echo'<tr>';
$x=1;while($row=mysql_fetch_array($result)){ ?>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['h4']; ?></td>
      <td><?php echo $row['data']; ?></td>
      <td><?php  
     if(strlen($row['title'])>50){
	 echo mb_substr($row['title'],0,49,"utf8")."......";
 }else{
	   echo $row['title'];
    }
?></td>
	 <td>
	      <a href="index_admin_9_del.php?id=<?php echo $row[0];?>" target="_blank">删除</a>
     </td>
<?php echo '</tr>';$x++;}
echo '<tr><td colspan="'.$cols.'" align="right">';
echo "共<b>$total</b>条记录，本页显示<b>{$start}-{$end}</b> {$cpage}/{$pagenum}";
	if($cpage==1)
		echo "  首页  ";
	else
		echo "  <a href='index_admin.php?y=9&page=1'>首页</a>  ";
	if($prev)
		echo "  <a href='index_admin.php?y=9&page={$prev}'>上一页</a>  ";
	else
		echo "  上一页  ";
	if($next)
		echo "  <a href='index_admin.php?y=9&page={$next}'>下一页</a>  ";
	else
		echo "  下一页  ";
	if($cpage==$pagenum)
		echo "  尾页  ";
	else
		echo "  <a href='index_admin.php?y=9&page={$pagenum}'>尾页</a>  ";
echo '</td></tr>';
echo '</table>';
mysql_close();
?>
</body>
</html>