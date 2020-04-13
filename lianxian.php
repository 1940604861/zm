<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">

<title>无标题文档</title>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<link rel="stylesheet" type="text/css" href="css/lianxi.css">
<link rel="stylesheet" type="text/css" href="css/ind.css">
<script src="JS/jquery-3.4.1.min.js"></script>
<script src="JS/slide.js" ></script>
<script src="ditu.js"></script>
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

 <!--百度地图容器-->
  <div style="width:900px;height:400px;border:#ccc solid 1px;" id="dituContent"></div>




<div class="san_right_er">
<form action="lianxi_addok.php" method="post" name="form1">
   <table>
      <tr>
        <td colspan="2" style="font-weight:bold; text-align:center; font-size:18px">留言栏</td>
      </tr>
      
      <tr>
        <td class="td_1">用户名：</td>
        <td ><input type="text" name="name" size="30"></td>
      </tr>
      
      <tr>
        <td class="td_1">联系电话：</td>
        <td ><input type="text" name="dianhua" size="30"></td>
      </tr>
      
      <tr>
        <td class="td_1">反馈主题：</td>
        <td ><textarea name="zhuti" cols="35" rows="4"></textarea></td>
      </tr> 
      <tr>
        <td colspan="2" style="padding-left:90px"><input type="submit" value="提交"></td>
      </tr>  
   
   </table>
</form>

</div>
<div class="san_right_san">
     <h4 style=" padding-left:50px;">联系方式</h4>
    <p><b>联系人：</b>吴先生</p>
    <p><b>联系电话：</b>152-198-666-66</p>
    <p><b>联系QQ：</b>12345678</p>
    <p><b>联系邮箱：</b>12345678@qq.com</p>
    <p><b>公司地址：</b>汕尾市 城区 香洲街道 A区</p>
</div>
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

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(115.375726,22.798272);//定义一个中心点坐标
        map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_ZOOM});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_TOP_LEFT,isOpen:0});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"汕尾职业技术学院",content:"联系人：吴先生<br/>联系电话：152198xxx-xx",point:"115.374361|22.799604",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
</html>