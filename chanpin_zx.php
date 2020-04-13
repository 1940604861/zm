<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/chan_li.css">
<link rel="stylesheet" type="text/css" href="css/ind.css">
<script src="JS/jquery-3.4.1.min.js"></script>
<script src="JS/slide.js" ></script>
<?php  
include("conn/conn.php");
include("chanping_sql.php");
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
 <ol>产品分类</ol>
 <li>光源电器</li>
 <li>家居照明</li>
 <li>商业照明</li>
 <li>户外照明</li>
 <li>工程照明</li>
 </ul>
 <img src="img/erixian_1.jpg" width="200px" height="85px" alt="图片" id="img_1">
 <img src="img/kefu_1.jpg" width="200px" height="85px" alt="图片" id="img_2">
 <img src="img/renli.jpg" width="200px" height="85px" alt="图片" id="img_2">
 
</div>

<div class="san_right">
<div class="ct">
<?php $x=1;while($rows_11=mysql_fetch_array($result_11)){?>
<a href="chanpin_li.php?id=<?php echo $rows_11['id'];?>">
<div class="ct_1">
<img src="<?php $fileimg="img_guangyuan/".$rows_11['img']; echo $fileimg; ?>">
<p><?php echo $rows_11['name']; ?></p>
   </div> 
   </a><?php $x++;} ?> 
   </div>
   
<div class="ct">
<?php $x=1;while($rows_2=mysql_fetch_array($result_2)){?>
<a href="chanpin_jia.php?id=<?php echo $rows_2['id'];?>">
<div class="ct_1">
<img src="<?php $fileimg="img_guangyuan/".$rows_2['img']; echo $fileimg; ?>">
<p><?php echo $rows_2['name']; ?></p>
   </div> </a><?php $x++;} ?> 
</div>

<div class="ct">
<?php $x=1;while($rows_3=mysql_fetch_array($result_3)){?>
<div class="ct_1">
<img src="<?php $fileimg="img_guangyuan/".$rows_3['img']; echo $fileimg; ?>">
<p><?php echo $rows_3['name']; ?></p>
   </div> <?php $x++;} ?> 
</div>

<div class="ct">
<?php $x=1;while($rows_4=mysql_fetch_array($result_4)){?>
<div class="ct_1">
<img src="<?php $fileimg="img_guangyuan/".$rows_4['img']; echo $fileimg; ?>">
<p><?php echo $rows_4['name']; ?></p>
   </div> <?php $x++;} ?> 
</div>

<div class="ct">
<?php $x=1;while($rows_5=mysql_fetch_array($result_5)){?>
<div class="ct_1">
<img src="<?php $fileimg="img_guangyuan/".$rows_5['img']; echo $fileimg; ?>">
<p><?php echo $rows_5['name']; ?></p>
   </div> <?php $x++;} ?> 
</div>


<div class="san_right_1">
<div class="san_right_1_2"><img src="<?php echo $fileimg_zx; ?>" width="300px" height="300px;"></div>
<div class="san_right_1_3">
<h4>产品名称：<?php echo $rows_zx['name']; ?></h4>
<p><?php  echo $rows_zx['new']; ?></p>
</div>  <!--.san_righ_3t-->   
<div class="prev_next">
<p>上一篇：<a href="chanpin_zx.php?id=<?php echo $rows_zx_1['id'];?>"><?php echo $rows_zx_1['name'];?></a></p>
<p>下一篇：<a href="chanpin_zx.php?id=<?php echo $rows_zx_2['id'];?>"><?php echo $rows_zx_2['name'];?></a></p>
</div>
</div><!--.san_righ_1--> 

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
	  
	  
	  $('.ct').hide();
	var hdw=$('.san_left ul li');
	
	hdw.click(function() {
		$(this).addClass('one')
		  .siblings().removeClass('one');
		  
		 
		  $('.ct').eq(hdw.index(this)).show()
		  .siblings().hide();
		  
		  
		  
    });

});




</script>