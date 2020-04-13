<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/rencai.css">
<link rel="stylesheet" type="text/css" href="css/ind.css">
<script src="JS/jquery-3.4.1.min.js"></script>
<script src="JS/slide.js" ></script>
<?php  
include("conn/conn.php");

?>
</head>

<body>
<div class="zong">
  <div class="top_1">
    <p>欢迎访问Dz照明有限公司官方网站！</p>
   <a href="admin/index.php"><u>登入</u></a> </div>
  <div class="top_2"> <img src="img/top_1.png">
    <h2>咨询热线:152-198-xxxxx</h2>
  </div>

  <div class="caidan" >
    <ul>
      <li><a href="index.php">网站首页</a></li>
      <li ><a href="chanpin.php">产品中心</a></li>
      <li><a href="xinwen.php">新闻中心</a></li>
      <li><a href="yingyong.php">应用领域</a></li>
      <li><a href="rencai.php">人才中心</a></li>
      <li><a href="lianxian.php">联系我们</a></li>
    </ul>
  </div>
  
  <div class="conten2">
    <div class="box">
      <div class="box-1">
        <ul>
          <li> <img src="img/t1.png" alt="这里是第一场图片"></img> </li>
          <li> <img src="img/t2.png" alt="这里是第二张图片"></img> </li>
          <li> <img src="img/t3.png" alt="这里是第三张图片"></img> </li>
          <li> <img src="img/t4.png" alt="这里是第一场图片"></img> </li>
          <li> <img src="img/t5.png" alt="这里是第一场图片"></img> </li>
        </ul>
      </div>
      <div class="box-2">
        <ul>
        </ul>
      </div>
      <div class="box-3"> 
      <span class="prev"> < </span> 
      <span class="next"> > </span> 
      </div>
    </div>
</div>

<div class="conten2_bottom"></div><!-- 轮播图下面界线-->

<div class="san_zong">

<div class="san_left">
<a href="chanpin.php"><ul>
 <ol>产品分类</ol>
 <li>光源电器</li>
 <li>家居照明</li>
 <li>商业照明</li>
 <li>户外照明</li>
 <li>工程照明</li>
 </ul></a>
 <img src="img/kefu_1.jpg" width="200px" height="85px" alt="图片" id="img_2">
 <img src="img/renli.jpg" width="200px" height="85px" alt="图片" id="img_2">
 
</div>

<div class="san_right">
<div class="san_right_1">



<?php
$sql="select * from rencai ";
$result=mysql_query($sql);
$cols=mysql_num_fields($result);//总列数
$total=mysql_num_rows($result);//总条数
$num=5;//每页显示条数
$url="mysql.php";//请求的URL
$cpage=isset($_GET["page"])?$_GET["page"]:1;//当前页
$pagenum=ceil($total/$num);//总页数
$offset=($cpage-1)*$num;//开始去数据的位置
$sql="select * from rencai limit {$offset},{$num}";
$result=mysql_query($sql);
$start=$offset+1;//开始记录页
$end=($cpage==$pagenum)?$total : ($cpage*$num);//结束记录页
$next=($cpage==$pagenum)? 0:($cpage+1);//下一页
$prev=($cpage==1)? 0:($cpage-1);//前一页
 
echo '<table  width="900px" >';
		 
     echo'<tr class="tr_1">';
		 echo'<td class="td_1">招聘职位</td>';
		 echo'<td  style="color:#000">工作地点</td>';
		 echo'<td  style="color:#000">招聘人数</td>';
		 echo'<td  style="color:#000">详细</td>'; 
	echo '</tr>';
	
	echo '<tr>';/* 第一行线 */
         echo '<td colspan="4"><hr style="border:#CCC 1px  solid" > </td>';
   echo '</tr>';

     $x=1;while($ro=mysql_fetch_array($result)){ ?>
   <tr>
		 <td class="td_1">       <?php echo $ro["name"];   ?></td>
		 <td  style="color:#000"><?php echo $ro["didian"]; ?></td>
		 <td  style="color:#000"><?php echo $ro["renshu"]; ?></td>
		 <td  style="color:#000"><a href="rencai_li.php?id=<?php echo $ro['id'];?>">详细</a></td>
   </tr>
<?php $x++;}
	
    echo '<tr>';/* 第二行线 */
         echo '<td colspan="4"><hr style="border:#CCC 1px  solid" > </td>';
    echo '</tr>';
   
   
   

echo '<tr><td colspan="'.$cols.'"  style="text-align:center">';
echo "共<b>$total</b>条记录，本页显示<b>{$start}-{$end}</b> {$cpage}/{$pagenum}";
	if($cpage==1)
		echo "  首页  ";
	else
		echo "  <a href='rencai.php?page=1'>首页</a>  ";
	if($prev)
		echo "  <a href='rencai.php?page={$prev}'>上一页</a>  ";
	else
		echo "  上一页  ";
	if($next)
		echo "  <a href='rencai.php?&page={$next}'>下一页</a>  ";
	else
		echo "  下一页  ";
	if($cpage==$pagenum)
		echo "  尾页  ";
	else
		echo "  <a href='rencai.php?page={$pagenum}'>尾页</a>  ";
echo '</td></tr>';
echo '</table>';
mysql_close();
?>


</div><!--.san_right_1--> 


</div><!--.san_right-->   
</div><!--.san_zong-->
<div class="weibu">
<div class="weibu_h2">
<h2>免费热线电话:152-198-xxxxx</h2>
</div>
<hr style="width:70%; margin:auto; background:#FFF; color:#FFF">

<div class="weibu_3">
<img src="img/weibu_2.jpg" alt="图片" style="padding-left:20%; float:left;">
<p>Copyright © 永久 All Rights Reserved Dz照明有限公司</p>
</div>

</div> 
  
</div>
</body>
</html>
<script>
$(document).ready(function(e) {
	
	var lunbo=$('.conten2');
	
	  lunbo.hover(function(){
		  $('.box-3 span').show();
	  },function(){
		  $('.box-3 span').hide();
	  });
	  
	 

});




</script>