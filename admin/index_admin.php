<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="css/admin.css">
<script src="../JS/jquery-3.4.1.min.js"></script>
</head>

<body>
<div class="zong">
<div class="top">
<p>后台管理系统<p>
<div class="top_1"><img src="img/top_4.jpg"><a href="../index.php">退出</a></div>
<div class="top_2"><img src="img/top_3.jpg" width="34px" height="42px"><a href="index_admin_edit.php" target="_blank">修改密码</a></div>
</div><!--top-->
<div class="zong_left_right">
<div class="left">
<div class="left_top">
<img src="img/left_1.jpg">
<h3>功能导航条</h3>
</div>
<h4 class="hdw"  id="d1">产品中心<samp class="acc"></samp></h4>
<p class="child_d1"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"1";?>">全部产品</a></p>
<p class="child_d1"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"2";?>">光源电器</a></p>
<p class="child_d1"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"3";?>">家具照明</a></p>

<h4 class="hdw" id="d2">新闻中心<samp class="acc"></samp></h4>
<p class="child_d2"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"7";?>">公司新闻</a></p>
<p class="child_d2"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"8";?>">行业动态</a></p>
<p class="child_d2"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"9";?>">综合信息</a></p>

<h4 class="hdw" id="d3">应用领域<samp class="acc"></samp></h4>
<p class="child_d3"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"10";?>">应用领域</a></p>

<h4 class="hdw" id="d4">人才中心<samp class="acc"></samp></h4>
<p class="child_d4"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"11";?>">招聘人才</a></p>
<p class="child_d4"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"12";?>">求职人员</a></p>

<h4 class="hdw" id="d5">联系我们<samp class="acc"></samp></h4>
<p class="child_d5"><img src="img/left_3.jpg"><a href="index_admin.php?y=<?php echo"13";?>">反馈意见</a></p>
</div><!--left-->
 <div class="right">
   <?php
     switch(@$_GET['y']){
		        case "1":
		  include"index_admin_1.php";
		  break;
		        case "2":
		  include"index_admin_2.php";
		  break;
		  		case "3":
		  include"index_admin_3.php";
		  break;
		  
		  		case "7":
		  include"index_admin_7.php";
		  break;
		  		case "8":
		  include"index_admin_8.php";
		  break;
		  		case "9":
		  include"index_admin_9.php";
		  break;
		  		case "10":
		  include"index_admin_10.php";
		  break;
		  		case "11":
		  include"index_admin_11.php";
		  break;
		  		case "12":
		  include"index_admin_12.php";
		  break;	
		  		case "13":
		  include"index_admin_13.php";
		  break;
		  }
   
   
   
   ?>
  </div>
  </div><!--zong_left_right-->




<div class="wei">
<p>Copyright © 永久 All Rights Reserved Dz照明有限公司</p>
</div>
</div><!--zong-->
</body>
</html>
<script>
  $(document).ready(function(e) {
	  
		$('.hdw:eq(0)').addClass('one');
		$('.left p').hide();
		var dd=$('.left p');
		var dd=$('.hdw');
		
		dd.click(function(){
			$('.acc').eq(dd.index(this)).toggleClass("bcc");
			
		});
		
	
	$('.hdw').click(function() {
		
		$(this).addClass('one')
		  .siblings().removeClass('one');
		  
		  $(this).toggleClass("")
		 .siblings('.child_'+this.id).toggle();
		 
		 
		   
        
    })/*.click();*///加上这个就显示合并 不加就是展开
	
});

</script>