<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/xinwen.css">
<link rel="stylesheet" type="text/css" href="css/ind.css">
<script src="JS/jquery-3.4.1.min.js"></script>
<script src="JS/slide.js" ></script>
<?php  
include("conn/conn.php");
$sql="select * from xinwen order by id desc limit 0,8";
$result=mysql_query($sql);

$sql_2="select * from dongtai order by id desc limit 0,8";
$result_2=mysql_query($sql_2);

$sql_3="select * from xinxi order by id desc limit 0,8";
$result_3=mysql_query($sql_3);


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
<ul>
 <ol>文章分类</ol>
 <li class="one">公司新闻</li>
 <li>行业动态</li>
 <li>综合信息</li>
 </ul>
 <img src="img/erixian_1.jpg" width="200px" height="85px" alt="图片" id="img_1">
 <img src="img/kefu_1.jpg" width="200px" height="85px" alt="图片" id="img_2">
 <img src="img/renli.jpg" width="200px" height="85px" alt="图片" id="img_2">
 
</div>

<div class="san_right">

<div class="ct">
<?php $x=1;while($rows=mysql_fetch_array($result)){   ?>
<a href="xinwen_xw.php?id=<?php echo $rows['id']  ?>">
<div class="ct_1">
<div class="ct_1-2">
<div class="ct_2-3">
<h4><?php echo $rows['ri'];?></h4>
<p><?php echo $rows['yue'];?></p>
</div><!--.ct_2-3-->
<div class="ct_2_h4_p">
<h4><?php echo $rows['h4'];?></h4>
<p><?php  
     if(strlen($rows['title'])>30){
	 echo mb_substr($rows['title'],0,29,"utf8")."...";
 }else{
	   echo $rows['title'];
    }

?></p>
</div>
</div><!--.ct_1-2--> 

</div><!--.ct_1--> 
<hr style=" border:1px #CCCCCC dashed">
</a>
<?php $x++;}?>
</div><!--.ct-->

<div class="ct">
<?php $x=1;while($rows_2=mysql_fetch_array($result_2)){   ?>
<a href="xinwen_dt.php?id=<?php echo $rows_2['id']  ?>">
<div class="ct_1">
<div class="ct_1-2">
<div class="ct_2-3">
<h4><?php echo $rows_2['ri'];?></h4>
<p><?php echo $rows_2['yue'];?></p>
</div><!--.ct_2-3-->
<div class="ct_2_h4_p">
<h4><?php echo $rows_2['h4'];?></h4>
<p><?php  
     if(strlen($rows_2['title'])>30){
	 echo mb_substr($rows_2['title'],0,29,"utf8")."...";
 }else{
	   echo $rows_2['title'];
    }
?></p>
</div>
</div><!--.ct_1-2--> 

</div><!--.ct_1--> 
<hr style=" border:1px #CCCCCC dashed">
</a>
<?php $x++;}?>
</div><!--.ct-->

<div class="ct">
<?php $x=1;while($rows_3=mysql_fetch_array($result_3)){   ?>
<a href="xinwen_xx.php?id=<?php echo $rows_3['id']  ?>">
<div class="ct_1">
<div class="ct_1-2">
<div class="ct_2-3">
<h4><?php echo $rows_3['ri'];?></h4>
<p><?php echo $rows_3['yue'];?></p>
</div><!--.ct_2-3-->
<div class="ct_2_h4_p">
<h4><?php echo $rows_3['h4'];?></h4>
<p><?php  
     if(strlen($rows_3['title'])>30){
	 echo mb_substr($rows_3['title'],0,29,"utf8")."...";
 }else{
	   echo $rows_3['title'];
    }
?></p>
</div>
</div><!--.ct_1-2--> 

</div><!--.ct_1--> 
<hr style=" border:1px #CCCCCC dashed">
</a>
<?php $x++;}?>
</div><!--.ct-->




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
	  
	  
	  $('.san_right .ct:gt(0)').hide();
	var hdw=$('.san_left ul li');
	
	hdw.click(function() {
		$(this).addClass('one')
		  .siblings().removeClass('one');
		  
		 
		  $('.san_right .ct').eq(hdw.index(this)).show()
		  .siblings().hide();
		 
		  
		  
		  
    });

});




</script>