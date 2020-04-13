<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/ind.css">
<link rel="stylesheet" type="text/css" href="css/ind_2.css">
<script src="JS/jquery-3.4.1.min.js"></script>
<script src="JS/slide.js" ></script>

</head>

<body>
<div class="zong">
  <div class="top_1">
    <p>欢迎访问Dz照明有限公司官方网站！</p>
    <a href="admin/index.php"><u>登入</u></a> </div>
  <div class="top_2"> <img src="img/top_1.png">
    <h2>咨询热线:152-198-xxxxx</h2>
  </div>
  
  <div class="caidan">
    <ul>
      <li><a href="index.php">网站首页</a></li>
      <li><a href="chanpin.php">产品中心</a></li>
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
<div class="conten2_bottom"></div>

<div class="zhuti">
<h1>智能照明家居</h1>
<h4>Smart light home</h4>
<p>未来五年，智能照明家居将形成一个亿万级的市场规模，全球智能设备数量将达近300亿 在不</p>
<p id="p_2">远未来，没有智能照明家居系统的住宅将会像今天不能上网的的住宅一样不符合潮流</p>
<img src="img/zhong_1.png" width="100%" height="230px">
</div>

  <div class="zhuti_2">
<h1>照明应用</h1>
<h4>Lighting applications</h4>
<p>致力于提供优质的智慧型智能照明家居平台 运用领域广，小区、别墅、高端楼宇等等，让科技</p>
<p id="p_2">之光遍布每一个角落</p>
  </div>
  
<div class="zhuti_3_4">
<div class="zhuti_3">
<div class="imgs_1"></div>
<div class="imgs_2"></div>
<div class="imgs_3"></div>
</div> 

<div class="zhuti_4">
<div class="imgs_4"></div>
<div class="imgs_5"></div>
<div class="imgs_6"></div>
</div> 
</div>
<div class="bottom">
<h1>关于我们</h1>
<h4>About us</h4>
<div class="bottom_left">
   <div class="bottom_left_2">
<h2>公司简介</h2>
   </div>
<div class="bottom_center">
  <h4>创新科技 普及节能 </h4>
  <p>
   &nbsp;&nbsp;&nbsp;&nbsp;Dz照明有限公司创立于2019年，一直致力于研发、生产、推
  广高品质的绿色节能照明产品，为客户提供全方位的照
  明解决方案和专业服务，是中国极具综合竞争实力的照明品牌
  之一。公司总部某某照明有限公司位于汕尾，另外在广州、肇庆、重庆等
  地拥有5大生产基地，年生产LED、荧光灯等照明产品上亿套，
  涉及商业照明、办公照明、工业照明、户外照明、家居照明等领域.......
  </p>
   </div>
  </div>
  <img src="img/bottom_1.jpg" alt="这是一张图片" id="img_bottom"> 
  <img src="img/1497872392.png" alt="这是一张图片" id="img_bottom_2">
</div> 

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

<div class="liaotian"></div>
<div id="to_top_1" ></div>
  
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
	  $('.liaotian').click(function(e) {
         window.location.href="liaotian.html";
    });
	  

});
var oTop = document.getElementById("to_top_1");
oTop.onclick = function(){
 document.body.scrollTop = document.documentElement.scrollTop = 0;
 }
</script>
